<?php
include "bootstrap/init.php";

$location = false;
if (isset($_GET['loc']) && is_numeric($_GET['loc'])) {
    $location = getLocation($_GET['loc']);
}

include "view/tpl-index.php";
