<?php
     echo "<pre>";
     print_r($_POST);
     echo "</pre>";
    if (isset($_POST["gioitinh"]) && isset($_POST["hoten"])){
        if($_POST["gioitinh"]==1){
            $chao=" xin chào chị " . $_POST["hoten"];
        }else{
            $chao=" xin chào anh " . $_POST["hoten"];
        }
        echo "<h1>$chao</h1>";
    }
?>