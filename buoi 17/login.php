<?php session_start(); ?>
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

        if(isset($_SESSION["admin"])){
            header("location:trangchu.php");
            exit();
        }
        if(isset($_SESSION["cout_login"]) && ($_SESSION["cout_login"])>5){
            echo "bạn đã nhập sai";
            exit();
        }
    
        if(isset($_POST["username"]) && $_POST["password"]){
            $username=trim($_POST["username"]);
            $password=$_POST["password"];
            if($username=="admin" && $password =="@123"){
                $_SESSION["admin"]=["username" =>"admin","pass" =>"@123" ];
                unset($_SESSION["cout_login"]);
                header("location:trangchu.php");
                exit();
            }else{
                if(isset( $_SESSION["cout_login"])){
                    $_SESSION["cout_login"] += 1;
                }else{
                    $_SESSION["cout_login"]=1;
                }
                echo "<h2 style='color:red'>Thông tin đăng nhập chưa đúng</h2>";
            }
        }

    ?>

    <div style="margin: 100px auto; width: 600px">
        <form name="login" method="post" action="">
            <p>
                <label>Nhập username/email để đăng nhập</label>
                <input type="text" name="username" value="">
            </p>
            <p>
                <label>Nhập mật khẩu</label>
                <input type="password" name="password" value="">
            </p>
            <p>
                <input type="submit" name="submit" value="Đăng nhập" />
            </p>
        </form>
    </div>
</body>
</html>