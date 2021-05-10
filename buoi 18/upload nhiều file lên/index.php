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
        echo "<pre>";
        var_dump($_FILES);
        echo "</pre>";

        if(isset($_POST["submit"])){
            echo "<pre>";
            print_r($_FILES);
            echo "</pre>";

            //Kiểm tra xem có folder uploads chưa - Nếu chưa thì tạo folder uploads. Và đây là đường dẫn
            $target_dir ="uploads/";
            if(!file_exists($target_dir)){
                mkdir($target_dir,0777,true);
            }

            //Kiểm tra đã chọn file và file đó có tồn tai không - Sau đó đếm file
            if(is_array($_FILES["uploadimage"]["name"]) && !empty($_FILES["uploadimage"]["name"])){
                $cout_upload_file =count($_FILES["uploadimage"]["name"]);
            }
            
            //Dùng vòng lặp để đếm phần tử trong mảng để xác định đc vị trí của nó
            for($i=0;$i < $cout_upload_file;$i++){

                //địa chỉ đường dẫn
                 $target_file =  $target_dir.basename($_FILES["uploadimage"]["name"][$i]);

                 //nếu file đã được upload lên thì báo thành công;
                 if(move_uploaded_file($_FILES["uploadimage"]["tmp_name"][$i], $target_file)){
                     echo "Tải ảnh thành công";
                 }else{
                     echo "Tải ảnh không thành công";
                 }
            }
        }


    ?>
    

    <div class="container">
        <h1>Demo Mutile upload file</h1>
        <div class="row">
            <div class="col-sm-12">
                <form action="" name="upload" method="post" enctype="multipart/form-data">
                    <p>
                        <label for="">Upload file</label>
                        <input type="file" name="uploadimage[]" multiple>
                    </p>
                    <p>
                        <input type="submit" name="submit" value="Upload">
                    </p>
                </form>
            </div>
        </div>
    </div>

</body>
</html>