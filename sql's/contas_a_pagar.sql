-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Máquina: localhost:3306
-- Data de Criação: 20-Abr-2016 às 05:41
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
-- Estrutura da tabela `contas_a_pagar`
--

CREATE TABLE IF NOT EXISTS `contas_a_pagar` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `num_fatura` varchar(50) DEFAULT NULL,
  `datacadastro` date DEFAULT NULL,
  `dia` int(50) NOT NULL,
  `mes` int(50) NOT NULL,
  `ano` int(50) NOT NULL,
  `horacadastro` varchar(50) DEFAULT NULL,
  `empresa` varchar(50) DEFAULT NULL,
  `cpf` varchar(50) DEFAULT NULL,
  `obs` text,
  `valor_a_pagar` decimal(50,2) DEFAULT NULL,
  `vencto` date DEFAULT NULL,
  `quant_parc` varchar(50) DEFAULT NULL,
  `modopagto` varchar(50) DEFAULT NULL,
  `juros` varchar(50) DEFAULT NULL,
  `valor_pago` varchar(50) DEFAULT NULL,
  `quitacao` varchar(50) DEFAULT NULL,
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
  `historico` text,
  `num_mensalidade` int(50) NOT NULL,
  `banco` varchar(50) NOT NULL,
  `cartao` varchar(50) NOT NULL,
  `categoria_conta` varchar(50) NOT NULL,
  `codigo_cliente` varchar(50) NOT NULL,
  `codigo_orcamento` varchar(50) NOT NULL,
  `setor` varchar(50) NOT NULL,
  `fornecedor` varchar(50) NOT NULL,
  `agencia` varchar(50) NOT NULL,
  `contacorrente` varchar(50) NOT NULL,
  `tipoconta` varchar(50) NOT NULL,
  `num_cheque` varchar(50) NOT NULL,
  `dia_evento` varchar(50) NOT NULL,
  `mes_evento` varchar(50) NOT NULL,
  `ano_evento` varchar(50) NOT NULL,
  `dateevento` date NOT NULL,
  `hora_evento` varchar(50) NOT NULL,
  `minuto_evento` varchar(50) NOT NULL,
  `segundo_evento` varchar(50) NOT NULL,
  `horaevento` varchar(50) NOT NULL,
  `dia_vencto` varchar(50) NOT NULL,
  `mes_vencto` int(11) NOT NULL,
  `ano_vencto` int(11) NOT NULL,
  `datealteracao` date NOT NULL,
  `datepagto` date NOT NULL,
  `estorno` varchar(50) NOT NULL,
  `dateestorno` date NOT NULL,
  `horaestorno` varchar(50) NOT NULL,
  `operador_estornou` varchar(50) NOT NULL,
  `departamento` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=212 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
