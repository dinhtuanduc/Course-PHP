<?php

    // lớp trừu tượng là class có ít nhất 1 phương thức trừu tượng
    abstract class Car{
        public $name;

        public function __construct($name)
        {
            $this->name = $name;
        }

        // phương thức trừu tường có từ khóa abstract ở đầu tiền
        // và phương thức trừu tượng không có nội dung thực thi bên trong phương thức
        // nó được khai báo để chờ các class con kế thứa sẽ đi viết nội dung
        // cho các phương thức trừu tượng này
        abstract public function intro();
    }
    
    class VinFast extends Car{
        public function intro(){
            echo "VinFast là hãng ô tô đầu tiên do Việt Nam sản xuất";
        }
    }

    $inra = new VinFast("VinFast");
    echo "<br>".$inra->intro();