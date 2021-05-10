<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Hello";
        echo "<div style='color:red'> thẻ div trong php </div>";

        $a=5;
        $b=6;
        echo "<br> tong =" . ($a + $b);
        echo "<br> hieu =" . ($a - $b);
        echo "<br> tich =" . ($a * $b);
        echo "<br> thuong =" . ($a / $b);
        echo "<br> dư =". ($a % $b);
        $c = $a + $b;
        echo "<br>" . $c;
    ?>
</body>
</html>