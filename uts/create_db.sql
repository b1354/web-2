CREATE DATABASE BAY_PENJUALANDB;

CREATE TABLE bay_mstbarang (
    bay_kodebarang CHAR(4) NOT NULL PRIMARY KEY,
    bay_namabarang VARCHAR(50),
    bay_harga INT,
    bay_jumlah INT
);

INSERT INTO bay_mstbarang (bay_kodebarang, bay_namabarang, bay_harga, bay_jumlah) VALUES
('0101', 'Notebook Core i3', 4500000, 12),
('0102', 'Printer', 1500000, 10),
('0103', 'Monitor 21 Inch', 2500000, 22);

CREATE TABLE bay_trxpenjualan (
    bay_idpenjualan INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    bay_kodebarang VARCHAR(10),
    bay_jumlah INT,
    tanggal TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (bay_kodebarang) REFERENCES bay_mstbarang(bay_kodebarang)
);