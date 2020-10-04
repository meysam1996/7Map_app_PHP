<?php
include "bootstrap/init.php";

if (isset($_GET['logout']) && $_GET['logout'] == 1) {
    logout();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!login($_POST['username'], $_POST['password'])) {
        message("نام کاربری یا پسورد اشتباه است!");
    }
}

if (isLoggedIn()) {
    $locations = getLocations();
    include "view/tpl-adm.php";
}else {
    include "view/tpl-adm-form.php";
}

