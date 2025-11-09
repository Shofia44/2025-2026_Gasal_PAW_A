<?php
include "koneksi.php";
?>

<h2>Form Input Transaksi</h2>
<form method="post" action="save_transaksi.php">
  <fieldset style="width:60%">
    <legend>Data Nota (Master)</legend>
    No Nota: <input type="text" name="no_nota" required><br><br>
    Tanggal: <input type="date" name="tgl_nota" required><br><br>
    Nama Pelanggan: <input type="text" name="nama_pelanggan" required><br><br>
  </fieldset>

  <fieldset style="width:60%">
    <legend>Data Barang (Detail)</legend>
    <table border="1" cellpadding="5">
      <tr>
        <th>Nama Barang</th>
        <th>Qty</th>
        <th>Harga</th>
      </tr>
      <tr>
        <td><input type="text" name="nama_barang[]" required></td>
        <td><input type="number" name="qty[]" required></td>
        <td><input type="number" step="0.01" name="harga[]" required></td>
      </tr>
      <tr>
        <td><input type="text" name="nama_barang[]"></td>
        <td><input type="number" name="qty[]"></td>
        <td><input type="number" step="0.01" name="harga[]"></td>
      </tr>
    </table>
  </fieldset>

  <br>
  <input type="submit" name="simpan" value="Simpan Transaksi">
</form>
