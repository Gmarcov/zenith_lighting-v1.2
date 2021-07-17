<?php
require_once "../private/models/Tokens.php";
session_start();
if (isset($_SESSION['signup'])) {
    print_r($_SESSION['signup']);
    unset($_SESSION['signup']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf_token" content="<?php echo createToken(); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin/Signup</title>
</head>

<body>
    <h1>Sign in</h1>
    <form action="../private/controllers/Signin-up_Validation.php" method="post" id="in">
        <label for="">email</label> <input type="email" name="email" placeholder="email@example.com*" required>
        <label for="">Password</label> <input type="password" name="password" placeholder="********" required>
        <input type="submit" name="signin" value="Submit">
    </form>
    <h1>Sign up</h1>
    <form action="../private/controllers/Signin-up_Validation.php" method="POST" id="up">
        <label for="">Full Name</label> <input type="text" name="fullName" placeholder="Fullname*" required>
        <label for="">Email</label> <input type="email" name="email" placeholder="example@mail.com*" required>
        <label for="">pasword</label> <input type="password" name="password" placeholder="********" required>
        <label for="">Confirm password</label> <input type="password" name="confirm-password" placeholder="********"
            required>
        <input type="submit" name="signup" value="Submit">
    </form>
</body>

</html>