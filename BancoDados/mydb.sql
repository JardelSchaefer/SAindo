-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Nov-2019 às 04:36
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mydb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cronometagem`
--

CREATE TABLE `cronometagem` (
  `codcro` int(11) NOT NULL,
  `numdecro` int(11) NOT NULL,
  `numleicro` int(11) NOT NULL,
  `tempo` double NOT NULL,
  `tomadaDeTempo_codtom` int(11) NOT NULL,
  `tomadaDeTempo_Operacao_codope` int(11) NOT NULL,
  `tomadaDeTempo_Operacao_produto_codpro` int(11) NOT NULL,
  `elemento_codele` int(11) NOT NULL,
  `elemento_Operacao_codope` int(11) NOT NULL,
  `elemento_Operacao_produto_codpro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `elemento`
--

CREATE TABLE `elemento` (
  `codele` int(11) NOT NULL,
  `Operacao_codope` int(11) NOT NULL,
  `Operacao_produto_codpro` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `ritmo` double NOT NULL,
  `interferencia` double NOT NULL,
  `concessoes` double NOT NULL,
  `qtdVezes` int(11) NOT NULL DEFAULT 1,
  `porPeca` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `operacao`
--

CREATE TABLE `operacao` (
  `codope` int(11) NOT NULL,
  `produto_codpro` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `maquina` varchar(45) NOT NULL,
  `tipoEstudo` varchar(45) NOT NULL,
  `cronometista` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `codpro` int(11) NOT NULL,
  `nome` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`codpro`, `nome`) VALUES
(1, 'Monitor'),
(2, 'CPU');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tomadadetempo`
--

CREATE TABLE `tomadadetempo` (
  `codtom` int(11) NOT NULL,
  `Operacao_codope` int(11) NOT NULL,
  `produtoId` int(11) NOT NULL,
  `numeroLeitura` varchar(45) NOT NULL,
  `data` date NOT NULL,
  `tomadaDeTempocol` varchar(45) NOT NULL,
  `operador` varchar(45) NOT NULL,
  `obs` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cronometagem`
--
ALTER TABLE `cronometagem`
  ADD PRIMARY KEY (`codcro`,`numdecro`,`tomadaDeTempo_codtom`,`tomadaDeTempo_Operacao_codope`,`tomadaDeTempo_Operacao_produto_codpro`,`elemento_codele`,`elemento_Operacao_codope`,`elemento_Operacao_produto_codpro`),
  ADD KEY `fk_cronometagem_tomadaDeTempo1` (`tomadaDeTempo_codtom`,`tomadaDeTempo_Operacao_codope`,`tomadaDeTempo_Operacao_produto_codpro`),
  ADD KEY `fk_cronometagem_elemento1` (`elemento_codele`,`elemento_Operacao_codope`,`elemento_Operacao_produto_codpro`);

--
-- Índices para tabela `elemento`
--
ALTER TABLE `elemento`
  ADD PRIMARY KEY (`codele`,`Operacao_codope`,`Operacao_produto_codpro`),
  ADD KEY `fk_elemento_Operacao1` (`Operacao_codope`,`Operacao_produto_codpro`);

--
-- Índices para tabela `operacao`
--
ALTER TABLE `operacao`
  ADD PRIMARY KEY (`codope`,`produto_codpro`),
  ADD KEY `fk_Operacao_produto` (`produto_codpro`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`codpro`);

--
-- Índices para tabela `tomadadetempo`
--
ALTER TABLE `tomadadetempo`
  ADD PRIMARY KEY (`codtom`,`Operacao_codope`,`produtoId`),
  ADD KEY `fk_tomadaDeTempo_Operacao1` (`Operacao_codope`,`produtoId`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cronometagem`
--
ALTER TABLE `cronometagem`
  MODIFY `codcro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `elemento`
--
ALTER TABLE `elemento`
  MODIFY `codele` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `operacao`
--
ALTER TABLE `operacao`
  MODIFY `codope` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `codpro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tomadadetempo`
--
ALTER TABLE `tomadadetempo`
  MODIFY `codtom` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `cronometagem`
--
ALTER TABLE `cronometagem`
  ADD CONSTRAINT `fk_cronometagem_elemento1` FOREIGN KEY (`elemento_codele`,`elemento_Operacao_codope`,`elemento_Operacao_produto_codpro`) REFERENCES `elemento` (`codele`, `Operacao_codope`, `Operacao_produto_codpro`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cronometagem_tomadaDeTempo1` FOREIGN KEY (`tomadaDeTempo_codtom`,`tomadaDeTempo_Operacao_codope`,`tomadaDeTempo_Operacao_produto_codpro`) REFERENCES `tomadadetempo` (`codtom`, `Operacao_codope`, `produtoId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `elemento`
--
ALTER TABLE `elemento`
  ADD CONSTRAINT `fk_elemento_Operacao1` FOREIGN KEY (`Operacao_codope`,`Operacao_produto_codpro`) REFERENCES `operacao` (`codope`, `produto_codpro`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `operacao`
--
ALTER TABLE `operacao`
  ADD CONSTRAINT `fk_Operacao_produto` FOREIGN KEY (`produto_codpro`) REFERENCES `produto` (`codpro`);

--
-- Limitadores para a tabela `tomadadetempo`
--
ALTER TABLE `tomadadetempo`
  ADD CONSTRAINT `fk_tomadaDeTempo_Operacao1` FOREIGN KEY (`Operacao_codope`,`produtoId`) REFERENCES `operacao` (`codope`, `produto_codpro`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
