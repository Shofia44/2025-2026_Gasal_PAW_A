<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
    $no_nota = $_POST['no_nota'];
    $tgl_nota = $_POST['tgl_nota'];
    $nama_pelanggan = $_POST['nama_pelanggan'];

    $query_master = "INSERT INTO transaksi_master (no_nota, tgl_nota, nama_pelanggan)
                     VALUES ('$no_nota', '$tgl_nota', '$nama_pelanggan')";
    $result_master = mysqli_query($conn, $query_master);

    if ($result_master) {
        $id_nota = mysqli_insert_id($conn); 

        $nama_barang = $_POST['nama_barang'];
        $qty = $_POST['qty'];
        $harga = $_POST['harga'];

        for ($i = 0; $i < count($nama_barang); $i++) {
            if (!empty($nama_barang[$i])) {
                $query_detail = "INSERT INTO transaksi_detail (id_nota, nama_barang, qty, harga)
                                 VALUES ('$id_nota', '{$nama_barang[$i]}', '{$qty[$i]}', '{$harga[$i]}')";
                mysqli_query($conn, $query_detail);
            }
        }

        echo "Data transaksi berhasil disimpan ke dua tabel!";
    } else {
        echo "Gagal menyimpan data master!";
    }
}
?>
