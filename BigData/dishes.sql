-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 15 2019 г., 22:28
-- Версия сервера: 10.3.18-MariaDB-50+deb10u1.cba
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `askob`
--

-- --------------------------------------------------------

--
-- Структура таблицы `dishes`
--

CREATE TABLE `dishes` (
  `id` int(11) NOT NULL,
  `User` varchar(50) NOT NULL,
  `Dish` varchar(100) NOT NULL,
  `Prots` int(11) DEFAULT 0,
  `Fats` int(11) DEFAULT 0,
  `Carbs` int(11) DEFAULT 0,
  `Weight` int(11) NOT NULL DEFAULT 100
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `dishes`
--

INSERT INTO `dishes` (`id`, `User`, `Dish`, `Prots`, `Fats`, `Carbs`, `Weight`) VALUES
(174, 'gerasickin19', 'Цыпленок ', 17, 8, 1, 100),
(199, 'AskobVeron', 'Овсянка', 3, 4, 14, 150),
(189, 'AskobVeron', 'Балык ', 20, 9, 0, 100),
(64, 'AskobVeron', 'Творог 18%', 15, 18, 3, 100),
(168, 'AskobVeron', 'Суп с курицей', 3, 0, 3, 400),
(66, 'AskobVeron', 'Гречка с мясом', 11, 19, 28, 100),
(123, 'AskobVeron', 'Банан', 2, 0, 20, 90),
(111, 'gerasickin19', 'Овсянка ', 16, 7, 25, 100),
(76, 'NE Jugyl', 'Мяса', 21, 16, 0, 350),
(77, 'NE Jugyl', 'Печиние', 8, 12, 75, 100),
(78, 'NE Jugyl', 'Гречка', 13, 5, 72, 100),
(79, 'NE Jugyl', 'Маслята', 3, 1, 2, 100),
(80, 'NE Jugyl', 'Шиповник', 2, 0, 14, 100),
(213, 'AskobVeron', 'Пюре', 2, 3, 15, 100),
(115, 'NE Jugyl', 'Сыр', 24, 30, 0, 200),
(126, 'AskobVeron', 'Печенье', 8, 12, 75, 40),
(193, 'AskobVeron', 'Виноград', 1, 1, 17, 100),
(203, 'AskobVeron', 'Плов из свининны', 7, 10, 23, 200),
(167, 'AskobVeron', 'Гречка варенная', 4, 1, 21, 300),
(169, 'AskobVeron', 'Сахар', 0, 0, 100, 10),
(173, 'gerasickin19', 'Гречка ', 13, 3, 68, 100),
(176, 'Sosu Jopu', 'Морозиво', 3, 15, 21, 80),
(177, 'Sosu Jopu', 'Курица с мороженым', 19, 4, 4, 430),
(190, 'AskobVeron', 'Сыр твердый', 26, 27, 0, 100),
(202, 'AskobVeron', 'Яйцо', 12, 11, 10, 55),
(191, 'AskobVeron', 'Кусок белого хлеба', 8, 3, 50, 25),
(192, 'AskobVeron', 'Бутерброд с балыком и сыром', 19, 13, 12, 105),
(195, 'AskobVeron', 'Окорок куриный', 25, 14, 3, 300),
(196, 'AskobVeron', 'Малина', 1, 1, 12, 100),
(197, 'AskobVeron', 'Творог 10% с ванилином', 14, 10, 11, 100),
(209, 'AskobVeron', 'Хлопья с Йогуртом', 3, 1, 25, 530),
(201, 'AskobVeron', 'Клубника', 1, 1, 8, 100),
(207, 'AskobVeron', 'Йогурт', 2, 1, 14, 450),
(208, 'AskobVeron', 'Хлопья', 11, 2, 85, 80),
(214, 'AskobVeron', 'Сметана 15%', 3, 15, 3, 100);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `dishes`
--
ALTER TABLE `dishes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
