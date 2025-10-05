<?php
$total = 0;         
$ulang = "y";         

while ($ulang == "y" || $ulang == "Y") {
    echo "===========================<br>";
    echo "      MENU KEDAI MAKAN     <br>";
    echo "===========================<br>";
    echo "1. Nasi Goreng  - Rp15000<br>";
    echo "2. Mie Goreng   - Rp12000<br>";
    echo "3. Ayam Bakar   - Rp20000<br>";
    echo "4. Es Teh       - Rp5000<br>";
    echo "5. Es Jeruk     - Rp7000<br>";
    echo "===========================<br>";

    $pilih = 1;  
    $jumlah = 2;  
    $ulang = "n"; 

    echo "Pilihan menu: $pilih<br>";

    switch ($pilih) {
        case 1:
            $menu = "Nasi Goreng";
            $harga = 15000;
            break;
        case 2:
            $menu = "Mie Goreng";
            $harga = 12000;
            break;
        case 3:
            $menu = "Ayam Bakar";
            $harga = 20000;
            break;
        case 4:
            $menu = "Es Teh";
            $harga = 5000;
            break;
        case 5:
            $menu = "Es Jeruk";
            $harga = 7000;
            break;
        default:
            echo "Menu tidak tersedia!<br>";
            $harga = 0;
            break;
    }

    echo "Jumlah pesanan: $jumlah<br>";

    $subtotal = $harga * $jumlah;
    $total += $subtotal;

    echo "$menu x $jumlah = Rp$subtotal<br>";
    echo "Subtotal saat ini: Rp$total<br><br>";

    echo "Apakah ingin tambah menu lain? ($ulang)<br><br>";
}
echo "===========================<br>";
echo "Total yang harus dibayar: Rp$total<br>";
echo "Terima kasih telah berbelanja!<br>";
?>
