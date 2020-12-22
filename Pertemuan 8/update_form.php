<!-- Membuat file php untuk menghubungkan html dengan database -->
<?php
    include "koneksi.php";
    $kelas = ['SE-02-A','SE-02-B','SE-02-C'];
    $sql = "SELECT * FROM data";
    $data = $conn -> query($sql);

    $sql_mahasiswa = "SELECT * FROM data WHERE id=".$_GET['mahasiswa_id'];
    $data_mahasiswa = $conn->query($sql_mahasiswa);
    $view = $data_mahasiswa->fetch_array();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- inialisasi Bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Judul web pada tab browser -->
    <title>CRUD PHP</title>
  </head>
  <body>

    <!-- Membuat container untuk form input data -->
    <div class="container">
        <!-- Judul form -->
        <h1 class="text-center mt-5 mb-5">Form Mahasiswa</h1>
        <div class="row">
            <div class="col-lg-6 mb-5">
                <!-- Label  -->
                <h4>Input Data</h4>
                <?php include "read_message.php" ?>
                <form action="simpan.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="mahasiswa_id" value="<?= $view['Id'];?>">
                    <!-- grup Nama -->
                    <div class="form-group">
                        <!-- Label -->
                        <label for="nama">Nama</label>
                        <!-- Input text untuk input nama -->
                        <input type="text" name="nama" placeholder="Nama" class="form-control" value="<?= $view['Nama'];?> " required>
                    </div>
                    <!-- Grup Kelas -->
                    <div class="form-group">
                        <!-- Label -->
                        <label for="kelas">Kelas</label>
                        <!-- Membuat dropdown dengan script php data kelas yang telah ditentukan -->
                        <select name="kelas" class="form-control" required>
                            <option value="">Pilih</option>
                            <?php foreach($kelas as $kl): ?>
                            <option value="<?=$kl;?>"<?= ($kl == $view['Kelas']) ? 'selected': '';?>><?= $kl;?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <!-- Grup Alamat -->
                    <div class="form-group">
                        <!-- Label -->
                        <label for="alamat">Alamat</label>
                        <!-- Input text -->
                        <input type="text" name="alamat" placeholder="Alamat" class="form-control" value="<?= $view['Alamat']?>" required>
                    </div>
                    <!-- Membuat Button submit -->
                    <button type="submit" class="btn btn-success btn-block">Edit</button>
                    <a href="index.php" class="btn btn-warning btn-block">Kembali</a>
                </form>
            </div>

            <!-- Menampilkan data mahasiswa yang telah diinput -->
            <div class="col-lg-6">
                <!-- Judul -->
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Data Mahasiswa</span>

                     <?php

                    //TAMBAHAN AGAR DATA TERHITUNG
                    $con=mysqli_connect("localhost","root","","php_crud");
                    // Check connection
                        if (mysqli_connect_errno())
                        {
                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                        }

                        $sql="SELECT nama,kelas FROM data ORDER BY nama";

                        if ($result=mysqli_query($con,$sql))
                        {
                        // Return the number of rows in result set
                        $rowcount=mysqli_num_rows($result);
                        printf(" %d \n",$rowcount);
                        // Free result set
                        mysqli_free_result($result);
                        }

                        mysqli_close($con);
                        ?>
                    

                </h4>
                <!-- Menampilkan setiap data di database data -->
                <?php foreach($data as $dt) : ?>
                <div class="card mb-2">
                    <!-- Membuat card -->
                    <div class="card-body">
                        <!-- Membuat Baris -->
                        <div class="row">
                            <!-- Menampilkan Nama dengan mengambil data pada column nama pada database -->
                            <div class="col-md-6">
                                <h4><?= $dt['Nama'];?></h4>
                            </div>
                            <div class="col-md-6">
                                <a class="float-right ml-3 text-danger" href="hapus_data.php?mahasiswa_id=<?php echo $dt['Id'] ?>"
                                type="button" class="close">
                                    <span class="fa fa-trash"></span>
                            </a>
                            <a class="float-right ml-3 text-success" href="update_form.php?mahasiswa_id=<?php echo $dt['id']?>" type="button" class="close">
                                <span class="fa fa-edit"></span>
                                </a>
                                <!-- Menampilkan Kelas dengan mengambil data pada column Kelas pada database  -->
                                <p class="text-right"><?= $dt['Kelas'];?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Menampilkan Alamat dengan mengambil data pada column Alamat pada database  -->
                                <p><?= $dt['Alamat'];?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Akhir dari foreach php -->
                <?php endforeach;?>
            </div>
        </div>
    </div>
    
    <!-- Cdn jquery bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


  </body>
</html>