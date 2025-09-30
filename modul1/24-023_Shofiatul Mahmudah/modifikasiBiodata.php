<!DOCTYPE html>
<html>
<body>

<?php
$nama = "Shopia";
$umur = 20;
$alamat = "Jl. PP.Annuqayah, Guluk-guluk, Sumenep";
$email = "shopia4@gmail.com";
$telepon = "081304111008";
$hobi = "Melukis, Menulis, Travelling";
?>

<table>
    <caption>Biodata Diri</caption>
    <tr>
        <th>Nama</th>
        <td><?php echo $nama; ?></td>
    </tr>
    <tr>
        <th>Umur</th>
        <td><?php echo $umur; ?> tahun</td>
    </tr>
    <tr>
        <th>Alamat</th>
        <td><?php echo $alamat; ?></td>
    </tr>
    <tr>
        <th>Email</th>
        <td><?php echo $email; ?></td>
    </tr>
    <tr>
        <th>Telepon</th>
        <td><?php echo $telepon; ?></td>
    </tr>
    <tr>
        <th>Hobi</th>
        <td><?php echo $hobi; ?></td>
    </tr>
</table>
</body>
</html>
