-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 27 2022 г., 15:45
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `proba`
--

-- --------------------------------------------------------

--
-- Структура таблицы `modif`
--

CREATE TABLE `modif` (
  `modifid` int(11) NOT NULL,
  `modiflink` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `modif`
--

INSERT INTO `modif` (`modifid`, `modiflink`) VALUES
(17, '///d41d8cd9'),
(18, 'https://www.ukr.net/508c75c8');

-- --------------------------------------------------------

--
-- Структура таблицы `original`
--

CREATE TABLE `original` (
  `id` int(11) NOT NULL,
  `originallink` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `original`
--

INSERT INTO `original` (`id`, `originallink`) VALUES
(17, 'https://www.ukr.net/news/kyiv.html'),
(18, 'https://djinni.co/jobs/');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `modif`
--
ALTER TABLE `modif`
  ADD UNIQUE KEY `ud` (`modifid`);

--
-- Индексы таблицы `original`
--
ALTER TABLE `original`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `modif`
--
ALTER TABLE `modif`
  MODIFY `modifid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `original`
--
ALTER TABLE `original`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
