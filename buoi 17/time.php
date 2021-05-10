<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        Thời gian trong PHP
        1 - in ra thời gian hiện tại trong php
        sử dụng date("format")
        format định dạng thời gian
        H giờ 0 - 23
        h giờ 1 - 12
        i phút
        s giây
        d ngày
        m tháng
        Y năm
    </pre>

    <?php
        //CẤU HÌNH TIME:
        date_default_timezone_set("Asia/Ho_chi_Minh");

        echo date("H:i:s d-m-Y");
        echo "<br>". date("H:i:s d/m/Y");
        echo "<br>". date("H:i:s");
        echo "<br>". date("H:i");
        echo "<br>". date("d-m-Y");
        echo "<br>". date("d-m");
    ?>
</body>
</html>