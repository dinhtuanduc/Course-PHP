<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<br> Chào php dòng 1";
        echo "<br> Chào php dòng 2";
        echo "<br> thủ đô Việt Nam là thành phố \"Hà Nội\" ";//
        echo '<br> thủ đô Việt Nam là thành phố "Hà Nội" '; //Muốn in ra nháy đơn thì ngược lại
        
        $a=1;
        $b=2;
        $c=$a+$b;
        //Phân loại biến trong nháy đơn và nháy kép:
        //Cách 1;
        echo "<br> Tong : ".$c; // Cách nối chuỗi bt
        //Cách 2;
        echo "<br> Tong : $c"; // Nó vẫn nhận dạng ra $c à in ra $c
        //Cách 3;
        echo '<br> Tong : $c'; //Nó hiểu đây là 1 chuỗi

    ?>
</body>
</html>