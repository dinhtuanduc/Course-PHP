<?php
/**
 * để giải quyết vấn đề trùng tên hàm hay tên class
 * thì người ta sử dụng khái niệm namespace
 *
 * phân biệt tách namespace\className
 * ví dụ : Database1\Database();
 * liên quan namespace phải là xược ngược \
 */
    include_once "connect/text1.php";
    include_once "connect/text2.php";

    $db1= new connect\text1\TEXT;
    $db1->post();
    echo "<br>";
    $db1= new connect\text2\TEXT;
    $db1->post();