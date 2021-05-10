<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <?php
        include_once ("../../lib/connect.php");
        include_once ("../../define.php");
        var_dump($_POST);
        if(count($_POST)>0){
            if(isset($_POST["username"]) && isset($_POST["user_avata"]) && !empty($_POST["user_avata"]) && !empty($_POST["username"])){
                $username=$_POST["username"];
                $user_avata=$_POST["user_avata"];
                $sql = "INSERT INTO users (username,user_avata) VALUES ('$username', '$user_avata')";
                $thuchien = $connection->exec($sql);
                if($thuchien==1){
                    echo "<div> Bạn đãn thêm thành công </div>";
                }
            }else{
                echo "<div> Dữ liệu ko hợp lệ</div>";
    
            }
        }

    ?>

    <div class="container">

        <h1>Thêm người dùng</h1>

        <div class="row">
            <div class="col-md-12">

                <form name="usersubmit" method="post" action="">
                    <div class="form-group">
                        <label for="text">Username:</label>
                        <input type="text" name="username" class="form-control" placeholder="Enter" id="text">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Ảnh người dùng:</label>
                        <input type="text" name="user_avata" class="form-control" placeholder="Enter" id="text">
                    </div>

                    <button type="submit" class="btn btn-primary">thêm người dùng</button>
                </form>
                </div>
            </div>
    </div>

</body>
</html>