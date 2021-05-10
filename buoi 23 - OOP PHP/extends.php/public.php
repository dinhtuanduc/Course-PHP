<?php
// Lớp con sẽ kế thừa tất cả các thuộc tính và phương thức công khai và được bảo vệ từ lớp cha. Ngoài ra, nó có thể có các thuộc tính và phương thức riêng.

// Một lớp kế thừa được xác định bằng cách sử dụng từ khóa extends.
    class Animals{
        public $name;
        public $color;

        function __construct($name,$color)
        {
            $this->name =$name;
            $this->color =$color;
        }

        public function Eats(){
            echo "<br> Hoạt động ăn";
        }
    }

    class cat extends Animals{
        public function sleep(){
            echo "<br> Hoạt động ngủ";
        }
    }

    $cat = new cat("bla_bla","white");
    echo "<br>". $cat->sleep();
    echo "<br>". $cat->Eats();
    
    echo "<pre>";
    print_r($cat);
    echo "</pre>";