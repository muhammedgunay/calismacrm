-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 11 Ara 2020, 20:21:02
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
  `adi` varchar(25) NOT NULL,
  `soyadi` varchar(25) NOT NULL,
  `telefon` bigint(111) DEFAULT NULL,
  `adres` varchar(250) DEFAULT NULL,
  `kurum_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kurum_id` (`kurum_id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`id`, `adi`, `soyadi`, `telefon`, `adres`, `kurum_id`) VALUES
(35, 'yasin', 'bardak', 5381472582, 'laleli mah. necmi sk. no 26', 9);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kurum`
--

DROP TABLE IF EXISTS `kurum`;
CREATE TABLE IF NOT EXISTS `kurum` (
  `kid` int(11) NOT NULL AUTO_INCREMENT,
  `k_adi` varchar(250) NOT NULL,
  `adresi` varchar(250) DEFAULT NULL,
  `telefon` bigint(111) DEFAULT NULL,
  `vergino` bigint(20) DEFAULT NULL,
  `aciklama` varchar(250) DEFAULT NULL,
  `ilgili` varchar(250) DEFAULT NULL,
  `referansmusteri` varchar(45) DEFAULT NULL,
  `sehir_id` int(11) DEFAULT NULL,
  `musteritipi` varchar(250) DEFAULT NULL,
  `resmiadi` varchar(250) DEFAULT NULL,
  `firmakodu` int(11) NOT NULL,
  `ulke_id` int(11) DEFAULT NULL,
  `postakodu` int(11) NOT NULL,
  `eposta` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`kid`),
  KEY `sehir_id` (`sehir_id`),
  KEY `ulke_id` (`ulke_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `kurum`
--

INSERT INTO `kurum` (`kid`, `k_adi`, `adresi`, `telefon`, `vergino`, `aciklama`, `ilgili`, `referansmusteri`, `sehir_id`, `musteritipi`, `resmiadi`, `firmakodu`, `ulke_id`, `postakodu`, `eposta`) VALUES
(6, 'oguz holding lt', 'teknokent antalya', 538111111, 1111111, 'mudur kendisi', '', '', 1, '', '', 0, 1, 1, ''),
(8, 'kuvarssof', 'teknokent kutahya', 538111, 11111, 'falan filan falan filan falan filan falan filan falan filan falan filan falan filan falan filan alan filan falan filan falan filan falan filan falan filan falan filan falan filan', '', '', 1, '', '', 0, 1, 1, ''),
(9, 'gurallar porselen', 'ogranize sanayi', 5481472222, 258147963, '', NULL, NULL, 1, NULL, NULL, 0, 1, 0, NULL),
(10, 'yuotube', 'google', 222222, 11111, 'sirket', 'hoca', 'yok', 2, 'internet', 'google inc', 123456, 1, 6, 'google@com.com');

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
  `sehir` varchar(11) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `sehir`
--

INSERT INTO `sehir` (`s_id`, `sehir`) VALUES
(1, 'kutahya'),
(2, 'bolu'),
(4, 'antalya'),
(10, '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ulkeler`
--

DROP TABLE IF EXISTS `ulkeler`;
CREATE TABLE IF NOT EXISTS `ulkeler` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `ulke` varchar(45) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `ulkeler`
--

INSERT INTO `ulkeler` (`u_id`, `ulke`) VALUES
(1, 'turkiye'),
(2, 'rusya'),
(3, 'fransa'),
(4, 'italya');

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
