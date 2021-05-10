<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>Document</title>
</head>
<body>

    <?php
    $cities1 = [
        0 => [
            "name" => "hà nội",
            "GDP" => "200.000.000$",
            "district" => ["quận tây hồ", "quận hoàn kiếm", "quận hai bà trưng"]
        ],
        1 => [
            "name" => "hồ chí minh",
            "GDP" => "500.000.000$",
            "district" => ["quận 1", "quận 2", "quận gò vấp"]
        ],
        2 => [
            "name" => "đà nẵng",
            "GDP" => "50.000.000$",
            "district" => ["quận sơn trà", "quận ngũ hành sơn", "quận hải châu"]
        ]
    ]
    ?>

    <div class="container">
        <table class="table table-hover     ">
            <thead>
            <tr>
                <th>Tên thành phố</th>
                <th>GDP</th>
                <th>Tổng số quận huyện</th>
                <th>Danh sách quận huyện</th>
            </tr>
            </thead>
            <tbody>
                <?php
                    if(is_array($cities1) && !empty($cities1)){
                            foreach($cities1 as $key => $value){
                                ?>
                                <tr>
                                    <td><?php echo $value["name"]; ?> </td>
                                    <td><?php echo $value["GDP"]; ?> </td>
                                    <td> <?php echo count($value["district"]); ?> </td>
                                    <td>
                                        <?php
                                        if(is_array($value["district"]) && !empty($value["district"])) {
                                                foreach($value["district"] as $keydistrict => $valuedistric){
                                                    ?> 
                                                    <div> <?php echo $valuedistric; ?> </div>
                                                <?php }
                                        }
                                        ?>
                                    </td>
                                </tr>
                            <?php }
                        }
                    ?>
                <!-- <tr>
                    <td>Hà nội</td>
                    <td>100.000.000$</td>
                    <td>3</td>
                    <td>
                        <div>quận tây hồ</div>
                        <div>quận hoàn kiếm</div>
                        <div>quận hai bà trưng</div>
                    </td>
                </tr> -->
            </tbody>
        </table>
    </div>
</body>
</html>