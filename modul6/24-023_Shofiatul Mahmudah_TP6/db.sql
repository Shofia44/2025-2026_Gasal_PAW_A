CREATE TABLE transaksi_master (
  id_nota INT AUTO_INCREMENT PRIMARY KEY,
  no_nota VARCHAR(20),
  tgl_nota DATE,
  nama_pelanggan VARCHAR(100)
);

CREATE TABLE transaksi_detail (
  id_detail INT AUTO_INCREMENT PRIMARY KEY,
  id_nota INT,
  nama_barang VARCHAR(100),
  qty INT,
  harga DECIMAL(10,2),
  FOREIGN KEY (id_nota) REFERENCES transaksi_master(id_nota)
);
