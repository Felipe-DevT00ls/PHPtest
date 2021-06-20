-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Jun-2021 às 19:16
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
-- Banco de dados: `apicep`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cep`
--

CREATE TABLE `cep` (
  `id` int(11) NOT NULL,
  `cep` varchar(50) NOT NULL,
  `logadouro` varchar(150) NOT NULL,
  `complemento` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `localidade` varchar(150) NOT NULL,
  `uf` varchar(10) NOT NULL,
  `ibge` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `ddd` int(10) NOT NULL,
  `siafi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cep`
--

INSERT INTO `cep` (`id`, `cep`, `logadouro`, `complemento`, `bairro`, `localidade`, `uf`, `ibge`, `gia`, `ddd`, `siafi`) VALUES
(1, '01001-000', 'Praça da Sé', 'lado ímpar', 'Sé', 'São Paulo', 'SP', 3550308, 1004, 11, 7107),
(5, '65110-000', '', '', '', 'São José de Ribamar', 'MA', 2111201, 0, 98, 889),
(18, '65300-219', 'Travessa da Petrobrás', '', 'Barreirinha', 'Santa Inês', 'MA', 2109908, 0, 98, 957);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cep`
--
ALTER TABLE `cep`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cep`
--
ALTER TABLE `cep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
