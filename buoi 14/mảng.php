<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Cách 1: Khai báo kiểu bt
        $cities =array("Hà Nội", "Hồ Chí Minh", "Nam Định", "Vinh");

        //Cách 2: Cú pháp php7
        $cities2 =["Hà Nội", "Hồ Chí Minh", "Nam Định", "Vinh"];

        //Cách 3: Tạo ra mảng trc và gán giá trị cho nó
        $cities3 = [];
        $cities3[0]="Hà Nội";
        $cities3[1]="Nam Định";
 
        // Cách 4: Tự đánh key cho mảng
        $cities4 = [];
        $cities4[]="Hà Nội";
        $cities4[]="Nam Định";

        //inrara cấu trúc mảng
        echo "<pre>";
        print_r($cities);
        echo "</pre>";

        // in ra mảng
        echo "<br>" . $cities[0];
        echo "<br>" . $cities[1];
        echo "<br>" . $cities[2];
        echo "<br>" . $cities[3];

        //Thay dổi giá trị của 1 phần tử
        $cities[0]="thủ đô Hà Nội";
        $cities[1]="Sài gòn";
        echo "<pre>";
        print_r($cities);
        echo "</pre>";


        //Thêm 1 phần tử
        $cities[]="Đà nẵng";
        echo "<pre>";
        print_r($cities);
        echo "</pre>";
    ?>
</body>
</html>