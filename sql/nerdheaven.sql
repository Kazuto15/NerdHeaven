-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Nov-2023 às 21:03
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `nerdheaven`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbadmin`
--

CREATE TABLE `tbadmin` (
  `idAdmin` int(11) NOT NULL,
  `nomeAdmin` varchar(20) NOT NULL,
  `sobrenomeAdmin` varchar(50) NOT NULL,
  `cpfAdmin` char(14) NOT NULL,
  `nascAdmin` date NOT NULL,
  `emailAdmin` varchar(70) NOT NULL,
  `senhaAdmin` varchar(20) NOT NULL,
  `imagemAdmin` varchar(70) NOT NULL,
  `tokenAdmin` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `tbadmin`
--

INSERT INTO `tbadmin` (`idAdmin`, `nomeAdmin`, `sobrenomeAdmin`, `cpfAdmin`, `nascAdmin`, `emailAdmin`, `senhaAdmin`, `imagemAdmin`, `tokenAdmin`) VALUES
(1, 'Raphael', 'Maia', '657.687.983-56', '2023-11-11', 'Raphael@gmail.com', 'ffgfgfgfgfg', '31a07b37319ed1fd99802dc1e42a2589', '1d1d756089e121e79dd1c39e0d72edae.jpg'),
(3, 'Guilherme', 'Mesquita', '766.787.898-78', '2023-11-11', 'guilherme@gmail.com', 'hguiljerm', 'eda1045128c44e71c22e51e8d7c6a19f', '2f8f9bafacd88d10af05c95a38900a5a.jpg'),
(4, 'Clebinho', 'do pneu', '630.897.589-69', '2023-11-11', 'Clebinhodopneus@gmail.com', 'montadordeporco', 'f37c488b35d72fb00d379227b5001252', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcategoria`
--

CREATE TABLE `tbcategoria` (
  `idCategoria` int(11) NOT NULL,
  `nomeCategoria` varchar(50) NOT NULL,
  `descCategoria` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `tbcategoria`
--

INSERT INTO `tbcategoria` (`idCategoria`, `nomeCategoria`, `descCategoria`) VALUES
(2, 'Funko Pop', 'Uma série de pequenos bonecos de personagens'),
(4, 'Camisa', 'Camisas de qualquer tamanho e para qualquer gênero'),
(5, 'Quadros', 'Quadros decorativos de personagens ou ambientes '),
(6, 'Colecionáveis', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbproduto`
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
-- Extraindo dados da tabela `tbproduto`
--

INSERT INTO `tbproduto` (`idProduto`, `nomeProduto`, `descProduto`, `precoProduto`, `qntdProduto`, `imagemProduto`, `idCategoria`) VALUES
(8, 'Pelúcia do cavaleiro vazio', 'hollow Knight', 150.00, 2, '59c3596a811007223229a6824e1389c6.jpg', 6),
(9, 'Caneca da pon Genshin', 'Genshin Impact', 150.00, 20, '4eed049003d46a5f9446cc800d844130.jpg', 2),
(10, 'Funko Pop Charmander', 'Funko pop do pokémon charmander do anime pokémon. Um dos iniciais de Kanto', 90.00, 100, '2d560ed0750a4ad38d0d474717444e16.jpg', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbuser`
--

CREATE TABLE `tbuser` (
  `idUser` int(11) NOT NULL,
  `nomeUser` varchar(15) DEFAULT NULL,
  `sobrenomeUser` varchar(50) DEFAULT NULL,
  `cpfUser` char(14) DEFAULT NULL,
  `nascUser` date DEFAULT NULL,
  `emailUser` varchar(70) DEFAULT NULL,
  `senhaUser` varchar(20) DEFAULT NULL,
  `imagemUser` varchar(50) DEFAULT NULL,
  `tokenUser` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `tbuser`
--

INSERT INTO `tbuser` (`idUser`, `nomeUser`, `sobrenomeUser`, `cpfUser`, `nascUser`, `emailUser`, `senhaUser`, `imagemUser`, `tokenUser`) VALUES
(4, 'Kauã', 'Barbosa', '123.456.789-10', '2006-08-26', 'kaua@gmail.com', '123456', '9258ab4037b3b8659115a9fd94efb582.jpg', '3c1c413ada4e47b37679340cf1bc99fe'),
(5, 'Guilherme', 'Mesquita', '676.546.845-76', '2023-11-17', 'guilherme@gmail.com', 't6gfgjfdfh', '', 'c4bdb268f5377006c29c946243aaeb01'),
(6, 'matheus', 'merlim', '676.546.763-56', '6532-07-06', 'merlim@com', '65434hghg', '82c70233c6a8c9e0b93e5703d1ecf7cd', 'acd55fe028477aad751dc134e8d99f66'),
(7, 'Roberto', 'Bolanos', '454.546.565-77', '1929-02-21', 'Chaves@gmail.com', '124644346', 'a830faf779a48a49d8381fc33304c590', 'd31ed50ba96935be8ad0caa0b6222045'),
(10, 'Leandro', 'Moura', '678.997.809-45', '2023-11-11', 'leandro@gmail.com', '545656565454', 'd727d8d355970b75251e62ec6351da12', '91e94017d61acec744b5bf1ba110b75e'),
(11, 'Izauldi', 'Mesquita', '698.685.969-56', '2023-11-16', 'Izauldi@gmail.com', '5885878578776', '2f49489c9d649e2479137ff952e0504e', '36d89cb40642e3fef0ef6f6601c1ae51');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbadmin`
--
ALTER TABLE `tbadmin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Índices para tabela `tbcategoria`
--
ALTER TABLE `tbcategoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Índices para tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  ADD PRIMARY KEY (`idProduto`),
  ADD KEY `categoriaProduto` (`idCategoria`);

--
-- Índices para tabela `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbadmin`
--
ALTER TABLE `tbadmin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tbcategoria`
--
ALTER TABLE `tbcategoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  MODIFY `idProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  ADD CONSTRAINT `categoriaProduto` FOREIGN KEY (`idCategoria`) REFERENCES `tbcategoria` (`idCategoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
