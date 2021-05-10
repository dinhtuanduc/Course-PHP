<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        Hàm trong php: là tập hợp các lệnh thực hiện 1 chức năng nào đó - Khi cần sử dụng người ta chỉ cần gọi tên hàm.
        function tên_hàm(đối_số_1, đối_số_2){

            //nội dung của hàm.

            //sử dụng return để trả về giá trị của biến.
        }
    </pre>

    <?php
        //Khai báo hàm
        function tinhchuviHCN($a=1, $b=1){
             /*
            * $a và $b là 2 đối số trong hàm
            * nên $a và $b là 2 biến cục bộ
            * chỉ có ảnh hưởng bên trong hàm
            */
            $s=$a * $b;
            // $s biến khai báo bên trong hàm nên biến trong hàm thì là biến cục bộ
            return $s;
        } // kết thúc hàm

        // gọi hàm
        // những biến được khai báo bên ngoài hàm và bên ngoài class
        // thì được coi là các biến toàn cục
        $c=4;
        $d=5;
        //Gọi hàm:
        // $dientich = tinhchuviHCN(4,5);
        $dientich = tinhchuviHCN($c,$d);
        echo "S = ".$dientich;
    ?>


</body>
</html>