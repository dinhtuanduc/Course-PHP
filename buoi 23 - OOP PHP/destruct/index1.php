<?php

// phương thức hủy trong class
// phương thức hủy được gọi cách tự động
// khác với phương thức còn lại là chúng ta chủ động gọi
// phương thức hủy được gọi trong 2 trường hợp
// TH1 : chúng ta hủy đi đối tượng được khởi tạo từ class này
// unset($object)
// TH2 : khi script php kết thúc hàm hủy của class được khởi tạo
// cũng tự động được gọi

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

    echo "<br> Dòng số 20";