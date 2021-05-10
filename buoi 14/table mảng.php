<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    $cities =array("Hà Nội", "Hồ Chí Minh", "Nam Định", "Vinh");
                    if(is_array( $cities) && !empty($cities)){

                        for($i=0; $i<count($cities);$i++){
                        ?>
                            <tr>
                                <td><?php echo $i+1; ?></td>
                                <td><?php echo $cities[$i] ?></td>
                            </tr>
                        <?php }
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>