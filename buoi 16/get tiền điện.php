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

<h1>Số điện của bạn: <?php echo $sodien; ?></h1>
<table align="center" border="1" cellpadding="0" cellspacing="1" style="width:600px">
    <thead>
    <tr>
        <th>
            <p><strong>TT</strong></p>
        </th>
        <th>
            <p><strong>Nhóm đối tượng khách hàng</strong></p>
        </th>
        <th>
            <p><strong>Giá bán điện</strong></p>

            <p><strong>(đồng/kWh)</strong></p>
        </th>
        <th>
            Tổng số kwh tiêu thụ
        </th>
        <th>
            Số tiền phải trả cho bậc thang này
        </th>
    </tr>
    </thead>
    <tbody>

    <tr>
        <td>
            <p>1</p>
        </td>
        <td>
            <p>Bậc 1: Cho kWh từ 0 - 50</p>
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
            <p>Bậc 2: Cho kWh từ 51 - 100</p>
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
            <p>Bậc 3: Cho kWh từ 101 - 200</p>
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
            <p>Bậc 4: Cho kWh từ 201 - 300</p>
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
            <p>Bậc 5: Cho kWh từ 301 - 400</p>
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
            <p>Bậc 6: Cho kWh từ 401 trở lên</p>
        </td>
        <td>
            <p>2.927</p>
        </td>
        <td><?php echo $sodien6; ?> </td>
        <td><?php echo $tiendien6; ?></td>
    </tr>
    </tbody>
</table>

    <p><strong>Tổng số tiền điện : <?php echo $outtiendien; ?> đ </strong></p>
    <p><strong>Thuế GTGT 10% : <?php echo $outthue; ?> đ</strong></p>
    <p><strong>Tổng tiền phải thanh toán : <?php echo $outtong; ?> đ ( tiền điện + thuế )</strong></p>
</body>
</html>