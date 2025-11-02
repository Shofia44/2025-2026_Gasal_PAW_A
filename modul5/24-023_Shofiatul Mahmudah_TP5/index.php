<?php include "koneksi.php"; ?>

<!DOCTYPE html>
<html>
<head>
  <title>Data Master Supplier</title>
  <style>
    body { font-family: Arial; margin: 30px; }
    h2 { color: #007BFF; }
    table { border-collapse: collapse; width: 80%; }
    th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
    th { background-color: #cfe2f3; }
    .btn {
      padding: 5px 10px; border: none; border-radius: 4px; cursor: pointer;
      color: white; text-decoration: none;
    }
    .btn-edit { background-color: orange; }
    .btn-hapus { background-color: red; }
    .btn-tambah {
        background-color: green;
    }
  </style>
</head>
<body>

<h2>Data Master Supplier</h2>
<a href="tambah.php" class="btn btn-tambah">Tambah Data</a>
<br><br>

<table>
  <tr>
    <th>No</th>
    <th>Nama</th>
    <th>Telp</th>
    <th>Alamat</th>
    <th>Tindakan</th>
  </tr>

  <?php
  $no = 1;
  $result = mysqli_query($conn, "SELECT * FROM supplier");

  while ($data = mysqli_fetch_array($result)) {
      echo "
      <tr>
        <td>$no</td>
        <td>{$data['nama']}</td>
        <td>{$data['telp']}</td>
        <td>{$data['alamat']}</td>
        <td>
          <a href='edit.php?id={$data['id']}' class='btn btn-edit'>Edit</a>
          <a href='hapus.php?id={$data['id']}' class='btn btn-hapus' onclick='return confirm(\"Yakin ingin hapus?\")'>Hapus</a>
        </td>
      </tr>";
      $no++;
  }
  ?>
</table>

</body>
</html>
