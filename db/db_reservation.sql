-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 12 Nis 2020, 20:40:24
-- Sunucu sürümü: 10.1.37-MariaDB
-- PHP Sürümü: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `db_reservation`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `address` text COLLATE utf8_turkish_ci NOT NULL,
  `phone` varchar(17) COLLATE utf8_turkish_ci NOT NULL,
  `fax` varchar(17) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `web` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `mission` longtext COLLATE utf8_turkish_ci NOT NULL,
  `vision` longtext COLLATE utf8_turkish_ci NOT NULL,
  `about_us` longtext COLLATE utf8_turkish_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `bank_account` text COLLATE utf8_turkish_ci NOT NULL,
  `tax_id` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `mersis_id` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `google_analytics` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `map_att` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `map_lat` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `meta_keyword` varchar(160) COLLATE utf8_turkish_ci NOT NULL,
  `meta_description` varchar(260) COLLATE utf8_turkish_ci NOT NULL,
  `isActive` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `detail` text COLLATE utf8_turkish_ci NOT NULL,
  `size` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `room_code` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `default_price` float(10,2) NOT NULL,
  `room_type_id` int(11) NOT NULL,
  `bed_type` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `bed_count` int(11) NOT NULL,
  `room_capacity` int(11) NOT NULL,
  `isActive` tinyint(4) NOT NULL,
  `rank` int(11) NOT NULL,
  `room_properties` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `room_extra_services` varchar(500) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `room`
--

INSERT INTO `room` (`id`, `title`, `detail`, `size`, `room_code`, `default_price`, `room_type_id`, `bed_type`, `bed_count`, `room_capacity`, `isActive`, `rank`, `room_properties`, `room_extra_services`) VALUES
(1, 'First Room', '<p>jabkjBSCLNKDSŞKAŞ,OFJKCIOŞDHFSKLajhbjhkbjKksdnkjnfkjdbsnkjbk</p>', '15m2', '101', 20.00, 9, '', 0, 1, 1, 0, '2;3', '3'),
(2, 'Double Room', '<p>bla bla bla</p>', '15', '102', 25.00, 2, '', 0, 2, 1, 1, '1;2;3', '3');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `room_category`
--

CREATE TABLE `room_category` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `rank` int(11) NOT NULL,
  `isActive` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `room_category`
--

INSERT INTO `room_category` (`id`, `title`, `rank`, `isActive`) VALUES
(1, 'Shared Room', 2, 1),
(2, 'Double Room', 1, 1),
(5, 'Suit Room', 3, 1),
(9, 'Single Room', 0, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `room_extra_services`
--

CREATE TABLE `room_extra_services` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `rank` int(11) NOT NULL,
  `isActive` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `room_extra_services`
--

INSERT INTO `room_extra_services` (`id`, `title`, `icon`, `rank`, `isActive`) VALUES
(2, 'Alevli Meyve Tabağı', '', 0, 1),
(3, 'Odaya Kahvaltı', '', 1, 1),
(4, 'Öğle Yemeği', '', 2, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `room_image`
--

CREATE TABLE `room_image` (
  `id` int(11) NOT NULL,
  `img_id` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `room_id` int(11) NOT NULL,
  `isActive` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `room_properties`
--

CREATE TABLE `room_properties` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `rank` int(11) NOT NULL,
  `isActive` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `room_properties`
--

INSERT INTO `room_properties` (`id`, `title`, `icon`, `rank`, `isActive`) VALUES
(1, 'Mini Buzdolabı', '', 0, 1),
(2, 'Klima', '', 1, 1),
(3, 'Saç Kurutma Makinası', '', 2, 1),
(4, 'Jakuzi', '', 3, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `room_type`
--

CREATE TABLE `room_type` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `isActive` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `room_category`
--
ALTER TABLE `room_category`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `room_extra_services`
--
ALTER TABLE `room_extra_services`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `room_image`
--
ALTER TABLE `room_image`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `room_properties`
--
ALTER TABLE `room_properties`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `room_type`
--
ALTER TABLE `room_type`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `room_category`
--
ALTER TABLE `room_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `room_extra_services`
--
ALTER TABLE `room_extra_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `room_image`
--
ALTER TABLE `room_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `room_properties`
--
ALTER TABLE `room_properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `room_type`
--
ALTER TABLE `room_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
