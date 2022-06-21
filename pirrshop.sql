-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2018 at 10:52 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pirrshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `acc`
--

CREATE TABLE `acc` (
  `id_acc` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acc`
--

INSERT INTO `acc` (`id_acc`, `nama`, `harga`, `gambar`) VALUES
(1, 'CASIO G-SHOCK ORIGINAL GWG-1000-1A3 MUDMASTER', '10000000', 'acc_1.jpg'),
(2, 'Fred Winch F2-001 (Gold-Silver)', '8000000', 'acc_2.jpg'),
(3, 'Gelang kulit black Pedang - sword/axe leather', '6250000', 'acc_3.jpg'),
(4, 'IKAT PINGGANG HERMES PREMIUM', '175000', 'acc_4.jpg'),
(5, 'Cincin Emas Berlian Asli Natural Diamond', '14025000', 'acc_5.jpg'),
(6, 'Expedition E 6727 Diver Sea Walker', '13650000', 'acc_6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cam`
--

CREATE TABLE `cam` (
  `id_cam` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cam`
--

INSERT INTO `cam` (`id_cam`, `nama`, `harga`, `gambar`) VALUES
(7, 'Kogan Action Camera', '389000', 'camera_1.jpg'),
(8, 'Shotgun Mic Microphone', '795000', 'camera_2.jpg'),
(9, 'KAMERA NIKON D3200', '4700000', 'camera_3.jpg'),
(10, 'kamera Canon EOS 1200D', '4800000', 'camera_4.jpg'),
(11, 'CANON EOS 1300D', '4700000', 'camera_5.png'),
(12, 'CANON EOS 750D', '7700000', 'camera_6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `nama`, `harga`) VALUES
(5, 'Cincin Emas Berlian Asli Natural Diamond', 'Rp 14.025.000'),
(6, 'CASIO G-SHOCK ORIGINAL GWG-1000-1A3 MUDMASTER', 'Rp 10.000.000');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `no` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`no`, `nama`, `email`, `subject`, `message`) VALUES
(1, 'Rayhan', 'mrayhan98@yahoo.com', 'suggestions', 'Websitenya jelek');

-- --------------------------------------------------------

--
-- Table structure for table `fashion`
--

CREATE TABLE `fashion` (
  `id_fashion` int(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fashion`
--

INSERT INTO `fashion` (`id_fashion`, `nama`, `harga`, `gambar`) VALUES
(26, 'Flat Shoes US49', '42000', 'fashion_1.jpg'),
(27, 'Blouse Wanita Big Size', '95000', 'fashion_2.jpg'),
(28, 'Jaket jeans vintage - dark joplin', '240000', 'fashion_3.jpg'),
(29, 'Polo Shirt Polos Katun Pique', '38000', 'fashion_4.jpg'),
(30, 'Sweater Hoodie Anak 1-2 Tahun', '76500', 'fashion_5.jpg'),
(31, 'Setelan Kemeja Celana Dasi dan Suspender/Baju Formal Balita Anak', '150000', 'fashion_6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hp`
--

CREATE TABLE `hp` (
  `id_hp` int(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hp`
--

INSERT INTO `hp` (`id_hp`, `nama`, `harga`, `gambar`) VALUES
(20, 'Samsung Galaxy J7 Plus', '4245000', 'hp_1.jpg'),
(21, 'XIAOMI MI6', '6199000', 'hp_2.jpg'),
(22, 'SAMSUNG GALAXY J2 PRIME', '1420000', 'hp_3.jpg'),
(23, 'XIAOMI REDMI NOTE 4X', '1935000', 'hp_4.jpg'),
(24, 'Xiaomi Mi A1', '2810000', 'hp_5.jpg'),
(25, 'LENOVO VIBE K5', '1470000', 'hp_6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lap`
--

CREATE TABLE `lap` (
  `id_lap` int(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lap`
--

INSERT INTO `lap` (`id_lap`, `nama`, `harga`, `gambar`) VALUES
(13, 'ASUS E203NAH', '3650000', 'laptop_1.jpeg'),
(14, 'ACER E5-475G', '6899000', 'laptop_2.jpg'),
(15, 'LENOVO IDEAPAD 310', '7250000', 'laptop_3.png'),
(16, 'ASUS ROG GL553VD-FY380D', '16390000', 'laptop_4.jpg'),
(17, 'New Macbook Pro 2017 MPXQ2', '17100000', 'laptop_5.jpeg'),
(18, 'DELL INSPIRON 14 7447 PANDORA', '11000000', 'laptop_6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id_order` int(11) NOT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `subtotal` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id_order`, `id_produk`, `qty`, `subtotal`) VALUES
(0, 13, 1, '3650000');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `keterangan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `harga`, `gambar`, `jenis`, `keterangan`) VALUES
(1, 'CASIO G-SHOCK ORIGINAL GWG-1000-1A3 MUDMASTER', 10000000, 'acc_1.jpg', 'acc', 'TIPE : CASIO ORIGINAL\r\nKETERANGAN : GWG-1000-1A3DR\r\nDIAMETER : 39 mm\r\nTEBAL : 14 mm\r\nWATER RESIST : 20 BAR / 200 meter\r\nBAHAN TALI : Resin band\r\nTAMPILAN WAKTU : Digital, Hari dan Tanggal\r\nBENTUK CASE : Bulat\r\nFITUR LAIN : Shock resistant, Mud resistant, 200m water resistance, Triple Sensor, ver. 3 ( Compass, Barometer, Alti/Thermometer ), Shapphire glass, 1/100-second stopwatch, World time, Super illuminator\r\nINCLUDE : Box, Buku Panduan, dan Garansi Resmi 1 Tahun '),
(2, 'Fred Winch F2-001 (Gold-Silver)', 8000000, 'acc_2.jpg', 'acc', 'Harga sudah termasuk lensa plastik \"Rodenstock Perfalit Colormatic IQ Brown Solitaire Protect Plus\" '),
(3, 'Gelang kulit black Pedang - sword/axe leather', 6250000, 'acc_3.jpg', 'acc', '75% italy gold. Gelang bisa diatur panjangnya(bisa disetel)...bisa request ukuran 16-20cm. Bisa untuk pria dan wanita. Very stylish '),
(4, 'IKAT PINGGANG HERMES PREMIUM', 175000, 'acc_4.jpg', 'acc', 'IKAT PINGGANG REL HERMES PREMIUM\r\nHR11\r\n\r\nBahan : Kulit Sapi lemas dan tidak kaku\r\nPanjang : 110-120 cm (maximum ukuran celana 43)\r\nJIKA BUTUH UKURAN 40 KE ATAS, MOHON TANYAKAN STOK TERLEBIH DAHULU\r\nBisa dikecilkan dengan cara melepaskan kaitan pada kepala ikat pinggang lalu dipotong dengan gunting biasa.\r\nLebar : 3,5 cm\r\nTekstur : Lihat gambar, susah dijelaskan\r\nWarna Tali : Coklat\r\nWarna Kepala : Coklat\r\nPaket termasuk : 1 ikat pinggang+ 1 box'),
(5, 'Cincin Emas Berlian Asli Natural Diamond', 14025000, 'acc_5.jpg', 'acc', 'NATURAL DIAMOND 100%\r\nBerlian : 0,25 Ct\r\nRound Brilliant Cut\r\nColor : K\r\nGold Ring 40% : 2,50 Gram ( Standart Pembuatan )\r\nCroom : (Emas putih, Emas kuning & Rose Gold) semua tersedia di harga yang sama)\r\n'),
(6, 'Expedition E 6727 Diver Sea Walker', 13650000, 'acc_6.jpg', 'acc', 'EXPEDITION ORIGINAL\r\nE6727 DIVER SEA WALKER\r\nPAKET FREE RUBBER WARNA HITAM\r\nFITURE\r\nGMT\r\nTANGGAL\r\nDM 46MM\r\nKACA SAPPHIRE CRYSTAL\r\nMESIN JAPAN CAL:505,24H\r\nALL STAINLESS STEEL CASE AND BAND\r\nFREE RUBBER\r\nUKURAN 24MM\r\nWATER RESISTANT 20ATM\r\nGARANSI RESMI 1 TH\r\nBOX DAN MANUAL BOOK COMPLETE\r\nNB STOK TERBATAS\r\nTOLONG CANTUMKAN NO URUT UNTUK PEMESANANNYA\r\nBONUS SHOPPING BAG SETIAP PEMBELIAN 1 JAM'),
(7, 'Kogan Action Camera', 389000, 'camera_1.jpg', 'cam', 'Action Camera - Sport Camera HD DV 12MP 1080p Water Ressistant\r\n\r\nKelengkapan dalam box:\r\n1 x Kamera\r\n1 x Case anti air\r\n1 x Kain pembersih\r\n1 x Kabel USB\r\n9 x Dudukan yang bisa digunakan untuk berbakai macam alat\r\n1 x Baterai\r\n1 x Pengisi baterai\r\n1 x Buku manual\r\n\r\nCamera 12MP\r\nMemori hingga 64GB\r\nResolusi Video 1080p\r\nLCD 2.0\r\nTahan air di dalam kedalaman 30 Meter'),
(8, 'Shotgun Mic Microphone', 795000, 'camera_2.jpg', 'cam', 'Microphone stereo model Shotgun untuk Handycam, DSLR, mirrorless, prosumer, atau camcorder dengan jack mic 3.5mm\r\n\r\nModel / Tipe: TakStar SGC-598\r\nFrekuensi : 50Hz - 16000Hz\r\nSensitivitas: -32dB\r\nDirection : Cardioid\r\nImpendancy : 2000\r\nPanjang kabel : 30cm\r\nBaterai : AA Alkaline 1.5V (termasuk dlm paket)\r\nDaya tahan s/d 100 jam'),
(9, 'KAMERA NIKON D3200', 4700000, 'camera_3.jpg', 'cam', 'Spesifikasi lengkap :\r\n24.2 megapixel, DX-format, CMOS sensor, Full HD 1080p movies, 4 FPS Continuous Shooting, 100-6400 ISO, Memory SD/SDHC/SDXC, Viewfinder, 3D Color Matrix Metering II , 4 frames per second, Autofocus System, Built-in Flash, Nikon Creative Lighting System (CLS), Live View, LCD 3.0 in, EN-EL14 Li-ion Battery '),
(10, 'kamera Canon EOS 1200D', 4800000, 'camera_4.jpg', 'cam', 'Spesifikasi :\r\n18MP APS-C sensor, 3.0\" LCD, ISO range of 1006400 (expandable to 12800), Digic 4, Full HD video, Capture detail and ambience, even in dark conditions, Enhance your memories and be artistic with Creative filters\r\nPaket penjualan :\r\n- CANON EOS 1200D + 18-55mm III\r\n- Manual book\r\n- tali/strep\r\n- kabel data\r\n- lens cap/tutup lensa\r\n- penutup body+penutup lensa belakang\r\n- Batt+charger\r\n- Kartu garansi '),
(11, 'CANON EOS 1300D', 4700000, 'camera_5.png', 'cam', '- Spesifikasi Canon EOS 1300D :\r\n* 18 MEGAPIKSEL\r\n* ISO 100-6400 dan dapat ditingkatkan ke 12800\r\n* LCD (3.0 inci)\r\n* SENSOR CMOS\r\n* Wifi\r\n* 9 Titik Auto Fokus\r\n* Lensa 18-55mm III'),
(12, 'CANON EOS 750D', 7700000, 'camera_6.jpg', 'cam', '* 24,2 MP\r\n* Viewfinder : Pentamirror\r\n* LCD Touch screen vari angle 7.7cm (3.0\")\r\n* 22.3 x 14.9mm CMOS\r\n* Autofocus : Hybrid CMOS AF III\r\n* Rechargeable Li-ion Battery LP-E17\r\n* Berat : 555gr\r\n\r\nWhat\'s In The Box :\r\n- Eyecup Eb\r\n- Wide Strap EW-EOS\r\n- USB Interface Cable\r\n- Battery Pack LP-E17\r\n- Battery Charger LC-E17\r\n- EOS Digital Solution Disc and Instruction Manuals \"Great Photography is Easy\" Booklet and \"Do More with Macro\" - Booklet'),
(13, 'ASUS E203NAH', 3650000, 'laptop_1.jpeg', 'lap', 'Intel Dual Core N3350 1.1GHz up to 2.4Ghz (2MB Cache)\r\n- 4GB RAM DDR3L, 500GB HDD\r\n- Intel HD Graphics 500\r\n- Windows 10 Home Original\r\n- 11.6\"iASUnch HD LED Display with Durable 180 hinge\r\n- Audio Powered by SonicMaster Lite Technology\r\n- HD Webcam, Micro SD Reader, WiFi 802.11AC\r\n- Bluetooth V4.0, Headphone, Microphone\r\n- HDMI x1, USB 3.1 x 2 & USB Type C 3.1 x 1\r\n- Weight : 1.197kg included 3 cells battery up to 8 hour\r\n- Garansi Resmi PT. ASUS Indonesia 1 Tahun\r\n- Star Grey FD411T/ Pearl Whi'),
(14, 'ACER E5-475G', 6899000, 'laptop_2.jpg', 'lap', 'Speksifikasi :\r\n- Intel Core i5-7200U Up to 3.1Ghz Kaby Lake New 7th Gen\r\n- Display (14\") HD (1366 x 768) 16:9 CineCrystal\r\n- Memory RAM 4GB DDR4\r\n- Hard drive 500 Gb\r\nDual VGA :\r\n- VGA Intel HD Graphics 620\r\n- VGA Graphics Nvidia GeForce GT 940MX 2GB Powerfull Perform\r\n- Audio ACER TRUE HARMONY\r\n- DOS ( Free diinstallkan windows bagi yang mau siap pakai )\r\n- Wireless , Bluetooth , LAN\r\n- Optical Drive : Super MultiDVD ( sudah dapat digunakan untuk burn )\r\n- Webcamera\r\n- Garansi Distributor 1 Ta'),
(15, 'LENOVO IDEAPAD 310', 7250000, 'laptop_3.png', 'lap', 'OS : WINDOWS 10 ORIGINAL\r\n- Processor Intel Core i5-7200U KabyLake\r\n- Grafis Nvidia GeForce GT920MX 2 GB Dedicated Memory\r\n- Memory 4GB RAM DDR4\r\n- Hard Disk 1 TB Storage\r\n- Layar 14\" inchi\r\n- DVDRW\r\n- Ultrafast Wireless\r\n- WebCamera\r\n- HJDMI\r\n- Bluetooth\r\n- USB 3.0\r\n- Garansi distributor 1 tahun '),
(16, 'ASUS ROG GL553VD-FY380D', 16390000, 'laptop_4.jpg', 'lap', 'Detail Produk :\r\n\r\nProcessor : Ci7-7700HQ 2.8-3.2GHz\r\nRAM : 16 GB\r\nHDD : 1TB+128GB SSD\r\nVGA : GTX1050 4GB\r\nScreen : 15.6\" FHD\r\nOS : WIN 10\r\nDVD-RW/Cam/BT/Backpack ROG\r\nGaransi Resmi 2 Tahun\r\n========================\r\nKelengkapan :\r\nUnit, Carger, Box, Kartu Garansi, Buku Petunjuk.\r\n'),
(17, 'New Macbook Pro 2017 MPXQ2', 17100000, 'laptop_5.jpeg', 'lap', 'Spesifikasi :\r\n\r\nProsesor Intel Core i5 dual-core 2,3 GHz ( Intel Core i5 7th Generation )\r\nTurbo Boost hingga 3,1 GHz\r\nmacOS Sierra\r\nSSD berbasis PCIe 128 GB\r\nMemori 1866 MHz sebesar 8 GB\r\nIntel Iris Graphics 640\r\nTrackpad Force Touch\r\nDua port Thunderbolt 3 '),
(18, 'DELL INSPIRON 14 7447 PANDORA', 11000000, 'laptop_6.jpg', 'lap', 'PROCESSOR : PANDORA i7 4720HQ WITH 4GB vRam\r\nMEMORY : 8GB DDR3 @1600 MHz (Dual Channel)\r\nHARD DRIVE : 1 TB HDD @5400 RPM hard drive\r\nDISPLAY/MONITOR : 14.0\" LED Backlit Anti Glare Display and HD resolution (1366x768)\r\nGRAPHIC CARD : Nvidia GeForce GTX 950M 4GB DDR3\r\nBLUETOOTH : Bluetooth v4.0\r\nWIRELESS CARD : Dell wireless 1707 802.11 bgn\r\nOPERATING SYSTEM : Windows 10 home 64bit single languange\r\nSERVICE WARRANTY : 1Yr Ltd hardware warranty,inhome service & proSupport'),
(19, 'Samsung Galaxy J7 Plus', 4245000, 'hp_1.jpg', 'hp', 'Ukuran layar: 5.5 inci, 1080 x 1920 pixels, Super AMOLED capacitive touchscreen, 16M colors\r\n\r\nMemori: RAM 4 GB, ROM 32 GB, MicroSD up to 256 GB\r\n\r\nSistem operasi: Android 7.1 (Nougat)\r\n\r\nCPU: MTK P25 Octa Core (Quad 2.39GHz + 1.69GHz) A53\r\n\r\nKamera: 13MP(F1.7) + 5MP(F1.9) LED Flash, Depan 16MP(F1.9), LED Flash\r\n\r\nSIM: Hybrid Dual SIM (Nano-SIM)\r\n\r\nBaterai: 3000 mAh\r\n\r\nBerat: 180 gram'),
(20, 'XIAOMI MI6', 6199000, 'hp_2.jpg', 'hp', 'Spesifikasi Lengkap Xiaomi Mi6 :\r\n- Resolusi : 5.15 inches, 1440 x 2560 pixels (~570 ppi pixel density)\r\n- Pelindung : Corning Gorilla Glass 4\r\n- Internal : (64GB + Ram 6GB)\r\n- OS : Android Nougat / MIUI 8\r\n- Chipset : Qualcomm MSM8998 Snapdragon 835\r\n- CPU : Octa-core (42.45 GHz Kryo & 41.9 GHz Kryo)\r\n- GPU : Adreno 540\r\n- Sim Card : Dual Sim\r\n- Internet : HSPA, LTE\r\n- GPS : A-GPS, GLONASS, BDS\r\n- Bluetooth : v4.2, A2DP, LE\r\n- Wifi : Wi-Fi 802.11 a/b/g/n/ac, dual-band, WiFi Direct, hotspot'),
(21, 'SAMSUNG GALAXY J2 PRIME', 1420000, 'hp_3.jpg', 'hp', 'Prosesor\r\nCPU Speed 1.4GHz Quad-core\r\n\r\nDisplay\r\nUkuran 5.0\" (126.4mm)\r\nResolusi 540 x 960 (qHD)\r\n\r\nKamera\r\nResolusi Rekaman Video HD (1280 x 720) @30fps\r\nMain Camera - Resolution CMOS 8.0 MP - f Number f/2.2\r\nFront Camera - Resolution CMOS 5.0 MP - f Number f/2.2\r\nMain Camera - Flash + Auto Focus\r\n\r\nMemori\r\nRAM Size 1.5 GB\r\nROM Size 8 GB\r\nAvailable Memory (GB) 3.3 GB\r\nMicroSD Card (Up to 256GB)'),
(22, 'XIAOMI REDMI NOTE 4X', 1935000, 'hp_4.jpg', 'hp', 'SIM Dual SIM (Micro-SIM/Nano-SIM, dual stand-by)\r\nDISPLAY Type IPS LCD capacitive touchscreen, 16M colors\r\nSize 5.5 inches (~72.7% screen-to-body ratio)\r\nResolution 1080 x 1920 pixels (~401 ppi pixel density)\r\nMultitouch Yes\r\n- MIUI 8.0\r\nPLATFORM OS Android OS, v6.0 (Marshmallow)\r\nChipset Qualcomm MSM8953 Snapdragon 625\r\nCPU Octa-core 2.0 GHz Cortex-A53\r\nGPU Adreno 506\r\nMEMORY Card slot microSD, up to 256 GB (uses SIM 2 slot)\r\nInternal 64 GB, 4 RAM'),
(23, 'Xiaomi Mi A1', 2810000, 'hp_5.jpg', 'hp', 'Ukuran layar:5.5 inci, 1080 x 1920 pixels, LTPS IPS LCD capacitive touchscreen, 16M colors\r\nMemori: RAM 4 GB, ROM 32 GB, MicroSD up to 128 GB\r\nSistem operasi:Android 7.1.2 (Nougat)\r\nCPU:Qualcomm MSM8953 Snapdragon 625Octa-core 2.0 GHz\r\nGPU:Adreno 506\r\nKamera: Dual 12 MP (26mm, f/2.2; 50mm, f/2.6), phase detection autofocus, 2x optical zoom, dual-LED (dual tone) flash, depan5 MP, 1080p\r\nSIM:Hybrid Dual SIM (Nano-SIM)\r\nBaterai: Non-removable Li-Ion 3080 mAh\r\nBerat:165 gram'),
(24, 'LENOVO VIBE K5', 1470000, 'hp_6.jpg', 'hp', 'SPESIFIKASI:\r\n- Network : 2G, 3G, 4G LTE\r\n- Processor : 64-bit Octacore Qualcomm Snapdragon 616\r\n- OS : Android v5.1 (Lollipop)\r\n- SIM : Dual Sim (Dual Standby)\r\n- Display : 5 Inch Full FHD, 1920X1080 Pixels (401ppi)\r\n- RAM : 3GB\r\n- Internal Memory : 16 GB ROM (Expandable Storage via MicroSD)\r\n- Camera : Rear: 13MP - Auto Focus, HDR, Guidelines, Omnivision OV13850, 5 Piece Lens, F2.2 Max Aperture.0 Max Aperture & Front: 5MP, 4 Piece Lense, F2.8 Sensor\r\n- Sound : Dual Stereo speakers with Dolby A'),
(25, 'Flat Shoes US49', 42000, 'fashion_1.jpg', 'fashion', 'GRATICA FLATSHOES FLAT SHOES AW-65 HITAM\r\n\r\nTerbuat dari bahan berkualitas dan Sol Karet membuat Flatshoes GRATICA ini terlihat cantik dan elegan . Dengan desain yang stylis sehingga nyaman dipakai dan ringan dikaki.\r\n\r\nDengan gaya dan model yang trendy, Sandal ini akan menambahkan kesan elegan pada penampilan Anda saat menggunakannya. FLATSHOES ini juga nyaman digunakan dan bisa menjadi pilihan untuk teman aktivitas Anda sehari-hari.'),
(26, 'Blouse Wanita Big Size', 95000, 'fashion_2.jpg', 'fashion', 'Foto produk baju branded mengutmakan : Real & Detail.\r\n- Real, artinya mengutamakan kesamaan dengan produk aslinya dari segi warna dan tampilan.\r\n- Detail, artinya memberikan gambaran yang jelas dari setiap produk.'),
(27, 'Jaket jeans vintage - dark joplin', 240000, 'fashion_3.jpg', 'fashion', 'DARK JOPLIN JACKET\r\n\r\nDetail : 100% cotton / denim bratatex 14oz / color : indigo / stonewashing 40% acid / include 3 band patch + 4 band pin we choose the best for you'),
(28, 'Polo Shirt Polos Katun Pique', 38000, 'fashion_4.jpg', 'fashion', 'Polo shirt polos bahan katun pique, lembut dan nyaman. Polos tanpa merek siap bordir dan sablon. Tersedia ukuran anak dan dewasa.'),
(29, 'Sweater Hoodie Anak 1-2 Tahun', 76500, 'fashion_5.jpg', 'fashion', 'Sweatshirt ini untuk anak tanggung yang beranjak besar. Bahan tebal, lembut dan tidak panas. Sweatshirt ini memiliki kupluk namun tidak ada kantong hanya motif kantong saja.'),
(30, 'Setelan Kemeja Celana Dasi dan Suspender/Baju Formal Balita Anak', 150000, 'fashion_6.jpg', 'fashion', 'kelengkapan :\r\n1. JAS\r\n2. CELANA\r\n3. DASI KUPU KUPU\r\n4. KEMEJA PUTIH\r\n5, HANGER\r\n6. BAG/TAS UNTUK PENYIMPANAN JAS');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `nama`, `email`, `jk`, `address`) VALUES
('admin', 'admin', '', '', '', ''),
('mrayhan98', 'asd', 'Ray', 'mrayhan04@yahoo.com', 'Laki-laki', 'Kos Aladdin (Kamar 117)'),
('ray', 'asd', 'Rayhannnnnnnnnnnnnnnnnnn', 'mrayhan1503@rocketgmail.com', 'Laki-Laki', 'JL.Bandung'),
('rayhan', 'asd', 'Muhammad Rayhan natadimadja', 'mrayhan98@yahoo.com', 'Laki-Laki', 'Elang Malindo Blok C4 No. 35A Jakarta Timur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acc`
--
ALTER TABLE `acc`
  ADD PRIMARY KEY (`id_acc`);

--
-- Indexes for table `cam`
--
ALTER TABLE `cam`
  ADD PRIMARY KEY (`id_cam`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `fashion`
--
ALTER TABLE `fashion`
  ADD PRIMARY KEY (`id_fashion`);

--
-- Indexes for table `hp`
--
ALTER TABLE `hp`
  ADD PRIMARY KEY (`id_hp`);

--
-- Indexes for table `lap`
--
ALTER TABLE `lap`
  ADD PRIMARY KEY (`id_lap`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acc`
--
ALTER TABLE `acc`
  MODIFY `id_acc` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cam`
--
ALTER TABLE `cam`
  MODIFY `id_cam` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `no` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fashion`
--
ALTER TABLE `fashion`
  MODIFY `id_fashion` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `hp`
--
ALTER TABLE `hp`
  MODIFY `id_hp` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `lap`
--
ALTER TABLE `lap`
  MODIFY `id_lap` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
