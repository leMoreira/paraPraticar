-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 17-Nov-2024 às 21:44
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `viagens`
--
CREATE DATABASE IF NOT EXISTS `viagens` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `viagens`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `capa`
--

CREATE TABLE `capa` (
  `id` int(11) NOT NULL,
  `titulo` varchar(70) NOT NULL,
  `dias` int(11) NOT NULL,
  `capa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `capa`
--

INSERT INTO `capa` (`id`, `titulo`, `dias`, `capa`) VALUES
(1, 'Relatório Coordenação de Laboratório', 5, 'images/a78e1a0ba3cb5f0c31c43956f68f3390.png'),
(2, 'Relatório Coordenação de Laboratório', 5, 'images/59fa6751a9f314dab59aa556b0ee1ea5.png'),
(3, 'Relatório Coordenação de Laboratório', 5, 'images/fea3a88d638cf8d02c38fe6206fb070c.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos`
--

CREATE TABLE `fotos` (
  `id` int(11) NOT NULL,
  `id_capa` INT NOT NULL,
  `comentario` varchar(100) NOT NULL,
  `desc_imagem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `capa`
--
ALTER TABLE `capa`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `capa`
--
ALTER TABLE `capa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
