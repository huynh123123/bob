<?php

// Hàm kết nối đến CSDL
function connect(){
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_bob";

    // Kết nối đến CSDL
    $conn = mysqli_connect($host, $username, $password, $dbname);

    // Kiểm tra kết nối
    if (!$conn) {
        die("Kết nối thất bại: " . mysqli_connect_error());
    }

    return $conn;
}
?>