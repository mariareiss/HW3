<?php
require_once("util-db.php");
require_once("model-product-purchased-customer.php");

$pageTitle = "Product Purchased by Customer";
include "view-header.php";
$Products = selectProductPurchasedCustomer($_GET['id']);
include "view-product-purchased-customer.php";
include "view-footer.php";
?>
