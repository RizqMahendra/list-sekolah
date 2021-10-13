-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table list-sekolah-appkey.akreditasi
CREATE DATABASE IF NOT EXISTS `daftar_sekolah`;

CREATE TABLE IF NOT EXISTS `akreditasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `akreditasi` varchar(20) DEFAULT NULL,
  `deksripsi` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table list-sekolah-appkey.akreditasi: ~5 rows (approximately)
/*!40000 ALTER TABLE `akreditasi` DISABLE KEYS */;
INSERT INTO `akreditasi` (`id`, `akreditasi`, `deksripsi`) VALUES
	(1, 'A', 'Terakreditasi A'),
	(2, 'B', 'Terakreditasi B'),
	(3, 'C', 'Terakreditasi C'),
	(4, 'Belum Terakreditasi', 'Belum Terakreditasi'),
	(5, 'Tidak Terakreditasi', 'Tidak Terakreditasi');
/*!40000 ALTER TABLE `akreditasi` ENABLE KEYS */;

-- Dumping structure for table list-sekolah-appkey.daerah_sekolah
CREATE TABLE IF NOT EXISTS `daerah_sekolah` (
  `id_daerah` int(10) NOT NULL AUTO_INCREMENT,
  `nama_daerah` varchar(50) DEFAULT NULL,
  `img` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_daerah`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table list-sekolah-appkey.daerah_sekolah: ~4 rows (approximately)
/*!40000 ALTER TABLE `daerah_sekolah` DISABLE KEYS */;
INSERT INTO `daerah_sekolah` (`id_daerah`, `nama_daerah`, `img`) VALUES
	(1, 'Surabaya', 'https://images.bisnis-cdn.com/posts/2021/01/20/1345625/surabaya.jpg'),
	(2, 'Kupang', 'https://www.indonesiatravelguides.com/wp-content/uploads/2013/01/Nostalgia-Park.jpg'),
	(3, 'Makassar', 'https://media.istockphoto.com/photos/landmark-makassar-located-on-losari-beach-picture-id1203302076?k=6&m=1203302076&s=170667a&w=0&h=ya2irJWDHNafdaT0QUafV86-PIdcHPPgLYefA7c7Z-k='),
	(4, 'Jakarta', 'https://www.befreetour.com/img/produk/jakarta-heritage-tour-historical-landmarks-private-tour/jakarta-heritage-tour-historical-landmarks-private-tour_97f4003b1b4de3d68fa56f195ea8f4e536bb131c.jpg');
/*!40000 ALTER TABLE `daerah_sekolah` ENABLE KEYS */;

-- Dumping structure for table list-sekolah-appkey.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table list-sekolah-appkey.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table list-sekolah-appkey.kat_sekolah
CREATE TABLE IF NOT EXISTS `kat_sekolah` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(20) DEFAULT NULL,
  `deskripsi` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table list-sekolah-appkey.kat_sekolah: ~5 rows (approximately)
/*!40000 ALTER TABLE `kat_sekolah` DISABLE KEYS */;
INSERT INTO `kat_sekolah` (`id`, `nama_kategori`, `deskripsi`) VALUES
	(1, 'institusi', 'institusi'),
	(2, 'universitas', 'universitas'),
	(3, 'politeknik', 'politeknik'),
	(4, 'sekolah tinggi', 'sekolah tinggi'),
	(5, 'akademi', 'akademi');
/*!40000 ALTER TABLE `kat_sekolah` ENABLE KEYS */;

-- Dumping structure for table list-sekolah-appkey.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table list-sekolah-appkey.migrations: ~2 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table list-sekolah-appkey.nama_sekolah
CREATE TABLE IF NOT EXISTS `nama_sekolah` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `nama_sekolah` varchar(100) DEFAULT NULL,
  `akreditasi` int(11) DEFAULT NULL,
  `kategori` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `deskripsi_sekolah` text,
  `logo` varchar(100) DEFAULT NULL,
  `img1` varchar(100) DEFAULT NULL,
  `img2` varchar(100) DEFAULT NULL,
  `img3` varchar(100) DEFAULT NULL,
  `alamat` varchar(300) DEFAULT NULL,
  `alamat_email` varchar(100) DEFAULT NULL,
  `daerah_sekolah` int(10) DEFAULT NULL,
  `no_telp` varchar(20) DEFAULT NULL,
  `facebook_url` varchar(100) DEFAULT NULL,
  `instagram_url` varchar(100) DEFAULT NULL,
  `twitter_url` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `daerah_sekolah` (`daerah_sekolah`),
  KEY `akreditasi` (`akreditasi`),
  KEY `kategori` (`kategori`),
  KEY `status` (`status`),
  FOREIGN KEY (`daerah_sekolah`) REFERENCES `daerah_sekolah` (`id_daerah`),
  CONSTRAINT `nama_sekolah_ibfk_2` FOREIGN KEY (`akreditasi`) REFERENCES `akreditasi` (`id`),
  CONSTRAINT `nama_sekolah_ibfk_3` FOREIGN KEY (`kategori`) REFERENCES `kat_sekolah` (`id`),
  CONSTRAINT `nama_sekolah_ibfk_4` FOREIGN KEY (`status`) REFERENCES `status` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table list-sekolah-appkey.nama_sekolah: ~4 rows (approximately)
