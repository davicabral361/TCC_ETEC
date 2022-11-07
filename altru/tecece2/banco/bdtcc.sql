-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Out-2022 às 16:43
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdtcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbadmin`
--

CREATE TABLE `tbadmin` (
  `idAdmin` int(11) NOT NULL,
  `nomeAdmin` varchar(100) NOT NULL,
  `emailAdmin` varchar(100) NOT NULL,
  `senhaAdmin` varchar(50) NOT NULL,
  `cpfAdmin` char(14) NOT NULL,
  `dataNascAdmin` date NOT NULL,
  `cepAdmin` char(9) NOT NULL,
  `estadoAdmin` varchar(40) NOT NULL,
  `cidadeAdmin` varchar(50) NOT NULL,
  `bairroAdmin` varchar(50) NOT NULL,
  `ruaAdmin` varchar(50) NOT NULL,
  `complementoAdmin` char(6) NOT NULL,
  `dataInscricao` datetime NOT NULL,
  `logradouroAdmin` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbdoacao`
--

CREATE TABLE `tbdoacao` (
  `idDoacao` int(11) NOT NULL,
  `dataDoacao` date DEFAULT NULL,
  `idOng` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbdoacao`
--

INSERT INTO `tbdoacao` (`idDoacao`, `dataDoacao`, `idOng`) VALUES
(7, '2022-10-14', 21),
(8, '2022-10-14', 21);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbdoador`
--

CREATE TABLE `tbdoador` (
  `idDoador` int(11) NOT NULL,
  `nomeDoador` varchar(40) DEFAULT NULL,
  `emailDoador` varchar(40) DEFAULT NULL,
  `cpfDoador` char(14) DEFAULT NULL,
  `dataNascDoador` date DEFAULT NULL,
  `cidadeDoador` varchar(40) DEFAULT NULL,
  `bairroDoador` varchar(40) DEFAULT NULL,
  `estadoDoador` varchar(40) DEFAULT NULL,
  `lugradouroDoador` varchar(40) DEFAULT NULL,
  `ruaDoador` varchar(40) DEFAULT NULL,
  `cepDoador` char(8) DEFAULT NULL,
  `complementoDoador` char(6) DEFAULT NULL,
  `senhaDoador` varchar(40) DEFAULT NULL,
  `datainscricao` datetime DEFAULT NULL,
  `atividade` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbitensdoacao`
--

CREATE TABLE `tbitensdoacao` (
  `idItensDoacao` int(11) NOT NULL,
  `quantidadeItensDoacao` varchar(40) DEFAULT NULL,
  `idDoacao` int(11) NOT NULL,
  `descItem` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbitensdoacao`
--

INSERT INTO `tbitensdoacao` (`idItensDoacao`, `quantidadeItensDoacao`, `idDoacao`, `descItem`) VALUES
(6, '12', 8, 'b');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbong`
--

CREATE TABLE `tbong` (
  `idOng` int(11) NOT NULL,
  `nomeOng` varchar(60) NOT NULL,
  `emailOng` varchar(60) NOT NULL,
  `senhaOng` varchar(40) NOT NULL,
  `dataNascOng` date NOT NULL,
  `estadoOng` varchar(20) NOT NULL,
  `cidadeOng` varchar(50) NOT NULL,
  `bairroOng` varchar(60) NOT NULL,
  `ruaOng` varchar(60) NOT NULL,
  `complementoOng` varchar(15) NOT NULL,
  `lugradouroOng` varchar(40) NOT NULL,
  `cepOng` char(8) NOT NULL,
  `atividade` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbong`
--

INSERT INTO `tbong` (`idOng`, `nomeOng`, `emailOng`, `senhaOng`, `dataNascOng`, `estadoOng`, `cidadeOng`, `bairroOng`, `ruaOng`, `complementoOng`, `lugradouroOng`, `cepOng`, `atividade`) VALUES
(21, 'abraham ong', 'abrahamong@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2022-09-28', 'dadaada', 'ddada', 'x', 'sasassasa', '280', 'a', '12345678', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbprestacaocontasong`
--

CREATE TABLE `tbprestacaocontasong` (
  `idPrestacaoContasOng` int(11) NOT NULL,
  `quantidadeItensRecebido` varchar(40) DEFAULT NULL,
  `descProdutosRecebidos` varchar(40) DEFAULT NULL,
  `dataRecebimento` date DEFAULT NULL,
  `fotoOng` varchar(1000) DEFAULT NULL,
  `fotoDoador` varchar(1000) DEFAULT NULL,
  `idOng` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbprestacaocontasong`
--

INSERT INTO `tbprestacaocontasong` (`idPrestacaoContasOng`, `quantidadeItensRecebido`, `descProdutosRecebidos`, `dataRecebimento`, `fotoOng`, `fotoDoador`, `idOng`) VALUES
(5, '20', 'blusas', '2022-10-03', NULL, NULL, 21);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbrespostausuario`
--

CREATE TABLE `tbrespostausuario` (
  `idRespostaUsuario` int(11) NOT NULL,
  `simOuNao` varchar(3) DEFAULT NULL,
  `idDoador` int(11) NOT NULL,
  `idDoacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbtelefonedoador`
--

CREATE TABLE `tbtelefonedoador` (
  `idtelefonedoador` int(11) NOT NULL,
  `telefonedoador` varchar(15) DEFAULT NULL,
  `atividade` tinyint(1) DEFAULT NULL,
  `iddoador` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbtelefoneong`
--

CREATE TABLE `tbtelefoneong` (
  `idTelefoneOng` int(11) NOT NULL,
  `telefoneOng` varchar(40) DEFAULT NULL,
  `atividade` tinyint(1) NOT NULL,
  `idOng` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura stand-in para vista `vwcalculardoador`
-- (Veja abaixo para a view atual)
--
CREATE TABLE `vwcalculardoador` (
`COUNT(iddoador)` bigint(21)
);

-- --------------------------------------------------------

--
-- Estrutura stand-in para vista `vwcalcularong`
-- (Veja abaixo para a view atual)
--
CREATE TABLE `vwcalcularong` (
`COUNT(idong)` bigint(21)
);

-- --------------------------------------------------------

--
-- Estrutura para vista `vwcalculardoador`
--
DROP TABLE IF EXISTS `vwcalculardoador`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vwcalculardoador`  AS SELECT count(`tbdoador`.`idDoador`) AS `COUNT(iddoador)` FROM `tbdoador` ;

-- --------------------------------------------------------

--
-- Estrutura para vista `vwcalcularong`
--
DROP TABLE IF EXISTS `vwcalcularong`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vwcalcularong`  AS SELECT count(`tbong`.`idOng`) AS `COUNT(idong)` FROM `tbong` ;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbadmin`
--
ALTER TABLE `tbadmin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Índices para tabela `tbdoacao`
--
ALTER TABLE `tbdoacao`
  ADD PRIMARY KEY (`idDoacao`),
  ADD KEY `idOng` (`idOng`);

--
-- Índices para tabela `tbdoador`
--
ALTER TABLE `tbdoador`
  ADD PRIMARY KEY (`idDoador`);

--
-- Índices para tabela `tbitensdoacao`
--
ALTER TABLE `tbitensdoacao`
  ADD PRIMARY KEY (`idItensDoacao`),
  ADD KEY `idDoacao` (`idDoacao`);

--
-- Índices para tabela `tbong`
--
ALTER TABLE `tbong`
  ADD PRIMARY KEY (`idOng`);

--
-- Índices para tabela `tbprestacaocontasong`
--
ALTER TABLE `tbprestacaocontasong`
  ADD PRIMARY KEY (`idPrestacaoContasOng`),
  ADD KEY `idOng` (`idOng`);

--
-- Índices para tabela `tbrespostausuario`
--
ALTER TABLE `tbrespostausuario`
  ADD PRIMARY KEY (`idRespostaUsuario`),
  ADD KEY `idDoador` (`idDoador`),
  ADD KEY `idDoacao` (`idDoacao`);

--
-- Índices para tabela `tbtelefonedoador`
--
ALTER TABLE `tbtelefonedoador`
  ADD PRIMARY KEY (`idtelefonedoador`),
  ADD KEY `iddoador` (`iddoador`);

--
-- Índices para tabela `tbtelefoneong`
--
ALTER TABLE `tbtelefoneong`
  ADD PRIMARY KEY (`idTelefoneOng`),
  ADD KEY `idOng` (`idOng`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbadmin`
--
ALTER TABLE `tbadmin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tbdoacao`
--
ALTER TABLE `tbdoacao`
  MODIFY `idDoacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tbdoador`
--
ALTER TABLE `tbdoador`
  MODIFY `idDoador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT de tabela `tbitensdoacao`
--
ALTER TABLE `tbitensdoacao`
  MODIFY `idItensDoacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbong`
--
ALTER TABLE `tbong`
  MODIFY `idOng` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `tbprestacaocontasong`
--
ALTER TABLE `tbprestacaocontasong`
  MODIFY `idPrestacaoContasOng` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tbrespostausuario`
--
ALTER TABLE `tbrespostausuario`
  MODIFY `idRespostaUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tbtelefonedoador`
--
ALTER TABLE `tbtelefonedoador`
  MODIFY `idtelefonedoador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tbtelefoneong`
--
ALTER TABLE `tbtelefoneong`
  MODIFY `idTelefoneOng` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbdoacao`
--
ALTER TABLE `tbdoacao`
  ADD CONSTRAINT `tbdoacao_ibfk_1` FOREIGN KEY (`idOng`) REFERENCES `tbong` (`idOng`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `tbitensdoacao`
--
ALTER TABLE `tbitensdoacao`
  ADD CONSTRAINT `tbitensdoacao_ibfk_1` FOREIGN KEY (`idDoacao`) REFERENCES `tbdoacao` (`idDoacao`);

--
-- Limitadores para a tabela `tbprestacaocontasong`
--
ALTER TABLE `tbprestacaocontasong`
  ADD CONSTRAINT `tbprestacaocontasong_ibfk_1` FOREIGN KEY (`idOng`) REFERENCES `tbong` (`idOng`);

--
-- Limitadores para a tabela `tbrespostausuario`
--
ALTER TABLE `tbrespostausuario`
  ADD CONSTRAINT `idDoacao` FOREIGN KEY (`idDoacao`) REFERENCES `tbdoacao` (`idDoacao`) ON UPDATE CASCADE,
  ADD CONSTRAINT `idDoador` FOREIGN KEY (`idDoador`) REFERENCES `tbdoador` (`idDoador`);

--
-- Limitadores para a tabela `tbtelefonedoador`
--
ALTER TABLE `tbtelefonedoador`
  ADD CONSTRAINT `tbtelefonedoador_ibfk_1` FOREIGN KEY (`iddoador`) REFERENCES `tbdoador` (`idDoador`);

--
-- Limitadores para a tabela `tbtelefoneong`
--
ALTER TABLE `tbtelefoneong`
  ADD CONSTRAINT `tbtelefoneong_ibfk_1` FOREIGN KEY (`idOng`) REFERENCES `tbong` (`idOng`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
