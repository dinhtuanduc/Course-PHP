<?php
    $str = "Visit W3Schools and T2 W3Schools abc w3Schools";

    $pattern = "/w3schools/i";
    
    // $matches là kết quả tìm kiếm được dựa vào biểu thức regex
    // hàm preg_match_all() trả về số lần tìm thấy
    // trả về 0 là ko tìm thấy
    echo "<br>" . preg_match_all($pattern, $str, $matches); // Outputs 3
    
    echo "<pre>";
    print_r($matches);
    echo "</pre>";

    //preg_replace() được sử dụng để thay thế kết quả phù hợp với biểu thức regex trong chuỗi mẹ
    $subject = "hà nội là thủ đô của việt nam, hà nội có 7 triệu dân";
    $replacement = "thăng long";
    $regex = "/hà nội/i";
    $result = preg_replace($regex, $replacement, $subject);
    echo "<br>" . $result;
    ?>