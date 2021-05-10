<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    / tạo ra cookie
    // cookie lưu trên máy khách
    // session lưu trên máy chủ
    // setcookie(name, value, expire, path, domain, secure, httponly);
    </pre>

    <?php
        echo "<pre>";
        print_r($_COOKIE);
        echo "</pre>";

        //Khai báo 1 cookie
        setcookie("search","dien thoai", time() + (30*86400),"/");
        setcookie("finded","iphone 12 pro max", time() + (30*86400),"/");

        //Xóa đi 1 cooki
        setcookie("finded","iphone 12 pro max", time() - 86400,"/");

        //inra 1 cookie:
        echo "<br>" . $_COOKIE["search"];


    ?>

</body>
</html>