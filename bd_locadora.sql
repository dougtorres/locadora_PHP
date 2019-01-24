-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03-Fev-2015 às 01:12
-- Versão do servidor: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bd_locadora`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculos`
--

CREATE TABLE IF NOT EXISTS `veiculos` (
`id` int(255) NOT NULL,
  `Marca` varchar(20) NOT NULL,
  `Modelo` varchar(20) NOT NULL,
  `Ano` int(4) NOT NULL,
  `Cor` varchar(15) NOT NULL,
  `Ar_condicionado` varchar(20) DEFAULT NULL,
  `Hidraulica` varchar(20) DEFAULT NULL,
  `Vidro_eletrico` varchar(20) DEFAULT NULL,
  `Som` varchar(20) DEFAULT NULL,
  `Combustivel` varchar(10) DEFAULT NULL,
  `Portas` int(1) DEFAULT NULL,
  `Placa` varchar(10) NOT NULL,
  `Diaria` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `veiculos`
--

INSERT INTO `veiculos` (`id`, `Marca`, `Modelo`, `Ano`, `Cor`, `Ar_condicionado`, `Hidraulica`, `Vidro_eletrico`, `Som`, `Combustivel`, `Portas`, `Placa`, `Diaria`) VALUES
(1, 'Fiat', 'Uno', 2010, 'Prata', 'Sim', 'Não', 'Não', 'Não', 'Flex', 4, 'MHO-1206', 80);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `veiculos`
--
ALTER TABLE `veiculos`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `veiculos`
--
ALTER TABLE `veiculos`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
