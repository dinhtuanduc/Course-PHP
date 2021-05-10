<?php
// Hằng số không thể thay đổi một khi nó được khai báo.

// Các hằng số lớp có thể hữu ích nếu bạn cần xác định một số dữ liệu không đổi trong một lớp.

// Một hằng số lớp được khai báo bên trong một lớp với từ khóa const.

// Các hằng số lớp là trường hợp nhạy cảm. Tuy nhiên, nên đặt tên các hằng số trong tất cả các chữ cái viết hoa.

// Chúng ta có thể truy cập một hằng số từ bên ngoài lớp bằng cách sử dụng tên lớp theo sau là toán tử phân giải phạm vi (: :) theo sau là tên hằng, như ở đây:

    class goodbye{
        const SAY_GOODBYE = "Thank you for visiting W3Schools.com!";
    }
    echo goodbye::SAY_GOODBYE;