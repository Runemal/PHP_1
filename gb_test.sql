-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Дек 14 2020 г., 15:40
-- Версия сервера: 5.7.30
-- Версия PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gb_test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id_comment` int(11) NOT NULL,
  `id_good` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `comment` text NOT NULL,
  `datecreate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id_comment`, `id_good`, `username`, `comment`, `datecreate`) VALUES
(1, 1, 'Admin', 'Самое лучшее масло!', '2020-12-14 11:53:29'),
(2, 1, 'Пользователь', 'Чудесный аромат!', '2020-12-14 11:54:24'),
(3, 2, 'User', 'Perfect!', '2020-12-14 13:00:20'),
(8, 1, 'User', 'alert(Way-way-way)', '2020-12-14 15:38:11');

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id_good` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `info` text NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `imgBig` varchar(50) DEFAULT NULL,
  `imgSmall` varchar(50) DEFAULT NULL,
  `count` int(11) NOT NULL DEFAULT '1',
  `goodchar` text NOT NULL,
  `goodchar1` text NOT NULL,
  `goodchar2` text NOT NULL,
  `goodchar3` text NOT NULL,
  `iteminbox` int(11) NOT NULL,
  `palletesize` text NOT NULL,
  `boxinpallete` int(11) NOT NULL,
  `iteminbox1` int(11) NOT NULL,
  `palletesize1` text NOT NULL,
  `boxinpallete1` int(11) NOT NULL,
  `delivery` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id_good`, `title`, `price`, `info`, `date_create`, `imgBig`, `imgSmall`, `count`, `goodchar`, `goodchar1`, `goodchar2`, `goodchar3`, `iteminbox`, `palletesize`, `boxinpallete`, `iteminbox1`, `palletesize1`, `boxinpallete1`, `delivery`) VALUES
(1, 'Оливковое масло Cretan Mythos Bio', 55, 'Дары солнечного Крита нашли свое воплощение в оливковом масле Cretan Mythos Bio. Используется первый отжим и первоклассная фильтрация, благодаря чему, масло получается густым с насыщенным ароматом и ярким вкусом. Разливается в жестяные бутыли объемом 5000 мл. Рекомендуется хранить в темном прохладном месте.', '2020-12-07 17:39:42', 'images/5l_green.jpg', 'images/small/5l_green.jpg', 3, 'Оливковое масло Organic Extra Virgin жестяная канистра (Tin Canister) объемом 5 lit. Производство Крит. Цена', 'Био-производство', 'Первый отжим', 'Экстра-фильтрация', 4, '80 x 120', 55, 4, '100 x 120', 75, 'Доставка осуществляется транспортными компаниями. Оплата доставки не входит в стоимость и расчитыается индивидуально.'),
(2, 'Сироп семян дерева Кэроб', 7, 'Дары солнечного Крита нашли свое воплощение в деревьях Кэроб. Его семена уникальны своей идентичностью и потому в древности они использовались для измерения веса - карат. Семена богаты витаминами и минералами. Сироп тонизирует, улучшает память и придает сил организму. Разливается в стеклянные бутылки объемом 250 мл. Рекомендуется хранить в темном прохлодном месте.', '2020-12-07 17:39:52', 'images/carob.jpg', 'images/small/carob.jpg', 5, 'Сироп Кэроба, стеклання банка (Dorica Bottle), 250 ml. Производство: Крит. Цена:', 'Био-производство', 'Первый отжим', 'Экстра-фильтрация', 12, '80 x 120', 120, 12, '100 x 120', 155, 'Доставка осуществляется транспортными компаниями. Оплата доставки не входит в стоимость и расчитыается индивидуально.'),
(3, 'Оливковое масло VIOS', 14, 'Дары солнечного Крита нашли свое воплощение в оливковом масле VIOS. Используется первый отжим и первоклассная фильтрация, благодаря чему, масло получается густым с насыщенным ароматом и ярким вкусом. Разливается в стеклянные бутылки объемом 500 мл и фасуется в подарочную упаковку. Рекомендуется хранить в темном прохладном месте.', '2020-12-07 17:41:25', 'images/vios.jpg', 'images/small/vios.jpg', 2, 'Оливковое масло VIOS Organic Extra Virgin в стеклянной бутылке (Virginia Bottle) объемом 500 ml. Производство Крит. Цена', 'Био-производство', 'Первый отжим', 'Экстра-фильтрация', 12, '80 x 120', 55, 12, '100 x 120', 75, 'Доставка осуществляется транспортными компаниями. Оплата доставки не входит в стоимость и расчитыается индивидуально.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comment`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id_good`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id_good` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
