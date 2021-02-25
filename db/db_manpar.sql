-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2020 at 11:24 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sditpermata`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id_agenda` int(11) NOT NULL,
  `judul_agenda` varchar(50) NOT NULL,
  `tgl_postagen` date NOT NULL,
  `isi_agenda` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `judul_agenda`, `tgl_postagen`, `isi_agenda`, `gambar`) VALUES
(1, 'Tanggal 20 Desember 2018', '2018-12-11', '<p>Penerimaan Rapor Semester 1 Tahun Pelajaran 2018/2019&nbsp;</p>\r\n\r\n<p>Hari &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Kamis, 20 Desember 2018</p>\r\n\r\n<p>Tempat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Gedung SDIT Permata (Jalan Andalas Baru No 25 B)</p>\r\n\r\n<p>Waktu &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Pkl 13.00 s/d 15.00 WIB</p>\r\n', '20201114145220download.jpg'),
(2, 'Awal Masuk Sekolah Semester 2 TP 2018/2019', '2018-12-11', '<p>Awal Masuk Sekolah Semester 2 TP 2018/2019 yaitu pada tanggal :</p>\r\n\r\n<p>Rabu 02 Januari 2019 Siswa pada hari pertama sekolah dipulangkan lebih cepat yaitu pukul 13.00 WIB</p>\r\n', '202011141452505b1a96c380590.jpg'),
(3, 'Pendaftaran Siswa Baru', '2018-12-11', '<p>Pendaftaran dibuka, mulai tanggal 02 JANUARI 2019 hingga 30 JANUARI 2019 (Pada hari dan jam kerja)&nbsp;</p>\r\n\r\n<p>Pendaftaran dapat dilakukan di :</p>\r\n\r\n<p>Jalan Andalas Baru No. 25 B Kelurahan Simpang Haru Kecamatan Padang Timur 25123</p>\r\n\r\n<p>Telpon : (0751) 32298 CP : 085356920960 (Budi Kurniadi)</p>\r\n\r\n<p>Jalan Anshar No 28 RT 02./ RW V Kelurahan Dadok Tunggul Hitam Kecamatan Koto Tangah</p>\r\n\r\n<p>Telpon : (0751) 462123 CP 081374358217 (Mustafa)</p>\r\n\r\n<p>Jalan Simpang Ulu Gadut (Depan Komplek Hijau Daun) Kelurahan Koto Luar Kecamatan Pauh</p>\r\n\r\n<p>CP 085263824550 (Nanda)</p>\r\n\r\n<p>belajar di SDIT Permata adalah pengalaman yang penuh arti dan menyenangkan.</p>\r\n', '20201114145310Untitled.jpg'),
(5, 'Pemuda Pelopor Anti Narkoba MAN Padusunan Dilantik', '2020-11-14', '<p>Wakil Walikota Pariaman, Genius Umar melantik Pemuda Pelopor Anti Narkoba pelajar MAN Padusunan, Pariaman Timur, Selasa (14/8). Kegiatan tersebut rangkaian acara memperingati Hari Ulang Tahun (HUT) Gerakan Pramuka ke 57 tahun.</p>\r\n\r\n<p>Kegiatan diawali Upacara Bendera bersama seluruh guru dan pelajar Sekolah Madrasyah Aliyah Negeri Padusunan tersebut.</p>\r\n\r\n<p>Genius Umar yang juga Ketua Kwartir Cabang (Kakwarcab) Pramuka 16 Kota Pariaman, memberi apresiasi Kepala Sekolah, jajaran Guru, Pelatih Pramuka, Jajaran OSIS MAN Padusunan, dan para anggota pramuka dan siswa yang menggelar upacara bendera tersebut.</p>\r\n', '20201114145454download (1).jpg'),
(6, 'Genius Umar Motivasi Pelajar MAN Padusunan Terus B', '2020-11-14', '<p>Jangan pernah takut bermimpi untuk meraih pendidikan yang lebih tinggi, dengan terus belajar dan belajar, insyaallah ananda semua akan dapat sukses untuk dapat kuliah di universitas terbaik yang ada di negeri ini.</p>\r\n\r\n<p>Hal tersebut disampaikan&nbsp; Wakil Walikota Pariaman Genius Umas ketika memberikan motivasi kepada pelajar MAN Padusunan dalam sambutannya sebagai inspektur upacara bendera di sekolah tersebut, Senin (22/1).</p>\r\n\r\n<p>&quot;Dengan kemajuan dan perkembangan zaman dan tekhnologi saat ini, ananda semua akan semakin mudah untuk mengakses bahan pelajaran atau ilmu yang didapat di internet, bahkan sampai cara mendapatkan beasiswa dari kampus-kampus terkenal di indonesia,&quot; ujarnya.</p>\r\n', '2020111414554937man.jpg'),
(7, 'KOTA PARIAMAN  Nada Syiar Padusunan MAN Kota Paria', '2020-11-14', '<p>Pariaman (Inmas)<strong>-&nbsp;</strong>Marching Band Nada Syiar Padusunan MAN Kota Pariaman kembali ukir prestasi pada ajang Minang Marching Competition 6 tahun 2017 yang ditutup minggu malam (17/12/2017) di Auditorium Universitas Andalas Padang dengan menyabet sembilan penghargaan.</p>\r\n\r\n<p>Sembilan penghargaan itu adalah juara umum 2 full band senior, juara 1 effect full band senior, juara 1 musik full band senior, juara 3 Color Guard full band senior, juara 3 display full band senior, juara 2 field commander senior, juara 2 music concert divisi senior, peringkat 5 Color Guard Contest divisi senior dan peringkat harapan drum battle divisi senior.</p>\r\n\r\n<p>Irwanto, S.Pd, M.Pd selaku tim manager Marching Band Nada Syiar Padusunan MAN Kota Pariaman saat menyerahkan hasil prestasi di MAN Kota Pariaman, senin (18/12/2017) mengaku sangat bangga dengan keberhasilan yang diperoleh dan mengatakan bahwa ini berkat kerja keras dan kerja sama antara tim manager, pembina, tim pelatih, anggota, official dan alumni Marching Band MAN Kota Pariaman.&nbsp;</p>\r\n', '202011141459535a37d61f8dec5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `akreditasi`
--

CREATE TABLE `akreditasi` (
  `id_akre` int(11) NOT NULL,
  `isi_akre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akreditasi`
--

INSERT INTO `akreditasi` (`id_akre`, `isi_akre`) VALUES
(1, '<h2><span style=\"font-size:22px\"><strong><span style=\"font-family:Times New Roman,Times,serif\">Identitas Madrasah</span></strong></span></h2>\r\n\r\n<ol>\r\n	<li>\r\n	<h2><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,Times,serif\">Nama Madrasah :</span><span style=\"font-family:Times New Roman,Times,serif\"> Madrasah Aliyah Negeri Kota Pariaman</span></span></h2>\r\n	</li>\r\n	<li>\r\n	<h2><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,Times,serif\">Status : Negeri&nbsp;</span></span></h2>\r\n	</li>\r\n	<li>\r\n	<h2><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,Times,serif\">NSM : 311130372002</span></span></h2>\r\n	</li>\r\n	<li>\r\n	<h2><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,Times,serif\">NPSM : 10303990</span></span></h2>\r\n	</li>\r\n	<li>\r\n	<h2><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,Times,serif\">Nama Kepala : Zalkhairi, S.Ag, M,Pd</span></span></h2>\r\n	</li>\r\n	<li>\r\n	<h2><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,Times,serif\">Akreditasi Madrasah A</span></span></h2>\r\n	</li>\r\n	<li>\r\n	<h2><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,Times,serif\">Kode Pos : 25523</span></span></h2>\r\n	</li>\r\n</ol>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id_alumni` int(11) NOT NULL,
  `ket_alumni` varchar(50) NOT NULL,
  `gambar_al` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id_alumni`, `ket_alumni`, `gambar_al`) VALUES
(1, 'DATA ALUMNI KELAS VI ANGKATAN I', '20181214112642alumni.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(500) NOT NULL,
  `tgl_post` date NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `tgl_post`, `isi_berita`, `gambar`) VALUES
(2, 'Bawaslu Pariaman maksimalkan peran pemuda awasi Pilgub Sumbar', '2018-12-11', '<p>Pariaman (ANTARA) - Badan Pengawas Pemilihan Umum (Bawaslu) Kota Pariaman, Sumatera Barat (Sumbar) memaksimalkan peran pemuda di daerah itu untuk mengawasi pelaksanaan pemilihan gubernur (Pilgub) dan wakil gubernur (wagub) provinsi ini.<br />\r\n<br />\r\n&quot;Kita mengetahui pemuda memiliki semangat yang tinggi dan ide-ide dari mereka perlu untuk peningkatan pengawasan Pilkada,&quot; kata Ketua Bawaslu Kota Pariaman, Riswan usai penandatanganan Nota Kesepahaman antara Bawaslu Pariaman dengan Komite Nasional Pemuda Indonesia (KNPI) dan Karang Taruna di Pariaman, Kamis.<br />\r\n<br />\r\nApalagi, kata dia pemuda memiliki organisasi diantaranya KNPI dan Karang Taruna yang memiliki struktur pengurusan hingga ke desa dan keluruhan.<br />\r\n<br />\r\nIa mengatakan dengan kegiatan yang dilakukan pihaknya bersama organisasi kepemudaan tersebut maka diharapkan dapat menutupi kekurangan Bawaslu dalam hal pengawasan dan sosialisasi Pilgub dan wagub Sumbar.<br />\r\n<br />\r\n&quot;Tidak semua pemilih yang dapat kami jangkau sehingga organisasi ini dan pihak lainnya kami harapkan dapat membantu kami dalam hal sosialisasi dan pengawasan,&quot; katanya.<br />\r\n<br />\r\nPihaknya berharap dengan keterlibatan pemuda dan pihak lainnya dapat membantu meningkatkan partisipasi pemilih serta memberikan sosialisasi kepada warga agar menerapkan protokol kesehatan.<br />\r\n<br />\r\nSementara itu Ketua Karang Taruna Kota Pariaman, Afdila mengatakan dengan penandatanganan nota kesepahaman tersebut maka pihaknya merasa terpanggil untuk ikut berpartisipasi dalam pengawasan Pilgub.<br />\r\n<br />\r\n&quot;Kami pun mengajak pemuda untuk ikut berpartisipasi dalam hal pengawasan dan mengajak warga untuk memilih pada hari pemilihan,&quot; ujarnya.<br />\r\n<br />\r\nKetua KNPI Kota Pariaman, Febrian Mirdani mengatakan sebelumnya pemuda hanya dijadikan sebagai alat untuk kepentingan politik namun sekarang dijadikan bagian penting dalam pelaksanaan pesta demokrasi.<br />\r\n<br />\r\n&quot;Kami merasa tertantang dalam pelaksanaannya dan kami pun komitmen untuk menjalankan,&quot; kata dia.<br />\r\n<br />\r\nTerpisah mantan Ketua KNPI Kota Pariaman periode 2012-2015 Riky Falantino mengatakan peringatan Hari Pahlawan dapat menjadi momentum bagi pemuda untuk mengambil peran dalam mengawasi proses demokrasi.<br />\r\n<br />\r\n&quot;Pemuda adalah pahlawan demokrasi, pemuda hari ini &quot;zaman now&quot; atau generasi milenial harus mengambil peran dalam mensukseskan dan mengawal Pilgub dan Wagub Sumbar 2020, jadi jangan hanya menjadi objek,&quot; ujar dia.<br />\r\n<br />\r\nIa mengatakan pemuda dapat mengambil peran dengan membuat kegiatan-kegiatan produktif dan edukatif bersama pemerintah desa dan kelurahan serta tokoh adat setempat untuk membicarakan terkait Pilgub dan Wagub Sumbar.<br />\r\n<br />\r\nIa menyebutkan pada kegiatan tersebut dapat dibahas terkait pentingnya menggunakan hak pilih meski di tengah pandemi karena dalam pelaksanaan pemilihan menerapkan protokol kesehatan.<br />\r\n&nbsp;</p>\r\n', '20201113105926b.jpg'),
(3, 'Wali Kota Pariaman Buka-bukaan Strategi Ketahanan Pangan dan Ekonomi di Tengah Pandemi', '2018-12-11', '<p>&nbsp;Beragam upaya dan inovasi terus dilakukan daerah kabupaten/kota untuk meredam penyebaran Covid-19 dan ancaman badai perekonomian. Begitu juga yang tengah diupayakan Pemerintah Kota Pariaman, Sumatra Barat.</p>\r\n\r\n<p><strong>Liputan6.com</strong>&nbsp;berhasil mewawancarai Wali Kota Pariaman Genius Umar terkait langkah apa saja yang sudah ditempuh dan rencana ke depan menghadapi era new normal.</p>\r\n\r\n<p>Dalam sesi wawancara yang digelar Jumat 26 Juni 2020 kemaren, Wali Kota Genius Umar mengungkapkan strategi pemetaan Covid-19 sampai cara membangkitkan perekonomian di wilayahnya, khususnya bidang pariwisata.</p>\r\n', '20201113110314c.jpg'),
(8, '27 Anggota Polres Pariaman Positif COVID-19', '2020-11-14', '<p>Sebanyak 27 personel Kepolisian Resor Kota&nbsp;<a href=\"https://www.detik.com/tag/pariaman\">Pariaman</a>, Sumatera Barat (<a href=\"https://www.detik.com/tag/sumbar\">Sumbar</a>), dinyatakan positif COVID-19. Selain itu, ada 4 orang lainnya dari keluarga personel yang positif Corona.</p>\r\n\r\n<p>Kapolres Kota Pariaman AKBP Deny Rendra Laksmana mengatakan status positif Corona itu berdasarkan hasil tes usap yang dijalani bersama ratusan personel lainnya instansi itu pada Sabtu (22/8/2020). Hasil tes itu keluar pagi tadi.</p>\r\n\r\n<p>&quot;Jumlahnya ada 31 yang positif, 27 anggota Polres Pariaman dan empat orang keluarganya,&quot; kata Deny Rendra Laksmana di Pariaman, Selasa (25/8), seperti dilansir<em>&nbsp;Antara</em>.</p>\r\n', '20201114151953kapolres-kota-pariaman-akbp-deny-rendra-laksmana_169.jpeg'),
(10, 'Kapal Wisata Terbalik di Pariaman Sumbar, 1 Tewas', '2020-11-14', '<p>Kapal wisata yang membawa rombongan guru terbalik di&nbsp;<a href=\"https://www.detik.com/tag/pariaman\">Pariaman</a>, Sumatera Barat. Satu orang meninggal dunia, sementara satu lainnya harus mendapat perawatan intensif di rumah sakit.<br />\r\n<br />\r\nKabid Kedaruratan dan Logistik BPBD Sumatera Barat, Rumainur menyebutkan, kapal naas itu dihantam gelombang dalam perjalanan dari Pantai Pariaman menuju Angso Duo, Sabtu (25/10/2019). Angso Duo merupakan pulau yang menjadi ikon wisata di daerah itu.</p>\r\n', '20201114152242fa506738-33bc-49ad-8a35-582c0873d605_169.jpeg'),
(11, 'Ubur-ubur Bluebottle Serang Nelayan di Sumbar, Warga Diminta Waspada', '2020-11-14', '<p>Dua nelayan di Kota Pariaman, Sumatera Barat, dilarikan ke Rumah Sakit Umum Daerah (RSUD) karena diserang ubur-ubur jenis&nbsp;<em>bluebottle</em>. Akibat kejadian itu, warga setempat meminta para nelayan dan wisatawan berhati-hati ketika berada di laut.<br />\r\n<br />\r\n&quot;Salah satu korban adalah anak buah kapal (ABK) saya, kejadian sekitar 10 hari lalu. Seorang lagi Ali Imran (43), warga setempat, yang terjadi beberapa hari lalu,&quot; kata nakhoda kapal nelayan, Perizal (37), di Pariaman, yang dilansir dari&nbsp;<em>Antara</em>, Jumat (4/10/2019).<br />\r\n<br />\r\nIa mengatakan ABK tersebut tersengat ubur-ubur jenis&nbsp;<em>bluebottle</em>&nbsp;di wilayah Pulau Kasiak ketika mengangkat jaring di tengah laut. Namun dia juga melihat ubur-ubur itu mengapung di sepanjang perairan Pariaman.</p>\r\n', '20201114152354a051a048-3659-4c00-9740-d25f0c569355_169.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `catatankata`
--

CREATE TABLE `catatankata` (
  `id_catatankata` int(11) NOT NULL,
  `isi_catatankata` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catatankata`
--

INSERT INTO `catatankata` (`id_catatankata`, `isi_catatankata`) VALUES
(1, 'Raihlah ilmu, dan untuk meraih ilmu belajarlah untuk tenang dan sabar. (Khalifah Umar Bin Khattab Radiallahu Anhu))');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `website` varchar(50) NOT NULL,
  `fb` varchar(50) NOT NULL,
  `twitter` varchar(50) NOT NULL,
  `ig` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_contact`, `website`, `fb`, `twitter`, `ig`, `alamat`, `telp`, `email`) VALUES
(1, 'www.kittraveling.com', 'kurniaindahtrans', '@MKA_lawfirm', '@MKA_lawfirm', 'Alai Timur No. 36 Kel. Alai Parak Kopi Kec. Padang Utara, Kota Padang, Sumatera Barat', '( 0751) 446044 - (0751) 447700  - 085233338080', 'pt.kurniaindahtrans@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `ekstrakulikuler`
--

CREATE TABLE `ekstrakulikuler` (
  `id_ekstra` int(11) NOT NULL,
  `isi_ekstra` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ekstrakulikuler`
--

INSERT INTO `ekstrakulikuler` (`id_ekstra`, `isi_ekstra`) VALUES
(1, '<p style=\"text-align:justify\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:18px\">Kegiatan ekstrakurikuler dimaksudkan sebagai kegiatan yang diarahkan untuk memperluas pengetahuan siswa, mengembangkan nilai-nilai atau sikap dan menerapkan secara lebih lanjut pengetahuan yang telah dipelajari siswa dalam mata pelajaran program inti.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:18px\">Kegiatan ekstrakurikuler dilakukan dengan memperhatikan minat dan bakat siswa, serta kondisi lingkungan dan sosial budaya. Pelaksanaan kegiatan ekstrakurikuler ditangani oleh guru atau petugas lain yang ditunjuk.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:18px\">Adapun Kegiatan ekstrakurikuler yang terdapat di SDIT PERMATA adalah :</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:18px\"><strong>Ekskul Wajib </strong>yang meliputi</span></span><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:18px\">&nbsp;:</span></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:18px\">Ekskul Pramuka SIT dan&nbsp;</span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:18px\">Ekskul Silat Empat Banding Budi (pat&nbsp;ban bu)</span></span></li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:18px\"><strong>Ekskul Pilihan</strong> yang meliputi :</span></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:18px\">Ekskul Tarian Tradisional dan Moderen</span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:18px\">Ekskul Melukis</span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:18px\">Ekskul Tahfidz</span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:18px\">Ekskul Menulis Kreatif dan&nbsp;</span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:18px\">English Club</span></span></li>\r\n</ul>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `nama_galeri` varchar(50) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `nama_galeri`, `foto`) VALUES
(20, 'Gedung SDIT Permata Simpang Haru Padang', '45695069_697439390637054_4505245793845772288_n - Copy.jpg'),
(21, 'Bakti Sosial Membersihkan Pantai Padang', '48274872_718534141860912_2254340072092467200_n.jpg'),
(22, 'Bakti Sosial Membersihkan Pantai Padang', '48090620_718533938527599_4178191748016635904_n - Copy.jpg'),
(23, 'Bakti Sosial Membersihkan Pantai Padang', '48166130_718533961860930_447808717803487232_n.jpg'),
(24, 'Bakti Sosial Membersihkan Pantai Padang', '48174270_718535295194130_1434404405532164096_n.jpg'),
(25, 'Bakti Sosial Membersihkan Pantai Padang', '48255977_718533098527683_6017569882609025024_n.jpg'),
(26, 'Bakti Sosial Membersihkan Pantai Padang', '48260269_718535865194073_1850223687224000512_n.jpg'),
(27, 'Bakti Sosial Membersihkan Pantai Padang', '48312875_718533845194275_330700533192982528_n.jpg'),
(28, 'Bakti Sosial Membersihkan Pantai Padang', '48355161_718533078527685_5919812320963330048_n.jpg'),
(30, 'Bakti Sosial Membersihkan Pantai Padang', '48358521_718535895194070_2226446578787287040_n.jpg'),
(31, 'Bakti Sosial Membersihkan Pantai Padang', '48360309_718535481860778_7094877113580257280_n.jpg'),
(32, 'Bakti Sosial Membersihkan Pantai Padang', '48361307_718535368527456_1873532968660631552_n.jpg'),
(33, 'Bakti Sosial Membersihkan Pantai Padang', '48367093_718533235194336_5753233693720182784_n.jpg'),
(34, 'Market Day Guru-Guru SDIT Permata', '47680090_716430195404640_6983812738229207040_n - Copy.jpg'),
(35, 'Market Day Guru-Guru SDIT Permata', '47682293_716431015404558_7861285423069265920_n - Copy.jpg'),
(36, 'Market Day Guru-Guru SDIT Permata', '47792691_716430318737961_3806800634531807232_n - Copy.jpg'),
(37, 'Market Day Guru-Guru SDIT Permata', '48046420_716430578737935_7399557137166237696_n - Copy.jpg'),
(38, 'Market Day Guru-Guru SDIT Permata', '48314154_716430608737932_3918764423279280128_n.jpg'),
(39, 'Market Day Guru-Guru SDIT Permata', '48367110_716430292071297_4482304384947978240_n.jpg'),
(40, 'Hari Pertama Sekolah Semester 2 TP 2018/2019', '49049857_2539230432796166_3180747939265904640_n.jpg'),
(41, 'Hari Pertama Sekolah Semester 2 TP 2018/2019', '49496011_2539229476129595_8425502804159758336_n.jpg'),
(42, 'Hari Pertama Sekolah Semester 2 TP 2018/2019', '49551521_2539229649462911_4995477948036284416_n.jpg'),
(43, 'Pelatihan Guru Tentang Media Pembelajaran dan TIK', '48389927_723941484653511_111172818980306944_n.jpg'),
(44, 'Pelatihan Guru Tentang Media Pembelajaran dan TIK', '48396365_723941444653515_5235888501911715840_n.jpg'),
(45, 'Pelatihan Guru Tentang Media Pembelajaran dan TIK', '48416686_723941374653522_1993017421237059584_n.jpg'),
(46, 'Pelatihan Guru Tentang Media Pembelajaran dan TIK', '48426124_723941581320168_4524376497305157632_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `instrakulikuler`
--

CREATE TABLE `instrakulikuler` (
  `id_instra` int(11) NOT NULL,
  `isi_instra` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instrakulikuler`
--

INSERT INTO `instrakulikuler` (`id_instra`, `isi_instra`) VALUES
(1, '<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Comic Sans MS,cursive\"><em>Kegiatan Intrakuriluler</em>&nbsp;adalah kegiatan utama sekolah yang dilakukan dengan menggunakan alokasi waktu yang telah ditentukan dalam struktur program. Kegiatan ini dilakukan guru dan peserta didik dalam jam-jam pelajaran setiap hari. Kegiatan intrakurikuler ini dilakukan untuk mencapai tujuan minimal setiap mata pelajaran/ bidang studi yang tergolong inti maupun khusus.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Comic Sans MS,cursive\">Dalam struktur kurikulum KTSP disebut dengan mata pelajaran. adapun mata pelajaran tersebut adalah : Pendidikan Agama Islam (PAI), Pendidikan Kewarganegaraan (PKn), Ilmu Pengetahuan Sosial (IPS), Bahasa Indonesia (BI) dengan kompetensi menulis, membaca, mendengar dan berbicara, Matematika (MTK) dengan kompetensi bilangan dan geometri, Ilmu&nbsp;Pengetahuan Alam (IPA) dan Pendidikan Jasmani dan Kesehatan (Penjaskes). </span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Comic Sans MS,cursive\">Sedangkan dalam struktur kurikulum 2013 disebut dengan muatan pelajaran.&nbsp;adapun mata pelajaran tersebut adalah : Pendidikan Agama Islam dan Budi Pekerti, Pendidikan Pancasila dan Kewarganegaraan (PPKn), Ilmu Pengetahuan Sosial (IPS), Bahasa Indonesia (BI), Matematika (MTK), Ilmu&nbsp;Pengetahuan Alam (IPA) dan Seni Budaya dan Prakarya (SBdP) dan Pendidikan Jasmani Olahraga dan Kesehatan PJOK). Pada kurikulum 2013 terdapat 5 bidang studi yang di tematikkan yaitu :</span></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Comic Sans MS,cursive\">Pendidikan Pancasila dan Kewarganegaraan (PPKn)&nbsp;</span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Comic Sans MS,cursive\">Ilmu Pengetahuan Sosial (IPS)&nbsp;</span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Comic Sans MS,cursive\">Bahasa Indonesia (BI)</span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Comic Sans MS,cursive\">Ilmu&nbsp;Pengetahuan Alam (IPA) dan </span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Comic Sans MS,cursive\">Seni Budaya dan Prakarya (SBdP)</span></span></li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Comic Sans MS,cursive\">Sementara untuk&nbsp;Matematika (MTK),&nbsp;Pendidikan Agama Islam dan Budi Pekerti dan&nbsp;Pendidikan Jasmani Olahraga dan Kesehatan PJOK) masing-masing diajarkan secara tersendiri sesuai dengan tuntutan kurikulum 2013 secara nasional.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Comic Sans MS,cursive\">Disamping itu terdapat program unggulan dari SDIT PERMATA berupa mata pelajaran muatan lokal (Mulok) yaitu Bahasa Arab, Bahasa Inggris, Tahfidz Qur&#39;an, Tahsin Qur&#39;an, dan Komputer Dasar.</span></span></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `kurikulum`
--

CREATE TABLE `kurikulum` (
  `id_kuri` int(11) NOT NULL,
  `isi_kuri` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kurikulum`
--

INSERT INTO `kurikulum` (`id_kuri`, `isi_kuri`) VALUES
(1, '<p style=\"text-align:justify\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:18px\">Kurikulum yang terdapat di SDIT PERMATA merupakan kurikulum yang mengacu pada kurikulum Nasional dengan tambahan kurikulum dari Jaringan Sekolah Islam Terpadu (JSIT). Masuknya kurikulum&nbsp;JSIT sebagai pedoman penerapan nilai-nilai karakter islam yang akan dipelajari oleh peserta didik untuk membentuk&nbsp;karakter yang tidak hanya crdas secara akademik tetapi juga berakhlakul karimah sesuai dengan nilai nilai keislaman.&nbsp;</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:18px\">Kurikulum Nasional yang dimaksud di atas adalah&nbsp;Kurikulum Satuan Tingkat Pendidikan (KTSP) dan Kurikulum 2013 ( Kurtilas). Pada saat ini Kurikulum Nasional yang diberlakukan di SDIT Permata untuk kelas 1 dan 4 sudah menggunakan kurikulum 2013 sedangkan kelas 2, 3, 5, dan 6 masih menggunakan kurikulum KTSP. Insya Allah pada tahun pelajaran 2019/2020 kelas 2 dan kelas 5 akan menggunakan kurikulum 2013 sesuai dengan amanat dari pemerintah pusat tentang kurikulum nasional.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:18px\">Metoda Pembelajaran SDIT Permata berdasarkan pada :</span></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:18px\">Pembelajaran Aktif (Active Learning</span></span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:18px\">Terintegrasi dengan nilai-nilai Islam dalam Proses Pembelajaran (Islamic Integration)</span></span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:18px\">Pemecahan Masalah (Problem Solving)</span></span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:18px\">Penemuan/Penyingkapan (Discovery Learning)</span></span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:18px\">Problem Based Learning (Pembelajaran Berbasis Masalah)</span></span></li>\r\n</ul>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `judul_pengumuman` varchar(500) NOT NULL,
  `tgl_post` date NOT NULL,
  `isi_pengumuman` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `judul_pengumuman`, `tgl_post`, `isi_pengumuman`) VALUES
(2, 'Bawaslu Pariaman maksimalkan peran pemuda awasi Pilgub Sumbar', '2018-12-11', '<p>Pariaman (ANTARA) - Badan Pengawas Pemilihan Umum (Bawaslu) Kota Pariaman, Sumatera Barat (Sumbar) memaksimalkan peran pemuda di daerah itu untuk mengawasi pelaksanaan pemilihan gubernur (Pilgub) dan wakil gubernur (wagub) provinsi ini.<br />\r\n<br />\r\n&quot;Kita mengetahui pemuda memiliki semangat yang tinggi dan ide-ide dari mereka perlu untuk peningkatan pengawasan Pilkada,&quot; kata Ketua Bawaslu Kota Pariaman, Riswan usai penandatanganan Nota Kesepahaman antara Bawaslu Pariaman dengan Komite Nasional Pemuda Indonesia (KNPI) dan Karang Taruna di Pariaman, Kamis.<br />\r\n<br />\r\nApalagi, kata dia pemuda memiliki organisasi diantaranya KNPI dan Karang Taruna yang memiliki struktur pengurusan hingga ke desa dan keluruhan.<br />\r\n<br />\r\nIa mengatakan dengan kegiatan yang dilakukan pihaknya bersama organisasi kepemudaan tersebut maka diharapkan dapat menutupi kekurangan Bawaslu dalam hal pengawasan dan sosialisasi Pilgub dan wagub Sumbar.<br />\r\n<br />\r\n&quot;Tidak semua pemilih yang dapat kami jangkau sehingga organisasi ini dan pihak lainnya kami harapkan dapat membantu kami dalam hal sosialisasi dan pengawasan,&quot; katanya.<br />\r\n<br />\r\nPihaknya berharap dengan keterlibatan pemuda dan pihak lainnya dapat membantu meningkatkan partisipasi pemilih serta memberikan sosialisasi kepada warga agar menerapkan protokol kesehatan.<br />\r\n<br />\r\nSementara itu Ketua Karang Taruna Kota Pariaman, Afdila mengatakan dengan penandatanganan nota kesepahaman tersebut maka pihaknya merasa terpanggil untuk ikut berpartisipasi dalam pengawasan Pilgub.<br />\r\n<br />\r\n&quot;Kami pun mengajak pemuda untuk ikut berpartisipasi dalam hal pengawasan dan mengajak warga untuk memilih pada hari pemilihan,&quot; ujarnya.<br />\r\n<br />\r\nKetua KNPI Kota Pariaman, Febrian Mirdani mengatakan sebelumnya pemuda hanya dijadikan sebagai alat untuk kepentingan politik namun sekarang dijadikan bagian penting dalam pelaksanaan pesta demokrasi.<br />\r\n<br />\r\n&quot;Kami merasa tertantang dalam pelaksanaannya dan kami pun komitmen untuk menjalankan,&quot; kata dia.<br />\r\n<br />\r\nTerpisah mantan Ketua KNPI Kota Pariaman periode 2012-2015 Riky Falantino mengatakan peringatan Hari Pahlawan dapat menjadi momentum bagi pemuda untuk mengambil peran dalam mengawasi proses demokrasi.<br />\r\n<br />\r\n&quot;Pemuda adalah pahlawan demokrasi, pemuda hari ini &quot;zaman now&quot; atau generasi milenial harus mengambil peran dalam mensukseskan dan mengawal Pilgub dan Wagub Sumbar 2020, jadi jangan hanya menjadi objek,&quot; ujar dia.<br />\r\n<br />\r\nIa mengatakan pemuda dapat mengambil peran dengan membuat kegiatan-kegiatan produktif dan edukatif bersama pemerintah desa dan kelurahan serta tokoh adat setempat untuk membicarakan terkait Pilgub dan Wagub Sumbar.<br />\r\n<br />\r\nIa menyebutkan pada kegiatan tersebut dapat dibahas terkait pentingnya menggunakan hak pilih meski di tengah pandemi karena dalam pelaksanaan pemilihan menerapkan protokol kesehatan.<br />\r\n&nbsp;</p>\r\n'),
(8, '27 Anggota Polres Pariaman Positif COVID-19', '2020-11-14', '<p>Sebanyak 27 personel Kepolisian Resor Kota&nbsp;<a href=\"https://www.detik.com/tag/pariaman\">Pariaman</a>, Sumatera Barat (<a href=\"https://www.detik.com/tag/sumbar\">Sumbar</a>), dinyatakan positif COVID-19. Selain itu, ada 4 orang lainnya dari keluarga personel yang positif Corona.</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(10, 'Kapal Wisata Terbalik di Pariaman Sumbar, 1 Tewas', '2020-11-14', '<p>Kapal wisata yang membawa rombongan guru terbalik di&nbsp;<a href=\"https://www.detik.com/tag/pariaman\">Pariaman</a>, Sumatera Barat. Satu orang meninggal dunia, sementara satu lainnya harus mendapat perawatan intensif di rumah sakit.<br />\r\n<br />\r\nKabid Kedaruratan dan Logistik BPBD Sumatera Barat, Rumainur menyebutkan, kapal naas itu dihantam gelombang dalam perjalanan dari Pantai Pariaman menuju Angso Duo, Sabtu (25/10/2019). Angso Duo merupakan pulau yang menjadi ikon wisata di daerah itu.</p>\r\n'),
(11, 'Ubur-ubur Bluebottle Serang Nelayan di Sumbar, Warga Diminta Waspada', '2020-11-14', '<p>Dua nelayan di Kota Pariaman, Sumatera Barat, dilarikan ke Rumah Sakit Umum Daerah (RSUD) karena diserang ubur-ubur jenis&nbsp;<em>bluebottle</em>. Akibat kejadian itu, warga setempat meminta para nelayan dan wisatawan berhati-hati ketika berada di laut.<br />\r\n<br />\r\n&quot;Salah satu korban adalah anak buah kapal (ABK) saya, kejadian sekitar 10 hari lalu. Seorang lagi Ali Imran (43), warga setempat, yang terjadi beberapa hari lalu,&quot; kata nakhoda kapal nelayan, Perizal (37), di Pariaman, yang dilansir dari&nbsp;<em>Antara</em>, Jumat (4/10/2019).<br />\r\n<br />\r\nIa mengatakan ABK tersebut tersengat ubur-ubur jenis&nbsp;<em>bluebottle</em>&nbsp;di wilayah Pulau Kasiak ketika mengangkat jaring di tengah laut. Namun dia juga melihat ubur-ubur itu mengapung di sepanjang perairan Pariaman.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `isi_pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id_prestasi` int(11) NOT NULL,
  `isi_prestasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`id_prestasi`, `isi_prestasi`) VALUES
(1, '');

-- --------------------------------------------------------

--
-- Table structure for table `psb`
--

CREATE TABLE `psb` (
  `id_psb` int(11) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `jk_siswa` varchar(20) NOT NULL,
  `tmpt_lahir` text NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tk_asal` varchar(50) NOT NULL,
  `ayah` varchar(50) NOT NULL,
  `ibu` varchar(50) NOT NULL,
  `pk_ayah` varchar(50) NOT NULL,
  `pk_ibu` varchar(50) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `alamat_ortu` text NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kab_kota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sambutan`
--

CREATE TABLE `sambutan` (
  `id_sambutan` int(11) NOT NULL,
  `isi_sambutan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sambutan`
--

INSERT INTO `sambutan` (`id_sambutan`, `isi_sambutan`) VALUES
(1, '<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Comic Sans MS,cursive\"><em><span style=\"background-color:#ffffff\">Welcome to SDIT Permata</span></em><span style=\"background-color:#ffffff\">&hellip;Selamat datang di dunia pendidikan Permata. Kami merasa sangat bangga mendapatkan perhatian dan kepercayaan dari Bapak-Ibu sekalian. Kami akan berupaya untuk dapat menjalankan amanah ini dengan baik agar pertanggung jawaban di hadapan Allah SWT kelak menjadi ringan.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"background-color:#ffffff\">Di sini kami mengajak anda para orang tua siswa untuk berpartisipasi membangun masyarakat pembelajar dalam rangka menyongsong era baru bagi anak-anak kita dan menjadikan anak-anak kita generasi yang mampu berkompetisi tanpa kehilangan wajah budaya dan moral.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"background-color:#ffffff\">Memasuki pergaulan global yang penuh dengan kompetisi ini, kita perlu menyiapkan mental anak-anak kita agar mampu bersaing dengan baik dengan memiliki moral/adab islami, kemandirian, kecerdasan, juga&nbsp; tentunya kreatifitas-inovasi sesuai tumbuh kembangnya.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"background-color:#ffffff\">Di SDIT Permata&nbsp;setiap siswa memiliki hak untuk berprestasi dan mendapatkan pelayanan yang baik. Karena kami memandang ini semua adalah amanah yang akan kami pertanggung jawabkan di hadapan Allah SWT. Tentu hal ini semakin terasa mudah dengan adanya kerjasama dari para orang tua siswa dalam menjalankan program sekolah.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"background-color:#ffffff\">Sebagai penutup, sekali lagi kami ucapkan selamat datang di SDIT Permata Padang. Marilah bekerjasama agar anak-anak kita dapat berkembang dengan baik sehingga tumbuh menjadi generasi yang berakhlakul karimah dan cerdas.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"background-color:#ffffff\">&quot;di SDIT Permata Belajar Adalah Pengalaman Yang Penuh Arti dan Menyenangkan&quot;&nbsp;</span></span></span></span></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `sarana_prasarana`
--

CREATE TABLE `sarana_prasarana` (
  `id_sarana` int(11) NOT NULL,
  `isi_sarana` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sarana_prasarana`
--

INSERT INTO `sarana_prasarana` (`id_sarana`, `isi_sarana`) VALUES
(1, '<ul>\r\n	<li><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"background-color:#ffffff\">1.&nbsp; Class Room&nbsp; : Ruang kelas dengan jumlah siswa maksimal 35&nbsp;orang</span></span></span></span></li>\r\n	<li><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"background-color:#ffffff\">2. Audio Video Presentation&nbsp;</span></span></span></span></li>\r\n	<li><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"background-color:#ffffff\">3. Labor Komputer</span></span></span></span></li>\r\n	<li><span style=\"color:#000000\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:18px\"><span style=\"background-color:#ffffff\">4. Mushalla dan Tempat Wudhu&#39;</span></span></span></span></li>\r\n	<li><span style=\"color:#000000\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:18px\"><span style=\"background-color:#ffffff\">5. Arena Bermain</span></span></span></span></li>\r\n	<li><span style=\"color:#000000\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:18px\"><span style=\"background-color:#ffffff\">6. Library/Perpustakaan</span></span></span></span></li>\r\n	<li><span style=\"color:#000000\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:18px\"><span style=\"background-color:#ffffff\">7. Transportasi Sekolah</span></span></span></span></li>\r\n	<li><span style=\"color:#000000\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:18px\"><span style=\"background-color:#ffffff\">8. Kantin/Koperasi Sekolah</span></span></span></span></li>\r\n	<li><span style=\"color:#000000\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:18px\"><span style=\"background-color:#ffffff\">9. Asuransi Siswa</span></span></span></span></li>\r\n</ul>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `sejarah`
--

CREATE TABLE `sejarah` (
  `id_sejarah` int(11) NOT NULL,
  `isi_sejarah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sejarah`
--

INSERT INTO `sejarah` (`id_sejarah`, `isi_sejarah`) VALUES
(1, '<p style=\"margin-left:40px\"><span style=\"color:#000000; font-family:Comic Sans MS, cursive\"><span style=\"font-size:18px\">MAN Padusunan berasal dari Program Pendidikan Thawalib yang sudah ada sejak Tahun 1926 dan pertama kali sekali bernama PGAP (Pendidikan Guru Agama Pertama). Kemudian PGAP berdasarkan KMA No. 42 Tahun 1992 beralih fungsi menjadi MAN Padusunan sampai sekarang</span></span></p>\r\n\r\n<p style=\"margin-left:40px\">&nbsp;</p>\r\n\r\n<p><span style=\"color:#000000; font-family:Comic Sans MS, cursive\"><span style=\"font-size:18px\">MAN Padusunan Sejak Tahun 2013 sudah Terakreditasi A</span></span></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `selamatdatang`
--

CREATE TABLE `selamatdatang` (
  `id_selamatdatang` int(11) NOT NULL,
  `isi_selamatdatang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `selamatdatang`
--

INSERT INTO `selamatdatang` (`id_selamatdatang`, `isi_selamatdatang`) VALUES
(1, 'SELAMAT DATANG DI WEBSITE SD IT PERMATA PENERIMAAN SISWA BARU SDIT PERMATA TELAH DIBUKA SEGERA DAFTARKAN PUTRA PUTRINYA, KARENA BELAJAR DI SDIT PERMATA MERUPAKAN PENGALAMAN YANG PENUH ARTI DAN MENYENANGKAN');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `isi_siswa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `isi_siswa`) VALUES
(1, '<p>sdfsdfsef sdfsdf adad asd asdasaa aa</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id_slide` int(11) NOT NULL,
  `gambar_1` text NOT NULL,
  `gambar_2` text NOT NULL,
  `gambar_3` text NOT NULL,
  `gambar_4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id_slide`, `gambar_1`, `gambar_2`, `gambar_3`, `gambar_4`) VALUES
(1, '20190109093757papan-tulis-kartun-png-7.png', '2019010909412320181215153215slide.jpg', '20190109102504banner-1082646_960_720.jpg', '20190109093354papan-tulis-kartun-png-7.png');

-- --------------------------------------------------------

--
-- Table structure for table `sosmed`
--

CREATE TABLE `sosmed` (
  `id_sosmed` int(11) NOT NULL,
  `ig` varchar(50) NOT NULL,
  `fb` varchar(50) NOT NULL,
  `twitter` varchar(50) NOT NULL,
  `wa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sosmed`
--

INSERT INTO `sosmed` (`id_sosmed`, `ig`, `fb`, `twitter`, `wa`) VALUES
(1, '', 'https://www.facebook.com/sditpermatapadang1/', '', '085356920960');

-- --------------------------------------------------------

--
-- Table structure for table `statistik`
--

CREATE TABLE `statistik` (
  `ip` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `hits` int(11) NOT NULL,
  `online` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statistik`
--

INSERT INTO `statistik` (`ip`, `tanggal`, `hits`, `online`) VALUES
('180.241.242.203', '2018-12-29', 11, '1546075796'),
('66.249.73.17', '2018-12-29', 1, '1546079112'),
('66.249.73.17', '2018-12-30', 1, '1546138478'),
('66.249.73.19', '2018-12-30', 2, '1546156478'),
('114.125.41.32', '2018-12-30', 1, '1546175005'),
('114.125.30.69', '2018-12-30', 1, '1546177370'),
('182.1.60.146', '2018-12-30', 1, '1546181107'),
('182.1.61.147', '2018-12-30', 1, '1546181447'),
('182.1.7.13', '2018-12-30', 3, '1546188053'),
('114.125.26.152', '2018-12-30', 2, '1546188954'),
('114.125.22.2', '2018-12-30', 1, '1546188506'),
('114.125.6.160', '2018-12-30', 1, '1546188611'),
('114.125.6.114', '2018-12-30', 1, '1546188801'),
('114.125.22.28', '2018-12-30', 1, '1546188829'),
('114.125.10.206', '2018-12-30', 2, '1546189163'),
('114.125.26.220', '2018-12-30', 3, '1546189096'),
('114.125.10.164', '2018-12-30', 1, '1546188972'),
('114.125.26.214', '2018-12-30', 3, '1546189174'),
('114.125.26.214', '2018-12-31', 10, '1546238571'),
('114.125.26.152', '2018-12-31', 9, '1546232729'),
('114.125.10.164', '2018-12-31', 12, '1546233090'),
('114.125.10.206', '2018-12-31', 4, '1546189529'),
('114.125.26.220', '2018-12-31', 7, '1546189667'),
('182.1.7.217', '2018-12-31', 1, '1546190347'),
('182.1.5.115', '2018-12-31', 1, '1546190382'),
('66.249.73.19', '2018-12-31', 1, '1546206998'),
('114.125.15.159', '2018-12-31', 1, '1546223964'),
('114.125.13.106', '2018-12-31', 3, '1546223998'),
('114.125.12.212', '2018-12-31', 1, '1546223979'),
('114.125.28.140', '2018-12-31', 1, '1546224003'),
('114.125.12.68', '2018-12-31', 1, '1546224066'),
('114.125.10.184', '2018-12-31', 1, '1546231727'),
('36.84.229.96', '2018-12-31', 1, '1546241481'),
('66.249.73.15', '2018-12-31', 1, '1546259414'),
('66.249.66.210', '2019-01-01', 1, '1546291348'),
('180.254.129.95', '2019-01-01', 1, '1546308580'),
('66.249.73.19', '2019-01-01', 1, '1546317124'),
('66.249.73.15', '2019-01-01', 1, '1546344535'),
('114.125.14.42', '2019-01-01', 1, '1546345378'),
('66.249.73.17', '2019-01-01', 1, '1546361115'),
('125.162.84.238', '2019-01-02', 15, '1546396940'),
('125.165.96.112', '2019-01-02', 7, '1546416057'),
('110.137.99.116', '2019-01-02', 36, '1546419281'),
('114.125.14.156', '2019-01-02', 1, '1546406434'),
('54.209.60.63', '2019-01-02', 4, '1546429318'),
('54.175.74.27', '2019-01-02', 1, '1546414952'),
('184.72.115.35', '2019-01-02', 1, '1546415174'),
('66.249.73.19', '2019-01-02', 2, '1546447546'),
('182.1.23.64', '2019-01-02', 1, '1546416000'),
('114.125.31.76', '2019-01-02', 1, '1546417518'),
('110.137.76.131', '2019-01-02', 2, '1546425859'),
('54.86.66.252', '2019-01-02', 1, '1546429112'),
('52.71.155.178', '2019-01-02', 1, '1546429176'),
('66.249.73.15', '2019-01-03', 2, '1546469135'),
('66.249.73.17', '2019-01-03', 2, '1546461225'),
('36.84.229.96', '2019-01-03', 12, '1546506292'),
('182.1.44.76', '2019-01-03', 1, '1546480804'),
('182.1.42.40', '2019-01-03', 1, '1546482684'),
('114.125.56.173', '2019-01-03', 1, '1546492807'),
('114.125.10.184', '2019-01-03', 1, '1546492819'),
('114.125.56.8', '2019-01-03', 1, '1546493330'),
('182.1.61.207', '2019-01-03', 1, '1546494373'),
('114.125.57.160', '2019-01-03', 1, '1546518294'),
('182.1.17.231', '2019-01-03', 1, '1546519438'),
('182.1.2.72', '2019-01-03', 2, '1546520057'),
('36.84.229.97', '2019-01-03', 2, '1546524679'),
('182.1.46.205', '2019-01-03', 1, '1546526939'),
('114.125.26.182', '2019-01-03', 1, '1546528646'),
('114.125.41.15', '2019-01-04', 1, '1546535195'),
('223.255.231.149', '2019-01-04', 3, '1546558762'),
('36.84.229.97', '2019-01-04', 8, '1546590796'),
('36.84.229.83', '2019-01-04', 133, '1546596919'),
('180.254.138.18', '2019-01-04', 1, '1546575697'),
('112.215.230.212', '2019-01-04', 1, '1546583122'),
('54.175.74.27', '2019-01-04', 3, '1546584426'),
('54.209.60.63', '2019-01-04', 1, '1546584414'),
('52.71.155.178', '2019-01-04', 1, '1546584457'),
('112.215.230.47', '2019-01-04', 2, '1546587289'),
('223.255.231.142', '2019-01-04', 23, '1546610860'),
('66.249.73.17', '2019-01-04', 1, '1546606581'),
('182.1.3.193', '2019-01-04', 1, '1546607404'),
('182.1.17.249', '2019-01-04', 2, '1546607428'),
('182.1.0.255', '2019-01-04', 4, '1546607480'),
('114.125.22.86', '2019-01-04', 1, '1546608928'),
('114.125.6.59', '2019-01-04', 1, '1546616035'),
('54.194.234.75', '2019-01-04', 1, '1546616260'),
('66.249.73.15', '2019-01-05', 2, '1546689633'),
('36.68.8.22', '2019-01-05', 39, '1546675150'),
('223.255.231.153', '2019-01-05', 1, '1546660475'),
('114.125.10.119', '2019-01-05', 1, '1546661413'),
('223.255.227.23', '2019-01-05', 1, '1546665184'),
('36.84.224.250', '2019-01-05', 8, '1546666424'),
('36.68.70.113', '2019-01-05', 19, '1546686282'),
('184.72.115.35', '2019-01-05', 1, '1546670454'),
('52.71.155.178', '2019-01-05', 1, '1546674084'),
('66.249.73.19', '2019-01-05', 1, '1546674881'),
('182.1.47.207', '2019-01-05', 2, '1546690002'),
('182.1.61.231', '2019-01-05', 2, '1546696944'),
('182.1.61.47', '2019-01-05', 2, '1546700841'),
('182.1.45.247', '2019-01-05', 2, '1546690889'),
('182.1.60.46', '2019-01-05', 2, '1546690943'),
('203.78.116.83', '2019-01-05', 6, '1546695819'),
('114.125.56.121', '2019-01-05', 1, '1546700665'),
('182.1.45.219', '2019-01-05', 1, '1546700728'),
('114.125.10.70', '2019-01-05', 1, '1546703802'),
('114.125.26.102', '2019-01-05', 1, '1546703882'),
('114.125.22.50', '2019-01-05', 2, '1546706297'),
('114.125.6.214', '2019-01-05', 1, '1546706501'),
('114.125.22.202', '2019-01-05', 2, '1546707512'),
('223.255.231.131', '2019-01-06', 2, '1546713341'),
('114.125.6.12', '2019-01-06', 1, '1546734799'),
('114.125.6.230', '2019-01-06', 1, '1546734842'),
('112.215.230.191', '2019-01-06', 30, '1546740012'),
('112.215.230.185', '2019-01-06', 3, '1546742823'),
('182.1.61.34', '2019-01-06', 1, '1546743043'),
('182.1.47.10', '2019-01-06', 2, '1546744920'),
('182.1.44.7', '2019-01-06', 1, '1546743765'),
('206.225.83.83', '2019-01-06', 1, '1546746206'),
('223.255.231.152', '2019-01-06', 2, '1546748489'),
('173.252.127.3', '2019-01-06', 1, '1546748476'),
('180.241.244.109', '2019-01-06', 7, '1546750139'),
('182.1.62.179', '2019-01-06', 1, '1546761022'),
('36.68.57.244', '2019-01-06', 13, '1546771156'),
('31.13.115.14', '2019-01-06', 1, '1546771011'),
('114.125.10.153', '2019-01-06', 1, '1546774656'),
('114.125.6.71', '2019-01-06', 1, '1546776640'),
('114.125.22.187', '2019-01-06', 1, '1546776713'),
('114.125.6.19', '2019-01-06', 1, '1546777358'),
('114.125.22.191', '2019-01-06', 1, '1546777723'),
('182.1.63.26', '2019-01-06', 1, '1546778259'),
('182.1.1.6', '2019-01-06', 2, '1546785946'),
('114.125.6.83', '2019-01-06', 4, '1546786800'),
('114.125.6.23', '2019-01-06', 1, '1546786671'),
('180.254.134.170', '2019-01-06', 7, '1546791590'),
('159.203.81.250', '2019-01-06', 1, '1546792756'),
('45.55.38.213', '2019-01-07', 1, '1546795427'),
('165.227.126.68', '2019-01-07', 1, '1546796169'),
('52.71.155.178', '2019-01-07', 2, '1546804025'),
('184.72.115.35', '2019-01-07', 1, '1546804212'),
('36.68.79.5', '2019-01-07', 9, '1546848805'),
('173.252.87.12', '2019-01-07', 2, '1546826223'),
('173.252.87.3', '2019-01-07', 1, '1546826224'),
('114.125.111.128', '2019-01-07', 1, '1546827721'),
('173.252.127.17', '2019-01-07', 1, '1546827812'),
('180.241.229.199', '2019-01-07', 19, '1546844748'),
('223.255.231.129', '2019-01-07', 5, '1546833613'),
('173.252.127.23', '2019-01-07', 1, '1546833611'),
('182.1.5.245', '2019-01-07', 1, '1546843443'),
('36.69.1.245', '2019-01-07', 1, '1546846349'),
('114.125.6.13', '2019-01-07', 1, '1546856328'),
('173.252.87.1', '2019-01-08', 1, '1546901504'),
('173.252.87.8', '2019-01-08', 1, '1546901521'),
('110.137.76.101', '2019-01-08', 11, '1546939419'),
('173.252.87.17', '2019-01-08', 2, '1546905347'),
('173.252.87.2', '2019-01-08', 1, '1546905347'),
('114.125.40.183', '2019-01-08', 1, '1546915480'),
('223.25.103.194', '2019-01-08', 2, '1546930051'),
('66.249.79.112', '2019-01-08', 2, '1546958873'),
('114.125.57.153', '2019-01-08', 1, '1546945182'),
('223.255.231.134', '2019-01-08', 3, '1546945832'),
('110.137.76.101', '2019-01-09', 31, '1547018239'),
('36.68.72.230', '2019-01-09', 3, '1547003577'),
('125.165.97.233', '2019-01-09', 9, '1547003817'),
('36.68.14.230', '2019-01-09', 9, '1547021019'),
('182.1.46.245', '2019-01-09', 1, '1547038977'),
('182.1.63.118', '2019-01-09', 3, '1547039153'),
('182.1.63.222', '2019-01-09', 1, '1547039110'),
('182.1.44.101', '2019-01-09', 1, '1547039202'),
('114.125.26.219', '2019-01-09', 1, '1547043608'),
('114.125.31.77', '2019-01-09', 1, '1547047984'),
('114.125.15.249', '2019-01-10', 1, '1547075629'),
('182.1.6.72', '2019-01-10', 1, '1547082337'),
('114.125.10.236', '2019-01-10', 1, '1547087489'),
('110.137.76.101', '2019-01-10', 34, '1547113477'),
('36.84.229.17', '2019-01-10', 54, '1547124232'),
('54.175.74.27', '2019-01-10', 1, '1547106459'),
('54.86.66.252', '2019-01-10', 1, '1547117171'),
('95.24.201.54', '2019-01-10', 1, '1547117651'),
('114.125.6.71', '2019-01-10', 1, '1547123511'),
('114.125.40.176', '2019-01-10', 6, '1547136066'),
('36.68.42.120', '2019-01-10', 30, '1547136718'),
('110.137.76.101', '2019-01-11', 11, '1547193107'),
('173.252.87.2', '2019-01-11', 1, '1547169397'),
('173.252.87.11', '2019-01-11', 1, '1547169405'),
('103.246.38.196', '2019-01-11', 2, '1547170459'),
('202.162.214.117', '2019-01-11', 18, '1547182056'),
('66.249.73.19', '2019-01-11', 1, '1547192356'),
('46.188.89.51', '2019-01-11', 1, '1547204005'),
('66.249.73.17', '2019-01-11', 1, '1547212136'),
('182.1.20.122', '2019-01-11', 5, '1547219219'),
('128.69.202.83', '2019-01-12', 1, '1547230683'),
('223.255.231.154', '2019-01-12', 1, '1547262644'),
('182.1.63.17', '2019-01-12', 3, '1547277724'),
('182.1.45.176', '2019-01-12', 1, '1547277708'),
('114.125.40.176', '2019-01-12', 1, '1547301837'),
('188.32.120.156', '2019-01-13', 1, '1547315535'),
('46.242.75.66', '2019-01-13', 1, '1547327192'),
('182.1.18.19', '2019-01-13', 2, '1547363583'),
('180.254.128.243', '2019-01-13', 6, '1547374570'),
('173.252.87.9', '2019-01-13', 1, '1547380089'),
('173.252.87.10', '2019-01-13', 1, '1547380108'),
('114.125.29.193', '2019-01-13', 2, '1547387752'),
('114.125.14.110', '2019-01-13', 2, '1547387792'),
('114.125.15.78', '2019-01-13', 1, '1547387741'),
('114.125.15.89', '2019-01-13', 1, '1547387767'),
('114.125.31.249', '2019-01-13', 1, '1547387774'),
('114.125.101.212', '2019-01-14', 17, '1547409523'),
('114.125.116.32', '2019-01-14', 1, '1547409158'),
('36.69.4.85', '2019-01-14', 16, '1547452065'),
('110.137.76.101', '2019-01-14', 11, '1547450832'),
('199.19.95.188', '2019-01-14', 2, '1547439123'),
('182.1.46.140', '2019-01-14', 2, '1547441584'),
('192.168.19.14', '2019-01-14', 1, '1547453691'),
('64.233.172.145', '2019-01-14', 1, '1547454046'),
('138.117.71.5', '2019-01-14', 1, '1547454305'),
('54.209.60.63', '2019-01-14', 1, '1547456360'),
('109.173.58.50', '2019-01-14', 1, '1547457554'),
('66.249.73.15', '2019-01-14', 1, '1547458194'),
('192.168.78.33', '2019-01-14', 1, '1547458778'),
('36.75.62.13', '2019-01-14', 1, '1547459979'),
('66.249.73.17', '2019-01-14', 1, '1547481981'),
('116.206.15.36', '2019-01-14', 2, '1547482401'),
('66.249.73.15', '2019-01-15', 1, '1547488233'),
('36.68.62.188', '2019-01-15', 4, '1547519910'),
('::1', '2020-11-11', 172, '1605089067'),
('::1', '2020-11-12', 300, '1605165920'),
('::1', '2020-11-13', 143, '1605259604'),
('::1', '2020-11-14', 248, '1605348042'),
('::1', '2020-11-15', 3, '1605423891'),
('::1', '2020-11-16', 75, '1605516764'),
('::1', '2020-11-17', 62, '1605589357'),
('::1', '2020-11-18', 144, '1605687199');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `idadmin` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`idadmin`, `username`, `password`, `namalengkap`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'superadmin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `id_lgn` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `id_lgn`, `username`, `password`, `keterangan`) VALUES
(1, 2, 'aaaa@gmail.com', '12345', 'Debcollector'),
(2, 1, '54654', '54654', 'pembeli'),
(3, 2, '3535345', '3535345', 'pembeli');

-- --------------------------------------------------------

--
-- Table structure for table `tenaga_kp`
--

CREATE TABLE `tenaga_kp` (
  `id_tkp` int(11) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `foto` text NOT NULL,
  `jk_g` varchar(50) NOT NULL,
  `jabatan_g` varchar(50) NOT NULL,
  `alamat_g` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tenaga_kp`
--

INSERT INTO `tenaga_kp` (`id_tkp`, `nama_guru`, `foto`, `jk_g`, `jabatan_g`, `alamat_g`) VALUES
(1, 'Rahmidia, S.Pd', '20181214111539Rahmidia.jpg', 'Perempuan', 'Kepala Sekolah', 'Kompl. PGRI I Blok E 12 Siteba'),
(2, 'Hafizuddin, S.Pd', '20181214111527Hafizuddin.jpg', 'Laki-Laki', 'Guru Penjaskes', 'Perum Graha Kuranji Asri No.C/14'),
(5, 'Ainul Mardiyah, S.Pd', '20181221140836ainul.jpg', 'Perempuan ', 'Guru Kelas', 'Jl. Baru Andalas Simpang Haru'),
(7, 'Budi Kurniadi, S. Pd ', '20181221141052014.jpg', 'Laki-Laki', 'Guru Kelas', 'Komp. Puri Filano Blok C 11 Kel. Parak Karakah Kec. Padang Timur'),
(8, 'Wahyu Endah Sari, S.Pd', '20181221141127011.jpg', 'Perempuan ', 'Guru Kelas', 'Jl. M. Yunus Anduring Samping Masjid Baburrahman'),
(12, 'Melwari Variza, S.Pt', '20190103153340016.jpg', 'Perempuan', 'Guru Kelas', 'Jl. Rimbo Data No. 20 RT 03/RW 01 Kec. Lubuk Kilangan '),
(18, 'Wahyu Endah Sari, S.Pd', '20190114120123wahyu.jpg', 'Perempuan', 'Gr. Kelas', 'Jl. M. Yunus Anduring Samping Masjid Baburrahman'),
(19, 'Marlis, S.H.I', '20190114120425wahyu.jpg', 'Laki-Laki', 'Gr. PAI/Agama', 'Jl. Pampangan RT 04/ RW 01 No 54 Kel Pampangan Kec Lubuk Begalung '),
(20, 'Novevi Rayeni, S.E', '20190114120537wahyu.jpg', 'Perempuan', 'Gr.PAI/Agama', 'Jln. Gadih Rantih No.14 RT.04 /   RW.05 Lakuk'),
(21, 'Rahmad Firdaus, S.Pd', '20190114120709wahyu.jpg', 'Perempuan', 'Gr. Kelas', 'Jl. Baru Andalas Simpang Haru'),
(22, 'Ramadini, S.Pd', '20190114120848wahyu.jpg', 'Perempuan', 'Gr. Kelas', 'Komp. Arai Pinang Blok H12 Pegambiran'),
(23, 'Widya Kurnia Sari, S. Pd I', '20190114121103wahyu.jpg', 'Perempuan', 'Gr. Kelas', 'Komp. Puri Filano Blok C 11 Kel. Parak Karakah Kec. Padang Timur'),
(24, 'Rezki Adrian, S.Kom', '20190114141015028.jpg', 'Laki-Laki', 'Gr. PAI/Agama', 'Jl. Baringin No 11/A Banuaran '),
(25, 'Fitri Yeni, S.Pd', '20190114141138006.jpg', 'Perempuan', 'Guru Kelas', 'Jl. M. Hatta RT. 02 RW. 1 Pasar Ambacang'),
(26, 'Yopi Ramadhani, S.Pd', '20190114141223015.jpg', 'Perempuan', 'Guru Kelas', 'Jl. Binuang Kampuang Dalam Kec pauh'),
(27, 'Sabrina Yunita, S.Pd', '20190114141245029.jpg', 'Perempuan', 'Guru Bahasa Inggris', 'Komplek  Bumi Lareh Permai Blok B/51 Sungai Lareh'),
(28, 'Halimah Arahfanita, S.Pd', '20190114141318Dzah Halimah.png', 'Perempuan', 'Guru Kelas', 'Kompl. Andalas Makmur RT 3/ RW 2'),
(29, 'Jefrianto, S.Pd', '20190114141337Ustadz Jefrianto.png', 'Laki-Laki', 'Guru Komputer', 'Sarang Gagak No. 129 RT. 03 RW. 4 Anduring Kec. Kuranji'),
(30, 'Maria Isnora, S.Hum', '20190114141351008.jpg', 'Perempuan', 'Guru Kelas', 'Jl. Pampangan RT 02 RW 05 Kec. Lubeg'),
(31, 'Yogi Anursa Wijaya, S.Pd', '20190114141422Ustadz Yogi.png', 'Laki-Laki', 'Guru Bahasa Arab', 'Jl. M. Yunus Lubuk Lintah Padang'),
(32, 'Yulia Fitri Yeni, S.Hum', '20190114141437yeni.jpg', 'Perempuan', 'Guru Kelas', 'Jl. M. Yunus Anduring Samping Masjid Baburrahman'),
(33, 'Wiwid Apraisa, S.Pd', '20190114141453Ustadzah Wiwid.png', 'Perempuan', 'Guru Kelas', 'Jl. M. Yunus Sarang Gagak, Lubuk Lintah'),
(34, 'Vani Sri Eka Putri, S.Pd.I', '20190114141506Ustadzah Vani.png', 'Perempuan', 'Guru Kelas', 'Komplek Manggis Garden Blok N4/A Kel. Gunung Sarik Kec. Kuranji'),
(35, 'Galih Marhesa Vicasko, S.E', '20190114141534GALIH.jpg', 'Laki-Laki', 'Tata Usaha', 'Jl. Komplek Depkes Blok A/6 Gadut '),
(36, 'Mardianto, A.Md', '20190114141557FOTO MARDIANTO.jpg', 'Laki-Laki', 'Operator Sekolah', 'Jl. Rimbo Tarok  Kel. Gunung Sarik Kec. Kuranji'),
(37, 'Nanda Rafles, SIQ S. PdI', '20190114141805wahyu.jpg', 'Laki-Laki', 'Gr. PAI/Agama', 'Komp.  Griya Lestari Blok K/14 Batuang Taba'),
(38, 'Yopi Ramadhani, S. Pd', '20190114143900wahyu.jpg', 'Perempuan', 'Gr. Kelas', 'Jl. Binuang Kampuang Dalam Kec pauh ');

-- --------------------------------------------------------

--
-- Table structure for table `tentangkami`
--

CREATE TABLE `tentangkami` (
  `id_tentang` int(11) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tentangkami`
--

INSERT INTO `tentangkami` (`id_tentang`, `isi`) VALUES
(1, '');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id_testi` int(11) NOT NULL,
  `nama_testi` varchar(50) NOT NULL,
  `deskripsi_testi` text NOT NULL,
  `profesi_testi` varchar(50) NOT NULL,
  `status_testi` enum('Y','T') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id_testi`, `nama_testi`, `deskripsi_testi`, `profesi_testi`, `status_testi`) VALUES
(3, 'Dila Prima Susanti', 'Saya sangat puas dengan pelayanan KITTraveling.com saya menyewa Toyota Hiace dari tanggal 9 September 2017 sampai tgl 10 September 2017,,unit sudah diantar ke hotel dari hari sebelumnya,sehingga saya ketika menyewa dari jam 7 pagi unit motor sudah siap..Mobil dalam keadaan baik,dan tidak ada masalah apa2 walaupun saya gunakan utk pergi liburan di minang kabau.sangat saya rekomendasikan bagi yg ingin menyewa mobil di sumatera barat\r\n', 'PNS', 'Y'),
(4, 'Dodi Santos', 'Alhamdulillah, liburan bareng istri lancar dan menyenangkan berkat KITTraveling.com. Pelayanan ramah,responsif,fleksibel, mobil prima fasilitas lengkap. Saya akan rekomendasikan ke teman2 yg mau liburan ke sumatera barat.', 'Pengusaha', 'Y'),
(5, 'Ahmad Fajri', 'Pelayanannya Sangat Memuaskan', 'Karyawan Bank', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id_video` int(11) NOT NULL,
  `link_v` text NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id_video`, `link_v`, `ket`) VALUES
(1, 'https://www.youtube.com/embed/UgrJtCgK4So', 'Nada Syiar MAN Padusunan Mengikuti festival Marching Band TK. Sumatera di Kota Pariaman 2017'),
(2, 'https://www.youtube.com/embed/Vd5CcigJ69c', 'MAN KOTA PARIAMAN || Adiwiyata Mandiri | Film Pendek'),
(3, 'https://www.youtube.com/embed/gUXMO6sCUT0', 'Profil MAN Kota Pariaman');

-- --------------------------------------------------------

--
-- Table structure for table `visimisi`
--

CREATE TABLE `visimisi` (
  `id_visimisi` int(11) NOT NULL,
  `isi_visi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visimisi`
--

INSERT INTO `visimisi` (`id_visimisi`, `isi_visi`) VALUES
(1, '<p style=\"margin-left:0in; margin-right:0in; text-align:center\"><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:12.0pt\"><span style=\"font-size:22px\">Visi Sekolah</span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:center\"><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:12.0pt\">&quot;CERDAS, BERAKHLAK MULIA, BERDAYA GUNA DAN PEDULI LINGKUNGAN&quot;</span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:center\"><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:12.0pt\"><span style=\"font-size:22px\">Misi Sekolah&nbsp;</span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in\"><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:12.0pt\">1. Meningkatkan Prestasi Akademik Lulusan dan Jumlah Siswa yang Melanjutkan Pendidikan di PTN</span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in\"><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:12.0pt\">2. Meningkatkan Kemampuan Siswa dalam Memahami Agama Islam dan Mengaplikasikan dalam Kehidupan Sehari-hari</span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in\"><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:12.0pt\">3. Membudayakan Siswa Tekun Melaksanakan Ibadah wajib, Maupun Sunnah, Santun dalam Bertutur serta Berprilaku</span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in\"><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:12.0pt\">4. Meningkatkan Jumlah Siswa yang Mampu Menjadi Penggerak Keagamaan dan Berperan dalam Kegiatan Kepemudaan di Lingkungan</span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in\"><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:12.0pt\">5. Meningkatkan Pengetahuaan Pengelolaan Lingkungan Hidup</span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in\"><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:12.0pt\">6. Meningkatkan Hidup Sehat dan Bersih</span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in\"><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:12.0pt\">7. Mengembangkan Sikap Peduli Lingkungan</span></span></p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `akreditasi`
--
ALTER TABLE `akreditasi`
  ADD PRIMARY KEY (`id_akre`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id_alumni`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `catatankata`
--
ALTER TABLE `catatankata`
  ADD PRIMARY KEY (`id_catatankata`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `ekstrakulikuler`
--
ALTER TABLE `ekstrakulikuler`
  ADD PRIMARY KEY (`id_ekstra`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `instrakulikuler`
--
ALTER TABLE `instrakulikuler`
  ADD PRIMARY KEY (`id_instra`);

--
-- Indexes for table `kurikulum`
--
ALTER TABLE `kurikulum`
  ADD PRIMARY KEY (`id_kuri`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indexes for table `psb`
--
ALTER TABLE `psb`
  ADD PRIMARY KEY (`id_psb`);

--
-- Indexes for table `sambutan`
--
ALTER TABLE `sambutan`
  ADD PRIMARY KEY (`id_sambutan`);

--
-- Indexes for table `sarana_prasarana`
--
ALTER TABLE `sarana_prasarana`
  ADD PRIMARY KEY (`id_sarana`);

--
-- Indexes for table `sejarah`
--
ALTER TABLE `sejarah`
  ADD PRIMARY KEY (`id_sejarah`);

--
-- Indexes for table `selamatdatang`
--
ALTER TABLE `selamatdatang`
  ADD PRIMARY KEY (`id_selamatdatang`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id_slide`);

--
-- Indexes for table `sosmed`
--
ALTER TABLE `sosmed`
  ADD PRIMARY KEY (`id_sosmed`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tenaga_kp`
--
ALTER TABLE `tenaga_kp`
  ADD PRIMARY KEY (`id_tkp`);

--
-- Indexes for table `tentangkami`
--
ALTER TABLE `tentangkami`
  ADD PRIMARY KEY (`id_tentang`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_testi`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- Indexes for table `visimisi`
--
ALTER TABLE `visimisi`
  ADD PRIMARY KEY (`id_visimisi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `akreditasi`
--
ALTER TABLE `akreditasi`
  MODIFY `id_akre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id_alumni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `catatankata`
--
ALTER TABLE `catatankata`
  MODIFY `id_catatankata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ekstrakulikuler`
--
ALTER TABLE `ekstrakulikuler`
  MODIFY `id_ekstra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `instrakulikuler`
--
ALTER TABLE `instrakulikuler`
  MODIFY `id_instra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kurikulum`
--
ALTER TABLE `kurikulum`
  MODIFY `id_kuri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `psb`
--
ALTER TABLE `psb`
  MODIFY `id_psb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sambutan`
--
ALTER TABLE `sambutan`
  MODIFY `id_sambutan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sarana_prasarana`
--
ALTER TABLE `sarana_prasarana`
  MODIFY `id_sarana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sejarah`
--
ALTER TABLE `sejarah`
  MODIFY `id_sejarah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `selamatdatang`
--
ALTER TABLE `selamatdatang`
  MODIFY `id_selamatdatang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id_slide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sosmed`
--
ALTER TABLE `sosmed`
  MODIFY `id_sosmed` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `idadmin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tenaga_kp`
--
ALTER TABLE `tenaga_kp`
  MODIFY `id_tkp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tentangkami`
--
ALTER TABLE `tentangkami`
  MODIFY `id_tentang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_testi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `visimisi`
--
ALTER TABLE `visimisi`
  MODIFY `id_visimisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
