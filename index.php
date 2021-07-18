<?php
if (isset($_COOKIE['user_id'])) {
    header('Location: ./private/controllers/Signin-up_Validation.php');
} else {
    echo "Hello";
}