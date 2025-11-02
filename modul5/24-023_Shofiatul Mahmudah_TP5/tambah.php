<?php
include "koneksi.php"; // koneksi ke database

// Cek apakah tombol simpan ditekan
if (isset($_POST['simpan'])) {
    $nama   = $_POST['nama'];
    $telp   = $_POST['telp'];
    $alamat = $_POST['alamat'];

    // Query untuk menyimpan data ke database
    $query = "INSERT INTO supplier (nama, telp, alamat) VALUES ('$nama', '$telp', '$alamat')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert('Data berhasil disimpan!'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Gagal menyimpan data!');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Master Supplier Baru</title>
    <style>
        body { font-family: Arial; margin: 30px; }
        h2 { color: #007BFF; }
        form { width: 50%; }
        table { width: 100%; }
        td { padding: 8px; }
        input[type=text] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .btn {
            padding: 8px 15px;
            border: none;
            border-radius: 4px;
            color: white;
            cursor: pointer;
            text-decoration: none;
        }
        .btn-simpan { background-color: green; }
        .btn-batal { background-color: red; }
    </style>
</head>
<body>

<h2>Tambah Data Master Supplier Baru</h2>

<form method="post" action="">
  <table>
    <tr>
      <td width="100">Nama</td>
      <td><input type="text" name="nama" placeholder="Nama" required></td>
    </tr>
    <tr>
      <td>Telp</td>
      <td><input type="text" name="telp" placeholder="Telp" required></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td><input type="text" name="alamat" placeholder="Alamat" required></td>
    </tr>
    <tr>
      <td></td>
      <td>
        <button type="submit" name="simpan" class="btn btn-simpan">Simpan</button>
        <a href="index.php" class="btn btn-batal">Batal</a>
      </td>
    </tr>
  </table>
</form>

</body>
</html>
