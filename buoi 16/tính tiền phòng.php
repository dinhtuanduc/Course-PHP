<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Đặt phòng du lịch</h1>
    <pre>
        Em hãy viết chương trình đặt phòng và tính tiền thanh toán
        cho khách sạn .
        giá tiền cho từng loại phòng như sau :
        phòng đơn 300.000/ngày
        phòng đôi 500.000/ngày
        phòng đôi 1000.000/ngày
        - nếu đi kèm trẻ em sẽ + thêm 100.000 cho mỗi ngày
        - nếu lấy hóa đơn GTGT sẽ + thêm 10% tổng số tiền cần thanh toán
    </pre>
    <?php 
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";

        // $day=1;
        // $room =1;
        // $child=0;
        // $vat=0;

        $room_total=0;
        $chidl_total=0;
        $vat_total=0;
        $s=0;

        if(isset($_POST["days"]) && isset($_POST["type_room"])){
            $day = $_POST["days"];
            $room = $_POST["type_room"];
            if($room ==1){
                $tienphong = 300000;
                $room_total = $day*$tienphong;
            }
            else if($room ==2){
                $tienphong = 500000;
                $room_total = $day*$tienphong;
            }
            else if($room ==3){
                $tienphong = 1000000;
                $room_total= $day*$tienphong;         
            }

        }
        if(isset($_POST["child"]) &&($_POST["child"] == 1)){
                $phuphi = 100000;
                $child_total = $phuphi*$day;
        }else{
            $child_total=0;
        }

        if(isset($_POST["vat"]) &&($_POST["vat"] == 1)){
            $s= $room_total +  $child_total;
            $vat_total = $s*0.1;
        }else{
            $vat_total=0;
        }

        $s= $room_total +  $child_total +$vat_total;
    ?>
    <form name="tour" action="" method="post">
        <p>
            <label for="">Tổng số ngày</label>
            <input type="number" name="days" value="<?php echo $day; ?>">
        </p>
        <p>
            <label for="">Loại phòng</label>
            <select name="type_room">
                <?php
                    if(isset($_POST["type_room"]) &&($_POST["type_room"] == 1)){
                        $type1="selected";
                    }else{
                        $type1=" ";
                    }
                ?>
                <option value="1" <?php echo $type1; ?>>Phòng đơn</option>

                <?php
                    if(isset($_POST["type_room"]) &&($_POST["type_room"] == 2)){
                        $type2="selected";
                    }else{
                        $type2=" ";
                    }
                ?>
                <option value="2" <?php echo $type2; ?>>Phòng đôi</option>

                <?php
                    if(isset($_POST["type_room"]) &&($_POST["type_room"] == 3)){
                        $type3="selected";
                    }else{
                        $type3=" ";
                    }
                ?>
                <option value="3" <?php echo $type3; ?>>Phòng VIP</option>
            </select>
        </p>
        <p>
            <label>Có trẻ em đi kèm</label>
            <?php
                    if(isset($_POST["child"]) &&($_POST["child"] == 1)){
                        $sch="checked";
                    }else{
                        $sch=" ";
                    }
                ?>
            <input type="checkbox" name="child" value="1">
        </p>
        <p>
            <label>Xuất hóa đơn GTGT 10%</label>
            <?php
                    if(isset($_POST["vat"]) &&($_POST["vat"] == 1)){
                        $sva="checked";
                    }else{
                        $sva=" ";
                    }
            ?>
            <input type="checkbox" name="vat" value="1">
        </p>
        <p>
            <input type="submit" name="booking" value="Đặt phòng và thanh toán" />
        </p>
    </form>
    <div>
        <p>tiền phòng:<?php echo $room_total; ?> </p>
        <p>phụ phí cho trẻ em ( nếu có ): <?php echo $child_total; ?></p>
        <p>thuế GTGT: <?php echo $vat_total; ?></p>
        <p>tổng số tiền phải trả: <?php echo $s; ?></p>
    </div>
</body>
</html>