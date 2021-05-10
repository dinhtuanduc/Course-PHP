<?php 
    include_once ("../../lib/connect.php");
    include_once ("../../define.php");

    if(isset($_GET["id"]) && ($_GET["id"]>0) ){
        $id=$_GET["id"];
        $sql = "DELETE FROM users WHERE id=$id";
        $kq=$connection->exec($sql);
    }

    header("location: index.php");
    exit();