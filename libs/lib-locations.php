<?php

function insertLocation($data){
    global $pdo;
    // data validation
    $sql = "INSERT INTO `locations`(`title`, `lat`, `lng`, `type`) VALUES (:title,:lat,:lng,:typ)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':title'=>$data['title'],':lat'=>$data['lat'],':lng'=>$data['lng'],':typ'=>$data['type']]);
    return $stmt->rowCount();
}

function getLocations(){
    global $pdo;
    $sql = "SELECT * FROM `locations` WHERE `user_id` = 0";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $records;
}

function getLocation($id){
    global $pdo;
    $sql = "SELECT * FROM `locations` WHERE `id` = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':id'=>$id]);
    return $stmt->fetch(PDO::FETCH_OBJ);
}