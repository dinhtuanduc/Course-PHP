<?php
    //đường dẫn tuyệt đối là đường dẫn vật lý
    //__FILE__ trả về đường dẫn trên ổ đĩa của file hiện tại:
    echo __FILE__;

    //dirname là gọi đến tên fo
    echo "<br>" . dirname(__FILE__);

    $duongdantuyetdoi1 = dirname(__FILE__)."/pheptinh/add.php";

    //Xem giá trị trả về của đường dẫn
    echo "<br>" . $duongdantuyetdoi1;

    //Nạp nội dung khác vào trong file
    include_once $duongdantuyetdoi1;

    $d= tong(9,1);
    echo "<br>" . $d;

?>