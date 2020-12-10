-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 10 Ara 2020, 11:35:12
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
  `telefon` int(111) DEFAULT NULL,
  `adres` varchar(250) DEFAULT NULL,
  `kurum_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kurum_id` (`kurum_id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`id`, `adi`, `soyadi`, `telefon`, `adres`, `kurum_id`) VALUES
(33, 'ali', 'bakan', 538111111, 'EMEK MAH. AYVAZHAN SK. NO:269', 7),
(34, 'deniz', 'akin', 538111111, 'EMEK MAhallesi', 7);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kurum`
--

DROP TABLE IF EXISTS `kurum`;
CREATE TABLE IF NOT EXISTS `kurum` (
  `kid` int(11) NOT NULL AUTO_INCREMENT,
  `k_adi` varchar(250) NOT NULL,
  `adresi` varchar(250) DEFAULT NULL,
  `telefon` int(111) DEFAULT NULL,
  `vergino` int(111) DEFAULT NULL,
  `aciklama` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`kid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `kurum`
--

INSERT INTO `kurum` (`kid`, `k_adi`, `adresi`, `telefon`, `vergino`, `aciklama`) VALUES
(6, 'oguz holding', 'teknokent antalya', 538111111, 1111111, 'mudur kendisi'),
(7, 'yurt ajans', 'teknokent kutahya', 538111111, 1111111, 'yer antalya');

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

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `kullanici`
--
ALTER TABLE `kullanici`
  ADD CONSTRAINT `kullanici_ibfk_1` FOREIGN KEY (`kurum_id`) REFERENCES `kurum` (`kid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
