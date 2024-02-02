-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Feb 2021 pada 15.33
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bakery`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `hargatotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cart`
--

INSERT INTO `cart` (`id_cart`, `id_user`, `id_produk`, `jumlah`, `hargatotal`) VALUES
(1, 1, 2, 5, 25000),
(2, 1, 8, 14, 0),
(4, 3, 1, 3, 15000),
(5, 3, 4, 6, 21000),
(6, 3, 10, 1, 195000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Cake'),
(2, 'Roti'),
(3, 'Jajanan Pasar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `gambar_produk` varchar(50) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `deskripsi_produk`, `harga_produk`, `gambar_produk`, `id_kategori`) VALUES
(1, 'Roti Sisir Milkbread', 'Tersedia 3 rasa isian : original, coklat dan keju.', 5000, 'sisir.png', 2),
(2, 'Nastar Premium', 'Kue lebaran enak dengan isian nanas', 85000, 'nastar.png', 1),
(3, 'Konde Pandan', 'Roti dengan baluran selai pandan', 3500, 'kondepandan.png', 2),
(4, 'Cinnamon Roll', 'Roti cinnamon roll', 3500, 'cinnamonroll.png', 2),
(5, 'Selai Nanas', 'Roti dengan selai nanas yang lezat', 3000, 'selainanas.png', 2),
(6, 'Chicken Bun', 'Roti bulat dengan isian ayam', 3500, 'chickenbun.png', 2),
(7, 'Choco Dot', 'Roti dengan taburan meses', 3500, 'chocodot.png', 2),
(8, 'Birthday Cake 16', 'Ukuran 16', 135000, 'birthcake16.png', 1),
(9, 'Birthday Cake 18', 'ukuran 18', 160000, 'birthcake18.png', 1),
(10, 'Birthday Cake 20', 'ukuran 20', 195000, 'birthcake20.png', 1),
(11, 'Cupcake dengan 3D Topper', 'Cupcake set isi 4 dengan hiasan 3D topper', 225000, 'cupcake3d.png', 1),
(12, 'Cupcake Karakter', 'Cupcake karakter ', 15000, 'cupcakekarakter.png', 1),
(13, 'Soes Ragout Ayam', 'Soes Ragoet Ayam', 4000, 'soesragoutayam.png', 3),
(14, 'Roti Sosis(Big)', 'roti sosis ', 6000, '693309464_rotisosis.jpeg', 2),
(15, 'Tumpeng', 'Aneka Tumpeng', 180000, 'tumpeng.png', 3),
(16, 'Pisang Coklat(Big)', 'Pisang Coklat Big', 6500, 'pisangcoklat.png', 2),
(17, 'Roti Isi Ayam(Big)', 'Roti isi ayam big', 6500, 'rotiisiayam.png', 2),
(18, 'Zuppa Soup', 'Zuppa Soup', 15000, 'zuppasoup.png', 1),
(19, 'Lunch Box', 'Aneka menu lunch box', 25000, 'lunchbox.png', 3),
(20, 'Pastel', 'Pastel isi ragout daging dan telur rebus', 3500, 'pastel.png', 3),
(21, 'Buttermilk Red Velvet Cake', 'Redvelvet Cake', 85000, 'redvelvetcake.png', 1),
(22, 'Pie Buah - Mini Tartlet', 'Pie dengan toping berbagai buah', 4500, 'piebuah.png', 1),
(23, 'Lumpia Telur Puyuh', 'Lumpia dengan isian telur puyuh', 3500, 'lumpiatelur.png', 3),
(24, 'Mexian Bun', 'Roti lembut yang didalamnya berisi butter serta dilengkapi topping lelehan gula. \r\nTersedia 3 varian rasa : Kopi, Panda, dan Vanilla', 4500, 'mexicanbun.png', 2),
(25, 'Caterpillar Bread', 'Adalah sosis bernadi', 6500, 'caterpillarbread.png', 2),
(26, 'Mini Pizza', 'Tersedia 3 topping : sosis, ayam, dan bombay', 6500, 'minipizza.png', 2),
(27, 'Creamy Soes Vla', 'Soes dengan isian Creamy Vla', 3500, 'soesvla.png', 3),
(28, 'Brownie Panggang Triple Chocolate', 'Brownie Panggang Triple Chocolate', 80000, 'browniepanggangtriple.png', 1),
(29, 'Brownies Panggang Duo Peanuts', 'Brownies Panggang Duo Peanuts', 85000, 'browniepanggangduo.png', 1),
(30, 'Prol Tape Spesial ', 'Ukuran 30 x 10\r\nLembut dan Lumer\r\nFull Butter, Tanpa Margarine\r\nDengan Susu UHT', 70000, 'proltape.png', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email`, `password`, `alamat`, `no_hp`) VALUES
(1, 'Yuqi', 'yuqi@gmail.com', 'password', '', ''),
(2, 'Rosa', 'rosa@gmail.com', 'password', 'Jl semeru rt 2 rw 3', '081445267329'),
(3, 'Adinda', 'adinda@gmail.com', 'password', 'jalan kenari', '0819900999'),
(4, 'Admin', 'admin@gmail.com', 'admin', 'Alamat Admin', '085325435667'),
(5, 'Karina', 'karina@gmail.com', 'password', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `fk_user` (`id_user`) USING BTREE,
  ADD KEY `fk_produk` (`id_produk`) USING BTREE;

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `fk_kategori` (`id_kategori`) USING BTREE;

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_produk` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`),
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `fk_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
