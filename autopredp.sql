-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 13 2023 г., 23:40
-- Версия сервера: 10.4.24-MariaDB
-- Версия PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `autopredp`
--

-- --------------------------------------------------------

--
-- Структура таблицы `brigade`
--

CREATE TABLE `brigade` (
  `idbrigade` int(11) NOT NULL,
  `namebrigade` varchar(45) DEFAULT NULL,
  `plot_idplot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `brigade`
--

INSERT INTO `brigade` (`idbrigade`, `namebrigade`, `plot_idplot`) VALUES
(1, 'Бригада сборщиков №1', 1),
(2, 'Бригада сборщиков №2', 3),
(3, 'Бригада сборщиков №3', 5),
(4, 'Бригада сборщиков №3', 6),
(5, 'Бригада сборщиков №4', 7),
(6, 'Бригада сборщиков №5', 11),
(7, 'Бригада сборщиков №6', 17),
(8, 'Бригада токарей №1', 2),
(9, 'Бригада токарей №2', 4),
(10, 'Бригада токарей №4', 14),
(11, 'Бригада токарей №5', 1),
(12, 'Бригада токарей №6', 16),
(13, 'Бригада токарей №7', 19),
(14, 'Бригада слесарей №1', 2),
(15, 'Бригада слесарей №2', 4),
(16, 'Бригада слесарей №3', 6),
(17, 'Бригада слесарей №3', 12),
(18, 'Бригада слесарей №4', 13),
(19, 'Бригада слесарей №5', 15),
(20, 'Бригада слесарей №6', 7),
(21, 'Бригада слесарей №7', 11),
(22, 'Бригада слесарей №7', 15),
(23, 'Бригада слесарей №8', 4),
(25, 'Бригада сварщиков №1', 1),
(26, 'Бригада сварщиков №2', 5),
(27, 'Бригада сварщиков №3', 7),
(28, 'Бригада сварщиков №4', 13),
(29, 'Бригада сварщиков №5', 12),
(31, 'Бригада сварщиков №6', 2),
(32, 'Бригада сварщиков №7', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `idcategory` int(11) NOT NULL,
  `namecategory` varchar(45) DEFAULT NULL,
  `infocategory` varchar(45) DEFAULT NULL,
  `type_idtype` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`idcategory`, `namecategory`, `infocategory`, `type_idtype`) VALUES
(1, 'A класс', 'Мини-автомобиль', 1),
(2, 'C класс', 'Средне-размерный автомобиль (4х-местный)', 1),
(3, 'D класс', 'Полноразмерный автомобиль (4х-местный)', 1),
(4, 'E класс', 'Бизнес-класс', 1),
(5, 'F класс', 'Представительское авто', 1),
(6, 'S класс', 'Спортивный автомобиль (2х-местный)', 1),
(7, 'J класс', 'Кроссовер/Внедорожник', 1),
(8, 'M класс', 'Минивен', 2),
(9, 'MS класс', 'Крупный минивен (большая вместимость)', 2),
(10, 'MM класс', 'Автобус', 2),
(11, 'ML класс', 'Крупный автобус', 2),
(12, 'BL', 'Малолитражный мотоцикл/скутер', 3),
(13, 'BM класс', 'Средне-размерный мотоцикл', 3),
(14, 'BL класс', 'Спортивный мотоцикл / квадроцикл', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `engeneer`
--

CREATE TABLE `engeneer` (
  `idEngener` int(11) NOT NULL,
  `nameengeneer` varchar(45) DEFAULT NULL,
  `birthdayengeneer` date DEFAULT NULL,
  `datestartengeneer` date DEFAULT NULL,
  `expengeneer` int(11) DEFAULT NULL,
  `engineerstatus` varchar(45) DEFAULT NULL,
  `plot_idplot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `engeneer`
--

INSERT INTO `engeneer` (`idEngener`, `nameengeneer`, `birthdayengeneer`, `datestartengeneer`, `expengeneer`, `engineerstatus`, `plot_idplot`) VALUES
(1, 'Касимов Георгий Константинович', '1963-05-24', '1993-11-06', 5, 'Инженер', 1),
(2, 'Немцова Василиса Марковна', '1965-07-02', '2002-01-12', 8, 'Технолог', 2),
(3, 'Гавриленкова Нина Тимофеевна', '1976-05-23', '2004-01-12', 9, 'Инженер', 3),
(4, 'Ростова Аполлинария Вениаминовна', '1962-05-24', '1982-09-19', 5, 'Техник', 4),
(5, 'Солодских Марьямна Прохор', '1978-11-04', '1998-10-11', 5, 'Технолог', 5),
(6, 'Мизенова Пелагея Вячеславовна', '1979-09-01', '2001-01-20', 7, 'Инженер', 6),
(7, 'Плеханов Денис Никифорович', '1960-06-25', '1991-02-27', 9, 'Технолог', 7),
(8, 'Кудашева Надежда Аркадьевна', '1986-04-17', '2006-09-22', 5, 'Инженер', 8),
(9, 'Чебыкин Прохор Семенович', '1977-06-21', '1995-06-21', 5, 'Техник', 9),
(10, 'Савкин Вениамин Венедиктович', '1964-03-21', '1986-03-21', 6, 'Технолог', 10),
(11, 'Другаков Леонид Максимович', '1980-11-10', '2001-02-15', 2, 'Инженер', 11),
(12, 'Калугер Роман Адамович', '1977-01-11', '1999-03-11', 1, 'Техник', 12),
(13, 'Урусов Прохор Афанасьевич', '1968-06-22', '1988-07-11', 0, 'Технолог', 13),
(14, 'Дуванова Людмила Гаврннловна', '1972-11-08', '1985-11-08', 2, 'Инженер', 14),
(15, 'Маматова Любовь Ефимовна', '1984-10-16', '2007-08-22', 1, 'Техник', 15),
(16, 'Лукашевич Давид Филиппович', '1979-02-12', '2000-12-12', 0, 'Инженер', 16),
(17, 'Ушакова Галина Алексеевна', '1980-11-16', '2009-11-16', 6, 'Инженер', 17),
(18, 'Крутов Аркадий Елизарович', '1968-04-07', '1998-04-07', 5, 'Техник', 18),
(19, 'Савенков Даниил Венедиктович', '1974-10-25', '2009-10-25', 10, 'Инженер', 19),
(20, 'Бурдуковский Семен Александрович', '1976-11-08', '1999-11-08', 1, 'Техник', 20);

-- --------------------------------------------------------

--
-- Структура таблицы `equipment`
--

CREATE TABLE `equipment` (
  `idequipment` int(11) NOT NULL,
  `nameequipment` varchar(45) DEFAULT NULL,
  `infoequipment` varchar(45) DEFAULT NULL,
  `lab_idlab` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `equipment`
--

INSERT INTO `equipment` (`idequipment`, `nameequipment`, `infoequipment`, `lab_idlab`) VALUES
(1, 'Инструменты', 'Набор различных инструментов', 1),
(2, 'Инструменты', 'Набор различных инструментов', 3),
(3, 'Инструменты', 'Набор различных инструментов', 4),
(4, 'Инструменты', 'Набор различных инструментов', 5),
(5, 'Костюм лаборанта', 'Спец. одежда, каска, спец. обувь', 1),
(6, 'Костюм лаборанта', 'Спец. одежда, каска, спец. обувь', 1),
(7, 'Костюм лаборанта', 'Спец. одежда, каска, спец. обувь', 1),
(8, 'Костюм лаборанта', 'Спец. одежда, каска, спец. обувь', 3),
(9, 'Костюм лаборанта', 'Спец. одежда, каска, спец. обувь', 3),
(10, 'Костюм лаборанта', 'Спец. одежда, каска, спец. обувь', 3),
(11, 'Костюм лаборанта', 'Спец. одежда, каска, спец. обувь', 4),
(12, 'Костюм лаборанта', 'Спец. одежда, каска, спец. обувь', 4),
(13, 'Костюм лаборанта', 'Спец. одежда, каска, спец. обувь', 4),
(14, 'Костюм лаборанта', 'Спец. одежда, каска, спец. обувь', 5),
(15, 'Костюм лаборанта', 'Спец. одежда, каска, спец. обувь', 5),
(16, 'Токарные инструменты', '-', 1),
(17, 'Токарные инструменты', '-', 3),
(18, 'Сварочные инструменты', '-', 3),
(19, 'Сварочные инструменты', '-', 3),
(20, 'Сварочные инструменты', '-', 4),
(21, 'Сварочные инструменты', '-', 4),
(22, 'Сварочные инструменты', '-', 5),
(23, 'Сварочные инструменты', '-', 5),
(24, 'Электроприборы', '-', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `header`
--

CREATE TABLE `header` (
  `idheader` int(11) NOT NULL,
  `nameheader` varchar(45) DEFAULT NULL,
  `birthdayheader` date DEFAULT NULL,
  `datestartheader` date DEFAULT NULL,
  `expheader` int(11) DEFAULT NULL,
  `workshop_idworkshop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `header`
--

INSERT INTO `header` (`idheader`, `nameheader`, `birthdayheader`, `datestartheader`, `expheader`, `workshop_idworkshop`) VALUES
(1, 'Петров Виталий Саввеевич', '1976-12-08', '2006-12-08', 10, 2),
(2, 'Сиянцева Алиса Сергеевна', '1989-02-18', '2015-11-11', 10, 3),
(3, 'Карчагин Константин Георгиевич', '1981-02-18', '2010-06-14', 5, 4),
(4, 'Ларичев Семен Наумович', '1977-02-18', '2004-06-14', 7, 5),
(5, 'Юхтрица Василиса Панкратовна', '1972-04-22', '1996-05-07', 8, 6);

-- --------------------------------------------------------

--
-- Структура таблицы `lab`
--

CREATE TABLE `lab` (
  `idlab` int(11) NOT NULL,
  `namelab` varchar(45) DEFAULT NULL,
  `infolab` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `lab`
--

INSERT INTO `lab` (`idlab`, `namelab`, `infolab`) VALUES
(1, 'Лаборатория №1', 'Лаборатория запчастей'),
(2, 'Лаборатория №2', 'Демонстрационная лаборатория'),
(3, 'Лаборатория №3', 'Лаборатория двигателей'),
(4, 'Лаборатория №4', 'Кузовная лаборатория'),
(5, 'Лаборатория №5', 'Электротехническая лаборатория');

-- --------------------------------------------------------

--
-- Структура таблицы `plot`
--

CREATE TABLE `plot` (
  `idplot` int(11) NOT NULL,
  `nameplot` varchar(45) DEFAULT NULL,
  `infoplot` varchar(45) NOT NULL,
  `workshop_idworkshop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `plot`
--

INSERT INTO `plot` (`idplot`, `nameplot`, `infoplot`, `workshop_idworkshop`) VALUES
(1, 'Информационный участок №1', 'Демонстрация автомобилей', 2),
(2, 'Информационный участок №2', 'Демонстрация автобусов', 2),
(3, 'Информационный участок №3', 'Демонстрация мотоциклов', 2),
(4, 'Моторный участок №1', 'Производство моторов', 3),
(5, 'Моторный участок №2', 'Производство моторов', 3),
(6, 'Участок комплектующих №1', 'Производство комплектующих', 3),
(7, 'Участок комплектующих №2', 'Производство движущихся частей', 3),
(8, 'Участок комплектующих №3', 'Производство электроники', 3),
(9, 'Станковый участок ', 'Обработка металлов', 3),
(10, 'Роботостроительный участок', 'Производство электротехники', 3),
(11, 'Програмный участок', 'Производство ПО', 3),
(12, 'Моторный участок №11', 'Производство моторов', 4),
(13, 'Участок комплектующих №1', 'Производство комплектующих', 4),
(14, 'Станковый участок №10', 'Обработка металлов', 4),
(15, 'Участок комплектующих №11', 'Производство электроники', 4),
(16, 'Програмный участок №10', 'Производство ПО', 4),
(17, 'Роботостроительный участок', 'Производство электроники', 4),
(18, 'Участок комплектующих №21', 'Производство комплектующих', 5),
(19, 'Участок комплектующих №22', 'Производство электроники', 5),
(20, 'Станковый участок №21', 'Обработка металлов', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `scientist`
--

CREATE TABLE `scientist` (
  `idscientist` int(11) NOT NULL,
  `namescientist` varchar(45) DEFAULT NULL,
  `birthdayscientist` date DEFAULT NULL,
  `datestartscientist` date DEFAULT NULL,
  `expscientistscientist` int(11) DEFAULT NULL,
  `lab_idlab` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `scientist`
--

INSERT INTO `scientist` (`idscientist`, `namescientist`, `birthdayscientist`, `datestartscientist`, `expscientistscientist`, `lab_idlab`) VALUES
(1, 'Гуськов Виталий Васильевич', '1970-03-03', '2000-05-05', 3, 1),
(2, 'Ясенков Виктор Захарович', '1966-07-08', '2000-05-05', 4, 1),
(3, 'Коренёв Валентин Елизарович', '1974-07-08', '2000-05-05', 3, 1),
(4, 'Каде Тимофей Феоктистович', '1972-11-02', '2002-01-14', 5, 2),
(5, 'Горшков Семен Антонович', '1984-11-02', '2000-10-14', 6, 3),
(6, 'Гилёв Василий Нифонтович', '1984-10-10', '2006-05-16', 6, 3),
(7, 'Морошкин Сергей Давидович', '1964-10-10', '2006-05-16', 3, 4),
(8, 'Булатов Николай Маркович', '1966-05-04', '2003-05-16', 3, 4),
(9, 'Фоменков Филипп Никандрович', '1967-11-24', '2004-02-26', 6, 4),
(10, 'Холод Геннадий Леонидович', '1957-11-24', '2003-02-26', 10, 5),
(11, 'Дунин-Барковский Герасим Вячеславович', '1967-11-24', '2004-05-12', 11, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `type`
--

CREATE TABLE `type` (
  `idtype` int(11) NOT NULL,
  `nametype` varchar(45) DEFAULT NULL,
  `infotype` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `type`
--

INSERT INTO `type` (`idtype`, `nametype`, `infotype`) VALUES
(1, 'Автомобиль', 'Самодвижущееся транспортное средство'),
(2, 'Автобус', 'Многоместный автомобиль для перевозки'),
(3, 'Мотоцикл', 'Двухколёсн. ср-во передвижения с двигателем');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `auth_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `role`, `password`, `auth_key`) VALUES
(1, 'prosto_interesno', 'admin', '$2y$13$rQcPBv89EGUvicNTCnrmU.HLrCLVHXOYV4DhcEQcRfUpKToQLFA8i$2y$13$rQcPBv89EGUvicNTCnrmU.HLrCLVHXOYV4DhcEQcRfUpKToQLFA8i', 'iHHhgA0IjR9y2coUu-Xwjf8hONhxiynE'),
(22, 'prosto_interesno', 'user', '$2y$13$lwnR6/rVr18rUIlI6bPr5e4bKRbSolC8KbZcdH4zCziVVRrFtFs4m', '');

-- --------------------------------------------------------

--
-- Структура таблицы `work`
--

CREATE TABLE `work` (
  `idwork` int(11) NOT NULL,
  `categorywork` int(11) DEFAULT NULL,
  `namework` varchar(45) DEFAULT NULL,
  `startcreationwork` date DEFAULT NULL,
  `endcreationwork` date DEFAULT NULL,
  `analyseend` date DEFAULT NULL,
  `brigade_idbrigade` int(11) NOT NULL,
  `lab_idlab` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `work`
--

INSERT INTO `work` (`idwork`, `categorywork`, `namework`, `startcreationwork`, `endcreationwork`, `analyseend`, `brigade_idbrigade`, `lab_idlab`) VALUES
(2, 1, 'Halls-Mini 1001', '2022-05-05', NULL, NULL, 1, 4),
(3, 1, 'Halls-Mini 1002', '2020-10-05', '2020-10-06', NULL, 2, 3),
(4, 2, 'Halls-CC 1114', '1995-03-12', '1995-03-13', '1995-03-20', 3, 5),
(5, 3, 'Halls-D 100', '2019-04-22', '2022-04-25', NULL, 3, 1),
(6, 3, 'Halls-D 200', '2018-04-22', '2018-04-25', '2018-05-02', 5, 2),
(7, 3, 'Halls-D 300', '2012-06-12', '2012-06-25', '2008-07-02', 5, 4),
(8, 4, 'Halls-BIS 101-J', '2002-10-12', '2002-11-15', '2003-02-15', 6, 4),
(9, 4, 'Halls-BIS 106-J', '2007-02-10', '2007-04-10', '2008-01-10', 7, 4),
(10, 5, 'Halls-PRESIDENT 1-A', '2010-02-10', '2010-06-10', '2011-02-15', 10, 2),
(11, 5, 'Halls-PRESIDENT 1-B', '2010-03-10', '2010-07-10', '2011-03-15', 10, 2),
(12, 6, 'Halls-FF 205', '2011-04-16', '2011-04-20', '2011-05-20', 15, 4),
(13, 6, 'Halls-FF 305', '2015-07-22', NULL, NULL, 9, 3),
(14, 7, 'Halls-66L', '2001-03-25', '2001-03-27', '2001-04-11', 11, 4),
(15, 7, 'Halls-77L', '2007-05-11', '2007-05-22', '2007-06-10', 14, 3),
(16, 8, 'Halls-Q7', '2020-06-22', '2020-07-22', NULL, 15, 2),
(17, 8, 'Halls-Q9', '2015-03-11', '2022-05-14', NULL, 15, 2),
(18, 9, 'Halls-Over 10', '2001-02-02', '2001-02-22', '2001-06-22', 15, 4),
(19, 10, 'Halls-Multy 14', '2022-02-02', '2022-04-12', '0000-00-00', 17, 5),
(20, 11, 'Halls-Multy 21', '2022-08-12', '2022-08-15', NULL, 19, 4),
(21, 12, 'Halls-Multy 40', '2017-03-09', '2017-04-12', NULL, 27, 1),
(22, 12, 'Halls-Multy 60', '2019-05-12', NULL, NULL, 29, 4),
(23, 13, 'Halls-MM 2.2', '1999-03-22', '1999-05-11', '1999-08-17', 31, 3),
(24, 14, 'Halls-MA 5.0', '2015-04-04', '2015-05-18', '2015-07-28', 32, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `worker`
--

CREATE TABLE `worker` (
  `idworker` int(11) NOT NULL,
  `nameworker` varchar(45) DEFAULT NULL,
  `birthdayworker` date DEFAULT NULL,
  `datestartworker` date DEFAULT NULL,
  `expworker` int(11) DEFAULT NULL,
  `workerstatus` varchar(45) DEFAULT NULL,
  `idbrigade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `worker`
--

INSERT INTO `worker` (`idworker`, `nameworker`, `birthdayworker`, `datestartworker`, `expworker`, `workerstatus`, `idbrigade`) VALUES
(1, 'Юферев Вячеслав Васильевич', '1962-09-23', '1987-09-23', 5, 'Сборщик', 1),
(2, 'Шурьева Нина Кузьминовна', '1964-10-21', '1978-09-25', 7, 'Сборщик', 1),
(3, 'Миронова Марьямна Денисовна', '1967-10-10', '1979-10-11', 4, 'Сборщик', 2),
(4, 'Эристова Екатерина Леонидовна', '1977-09-05', '1989-11-12', 6, 'Сборщик', 2),
(5, 'Аминева Кира Семеновна', '1982-04-05', '1999-11-22', 1, 'Сборщик', 3),
(6, 'Набатова Василиса Федоровна', '1969-02-05', '1995-11-21', 1, 'Сборщик', 3),
(7, 'Рашет Марк Павлович', '1961-04-25', '1933-04-25', 5, 'Сборщик', 4),
(8, 'Остапюка Альбина Якововна', '1968-07-26', '1999-04-25', 5, 'Сборщик', 4),
(9, 'Суснина Лана Герасимовна', '1962-11-21', '1999-04-25', 5, 'Сборщик', 5),
(10, 'Углов Тарас Витальевич', '1983-01-17', '2000-02-25', 5, 'Сборщик', 5),
(11, 'Платонова Карина Юрьевна', '1972-08-17', '2000-02-25', 6, 'Сборщик', 6),
(12, 'Чуприн Марк Ефимович', '1993-08-17', '2015-02-25', 2, 'Сборщик', 6),
(13, 'Хабенский Марк Антонович', '1973-08-17', '2001-12-12', 2, 'Сборщик', 7),
(14, 'Илькуна Сюзанна Федоровна', '1980-03-04', '2001-12-12', 2, 'Токарь', 7),
(15, 'Опекунов Александр Никандрович', '1971-06-13', '2001-12-12', 4, 'Токарь', 8),
(16, 'Лагошина Полина Якововна', '1988-06-13', '2009-10-04', 5, 'Токарь', 8),
(17, 'Сухих Вениамин Макарович', '1965-03-22', '2009-10-04', 12, 'Токарь', 9),
(18, 'Блантер Алина Михаиловна', '1973-11-14', '2004-05-14', 5, 'Токарь', 9),
(19, 'Абоба Вадим Муратович', '1973-04-19', '2003-10-04', 7, 'Токарь', 10),
(20, 'Касатая Клара Марковна', '1974-09-01', '2013-03-11', 19, 'Токарь', 10),
(21, 'Егорова Ирина Витальевна', '1962-04-15', '2013-03-11', 23, 'Токарь', 11),
(22, 'Селезнёва Карина Саввановна', '1964-06-07', '2007-05-07', 9, 'Токарь', 11),
(23, 'Игнатов Павел Акимович', '1975-06-07', '2007-05-07', 3, 'Токарь', 12),
(24, 'Николаев Егор Иванович', '1978-07-11', '2003-01-01', 6, 'Слесарь', 12),
(25, 'Тальдаев Яков Юрьевич', '1962-11-11', '1999-05-07', 5, 'Слесарь', 13),
(26, 'Яндульский Григорий Николаевич', '1976-11-15', '1999-04-12', 2, 'Слесарь', 13),
(27, 'Дворецков Филипп Никифорович', '1966-04-14', '1999-04-12', 2, 'Токарь', 14),
(28, 'Шуличенко Константин Валентинович', '1969-07-04', '2000-03-22', 5, 'Слесарь', 14),
(29, 'Шуличенко Константин Валентинович', '1969-07-04', '2003-07-11', 13, 'Сборщик', 15),
(30, 'Образцов Севастьян Прохорович', '1972-04-01', '2003-07-11', 13, 'Сборщик', 15),
(31, 'Шатохин Виктор Николаевич', '1975-01-25', '1999-04-15', 5, 'Сборщик', 16),
(32, 'Макаркин Константин Яковеевичевич', '1976-01-25', '2000-04-15', 3, 'Сборщик', 16),
(33, 'Копцев Филипп Максимоич', '1964-05-27', '2000-04-15', 3, 'Сборщик', 17),
(34, 'Клиев Аркадий Тимофеевич', '1967-11-14', '2003-05-16', 3, 'Сборщик', 18),
(35, 'Мазаев Ефим Георгиевич', '1967-11-03', '2005-05-05', 7, 'Сборщик', 19),
(36, 'Горелов Василий Елизарович', '1959-11-03', '2000-05-04', 13, 'Токарь', 19),
(37, 'Кудов Валерий Евгеньевич', '1979-11-03', '2000-05-04', 4, 'Токарь', 20),
(38, 'Богоявленский Петр Маркович', '1972-06-26', '1996-07-18', 3, 'Слесарь', 20),
(39, 'Николаичев Михаил Константинович', '1960-03-21', '1996-07-18', 15, 'Токарь', 21),
(40, 'Ходяева Анфиса Леонтьевна', '1973-03-21', '1998-07-18', 5, 'Слесарь', 21),
(41, 'Абушаева Таисия Тимофеевна', '1972-06-15', '1999-03-12', 3, 'Слесарь', 22),
(42, 'Зобова Инна Петровна', '1975-08-08', '1999-03-12', 0, 'Слесарь', 22),
(43, 'Большов Герасим Васильевич', '1971-05-01', '1999-04-22', 5, 'Сварщик', 23),
(44, 'Цур-Милен Ростислав Ипполитович', '1975-01-06', '1999-04-22', 2, 'Сварщик', 23),
(45, 'Сиянских Юрий Ефремович', '1973-01-06', '2000-02-11', 3, 'Сварщик', 23),
(46, 'Калюта Николай Давидович', '1966-06-06', '1999-01-11', 3, 'Сварщик', 25),
(47, 'Зиновьев Ефим Германович', '1977-07-07', '2001-01-11', 1, 'Сварщик', 25),
(48, 'Ильюшин Ефрем Иннокентиевич', '1969-11-28', '1998-02-12', 5, 'Сварщик', 25),
(49, 'Андропов Семен Валентинович', '1969-06-27', '1999-02-11', 3, 'Сварщик', 26),
(50, 'Поливанов Виталий Гаврннлович', '1973-06-27', '2006-04-12', 5, 'Сварщик', 26),
(51, 'Мельников Иван Фадеевич', '1963-06-27', '2005-04-12', 9, 'Сварщик', 27),
(52, 'Амалиев Адам Юлианович', '1973-06-27', '2005-04-12', 4, 'Сварщик', 27),
(53, 'Щавельский Петр Иванович', '1974-07-21', '2005-04-12', 2, 'Сварщик', 28),
(54, 'Яненко Павел Феоктистович', '1970-04-24', '2006-04-12', 4, 'Сварщик', 28),
(55, 'Яимов Кирилл Севастьянович', '1977-04-24', '2006-04-12', 6, 'Сварщик', 29),
(56, 'Перфильев Василий Павлович', '1973-02-12', '2003-08-07', 3, 'Сварщик', 1),
(57, 'Архаткин Артем Юринович', '1969-02-12', '2004-08-07', 5, 'Сварщик', 3),
(58, 'Витковский Ростислав Максимович', '1971-05-15', '2005-08-07', 10, 'Сварщик', 31),
(59, 'Сигов Даниил Трофимович', '1974-01-19', '2003-04-02', 5, 'Сварщик', 31),
(60, 'Балановский Афанасий Прохорович', '1969-02-22', '2001-05-03', 2, 'Сварщик', 32),
(61, 'Травников Марк Герасимович', '1971-05-11', '2004-02-01', 5, 'Сварщик', 32),
(62, 'Протасов Николай Валерьевич', '1975-05-11', '2011-02-01', 15, 'Сварщик', 32);

-- --------------------------------------------------------

--
-- Структура таблицы `workshop`
--

CREATE TABLE `workshop` (
  `idworkshop` int(11) NOT NULL,
  `nameworkshop` varchar(45) DEFAULT NULL,
  `infoworkshop` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `workshop`
--

INSERT INTO `workshop` (`idworkshop`, `nameworkshop`, `infoworkshop`) VALUES
(2, 'Цех№1', 'Самый первый цех'),
(3, 'Автомобильный цех №1', 'Производство автомобилей'),
(4, 'Автобусный цех', 'Производство автобусов'),
(5, 'Мотоциклетный цех', 'Производство мотоциклов'),
(6, 'Автомобильный цех №2', 'Производство автомобилей спец. класса');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `brigade`
--
ALTER TABLE `brigade`
  ADD PRIMARY KEY (`idbrigade`,`plot_idplot`),
  ADD KEY `fk_brigade_plot1_idx` (`plot_idplot`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idcategory`,`type_idtype`) USING BTREE,
  ADD KEY `fk_category_type1_idx` (`type_idtype`);

--
-- Индексы таблицы `engeneer`
--
ALTER TABLE `engeneer`
  ADD PRIMARY KEY (`idEngener`,`plot_idplot`) USING BTREE,
  ADD KEY `plot_idplot` (`plot_idplot`);

--
-- Индексы таблицы `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`idequipment`,`lab_idlab`),
  ADD KEY `fk_equipment_lab1_idx` (`lab_idlab`);

--
-- Индексы таблицы `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`idheader`,`workshop_idworkshop`),
  ADD KEY `fk_header_workshop1_idx` (`workshop_idworkshop`);

--
-- Индексы таблицы `lab`
--
ALTER TABLE `lab`
  ADD PRIMARY KEY (`idlab`);

--
-- Индексы таблицы `plot`
--
ALTER TABLE `plot`
  ADD PRIMARY KEY (`idplot`,`workshop_idworkshop`),
  ADD KEY `fk_plot_workshop1_idx` (`workshop_idworkshop`);

--
-- Индексы таблицы `scientist`
--
ALTER TABLE `scientist`
  ADD PRIMARY KEY (`idscientist`,`lab_idlab`),
  ADD KEY `fk_scientist_lab1_idx` (`lab_idlab`);

--
-- Индексы таблицы `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`idtype`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`idwork`,`brigade_idbrigade`,`lab_idlab`),
  ADD KEY `fk_work_brigade1_idx` (`brigade_idbrigade`),
  ADD KEY `fk_work_lab1_idx` (`lab_idlab`),
  ADD KEY `categorywork` (`categorywork`);

--
-- Индексы таблицы `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`idworker`) USING BTREE,
  ADD KEY `idbrigade` (`idbrigade`);

--
-- Индексы таблицы `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`idworkshop`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `brigade`
--
ALTER TABLE `brigade`
  MODIFY `idbrigade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `idcategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `engeneer`
--
ALTER TABLE `engeneer`
  MODIFY `idEngener` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `equipment`
--
ALTER TABLE `equipment`
  MODIFY `idequipment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `header`
--
ALTER TABLE `header`
  MODIFY `idheader` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `lab`
--
ALTER TABLE `lab`
  MODIFY `idlab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `plot`
--
ALTER TABLE `plot`
  MODIFY `idplot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `scientist`
--
ALTER TABLE `scientist`
  MODIFY `idscientist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `type`
--
ALTER TABLE `type`
  MODIFY `idtype` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `work`
--
ALTER TABLE `work`
  MODIFY `idwork` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `worker`
--
ALTER TABLE `worker`
  MODIFY `idworker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT для таблицы `workshop`
--
ALTER TABLE `workshop`
  MODIFY `idworkshop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `brigade`
--
ALTER TABLE `brigade`
  ADD CONSTRAINT `brigade_ibfk_1` FOREIGN KEY (`plot_idplot`) REFERENCES `plot` (`idplot`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`type_idtype`) REFERENCES `type` (`idtype`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `engeneer`
--
ALTER TABLE `engeneer`
  ADD CONSTRAINT `engeneer_ibfk_1` FOREIGN KEY (`plot_idplot`) REFERENCES `plot` (`idplot`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `equipment`
--
ALTER TABLE `equipment`
  ADD CONSTRAINT `equipment_ibfk_1` FOREIGN KEY (`lab_idlab`) REFERENCES `lab` (`idlab`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `header`
--
ALTER TABLE `header`
  ADD CONSTRAINT `header_ibfk_1` FOREIGN KEY (`workshop_idworkshop`) REFERENCES `workshop` (`idworkshop`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `plot`
--
ALTER TABLE `plot`
  ADD CONSTRAINT `plot_ibfk_1` FOREIGN KEY (`workshop_idworkshop`) REFERENCES `workshop` (`idworkshop`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `scientist`
--
ALTER TABLE `scientist`
  ADD CONSTRAINT `scientist_ibfk_1` FOREIGN KEY (`lab_idlab`) REFERENCES `lab` (`idlab`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `work`
--
ALTER TABLE `work`
  ADD CONSTRAINT `work_ibfk_2` FOREIGN KEY (`brigade_idbrigade`) REFERENCES `brigade` (`idbrigade`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `work_ibfk_3` FOREIGN KEY (`lab_idlab`) REFERENCES `lab` (`idlab`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `work_ibfk_4` FOREIGN KEY (`categorywork`) REFERENCES `category` (`idcategory`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `worker`
--
ALTER TABLE `worker`
  ADD CONSTRAINT `worker_ibfk_1` FOREIGN KEY (`idbrigade`) REFERENCES `brigade` (`idbrigade`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
