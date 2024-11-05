CREATE DATABASE BAY_AKD

CREATE TABLE bay_mstjurusan (
    bay_kodejurusan char(2) NOT NULL,
    bay_namajurusan varchar(50) NOT NULL,
    PRIMARY KEY(bay_kodejurusan)
)

CREATE TABLE bay_mstmahasiswa (
    bay_nim char(12) NOT NULL,
    bay_nama varchar(50) NOT NULL,
    bay_kodejurusan char(2) DEFAULT NULL,
    PRIMARY KEY (bay_nim)
)

INSERT INTO bay_mstjurusan VALUES
    ('01', "S1 Manajemen"),
    ('02', "S1 Akuntansi"),
    ('03', "S1 Teknik Informatika"),
    ('04', "D3 Manajemen Informatika"),
    ('05', "S1 Sastra Jepang"),
    ('06', "D3 Bahasa Inggris"),
    ('07', "S1 Psikologi")

INSERT INTO bay_mstmahasiswa VALUES
('020310001', 'ALED', '01'),
('020310002', 'ALFIANSYAH HALOMOAN SIREGAR', '01'),
('020310003', 'PURNAMA CAHYA RAHAYU', '02'),
('020310004', 'MOCH DANAR ARDIWILAGA', '02'),
('020310005', 'SURYANA WIBOWO', '02'),
('020310006', 'DIAN KURNIA IRWAN', '03'),
('020310007', 'ASEP RAMDAN NURDIANSYAH', '03'),
('020310008', 'AJI KHOLIS SIROJUDIN', '03'),
('020310009', 'RANDY SETYAWAN', '04'),
('020310010', 'IRPAN M', '04'),
('020310011', 'KISWARI ADI PERMADI', '04'),
('020310012', 'ALIYAH NUR SALAMAH', '05'),
('020310013', 'SANTI SANTIKA WAHYUNI', '05'),
('020310014', 'FITRI ISWARI', '06'),
('020310015', 'YOGIE AVILINO', '06'),
('020310016', 'ROHENDI', '06'),
('020310017', 'AHMAD SAEFULLOH', '06'),
('020310018', 'M RIFKY NUGRAHA AL', '07'),
('020310019', 'JAENAL MUSTOFA', '07'),
('020310020', 'LIANAWATY', '07'),
('020310021', 'WENDA MURDANI', '08'),
('020310022', 'YUSUP EFENDI', '08'),
('020310023', 'MUMUN MANSYUR', '08'),
('020310024', 'JAYA NUGRAHA', '01'),
('020310025', 'AHMAD ROYANI', '01');

SELECT a.bay_nim, a.bay_nama, b.bay_namajurusan
FROM bay_mstmahasiswa a, bay_mstjurusan b 
WHERE a.bay_kodejurusan = b.bay_kodejurusan