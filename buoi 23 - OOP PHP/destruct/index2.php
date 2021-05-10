<?php
    class Fruit{
        public $name;
        public $color;

        function __construct($name, $color)
        {
            $this->name =$name;
            $this->color =$color;
        }

        function __destruct()
        {
            echo "<br> Đã hủy";
        }
        
    }
    $apple = new Fruit("Apple", "red");
    unset($apple);
    echo "<br> Dòng số 20";