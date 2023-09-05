<?php
function connect(){
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_bob";
    $conn = mysqli_connect($host, $username, $password, $dbname);
    if (!$conn) {
        die("Kết nối thất bại: " . mysqli_connect_error());
    }
    return $conn;
}
?>