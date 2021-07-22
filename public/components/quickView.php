<!-- Quick View Modal-->

<?php
require_once '../private/models/Database_Connection.php';
require_once '../private/models/Functions_products.php';
$con = connect();
quickView($con, 'SELECT * FROM product');