-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08/12/2023 às 04:10
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `nerdheaven1.1`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbproduto`
--

CREATE TABLE `tbproduto` (
  `idProduto` int(11) NOT NULL,
  `nomeProduto` varchar(200) DEFAULT NULL,
  `descProduto` text NOT NULL,
  `precoProduto` decimal(10,2) DEFAULT NULL,
  `qntdProduto` int(11) NOT NULL,
  `imagemProduto` varchar(70) NOT NULL,
  `idCategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `tbproduto`
--

INSERT INTO `tbproduto` (`idProduto`, `nomeProduto`, `descProduto`, `precoProduto`, `qntdProduto`, `imagemProduto`, `idCategoria`) VALUES
(8, 'Pelúcia do cavaleiro vazio', 'hollow Knight', 150.00, 2, '59c3596a811007223229a6824e1389c6.jpg', 6),
(9, 'Caneca da pon Genshin', 'Genshin Impact', 150.00, 20, '4eed049003d46a5f9446cc800d844130.jpg', 2),
(10, 'Funko Pop Charmander', 'Funko pop do pokémon charmander do anime pokémon. Um dos iniciais de Kanto', 90.00, 100, '2d560ed0750a4ad38d0d474717444e16.jpg', 2),
(11, 'Camisa da casa de Corvinal ', 'Uma camisa de algodão e poliester, com o simbolo de Corvinal em alto relevo', 65.00, 200, '', 4),
(12, 'Funko Pop do Luffy', 'Um Funko Pop do Monkey D. Luffy personagem do anime One Piece', 110.00, 70, 'd996e2ecab4b1b871f6557355787fc86.jpg', 2),
(13, 'Funko Pop do Kratos', 'Personagem da franquia de jogos God of War', 150.00, 40, '7c7e16a5d4630fcf0b27a6890a58204c.jpg', 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  ADD PRIMARY KEY (`idProduto`),
  ADD KEY `categoriaProduto` (`idCategoria`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  MODIFY `idProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tbproduto`
--
ALTER TABLE `tbproduto`
  ADD CONSTRAINT `categoriaProduto` FOREIGN KEY (`idCategoria`) REFERENCES `tbcategoria` (`idCategoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
