<?php
    $str = "Visit W3Schools W3Schools";

    $pattern1 = "/w3schools/i";
    $pattern2 = "/aw3schools/i";
    
    // preg_match(param1, param2)
    // param1 là biểu thức chính quy
    // param2 là chuỗi mà sẽ tìm kiếm
    // preg_match() trả về 1 nếu tìm thấy trả về 0 nếu ko tìm thấy
    echo preg_match($pattern1, $str); // Outputs 1

    echo "<br>". preg_match($pattern2, $str); // Outputs 0

    // $matches là kết quả tìm kiếm được dựa vào biểu thức regex
    echo "<br>" . preg_match($pattern1, $str, $matches); // Outputs 1