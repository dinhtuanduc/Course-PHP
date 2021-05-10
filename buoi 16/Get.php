<?php
     echo "<pre>";
     print_r($_GET);
     echo "</pre>";
    if (isset($_GET["gioitinh"]) && isset($_GET["hoten"])){
        if($_GET["gioitinh"]==1){
            $chao=" xin chào chị " . $_GET["hoten"];
        }else{
            $chao=" xin chào anh " . $_GET["hoten"];
        }
        echo "<h1>$chao</h1>";
    }
?>

    <!-- $_GET trong PHP:

    http://localhost/itp2009/ngay17/003/processget1.php?hoten=tu%E1%BA%A5n&gioitinh=2&submit=G%E1%BB%ADi+th%C3%B4ng+tin
    chuỗi trên url xuất hiện ? gọi query string
    query string = ?hoten=tu%E1%BA%A5n&gioitinh=2&submit=G%E1%BB%ADi+th%C3%B4ng+tin
    domain tên miền và file url : http://localhost/itp2009/ngay17/003/processget1.php
    trên url có nhiều biến
    ?bien1=giatri1&bien2=giatri2&bien3=giatri3...
    trường hợp 1 :
    $_GET được sử dụng để lấy dữ liệu từ form có method=get
    trường hợp 2 :
    $_GET được sử dụng để lấy dữ liệu từ url có query string -->