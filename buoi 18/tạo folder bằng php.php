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
        print_r($_POST);
        echo "</pre>";

        if(isset($_POST["folder_path"])){
            $folder_path = $_POST["folder_path"];

            //file_exists: là kiểm tra xem file đó đã tồn tại hay chưa
            //Nếu file folder không tồn tại thì tạo ra folder ms
            if(!file_exists($folder_path)){
                //Hàm mkdir() dùng để tạo một thư mục (sau khi hàm này thực thi xong, nếu tạo thư mục thành công thì nó sẽ trả về giá trị TRUE, ngược lại sẽ trả về giá trị FALSE)
                //mkdir(path, mode) :path - bắt buộc ... mode - ko bắt buộc
                mkdir($folder_path,0777,true);
                if(file_exists($folder_path)){
                    echo "Tạo folder thành công";
                }else{
                    echo "Tạo folder không thành công";
                }
            }
            //Nếu file folder đã tồn tại thông báo
            else{
                echo "Folder này đã tồn tai!";
            }
        }

    ?>
    <div class="container">
        <h1>Demo tạo folder bằng php</h1>
        <div class="row">
            <div class="col-md-12">
                <form action="" name="folder" method="post">
                    <div class="form-group">
                        <label>Nhập đường dẫn folder:</label>
                        <input type="text" name="folder_path" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">tạo folder</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>