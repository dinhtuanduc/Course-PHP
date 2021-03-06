<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_POST["filename"])){
            //Khai báo
            $filename = $_POST["filename"];
            $content = $_POST["content"];

            //Tạo ra file và mở file đó ra
            $name = fopen($filename,"w") or die("Unable to open file!");

            //Viết nội dung
            fwrite($name,$content);
            fclose($name);
        }

    ?>
<div class="container">
    <h1>Demo tạo file bằng php</h1>
    <div class="row">
        <div class="col-md-12">
            <form action="" name="folder" method="post">
                <div class="form-group">
                    <label>Nhập tên file kèm theo đuôi file ( vd index.txt ):</label>
                    <input type="text" name="filename" class="form-control">
                </div>

                <div class="form-group">
                    <label>Nhập nội dung file:</label>
                    <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">tạo file</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>