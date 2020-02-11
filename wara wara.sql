-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.32-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for warawara
CREATE DATABASE IF NOT EXISTS `warawara` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `warawara`;

-- Dumping structure for table warawara.d_event
CREATE TABLE IF NOT EXISTS `d_event` (
  `e_id` int(11) NOT NULL AUTO_INCREMENT,
  `e_title` text,
  `e_type` varchar(50) DEFAULT NULL,
  `e_category` int(11) DEFAULT NULL,
  `e_views` int(11) DEFAULT '0',
  `e_desc` longtext,
  `e_start_date` date DEFAULT NULL,
  `e_end_date` date DEFAULT NULL,
  `e_start_time` varchar(50) DEFAULT NULL,
  `e_end_time` varchar(50) DEFAULT NULL,
  `e_location` text,
  `e_location_desc` text,
  `e_web` text,
  `e_email` text,
  `e_created_by` int(11) DEFAULT NULL,
  `e_phone` text,
  `e_poster` varchar(50) DEFAULT NULL,
  `e_created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `e_updated_by` int(11) DEFAULT NULL,
  `e_updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`e_id`),
  KEY `e_created_by` (`e_created_by`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumping data for table warawara.d_event: ~6 rows (approximately)
/*!40000 ALTER TABLE `d_event` DISABLE KEYS */;
REPLACE INTO `d_event` (`e_id`, `e_title`, `e_type`, `e_category`, `e_views`, `e_desc`, `e_start_date`, `e_end_date`, `e_start_time`, `e_end_time`, `e_location`, `e_location_desc`, `e_web`, `e_email`, `e_created_by`, `e_phone`, `e_poster`, `e_created_at`, `e_updated_by`, `e_updated_at`) VALUES
	(5, 'SoftLaunch MANDATORY COFFEE', 'PUBLISH', 6, 18, '<p><span style="color: rgb(57, 57, 57); font-family: Raleway, Arial, sans-serif; font-size: 16.8px; font-style: italic; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgba(0, 0, 0, 0.05); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">eman yang baik itu bukan yang selalu menyanjungmu. Kadang, dia terlihat biasa saja. Namum diam-diam selalu memperhatikan perkembanganmu. -Boy Candra</span> <br></p>', '2019-11-14', '2019-11-22', '10:00', 'selesai', 'jl wonorejo indah timur', NULL, 'www.denypras.co.vu', 'azriel@gmail.com', 1, '082140644679', 'event/image_5.jpg', '2020-01-05 03:17:38', NULL, NULL),
	(6, 'Showcase MANDATORYsss', 'PUBLISH', 7, 2, '<p>tidak ada</p>', '2019-11-22', '2019-11-22', '12:00', 'selesai', 'asdasdasda', NULL, 'www.denypras.co.vu', 'azriel@gmail.com', 1, '082140644679', 'event/image_6.jpg', '2019-12-17 04:55:26', 1, NULL),
	(7, 'JANJI JIWAAS', 'PUBLISH', 1, 15, '<p>WDQWDQDW</p>', '2019-11-05', '2019-11-27', '10:00', 'SELESAI', 'surabaya', NULL, 'www.denypras.co.vu', 'denyprasetyo41@gmail.com', 1, '082140644679', 'event/image_7.jpg', '2020-01-04 23:45:56', 1, NULL),
	(8, '1', 'PUBLISH', 1, 2, '<p>wefwef</p>', '2019-11-30', '1970-01-01', '1', '1', NULL, NULL, 'www.denypras.co.vu', 'azriel@gmail.com', 1, '082140644679', 'event/image_8.jpg', '2019-12-17 04:33:33', NULL, NULL),
	(9, 'asdasd', 'PUBLISH', 7, 0, '<p>asdasd</p>', '2019-11-01', '2019-11-28', '10:00', 'selesai', NULL, NULL, 'www.denypras.co.vu', 'azriel@gmail.com', 1, '082140644679', 'event/image_9.jpg', '2019-11-21 19:02:04', NULL, NULL),
	(10, 'sa', 'PUBLISH', 1, 0, '<p>asd</p>', '2020-01-14', '2020-01-29', '10:00', 'selesai', 'asd', 'asd', 'www.denypras.co.vu', 'azriel@gmail.com', 1, '082140644679', 'event/image_10.jpg', '2020-01-17 15:12:04', NULL, NULL);
/*!40000 ALTER TABLE `d_event` ENABLE KEYS */;

-- Dumping structure for table warawara.d_event_comment
CREATE TABLE IF NOT EXISTS `d_event_comment` (
  `dec_id` int(11) NOT NULL AUTO_INCREMENT,
  `dec_event` int(11) DEFAULT NULL,
  `dec_comment_text` longtext,
  `dec_comment_user` int(11) DEFAULT NULL,
  `dec_creator` int(11) DEFAULT NULL,
  `dec_read` varchar(1) DEFAULT 'N',
  `dec_created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`dec_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table warawara.d_event_comment: ~1 rows (approximately)
/*!40000 ALTER TABLE `d_event_comment` DISABLE KEYS */;
REPLACE INTO `d_event_comment` (`dec_id`, `dec_event`, `dec_comment_text`, `dec_comment_user`, `dec_creator`, `dec_read`, `dec_created_at`) VALUES
	(1, 7, 'TEST', 1, 1, 'N', '2019-11-21 19:40:28');
/*!40000 ALTER TABLE `d_event_comment` ENABLE KEYS */;

-- Dumping structure for table warawara.d_event_comment_dt
CREATE TABLE IF NOT EXISTS `d_event_comment_dt` (
  `dect_id` int(11) NOT NULL,
  `dect_dt` int(11) NOT NULL AUTO_INCREMENT,
  `dect_comment_text` longtext,
  `dect_comment_user` int(11) DEFAULT NULL,
  `dect_read` varchar(1) DEFAULT 'N',
  `dect_created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`dect_dt`,`dect_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table warawara.d_event_comment_dt: ~0 rows (approximately)
/*!40000 ALTER TABLE `d_event_comment_dt` DISABLE KEYS */;
/*!40000 ALTER TABLE `d_event_comment_dt` ENABLE KEYS */;

-- Dumping structure for table warawara.d_event_dt
CREATE TABLE IF NOT EXISTS `d_event_dt` (
  `edt_id` int(11) DEFAULT NULL,
  `edt_dt` int(11) DEFAULT NULL,
  `edt_photo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table warawara.d_event_dt: ~0 rows (approximately)
/*!40000 ALTER TABLE `d_event_dt` DISABLE KEYS */;
/*!40000 ALTER TABLE `d_event_dt` ENABLE KEYS */;

-- Dumping structure for table warawara.d_event_interest
CREATE TABLE IF NOT EXISTS `d_event_interest` (
  `dei_id` int(11) NOT NULL AUTO_INCREMENT,
  `dei_event` int(11) DEFAULT NULL,
  `dei_interest_user` int(11) DEFAULT NULL,
  `dei_creator` int(11) DEFAULT NULL,
  `dei_read` varchar(1) NOT NULL DEFAULT 'N',
  `dei_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`dei_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table warawara.d_event_interest: ~0 rows (approximately)
/*!40000 ALTER TABLE `d_event_interest` DISABLE KEYS */;
/*!40000 ALTER TABLE `d_event_interest` ENABLE KEYS */;

-- Dumping structure for table warawara.d_event_like
CREATE TABLE IF NOT EXISTS `d_event_like` (
  `del_id` int(11) NOT NULL AUTO_INCREMENT,
  `del_event` int(11) DEFAULT NULL,
  `del_like_user` int(11) DEFAULT NULL,
  `del_creator` int(11) DEFAULT NULL,
  `del_read` varchar(1) DEFAULT 'N',
  `del_created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`del_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table warawara.d_event_like: ~0 rows (approximately)
/*!40000 ALTER TABLE `d_event_like` DISABLE KEYS */;
/*!40000 ALTER TABLE `d_event_like` ENABLE KEYS */;

-- Dumping structure for table warawara.d_news
CREATE TABLE IF NOT EXISTS `d_news` (
  `n_id` int(11) NOT NULL AUTO_INCREMENT,
  `n_title` varchar(100) DEFAULT NULL,
  `n_image` varchar(100) DEFAULT NULL,
  `n_category` int(11) DEFAULT NULL,
  `n_content` longtext,
  `n_created_at` timestamp NULL DEFAULT NULL,
  `n_updated_at` timestamp NULL DEFAULT NULL,
  `n_created_by` int(11) DEFAULT NULL,
  `n_updated_by` int(11) DEFAULT NULL,
  `n_views` int(11) DEFAULT '0',
  PRIMARY KEY (`n_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table warawara.d_news: ~7 rows (approximately)
/*!40000 ALTER TABLE `d_news` DISABLE KEYS */;
REPLACE INTO `d_news` (`n_id`, `n_title`, `n_image`, `n_category`, `n_content`, `n_created_at`, `n_updated_at`, `n_created_by`, `n_updated_by`, `n_views`) VALUES
	(1, 'Cak Durasim, Basecamp Masyarakat Menikmati Seni', 'news/image_1.jpg', 1, '<p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-indent:36.0pt;"><span style="font-size:16px;line-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">Panggung megah kek gini bukan di luar negeri lo sobat wara, coba masuk ke Gedung taman budaya Cak Durasim, kamu seakan disambut kursi teater yang nyaman dengan pementasan seni tradisional yang siap melahapmu.&nbsp;</span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;"><span style="font-size:16px;line-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; Siapa sih yang gak tahu gedung Cak Durasim ? mungkin sobat wara yang bukan asli Surabaya baru mendengar atau sekedar tahu tapi belum sempat kesana. Arek Suroboyo nih pasti sebagian pernah dong datang kesana? Minimal lewat deh hehe. Gedung yang berada di lokasi pusat kota Surabaya ini tepatnya di Jalan Genteng Kali No. 85 adalah sebagai gedung taman budaya Jawa Timur.&nbsp;</span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;"><span style="font-size:16px;line-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Cak Durasim sendiri ialah tokoh seniman teater. Khususnya seniman ludruk. Ia pun merupakan tokoh pejuang juga lo riwayat terakhirnya saat ia mulai mengkritik pemerintahan Jepang dan kemudian ditangkap sampai akhir hidupnya yang kemudian namanya menjadi gedung kesenian taman budaya Jawa Timur nih..&nbsp;</span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;"><span style="font-size:16px;line-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Gedung Cak Durasim atau biasa para arek Suroboyo langsung bilang Cak Durasim / Cakdur ini ialah sebuah ruang inspirasi dan wadah bagi seniman menyajikan maupun belajar seni dan budaya. Gedung ini juga dikenal sebagai gedung pertunjukan yang biasanya menampilkan pertunjukan-pertunjukan seperti ludruk, drama, maupun kesenian lainnya.&nbsp;</span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;"><span style="font-size:16px;line-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Cak durasim gak hanya sebagai gedung pertunjukan lo, para seniman dari yang junior sampai senior berkumpul menjadi satu dalam satu ruang saling menginspirasi dan belajar. Terlebih lagi,Cak Durasim biasanya memiliki jadwal pementasan yang sobat wara dapat menyaksikan sesuai selera hehe. oh ya tak jarang juga para mahasiswa maupun komunitas seni, sastra atau yang masih berbau budaya nih haha sering kali menyajikan sebuah pementasan disini.&nbsp;</span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;"><span style="font-size:16px;line-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Gedung teater di dalamnya yang nyaman dan cukup memuat banyak penonton ini juga memiliki beberapa aturan yang harus kamu tahu sobat wara, yup gak hanya bioskop aja yang ga bolehin bawa makan atau minum tapi gedung teater Cak Durasim pun demikian.</span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;"><span style="font-size:16px;line-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Taman budaya satu ini memberikan ruang bagi mereka yang suka, minat dengan kesenian khususnya kesenian dan budaya lokal Jawa Timur. Beberapa jadwal latihan kesenian pun disediakan disini. jika beruntung, saat kesana kamu dapat menyaksikan para bocah menari tradisional dengan luwes dan lucunya atau muda mudi yang keren jago main musik tradisional kayak gamelan, gong dan lainnya di pendopo pelataran Cak Durasim eh ketemu juga sama sinden yang ayu plus merdu suaranya.</span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;"><span style="font-size:16px;line-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Bagi kalian para muda mudi ini juga salah satu alternatif kalian yang bosen sama hirup pikuk kota Surabaya yang identik sama mall aja sekali kali lah yup ajak <s>doi</s> teman kesini, selain bisa memperluas pengetahuanmu soal budaya Indonesia. Kalian secara gak langsung belajar sejarah, peradaban, sosial, bahkan politik lewat pementasan-pementasan para seniman keren disini. Gak ada ruginya. yah itung-itung kalau kencan sama doi (itupun kalau punya) yang antimainstream dikit gitu lo. Huehuehue.</span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;"><span style="font-size:16px;line-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">Oleh ; Soffya Ranti&nbsp;</span></p>', '2019-10-04 04:18:43', NULL, 8, NULL, 14),
	(2, 'Ritual Turun Hujan', 'news/image_2.jpg', 1, '<p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;"><span style="font-size:16px;line-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">&nbsp;</span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;"><span style="font-size:16px;line-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Di Indonesia selain kaya soal kebudayaannya, kesenian dan tentunya adat istiadat yang biasanya masih dilakukan beberapa daerah untuk berbagai tujuan tertentu. Seperti ritual untuk memanggil hujan saat kemarau berkepanjangan. Adat istiadat yang masih dilakukan hingga saat ini pun berguna sebagai pelestarian adat istiadat dan dipercaya juga dapat mengabulkan permintaan yang diminta.&nbsp;</span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;"><span style="font-size:16px;line-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Sobat wara, tahu gak kalau di daerah Gresik perbatasan Surabaya yang sudah terbilang metropolitan ini masih mengadakan upacara ritual turun hujan lo. Ritual turun hujan ini selain pertama dengan sholat untuk memohon turun hujan kemudian uniknya imam sang jamaah sholat ini akan disiram oleh sebuah dawet. Iyap dawet sobat wara, yang biasanya seger buat kita minum. Kenapa dawet? &nbsp;Masyarakat percaya dawet sebagai sumber air yang melimpah. Kalau kamu yang jadi imam apa dawetnya bakalan sambil kamu minum juga?&nbsp;</span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;"><span style="font-size:16px;line-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Kemudian Kota Tulungagung yang mempunyai tradisi ritual turun hujan dengan tradisi manten kucing atau menikahkan kucing dengan siraman yang seperti ritual siraman pernikahan sebenarnya. Masyarakat percaya manten kucing dapat menurunkan hujan. Masyarakat pun biasanya akan mengambil air bekas siraman kucing.&nbsp;</span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;"><span style="font-size:16px;line-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Ada juga tradisi Ojung sobat wara, yang asli Bondowoso Jawa Timur kayaknya lebih familiar ya dengan tradisi ini. Merupakan ritual turun hujan juga yang dilakukan dengan menggelar aksi sabet rotan yang digelar setelah acara do’a bersama di pinggir sungai. Ritual ini juga biasanya ditambah dengan diramaikan tari tradisional khas daerah ini seperti tari topeng kuno.&nbsp;</span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;text-indent:36.0pt;"><span style="font-size:16px;line-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">3 ritual menurunkan hujan ini masih dilakukan oleh masyarakat adat setempat yang masih mempercayai hal tersebut khususnya di Jawa Timur. Sebagaimana adat istiadat dan tradisi adakalanya percaya tak percaya akan kembali lagi ke individu masing-masing, tapi sebagai upaya pelestarian tradisi tak ada salahnya jika ritual dan tradisi daerah tetap dilaksanakan sehingga tetap terjaga. &nbsp;Bagaimana dengan sobat wara? Apakah di daerah kalian memiliki ritual turun hujan yang masih dilakukan saat kemarau panjang? apa kamu juga terlibat dengan ritual tadi?&nbsp;</span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;"><span style="font-size:16px;line-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">Oleh ; Soffya Ranti&nbsp;</span></p>', '2019-10-04 04:19:21', NULL, 8, NULL, 2),
	(3, 'Jejak Siola', 'news/image_3.jpg', 2, '<p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;"><span style="font-size:16px;line-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">Tiap kota pasti punya histori atau sejarah sendiri sendiri. Tak terkecuali dengan kota yang dikenal dengan julukan kota pahlawan dan seribu taman ini. Menurut kamu sobat wara, satu kata apa sih yang kamu tahu soal Surabaya? Keseniannya? Suasana kotanya? Tugu Pahlawan? Atau makanannya.&nbsp;</span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;"><span style="font-size:16px;line-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Selain terkenal dengan sejarah dan perjuangan arek Suroboyo dulu. Kota yang udah berumur 700 tahun’an ini memiliki gedung-gedung tua yang bersejarah dimana sampai sekarang memiliki nilai estetik dan guna bagi masyarakat Surabaya. Salah satunya gedung Siola.&nbsp;</span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;"><span style="font-size:16px;line-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Sobat wara khususnya yang asli Surabaya nih, pasti tau lah gedung satu ini. Gedung yang berada di Jalan Tunjungan ini sudah berdiri sejak tahun 1800’an yah yang jelas tepat sekali gedung ini dibangun oleh salah satu pemodal asing asal Inggris. Jika sobat wara melewati atau sempat mampir tak &nbsp;asing jika bangunan dan strukturnya memang terlihat seperti gedung tua dan pastinya untuk saat ini pasti lebih terawat dan indah tetapi tidak mengurangi sisi estetik kunonya.&nbsp;</span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;"><span style="font-size:16px;line-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Tahu gak kalau gedung Siola bukan bernama Siola tapi Chiyoda dan berganti Siola ketika tahun 1960an. Banyaknya gedung-gedung mall di Surabaya gak akan setua mall pertama Surabaya ini. Yup, siola menjadi mall kota Surabaya. Saat ini pun gedung telah beralih fungsi, selain menjadi tetap beberapa toko tetapi gedung ini lebih beralih fungsi oleh pemerintah Surabaya menjadi pusat pelayanan terpadu satu atap dan memiliki beberapa fasilitas seperti Koridor alias co-working space paling nyaman ini dan museum Surabaya.</span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;"><span style="font-size:16px;line-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Koridor atau salah satu co-working space yang dibuat pemerintah Surabaya yang berada di gedung Siola memiliki manfaat tersendiri bagi muda-mudi Surabaya untuk membantu meningkatkan produktifitas dalam berkarya contohnya kamu nih bisa ngerjain tugasmu dengan tenang dan tentunya fasilitas yang oke seperti wifi dan tempat duduk yang nyaman oh ya karena letaknya di lantai atas kamu juga sambil liat pemandangan kota Surabaya yang indah dari atas. Sebelum masuk koridor pun kamu akan disambut dengan taman gantung lo.&nbsp;</span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;text-indent:36.0pt;"><span style="font-size:16px;line-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">Oh ya jika kamu berniat kesini pastikan kamu benar-benar belajar dan nugas ya bukan sekedar pengen internetan gratis hehe. Tempat ini memang dikhususkan bagi mereka yang butuh tempat tenang bekerja. &nbsp;Bahkan disini dilarang buat nonton film, main &nbsp;game, bahkan tiduran hehe. Ya produktif dong kan memang untuk fasilitas bagi kalian untuk berkarya.&nbsp;</span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;text-indent:36.0pt;"><span style="font-size:16px;line-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">Pusat pelayanan terpadu satu atap kota Surabaya nah ini nih yang penting, disini memudahkan warga Surabaya juga mengurus administrasi maupun birokrasi seperti pembuatan surat kependudukan dan lainnya mereka dimudahkan dengan pelayanan satu atap jadi yahh gak bolak balik gitu harus kemana atau kemana lagi.&nbsp;</span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;text-indent:36.0pt;"><span style="font-size:16px;line-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">Ada museum Surabaya, uh yang ini deh bagian terpenting dan bermanfaat juga. museum Surabaya yang berada di gedung Siola ini memiliki koleksi barang-barang berhubungan dengan Surabaya. Ada beberapa replika makanan khas Surabaya dan &nbsp;barang-barang jaman dulu lainnya. Saat kamu mampir kamu juga dapat menghampiri toko oleh-oleh khas Surabaya yang berada di sudut gedung Siola ini.&nbsp;</span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;text-indent:36.0pt;"><span style="font-size:16px;line-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">Bahkan jika kamu pecinta fotografi,sepanjang jalan Tunjungan ini di antara gedung Siola memang terdapat bangunan-bangunan tua sejak jaman penjajahan yang masih difungsikan hingga saat ini. Banyak sekali beberapa arek-arek Surabaya yang sering memotret bagian estetik sepanjang jalan ini. Oh ya jika kamu mau menyusuri lebih jauh terdapat mural-mural yang oke yang biasanya dibuat foto-fotoan nih.&nbsp;</span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;"><span style="font-size:16px;line-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">Oleh : Soffya Ranti&nbsp;</span></p>', '2019-10-04 04:20:10', NULL, 8, NULL, 8),
	(4, 'Kasada', 'news/image_4.jpg', 2, '<p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;"><span style="font-size:16px;line-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">Sobat wara, selain keindahan Gunung Bromo kalian pernah menemui atau sempat beruntung menyaksikan &nbsp;acara Kasada di gunung bromo? Para wisatawan biasanya menantikan acara ini yang biasanya dilaksanakan oleh warga tengger sekitar Bromo yang beragama hindu. Upacara ini dapat semakin menambah daya tarik wisatawan yang berwisata ke Gunung Bromo karena memang hanya di waktu tertentu dilaksanakan maka dari itu siapapun yang ingin mengikuti rangkaian atau sekedar menikmati harus tahu jadwal acara ini dilaksanakan.&nbsp;</span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;"><span style="font-size:16px;line-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Kasada ini ialah sebuah hari upacara sesembahan berupa persembahan sesajen kepada Sang Hyang Widhi. Acara ini biasa dilaksanakan pada hari ke-14 penanggalan Jawa yang diadakan upacara untuk Sang Hyang Widhi dan leluhur Roro Anteng dan Jaka Seger.</span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;"><span style="font-size:16px;line-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Upacara ini dilakukan oleh suku Tengger, dimana Tengger sendiri berasal dari nama Roro Anteng dan Joko Seger. Persembahan acara ini bermula dari kisah pasangan Roro Anteng dan Jaka Seger yang sudah menikah tetapi belum juga memiliki putra-putri sehingga mereka bersemedi dan kemudian Sang Hyang Widhi mengabulkan permintaannya dengan syarat anak bungsunya harus dikembalikan lagi atau dikorbankan ke kawah Gunung Bromo.</span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;"><span style="font-size:16px;line-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Singkat cerita sobat wara, Roro Anteng dan Jaka Seger mengingkari janjinya kemudian terjadilah prahara yang gunung Bromo menyemburkan api dan menjadi gelap gulita serta hilangnya anak bungsu Joko Seger dan Roro Anteng tersebut. Maka dari itu umat Hindu suku Tengger melakukan prosesi acara Kasada pada tanggal ke 14 penanggalan Jawa.</span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;"><span style="font-size:16px;line-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Kasada sendiri bahkan menjadi festival yang banyak diminati wisatawan karena prosesi acara adat yang unik &nbsp;dan pengalaman tersendiri jika beruntung melihat dan meramaikan acara ini. Biasanya para umat melarungkan sesaji baik pertanian maupun peternakan ke kawah Gunung Bromo dengan kemudian prosesi do’a bersama untuk meminta rezeki dan terhindar dari bencana.</span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;"><span style="font-size:16px;line-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">Oleh ; Soffya Ranti&nbsp;</span></p>', '2019-10-04 04:21:13', NULL, 8, NULL, 0),
	(5, 'Kubu Lupis Sterofoam Atau Daun Pisang', 'news/image_5.jpg', 1, '<p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;"><span style="font-size:16px;line-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">Indonesia selain kaya tradisi beragamnya salah satu yang menarik ialah makanan tradisionalnya yang &nbsp;masih melekat dengan acara-acara tradisi di daerah-daerah tertentu. Seperti tradisi selapan atau tradisi dimana seorang bayi &nbsp;di umur tertentu akan digunduli dan si punya hajat akan membagikan makanan yang pasti selalu ada kue basah iwel-iwel sebuah kue yang berbahan dasar tepung ketan, gula, kelapa dan di isi gula merah. Sobat wara sudah sering bukan mencobanya?&nbsp;</span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;"><span style="font-size:16px;line-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Satu lagi nih jajanan tradisional khas jawa. Kue lupis, siapa yang gak pernah makan salah satu makanan ini yang biasanya dibungkus daun pisang mirip lontong dengan dilengkapi cucuran gula merah cair &nbsp;yang menggoda. Hmm jadi pengen. Sebenarnya, kue lupis sendiri tak selalu disajikan di acara-acara tertentu layaknya teman kue lain. Kue ini cenderung selalu ada di pasaran dan mudah menemuinya.&nbsp;</span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;"><span style="font-size:16px;line-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Walaupun terbilang mudah menemuinya, seiring berkembangnya zaman kue lupis mulai bertransformasi mulai dari bentuk dan cara penyajiannya. Dulu, kue lupis saat masih utuh dibungkus mirip lontong menggunakan daun pisang kemudian disajikan kembali di sebuah daun pisang yang dibentuk seperti wadah ditemani bubur ataupun klanting dan teman lainnya tak lupa sendoknya pun dari daun pisang oh ya dengan lelehan gula merah yang manis legit kayak kamu. Untuk kalian yang sempat ngerasain ini, selamat kalian mulai menua. Hehe</span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;"><span style="font-size:16px;line-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Saat ini kue lupis &nbsp;dengan bungkus daun pisang lambat laun mulai sedikit punah, bukan kue nya tapi penyajiannya itu lo. Yah mungkin sebagian besar tak mempersalahkan. Lupis sekarang mulai dibungkus dengan plastik, penyajiannya pun tak lagi menggunakan daun pisang dengan sendoknya yang khas dari daun. Sebagian &nbsp;penjual mulai bertranformasi menggunakan sterofoam dan sendok bebek plastik.&nbsp;</span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;"><span style="font-size:16px;line-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Alasan-alasan tertentu yang membuat mereka mengganti penyajiannya di antaranya karena lebih praktis dan efisien juga menambah nilai jualnya karena terlihat lebih ringkas dan menarik. Walaupun kekurangannya satu sudah tak lagi beraroma khas daun pisang. Untuk sebagian orang lebih menyukai kemasan tradisional. Alasannya lebih ramah lingkungan, aroma lebih kuat, dan tradisional lebih kental.</span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;text-indent:36.0pt;"><span style="font-size:16px;line-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">Semua memiliki alasan sendiri-sendiri tapi jujur saja lupis dengan kemasan daun pisang mulai sedikit sulit ditemukan kecuali penjual-penjual yang sudah sepuh yang biasanya beliau-beliau masih mempertahankan dengan kemasan daun pisang yang khas. Jadi sobat wara, kamu lebih kubu lupis sterofoam atau daun pisang? apapun kemasannya, minumnya tetap apa? yah terserah sobat wara minum apa.&nbsp;</span></p>', '2019-10-04 04:21:53', NULL, 8, NULL, 3),
	(6, 'Meski Bukan Di Desa, Tegal Deso Masih Tetap Ada', 'news/image_6.jpg', 2, '<p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;"><span style="font-size:16px;line-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">Halo sobat wara, tahu gak sih kamu mendengar kata Tegal Deso? &nbsp;Mungkin sebagian dari kalian sudah familiar. Yup, Tegal Deso adalah nama lain dari Sedekah Bumi. Seperti sedekah bumi pada umumnya ialah serangkaian acara atau tradisi yang dilakukan masyarakat desa untuk memperingati hari jadi desa dengan mengadakan syukuran.&nbsp;</span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;"><span style="font-size:16px;line-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Kamu tahu gak, beberapa daerah di kota juga merayakan tegal deso lo, tegal deso identik dirayakan oleh orang-orang kebanyakan di pemukiman desa yang pasti tahu sendiri kan, desa dengan suasana yang masih banyak sawah,ladang, sungai dan lain-lain.&nbsp;</span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;text-indent:36.0pt;"><span style="font-size:16px;line-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">Walaupun di kota sudah jarang ditemui tapi ada &nbsp;salah satu daerah di Gresik, tepatnya di perbatasan Surabaya dan Gresik yaitu daerah lakarsantri dan Balong Dinding sekitarnya &nbsp;ini masih melaksanakan acara ini tiap tahunnya. Walaupun terbilang di Kota besar tradisi ini masih dilaksanakan tiap tahunnya. Alasannya karena sudah adat istiadat setempat yang tetap mempertahankan tradisi ini&nbsp;</span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;"><span style="font-size:16px;line-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Tegal deso biasanya dimeriahkan dengan acara-acara kesenian tradisional. Seperti pada siang hari masyarakat mengadakan arak tumpeng keliling desa dan pagelaran reog. Untuk malam harinya biasanya pementasan ludruk dan wayang. Tiap-tiap rumah pun mengadakan open house yang pasti siapapun dari kalian pasti akan diundang untuk bertamu dan mencicipi hidangan khas yang selalu ada setiap ada acara ini. diantaranya kue –kue basah seperti onde-onde, kucur, koci-koci, nogosari, apem dan buah pisang. Uh mantap gak tuh.&nbsp;</span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;"><span style="font-size:16px;line-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Tegal deso atau sedekah bumi ini diadakan bukan tidak mempunyai tujuan, selain sebagai bentuk rasa syukur hari jadi desa, masyarakat setempat mempercayai tegal deso sebagai bentuk tolak bala untuk daerah atau desa itu sendiri.&nbsp;</span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;"><span style="font-size:16px;line-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Tegal deso disini dirayakan setiap tahun memperingati hari jadi desa dengan tanggal yang tidak pernah sama. Tanggal perayaan tidak pernah sama karena ada perhitungan khusus untuk merayakannya. Tahun ini masyarakat setempat akan merayakannya bulan September 2019 esok. Nah, mantap nih buat kalian sobat wara yang lagi gabut bisa main kesini.&nbsp;</span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;"><span style="font-size:16px;line-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Oh ya sobat wara jika kamu bertemu atau temanmu merayakan Tegal deso, sudah pasti para masyarakat setempat sangat antusias mengundangmu untuk mengahadiri perayaannya, menikmati hidangan yang enak, juga menikmati kesenian daerah yang pasti kamu merasakan aura yang berbeda menikmati ketradisionalan di antara hirup pikuk kota metropolitan.</span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;"><span style="font-size:16px;line-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">Oleh ; Soffya Ranti&nbsp;</span></p>', '2019-10-04 04:22:39', NULL, 8, NULL, 0),
	(7, 'Ngudang, Bentuk Parenting Anak Lewat Tradisi', 'news/image_7.jpg', 2, '<p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;"><span style="font-size:16px;line-height:150%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">&nbsp; &nbsp; &nbsp; &nbsp;Halo sobat wara, kalian punya adik bayi atau balita yang sering banget dihibur dengan ngudang gak sih? Bahkan saat kita masih dibuaian dan rewel kita secara tak langsung dihibur dengan ngudang oleh orang tua maupun orang-orang sekitar kita.</span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;"><span style="font-size:16px;line-height:150%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">&nbsp; &nbsp; &nbsp; &nbsp;Atau baru mendengar kata ngudang? Kalian yang asli orang jawa pasti gak asing lagi dengan istilah ngudang. Hmm dalam bahasa Indonesia pun ngudang masih belum bisa ditemukan dengan arti yang &nbsp;memiliki makna sama hehe.&nbsp;</span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;"><span style="font-size:16px;line-height:150%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">&nbsp; &nbsp; &nbsp; &nbsp;Ngudang ialah bentuk hiburan atau puji-pujian orang tua kepada anaknya yang masih balita atau berada pada umur-umur masa emas bayi. Kalau dalam bahasa sansekerta, ngudang berarti ‘dipuji-puji’ atau ‘diharap-harap’. Makanya sobat wara, biasanya ngudang banyak bentuknya.&nbsp;</span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;"><span style="font-size:16px;line-height:150%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">&nbsp; &nbsp; &nbsp; &nbsp;Apa aja sih? Ya kayak kamu ngudang bayi atau anak kecil. Biasanya perkataan pujian seperti “Anak lanang/ wadon pinter dewe…” (Anak laki/perempuan pintar) yang dilontarkan orang tua pada anaknya dengan nada yang khas. Tak hanya pujian sekelebat bentuk ngudang biasanya juga dalam kidungan atau sebuah tembang yang memiliki arti-arti yang baik.&nbsp;</span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;"><span style="font-size:16px;line-height:150%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">&nbsp; &nbsp; &nbsp; &nbsp;Salah satu tembang ngudang biasanya ialah <em>Lela Ledhung- Tak lela lela lela ledung Cup meneng ojo pijer nangis Anakku sing ayu rupane Tak gadang biso urip mulyo Dadiyo wanito utomo Ngluhurake asmane wong tuwo Dadiyo pandekare bongso</em></span>. <span style="font-size:16px;line-height:150%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">Dan masih panjang kelanjutannya hehe. Itu cuplikannya aja ya sobat hehe. Inti artinya ialah bentuk ngudang tersebut menghibur si anak agar tak rewel dan memberikan pesan-pesan harapan orang tua pada si anak &nbsp; . <em>Jangan menangis, nanti cantiknya hilang. Diharapkan akan menjadi wanita mulia yang dapat membanggakan orang tua.&nbsp;</em></span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;"><span style="font-size:16px;line-height:150%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">&nbsp; &nbsp; &nbsp; &nbsp;Nah sobat wara, ngudang juga bermanfaat lo bagi hubungan si orang tua dan anak. Dari tembang-tembangnya saja dan artinya, ngudang sebagai bentuk pujian dan harapan orang tua pada anaknya kelak. Sebagai do’a secara tak langsung untuk anaknya melalui ngudang-ngudang yang disampaikan.</span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;"><span style="font-size:16px;line-height:150%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">&nbsp; &nbsp; &nbsp; &nbsp;Ngudang tak hanya sebagai harapan orang tua untuk si kecil. Biasanya, kedekatan hubungan si anak dan orang tua pun akan semakin hangat. Melalui kidung atau tembang yang disampaikan dengan memiliki makna-makna baik ngudang pun dapat menjadi bentuk parenting pada anak dengan tradisi.</span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;text-align:justify;"><span style="font-size:16px;line-height:150%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">Oleh : Soffya Ranti&nbsp;</span></p>', '2019-10-04 04:23:17', NULL, 8, NULL, 0);
/*!40000 ALTER TABLE `d_news` ENABLE KEYS */;

-- Dumping structure for table warawara.d_news_comment
CREATE TABLE IF NOT EXISTS `d_news_comment` (
  `dnc_id` int(11) NOT NULL AUTO_INCREMENT,
  `dnc_news` int(11) DEFAULT NULL,
  `dnc_comment_user` int(11) DEFAULT NULL,
  `dnc_comment_text` text,
  `dnc_creator` int(11) DEFAULT NULL,
  `dnc_read` varchar(1) DEFAULT 'N',
  `dnc_created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`dnc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table warawara.d_news_comment: ~1 rows (approximately)
/*!40000 ALTER TABLE `d_news_comment` DISABLE KEYS */;
REPLACE INTO `d_news_comment` (`dnc_id`, `dnc_news`, `dnc_comment_user`, `dnc_comment_text`, `dnc_creator`, `dnc_read`, `dnc_created_at`) VALUES
	(3, 3, 8, 'dqwdqd', 8, 'N', '2019-10-04 18:46:24');
/*!40000 ALTER TABLE `d_news_comment` ENABLE KEYS */;

-- Dumping structure for table warawara.d_news_comment_dt
CREATE TABLE IF NOT EXISTS `d_news_comment_dt` (
  `dnct_id` int(11) NOT NULL,
  `dnct_dt` int(11) NOT NULL AUTO_INCREMENT,
  `dnct_comment_text` int(11) DEFAULT NULL,
  `dnct_comment_user` int(11) DEFAULT NULL,
  `dnct_read` char(1) DEFAULT 'N',
  `dnct_created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`dnct_id`,`dnct_dt`),
  UNIQUE KEY `dnct_dt` (`dnct_dt`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table warawara.d_news_comment_dt: ~0 rows (approximately)
/*!40000 ALTER TABLE `d_news_comment_dt` DISABLE KEYS */;
/*!40000 ALTER TABLE `d_news_comment_dt` ENABLE KEYS */;

-- Dumping structure for table warawara.d_news_interest
CREATE TABLE IF NOT EXISTS `d_news_interest` (
  `dni_id` int(11) NOT NULL AUTO_INCREMENT,
  `dni_news` int(11) DEFAULT NULL,
  `dni_interest_user` int(11) DEFAULT NULL,
  `dni_creator` int(11) DEFAULT NULL,
  `dni_read` char(1) DEFAULT NULL,
  `dni_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`dni_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table warawara.d_news_interest: ~0 rows (approximately)
/*!40000 ALTER TABLE `d_news_interest` DISABLE KEYS */;
/*!40000 ALTER TABLE `d_news_interest` ENABLE KEYS */;

-- Dumping structure for table warawara.d_news_like
CREATE TABLE IF NOT EXISTS `d_news_like` (
  `dnl_id` int(11) NOT NULL AUTO_INCREMENT,
  `dnl_news` int(11) DEFAULT NULL,
  `dnl_like_user` int(11) DEFAULT NULL,
  `dnl_creator` int(11) DEFAULT NULL,
  `dnl_read` char(1) DEFAULT 'N',
  `dnl_created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`dnl_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table warawara.d_news_like: ~2 rows (approximately)
/*!40000 ALTER TABLE `d_news_like` DISABLE KEYS */;
REPLACE INTO `d_news_like` (`dnl_id`, `dnl_news`, `dnl_like_user`, `dnl_creator`, `dnl_read`, `dnl_created_at`) VALUES
	(1, 3, 8, 8, 'N', '2019-10-04 18:35:54'),
	(2, 1, 1, 8, 'N', '2019-11-30 22:59:37');
/*!40000 ALTER TABLE `d_news_like` ENABLE KEYS */;

-- Dumping structure for table warawara.d_puisi
CREATE TABLE IF NOT EXISTS `d_puisi` (
  `dp_id` int(11) NOT NULL AUTO_INCREMENT,
  `dp_view` int(11) NOT NULL DEFAULT '0',
  `dp_karya` varchar(100) NOT NULL DEFAULT '0',
  `dp_image` varchar(50) DEFAULT NULL,
  `dp_title` varchar(100) DEFAULT NULL,
  `dp_category` int(11) DEFAULT NULL,
  `dp_content` text,
  `dp_created_by` int(11) DEFAULT NULL,
  `dp_created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `dp_updated_by` int(11) DEFAULT NULL,
  `dp_updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`dp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table warawara.d_puisi: ~3 rows (approximately)
/*!40000 ALTER TABLE `d_puisi` DISABLE KEYS */;
REPLACE INTO `d_puisi` (`dp_id`, `dp_view`, `dp_karya`, `dp_image`, `dp_title`, `dp_category`, `dp_content`, `dp_created_by`, `dp_created_at`, `dp_updated_by`, `dp_updated_at`) VALUES
	(1, 0, '0', 'puisi/image_.jpg', 'apalah dayakuqqq', 1, '<p>qwdqwdqwdsssssssssss</p>', 1, '2019-11-29 03:20:48', 1, '2019-11-29 03:27:44'),
	(2, 0, 'deny pras', NULL, 'allll', NULL, '<p>few</p>', 1, '2019-12-11 01:17:40', NULL, NULL),
	(3, 0, 'dny', 'puisi/image_3.jpg', 'allll', NULL, '<p>g</p>', 1, '2020-01-06 08:43:27', 1, '2020-01-17 03:13:23');
/*!40000 ALTER TABLE `d_puisi` ENABLE KEYS */;

-- Dumping structure for table warawara.d_shop
CREATE TABLE IF NOT EXISTS `d_shop` (
  `ds_id` int(11) NOT NULL AUTO_INCREMENT,
  `ds_code` varchar(50) NOT NULL DEFAULT '0',
  `ds_category` int(11) NOT NULL DEFAULT '0',
  `ds_name` varchar(50) DEFAULT NULL,
  `ds_price` decimal(20,2) DEFAULT NULL,
  `ds_discount` decimal(20,2) DEFAULT NULL,
  `ds_stock_status` varchar(50) DEFAULT NULL,
  `ds_discount_status` varchar(50) DEFAULT NULL,
  `ds_phone` varchar(50) DEFAULT NULL,
  `ds_desc_top` text,
  `ds_desc_bottom` text,
  `ds_stock` int(11) DEFAULT NULL,
  `ds_view` int(11) DEFAULT NULL,
  `ds_weight` varchar(50) DEFAULT NULL,
  `ds_height` varchar(50) DEFAULT NULL,
  `ds_created_at` timestamp NULL DEFAULT NULL,
  `ds_updated_at` timestamp NULL DEFAULT NULL,
  `ds_created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`ds_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table warawara.d_shop: ~4 rows (approximately)
/*!40000 ALTER TABLE `d_shop` DISABLE KEYS */;
REPLACE INTO `d_shop` (`ds_id`, `ds_code`, `ds_category`, `ds_name`, `ds_price`, `ds_discount`, `ds_stock_status`, `ds_discount_status`, `ds_phone`, `ds_desc_top`, `ds_desc_bottom`, `ds_stock`, `ds_view`, `ds_weight`, `ds_height`, `ds_created_at`, `ds_updated_at`, `ds_created_by`) VALUES
	(1, 'k001', 0, 'MANDATORY COFFEE', 100000.00, 75000.00, '1', 'YA', '123', NULL, '<p style="box-sizing: border-box; margin: 0px 0px 1rem; padding: 0px; font-family: Poppins, sans-serif; color: rgb(119, 119, 119); font-size: 14px; line-height: 2; font-weight: 400; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;">Ukuran: Supermini. <a href="http://www.wayang-store.com/jenis-ukuran-wayang-kulit/" style="box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(0, 0, 0); text-decoration: none; background-color: transparent; transition-duration: 500ms; outline: transparent solid 0px; font-weight: 500; font-size: 14px; font-family: Poppins, sans-serif;">Lihat jenis ukuran wayang</a>.</p><p style="box-sizing: border-box; margin: 0px 0px 1rem; padding: 0px; font-family: Poppins, sans-serif; color: rgb(119, 119, 119); font-size: 14px; line-height: 2; font-weight: 400; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;">Bahan kulit: Kulit kambing (kualitas halus). <a href="http://www.wayang-store.com/jenis-bahan-wayang-kulit/" style="box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(0, 0, 0); text-decoration: none; background-color: transparent; transition-duration: 500ms; outline: transparent solid 0px; font-weight: 500; font-size: 14px; font-family: Poppins, sans-serif;">Lihat jenis bahan kulit</a>.</p><p style="box-sizing: border-box; margin: 0px 0px 1rem; padding: 0px; font-family: Poppins, sans-serif; color: rgb(119, 119, 119); font-size: 14px; line-height: 2; font-weight: 400; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;">Bahan tangkai: Tanduk kerbau putih. <a href="http://www.wayang-store.com/jenis-bahan-tangkai-wayang-kulit/" style="box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(0, 0, 0); text-decoration: none; background-color: transparent; transition-duration: 500ms; outline: transparent solid 0px; font-weight: 500; font-size: 14px; font-family: Poppins, sans-serif;">Lihat jenis bahan tangkai</a>.</p><p style="box-sizing: border-box; margin: 0px 0px 1rem; padding: 0px; font-family: Poppins, sans-serif; color: rgb(119, 119, 119); font-size: 14px; line-height: 2; font-weight: 400; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;">Teknik pembuatan: Tatah sungging tradisional. 100% handmade.</p><p style="box-sizing: border-box; margin: 0px 0px 1rem; padding: 0px; font-family: Poppins, sans-serif; color: rgb(119, 119, 119); font-size: 14px; line-height: 2; font-weight: 400; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;">Motif warna: Batik.</p><p style="box-sizing: border-box; margin: 0px 0px 1rem; padding: 0px; font-family: Poppins, sans-serif; color: rgb(119, 119, 119); font-size: 14px; line-height: 2; font-weight: 400; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;">Tatakan: Include. Terbuat dari kayu. Dimensi 7 x 5.5 x 3 cm.</p><p style="box-sizing: border-box; margin: 0px 0px 1rem; padding: 0px; font-family: Poppins, sans-serif; color: rgb(119, 119, 119); font-size: 14px; line-height: 2; font-weight: 400; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;">Cerita wayang: Include.</p>', 1, NULL, '1', '1', '2019-11-21 02:38:26', NULL, NULL),
	(2, 'WYG001', 0, 'WAYANG', 100000.00, 20000.00, '1', 'YA', '082140644679', NULL, '<p style="box-sizing: border-box; margin: 0px 0px 1rem; padding: 0px; font-family: Poppins, sans-serif; color: rgb(119, 119, 119); font-size: 14px; line-height: 2; font-weight: 400; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;">Ukuran: Supermini. <a href="http://www.wayang-store.com/jenis-ukuran-wayang-kulit/" style="box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(0, 0, 0); text-decoration: none; background-color: transparent; transition-duration: 500ms; outline: transparent solid 0px; font-weight: 500; font-size: 14px; font-family: Poppins, sans-serif;">Lihat jenis ukuran wayang</a>.</p><p style="box-sizing: border-box; margin: 0px 0px 1rem; padding: 0px; font-family: Poppins, sans-serif; color: rgb(119, 119, 119); font-size: 14px; line-height: 2; font-weight: 400; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;">Bahan kulit: Kulit kambing (kualitas halus). <a href="http://www.wayang-store.com/jenis-bahan-wayang-kulit/" style="box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(0, 0, 0); text-decoration: none; background-color: transparent; transition-duration: 500ms; outline: transparent solid 0px; font-weight: 500; font-size: 14px; font-family: Poppins, sans-serif;">Lihat jenis bahan kulit</a>.</p><p style="box-sizing: border-box; margin: 0px 0px 1rem; padding: 0px; font-family: Poppins, sans-serif; color: rgb(119, 119, 119); font-size: 14px; line-height: 2; font-weight: 400; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;">Bahan tangkai: Tanduk kerbau putih. <a href="http://www.wayang-store.com/jenis-bahan-tangkai-wayang-kulit/" style="box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(0, 0, 0); text-decoration: none; background-color: transparent; transition-duration: 500ms; outline: transparent solid 0px; font-weight: 500; font-size: 14px; font-family: Poppins, sans-serif;">Lihat jenis bahan tangkai</a>.</p><p style="box-sizing: border-box; margin: 0px 0px 1rem; padding: 0px; font-family: Poppins, sans-serif; color: rgb(119, 119, 119); font-size: 14px; line-height: 2; font-weight: 400; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;">Teknik pembuatan: Tatah sungging tradisional. 100% handmade.</p><p style="box-sizing: border-box; margin: 0px 0px 1rem; padding: 0px; font-family: Poppins, sans-serif; color: rgb(119, 119, 119); font-size: 14px; line-height: 2; font-weight: 400; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;">Motif warna: Batik.</p><p style="box-sizing: border-box; margin: 0px 0px 1rem; padding: 0px; font-family: Poppins, sans-serif; color: rgb(119, 119, 119); font-size: 14px; line-height: 2; font-weight: 400; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;">Tatakan: Include. Terbuat dari kayu. Dimensi 7 x 5.5 x 3 cm.</p><p style="box-sizing: border-box; margin: 0px 0px 1rem; padding: 0px; font-family: Poppins, sans-serif; color: rgb(119, 119, 119); font-size: 14px; line-height: 2; font-weight: 400; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;">Cerita wayang: Include.</p>', 1, NULL, '1', '100', '2019-11-21 04:01:27', NULL, NULL),
	(3, 'MCC001', 0, 'MANDATORY COFFE CAPUCINO', 12000.00, 10000.00, 'READY', 'YA', '082140644679', NULL, '<div style="box-sizing: border-box; margin: 0px auto; padding: 0px 15px; width: 1140px; max-width: 1140px; color: rgb(33, 37, 41); font-family: Poppins, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(236, 236, 236); text-decoration-style: initial; text-decoration-color: initial;"><div style="box-sizing: border-box; margin: 0px -15px; padding: 0px; display: flex; flex-wrap: wrap; justify-content: center; -webkit-box-pack: center;"><div style="box-sizing: border-box; margin: 0px; padding: 0px 15px; position: relative; width: 1140px; min-height: 1px; flex: 0 0 100%; max-width: 100%;"><div style="box-sizing: border-box; margin: 0px; padding: 0px;"><div style="box-sizing: border-box; margin: 0px -15px; padding: 0px; display: flex; flex-wrap: wrap;"><div style="box-sizing: border-box; margin-top: 0px; margin-right: 0px; margin-bottom: 50px !important; margin-left: 0px; padding: 0px 15px; position: relative; width: 1140px; min-height: 1px; flex: 0 0 100%; max-width: 100%;"><div style="box-sizing: border-box; margin: 0px -15px; padding: 0px; display: flex; flex-wrap: wrap;"><div style="box-sizing: border-box; margin-top: 0px; margin-right: 0px; margin-bottom: 50px !important; margin-left: 0px; padding: 0px 15px; position: relative; width: 1140px; min-height: 1px; flex: 0 0 100%; max-width: 100%;"><div style="box-sizing: border-box; margin: 0px; padding: 0px;"><div style="box-sizing: border-box; margin: 0px auto; padding: 0px 15px; width: 1110px; transition: opacity 0.15s linear 0s; background-color: white !important; display: block; min-height: 450px;"><p style="box-sizing: border-box; margin: 0px 0px 1rem; padding: 0px; font-family: Poppins, sans-serif; color: rgb(119, 119, 119); font-size: 14px; line-height: 2; font-weight: 400; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;">Ukuran: Supermini.&nbsp;<a href="http://www.wayang-store.com/jenis-ukuran-wayang-kulit/" style="box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(0, 0, 0); text-decoration: none; background-color: transparent; transition-duration: 500ms; outline: transparent solid 0px; font-weight: 500; font-size: 14px; font-family: Poppins, sans-serif;">Lihat jenis ukuran wayang</a>.</p><p style="box-sizing: border-box; margin: 0px 0px 1rem; padding: 0px; font-family: Poppins, sans-serif; color: rgb(119, 119, 119); font-size: 14px; line-height: 2; font-weight: 400; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;">Bahan kulit: Kulit kambing (kualitas halus).&nbsp;<a href="http://www.wayang-store.com/jenis-bahan-wayang-kulit/" style="box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(0, 0, 0); text-decoration: none; background-color: transparent; transition-duration: 500ms; outline: transparent solid 0px; font-weight: 500; font-size: 14px; font-family: Poppins, sans-serif;">Lihat jenis bahan kulit</a>.</p><p style="box-sizing: border-box; margin: 0px 0px 1rem; padding: 0px; font-family: Poppins, sans-serif; color: rgb(119, 119, 119); font-size: 14px; line-height: 2; font-weight: 400; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;">Bahan tangkai: Tanduk kerbau putih.&nbsp;<a href="http://www.wayang-store.com/jenis-bahan-tangkai-wayang-kulit/" style="box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(0, 0, 0); text-decoration: none; background-color: transparent; transition-duration: 500ms; outline: transparent solid 0px; font-weight: 500; font-size: 14px; font-family: Poppins, sans-serif;">Lihat jenis bahan tangkai</a>.</p><p style="box-sizing: border-box; margin: 0px 0px 1rem; padding: 0px; font-family: Poppins, sans-serif; color: rgb(119, 119, 119); font-size: 14px; line-height: 2; font-weight: 400; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;">Teknik pembuatan: Tatah sungging tradisional. 100% handmade.</p><p style="box-sizing: border-box; margin: 0px 0px 1rem; padding: 0px; font-family: Poppins, sans-serif; color: rgb(119, 119, 119); font-size: 14px; line-height: 2; font-weight: 400; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;">Motif warna: Batik.</p><p style="box-sizing: border-box; margin: 0px 0px 1rem; padding: 0px; font-family: Poppins, sans-serif; color: rgb(119, 119, 119); font-size: 14px; line-height: 2; font-weight: 400; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;">Tatakan: Include. Terbuat dari kayu. Dimensi 7 x 5.5 x 3 cm.</p><p style="box-sizing: border-box; margin: 0px 0px 1rem; padding: 0px; font-family: Poppins, sans-serif; color: rgb(119, 119, 119); font-size: 14px; line-height: 2; font-weight: 400; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;">Cerita wayang: Include</p></div></div></div></div></div></div></div></div></div></div>', 100, NULL, '100', '100', '2019-11-21 04:11:16', NULL, NULL),
	(4, '12312', 0, 'aseeee', 10000.00, NULL, '1', 'YA', '082140644679', NULL, '<p>12312</p>', 1, NULL, '1', '1', '2019-11-22 12:47:03', NULL, NULL);
/*!40000 ALTER TABLE `d_shop` ENABLE KEYS */;

-- Dumping structure for table warawara.d_shop_image
CREATE TABLE IF NOT EXISTS `d_shop_image` (
  `dsi_id` int(11) NOT NULL AUTO_INCREMENT,
  `dsi_shop` int(11) DEFAULT NULL,
  `dsi_created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `dsi_updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `dsi_created_by` int(11) DEFAULT NULL,
  `dsi_updated_by` int(11) DEFAULT NULL,
  `dsi_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`dsi_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- Dumping data for table warawara.d_shop_image: ~9 rows (approximately)
/*!40000 ALTER TABLE `d_shop_image` DISABLE KEYS */;
REPLACE INTO `d_shop_image` (`dsi_id`, `dsi_shop`, `dsi_created_at`, `dsi_updated_at`, `dsi_created_by`, `dsi_updated_by`, `dsi_name`) VALUES
	(14, 1, '2019-11-21 02:38:25', '2019-11-21 02:38:25', 1, NULL, 'shop/image_k001_0.jpg'),
	(15, 1, '2019-11-21 02:38:26', '2019-11-21 02:38:26', 1, NULL, 'shop/image_k001_1.jpg'),
	(16, 2, '2019-11-21 04:01:27', '2019-11-21 04:01:27', 1, NULL, 'shop/image_WYG001_0.jpg'),
	(17, 2, '2019-11-21 04:01:27', '2019-11-21 04:01:27', 1, NULL, 'shop/image_WYG001_1.jpg'),
	(18, 3, '2019-11-21 04:11:16', '2019-11-21 04:11:16', 1, NULL, 'shop/image_MCC001_0.jpg'),
	(19, 3, '2019-11-21 04:11:16', '2019-11-21 04:11:16', 1, NULL, 'shop/image_MCC001_1.jpg'),
	(20, 3, '2019-11-21 04:11:16', '2019-11-21 04:11:16', 1, NULL, 'shop/image_MCC001_2.jpg'),
	(21, 3, '2019-11-21 04:11:16', '2019-11-21 04:11:16', 1, NULL, 'shop/image_MCC001_3.jpg'),
	(22, 4, '2019-11-22 12:47:03', '2019-11-22 00:47:03', 1, NULL, 'shop/image_12312_0.jpg');
/*!40000 ALTER TABLE `d_shop_image` ENABLE KEYS */;

-- Dumping structure for table warawara.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table warawara.migrations: ~0 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table warawara.m_category_event
CREATE TABLE IF NOT EXISTS `m_category_event` (
  `ce_id` int(11) NOT NULL AUTO_INCREMENT,
  `ce_name` varchar(50) DEFAULT NULL,
  `ce_icon` varchar(50) DEFAULT NULL,
  `ce_href` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ce_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table warawara.m_category_event: ~6 rows (approximately)
/*!40000 ALTER TABLE `m_category_event` DISABLE KEYS */;
REPLACE INTO `m_category_event` (`ce_id`, `ce_name`, `ce_icon`, `ce_href`) VALUES
	(1, 'Seni Drama', 'fa fa-play', 'drama'),
	(3, 'Seni Tari', 'fa fa-play', 'tari'),
	(4, 'Seni Rupa', 'fas fa-pencil-alt', 'seni_rupa'),
	(5, 'Satra/Literasi', 'fa fa-play', 'sastra_literasi'),
	(6, 'Festival', 'fa fa-play', 'festival'),
	(7, 'Seni Tradisi', 'fa fa-play', 'seni_tradisi');
/*!40000 ALTER TABLE `m_category_event` ENABLE KEYS */;

-- Dumping structure for table warawara.m_category_news
CREATE TABLE IF NOT EXISTS `m_category_news` (
  `cn_id` int(11) NOT NULL AUTO_INCREMENT,
  `cn_name` varchar(50) NOT NULL DEFAULT '0',
  `cn_icon` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cn_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table warawara.m_category_news: ~2 rows (approximately)
/*!40000 ALTER TABLE `m_category_news` DISABLE KEYS */;
REPLACE INTO `m_category_news` (`cn_id`, `cn_name`, `cn_icon`) VALUES
	(1, 'diskusi', 'fas fa-trash'),
	(2, 'sejarah', 'fa fa-user');
/*!40000 ALTER TABLE `m_category_news` ENABLE KEYS */;

-- Dumping structure for table warawara.m_category_puisi
CREATE TABLE IF NOT EXISTS `m_category_puisi` (
  `cp_id` int(11) NOT NULL AUTO_INCREMENT,
  `cp_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table warawara.m_category_puisi: ~1 rows (approximately)
/*!40000 ALTER TABLE `m_category_puisi` DISABLE KEYS */;
REPLACE INTO `m_category_puisi` (`cp_id`, `cp_name`) VALUES
	(1, 'alam');
/*!40000 ALTER TABLE `m_category_puisi` ENABLE KEYS */;

-- Dumping structure for table warawara.m_category_shop
CREATE TABLE IF NOT EXISTS `m_category_shop` (
  `cs_id` int(11) NOT NULL AUTO_INCREMENT,
  `cs_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cs_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table warawara.m_category_shop: ~1 rows (approximately)
/*!40000 ALTER TABLE `m_category_shop` DISABLE KEYS */;
REPLACE INTO `m_category_shop` (`cs_id`, `cs_name`) VALUES
	(1, 'Wayng');
/*!40000 ALTER TABLE `m_category_shop` ENABLE KEYS */;

-- Dumping structure for table warawara.m_mem
CREATE TABLE IF NOT EXISTS `m_mem` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_role` varchar(50) NOT NULL DEFAULT 'user',
  `m_name` varchar(255) DEFAULT NULL,
  `m_username` varchar(255) DEFAULT NULL,
  `m_password` varchar(255) DEFAULT NULL,
  `m_email` varchar(255) DEFAULT NULL,
  `m_phone` varchar(255) DEFAULT NULL,
  `m_desc` varchar(255) DEFAULT NULL,
  `m_image` varchar(100) DEFAULT NULL,
  `m_address` varchar(100) DEFAULT NULL,
  `m_city` varchar(100) DEFAULT NULL,
  `m_token` varchar(50) DEFAULT NULL,
  `m_web` varchar(50) DEFAULT NULL,
  `m_lastlogin` timestamp NULL DEFAULT NULL,
  `m_lastlogout` timestamp NULL DEFAULT NULL,
  `m_created_at` timestamp NULL DEFAULT NULL,
  `m_updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Dumping data for table warawara.m_mem: ~7 rows (approximately)
/*!40000 ALTER TABLE `m_mem` DISABLE KEYS */;
REPLACE INTO `m_mem` (`m_id`, `m_role`, `m_name`, `m_username`, `m_password`, `m_email`, `m_phone`, `m_desc`, `m_image`, `m_address`, `m_city`, `m_token`, `m_web`, `m_lastlogin`, `m_lastlogout`, `m_created_at`, `m_updated_at`) VALUES
	(1, 'admin', 'deny pras', 'admin', '4ef7877f01e6ab681f4756ca6f05b90da0e2f1f8', 'azriel@gmail.com', '082140644679', 'Duis tincidunt turpis sodales, tincidunt nisi et, auctor nisi. Curabitur vulputate sapien eu metus ultricies fermentum nec vel augue. Maecenas eget lacinia estssssssss', 'user/image_1.jpg', 'Jl Wonorejo indah timur 3a no 66b', 'MALANG KOTA', NULL, 'www.denypras.co.vu', '2019-09-07 19:58:33', '2019-09-07 19:58:34', '2019-12-16 02:34:05', '2019-09-06 02:06:08'),
	(8, 'user', 'Wara Wara', 'wara_wara', '4ef7877f01e6ab681f4756ca6f05b90da0e2f1f8', 'wara_wara@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(9, 'user', 'Awali Taufiqi', 'Awalitaufiqi', 'ec8dac7c9dbed008fdd425c58ea4ee24522bed70', 'awalitaufiqi1@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(10, 'user', 'Laurensia', 'Lwreen', 'c29b84bb5b63d99bacff93b2a0c78cb997186eb4', 'l.ndewi.lnd@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(11, '0', 'Azriel pusaka', 'azriel41', '$2y$10$A.j31YR8PAdJ2RXq9AJUzORrRW.LMqZphPH16Dp3.I0MGDIuslq06', 'denyprasetyo41@gmail.com', '082140644679', 'aku seorang kapiten', NULL, 'Jl Wonorejo indah timur 3a no 66b', 'surabaya', NULL, NULL, NULL, NULL, '2019-12-16 12:16:06', NULL),
	(12, 'admin', 'Azriel pusaka', 'komik123', 'ffaf54b8ff78ce05c6008c35e3560a68602bd732', 'denyprasetyo41@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(13, 'user', 'asep', 'asep', '4ef7877f01e6ab681f4756ca6f05b90da0e2f1f8', 'asep@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `m_mem` ENABLE KEYS */;

-- Dumping structure for table warawara.m_setting_carousel
CREATE TABLE IF NOT EXISTS `m_setting_carousel` (
  `msc_id` int(11) NOT NULL AUTO_INCREMENT,
  `msc_title` varchar(255) DEFAULT NULL,
  `msc_position` int(11) NOT NULL DEFAULT '0',
  `msc_image` varchar(50) DEFAULT NULL,
  `msc_created_at` timestamp NULL DEFAULT NULL,
  `msc_updated_at` timestamp NULL DEFAULT NULL,
  `msc_created_by` int(11) DEFAULT NULL,
  `msc_updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`msc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table warawara.m_setting_carousel: ~0 rows (approximately)
/*!40000 ALTER TABLE `m_setting_carousel` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_setting_carousel` ENABLE KEYS */;

-- Dumping structure for table warawara.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table warawara.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'adasd', 'aksara.satmika@gmail.com', NULL, '$2y$10$2/Z3jxf7RUGuFoov.jEvnufNN83.aWE0NZ/DF7y/alwblpAoBrx/y', NULL, '2019-08-15 12:21:33', '2019-08-15 12:21:33'),
	(2, 'az', '', NULL, '$2y$10$Cvj9oV.IvUcaAqEi3S7qguyyiKCb4/cheMOU6cCZAiVOMLjMk5QlC', NULL, '2019-08-15 13:17:43', '2019-08-15 13:17:43');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
