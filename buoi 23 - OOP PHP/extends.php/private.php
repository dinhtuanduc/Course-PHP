<?php
    class Animals{
        public $name;
        public $color;

        function __construct($name,$color)
        {
            $this->name =$name;
            $this->color =$color;
        }

        private function Eats(){
            echo "<br> Hoạt động ăn";
        }

        public function get_Eats(){
            return $this->Eats();
        }
    }

    class cat extends Animals{
        public function sleep(){
            echo "<br> Hoạt động ngủ";
        }
    }

    $cat = new cat("bla_bla","white");
    echo "<br>". $cat->sleep();
    echo "<br>". $cat->get_Eats();
    
    echo "<pre>";
    print_r($cat);
    echo "</pre>";