<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";
        if(!isset($_SESSION["admin"])){
            header("location:login.php");
            exit();
        }
    ?>
    <h1>Trang quản trị admin, chào</h1>

    <ul>
        <li><a href="">Thêm sản phẩm</a></li>
        <li><a href="">Thêm khách hàng</a></li>
        <li><a href="">Quản lý sản phẩm</a></li>
        <li><a href="">Quản lý khách hàng</a></li>
        <li><a href="<?php echo "logout.php" ?>">Đăng xuất</a></li>
    </ul>
</body>
</html>