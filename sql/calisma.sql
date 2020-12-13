-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 13 Ara 2020, 17:38:05
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
  `ktelefon` bigint(111) DEFAULT NULL,
  `adres` varchar(250) DEFAULT NULL,
  `kurum_id` int(11) DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `type` varchar(250) DEFAULT NULL,
  `data` blob,
  PRIMARY KEY (`id`),
  KEY `kurum_id` (`kurum_id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`id`, `adi`, `soyadi`, `ktelefon`, `adres`, `kurum_id`, `name`, `type`, `data`) VALUES
(35, 'yasin', 'bardak', 5381155555, 'laleli mah. necmi sk. no 26 adana', 6, '', '', ''),
(36, 'deniz', 'akin', 538111555, 'EMEK MAh falan fina', 8, '', '', ''),
(40, 'yilmaz', 'aytekin', 538248, 'ismet pasa sok. no 23 kutahya', 10, '', '', ''),
(41, 'yasemin', 'simsek', 111222555, '', 6, '', '', ''),
(42, 'mehmet', 'yurt', 5382481410, 'uuuuu', 6, NULL, NULL, NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `kurum`
--

INSERT INTO `kurum` (`kid`, `k_adi`, `adresi`, `telefon`, `vergino`, `aciklama`, `ilgili`, `referansmusteri`, `sehir_id`, `musteritipi`, `resmiadi`, `firmakodu`, `ulke_id`, `postakodu`, `eposta`) VALUES
(6, 'oguz holding ', 'teknokent antalya', 53822222, 1111111, 'mudur kendisi', '', '', 1, '', '', 0, 1, 1, 'yok'),
(8, 'kuvarssof', 'teknokent kutahya', 538111, 11111, ' filan alan filan falan filan falan filan falan filan falan filan falan filan falan filan', 'oguz', 'oguz', 1, 'calisan', 'kuvarssoft', 555, 1, 1, 'kuvarssoft.com.com'),
(10, 'yuotube', 'google', 222222, 11111, 'sirket', 'hoca', 'yok', 2, 'internet', 'google inc', 123456, 1, 6, 'google@com.com'),
(11, 'tonvelet', 'teknokent kutahya', 5252581478, 123456789, '', '', 'yok', 1, 'yok', 'tenvelet kutahya', 123456, 1, 43, 'tonton@com.com');

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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `sehir`
--

INSERT INTO `sehir` (`s_id`, `sehir`) VALUES
(1, 'kutahya'),
(2, 'bolu'),
(12, 'eskisehir'),
(13, 'adana'),
(14, 'izmir'),
(15, 'istanbul'),
(16, 'bursa'),
(17, 'konya'),
(18, 'afyon');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ulkeler`
--

DROP TABLE IF EXISTS `ulkeler`;
CREATE TABLE IF NOT EXISTS `ulkeler` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `ulke` varchar(45) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

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
