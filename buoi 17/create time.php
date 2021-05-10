<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        tạo ra 1 thời gian
        mktime(hour, minute, second, month, day, year)

        Trong PHP có 2 loại time:
        -Loại 1: người đọc có thể đọc được
        -Loại 2: là timestamp - người đọc ko đọc đc - Đây là thời gian tính bằng s từ thời điểm 1.1.1978
        dùng để tính toán
    </pre>

    <?php
        $date1 = mktime(7, 20, 15, 1, 20, 2015);

        // date("format", time)
        // tham số format là bắt buộc phải truyển vào
        // thời gian time ko bắt buộc truyền
        // nếu ko truyền vào thì lấy ra time hiện tại
        $t1 = date("H:i:s d-m-Y", $date1);
        echo $t1;
    
        echo "<br>" . $date1;
    
    
        // cách 1 chuyển từ loại timestamp sang người đọc
        // date(format, timestamp)
    
        // chuyển ngược lại người đọc sang định dạng timestamp
        // dùng hàm strtotime(time, now)
        echo "<br>" . strtotime($t1);
    
        // có 1 chú ý với strtotime hàm kén định dạng thời gian được truyển vào
        // Y-m-d h:i:sa hay H:i:s d-m-Y thì được
        // truyền H:i:s d/m/Y thì ko ra kết quả đúng 
        // nên phải kiểm tra lại kết quả 

    ?>
</body>
</html>