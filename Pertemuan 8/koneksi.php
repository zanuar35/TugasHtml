<?php
/*untuk mengkoneksi ke database*/
    $host = "Localhost";
    $user = "root";
    $pass = "";
    $dbname = "php_crud";

    $conn = new mysqli($host,$user,$pass,$dbname);
/*jika koneksi gagal maka terjadi error*/
    if($conn->connect_error){
        die('koneksi gagal : '. $conn->connect_error);
    }
?>