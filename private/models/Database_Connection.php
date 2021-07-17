<?php
require_once("db_infos.php");

function connect()
{
    $con = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    if ($con->connect_error) {
        echo "con false";
        return false;
    } else {
        return $con;
    }
}