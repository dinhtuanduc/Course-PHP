<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    json với php chuyển 1 mảng hay 1 object trong php thành chuỗi json
    </pre>
    <?php
        $students =["Đức","Khánh","Ninh","Pháp","Nam","Trung","Duy"];
        //chuyển 1 mảng hay 1 object trong php thành chuỗi json
        $chuyen_students = json_encode($students);
        echo $chuyen_students;

        //từ json thành 1 dạng ban đầu của php
        $students2 = "$chuyen_students";
        $chuyen_students2 = json_decode($students2);
        echo "<pre>";
        print_r($chuyen_students2);

    ?>
</body>
</html>