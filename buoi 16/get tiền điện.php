<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        td{
            text-align: center;
        }
    </style>
</head>
<body>

<?php
        echo "<pre>";
        print_r($_GET);
        echo "</pre>";

        if(isset($_GET["sodien"])){

            $sodien = $_GET["sodien"];

            $sodien1=$sodien2=$sodien3=$sodien4=$sodien5=$sodien6=0;

            $tiendien=$tiendien1=$tiendien2=$tiendien3=$tiendien4=$tiendien5=$tiendien6=0; 

            if($sodien <=50 && $sodien >=0){ 
                $sodien1=$sodien;
                $tiendien1=$sodien*1678;
            }else if($sodien <=100 && $sodien >50){ 
                $sodien1=50;
                $sodien2=$sodien-$sodien1;
                $tiendien1=$sodien1*1678;
                $tiendien2=$sodien2*1734;
            }else if($sodien <=200 && $sodien >100){ 
                $sodien1=50;
                $sodien2=50;
                $sodien3=$sodien-100;
                $tiendien1=$sodien1*1678;
                $tiendien2=$sodien2*1734;
                $tiendien3=$sodien3*2014;
            }else if($sodien <=300 && $sodien >200){ 
                $sodien1=50;
                $sodien2=50;
                $sodien3=100;
                $sodien4=$sodien-200;
                $tiendien1=$sodien1*1678;
                $tiendien2=$sodien2*1734;
                $tiendien3=$sodien3*2014;
                $tiendien4=$sodien4*2536;
            }else if($sodien <=400 && $sodien >300){ 
                $sodien1=50;
                $sodien2=50;
                $sodien3=100;
                $sodien4=100;
                $sodien5=$sodien-300;
                $tiendien1=$sodien1*1678;
                $tiendien2=$sodien2*1734;
                $tiendien3=$sodien3*2014;
                $tiendien4=$sodien4*2536;
                $tiendien5=$sodien5*2834;
            }else if($sodien > 400){ 
                $sodien1=50;
                $sodien2=50;
                $sodien3=100;
                $sodien4=100;
                $sodien5=100;
                $sodien6=$sodien-400;
                $tiendien1=$sodien1*1678;
                $tiendien2=$sodien2*1734;
                $tiendien3=$sodien3*2014;
                $tiendien4=$sodien4*2536;
                $tiendien5=$sodien5*2834;
                $tiendien6=$sodien6*2927;
            }

            $tiendien=$tiendien1+$tiendien2+$tiendien3+$tiendien4+$tiendien5+$tiendien6;            
            $outtiendien=number_format($tiendien, 0, ',', '.');

            $thue=$tiendien*0.1;
            $outthue = number_format($thue, 0, ',', '.');

            $tong=$tiendien+$thue;
            $outtong = number_format($tong, 0, ',', '.');
        }
    ?>

<h1>S??? ??i???n c???a b???n: <?php echo $sodien; ?></h1>
<table align="center" border="1" cellpadding="0" cellspacing="1" style="width:600px">
    <thead>
    <tr>
        <th>
            <p><strong>TT</strong></p>
        </th>
        <th>
            <p><strong>Nh??m ?????i t?????ng kh??ch h??ng</strong></p>
        </th>
        <th>
            <p><strong>Gi?? b??n ??i???n</strong></p>

            <p><strong>(?????ng/kWh)</strong></p>
        </th>
        <th>
            T???ng s??? kwh ti??u th???
        </th>
        <th>
            S??? ti???n ph???i tr??? cho b???c thang n??y
        </th>
    </tr>
    </thead>
    <tbody>

    <tr>
        <td>
            <p>1</p>
        </td>
        <td>
            <p>B???c 1: Cho kWh t??? 0 - 50</p>
        </td>
        <td>
            <p>1.678</p>
        </td>
        <td><?php echo $sodien1; ?> </td>
        <td><?php echo $tiendien1; ?></td>
    </tr>
    <tr>
        <td>
            <p>2</p>
        </td>
        <td>
            <p>B???c 2: Cho kWh t??? 51 - 100</p>
        </td>
        <td>
            <p>1.734</p>
        </td>
        <td><?php echo $sodien2; ?> </td>
        <td><?php echo $tiendien2; ?></td>
    </tr>
    <tr>
        <td>
            <p>3</p>
        </td>
        <td>
            <p>B???c 3: Cho kWh t??? 101 - 200</p>
        </td>
        <td>
            <p>2.014</p>
        </td>
        <td><?php echo $sodien3; ?> </td>
        <td><?php echo $tiendien3; ?></td>
    </tr>
    <tr>
        <td>
            <p>4</p>
        </td>
        <td>
            <p>B???c 4: Cho kWh t??? 201 - 300</p>
        </td>
        <td>
            <p>2.536</p>
        </td>
        <td><?php echo $sodien4; ?> </td>
        <td><?php echo $tiendien4; ?></td>
    </tr>
    <tr>
        <td>
            <p>5</p>
        </td>
        <td>
            <p>B???c 5: Cho kWh t??? 301 - 400</p>
        </td>
        <td>
            <p>2.834</p>
        </td>
        <td><?php echo $sodien5; ?> </td>
        <td><?php echo $tiendien5; ?></td>
    </tr>
    <tr>
        <td>
            <p>6</p>
        </td>
        <td>
            <p>B???c 6: Cho kWh t??? 401 tr??? l??n</p>
        </td>
        <td>
            <p>2.927</p>
        </td>
        <td><?php echo $sodien6; ?> </td>
        <td><?php echo $tiendien6; ?></td>
    </tr>
    </tbody>
</table>

    <p><strong>T???ng s??? ti???n ??i???n : <?php echo $outtiendien; ?> ?? </strong></p>
    <p><strong>Thu??? GTGT 10% : <?php echo $outthue; ?> ??</strong></p>
    <p><strong>T???ng ti???n ph???i thanh to??n : <?php echo $outtong; ?> ?? ( ti???n ??i???n + thu??? )</strong></p>
</body>
</html>