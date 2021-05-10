<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //Dạng 1: mảng chỉ số
         $cities =array("Hà Nội", "Hồ Chí Minh", "Nam Định", "Vinh");
         echo "<pre>";
         print_r($cities);
         echo "</pre>";
        //Cách gán key => value: $cities =array(0 =>"Hà Nội",1 => "Hồ Chí Minh",2 => "Nam Định",3 => "Vinh");
        //Hủy
        unset($cities[2]);
        echo "<pre>";
         print_r($cities);
         echo "</pre>";


          //Dạng 2: dạng kết hợp keey là 1 chuỗi hay số có ít nhất 1 key ko phải là số:
          $cities2=["hn"=>"Hà Nôi","hcm"=>"Hồ Chí Minh","nd"=>"Nam Định"];
          //Muốn dùng vòng lặp phải dùng vòng lặp foreach() chứ ko thể dùng for,while
          ?>
          <select name="city">
          <?php
          foreach($cities2 as $key => $value){ ?>
                <option value="<?php echo $key; ?>"> <?php echo $value; ?></option>      
          <?php }
          ?>
          </select>
            <h1>Cách rút gọn</h1>
            <?php
            foreach($cities2 as $value){ ?>
                    <div><?php echo $value; ?></div>      
            <?php }
            ?>
</body>
</html>