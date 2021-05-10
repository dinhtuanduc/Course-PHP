<?php
    $servername = "127.0.0.1";
    $usernameMysql = "root";
    $passwordMysql = "";

    $connection = new PDO("mysql:host=$servername", $usernameMysql, $passwordMysql);
    echo "kết nối thành công";
    
    var_dump($connection);

    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql ="CREATE DATABASE PHP0812";
    $connection->exec($sql);
    echo "bạn đã tạo thành công";