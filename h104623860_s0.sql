-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: h104623860.mysql
-- Время создания: Ноя 08 2021 г., 12:10
-- Версия сервера: 5.6.41-84.1
-- Версия PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `h104623860_s0`
--

-- --------------------------------------------------------

--
-- Структура таблицы `maculatura`
--
-- Создание: Апр 16 2021 г., 21:44
--

DROP TABLE IF EXISTS `maculatura`;
CREATE TABLE `maculatura` (
  `id_maculatura` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` longblob,
  `price_more_500` float NOT NULL,
  `price_200` float NOT NULL,
  `price_50` float NOT NULL,
  `price_in_base` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `maculatura`
--

INSERT INTO `maculatura` (`id_maculatura`, `name`, `picture`, `price_more_500`, `price_200`, `price_50`, `price_in_base`) VALUES
(1, 'Картон', NULL, 6, 5, 4, 8),
(2, 'Архив (белая бумага)', NULL, 5, 4, 3, 6),
(3, 'Газета', NULL, 5, 4, 3, 6),
(4, 'Микс (книги, тетради, газеты, журналы)', NULL, 3, 3, 3, 3),
(5, 'Глянец', NULL, 2, 2, 1, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `offer`
--
-- Создание: Апр 12 2021 г., 03:03
--

DROP TABLE IF EXISTS `offer`;
CREATE TABLE `offer` (
  `id_offer` int(11) NOT NULL,
  `id_plastic` int(11) DEFAULT NULL,
  `id_maculatura` int(11) DEFAULT NULL,
  `id_poddona` int(11) DEFAULT NULL,
  `id_buyer` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `plastic`
--
-- Создание: Апр 16 2021 г., 22:05
--

DROP TABLE IF EXISTS `plastic`;
CREATE TABLE `plastic` (
  `id_plastic` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` longblob,
  `price_in_base` float NOT NULL,
  `price_not_in_base` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `plastic`
--

INSERT INTO `plastic` (`id_plastic`, `name`, `picture`, `price_in_base`, `price_not_in_base`) VALUES
(1, 'ПВД чистый', NULL, 12, 14),
(2, 'Стрейч чистый', NULL, 12, 14),
(3, 'Пленка микс', NULL, 9, 10),
(4, 'ПЭТ бутылка', NULL, 5, 10),
(5, 'ПЭТ преформа', NULL, 15, 20),
(6, 'ПНД дорожные бордюры', NULL, 8, 10),
(7, 'ПНД канистры', NULL, 5, 10),
(8, 'ПНД труба', NULL, 10, 15),
(9, 'Полипропилен (ведра белые)', NULL, 5, 10),
(10, 'Полипропиленовая пленка в бобинах', NULL, 5, 10),
(11, 'Поликарбонат (бутыли 19л)', NULL, 5, 10),
(12, 'Поликарбонат сотовый', NULL, 15, 20),
(13, 'Полипропиленовые бампера автомобильные', NULL, 3, 5),
(14, 'ПВХ пленка', NULL, 2, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `poddon`
--
-- Создание: Апр 16 2021 г., 20:45
--

DROP TABLE IF EXISTS `poddon`;
CREATE TABLE `poddon` (
  `id_poddona` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` longblob,
  `price` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `poddon`
--

INSERT INTO `poddon` (`id_poddona`, `name`, `picture`, `price`) VALUES
(1, 'Поддон EPAL', NULL, '140'),
(2, 'Поддон 1000х1200 и 800х1200', NULL, '100'),
(3, 'Поддон облегченный', NULL, '50-70'),
(4, 'Поддон - ломаный', NULL, '50-70');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `maculatura`
--
ALTER TABLE `maculatura`
  ADD PRIMARY KEY (`id_maculatura`);

--
-- Индексы таблицы `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`id_offer`),
  ADD KEY `id_maculatura` (`id_maculatura`),
  ADD KEY `id_plastic` (`id_plastic`),
  ADD KEY `id_poddona` (`id_poddona`);

--
-- Индексы таблицы `plastic`
--
ALTER TABLE `plastic`
  ADD PRIMARY KEY (`id_plastic`);

--
-- Индексы таблицы `poddon`
--
ALTER TABLE `poddon`
  ADD PRIMARY KEY (`id_poddona`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `maculatura`
--
ALTER TABLE `maculatura`
  MODIFY `id_maculatura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `offer`
--
ALTER TABLE `offer`
  MODIFY `id_offer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `plastic`
--
ALTER TABLE `plastic`
  MODIFY `id_plastic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `poddon`
--
ALTER TABLE `poddon`
  MODIFY `id_poddona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `offer`
--
ALTER TABLE `offer`
  ADD CONSTRAINT `offer_ibfk_1` FOREIGN KEY (`id_maculatura`) REFERENCES `maculatura` (`id_maculatura`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `offer_ibfk_2` FOREIGN KEY (`id_plastic`) REFERENCES `plastic` (`id_plastic`),
  ADD CONSTRAINT `offer_ibfk_3` FOREIGN KEY (`id_poddona`) REFERENCES `poddon` (`id_poddona`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
