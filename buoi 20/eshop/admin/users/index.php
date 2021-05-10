<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <?php
        include_once "../../define.php";
        // nạp file kết nối đến CSDL
        include_once "../../lib/connect.php";
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";

        $sql="SELECT * FROM users";

        $keyword="";
        if(isset($_POST["keyword"]) && strlen($_POST["keyword"])>2){
            $keyword=$_POST["keyword"];
            $sql="SELECT * FROM users WHERE username LIKE '%$keyword%'";
        }

        if(isset($_POST["order"]) && isset($_POST["order_dir"])){
            $order=$_POST["order"];
            $order_dir=$_POST["order_dir"];
            $sql .= " ORDER BY ". $order. " ". $order_dir;
        }else{
            $sql .= " ORDER BY id ASC";
        }
        // sử dụng prepare() để chuẩn bị thực hiện câu SQL
        $chuanbi =$connection->prepare($sql);
        // ->execute() biến $stmt thực hiện câu truy vấn SQL
        $chuanbi->execute();
        // đặt chế độ lấy dữ liệu ra từ biến $stmt thông qua $stmt->setFetchMode()
        // PDO::FETCH_ASSOC LẤY RA CÁC BẢN GHI DƯỚI DẠNG MẢNG ARRAY
        // PDO::FETCH_OBJ LẤY RA CÁC BẢN GHI DƯỚI DẠNG MẢNG OBJECT
        // SAU KHI LẤY DỮ LIỆU RA SẼ GÁN CHO $result
        $gan=$chuanbi->setFetchMode(PDO::FETCH_ASSOC);
        // $gan->fetchAll(); LẤY TẤT CẢ CÁC BẢN GHI THEO CÂU SQL TỪ $chuanbi
        // mà đã được setFetchMode theo chế độ mảng hay là mảng object
        $users=$chuanbi->fetchAll();
        
        echo "<pre>";
        print_r($users);
        echo "</pre>";

    ?>

    <div class="container">

        <h1>Admin quản người dùng</h1>

        <div>
        <form action="" name="search" method="post">
            <input name="keyword" value="<?php echo $keyword ?>" type="text" placeholder="nhập vào từ khóa tối thiểu 3 ký tự">
            <label for="">Sắp xếp</label>

            <select name="order">
            <?php
                if(isset($_POST["order"]) && $_POST["order"]=="id"){
                    $selected_id="selected";
                }else{
                    $selected_id="";
                }

                if(isset($_POST["order"]) && $_POST["order"]=="username"){
                    $selected_username="selected";
                }else{
                    $selected_username="";
                }

                if(isset($_POST["order"]) && $_POST["order"]=="user_avatar"){
                    $selected_user_avatar="selected";
                }else{
                    $selected_user_avatar="";
                }

                if(isset($_POST["order"]) && $_POST["order"]=="user_birth"){
                    $selected_user_birth="selected";
                }else{
                    $selected_user_birth="";
                }

            ?>
                <option value="id" <?php echo $selected_id ?> >id</option>
                <option value="username" <?php echo $selected_username ?>>username</option>
                <option value="user_avatar" <?php echo $selected_user_avatar ?>>user_avatar</option>
                <option value="user_birth" <?php echo $selected_user_birth ?>>user_birth</option>
            </select>

            <select name="order_dir">
            <?php
                if(isset($_POST["order_dir"]) && $_POST["order_dir"]=="ASC"){
                    $selected_ASC="selected";
                }else{
                    $selected_ASC="";
                } 

                if(isset($_POST["order_dir"]) && $_POST["order_dir"]=="DESC"){
                    $selected_DESC="selected";
                }else{
                    $selected_DESC="";
                } 
            ?>
                <option value="ASC" <?php echo $selected_ASC ?>>Tăng dần</option>
                <option value="DESC" <?php echo $selected_DESC ?>>Giảm dần</option>
            </select>
            <button type="submit" class="btn btn-success">Tìm kiếm</button>
        </form>
    </div>

        <div class="">
            <a href="<?php echo domain.'/admin/users/create.php'?>" class="btn btn-info">Thêm người dùng</a>
        </div>

        <div class="row">
        <div class="col-md-12">

            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Ảnh</th>
                    <th>Sinh nhật</th>
                    <th>Hành động</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                        if(is_array($users) && !empty($users)){
                            foreach($users as $user){ ?>
                                <?php $id=$user["id"]; ?>
                                <tr>
                                    <td><?php echo $user["id"] ?></td>
                                    <td><?php echo $user["username"] ?></td>
                                    <td><?php echo $user["user_avata"] ?></td>
                                    <td><?php echo $user["user_birth"] ?></td>
                                    <td>
                                        <a href="<?php echo domain."/admin/users/edit.php?id=$id"?>" class="btn btn-warning">Sửa</a>

                                        
                                        <a href="<?php echo domain."/admin/users/delete.php?id=$id"?>" class="btn btn-danger">Xóa</a>
                                    </td>
                                </tr>
                                
                            <?php }
                        }

                    ?>
                </tbody>
            </table>

    </div>
<script>
    function confirmdelete(link){
        var dk = confirm("Bạn có chắc là muốn xóa không");
        if(dk==true){
            window.location.href = <?php echo domain."/admin/users/delete.php?id=$id"?>;
        }
        return false
    }
</script>


</body>
</html>