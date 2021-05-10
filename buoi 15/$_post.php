<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        $chieucao = $cannang = $phanloai = $BMI = " ";

        // hàm isset() để kiếm tra 1 biến có tồn tại
        if(isset($_POST["cc"]) && isset($_POST["cn"])){
            $chieucao = (float) $_POST["cc"];
            $cannang = (float) $_POST["cn"];
            echo "<br> Chiều cao của bạn la: " .$chieucao;
            echo "<br> Cân nặng của bạn la: " .$cannang;
    
            $BMI = $cannang/($chieucao*$chieucao);
            if($BMI <18.5){
                $phanloai = "Dưới chuẩn";
            }
            else if($BMI >=18.5 && $BMI <=24.9){
                $phanloai = "Bình thường";
            }
            else if($BMI > 25 && $BMI <= 29.9){
                $phanloai =" Thừa cân";
            }
            else if($BMI > 30 && $BMI <= 34.9){
                $phanloai =" Béo phì cấp độ 1";
            }
            else if($BMI > 35 && $BMI <= 39.9){
                $phanloai = " Béo phì cấp độ 2";
            }
            else{
                $phanloai = "Béo phì cấp độ 3";
            }
        }
    ?>

        <form action="" name="bmi" method="post">

        <p>
            <label for="">Nhập chiều cao</label>
            <input type="text" name="cc" value=" <?php echo $chieucao ?> ">
        </p>
        <p>
            <label for="">Nhập cân nặng</label>
            <input type="text" name="cn" value=" <?php echo $cannang ?> ">
        </p>
        <button type="sub
        mit">Tính chỉ số BMI</button>
        </form>
        <div>
            <p>BMI = <?php echo $BMI;?> </p>
            <p>Phân loại: <?php echo $phanloai; ?></p>
        </div>
</body>
</html>