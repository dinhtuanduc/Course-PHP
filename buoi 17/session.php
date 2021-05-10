<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        $_Session["name"] = giá trị;

        A session is a way to store information (in variables) to be used across multiple pages.
        
        Session là cách lưu trữ thông tin trong biến mà có thể sử dụng được
        trong nhiều trang

        *** chú ý : đặt hàm session_start() trên cùng của file php mà sử dụng session
    </pre>
    <?php
        $_SESSION["name"]= "ĐINH VĂN ĐỨC";
        $_SESSION["sdt"]= "12345678";
        $_SESSION["email"]= "abc@gmail.com";
        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";

    ?>
</body>
</html>