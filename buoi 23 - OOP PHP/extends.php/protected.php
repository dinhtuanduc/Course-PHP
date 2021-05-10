<?php
    class Animals{
        public $name;
        public $color;

        function __construct($name,$color)
        {
            $this->name =$name;
            $this->color =$color;
        }

        protected function Eats(){
            echo "<br> Hoạt động ăn";
        }
    }

    class cat extends Animals{
        public function sleep(){
            echo "<br> Hoạt động ngủ";
        }
        public function get_Eats(){
            return $this->Eats();
        }
    }

    $cat = new cat("bla_bla","white");
    echo "<br>". $cat->sleep();
    echo "<br>". $cat->get_Eats();
    
    echo "<pre>";
    print_r($cat);
    echo "</pre>";