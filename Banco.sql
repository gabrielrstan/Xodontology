-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08-Jul-2019 às 13:48
-- Versão do servidor: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dentista`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_caixa`
--

CREATE TABLE IF NOT EXISTS `tb_caixa` (
`cai_codigo` int(11) NOT NULL,
  `CAI_VALOR` float(9,2) NOT NULL,
  `CAI_DATA` date NOT NULL,
  `CAI_PACIENTE` varchar(45) NOT NULL,
  `CAI_Detalhes` varchar(90) NOT NULL,
  `cai_pa_cpf` varchar(18) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_caixa_deb`
--

CREATE TABLE IF NOT EXISTS `tb_caixa_deb` (
`cai_deb_codigo` int(11) NOT NULL,
  `CAI_deb_VALOR` float(9,2) NOT NULL,
  `CAI_deb_DATA` date NOT NULL,
  `CAI_deb_MOTIVO` varchar(45) NOT NULL,
  `CAI_deb_Detalhes` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_consulta`
--

CREATE TABLE IF NOT EXISTS `tb_consulta` (
`CON_CODIGO` int(10) unsigned NOT NULL,
  `CON_DATA` date NOT NULL,
  `CON_HORA` time(6) NOT NULL,
  `CON_DENTISTA` varchar(45) NOT NULL,
  `CON_PACIENTE` varchar(45) NOT NULL,
  `con_pa_cpf` varchar(18) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_dentista`
--

CREATE TABLE IF NOT EXISTS `tb_dentista` (
`DEN_CODIGO` int(10) unsigned NOT NULL,
  `DEN_NOME` varchar(45) NOT NULL,
  `DEN_SENHA` varchar(45) NOT NULL,
  `DEN_CPF` varchar(15) NOT NULL,
  `DEN_RG` varchar(15) NOT NULL,
  `DEN_DTNASCIMENTO` date NOT NULL,
  `DEN_TELEFONE` varchar(18) NOT NULL,
  `DEN_ENDERECO` varchar(45) NOT NULL,
  `DEN_COMPLEMENTO` varchar(45) DEFAULT NULL,
  `DEN_BAIRRO` varchar(45) NOT NULL,
  `DEN_CIDADE` varchar(45) NOT NULL,
  `DEN_EMAIL` varchar(45) NOT NULL,
  `DEN_SEXO` int(11) NOT NULL,
  `DEN_SITUACAO` char(2) NOT NULL DEFAULT 'A',
  `DEN_SALARIO` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_desc_consulta`
--

CREATE TABLE IF NOT EXISTS `tb_desc_consulta` (
`DESC_CODIGO` int(11) NOT NULL,
  `DESC_PACIENTE` varchar(45) NOT NULL,
  `DESC_DATA` date NOT NULL,
  `DESC_HORA` time(6) NOT NULL,
  `DESC_DESCRICAO` varchar(450) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_funcionario`
--

CREATE TABLE IF NOT EXISTS `tb_funcionario` (
`FUN_CODIGO` int(10) unsigned NOT NULL,
  `FUN_NOME` varchar(45) NOT NULL,
  `FUN_SENHA` varchar(45) NOT NULL,
  `FUN_CPF` varchar(15) NOT NULL,
  `FUN_RG` varchar(15) NOT NULL,
  `FUN_DTNASCIMENTO` date NOT NULL,
  `FUN_TELEFONE` varchar(18) NOT NULL,
  `FUN_ENDERECO` varchar(45) NOT NULL,
  `FUN_COMPLEMENTO` varchar(45) DEFAULT NULL,
  `FUN_BAIRRO` varchar(45) NOT NULL,
  `FUN_CIDADE` varchar(45) NOT NULL,
  `FUN_EMAIL` varchar(45) NOT NULL,
  `FUN_SEXO` int(11) NOT NULL,
  `FUN_SITUACAO` char(2) NOT NULL DEFAULT 'A',
  `FUN_SALARIO` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_paciente`
--

CREATE TABLE IF NOT EXISTS `tb_paciente` (
`PA_CODIGO` int(10) unsigned NOT NULL,
  `PA_NOME` varchar(45) NOT NULL,
  `PA_SENHA` varchar(45) NOT NULL,
  `PA_CPF` varchar(15) NOT NULL,
  `PA_RG` varchar(15) NOT NULL,
  `PA_DTNASCIMENTO` date NOT NULL,
  `PA_TELEFONE` varchar(18) NOT NULL,
  `PA_ENDERECO` varchar(45) NOT NULL,
  `PA_COMPLEMENTO` varchar(45) DEFAULT NULL,
  `PA_BAIRRO` varchar(45) NOT NULL,
  `PA_CIDADE` varchar(45) NOT NULL,
  `PA_EMAIL` varchar(45) NOT NULL,
  `PA_SEXO` int(11) NOT NULL,
  `PA_SITUACAO` char(2) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_receita`
--

CREATE TABLE IF NOT EXISTS `tb_receita` (
`RECE_CODIGO` int(11) NOT NULL,
  `RECE_DATA` date NOT NULL,
  `RECE_PACIENTE` varchar(45) NOT NULL,
  `RECE_PRESCRICAO` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_caixa`
--
ALTER TABLE `tb_caixa`
 ADD PRIMARY KEY (`cai_codigo`), ADD UNIQUE KEY `CAI_CODIGO` (`cai_codigo`);

--
-- Indexes for table `tb_caixa_deb`
--
ALTER TABLE `tb_caixa_deb`
 ADD PRIMARY KEY (`cai_deb_codigo`), ADD UNIQUE KEY `CAI_deb_CODIGO` (`cai_deb_codigo`);

--
-- Indexes for table `tb_consulta`
--
ALTER TABLE `tb_consulta`
 ADD PRIMARY KEY (`CON_CODIGO`), ADD UNIQUE KEY `CON_CODIGO` (`CON_CODIGO`);

--
-- Indexes for table `tb_dentista`
--
ALTER TABLE `tb_dentista`
 ADD PRIMARY KEY (`DEN_CODIGO`), ADD UNIQUE KEY `DEN_CPF` (`DEN_CPF`), ADD UNIQUE KEY `DEN_RG` (`DEN_RG`), ADD UNIQUE KEY `DEN_EMAIL` (`DEN_EMAIL`), ADD UNIQUE KEY `DEN_CODIGO` (`DEN_CODIGO`);

--
-- Indexes for table `tb_desc_consulta`
--
ALTER TABLE `tb_desc_consulta`
 ADD PRIMARY KEY (`DESC_CODIGO`), ADD UNIQUE KEY `DESC_CODIGO` (`DESC_CODIGO`);

--
-- Indexes for table `tb_funcionario`
--
ALTER TABLE `tb_funcionario`
 ADD PRIMARY KEY (`FUN_CODIGO`), ADD UNIQUE KEY `FUN_CODIGO` (`FUN_CODIGO`), ADD UNIQUE KEY `FUN_CPF` (`FUN_CPF`), ADD UNIQUE KEY `FUN_RG` (`FUN_RG`);

--
-- Indexes for table `tb_paciente`
--
ALTER TABLE `tb_paciente`
 ADD PRIMARY KEY (`PA_CODIGO`), ADD UNIQUE KEY `PA_CODIGO` (`PA_CODIGO`), ADD UNIQUE KEY `PA_CPF` (`PA_CPF`), ADD UNIQUE KEY `PA_RG` (`PA_RG`), ADD UNIQUE KEY `PA_EMAIL` (`PA_EMAIL`);

--
-- Indexes for table `tb_receita`
--
ALTER TABLE `tb_receita`
 ADD PRIMARY KEY (`RECE_CODIGO`), ADD UNIQUE KEY `RECE_CODIGO` (`RECE_CODIGO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_caixa`
--
ALTER TABLE `tb_caixa`
MODIFY `cai_codigo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_caixa_deb`
--
ALTER TABLE `tb_caixa_deb`
MODIFY `cai_deb_codigo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_consulta`
--
ALTER TABLE `tb_consulta`
MODIFY `CON_CODIGO` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tb_dentista`
--
ALTER TABLE `tb_dentista`
MODIFY `DEN_CODIGO` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_desc_consulta`
--
ALTER TABLE `tb_desc_consulta`
MODIFY `DESC_CODIGO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_funcionario`
--
ALTER TABLE `tb_funcionario`
MODIFY `FUN_CODIGO` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_paciente`
--
ALTER TABLE `tb_paciente`
MODIFY `PA_CODIGO` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tb_receita`
--
ALTER TABLE `tb_receita`
MODIFY `RECE_CODIGO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
