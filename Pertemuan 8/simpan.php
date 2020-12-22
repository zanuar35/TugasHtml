<?php
    include "koneksi.php";
    include "create_message.php";

    //menargetkan nama di database
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
    $error = false;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    
if(isset($_POST['mahasiswa_id'])) {
    $sql = "UPDATE data SET nama='$nama', kelas='$kelas', alamat='$alamat', gambar='$target_file' WHERE id=".$_POST['mahasiswa_id'];
    $edit = $conn->query($sql);

    if ($_FILES["gambar"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $error = true; 
    }

    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $error = true; 
    }

    if ($error == true) {
        echo "Sorry, your file was not uploaded."; 
    } else {
        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["gambar"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file."; 
        } 
    }

    if($edit) {
        $conn->close();
        create_message('Ubah data berhasil','success','check');
        header("location:".$_SERVER['HTTP_REFERER']);
        exit();
    } else {
        $conn->close();
        create_message("Error: " . $sql . "<br>" . $conn->error,"danger","warning");
        header("location:".$_SERVER['HTTP_REFERER']);
        exit();
    }
} else {

    $sql = "INSERT into data(nama, kelas, alamat, gambar) VALUES('$nama','$kelas','$alamat','$target_file')";
    $add = $conn->query($sql);
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $error = true; 
    }

    if ($_FILES["gambar"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $error = true; 
    }

    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $error = true; 
    }

    if ($error == true) {
        echo "Sorry, your file was not uploaded."; 
    } else {
        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["gambar"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file."; 
        } 
    }

    if($add) {
        $conn->close();
        create_message('Simpan data berhasil','success','check');
        header("location:".$_SERVER['HTTP_REFERER']);
        exit();
    } else {
        $conn->close();
        create_message("Error: " . $sql . "<br>" . $conn->error,"danger","warning");
        header("location:".$_SERVER['HTTP_REFERER']);
        exit();
    }
}

?>