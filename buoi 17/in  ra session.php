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
    </pre>
    <?php
        if(isset($_SESSION["name"])){
            echo $_SESSION["name"];
        }
        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";

        //Hủy đi 1 un session
        unset($_SESSION["name"]);
        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";

        //Hủy đi tất cả:
        session_unset();
        session_destroy();
        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";


    ?>
</body>
</html>