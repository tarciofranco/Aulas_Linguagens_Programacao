-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 15-Jun-2023 às 21:47
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
  `ativo` enum('A','I') COLLATE utf8mb4_bin NOT NULL,
  `num_semana` int DEFAULT NULL,
  `dia_semana` enum('SEGUNDA-FEIRA','TERÇA-FEIRA','QUARTA-FEIRA','QUINTA-FEIRA','SEXTA-FEIRA') COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `cardapio`
--

INSERT INTO `cardapio` (`id`, `nome`, `descricao`, `data`, `usuario`, `ativo`, `num_semana`, `dia_semana`) VALUES
(31, 'Cardapio 4', 'Macarronada a Bolonhesa', '2023-06-15 23:19:46', 1, 'A', 1, 'SEGUNDA-FEIRA'),
(32, 'Cardapio 3', 'Feijoada Light e Arroz ', '2023-06-15 23:19:46', 1, 'A', 2, 'SEGUNDA-FEIRA'),
(33, 'Cardapio 2', 'Sopa de Mandioca com Frango e Arroz ', '2023-06-15 23:19:46', 1, 'A', 1, 'TERÇA-FEIRA'),
(34, 'Cardapio18', 'Carne Moida com Batatas, Arroz e Feijão', '2023-06-15 23:19:46', 1, 'A', 3, 'SEGUNDA-FEIRA'),
(35, 'Cardapio 71', 'Tutu de Feijão com Molho de Carne , Ovos e Hortaliças ', '2023-06-15 23:19:46', 1, 'A', 1, 'QUARTA-FEIRA'),
(36, 'Cardapio 1', 'Arroz á Grega com Frango + Frutas', '2023-06-15 23:19:46', 1, 'A', 2, 'TERÇA-FEIRA'),
(37, 'Cardapio 5', 'Salada de Macarrão e Melão em Cubos', '2023-06-15 23:19:46', 1, 'A', 1, 'QUINTA-FEIRA'),
(38, 'Cardapio 9', 'Vaca Atolada com Arroz', '2023-06-15 23:19:46', 1, 'A', 1, 'SEXTA-FEIRA');

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
(10, 33, 4, 1, 1),
(11, 36, 6, 0, 1);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de tabela `curtidas`
--
ALTER TABLE `curtidas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
