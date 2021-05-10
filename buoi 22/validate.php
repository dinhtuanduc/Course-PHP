<?php session_start(); 

    $error =[];
    $name=$phone=$email=$gender=$birth="";
    if(isset($_POST) && !empty($_POST)){
        //Name
        if(!isset($_POST["name"]) || empty($_POST["name"])){
            $error["name"]="Vui lòng nhập tên";

        }else{
            $name=trim($_POST["name"]);
            $pattern_name="/^([A-Za-zÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]+\b ){1,4}[A-Za-zÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]+$/";
            $validate_name=preg_match_all($pattern_name,$name,$matches);
            if(!$validate_name){
                $error["name"]="Bạn đang nhập sai tên";
            }
        }

        //PHONE
        if(!isset($_POST["phone"]) || empty($_POST["phone"])){
            $error["phone"]="Vui lòng nhập số điện thoại";
        }else{
            $phone=trim($_POST["phone"]);
            $pattern_phone="/^[0-9]{10}$/i";
            $validate_phone=preg_match_all($pattern_phone,$phone,$matches);
            if(!$validate_phone){
                $error["phone"]="Bạn đang nhập sai số điện thoại";
            }
        }

        //EMAIL
        if(!isset($_POST["email"]) || empty($_POST["email"])){
            $error["email"]="Vui lòng nhập Email";
        }else{
            $phone=trim($_POST["email"]);
            $pattern_email="/^([a-zA-Z0-9]{3,})@([a-zA-Z0-9]{3,})/i";;
            $validate_email=preg_match_all($pattern_email,$email,$matches);
            if(!$validate_email){
                $error["email"]="Bạn đang nhập sai email";
            }
        }

        //BIRTH
        if(!isset($_POST["birthday"]) || empty($_POST["birthday"])){
            $error["birthday"]="Vui lòng nhập ngày thàng năm sinh";
        }else{
            $birth=trim($_POST["birthday"]);
            $pattern_birth="/^([0-9]{4})-([0-9]{2})-([0-9]{2})$/i";
            $validate_birth=preg_match_all($pattern_birth,$birth,$matches);
            if(!$validate_birth){
                $error["birthday"]="Bạn đang nhập sai ngày tháng năm sinh";
            }
        }

        //GENDER
        if(!isset($_POST["gender"]) || empty($_POST["gender"])){
            $error["gender"]="Vui lòng chọn giới tính";
        }else{
            $gender=(int) $_POST["gender"];
            if(!in_array($gender,[1,2])){
                $error["gender"]="Bạn đang chọn sai giới tính";
            }
        }

        //GHI CHÚ
        if(!isset($_POST["note"]) || empty($_POST["note"])){
            $error["note"]="Vui lòng nhập ghi chú";
        }else{
            $note=trim($_POST["note"]);
            $pattern_note=explode(" ", $note);
            $validate_note=count($pattern_note);
            if($validate_note>200){
                $error["note"]="Bạn đã nhập quá 200 ký tự";
            }
        }

        if(empty($error)){
            $_SESSION["profile"] =$_POST;
            header("location: index.php");
            exit();
        }
    }

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Profile</h1>

    <pre>
        khi form profile submit đi nếu hợp lệ
        chuyển hướng đến file profile.php in ra các dữ liệu lấy được
        header("Location: url");
        exit();
        url là link ví dụ profile.php
        - không hợp lệ
        in ra thông báo lỗi
        - in ra dữ liệu đã nhập trong form khi có lỗi
    </pre>



    <form name="profile" method="post" action="">
        <div>
            <span style="color: red; font-style: italic;"></span>
            <label>Tên sinh viên</label>
            <p style="font-size: 10px">Nhập đủ họ tên ( tối thiểu phải có hai chữ )</p>
            <input type="text" name="name" value="<?php echo $name ?>" autocomplete="off">
            
            <?php
                if(isset($error["name"]) && !empty($error["name"])){
                    echo " <span style='color: red; font-style: italic;'>".$error['name']."</span>";
                }
            ?>
        </div>

        <div>
            <label>Số điện thoại sinh viên</label>
            <p style="font-size: 10px">(chỉ được nhập 10 số)</p>
            <input type="text" name="phone" value="<?php echo $phone ?>" autocomplete="off">
            <?php
                if(isset($error["phone"]) && !empty($error["phone"])){
                    echo " <span style='color: red; font-style: italic;'>".$error['phone']."</span>";
                }
            ?>
        </div>

        <div>
            <label>Email sinh viên</label>
            <input type="email" name="email" value="<?php echo $email ?>" autocomplete="off">
            <?php
                if(isset($error["email"]) && !empty($error["email"])){
                    echo " <span style='color: red; font-style: italic;'>".$error['email']."</span>";
                }
            ?>
        </div>

        <div>
            <label>Ngày tháng năm sinh (YYYY-MM-DD) (1997-10-05)</label>
            <input type="text" name="birthday" value="<?php echo $birth ?>" autocomplete="off">
            <?php
                if(isset($error["birthday"]) && !empty($error["birthday"])){
                    echo " <span style='color: red; font-style: italic;'>".$error['birthday']."</span>";
                }
            ?>
        </div>


        <div>
            <label>Giới tính</label>
            <input type="radio" name="gender" value="1" <?php echo ($gender==1) ? "checked" : "" ?>> Nam
            <input type="radio" name="gender" value="2" <?php echo ($gender==2) ? "checked" : "" ?>> Nữ
            <?php
                if(isset($error["gender"]) && !empty($error["gender"])){
                    echo " <span style='color: red; font-style: italic;'>".$error['gender']."</span>";
                }
            ?>
        </div>

        <div>
            <label>Link github ( bắt đầu bằng https://github.com/username</label>
            <input type="text" name="website" value="<?php echo (isset($_POST["website"])) ? $_POST["website"] : "" ?>" autocomplete="off">
        </div>

        <div>
            <label>Điểm sinh viên (0 - 10)</label>
            <input type="number" name="point" value="<?php echo (isset($_POST["point"])) ? $_POST["point"] : "" ?>" autocomplete="off">
        </div>

        <div>
            <p>Ghi chú ( chỉ được nhập tối đa 200 chữ )</p>
            <textarea name="note" cols="50" rows="10"></textarea>
            <?php
                if(isset($error["note"]) && !empty($error["note"])){
                    echo " <span style='color: red; font-style: italic;'>".$error['note']."</span>";
                }
            ?>
        </div>

        <div>
            <input type="submit" name="sumbit" value="In thông tin" autocomplete="off">
        </div>
    </form>

</body>
</html>