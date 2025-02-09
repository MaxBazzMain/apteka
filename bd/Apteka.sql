-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Хост: MySQL-8.2
-- Время создания: Фев 09 2025 г., 18:15
-- Версия сервера: 8.2.0
-- Версия PHP: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Apteka`
--

-- --------------------------------------------------------

--
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `id` int NOT NULL,
  `user_name` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `id_medicine` int NOT NULL,
  `medicine_quantity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `medicine`
--

CREATE TABLE `medicine` (
  `id` int UNSIGNED NOT NULL,
  `medicine_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `medicine_dose` float UNSIGNED NOT NULL,
  `medicine_quantity` int UNSIGNED NOT NULL,
  `medicine_price` int UNSIGNED NOT NULL,
  `medicine_photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `medicine`
--

INSERT INTO `medicine` (`id`, `medicine_name`, `medicine_dose`, `medicine_quantity`, `medicine_price`, `medicine_photo`) VALUES
(1, 'Анафранил', 25, 30, 197, './assets/images/image1.png'),
(2, 'Эспумизан', 40, 50, 370, './assets/images/image2.png'),
(3, 'Дриптан', 5, 30, 1106, './assets/images/image3.png'),
(8, 'Алзепил', 5, 28, 3509, './assets/images/image4.png'),
(9, 'Галоперидол', 1.5, 50, 71, './assets/images/image5.png'),
(10, 'Трилептал', 600, 50, 1054, './assets/images/image6.png'),
(11, 'Билобил', 120, 120, 993, './assets/images/image7.jpeg'),
(12, 'Звездочка Флю', 15, 10, 226, './assets/images/image8.png'),
(13, 'Мерсилон', 150, 21, 1879, './assets/images/image9.png'),
(14, 'Бронхомишка', 1.47, 15, 213, './assets/images/image10.png'),
(15, 'Ингаверин', 90, 7, 846, './assets/images/image11.png'),
(16, 'Лоперамид', 2, 10, 71, './assets/images/image12.png'),
(17, 'Псило-бальзам', 10, 100, 243, './assets/images/image13.png'),
(18, 'Йодомарин', 100, 100, 243, './assets/images/image14.png'),
(19, 'Видисик', 0.25, 10, 479, './assets/images/image15.jpeg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(25) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `pass` varchar(25) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `email`) VALUES
(10, '1', '1', '1@mail.ru');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT для таблицы `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
