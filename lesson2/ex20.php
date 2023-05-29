<?php
/*Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var()
*/
    function isValidEmail($string) {
        return filter_var($string, FILTER_VALIDATE_EMAIL) !== false;
    }

    // Test the function
    $email = "phamthianhh@gmail.com";

    if (isValidEmail($email)) {
        echo "The email is valid.";
    } else {
        echo "The email is not valid.";
    }
    ?>