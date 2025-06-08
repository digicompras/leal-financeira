-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Máquina: localhost:3306
-- Data de Criação: 20-Abr-2016 às 05:42
-- Versão do servidor: 5.5.48-cll
-- versão do PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `angulo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bco_entradas`
--

CREATE TABLE IF NOT EXISTS `bco_entradas` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `operador` varchar(50) DEFAULT NULL,
  `cel_operador` varchar(50) DEFAULT NULL,
  `email_operador` varchar(50) DEFAULT NULL,
  `estabelecimento` varchar(50) DEFAULT NULL,
  `cidade_estabelecimento` varchar(50) DEFAULT NULL,
  `tel_estabelecimento` varchar(50) DEFAULT NULL,
  `email_estabelecimento` varchar(50) DEFAULT NULL,
  `dataalteracao` varchar(50) DEFAULT NULL,
  `horaalteracao` varchar(50) DEFAULT NULL,
  `operador_alterou` varchar(50) DEFAULT NULL,
  `cel_operador_alterou` varchar(50) DEFAULT NULL,
  `email_operador_alterou` varchar(50) DEFAULT NULL,
  `estabelecimento_alterou` varchar(50) DEFAULT NULL,
  `cidade_estabelecimento_alterou` varchar(50) DEFAULT NULL,
  `tel_estabelecimento_alterou` varchar(50) DEFAULT NULL,
  `email_estabelecimento_alterou` varchar(50) DEFAULT NULL,
  `dia` varchar(50) NOT NULL,
  `mes` varchar(50) NOT NULL,
  `ano` varchar(50) NOT NULL,
  `datacadastro` varchar(50) NOT NULL,
  `horacadastro` varchar(50) NOT NULL,
  `nfantasia` varchar(50) NOT NULL,
  `historico` text NOT NULL,
  `categoria_conta` varchar(50) NOT NULL,
  `valor` varchar(50) NOT NULL,
  `num_sete_um` varchar(50) NOT NULL,
  `modo_pagto` varchar(50) NOT NULL,
  `num_cheque` varchar(50) NOT NULL,
  `banco` varchar(50) NOT NULL,
  `datecadastro` date NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(50) NOT NULL,
  `num_fatura` varchar(50) NOT NULL,
  `cod_contas_a_receber` varchar(50) NOT NULL,
  `num_mensalidade` varchar(50) NOT NULL,
  `num_orcamento` varchar(50) NOT NULL,
  `setor` varchar(50) NOT NULL,
  `valor_recebido` varchar(50) NOT NULL,
  `troco` varchar(50) NOT NULL,
  `agencia` varchar(50) NOT NULL,
  `contacorrente` varchar(50) NOT NULL,
  `tipoconta` varchar(50) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
