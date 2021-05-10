<?php
    $servername = "127.0.0.1";
    $usernameMysql = "root";
    $passwordMysql = "";
    $databaseName = "eshop";
    
    try {
        $connection = new PDO("mysql:host=$servername;dbname=$databaseName", $usernameMysql, $passwordMysql);
    
        var_dump($connection);

        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
    }catch (Exception $e) {
        echo "Không kết nối được đến CSDL ";
        die;
    }