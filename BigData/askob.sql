-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 09 2021 г., 21:14
-- Версия сервера: 10.3.25-MariaDB-2.cba
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
  `Weight` int(11) NOT NULL DEFAULT 100,
  `Dates` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `dishes`
--

INSERT INTO `dishes` (`id`, `User`, `Dish`, `Prots`, `Fats`, `Carbs`, `Weight`, `Dates`) VALUES
(219, 'AskobVeron', 'Прессет АТБ', 3, 4, 21, 540, '2020-05-29'),
(174, 'gerasickin19', 'Цыпленок ', 17, 8, 1, 100, '2020-05-29'),
(230, 'AskobVeron', 'Рыба в томатах', 15, 6, 4, 100, '2020-05-29'),
(189, 'AskobVeron', 'Балык ', 20, 9, 0, 100, '2020-05-29'),
(64, 'AskobVeron', 'Творог 18%', 15, 18, 3, 100, '2020-05-29'),
(168, 'AskobVeron', 'Суп с курицей', 3, 0, 3, 400, '2020-05-29'),
(66, 'AskobVeron', 'Гречка с мясом', 11, 19, 28, 100, '2020-05-29'),
(123, 'AskobVeron', 'Банан', 2, 0, 20, 90, '2020-05-29'),
(111, 'gerasickin19', 'Овсянка ', 16, 7, 25, 100, '2020-05-29'),
(213, 'AskobVeron', 'Пюре', 2, 3, 15, 100, '2020-05-29'),
(126, 'AskobVeron', 'Печенье', 8, 12, 75, 40, '2020-05-29'),
(193, 'AskobVeron', 'Виноград', 1, 1, 17, 100, '2020-05-29'),
(203, 'AskobVeron', 'Плов из свининны', 7, 10, 23, 200, '2020-05-29'),
(218, 'AskobVeron', 'Плов из курицы', 6, 10, 15, 100, '2020-05-29'),
(167, 'AskobVeron', 'Гречка варенная', 4, 1, 21, 300, '2020-05-29'),
(169, 'AskobVeron', 'Сахар', 0, 0, 100, 10, '2020-05-29'),
(173, 'gerasickin19', 'Гречка ', 13, 3, 68, 100, '2020-05-29'),
(216, 'AskobVeron', 'Булка АТБ ', 6, 20, 55, 90, '2020-05-29'),
(190, 'AskobVeron', 'Сыр твердый', 26, 27, 0, 100, '2020-05-29'),
(202, 'AskobVeron', 'Яйцо', 12, 11, 10, 55, '2020-05-29'),
(191, 'AskobVeron', 'Кусок белого хлеба', 8, 3, 50, 25, '2020-05-29'),
(192, 'AskobVeron', 'Бутерброд с балыком и сыром', 19, 13, 12, 105, '2020-05-29'),
(195, 'AskobVeron', 'Окорок куриный', 25, 14, 3, 300, '2020-05-29'),
(196, 'AskobVeron', 'Малина', 1, 1, 12, 100, '2020-05-29'),
(197, 'AskobVeron', 'Творог 10% с ванилином', 14, 10, 11, 100, '2020-05-29'),
(209, 'AskobVeron', 'Хлопья с Йогуртом', 3, 1, 25, 530, '2020-05-29'),
(201, 'AskobVeron', 'Клубника', 1, 1, 8, 100, '2020-05-29'),
(207, 'AskobVeron', 'Йогурт', 2, 1, 14, 450, '2020-05-29'),
(208, 'AskobVeron', 'Хлопья', 11, 2, 85, 80, '2020-05-29'),
(214, 'AskobVeron', 'Сметана 15%', 3, 15, 3, 100, '2020-05-29'),
(220, 'AskobVeron', 'Картофель с мясом (свинина)', 5, 8, 11, 100, '2020-05-29'),
(221, 'AskobVeron', 'Сметанный десерт', 3, 9, 13, 100, '2020-05-29'),
(276, 'AskobVeron', 'Бутер с маслом и медом', 3, 30, 42, 60, '2020-05-29'),
(223, 'AskobVeron', 'Запеканка творожная', 18, 4, 14, 100, '2020-05-29'),
(224, 'AskobVeron', 'Макароны с луком', 4, 3, 22, 100, '2020-05-29'),
(225, 'AskobVeron', 'Салат из свеклы и горошка', 5, 4, 7, 100, '2020-05-29'),
(226, 'AskobVeron', 'Оливье', 5, 17, 7, 100, '2020-05-29'),
(227, 'AskobVeron', 'Гречка со свининой', 8, 9, 11, 100, '2020-05-29'),
(228, 'AskobVeron', 'Свинина жареная', 11, 50, 0, 100, '2020-05-29'),
(231, 'AskobVeron', 'обезжиренный Творог ', 18, 0, 2, 200, '2020-05-29'),
(232, 'AskobVeron', 'овсянка', 3, 4, 14, 300, '2020-05-29'),
(307, 'AskobVeron', 'Чебурек с мясом и сыром', 11, 18, 29, 250, '2020-11-17'),
(309, 'AskobVeron', 'Сало жаренное', 2, 83, 1, 100, '2020-12-09'),
(308, 'Vlados', 'супчик', 100, 30, 44, 300, '2020-11-30'),
(299, 'AskobVeron', 'молоко', 3, 3, 5, 100, '2020-11-17'),
(301, 'AskobVeron', 'Сельдь соленная', 20, 15, 0, 100, '2020-11-17'),
(302, 'AskobVeron', 'Суп с тефтелями', 4, 3, 5, 100, '2020-11-17'),
(303, 'AskobVeron', 'Салат Цезарь', 3, 2, 4, 100, '2020-11-17'),
(304, 'AskobVeron', 'Макароны с курицей', 9, 4, 12, 100, '2020-11-17'),
(305, 'AskobVeron', 'Шоколад молочный', 7, 36, 54, 100, '2020-11-17'),
(280, 'AskobVeron', 'Оливье с курицей ', 7, 4, 7, 100, '2020-05-29'),
(274, 'AskobVeron', 'Мед', 1, 0, 82, 100, '2020-05-29'),
(273, 'AskobVeron', 'Масло твердое', 1, 83, 1, 100, '2020-05-29'),
(275, 'AskobVeron', 'Чай', 0, 0, 8, 250, '2020-05-29'),
(277, 'AskobVeron', 'Паста рыбная Аляска', 10, 56, 4, 100, '2020-05-29'),
(278, 'AskobVeron', 'Огурец маринованый', 3, 0, 1, 70, '2020-05-29'),
(279, 'AskobVeron', 'Котлета из курицы', 18, 10, 14, 65, '2020-05-29'),
(281, 'AskobVeron', 'Краусан с шоколадом шк', 6, 24, 48, 45, '2020-05-29'),
(282, 'AskobVeron', 'Сок', 1, 1, 10, 200, '2020-05-29'),
(284, 'AskobVeron', 'Молотый лён', 34, 14, 12, 100, '2020-05-29'),
(285, 'AskobVeron', 'Йогурт с льном 200/10', 3, 1, 14, 210, '2020-05-29'),
(286, 'AskobVeron', 'Колбаса салями', 21, 54, 2, 100, '2020-05-29'),
(287, 'AskobVeron', 'Курица', 21, 8, 0, 100, '2020-05-29'),
(288, 'AskobVeron', 'Макароны обжаренные', 2, 3, 11, 100, '2020-05-29'),
(289, 'AskobVeron', 'Отбивная куриная  ', 18, 8, 6, 100, '2020-05-29'),
(290, 'AskobVeron', 'Отбивная с пюре (Школа)', 9, 5, 11, 190, '2020-05-29'),
(291, 'AskobVeron', 'Мороженное', 3, 15, 21, 100, '2020-06-14'),
(292, 'AskobVeron', 'Картофель с мясом (курица)', 8, 9, 9, 100, '2020-06-16'),
(293, 'AskobVeron', 'Сосиски', 11, 24, 2, 100, '2020-06-21'),
(294, 'AskobVeron', 'Шпроты', 17, 32, 1, 100, '2020-06-21'),
(295, 'AskobVeron', 'Пельмени', 12, 13, 29, 100, '2020-06-23'),
(297, 'AskobVeron', 'Шаурма 1шт', 9, 4, 20, 390, '2020-06-27');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `token` varchar(200) NOT NULL,
  `login` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `token`, `login`, `email`, `password`, `date`) VALUES
(26, '4b211b670a3db2225cdd7cfc5cd624f2', 'AskobVeron', 'twistedzing@gmail.com', '6d1c8ae2fde3e40935bd3abcd4a9cec9', '2019-05-03 21:08:05'),
(34, '785d2f647440bef95c9088769799aca2', 'gerasickin19', 'gerasickinviktor@gmail.com', 'a82b542baf0ca2ffce662d1d43f523fc', '2019-05-03 21:11:15'),
(48, 'cb967719e5f2de349ec605b81d717f27', 'Vlados', 'vlad.fedorkin03@gmail.com', 'f1b708bba17f1ce948dc979f4d7092bc', '2020-11-30 19:50:42'),
(46, 'c9a55e13b13153ed7e66177a261633c3', 'PASHKXVSKYI', 'egor.pashkovskyi602@gmail.com', 'e9887c074f57dc94f7dbf084dfd74138', '2020-11-17 13:41:33');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `User` (`login`),
  ADD UNIQUE KEY `E-mail` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `dishes`
--
ALTER TABLE `dishes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=310;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
