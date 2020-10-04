<?php
session_start();
include "constants.php";
include BASE_PATH . "bootstrap/config.php";
include BASE_PATH . "libs/helpers.php";
$dbname = $database_config->db;
$dns = "mysql:dbname=$dbname;host={$database_config->host}";
$username = $database_config->user;
$pass = $database_config->pass;
try {
    $pdo = new PDO($dns,$username,$pass);
} catch (PDOException $e) {
    diePage('Connection failed: ') . $e->getMessage();
}

include BASE_PATH . "libs/lib-users.php";
include BASE_PATH . "libs/lib-locations.php";