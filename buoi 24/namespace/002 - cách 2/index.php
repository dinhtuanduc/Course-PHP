<?php
/**
 * dạng số 2 sử dụng namespace
 * 
 * dạng 1 : $db = new Connect\Database1\Database();
 * dạng 2 : dùng từ khóa use để nạp namespace
 * chú ý tránh việc nhầm lẫn với trait
 * phân biệt từ khóa use trong trai và từ khóa use namespace
 * use trait nằm trong class
 * use namespace nằm ngoài class
 * khi tên class bị trùng nhau khi nạp namespace
 * dùng từ khóa as tạo bí danh ( biệt danh )
 *
 * khi sử dụng namespace
 * nhưng file không thuôc namespace cụ thể nào cả
 * người ta gọi đó là global namespace ( namespace toàn cầu )
 * index.php thuộc global namespace
 */
    include_once "connect/text1.php";
    include_once "connect/text2.php";
    // nạp namespace
    use connect\text1\TEXT as db1;
    use connect\text2\TEXT as db2;
    // không dùng bí danh
    // use Connect\Db\Abc;
    // nạp namespace phải đầy đủ
    // use Namespace_Lvl1\Namespace_Lvl2\Namespace_Lvl3\ClassName;
    // không có đóng mở () sau tên class

    $db1= new db1();
    $db1->post();

    echo "<br>";

    $db1= new db2();
    $db1->post();