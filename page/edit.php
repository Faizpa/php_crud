<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT BARANG</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>

    <div class="container col-md-6 mt-4">
        <h1>Table Barang</h1>
        <div class="card">
            <div class="card-header bg-success text-white">
                Edit Barang
            </div>
            <div class="card-body">
                <?php
                
                include ('../database/koneksi.php');

                $id = $_GET['id']; // mengambil id barang yang ingin diubah

                // menampilkan barang berdasarkan id
                $data = mysqli_query($koneksi, "select * from barang where id = '$id'");
                $row = mysqli_fetch_assoc($data);

                ?>
                <form action="" method="post" role="form">
                    <div class="form-group">
                        <label>Nama</label>
                        <!-- menampilkan nama barang -->
                        <input type="text" name="nama" required="" class="form-control" value="<?= $row['nama']; ?>">

                        <!-- ini digunakan untuk menampung id yang ingin diubah -->
                        <input type="hidden" name="id" required="" value="<?= $row['id']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" name="harga" class="form-control" value="<?= $row['harga']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="form-control" name="deskripsi"><?= $row['deskripsi']; ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit" value="simpan">update data</button>
                </form>

                <?php

                // jika klik tombol submit maka akan melakukan perubahan
                if (isset($_POST['submit'])) {
                    $id = $_POST['id'];
                    $nama = $_POST['nama'];
                    $harga = $_POST['harga'];
                    $deskripsi = $_POST['deskripsi'];

                    // query mengubah barang
                    mysqli_query($koneksi, "update barang set nama='$nama', harga='$harga', deskripsi='$deskripsi' where id='$id'") or die (mysqli_error($koneksi));

                    // redirect ke halaman index.php
                    echo "<script> alert ('data berhasil diupdate.'); window.location='index.php'; </script>";
                }

                ?>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>

</body>

</html>