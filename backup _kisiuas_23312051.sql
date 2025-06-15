CREATE DATABASE IF NOT EXISTS dbkisiuas_23312051 CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE dbkisiuas_23312051;

CREATE TABLE IF NOT EXISTS `tbacara_23312051` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `acara` (`nama`, `tanggal`, `deskripsi`) VALUES
('Festival Budaya Lampung', '15 Juli 2025 - 17 Juli 2025', 'Acara budaya tahunan yang menampilkan seni dan tradisi Lampung'),
('Workshop Fotografi Alam', '25 Agustus 2025', 'Belajar teknik fotografi alam dengan pemandangan yang menakjubkan'),
('Lomba Memancing Tradisional', '10 September 2025', 'Lomba memancing dengan teknik tradisional khas Lampung'),
('Pameran Kerajinan Tangan', '5 Oktober 2025 - 7 Oktober 2025', 'Pameran produk kerajinan tangan khas Lampung');