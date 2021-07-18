<?php
if (isset($_COOKIE['id'])) {
    header('Location: ./private/controllers/Signin-up_Validation.php');
}