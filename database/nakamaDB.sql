CREATE TABLE `nakama`(
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `karakter_favorit` VARCHAR(50) NOT NULL,
    `usia_karakter` INT(3) NOT NULL,
    `devilfruit` VARCHAR(12) NOT NULL,
    `asal_krew` VARCHAR(50) NOT NULL,
    `nilai_bounty` BIGINT(255) NOT NULL
);

INSERT INTO `nakama` (`id`, `karakter_favorit`, `usia_karakter`, `devilfruit`, `asal_krew`, `nilai_bounty`) VALUES 
    (1,'Monkey D Luffy', 20, 'Gomu Gomu No Mi', 'Straw Hat Crew', 3000000000),
    (2,'Monkey D Garp', 40, 'fruitless', 'Marine', 0);



-- INSERT INTO `barang` (`seri`, `nama`, `merk`, `kategori`, `harga`, `stok`) VALUES
-- ('AS-1234', 'ASUS VGA RTX 2060 ', 'ASUS', 'Komponen', 3500000, 32),
-- ('HP-1322', 'HP OMEN 2023', 'HP', 'Laptop', 12000000, 20);