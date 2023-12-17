CREATE TABLE `nakama`(
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `karakter_favorit` VARCHAR(50) NOT NULL,
    `usia_karakter` INT(3) NOT NULL,
    `devilfruit` VARCHAR(12) NOT NULL,
    `asal_krew` VARCHAR(50) NOT NULL,
    `nilai_bounty` BIGINT(255) NOT NULL
);

-- INSERT INTO `nakama` ()

-- INSERT INTO `barang` (`seri`, `nama`, `merk`, `kategori`, `harga`, `stok`) VALUES
-- ('AS-1234', 'ASUS VGA RTX 2060 ', 'ASUS', 'Komponen', 3500000, 32),
-- ('HP-1322', 'HP OMEN 2023', 'HP', 'Laptop', 12000000, 20);