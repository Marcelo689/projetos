-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Jul-2021 às 00:40
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

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
(12, 'Marcelo', 2, 2, 2, 0, 0),
(14, 'ggfhghgf', 5, 1, 1, 0, 0),
(15, 'f', 2, 1, 1, 1, 1),
(16, 'Joao', 25, 1, 1, 0, 0),
(17, 'Maria', 222, 2, 3, 0, 0);

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
(2, 'Feminino', 'F'),
(5, 'Masculino', 'M'),
(6, 'Feminino', 'M');

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
(13, 1, '2021-07-15 18:59:15', '0000-00-00 00:00:00');

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
(14, 1, '2021-07-15 19:06:24', 'marcelo@gmail.com');

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
(8, 'mp5', 9993331117770, '1200.00'),
(9, 'banana', 1234567891230, '5.00'),
(10, 'Memory ram', 9876543210123, '250.00'),
(11, 'Knife', 1478523690159, '50.00'),
(12, 'ps5', 3698521470357, '5000.00'),
(13, 'keyboard', 7891234560741, '300.00'),
(14, 'mouse gamer', 9517534862055, '130.30'),
(15, 'Notebook gamer', 7896321450564, '4.50'),
(16, 'mp5', 9993331117770, '1200.00');

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
(1, 'RS', 'Rio Grande do Sul', 1);

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
(1, 1, 10),
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
  MODIFY `idClient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
  MODIFY `idDate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `orderproduct`
--
ALTER TABLE `orderproduct`
  MODIFY `idOrder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