/*!40000 ALTER TABLE `nama_sekolah` DISABLE KEYS */;
INSERT INTO `nama_sekolah` (`id`, `nama_sekolah`, `akreditasi`, `kategori`, `status`, `deskripsi_sekolah`, `logo`, `img1`, `img2`, `img3`, `alamat`, `alamat_email`, `daerah_sekolah`, `no_telp`, `facebook_url`, `instagram_url`, `twitter_url`) VALUES
	(1, 'Institut Bisnis Dan Informatika Kwik Kian Gie', 1, 1, 2, '"1987 Institut Bisnis Indonesia Berdiri di prakasai oleh Kwik Kian Gie bersama praktisi-praktisi bisnis yang berprestasi dalam bidangnya yaitu, yaitu Kaharudin Ongko dan Djoenaedi Joesoef.\r\n\r\n1993 Institut Bisnis Indonesia berubah menjadi Sekolah Tinggi Ilmu Ekonomi (STIE). STIE IBII menyelenggarakan pendidikan jenjang Sarjana yaitu Program Studi Manajemen dan Program Studi Akuntansi. Mulai tahun ini pula STIE IBII menyelengarakan pendidikan jenjang Program Magister dengan membuka Program Studi Magister Manajemen dengan konsentrasi Manajemen Keuangan dan Manajemen Pemasaran\r\n\r\n2004 STIE IBII melengkapi pelayanannya dengan membuka Program Doktoral ilmu manajemen\r\n\r\n2005 STIE IBII membuka Program Studi Magister Akuntansi. Pada bulan Maret, STIE IBII berubah menjadi Institut Bisnis dan Informatika Indonesia (IBII) dan menambah empat program studi baru jenjang S1 yaitu: Sistem Informasi, Teknik Informatika, Ilmu Komunikasi, dan Ilmu Administrasi.\r\n\r\n2012 IBII berubah nama menjadi Institut Bisnis dan Informatika Kwik Kian Gie atau biasa disebut Kwik Kian Gie School of Business."', 'https://file.maukuliah.id/img/logo/_thumb/s/1592470860.webp', 'https://file.maukuliah.id/img/gallery/032009//1592550023_DSC00461.png', 'https://file.maukuliah.id/img/gallery/032009//1592550013_DSC00167.png', 'https://file.maukuliah.id/img/gallery/032009//1592549985_DSC00158.png', 'Jl. Yos Sudarso Kav 85 No.87, RT.9/RW.11, Sunter, Jakarta Utara, Tj. Priok, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14350', '', 4, '(021) 65307062', 'https://facebook.com/kkgsob', 'https://instagram.com/kwikkiangie_edu', 'https://twitter.com/kwikkiangie_edu'),
	(2, 'Sekolah Tinggi Manajemen Informatika Dan Komputer Jakarta STI&K', 2, 4, 2, '"Di tengah meningkatnya proses Pembangunan Nasional, kedudukan atau kebutuhan informasi semakin penting. Hasil suatu pembangunan sangat ditentukan oleh materi informasi yang dimiliki oleh suatu negara dan keberadaan manusianya disuatu negara tersebut. Kemajuan yang dicitakan oleh suatu pembangunan akan lebih mudah dicapai dengan kelengkapan informasi. Cepat atau lambatnya laju pembangunan ditentukan pula oleh kecepatan memperoleh informasi dan kecepatan menginformasikan kembali kepada yang berwenang.\r\n \r\nKemajuan dalam bidang teknologi telah memberikan panduan akan kebutuhan informasi, hal yang dibumbui dengan komputer yang semakin canggih dan memungkinkan untuk memberikan informasi kepada manusia yang membutuhkanya secara cepat, tepat. Hasil informasi canggih ini telah mulai menyentuh kehidupan kita. Penggunaan dan pemanfaatan komputer secara optimal dapat memacu laju pembangunan. Kesadaran tentang hal inilah yang menuntut pengadaan tenaga-tenaga ahli yang terampil untuk mengelola informasi, dan pendidikan adalah salah satu cara yang harus ditempuh untuk memenuhi kebutuhan tenaga tersebut.\r\n \r\nDengan adanya mutu pendidikan yang lebih baik dan semakin berkembangnya ilmu-ilmu yang mempelajari dalam bidang tersebut semoga dapat meningkatkan kemajuan suatu negara yaitu Indonesia, STMIK atau kepanjangan dari sekolah tinggi manajemen informatika dan komputer memberikan tuntunan agar anak-anak penerus bangsa dapat menggunkan haknya untuk meningkatkan suatu ilmu komputer yang berguna bersaing di masa yang akan datang."', 'https://file.maukuliah.id/img/logo/033022.jpg', 'https://stmikdijawabali.files.wordpress.com/2017/04/zzz.jpg', 'https://i2.wp.com/harga.web.id/wp-content/uploads/STMIK-Jakarta-STIK.jpg?fit=680%2C300&ssl=1', 'https://stmikdijawabali.files.wordpress.com/2017/04/zzzz.jpg', 'Jl. Bri Radio Dalam No.17, RT.14/RW.3, Gandaria Utara, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12140', NULL, 4, '0380-8430672, 855450', 'https://facebook.com/stikom.uyelindo.kupang', 'https://www.instagram.com/stikom_uyelindo_official/', 'https://twitter.com/StikomU'),
	(3, 'Sekolah Tinggi Manajemen Informatika Komputer Uyelindo Kupang', 1, 4, 2, '"Sekolah Tinggi Manajemen Informatika Komputer (STIKOM) Uyelindo Kupang merupakan sekolah tinggi yang didirikan pada tahun 2000 dengan proses pembentukan berdasarkan Akta Notaris Yayasan Uyelewun Indonesia “Uyelindo”, Nomor: 21, tanggal 12 Juni 1997.\r\n\r\nSesuai dengan program kerja Yayasan Uyelido pada Bab V, Pasal 5, menyelenggarakan atau mendirikan lembaga pendidikan dari Taman Kanak-Kanak (TK) sampai Perguruan Tinggi (PT). Dengan dasar ini maka Yayasan Uyelewun Indonesia (Uyelindo) telah bertekad untuk mendirikan Sekolah Tinggi Manajemen Informatika Komputer (STIKOM) Uyelindo Kupang.\r\n\r\nRekomendasi Gubernur Prov. NTT No: SMS.420/10/2000, tanggal 26 Oktober 2000, perihal rekomendasi, yang mana pada prinsipnya pemerintah Daerah Tingkat I NTT menyetujui dan mendukung sepenuhnya berdirinya Sekolah Tinggi Manajemen Informatika Koputer (STIKOM) Uyelindo Kupang. SK Mendiknas No.77/D/O/2001, perihal pemberian status terdaftar untuk program studi Manajemen Informatika (S1), Teknik Informatika (S1), dan Teknik Informatika (D3) Sekolah Tinggi Manajemen Informatika Komputer (STIKOM) Uyelindo Kupang.\r\n\r\nSTIKOM Uyelindo sudah memiliki 30 standar. Semua upaya dan capaian tersebut didedikasikan untuk membangun anak bangsa yang berkualitas dan bermartabat. Mau kuliah dengan proses berkualitas? STIKOM Uyelindo tempatnya. Tersedia tiga program studi tersedia yakni Sistem Informasi jenjang S1, Teknik Informatika Jenjang S1 dan Teknik Informatika Jejang D3.\r\n\r\nSejak tahun 2000 hingga 2019 telah meluluskan 2.509 yang tersebar di seluruh Indonesia. Jika anda mencari perguruan tinggi yang jelas standar mutunya, jelas reputasi, jelas legalitasnya dan jelas untuk masa depannya maka STIKOM Uyelindo pilihannya.\r\n\r\nSTIKOM Uyelindo tetap berkomitmen pada kualitas layanan pendidikan karena yakin bahwa lulusan yang berkualitas hanya dapat terwujud dari proses yang berkualitas dengan sistem dan standar mutu yang jelas dan berkelanjutan sebagaimana tertuang dalam Standar Nasional Pendidikan Tinggi."', 'https://file.maukuliah.id/img/logo/083027.jpg', 'https://file.maukuliah.id/img/gallery/083027//083027_4.jpeg', 'https://file.maukuliah.id/img/gallery/083027//083027_3.jpeg', 'https://file.maukuliah.id/img/gallery/083027//083027_2.jpeg', 'Jl. Perintis Kemerdekaan I, Kayu Putih, Kec. Oebobo, Kota Kupang, Nusa Tenggara Tim. 85228', NULL, 2, '(021) 7397973', 'https://www.facebook.com/stmik.jakarta.stik', 'https://www.instagram.com/stmikjakarta/', NULL),
	(4, 'Politeknik Informatika Nasional', 2, 3, 2, '"Fenomena tidak tertampungnya lulusan pendidikan tinggi di dunia kerja bukan cerita milik era tahun 2000-an saja. Bila dirunut kebelakang sebenarnya gejala tersebut sudah muncul ke permukaan sekitar dua puluh tahun sebelumnya. Semakin hari semakin meresahkan masyarakat yang mengalami langsung sulitnya mencari kerja jika tidak memiliki keterampilah dan keahlian. Namun hingga menjelang akhir 1980-an, belum ada tanda-tanda pihak yang mereasa terpanggil untuk menyelesaikan masalah tersebut, baik pemerintah maupun swasta.\r\n\r\nAtas dasar itulah LP3I didirikan pada tanggal 29 Maret 1989 di Jakarta yang bermula dari program kursus 6 bulan kemudian mengembangkan sistem pendidikannya menjadi lembaga pendidikan profesi (1 - 2 tahun). Animo masyarakat yang sangat besar terhadap LP3I di Jakarta, menjadikan pemikiran dari pengelola LP3I untuk mengembangkan sayapnya ke kota-kota besar di Indonesia seperti Surabaya, Semarang, Bali, Balikpapan, Aceh, Palu, Banjarmasin, Samarinda, Mataram dan kota-kota lainnya hampir di seluruh Indonesia. Pada tahun 1998, LP3I resmi membuka kampus di Makassar yang beralamat di Jalan Urip Sumoharjo Makassar dengan menjalankan program profesi 2 tahun.\r\n\r\nPada tahun 2003, LP3I mulai masuk kepada sektor pendidikan formal selaras dengan visi LP3I yaitu : menjadi lembaga pendidikan yang terus menerus menyelaraskan kualitas pendidikannya dengan kebutuhan dunia kerja untuk menghasilkan SDM yang siap kerja yang profesional, beriman dan bertaqwa. Berawal dengan sebagian dari kampus LP3I yang telah tersebar di Indonesia berubah menjadi Politeknik yaitu Bandung, Jakarta dan Medan.\r\n\r\nSejalan dengan visi LP3I itulah, pada tahun 2010, LP3I dengan Yayasan Mitra Mandiri membuka Politeknik di Makassar dengan nama Politeknik Informatika Nasional dengan SK Mendikbud Nomor 130/D/O/2010 dengan membuka 3 program studi yaitu program studi Administrasi bisnis dengan konsentrasi Bisnis Administrasi, Administrasi Keuangan, Sekretaris, Administrasi Perkantoran, Program studi Manajemen Informatika dengan konsentrasi Informatika Komputer dan Komputerisasi Akuntansi, serta Program studi Administrasi Pemerintahan.\r\n\r\nPoliteknik Informatika Nasional terus menerus melakukan perbaikan berbagai hal dan terus menyesuaikan diri dengan kebutuhan dunia kerja dan kebutuhan pemerintah, pada tahun 2013, Politeknik Informatika Nasional telah mendapatkan akreditasi program studi dari Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT)."', 'https://file.maukuliah.id/img/logo/095002.png', 'https://file.maukuliah.id/img/gallery/095002//095002_4.jpeg', 'https://file.maukuliah.id/img/gallery/095002//095002_3.jpeg', 'https://file.maukuliah.id/img/gallery/095002//095002_2.jpeg', 'Jl. Sultan Alauddin No.250, Mangasa, Kec. Tamalate, Kota Makassar, Sulawesi Selatan 90245', NULL, 3, '0411 885489', 'https://www.facebook.com/pages/category/Education/Politeknik-Informatika-Nasional-101722115288188/', 'https://www.instagram.com/lp3i.indonesia/', 'https://twitter.com/LP3I_PUSAT');
/*!40000 ALTER TABLE `nama_sekolah` ENABLE KEYS */;

-- Dumping structure for table list-sekolah-appkey.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table list-sekolah-appkey.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table list-sekolah-appkey.status
CREATE TABLE IF NOT EXISTS `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(10) DEFAULT NULL,
  `deskripsi` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table list-sekolah-appkey.status: ~2 rows (approximately)
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `status` (`id`, `status`, `deskripsi`) VALUES
	(1, 'negeri', 'negeri'),
	(2, 'swasta', 'swasta');
/*!40000 ALTER TABLE `status` ENABLE KEYS */;

-- Dumping structure for table list-sekolah-appkey.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table list-sekolah-appkey.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
