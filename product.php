<?php
require_once("util-db.php");
require_once("model-product.php");

$pageTitle = "Products";
include "view-header.php";
$Products = selectProducts();
include "view-products.php";
include "view-footer.php";
?>
