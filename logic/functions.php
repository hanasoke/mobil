<?php 
// koneksi ke database
$conn = mysqli_connect("sql212.epizy.com", "epiz_32452501", "Ah5Mpbl2rAHUEfW", "epiz_32452501_mobil");

// ambil data dari tabel caffe / query data caffe

function query($query) {
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data) {
  global $conn;

  $nama = htmlspecialchars($data["nama"]);
  $tipe = htmlspecialchars($data["tipe"]);
  $brand = htmlspecialchars($data["brand"]);
  $manufacture = htmlspecialchars($data["manufacture"]);
  $stok = htmlspecialchars($data["stok"]);


  $query = "INSERT INTO mobil
              VALUES
              ('', '$nama', '$tipe', '$brand', '$manufacture', '$stok')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}


function hapus($id) {
  global $conn;
  mysqli_query($conn, "DELETE FROM mobil WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function edit($data) {
  global $conn;

  $id = $data["id"];
  $nama = htmlspecialchars($data["nama"]);
  $tipe = htmlspecialchars($data["tipe"]);
  $brand = htmlspecialchars($data["brand"]);
  $manufacture = htmlspecialchars($data["manufacture"]);
  $stok = htmlspecialchars($data["stok"]);
  
  $query = "UPDATE mobil SET 
                nama = '$nama',
                tipe = '$tipe',
                brand = '$brand',
                manufacture = '$manufacture',
                stok = '$stok'
              WHERE id = $id
            ";
  
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);

}


?>