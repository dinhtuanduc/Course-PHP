<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $cities =array("Hà Nội", "Hồ Chí Minh", "Nam Định", "Vinh");
        $cities2=[];

        //In ra độ dài của mảng:
        echo "<br> độ dài:" .count($cities);

        //Kiểm tra xem mảng có bị rỗng:
        if(count( $cities)>0){
            echo "<br> co dữ liệu";
        }else{
            echo "<br> rỗng";
        }

        if(count( $cities2)>0){
            echo "<br> co dữ liệu";
        }else{
            echo "<br> rỗng";
        }

        //Kiểm tra biến có phải mnagr hay k 
        $abc=1;
        if(is_array($cities)){
            echo "<br> là kiểu mảng";
        }else{
            echo "<br> ko la kiểu mảng";
        }
        if(is_array($abc)){
            echo "<br> là kiểu mảng";
        }else{
            echo "<br> ko la kiểu mảng";
        }

        //Kiểm tra xem mảng có rỗng ko
        //Bằng hàm empty() nếu đúng thì trả về true sai thì false
        if(empty($cities)){
            echo "<br> Rỗng";
        }else{
            echo "<br> Ko rỗng";
        }

        
    ?>
</body>
</html>