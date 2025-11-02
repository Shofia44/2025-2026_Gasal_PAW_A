<?php
include "koneksi.php";

// Ambil data berdasarkan ID yang dikirim lewat URL (misal edit.php?id=1)
$id = $_GET['id'];

// Ambil data supplier dari database
$query = mysqli_query($conn, "SELECT * FROM supplier WHERE id='$id'");
$data = mysqli_fetch_assoc($query);

// Jika tombol update ditekan
if (isset($_POST['update'])) {
    $nama   = $_POST['nama'];
    $telp   = $_POST['telp'];
    $alamat = $_POST['alamat'];

    // Update data di database
    $update = mysqli_query($conn, "UPDATE supplier SET 
        nama='$nama', 
        telp='$telp', 
        alamat='$alamat' 
        WHERE id='$id'");

    if ($update) {
        echo "<script>alert('Data berhasil diupdate!'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Gagal mengupdate data!');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit Data Master Supplier</title>
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
    .btn-update { background-color: green; }
    .btn-batal { background-color: red; }
  </style>
</head>
<body>

<h2>Edit Data Master Supplier</h2>

<form method="post" action="">
  <table>
    <tr>
      <td width="100">Nama</td>
      <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>" required></td>
    </tr>
    <tr>
      <td>Telp</td>
      <td><input type="text" name="telp" value="<?php echo $data['telp']; ?>" required></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td><input type="text" name="alamat" value="<?php echo $data['alamat']; ?>" required></td>
    </tr>
    <tr>
      <td></td>
      <td>
        <button type="submit" name="update" class="btn btn-update">Update</button>
        <a href="index.php" class="btn btn-batal">Batal</a>
      </td>
    </tr>
  </table>
</form>

</body>
</html>
