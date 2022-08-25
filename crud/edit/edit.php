<?php 
  require '../../logic/functions.php';

  // ambil data di URL
  $id = $_GET["id"];

  // query data mahasiswa berdasarkan id
  $mobil = query("SELECT * FROM mobil WHERE id = $id")[0];

  // cek apakah tombol submit sudah ditekan atau belum 
  if (isset($_POST["submit"])) {
    
    // cek apakah data berhasil di tambahkan atau tidak
    if (edit($_POST) > 0 ) {
      
      echo "
        <script>
          alert('data berhasil diedit!');
          document.location.href = '../../index.php';
        </script>
        ";
    } else {
      echo "
        <script>
          alert('data gagal diedit!');
          document.location.href = '../../index.php';
        </script>
      ";
    }

  }


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/style.css">

    <title>Mobil</title>
  </head>
  <body>

    <!-- Start Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="../../index.php">Back</a>
    </nav>
    <!-- End Navbar -->

    <div class="container">
      <div class="row">
        <div class="col d-flex justify-content-center mt-4 mb-4">
          <h1>Edit Data Mobil</h1>
        </div>
      </div>
      <div class="row">
        <div class="col mt-4">
          <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $mobil["id"]; ?>" >
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" value="<?= $mobil["nama"]; ?>">
            </div>
            <div class="form-group">
              <label for="tipe">Tipe</label>
              <input type="text" class="form-control" id="tipe" name="tipe"  value="<?= $mobil["tipe"]; ?>">
            </div>
            <div class="form-group">
              <label for="brand">Brand</label>
              <input type="text" class="form-control" id="brand" name="brand" value="<?= $mobil["brand"]; ?>">
            </div>
            <div class="form-group">
              <label for="manufacture">Manufacture</label>
              <input type="text" class="form-control" id="manufacture" name="manufacture"  value="<?= $mobil["manufacture"]; ?>">
            </div>
            <div class="form-group">
              <label for="stok">Stok</label>
              <input type="number" class="form-control" id="stok" name="stok"  value="<?= $mobil["stok"]; ?>">
            </div>
            <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
          </form>
        </div>
      </div>
    </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="../../assets/js/jquery-3.6.0.min.js"></>
    <script src="../../assets/js/bootstrap.bundle.js"></script>
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>