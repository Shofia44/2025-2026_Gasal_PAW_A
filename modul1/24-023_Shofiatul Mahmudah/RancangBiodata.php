<!DOCTYPE html>
<html>
<head>
    <title>Biodata Diri</title>
</head>
<body>

<h2>Biodata Diri</h2>

<form method="GET" action="">
    <label>Nama:</label><br>
    <input type="text" name="nama"><br><br>

    <label>Umur:</label><br>
    <input type="number" name="umur"><br><br>

    <label>Alamat:</label><br>
    <input type="text" name="alamat"><br><br>

    <label>Email:</label><br>
    <input type="email" name="email"><br><br>

    <label>Telepon:</label><br>
    <input type="text" name="telepon"><br><br>

    <label>Hobi:</label><br>
    <input type="text" name="hobi"><br><br>

    <input type="submit" value="Tampilkan Biodata">
</form>

<?php
if (isset($_GET['nama'])) {
    $nama = $_GET['nama'];
    $umur = $_GET['umur'];
    $alamat = $_GET['alamat'];
    $email = $_GET['email'];
    $telepon = $_GET['telepon'];
    $hobi = $_GET['hobi'];
?>

    <h2>Biodata Diri</h2>
    <table border="1" cellpadding="10">
        <tr>
            <td>Nama</td>
            <td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <td>Umur</td>
            <td><?php echo $umur; ?> tahun</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><?php echo $alamat; ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $email; ?></td>
        </tr>
        <tr>
            <td>Telepon</td>
            <td><?php echo $telepon; ?></td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td><?php echo $hobi; ?></td>
        </tr>
    </table>

<?php } ?>

</body>
</html>
