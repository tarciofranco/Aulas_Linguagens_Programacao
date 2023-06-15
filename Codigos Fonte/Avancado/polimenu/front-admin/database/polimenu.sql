-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 15-Jun-2023 às 20:06
-- Versão do servidor: 8.0.33-0ubuntu0.20.04.1
-- versão do PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `polimenu`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cardapio`
--

CREATE TABLE `cardapio` (
  `id` int NOT NULL,
  `nome` varchar(45) COLLATE utf8mb4_bin NOT NULL,
  `descricao` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usuario` int NOT NULL,
  `ativo` enum('A','I') COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `cardapio`
--

INSERT INTO `cardapio` (`id`, `nome`, `descricao`, `data`, `usuario`, `ativo`) VALUES
(6, 'Arroz Colorido', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It .', '2023-04-03 22:30:49', 1, 'A'),
(10, 'Feijoada', 'Feijao, Farinha, Carne de Porco', '2023-04-13 22:22:20', 1, 'A'),
(11, 'Macarronada', 'Macarrao seco', '2023-04-13 22:23:47', 1, 'A'),
(12, 'Outro Cardapio', 'Outras coisas', '2023-04-13 22:34:04', 1, 'A'),
(13, 'Omeletão', 'Ovo, Queijo, Bacon, Cebolinha, Sal, Pimenta do Reino', '2023-04-13 22:35:33', 1, 'A'),
(14, 'Cardapio', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It .', '2023-04-17 21:38:40', 1, 'I'),
(15, '', '', '2023-04-17 21:39:56', 1, 'I'),
(16, '', '', '2023-04-17 21:40:30', 1, 'I'),
(17, 'Cardarpio de Segunda', 'Bacon e Feijão', '2023-04-17 21:41:00', 1, 'A'),
(18, 'Cardarpio de Segunda', 'Molho branco, queijo, bacon', '2023-04-17 21:44:07', 1, 'A'),
(19, 'Cardarpio de Segunda', 'Molho branco, queijo, bacon', '2023-04-17 21:44:07', 1, 'A'),
(20, 'Macarrão', 'De maneira simples, posso escrever uma requisição assíncrona como:', '2023-04-28 00:53:49', 1, 'A'),
(21, '', '', '2023-04-28 01:17:45', 1, 'A'),
(22, 'Lorem Ipsum', ' is simply dummy ', '2023-05-08 21:40:54', 1, 'A'),
(23, '', '', '2023-05-08 21:41:54', 1, 'A'),
(24, '', '', '2023-05-08 21:44:34', 1, 'A'),
(25, '', '', '2023-05-08 21:44:44', 1, 'A'),
(26, '', '', '2023-05-08 21:48:30', 1, 'A'),
(27, 'Lorem Ipsum', 'is simply dummy text of the printing and typesettin', '2023-05-08 21:53:18', 1, 'A'),
(28, 'Lorem Ipsum', 'is simply dummy text of the printing and typesettin', '2023-05-08 21:54:18', 1, 'A'),
(29, 'Outro Cardapio', 'dasdasda', '2023-05-08 21:54:23', 1, 'A'),
(30, '', '', '2023-05-08 21:55:17', 1, 'A');

-- --------------------------------------------------------

--
-- Estrutura da tabela `curtidas`
--

CREATE TABLE `curtidas` (
  `id` int NOT NULL,
  `cardapio` int NOT NULL,
  `gostei` int NOT NULL DEFAULT '0',
  `naogostei` int DEFAULT '0',
  `status` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `curtidas`
--

INSERT INTO `curtidas` (`id`, `cardapio`, `gostei`, `naogostei`, `status`) VALUES
(6, 6, 37, 13, 1),
(7, 10, 4, 3, 1),
(8, 11, 6, 8, 1),
(9, 28, 1, 0, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cardapio`
--
ALTER TABLE `cardapio`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `curtidas`
--
ALTER TABLE `curtidas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cardapio`
--
ALTER TABLE `cardapio`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `curtidas`
--
ALTER TABLE `curtidas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
