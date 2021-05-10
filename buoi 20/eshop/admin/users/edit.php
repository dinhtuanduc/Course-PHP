<!-- Cập nhật bản ghi -->
<?php
    include_once ("../../lib/connect.php");
    include_once ("../../define.php");

    if(count($_POST) >1){
        $newid=(int)$_POST["id"];
        $newusername=$_POST["username"];
        $newavata=$_POST["user_avata"];

        $sql= "UPDATE users SET username='$newusername',user_avata='$newavata' WHERE id=$newid";
        $stmt=$connection->prepare($sql);
        $stmt->execute();
        echo "<div style='color:red'>".$stmt->rowCount() . " bản ghi được cập nhật thành công </div>";

    }
?>

<?php

    if(isset($_GET["id"]) && ($_GET["id"]>0)){
        $id =$_GET["id"];
        $sql ="SELECT * FROM users WHERE id=$id";

        $stmt = $connection->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $user = $stmt->fetchAll();

        $user = isset($user[0]) ? $user[0] : null;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">

    <h1>Thêm người dùng</h1>

    <div class="row">
        <div class="col-md-12">

            <form name="usersubmit" method="post" action="">
                <div class="form-group">
                    <label for="text">ID:</label> <?php echo $user["id"] ?>
                    <input type="hidden" name="id" value="<?php echo $user["id"] ?>">
                </div>
                <div class="form-group">
                    <label for="text">Username:</label>
                    <input type="text" name="username" class="form-control" placeholder="Enter" id="text"
                    value="<?php echo $user["username"] ?>">
                </div>
                <div class="form-group">
                    <label for="pwd">Ảnh người dùng:</label>
                    <input type="text" name="user_avata" class="form-control" placeholder="Enter" id="text" value="<?php echo $user["user_avata"] ?>">
                </div>

                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </form>
            </div>
        </div>
    </div>
</body>
</html>