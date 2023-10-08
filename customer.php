<?php
require_once("util-db.php");
require_once("model-customer.php");

$pageTitle = "Customer";
include "view-header.php";
$customers = selectCustomers();
include "view-customers.php";
include "view-footer.php";
?>
