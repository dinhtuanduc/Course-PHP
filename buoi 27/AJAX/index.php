<?php
    include_once "db.php";
    $db = new db();
    $connection = $db->connection;

    $sql = "SELECT * FROM devvn_tinhthanhpho";

    $stmt = $connection->prepare($sql);
    $stmt ->execute();

    $stmt -> setFetchMode(PDO::FETCH_ASSOC);
    $provinces =$stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        ajax là gì ?
        ajax là 1 kỹ thuật load dữ liệu hay load 1 phần trang web
        mà không cần phải refresh F5 lại trang
    </pre>

    <select name="tinh" id="tinh">
        <option value="0">Chọn tỉnh tp</option>
        <?php 
            foreach($provinces as $province){
                ?>
                <option value="<?php echo $province["matp"] ?>"><?php echo $province["name"] ?></option>
                <?php
            }
        ?>
    </select>

    <select name="quan" id="quan">
        <option value="0">Danh sách quận</option>
    </select>

    <select name="xa" id="xa">
        <option value="0">Danh sách xã</option>
    </select>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script>
         $(document).ready(function (){

            $('select#tinh').on("change", function (){

                var matp = $(this).val();

                var dataSend1 ={matinh:matp};
                console.log(dataSend1);

                var ajaxSetup1 ={

                    //Link tới đâu:
                    url:"http://localhost/Learn-PHP/buoi%2027/AJAX/ajax.php",

                    //dữ liệu gửi đi:
                    data: dataSend1,

                    //method:
                    type: "POST",

                    //kiểu trả về:
                    dataType:"json",

                    //Trả về thành công
                    success : function(response1){
                        // response dữ liệu trả về từ máy chủ:
                        console.log(response1);
                        console.log(typeof response1);
                        if(typeof response1 == "object"){
                            var response_a = response1;
                        }else{
                            var response_a = JSON.parse(response1);
                        }
                        console.log(response_a);
                        if(response_a.html !="undefined"){
                            $("select#quan").html(response_a.html_districts);
                        }
                    },

                    //Trả về thất bại
                    error : function(xhr1){
                        console.log(xhr1);
                    }

                }

            //Bắt đầu của ajax;
            $.ajax(ajaxSetup1);
            })
        })


        $(document).ready(function(){
            $('select#quan').on("change", function (){

                var maqh= $(this).val();

                var dataSend2 ={maquanhuyen:maqh};
                console.log(dataSend2);

                var ajaxSetup2 ={

                    //Link tới đâu:
                    url:"http://localhost/Learn-PHP/buoi%2027/AJAX/ajax2.php",

                    //dữ liệu gửi đi:
                    data:{maquan:maqh},

                    //method:
                    type: "POST",

                    //kiểu trả về:
                    dataType:"json",
                    
                    //Trả về thành công
                    success : function(response2){
                        // response dữ liệu trả về từ máy chủ:
                        console.log(response2);
                        console.log(typeof response2);
                        if(typeof response2 == "object"){
                            var response_b = response2;
                        }else{
                            var response_b = JSON.parse(response2);
                        }
                        console.log(response_b);
                        if(response_b.html !="undefined"){
                            $("select#xa").html(response_b.html_xaphuongthitrans);
                        }
                    },

                    //Trả về thất bại
                    error : function(xhr2){
                        console.log(xhr2);
                    }

                }

                //Bắt đầu của ajax;
                $.ajax(ajaxSetup2);
                })

        })
    </script>
</body>
</html>