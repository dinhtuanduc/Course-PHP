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
        ?>
        <select name="thanhpho">
        <?php
        for($i=0; $i<count($cities);$i++){
        ?>
            <option value="<?php echo $i; ?>"><?php echo $cities[$i]; ?></option>
        <?php }
        ?>
        </select>
        <?php
    ?>
</body>
</html>