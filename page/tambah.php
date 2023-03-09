<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH BARANG</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>

    <div class="container col-md-6 mt-4">
        <h1>Table Barang</h1>
        <div class="card">
            <div class="card-header bg-success text-white">
                Tambah Barang
            </div>
            <div class="card-body">
                <form action="" method="post" role="form">
                    <div class="form-group mb-4">
                        <label>Nama</label>
                        <input type="text" name="nama" required="" class="form-control">
                    </div>
                    <div class="form-group mb-4">
                        <label>Harga</label>
                        <input type="text" name="harga" class="form-control">
                    </div>
                    <div class="form-group mb-4">
                        <label>Deskripsi</label>
                        <textarea class="form-control" name="deskripsi"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit" value="simpan">Simpan data</button>
                </form>

                <?php
                include('../database/koneksi.php');

                // melakukan pengecekan jika button submit diklik maka akan menjalankan perintah simpan dibawah ini
                if (isset($_POST['submit'])) {
                    // menampung data dari inputan
                    $nama = $_POST['nama'];
                    $harga = $_POST['harga'];
                    $deskripsi = $_POST['deskripsi'];

                    // query untuk menambahkan barang ke database, pastikan urutan nya sama dengan di database
                    $datas = mysqli_query($koneksi, "insert into barang (nama, harga, deskripsi) values ('$nama', '$harga', '$deskripsi')") or die(mysqli_error($koneksi));
                    // id barang tidak dimasukkan, karena sudah menggunakan AUTO_INCREMENT, id akan otomatis

                    // iniuntuk menampilkan alert berhasil dan redirect ke halaman index
                    echo "<script> alert ('data berhasil disimpan.'); window.location='index.php';</script>";
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