<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>in ra tổng các số chẵn từ 1 > 50 bằng php</h1>

    <h3>VÒNG LẶP FOR</h3>
    <?php
        $s=0;
        for($i=1;$i<=50;$i++)
        {
            if($i%2==0)
            {
                $s += $i;
            }
        }
        echo "Tong for: " . $s;
    ?>

    <h3>VÒNG LẶP WHILE</h3>
        <?php
            $m=0;
            $j=1;
            while($j<=50)
            {
                    if($j % 2 ==0)
                    {
                        $m += $j;
                    }
                    $j++;
            }
            echo "<br> Tong while: " . $m;
        ?>
    
        <h3>VÒNG LẶP DO WHILE</h3>
        <?php
            $s=0;
            $k=1;
                do
                {
                    if($k%2==0)
                    {
                        $s += $k;
                    }
                    $k++;
                }while($k <=50) ;
            echo "<br> Tong do-while: " . $s;
        ?>


</body>
</html>