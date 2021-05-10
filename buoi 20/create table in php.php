<?php
    $servername = "127.0.0.1";
    $usernameMysql = "root";
    $passwordMysql = "";
    $databaseName = "php_basic";
    
    try {
        $connection = new PDO("mysql:host=$servername;dbname=$databaseName", $usernameMysql, $passwordMysql);
    
        var_dump($connection);

        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        echo "Kết nối thành công đến CSDL";

        $sql="CREATE TABLE SINHVIEN(
                MASV INT(8) AUTO_INCREMENT PRIMARY KEY,
                HO VARCHAR(255) NOT NULL,
                TEN VARCHAR(255) NOT NULL,
                NGAY TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )";
        $connection->exec($sql);
    
    }catch (Exception $e) {
        echo "Không kết nối được đến CSDL ";
    }