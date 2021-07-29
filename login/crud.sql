-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Jul-2021 às 19:47
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `city`
--

CREATE TABLE `city` (
  `idCity` int(11) NOT NULL,
  `nameCity` varchar(60) NOT NULL,
  `idState` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `city`
--

INSERT INTO `city` (`idCity`, `nameCity`, `idState`) VALUES
(1, 'Portão', 1),
(2, 'Santa Cruz do Sul', 1),
(3, 'Porto Alegre', 1),
(4, 'São Leopoldo', 1),
(5, 'Novo Hamburgo', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `client`
--

CREATE TABLE `client` (
  `idClient` int(11) NOT NULL,
  `nameClient` varchar(60) NOT NULL,
  `ageClient` int(3) NOT NULL,
  `idGender` int(11) NOT NULL,
  `idCity` int(11) NOT NULL,
  `idState` int(11) NOT NULL,
  `idCountry` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `client`
--

INSERT INTO `client` (`idClient`, `nameClient`, `ageClient`, `idGender`, `idCity`, `idState`, `idCountry`) VALUES
(15, 'f', 2, 1, 1, 1, 1),
(18, 'Marcelo Santos', 23, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `country`
--

CREATE TABLE `country` (
  `idCountry` int(11) NOT NULL,
  `nameCountry` varchar(60) NOT NULL,
  `abbreviateCountry` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `country`
--

INSERT INTO `country` (`idCountry`, `nameCountry`, `abbreviateCountry`) VALUES
(1, 'Brasil', 'BR'),
(2, 'Estados Unidos', 'US'),
(3, 'Mexico', 'MX'),
(4, 'Canada', 'ca'),
(5, 'Africa', 'Sa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `gender`
--

CREATE TABLE `gender` (
  `idGender` int(11) NOT NULL,
  `descriptionGender` varchar(60) NOT NULL,
  `abbreviateGender` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `gender`
--

INSERT INTO `gender` (`idGender`, `descriptionGender`, `abbreviateGender`) VALUES
(1, 'Masculino', 'M'),
(2, 'Feminino', 'F');

-- --------------------------------------------------------

--
-- Estrutura da tabela `logindate`
--

CREATE TABLE `logindate` (
  `idDate` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `loginDate` datetime NOT NULL,
  `logoutDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `logindate`
--

INSERT INTO `logindate` (`idDate`, `idUser`, `loginDate`, `logoutDate`) VALUES
(1, 1, '2021-07-13 11:17:54', '2021-07-13 12:16:11'),
(2, 1, '2021-07-13 12:11:27', '2021-07-13 12:16:11'),
(3, 1, '2021-07-13 12:11:52', '2021-07-13 12:16:11'),
(4, 1, '2021-07-13 12:11:57', '2021-07-13 12:16:11'),
(5, 1, '2021-07-13 12:12:07', '2021-07-13 12:16:11'),
(6, 1, '2021-07-13 12:14:56', '2021-07-13 12:16:11'),
(7, 1, '2021-07-13 12:15:32', '2021-07-13 12:16:11'),
(8, 1, '2021-07-13 12:25:57', '0000-00-00 00:00:00'),
(9, 1, '2021-07-13 12:30:02', '2021-07-13 12:30:12'),
(10, 1, '2021-07-14 09:36:01', '2021-07-14 11:24:32'),
(11, 1, '2021-07-14 11:24:40', '0000-00-00 00:00:00'),
(12, 1, '2021-07-14 18:49:59', '0000-00-00 00:00:00'),
(13, 1, '2021-07-15 12:03:55', '2021-07-15 13:44:12'),
(14, 1, '2021-07-16 10:32:53', '0000-00-00 00:00:00'),
(15, 1, '2021-07-16 10:39:20', '0000-00-00 00:00:00'),
(16, 1, '2021-07-16 12:20:10', '0000-00-00 00:00:00'),
(17, 1, '2021-07-24 10:30:37', '0000-00-00 00:00:00'),
(18, 1, '2021-07-29 13:41:22', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `orderproduct`
--

CREATE TABLE `orderproduct` (
  `idOrder` int(11) NOT NULL,
  `idProduct` int(11) NOT NULL,
  `Date` datetime NOT NULL,
  `emailUser` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `orderproduct`
--

INSERT INTO `orderproduct` (`idOrder`, `idProduct`, `Date`, `emailUser`) VALUES
(1, 1, '2021-07-14 11:29:35', 'marcelo@gmail.com'),
(2, 1, '2021-07-14 11:32:35', 'marcelo@gmail.com'),
(3, 2, '2021-07-14 11:36:44', 'marcelo@gmail.com'),
(4, 2, '2021-07-14 11:36:50', 'marcelo@gmail.com'),
(5, 4, '2021-07-14 11:37:33', 'marcelo@gmail.com'),
(6, 6, '2021-07-14 11:37:56', 'marcelo@gmail.com'),
(7, 4, '2021-07-14 11:38:38', 'marcelo@gmail.com'),
(8, 6, '2021-07-14 11:39:23', 'marcelo@gmail.com'),
(9, 7, '2021-07-14 11:40:26', 'marcelo@gmail.com'),
(10, 6, '2021-07-14 11:41:15', 'marcelo@gmail.com'),
(11, 7, '2021-07-14 11:41:56', 'marcelo@gmail.com'),
(12, 7, '2021-07-14 18:50:28', 'marcelo@gmail.com'),
(13, 1, '2021-07-14 21:18:34', 'marcelo@gmail.com'),
(14, 1, '2021-07-15 12:10:37', 'marcelo@gmail.com'),
(15, 1, '2021-07-15 12:13:18', 'marcelo@gmail.com'),
(16, 1, '2021-07-15 12:13:28', 'marcelo@gmail.com'),
(17, 1, '2021-07-15 12:13:47', 'marcelo@gmail.com'),
(18, 1, '2021-07-15 12:15:32', 'marcelo@gmail.com'),
(19, 1, '2021-07-15 12:17:06', 'marcelo@gmail.com'),
(20, 1, '2021-07-15 12:17:29', 'marcelo@gmail.com'),
(21, 1, '2021-07-15 12:17:45', 'marcelo@gmail.com'),
(22, 2, '2021-07-16 12:28:27', ''),
(23, 1, '2021-07-16 12:29:37', 'marcelo@gmail.com'),
(24, 1, '2021-07-16 12:32:12', 'marcelo@gmail.com'),
(25, 1, '2021-07-16 14:50:36', 'marcelo@gmail.com'),
(26, 1, '2021-07-16 15:23:29', 'marcelo@gmail.com'),
(27, 1, '2021-07-16 15:58:47', 'marcelo@gmail.com'),
(28, 1, '2021-07-16 16:00:20', 'marcelo@gmail.com'),
(29, 1, '2021-07-16 16:10:18', 'marcelo@gmail.com'),
(30, 1, '2021-07-16 16:22:58', 'marcelo@gmail.com'),
(31, 1, '2021-07-16 16:27:29', 'marcelo@gmail.com'),
(32, 1, '2021-07-16 17:10:25', 'marcelo@gmail.com'),
(33, 1, '2021-07-16 17:11:51', 'marcelo@gmail.com'),
(34, 1, '2021-07-16 17:35:28', 'marcelo@gmail.com'),
(35, 2, '2021-07-24 10:30:43', 'marcelo@gmail.com'),
(36, 2, '2021-07-24 10:32:55', 'marcelo@gmail.com'),
(37, 2, '2021-07-24 10:34:43', 'marcelo@gmail.com'),
(38, 2, '2021-07-24 10:37:50', 'marcelo@gmail.com'),
(39, 2, '2021-07-24 10:38:42', 'marcelo@gmail.com'),
(40, 2, '2021-07-24 10:39:27', 'marcelo@gmail.com'),
(41, 3, '2021-07-24 10:40:26', 'marcelo@gmail.com'),
(42, 2, '2021-07-24 10:41:41', 'marcelo@gmail.com'),
(43, 2, '2021-07-24 10:42:11', 'marcelo@gmail.com'),
(44, 2, '2021-07-24 10:43:03', 'marcelo@gmail.com'),
(45, 2, '2021-07-24 10:46:13', 'marcelo@gmail.com'),
(46, 2, '2021-07-24 10:46:36', 'marcelo@gmail.com'),
(47, 3, '2021-07-24 10:46:49', 'marcelo@gmail.com'),
(48, 3, '2021-07-24 10:47:59', 'marcelo@gmail.com'),
(49, 3, '2021-07-24 10:50:47', 'marcelo@gmail.com'),
(50, 3, '2021-07-24 10:55:02', 'marcelo@gmail.com'),
(51, 5, '2021-07-24 10:55:38', 'marcelo@gmail.com'),
(52, 5, '2021-07-24 10:56:01', 'marcelo@gmail.com'),
(53, 3, '2021-07-24 10:56:49', 'marcelo@gmail.com'),
(54, 3, '2021-07-24 10:58:12', 'marcelo@gmail.com'),
(55, 7, '2021-07-24 10:58:17', 'marcelo@gmail.com'),
(56, 7, '2021-07-24 10:58:24', 'marcelo@gmail.com'),
(57, 8, '2021-07-24 10:58:39', 'marcelo@gmail.com'),
(58, 3, '2021-07-24 10:58:45', 'marcelo@gmail.com'),
(59, 7, '2021-07-24 10:59:40', 'marcelo@gmail.com'),
(60, 3, '2021-07-24 10:59:48', 'marcelo@gmail.com'),
(61, 3, '2021-07-24 11:00:46', 'marcelo@gmail.com'),
(62, 3, '2021-07-24 11:03:33', 'marcelo@gmail.com'),
(63, 3, '2021-07-24 11:06:24', 'marcelo@gmail.com'),
(64, 8, '2021-07-24 11:10:21', 'marcelo@gmail.com'),
(65, 8, '2021-07-24 11:11:35', 'marcelo@gmail.com'),
(66, 1, '2021-07-24 11:12:14', 'marcelo@gmail.com'),
(67, 1, '2021-07-24 11:13:13', 'marcelo@gmail.com'),
(68, 1, '2021-07-24 11:17:15', 'marcelo@gmail.com'),
(69, 1, '2021-07-24 11:17:50', 'marcelo@gmail.com'),
(70, 1, '2021-07-24 11:18:48', 'marcelo@gmail.com'),
(71, 1, '2021-07-24 11:20:53', 'marcelo@gmail.com'),
(72, 1, '2021-07-24 11:21:31', 'marcelo@gmail.com'),
(73, 1, '2021-07-24 11:22:28', 'marcelo@gmail.com'),
(74, 1, '2021-07-24 11:22:32', 'marcelo@gmail.com'),
(75, 1, '2021-07-24 11:22:40', 'marcelo@gmail.com'),
(76, 1, '2021-07-24 11:22:44', 'marcelo@gmail.com'),
(77, 1, '2021-07-24 11:22:48', 'marcelo@gmail.com'),
(78, 1, '2021-07-24 11:22:52', 'marcelo@gmail.com'),
(79, 1, '2021-07-24 11:26:41', 'marcelo@gmail.com'),
(80, 1, '2021-07-24 11:26:51', 'marcelo@gmail.com'),
(81, 2, '2021-07-24 11:40:03', 'marcelo@gmail.com'),
(82, 2, '2021-07-24 11:40:07', 'marcelo@gmail.com'),
(83, 2, '2021-07-24 11:40:11', 'marcelo@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `product`
--

CREATE TABLE `product` (
  `idProduct` int(10) UNSIGNED NOT NULL,
  `nameProduct` varchar(60) NOT NULL,
  `Barcode` bigint(13) NOT NULL,
  `Price` decimal(10,2) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `product`
--

INSERT INTO `product` (`idProduct`, `nameProduct`, `Barcode`, `Price`) VALUES
(1, 'banana', 1234567891230, '5.00'),
(2, 'Memory ram', 9876543210123, '250.00'),
(3, 'Knife', 1478523690159, '50.00'),
(4, 'ps5', 3698521470357, '5000.00'),
(5, 'keyboard', 7891234560741, '300.00'),
(6, 'mouse gamer', 9517534862055, '130.00'),
(7, 'Notebook gamer', 7896321450564, '4.00'),
(8, 'mp5', 9993331117770, '1200.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `state`
--

CREATE TABLE `state` (
  `idState` int(11) NOT NULL,
  `abbreviateState` char(2) NOT NULL,
  `nameState` varchar(60) NOT NULL,
  `idCountry` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `state`
--

INSERT INTO `state` (`idState`, `abbreviateState`, `nameState`, `idCountry`) VALUES
(1, 'RS', 'Rio Grande do Sul', 1),
(3, 'RS', 'Bahia', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `stock`
--

CREATE TABLE `stock` (
  `idStock` int(10) UNSIGNED NOT NULL,
  `idProduct` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `stock`
--

INSERT INTO `stock` (`idStock`, `idProduct`, `amount`) VALUES
(1, 1, 1),
(2, 2, 0),
(3, 3, 0),
(4, 4, 0),
(5, 5, 0),
(6, 6, 0),
(7, 7, 0),
(8, 8, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `emailUser` varchar(60) NOT NULL,
  `passwordUser` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`idUser`, `emailUser`, `passwordUser`) VALUES
(1, 'marcelo@gmail.com', 'senha123');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`idCity`);

--
-- Índices para tabela `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idClient`);

--
-- Índices para tabela `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`idCountry`);

--
-- Índices para tabela `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`idGender`);

--
-- Índices para tabela `logindate`
--
ALTER TABLE `logindate`
  ADD PRIMARY KEY (`idDate`);

--
-- Índices para tabela `orderproduct`
--
ALTER TABLE `orderproduct`
  ADD PRIMARY KEY (`idOrder`);

--
-- Índices para tabela `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`idProduct`);

--
-- Índices para tabela `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`idState`);

--
-- Índices para tabela `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`idStock`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `city`
--
ALTER TABLE `city`
  MODIFY `idCity` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `client`
--
ALTER TABLE `client`
  MODIFY `idClient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `country`
--
ALTER TABLE `country`
  MODIFY `idCountry` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `gender`
--
ALTER TABLE `gender`
  MODIFY `idGender` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `logindate`
--
ALTER TABLE `logindate`
  MODIFY `idDate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `orderproduct`
--
ALTER TABLE `orderproduct`
  MODIFY `idOrder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT de tabela `product`
--
ALTER TABLE `product`
  MODIFY `idProduct` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `state`
--
ALTER TABLE `state`
  MODIFY `idState` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `stock`
--
ALTER TABLE `stock`
  MODIFY `idStock` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
