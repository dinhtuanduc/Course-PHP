<?php
    // mặc định extends chỉ cho phép đơn kế thừa
    // 1 class chỉ được phép kế thừa từ class khác
    // muốn 1 class kế thừa sử dụng được tài sản ( thuộc tính và phương thức ) của các
    // class cha chúng ta sử dụng trait
    class classisPhone{
        public $numberPhone;

        public function nghe(){
            echo "<br> Nghe";
        }
        public function goi(){
            echo "<br> Gọi";
        }
    }

    trait computer{
        public function id(){
            echo "<br> 127.0.0.1";
        }
    }

    trait radio{
        public function hear(){
            echo "<br> nghe nhạc";
        }
    }

    class smartPhone extends classisPhone{
        
        // kế thừa từ class trait khác vào trong class hiện tại
        // sử dụng từ khóa use bên trong class
        use computer,radio;

        public function playgame(){
            echo "<br> Chơi game";
        }
    }

    $apple = new smartPhone("iphone");
    $apple->id();
    $apple->hear();