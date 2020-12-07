<?php
    include "koneksi.php";

    //menargetkan nama di database
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];

    // query untuk insert data
    $sql = "Insert into data(nama,kelas,alamat) Values ('$nama','$kelas','$alamat')";
    $add = $conn -> query($sql);

    // dari index.php
    if($add){
        $conn-> close();
        header("location:index.php");
        exit();
    }else{ // jika error
        echo "Error: ".$conn->error;
        $conn->close();
        exit();
    }
?>