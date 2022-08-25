<?php 
require 'logic/functions.php';
$mobil = query("SELECT * FROM mobil");


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Mobil</title>
  </head>
  <body>
    
    <!-- Start Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary"">
      <div class="container">
        <a class="navbar-brand" href="#">Mobil</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="#">Features</a>
            <a class="nav-link" href="#">Pricing</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <!-- Start Body -->
    <div class="container">
      <div class="row">
        <div class="col d-flex justify-content-center mt-4 mb-4">
          <h1>Daftar Mobil</h1>
        </div>
      </div>
      <div class="row">
        <div class="col text-right">
          <a type="button" class="btn btn-primary mb-2 mr-0" href="crud/tambah/tambah.php" >Tambah Mobil</a>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <table class="table table-bordered">
            <thead>
              <tr class="text-center">
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Tipe</th>
                <th scope="col">Brand</th>
                <th scope="col">Manufacture</th>
                <th scope="col">Stok</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach($mobil as $row) : ?>
              <tr>
                <th scope="row">
                  <?= $i; ?>
                </th>
                <td>
                  <?= $row["nama"]; ?>
                </td>
                <td>
                  <?= $row["tipe"]; ?>
                </td>
                <td>
                  <?= $row["brand"]; ?>
                </td>
                <td>
                  <?= $row["manufacture"]; ?>
                </td>
                <td>
                  <?= $row["stok"]; ?>
                </td>
                <td class="d-flex justify-content-center">
                  <a href="crud/edit/edit.php?id=<?= $row["id"]; ?>" class="btn btn-success mb-2 mr-2">Edit</a>
                  <a href="crud/hapus/hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');" class="btn btn-danger mb-2">Hapus</a>
                </td>
              </tr>
              <?php $i++; ?>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- End Body -->
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>