-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 21 Ara 2020, 15:08:44
-- Sunucu sürümü: 5.7.31
-- PHP Sürümü: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `calisma`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

DROP TABLE IF EXISTS `kullanici`;
CREATE TABLE IF NOT EXISTS `kullanici` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `soyadi` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `ktelefon` bigint(111) DEFAULT NULL,
  `adres` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `kurum_id` int(11) DEFAULT NULL,
  `name` varchar(500) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kurum_id` (`kurum_id`)
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`id`, `adi`, `soyadi`, `ktelefon`, `adres`, `kurum_id`, `name`) VALUES
(40, 'yilmaz', 'aytekin', 538248, 'ismet pasa sok. no 23 kutahya', 6, '10436198_528712770589026_1243303042782661233_n.jpg'),
(49, 'mehmet', 'yurt', 5382481410, 'rtry', 6, '87ff80a8a00a91f6e365f4dcc79d484e_y.jpg'),
(53, 'Hatice', 'akan', 5382481410, 'yok', 6, '420bbcd70f9da4c5739a98cb78878414.jpg'),
(55, 'yilmaz', 'akin', 538111111, 'EMEK MAH. AYVAZHAN ', 10, 'icon.png'),
(58, 'ismail', 'senturk', 123456977, 'hasanbey sokak no 25', 6, 'naruto.jpeg'),
(62, 'yüsüf', 'ghjkl', 5382481410, 'yok', 6, 'deneme.png'),
(65, 'alihan', 'kozalak', 53225555, 'ccccc', 6, 'naruto.jpeg'),
(67, 'derya', 'akin', 2581114477, 'istanbul ankara sokak', 13, 'animegirl.jpg'),
(85, 'Müjde', 'AR', 5114447777, 'Falanca sokak numara 22', 11, 'hhhh.jpg'),
(87, 'Burak ', 'Orak', 2222500832, 'google ', 10, '7ef15b83f88d7ff4296e23bbe5eca062.jpg'),
(88, 'Hasan', 'Gün', 2223669877, 'falanca mahallesi filanca sokak no:58', 6, '44464a1dd6acc6a1b706391acf3483a3.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kurum`
--

DROP TABLE IF EXISTS `kurum`;
CREATE TABLE IF NOT EXISTS `kurum` (
  `kid` int(11) NOT NULL AUTO_INCREMENT,
  `k_adi` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `adresi` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `telefon` bigint(111) DEFAULT NULL,
  `vergino` bigint(20) DEFAULT NULL,
  `aciklama` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `ilgili` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `referansmusteri` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `sehir_id` int(11) DEFAULT NULL,
  `musteritipi` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `resmiadi` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `firmakodu` int(11) NOT NULL,
  `ulke_id` int(11) DEFAULT NULL,
  `postakodu` int(11) NOT NULL,
  `eposta` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`kid`),
  KEY `sehir_id` (`sehir_id`),
  KEY `ulke_id` (`ulke_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `kurum`
--

INSERT INTO `kurum` (`kid`, `k_adi`, `adresi`, `telefon`, `vergino`, `aciklama`, `ilgili`, `referansmusteri`, `sehir_id`, `musteritipi`, `resmiadi`, `firmakodu`, `ulke_id`, `postakodu`, `eposta`) VALUES
(6, 'oguz holding ', 'teknokent antalya', 53822222, 1111111, 'isler yapilacak', 'hasan', 'oguz', 1, 'calisan', 'oguz', 455, 1, 1, 'yok'),
(10, 'yuotube', 'google', 222222, 11111, 'sirket', 'hoca', 'yok', 2, 'internet', 'google inc', 123456, 1, 6, 'google@com.com'),
(11, 'tonvelet', 'teknokent kutahya', 5252581478, 123456789, '', '', 'yok', 1, 'yok', 'tenvelet kutahya', 123456, 1, 43, 'tonton@com.com'),
(13, 'gurallar', 'adrs yok', 538111111, 1111111, '', 'mehmet atak', 'yok', 1, 'yok', 'Gurallar Porselen', 123456, 1, 1, 'tonton@com.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kullaniciadi` varchar(25) NOT NULL,
  `sifre` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `login`
--

INSERT INTO `login` (`id`, `kullaniciadi`, `sifre`) VALUES
(1, 'kuvars1', '123'),
(2, 'kuvars2', '123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sehir`
--

DROP TABLE IF EXISTS `sehir`;
CREATE TABLE IF NOT EXISTS `sehir` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `sehir` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `sehir`
--

INSERT INTO `sehir` (`s_id`, `sehir`) VALUES
(1, 'kutahya'),
(2, 'bolulu'),
(14, 'izmir'),
(15, 'istanbul'),
(17, 'konya'),
(24, 'eskisehir'),
(26, 'adana'),
(27, 'elaziggg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ulkeler`
--

DROP TABLE IF EXISTS `ulkeler`;
CREATE TABLE IF NOT EXISTS `ulkeler` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `ulke` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `ulkeler`
--

INSERT INTO `ulkeler` (`u_id`, `ulke`) VALUES
(1, 'turkiye'),
(2, 'rusya'),
(3, 'fransa'),
(7, 'italya'),
(8, 'almanya'),
(9, 'ispanya'),
(10, 'ukrayna');

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `kullanici`
--
ALTER TABLE `kullanici`
  ADD CONSTRAINT `kullanici_ibfk_1` FOREIGN KEY (`kurum_id`) REFERENCES `kurum` (`kid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `kurum`
--
ALTER TABLE `kurum`
  ADD CONSTRAINT `kurum_ibfk_1` FOREIGN KEY (`ulke_id`) REFERENCES `ulkeler` (`u_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `kurum_ibfk_2` FOREIGN KEY (`sehir_id`) REFERENCES `sehir` (`s_id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
