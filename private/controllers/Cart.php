<?php
session_start();
require_once '../models/Database_Connection.php';
require_once '../models/Functions_products.php';
require_once '../models/Functions_cart.php';
if (isset($_POST['prod_id'])) {

    if ($_POST['action'] == "reomoveFromCart") {

        foreach ($_SESSION['mycart'] as $key => $value) {
            if ($value['prod_id'] == $_POST['prod_id']) {
                unset($_SESSION['mycart'][$key]);
            }
        }
    } elseif ($_POST['action'] == "addToCart") {
        if (isset($_SESSION['mycart'])) {

            $is_available = 0;

            foreach ($_SESSION['mycart'] as $key => $value) {

                if ($_SESSION['mycart'][$key]['prod_id'] == $_POST['prod_id']) {
                    $is_available++;
                    // $_SESSION['mycart'][$key]['qty'] = $_SESSION['mycart'][$key]['qty'] + $_POST['qty'];
                }
            }
            if ($is_available == 0) {
                $item_array = array(
                    'prod_id' => $_POST['prod_id'],
                    'name' => $_POST['name'],
                    'price' => $_POST['price'],
                    'img' => $_POST['img'],
                    'qty' => $_POST['qty'],
                );

                $_SESSION['mycart'][] = $item_array;
                if (isset($_SESSION['name']) && isset($_SESSION['user_id'])) {
                    // Inserer la session dans la bd
                    $con = connect();
                    $user_id = $_SESSION['user_id'];
                    $product_id = $item_array['prod_id'];
                    $qty = $item_array['qty'];
                    $id = insert_into_cart($con, 'INSERT INTO cart (user_id,product_id,qty) VALUES (?,?,?)', $user_id, $product_id, $qty);
                }
            }
        } else {

            $item_array = array(
                'prod_id' => $_POST['prod_id'],
                'name' => $_POST['name'],
                'price' => $_POST['price'],
                'img' => $_POST['img'],
                'qty' => $_POST['qty'],
            );

            $_SESSION['mycart'][] = $item_array;

            if (isset($_SESSION['name']) && isset($_SESSION['user_id'])) { // User is authenticated
                // Inserer la session dans la bd
                $con = connect();
                $user_id = $_SESSION['user_id'];
                $product_id = $item_array['prod_id'];
                $qty = $item_array['qty'];
                $id = insert_into_cart($con, 'INSERT INTO cart (user_id,product_id,qty) VALUES (?,?,?)', $user_id, $product_id, $qty);
            }
        }
    }
    echo json_encode($_SESSION['mycart']);
}