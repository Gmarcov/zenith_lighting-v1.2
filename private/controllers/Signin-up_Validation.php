<?php
session_start();
require_once "../models/Database_Connection.php";
require_once "../models/Functions_users.php";
require_once "../models/Functions_cart.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $errors = [];
    if (isset($_POST['signin'])) { // Signin
        // Get post infos
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Hundle user input
        if (!isset($_POST['email']) || strlen($_POST['email']) > 400 || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) { // Hundle email errors
            $errors[] = "Invalid email entered";
        } else if (!checkdnsrr(substr($_POST['email'], strpos($_POST['email'], '@') + 1), 'MX')) { // Check dns of the email
            $errors[] = "Invalid email DNS";
        }
        if (count($errors) == 0) {
            // Check if user exists
            $con = connect();
            $result = user_exist($con, "SELECT * FROM tutilisateurs WHERE user_email=?", $email);
            if ($result && $result->num_rows != 0) {
                // check if password match
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $data = $result->fetch_assoc();
                if (password_verify($password, $data['user_password'])) {
                    // Authentication succeded
                    // Stocker name dans une session
                    // Stocker id dans un cookie pour la connexion automatique
                    $_SESSION['name'] = $data['fullName'];
                    $_SESSION['user_id'] = $data['user_id'];
                    $cart = fetch_cart_id($con, 'SELECT * FROM cart WHERE user_id=?', $data['user_id']);
                    if (!empty($cart)) {
                        $_SESSION['mycart'] = $cart;
                    }
                    if ($_POST['stocker'] > 0) {
                        $id = $data['user_id'];
                        setcookie('user_id', $id, time() + 3600 * 24 * 365, '/');
                    }
                    // $_COOKIE['id'] = $data['user_id'];
                } else {
                    // Wrong password
                    $errors[] = "Wrong password!! Try again";
                }
            } else {
                $errors[] = "No registred user with the this email or password";
            }
        }
    } elseif (isset($_POST['signup'])) { // Sign up
        $errors = [];
        // Get post infos
        $fullName = $_POST['fullName'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Validate infos
        if (!isset($_POST['fullName']) || strlen($_POST['fullName']) > 400 || !preg_match('/^[a-zA-Z- ]+$/', $_POST['fullName'])) { // Hundle fullName errors
            $errors[] = "Invalid name entered. (Only use letters, spaces and hyphens)";
        }
        if (!isset($_POST['email']) || strlen($_POST['email']) > 400 || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) { // Hundle email errors
            $errors[] = "Invalid email entered";
        } else if (!checkdnsrr(substr($_POST['email'], strpos($_POST['email'], '@') + 1), 'MX')) { // Check dns of th email
            $errors[] = "Invalid email DNS";
        }
        //
        if (!isset($_POST['password']) || !preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[\~?!@#\$%\^&\*])(?=.{8,})/', $_POST['password'])) { // Hundle password errors
            $errors[] = "Password Must contain: <br>At least 8 caracters.<br> At least one lower case letter<br> At least one upper case letter.<br>
                At least one number. <br> At least one special character (~?!@#$%^&*) <br>
            ";
        } else if (!isset($_POST['confirm-password']) || $_POST['confirm-password'] !== $_POST['password']) { // Password == confirmed pass
            $errors[] = "Confirmed password doesn't match the password";
        }
        if (count($errors) == 0) {
            // Connect to database
            $con = connect();
            if ($con) {
                // Check if user already exists
                $result = user_exist($con, "SELECT user_id FROM tutilisateurs WHERE user_email=?", $email);
                if ($result && $result->num_rows == 0) {
                    // Actually create account
                    $hash = password_hash($password, PASSWORD_DEFAULT);
                    $id = insert_user($con, 'INSERT INTO tutilisateurs (user_email,user_password,fullName) VALUES (?,?,?)', $email, $hash, $fullName);
                    if ($id != -1) {
                        $errors[] = "User added succesfully! try to sign in now";
                    } else {
                        // Failed to insert into database
                        $errors[] = "Failed to insert into database";
                    }
                } else {
                    // This email already exists
                    $errors[] = "An account with this email already exists";
                }
            } else {
                //Unable to connect to the database
                $errors[] = "Unable to connect to database";
            }
        }
    }
    echo json_encode($errors);
} elseif (isset($_COOKIE['user_id'])) {
    // Connexion automatique
    $con = connect();
    $result = fetch_data_id($con, 'SELECT * FROM tutilisateurs WHERE user_id=?', $_COOKIE['user_id']);
    if ($result && $result->num_rows != 0) {
        // Stocker le nom dans une session plus redirection
        $data = $result->fetch_assoc();
        $_SESSION['name'] = $data['fullName'];
        header('Location: ../../public/index.php');
    }
} else {
    header('Location: ../../index.php');
}