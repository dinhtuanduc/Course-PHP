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
<table align="center" border="1" cellpadding="0" cellspacing="1" style="width:600px">
    <thead>
    <tr>
        <th>
            <p><strong>TT</strong></p>
        </th>
        <th>
            <p><strong>Nhóm đối tượng khách hàng</strong></p>
        </th>
        <th>
            <p><strong>Giá bán điện</strong></p>
            <p><strong>(đồng/kWh)</strong></p>
        </th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>
            <p>1</p>
        </td>
        <td>
            <p>Giá bán lẻ điện sinh hoạt</p>
        </td>
        <td>
            <p>&nbsp;</p>
        </td>
    </tr>
    <tr>
        <td>
            <p>&nbsp;</p>
        </td>
        <td>
            <p>Bậc 1: Cho kWh từ 0 - 50</p>
        </td>
        <td>
            <p>1.678</p>
        </td>
    </tr>
    <tr>
        <td>
            <p>&nbsp;</p>
        </td>
        <td>
            <p>Bậc 2: Cho kWh từ 51 - 100</p>
        </td>
        <td>
            <p>1.734</p>
        </td>
    </tr>
    <tr>
        <td>
            <p>&nbsp;</p>
        </td>
        <td>
            <p>Bậc 3: Cho kWh từ 101 - 200</p>
        </td>
        <td>
            <p>2.014</p>
        </td>
    </tr>
    <tr>
        <td>
            <p>&nbsp;</p>
        </td>
        <td>
            <p>Bậc 4: Cho kWh từ 201 - 300</p>
        </td>
        <td>
            <p>2.536</p>
        </td>
    </tr>
    <tr>
        <td>
            <p>&nbsp;</p>
        </td>
        <td>
            <p>Bậc 5: Cho kWh từ 301 - 400</p>
        </td>
        <td>
            <p>2.834</p>
        </td>
    </tr>
    <tr>
        <td>
            <p>&nbsp;</p>
        </td>
        <td>
            <p>Bậc 6: Cho kWh từ 401 trở lên</p>
        </td>
        <td>
            <p>2.927</p>
        </td>
    </tr>
    </tbody>
</table>
<h1>Tiền điện: </h1>
<form name="tiendien" method="get" action="http://localhost:8080/AAAAAAAAAAAAAAAAAAAAAAAAAAAA/buoi%2016/get%20ti%E1%BB%81n%20%C4%91i%E1%BB%87n.php">
    <p>
        <label>Tổng số điện tiêu thụ ( có thể nhập số < 0 )</label>
        <input name="sodien" id="sodien" type="text" value="">
        <span id="error_sodien" style="color: red;font-style: italic;"> </span>
    </p>
    <p>
        <input type="submit" onclick="dieukien(); return false;" name="submit" value="Tính số tiền phải trả">
    </p>
</form>
<script>  </script>

<script>
    // $(document).ready(function(){
    //     $('submit').click(function(){
    //         var sodien=$('#sodien').val;
    //         if(sodien>0){
    //             $('#error_sodien').css('boder');
    //             submit.disabled = true;  
    //         }else{
    //             $('#error_sodien').innerHTML="Vui lòng nhập số điện từ 0 - 2000. Cảm ơn!";   
    //         }
    //     });
    // });
    function dieukien(){
        var sodien=document.getElementById("sodien").value;
        if(sodien>=0){
            document.getElementById("error_sodien").innerHTML="";
            submit.disabled = true;  
        }else{
            document.getElementById("error_sodien").innerHTML="Vui lòng nhập số điện từ 0 - 2000. Cảm ơn!";   
        }
    }
</script>
</body>
</html>