<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
         - mảng chỉ số là mảng có key là các số
         - mảng kết hợp là mảng có key là chuỗi
         - mảng đa chiều là mảng phức tạp
         mỗi phần tử lại lại là 1 mảng con
         ( mảng lồng mảng )
    </pre>

    <?php
        $cities=[];

        //Thêm các phần tử cho mảng:
        $cities[] = ["name"=>"Hà Nội","district"=>["Quận Hoàng mai", "Quận Long Biên"] ];
        $cities[] = ["name"=>"Hò Chí Minh","district"=>["Quận 1", "Quận 2"] ];
        $cities[] = ["name"=>"Đà Nẵng","district"=>["Quận Sơn Trà", "Quận Hành Sơn"] ];
        echo "<pre>";
        print_r($cities);
        echo "</pre>";

        //In ra hà nội, Quận Long biên, Quận 2:
        echo "<br>" . $cities[0]['name'];
        echo "<br>" . $cities[0]["district"][1];
        echo "<br>" . $cities[1]["district"][1];

        // thêm quận cho hà nội
        $cities[0]["district"][2]=["Quận Ba Đình"];

        // sửa quận
        $cities[0]["district"][1]=["Quận Tây Hồ"];

        // Hủy quận ( xóa quận)
        unset($cities[1]["district"][0]);

        echo "<pre>";
        print_r($cities);
        echo "</pre>";

    ?>
</body>
</html>