<?php
require_once("util-db.php");
require_once("model-order-by-product.php");

$pageTitle = "order by product";
include "view-header.php";
$sections = selectOrderByProduct($_POST['sid']);
include "view-order-by-product.php";
include "view-footer.php";
?>
