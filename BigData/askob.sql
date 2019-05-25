-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 25 2019 г., 01:12
-- Версия сервера: 10.3.14-MariaDB-100.cba
-- Версия PHP: 7.1.29

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
(60, 'Наташа', 'Апельсин', 1, 0, 9, 100),
(61, 'gerasickin19', 'Мясо', 20, 16, 0, 340),
(62, 'AskobVeron', 'Творог 10% с ванилином', 14, 10, 11, 300),
(63, 'AskobVeron', 'Йогурт 2,5%', 3, 3, 10, 450),
(64, 'AskobVeron', 'Творог 18%', 15, 18, 3, 100),
(66, 'AskobVeron', 'Гречка с мясом', 11, 19, 28, 100),
(123, 'AskobVeron', 'Банан', 2, 0, 20, 90),
(142, 'Rusak', 'Печенье', 8, 12, 75, 200),
(111, 'gerasickin19', 'Овсянка ', 16, 7, 25, 100),
(76, 'NE Jugyl', 'Мяса', 21, 16, 0, 350),
(77, 'NE Jugyl', 'Печиние', 8, 12, 75, 100),
(78, 'NE Jugyl', 'Гречка', 13, 5, 72, 100),
(79, 'NE Jugyl', 'Маслята', 3, 1, 2, 100),
(80, 'NE Jugyl', 'Шиповник', 2, 0, 14, 100),
(81, 'AskobVeron', '2 блина с творогом', 10, 8, 21, 180),
(115, 'NE Jugyl', 'Сыр', 24, 30, 0, 200),
(126, 'AskobVeron', 'Печенье', 8, 12, 75, 40),
(151, 'AskobVeron', '3 Яйца', 12, 11, 10, 240),
(161, 'Artem', 'Морожина', 2, 6, 25, 85),
(167, 'AskobVeron', 'Гречка варенная', 4, 1, 21, 300);

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
(27, '2f6a2ddbcc80d46f12bce1d6ae6a84ef', 'Наташа', 'Tajjga787@ukr.net', '4987b812f5d7b5dafe84af49f34f8ac9', '2019-05-03 21:08:29'),
(28, '2801501a9d2b4e4708fe1889e93ce748', 'Asetsky', 'asetsky2018@gmail.com', '98462ca10559975e86e39169bbda2265', '2019-05-03 21:09:05'),
(29, 'e7ba1c53de67195a05383e86437d8a07', 'TiLOX', 'oksanayaroshenko1980@gmail.com', '05316602d60f747bf406fafd40350fac', '2019-05-03 21:09:26'),
(30, '0a7b840bf3427fd19da2ed719faf9980', 'holidayman', 'sosichlen@sosi.hui', '25d55ad283aa400af464c76d713c07ad', '2019-05-03 21:09:46'),
(31, 'fe21c6fe962376d9b7c466d5acbb5c8f', 'Kochka_', 'saimonklark@gmail.com', 'd6fdadadfa065f3eb6ffb03fbd4dbdc8', '2019-05-03 21:10:19'),
(32, '343f2a0b30b70f515f88c04b9d98a476', 'nikita_lenov', 'hdjdjxjdh@hshdjd.com', '93abcf6505b8a2eb288af468be0c62c9', '2019-05-03 21:10:37'),
(33, '7bc43bb891f3bdae6caf5680ef3c1309', 'Ser Bob', 'djtourist11@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', '2019-05-03 21:10:55'),
(34, '785d2f647440bef95c9088769799aca2', 'gerasickin19', 'gerasickinviktor@gmail.com', 'a82b542baf0ca2ffce662d1d43f523fc', '2019-05-03 21:11:15'),
(35, '844567f880d18745038daa6925812731', 'Debiljaka', 'huisos@gmail.com', '95d47be0d380a7cd3bb5bbe78e8bed49', '2019-05-03 21:11:54'),
(37, '24fb151327fab8872519d3816afd0ec7', 'NE Jugyl', 'istomin02@mail.ua', '2af9b1ba42dc5eb01743e6b3759b6e4b', '2019-05-10 10:04:08'),
(42, '64f6513d7f591ac744ce68f5e063dc7a', 'Rusak', 'ruslanoklim8@gmail.com', 'a40d9d9570f211e5b539964d96e56434', '2019-05-20 19:12:13'),
(43, '036d7966a2f136e558bd39a2048f8026', 'Artem', 'fjdkrkeke@fjfjfjdj', '44b835ef56e112e86194df2cfdf82e06', '2019-05-23 12:56:24');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
