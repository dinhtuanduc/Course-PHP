<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
     - truyền tham trị hiểu đơn giản là truyền giá trị của biến
        cho đối số của function ( sự thay đối giá trị của đối số ko ảnh hưởng đến
        giá trị của biến được truyền cho đối số )
    </pre>

    <?php
        $a = 5;
        function demo($giatri){
            $giatri *= $giatri;
            return $giatri;
        }

        $ketqua =demo($a);
        echo "<br> gia tri cua a: ". $a;
        echo "<br> ket qua: ". $ketqua;
        

    ?>
</body>
</html>