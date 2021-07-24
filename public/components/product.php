<!-- Product-->

<?php
require_once('../private/models/Database_Connection.php');
require_once('../private/models/Functions_products.php');
$con = connect();
fetch_all_products($con, 'SELECT * FROM product');
?>
    