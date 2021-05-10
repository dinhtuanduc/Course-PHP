<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        Vòng lặp mảng đa chiều bằng foreach
    </pre>

    <?php
        $cities=[];

        $cities[] = ["name"=>"Hà Nội","district"=>["Quận Hoàng mai", "Quận Long Biên"] ];
        $cities[] = ["name"=>"Hò Chí Minh","district"=>["Quận 1", "Quận 2"] ];
        $cities[] = ["name"=>"Đà Nẵng","district"=>["Quận Sơn Trà", "Quận Hành Sơn"] ];
        ?>
        <h1>In ra giá trị vòng lặp foreach</h1>

        <?php
        if(is_array($cities) && !empty($cities)){
            ?>
            <ul>
                <?php
                    foreach($cities as $key => $value){
                        ?>
                    <li>
                        <?php echo $value["name"]; ?>
                        <?php
                            if(is_array($value["district"]) && !empty($value["district"])){
                                ?>
                                <ul>
                                    <?php
                                    foreach($value["district"] as $keydistrict => $valuedistrict){
                                        ?>
                                        <li> <?php echo $valuedistrict; ?> </li>
                                    <?php }
                                    ?>
                                </ul>
                            <?php } 
                            ?>
                    </li>
                    <?php }
                ?>
            </ul>
        <?php }
        ?>
</body>
</html>