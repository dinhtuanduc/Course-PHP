<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        sử dụng vòng lặp for in ra thẻ 
        select form để chọn ngày , tháng , năm sinh
        ngày từ 1 đến 31
        tháng từ 1 đến 12
        năm sinh từ 1900 đến 2020
    </pre>

    <form action="">
        <label>sinh nhật</label>

        <select name="ngay">
            <option value="">Chọn ngày sinh</option>
            <?php
                for($i=1;$i<=31;$i++)
                {
                    echo "<option value='$i'> $i </option>";
                }
            ?>
        </select>

        <select name="thang">
            <option value="">Chọn tháng sinh</option>
            <?php
                for($i=1;$i<=12;$i++)
                {
                    echo "<option value='$i'> $i </option>";
                }
            ?>
        </select>


        <!-- //Cách đúng chuyên nghành -->
        <select name="nam">
            <option value="">Chọn năm sinh</option>
            <?php
                for($i=1990;$i<=2020;$i++)
                { ?>
                    <option value="<?php echo $i; ?>"> <?php echo $i; ?> </option>
                    
                <?php }
            ?>
        </select>
    </form>

</body>
</html>