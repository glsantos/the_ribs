CREATE DATABASE  IF NOT EXISTS `dbtheribs_ws` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `dbtheribs_ws`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: dbtheribs_ws
-- ------------------------------------------------------
-- Server version	5.7.18-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tbl_avaliacao_garcom`
--

DROP TABLE IF EXISTS `tbl_avaliacao_garcom`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_avaliacao_garcom` (
  `id_avaliacao_garcom` int(11) NOT NULL AUTO_INCREMENT,
  `id_funcionario` int(11) NOT NULL,
  `id_nota_garcom` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `dt_avaliacao` date DEFAULT NULL,
  PRIMARY KEY (`id_avaliacao_garcom`),
  KEY `fk_nota_funcionario_idx` (`id_funcionario`),
  KEY `fk_nota_cliente_idx` (`id_cliente`),
  KEY `fk_avaliacao_nota_idx` (`id_nota_garcom`),
  CONSTRAINT `fk_avaliacao_garcom_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `tbl_clientes` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_avaliacao_garcom_funcionario` FOREIGN KEY (`id_funcionario`) REFERENCES `tbl_funcionarios` (`id_funcionario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_avaliacao_garcom_nota` FOREIGN KEY (`id_nota_garcom`) REFERENCES `tbl_nota_garcom` (`id_nota_garcom`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_avaliacao_garcom`
--

LOCK TABLES `tbl_avaliacao_garcom` WRITE;
/*!40000 ALTER TABLE `tbl_avaliacao_garcom` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_avaliacao_garcom` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_avaliacao_produto`
--

DROP TABLE IF EXISTS `tbl_avaliacao_produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_avaliacao_produto` (
  `id_avaliacao_produto` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `id_nota_produto` int(11) NOT NULL,
  `dt_avaliacao_prato` date DEFAULT NULL,
  PRIMARY KEY (`id_avaliacao_produto`),
  KEY `fk_id_produto_avaliacao_idx` (`id_produto`),
  KEY `fk_id_avaliacao_produto_idx` (`id_nota_produto`),
  CONSTRAINT `fk_id_avaliacao_produto` FOREIGN KEY (`id_nota_produto`) REFERENCES `tbl_nota_produto` (`id_nota_prato`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_produto_avaliacao` FOREIGN KEY (`id_produto`) REFERENCES `tbl_produto` (`id_produto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_avaliacao_produto`
--

LOCK TABLES `tbl_avaliacao_produto` WRITE;
/*!40000 ALTER TABLE `tbl_avaliacao_produto` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_avaliacao_produto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_caixa`
--

DROP TABLE IF EXISTS `tbl_caixa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_caixa` (
  `id_caixa` int(11) NOT NULL AUTO_INCREMENT,
  `id_unidade` int(11) NOT NULL,
  `entrada` float NOT NULL,
  `saida` float NOT NULL,
  `saldo_dia` float NOT NULL,
  `saldo_acumulado` float DEFAULT NULL,
  PRIMARY KEY (`id_caixa`),
  KEY `fk_unidade_caixa_idx` (`id_unidade`),
  CONSTRAINT `fk_unidade_caixa` FOREIGN KEY (`id_unidade`) REFERENCES `tbl_unidades` (`id_unidade`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_caixa`
--

LOCK TABLES `tbl_caixa` WRITE;
/*!40000 ALTER TABLE `tbl_caixa` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_caixa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_caixa_entrada`
--

DROP TABLE IF EXISTS `tbl_caixa_entrada`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_caixa_entrada` (
  `id_caixa_entrada` int(11) NOT NULL AUTO_INCREMENT,
  `id_caixa` int(11) NOT NULL,
  `id_entrada` int(11) NOT NULL,
  PRIMARY KEY (`id_caixa_entrada`),
  KEY `fk_caixa_entrada_idx` (`id_caixa`),
  KEY `fk_id_entrada_caixa_idx` (`id_entrada`),
  CONSTRAINT `fk_id_caixa_entrada` FOREIGN KEY (`id_caixa`) REFERENCES `tbl_caixa` (`id_caixa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_entrada_caixa` FOREIGN KEY (`id_entrada`) REFERENCES `tbl_entrada` (`id_entrada`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_caixa_entrada`
--

LOCK TABLES `tbl_caixa_entrada` WRITE;
/*!40000 ALTER TABLE `tbl_caixa_entrada` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_caixa_entrada` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_caixa_saida`
--

DROP TABLE IF EXISTS `tbl_caixa_saida`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_caixa_saida` (
  `id_caixa` int(11) NOT NULL,
  `id_saida` int(11) NOT NULL,
  KEY `fk_caixa_saida_idx` (`id_caixa`),
  KEY `fk_saida_caixa_idx` (`id_saida`),
  CONSTRAINT `fk_caixa_saida` FOREIGN KEY (`id_caixa`) REFERENCES `tbl_caixa` (`id_caixa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_saida_caixa` FOREIGN KEY (`id_saida`) REFERENCES `tbl_saida` (`id_saida`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_caixa_saida`
--

LOCK TABLES `tbl_caixa_saida` WRITE;
/*!40000 ALTER TABLE `tbl_caixa_saida` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_caixa_saida` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_cardapio`
--

DROP TABLE IF EXISTS `tbl_cardapio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_cardapio` (
  `id_cardapio` int(11) NOT NULL AUTO_INCREMENT,
  `id_unidade` int(11) NOT NULL,
  PRIMARY KEY (`id_cardapio`),
  KEY `fk_cardapio_unidade_idx` (`id_unidade`),
  CONSTRAINT `fk_cardapio_unidade` FOREIGN KEY (`id_unidade`) REFERENCES `tbl_unidades` (`id_unidade`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_cardapio`
--

LOCK TABLES `tbl_cardapio` WRITE;
/*!40000 ALTER TABLE `tbl_cardapio` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_cardapio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_cardapio_produto`
--

DROP TABLE IF EXISTS `tbl_cardapio_produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_cardapio_produto` (
  `id_cardapio_produto` int(11) NOT NULL AUTO_INCREMENT,
  `id_cardapio` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  PRIMARY KEY (`id_cardapio_produto`),
  KEY `fk_id_cardapio_produto_idx` (`id_cardapio`),
  KEY `fk_id_produto_cardapio_idx` (`id_produto`),
  CONSTRAINT `fk_id_cardapio_produto` FOREIGN KEY (`id_cardapio`) REFERENCES `tbl_cardapio` (`id_cardapio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_produto_cardapio` FOREIGN KEY (`id_produto`) REFERENCES `tbl_produto` (`id_produto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_cardapio_produto`
--

LOCK TABLES `tbl_cardapio_produto` WRITE;
/*!40000 ALTER TABLE `tbl_cardapio_produto` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_cardapio_produto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_cargo_pagina`
--

DROP TABLE IF EXISTS `tbl_cargo_pagina`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_cargo_pagina` (
  `id_cargo_pagina` int(11) NOT NULL AUTO_INCREMENT,
  `id_cargo` int(11) NOT NULL,
  `id_pagina` int(11) NOT NULL,
  PRIMARY KEY (`id_cargo_pagina`),
  KEY `fk_cargo_pagina_idx` (`id_cargo`),
  KEY `fk_pagina_cargo_idx` (`id_pagina`),
  CONSTRAINT `fk_cargo_pagina` FOREIGN KEY (`id_cargo`) REFERENCES `tbl_cargos` (`id_cargo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pagina_cargo` FOREIGN KEY (`id_pagina`) REFERENCES `tbl_paginas` (`id_pagina`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_cargo_pagina`
--

LOCK TABLES `tbl_cargo_pagina` WRITE;
/*!40000 ALTER TABLE `tbl_cargo_pagina` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_cargo_pagina` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_cargos`
--

DROP TABLE IF EXISTS `tbl_cargos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_cargos` (
  `id_cargo` int(11) NOT NULL AUTO_INCREMENT,
  `id_departamento` int(11) NOT NULL,
  `nome_cargo` varchar(45) NOT NULL,
  PRIMARY KEY (`id_cargo`),
  KEY `fk_cargo_departamento_idx` (`id_departamento`),
  CONSTRAINT `fk_cargo_departamento` FOREIGN KEY (`id_departamento`) REFERENCES `tbl_departamento` (`id_departamento`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_cargos`
--

LOCK TABLES `tbl_cargos` WRITE;
/*!40000 ALTER TABLE `tbl_cargos` DISABLE KEYS */;
INSERT INTO `tbl_cargos` VALUES (1,1,'Garçom');
/*!40000 ALTER TABLE `tbl_cargos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_cartao_cliente`
--

DROP TABLE IF EXISTS `tbl_cartao_cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_cartao_cliente` (
  `id_cartao_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `id_cartao` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  PRIMARY KEY (`id_cartao_cliente`),
  KEY `fk_id_cartao_cartoes_idx` (`id_cartao`),
  KEY `fk_id_cliente_clientes_idx` (`id_cliente`),
  CONSTRAINT `fk_id_cartao_cartoes` FOREIGN KEY (`id_cartao`) REFERENCES `tbl_cartoes` (`id_cartao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_cliente_clientes` FOREIGN KEY (`id_cliente`) REFERENCES `tbl_clientes` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_cartao_cliente`
--

LOCK TABLES `tbl_cartao_cliente` WRITE;
/*!40000 ALTER TABLE `tbl_cartao_cliente` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_cartao_cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_cartoes`
--

DROP TABLE IF EXISTS `tbl_cartoes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_cartoes` (
  `id_cartao` int(11) NOT NULL AUTO_INCREMENT,
  `num_cartao` varchar(19) NOT NULL,
  `dt_validade` varchar(5) NOT NULL,
  `cod_seguranca` varchar(3) NOT NULL,
  `nome_cartao` varchar(45) NOT NULL,
  PRIMARY KEY (`id_cartao`),
  UNIQUE KEY `num_cartao_credito_UNIQUE` (`num_cartao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_cartoes`
--

LOCK TABLES `tbl_cartoes` WRITE;
/*!40000 ALTER TABLE `tbl_cartoes` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_cartoes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_classificacao_contato`
--

DROP TABLE IF EXISTS `tbl_classificacao_contato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_classificacao_contato` (
  `id_classificacao` int(11) NOT NULL AUTO_INCREMENT,
  `classificacao` varchar(45) NOT NULL,
  PRIMARY KEY (`id_classificacao`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_classificacao_contato`
--

LOCK TABLES `tbl_classificacao_contato` WRITE;
/*!40000 ALTER TABLE `tbl_classificacao_contato` DISABLE KEYS */;
INSERT INTO `tbl_classificacao_contato` VALUES (1,'Sugestão'),(2,'Elogio'),(3,'Crítica'),(4,'Outro');
/*!40000 ALTER TABLE `tbl_classificacao_contato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_clientes`
--

DROP TABLE IF EXISTS `tbl_clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_clientes` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cliente` varchar(45) NOT NULL,
  `sobrenome_cliente` varchar(45) NOT NULL,
  `rg` varchar(12) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `nome_usuario` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  PRIMARY KEY (`id_cliente`),
  UNIQUE KEY `nome_usuario_UNIQUE` (`nome_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_clientes`
--

LOCK TABLES `tbl_clientes` WRITE;
/*!40000 ALTER TABLE `tbl_clientes` DISABLE KEYS */;
INSERT INTO `tbl_clientes` VALUES (2,'Giovanna','Silva Resende','585106691','32931588890','gi','123');
/*!40000 ALTER TABLE `tbl_clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_contato_cliente`
--

DROP TABLE IF EXISTS `tbl_contato_cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_contato_cliente` (
  `id_contato_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `id_contato` int(11) NOT NULL,
  PRIMARY KEY (`id_contato_cliente`),
  KEY `fk_id_cliente_clientes(contato)_idx` (`id_cliente`),
  KEY `fk_id_contato_contatos(contato)_idx` (`id_contato`),
  CONSTRAINT `fk_id_cliente_clientes(contato)` FOREIGN KEY (`id_cliente`) REFERENCES `tbl_clientes` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_contato_contatos(contato)` FOREIGN KEY (`id_contato`) REFERENCES `tbl_contatos` (`id_contato`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_contato_cliente`
--

LOCK TABLES `tbl_contato_cliente` WRITE;
/*!40000 ALTER TABLE `tbl_contato_cliente` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_contato_cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_contato_funcionario`
--

DROP TABLE IF EXISTS `tbl_contato_funcionario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_contato_funcionario` (
  `id_contato_funcionario` int(11) NOT NULL AUTO_INCREMENT,
  `id_contato` int(11) NOT NULL,
  `id_funcionario` int(11) NOT NULL,
  PRIMARY KEY (`id_contato_funcionario`),
  KEY `fk_tbl_contato_funcionario_idx` (`id_contato`),
  KEY `fk_tbl_funcionario_contato_idx` (`id_funcionario`),
  CONSTRAINT `fk_tbl_contato_funcionario` FOREIGN KEY (`id_contato`) REFERENCES `tbl_contatos` (`id_contato`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_funcionario_contato` FOREIGN KEY (`id_funcionario`) REFERENCES `tbl_funcionarios` (`id_funcionario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_contato_funcionario`
--

LOCK TABLES `tbl_contato_funcionario` WRITE;
/*!40000 ALTER TABLE `tbl_contato_funcionario` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_contato_funcionario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_contato_unidade`
--

DROP TABLE IF EXISTS `tbl_contato_unidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_contato_unidade` (
  `id_contato_unidade` int(11) NOT NULL AUTO_INCREMENT,
  `id_unidade` int(11) NOT NULL,
  `id_contato` int(11) NOT NULL,
  PRIMARY KEY (`id_contato_unidade`),
  KEY `contato_unidade_contato_idx` (`id_contato`),
  KEY `contato_unidade_unidade_idx` (`id_unidade`),
  CONSTRAINT `contato_unidade_contato` FOREIGN KEY (`id_contato`) REFERENCES `tbl_contatos` (`id_contato`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `contato_unidade_unidade` FOREIGN KEY (`id_unidade`) REFERENCES `tbl_unidades` (`id_unidade`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_contato_unidade`
--

LOCK TABLES `tbl_contato_unidade` WRITE;
/*!40000 ALTER TABLE `tbl_contato_unidade` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_contato_unidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_contatos`
--

DROP TABLE IF EXISTS `tbl_contatos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_contatos` (
  `id_contato` int(11) NOT NULL AUTO_INCREMENT,
  `telefone` varchar(13) DEFAULT NULL,
  `celular` varchar(14) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_contato`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_contatos`
--

LOCK TABLES `tbl_contatos` WRITE;
/*!40000 ALTER TABLE `tbl_contatos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_contatos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_departamento`
--

DROP TABLE IF EXISTS `tbl_departamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_departamento` (
  `id_departamento` int(11) NOT NULL AUTO_INCREMENT,
  `nome_departamento` varchar(50) NOT NULL,
  PRIMARY KEY (`id_departamento`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_departamento`
--

LOCK TABLES `tbl_departamento` WRITE;
/*!40000 ALTER TABLE `tbl_departamento` DISABLE KEYS */;
INSERT INTO `tbl_departamento` VALUES (1,'Atendimento');
/*!40000 ALTER TABLE `tbl_departamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_despesa`
--

DROP TABLE IF EXISTS `tbl_despesa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_despesa` (
  `id_saida` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipo_saida` int(11) NOT NULL,
  `id_caixa` int(11) NOT NULL,
  `dia` int(11) NOT NULL,
  `mes` int(11) NOT NULL,
  `ano` int(11) NOT NULL,
  `valor_saida` float NOT NULL,
  PRIMARY KEY (`id_saida`),
  KEY `fk_tipo_saida_idx` (`id_tipo_saida`),
  KEY `fk_caixa_despesa_idx` (`id_caixa`),
  CONSTRAINT `fk_caixa_despesa` FOREIGN KEY (`id_caixa`) REFERENCES `tbl_caixa` (`id_caixa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tipo_despesa` FOREIGN KEY (`id_tipo_saida`) REFERENCES `tbl_tipo_despesa` (`id_tipo_saida`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_despesa`
--

LOCK TABLES `tbl_despesa` WRITE;
/*!40000 ALTER TABLE `tbl_despesa` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_despesa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_endereco_cliente`
--

DROP TABLE IF EXISTS `tbl_endereco_cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_endereco_cliente` (
  `id_endereco_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `id_endereco` int(11) NOT NULL,
  PRIMARY KEY (`id_endereco_cliente`),
  KEY `fk_id_cliente_clientes(endereco)_idx` (`id_cliente`),
  KEY `fk_id_endereco_enderecos(endereco)_idx` (`id_endereco`),
  CONSTRAINT `fk_id_cliente_clientes(endereco)` FOREIGN KEY (`id_cliente`) REFERENCES `tbl_clientes` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_endereco_enderecos(endereco)` FOREIGN KEY (`id_endereco`) REFERENCES `tbl_enderecos` (`id_endereco`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_endereco_cliente`
--

LOCK TABLES `tbl_endereco_cliente` WRITE;
/*!40000 ALTER TABLE `tbl_endereco_cliente` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_endereco_cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_endereco_funcionario`
--

DROP TABLE IF EXISTS `tbl_endereco_funcionario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_endereco_funcionario` (
  `id_endereco_funcionario` int(11) NOT NULL AUTO_INCREMENT,
  `id_endereco` int(11) NOT NULL,
  `id_funcionario` int(11) NOT NULL,
  PRIMARY KEY (`id_endereco_funcionario`),
  KEY `fk_tbl_endereco_idx` (`id_endereco`),
  KEY `fk_tbl_funcionario_idx` (`id_funcionario`),
  CONSTRAINT `fk_endereco_funcionario` FOREIGN KEY (`id_endereco`) REFERENCES `tbl_enderecos` (`id_endereco`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_funcionario(endereco)` FOREIGN KEY (`id_funcionario`) REFERENCES `tbl_funcionarios` (`id_funcionario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_endereco_funcionario`
--

LOCK TABLES `tbl_endereco_funcionario` WRITE;
/*!40000 ALTER TABLE `tbl_endereco_funcionario` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_endereco_funcionario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_endereco_unidade`
--

DROP TABLE IF EXISTS `tbl_endereco_unidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_endereco_unidade` (
  `id_endereco_unidade` int(11) NOT NULL AUTO_INCREMENT,
  `id_unidade` int(11) NOT NULL,
  `id_endereco` int(11) NOT NULL,
  PRIMARY KEY (`id_endereco_unidade`),
  KEY `fk_id_unidade_endereco_idx` (`id_unidade`),
  KEY `fk_id_endereco_enderecos_idx` (`id_endereco`),
  CONSTRAINT `fk_id_endereco_enderecos` FOREIGN KEY (`id_endereco`) REFERENCES `tbl_enderecos` (`id_endereco`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_unidade_unidades` FOREIGN KEY (`id_unidade`) REFERENCES `tbl_unidades` (`id_unidade`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_endereco_unidade`
--

LOCK TABLES `tbl_endereco_unidade` WRITE;
/*!40000 ALTER TABLE `tbl_endereco_unidade` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_endereco_unidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_enderecos`
--

DROP TABLE IF EXISTS `tbl_enderecos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_enderecos` (
  `id_endereco` int(11) NOT NULL AUTO_INCREMENT,
  `cep` varchar(9) NOT NULL,
  `logradouro` varchar(50) NOT NULL,
  `complemento` varchar(45) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `localidade` varchar(45) NOT NULL,
  `uf` varchar(45) NOT NULL,
  `numero` varchar(10) NOT NULL,
  PRIMARY KEY (`id_endereco`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_enderecos`
--

LOCK TABLES `tbl_enderecos` WRITE;
/*!40000 ALTER TABLE `tbl_enderecos` DISABLE KEYS */;
INSERT INTO `tbl_enderecos` VALUES (1,'06720','Rua: Ciro Monteiro','A','Parque Mirante da Mata','Xablau','SP','1024');
/*!40000 ALTER TABLE `tbl_enderecos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_entrada`
--

DROP TABLE IF EXISTS `tbl_entrada`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_entrada` (
  `id_entrada` int(11) NOT NULL AUTO_INCREMENT,
  `id_pedido` int(11) NOT NULL,
  `valor_entrada` float NOT NULL,
  `dia` int(11) NOT NULL,
  `mes` int(11) NOT NULL,
  `ano` int(11) NOT NULL,
  PRIMARY KEY (`id_entrada`),
  KEY `fk_conta_pedido_idx` (`id_pedido`),
  CONSTRAINT `fk_conta_pedido` FOREIGN KEY (`id_pedido`) REFERENCES `tbl_pedido` (`id_pedido`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_entrada`
--

LOCK TABLES `tbl_entrada` WRITE;
/*!40000 ALTER TABLE `tbl_entrada` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_entrada` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_entre_contato`
--

DROP TABLE IF EXISTS `tbl_entre_contato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_entre_contato` (
  `id_entre_contato` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `id_classificacao` int(11) NOT NULL,
  `comentario` text,
  PRIMARY KEY (`id_entre_contato`),
  KEY `fk_classificacao_contato_idx` (`id_classificacao`),
  CONSTRAINT `fk_classificacao_contato` FOREIGN KEY (`id_classificacao`) REFERENCES `tbl_classificacao_contato` (`id_classificacao`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_entre_contato`
--

LOCK TABLES `tbl_entre_contato` WRITE;
/*!40000 ALTER TABLE `tbl_entre_contato` DISABLE KEYS */;
INSERT INTO `tbl_entre_contato` VALUES (1,'Giovanna','956472663','giovanna@xablau',1,'Melhor site');
/*!40000 ALTER TABLE `tbl_entre_contato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_faq`
--

DROP TABLE IF EXISTS `tbl_faq`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_faq` (
  `id_faq` int(11) NOT NULL AUTO_INCREMENT,
  `pergunta` varchar(100) NOT NULL,
  `resposta` text NOT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_faq`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_faq`
--

LOCK TABLES `tbl_faq` WRITE;
/*!40000 ALTER TABLE `tbl_faq` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_faq` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_funcionarios`
--

DROP TABLE IF EXISTS `tbl_funcionarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_funcionarios` (
  `id_funcionario` int(11) NOT NULL AUTO_INCREMENT,
  `id_cargo` int(11) NOT NULL,
  `id_unidade` int(11) NOT NULL,
  `id_endereco` int(11) NOT NULL,
  `nome_funcionario` varchar(45) NOT NULL,
  `sobrenome_funcionario` varchar(45) NOT NULL,
  `dt_nasc` date NOT NULL,
  `usuario_funcionario` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `media_avaliacao` float DEFAULT NULL,
  PRIMARY KEY (`id_funcionario`),
  UNIQUE KEY `usuario_funcionario_UNIQUE` (`usuario_funcionario`),
  KEY `cargo_funcionario_idx` (`id_cargo`),
  KEY `unidade_funcionario_idx` (`id_unidade`),
  KEY `endereco_funcionario_idx` (`id_endereco`),
  CONSTRAINT `fk_cargo_funcionario` FOREIGN KEY (`id_cargo`) REFERENCES `tbl_cargos` (`id_cargo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_endereco_funcionario` FOREIGN KEY (`id_endereco`) REFERENCES `tbl_enderecos` (`id_endereco`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_unidade_funcionario` FOREIGN KEY (`id_unidade`) REFERENCES `tbl_unidades` (`id_unidade`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_funcionarios`
--

LOCK TABLES `tbl_funcionarios` WRITE;
/*!40000 ALTER TABLE `tbl_funcionarios` DISABLE KEYS */;
INSERT INTO `tbl_funcionarios` VALUES (1,1,1,1,'Giovanna','Resende','2000-03-25','gi','123',10);
/*!40000 ALTER TABLE `tbl_funcionarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_galeria_fotos`
--

DROP TABLE IF EXISTS `tbl_galeria_fotos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_galeria_fotos` (
  `id_galeria_fotos` int(11) NOT NULL AUTO_INCREMENT,
  `foto_unidade` varchar(105) NOT NULL,
  PRIMARY KEY (`id_galeria_fotos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_galeria_fotos`
--

LOCK TABLES `tbl_galeria_fotos` WRITE;
/*!40000 ALTER TABLE `tbl_galeria_fotos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_galeria_fotos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_galeria_unidade`
--

DROP TABLE IF EXISTS `tbl_galeria_unidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_galeria_unidade` (
  `id_galeria_unidade` int(11) NOT NULL AUTO_INCREMENT,
  `id_unidade` int(11) NOT NULL,
  `id_galeria_fotos` int(11) NOT NULL,
  PRIMARY KEY (`id_galeria_unidade`),
  KEY `fk_id_galeria_unidade_idx` (`id_unidade`),
  KEY `fk_id_unidade_galeria_idx` (`id_galeria_fotos`),
  CONSTRAINT `fk_id_galeria_unidade` FOREIGN KEY (`id_unidade`) REFERENCES `tbl_unidades` (`id_unidade`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_unidade_galeria` FOREIGN KEY (`id_galeria_fotos`) REFERENCES `tbl_galeria_fotos` (`id_galeria_fotos`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_galeria_unidade`
--

LOCK TABLES `tbl_galeria_unidade` WRITE;
/*!40000 ALTER TABLE `tbl_galeria_unidade` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_galeria_unidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_home`
--

DROP TABLE IF EXISTS `tbl_home`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_home` (
  `id_home` int(11) NOT NULL AUTO_INCREMENT,
  `id_processo_reserva` int(11) NOT NULL,
  `id_unidades_home` int(11) NOT NULL,
  `foto_valores` varchar(100) NOT NULL,
  `foto_avalie` varchar(45) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id_home`),
  KEY `fk_id_processo_home_idx` (`id_processo_reserva`),
  CONSTRAINT `fk_id_processo_home` FOREIGN KEY (`id_processo_reserva`) REFERENCES `tbl_processo_home` (`id_processo_home`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_home`
--

LOCK TABLES `tbl_home` WRITE;
/*!40000 ALTER TABLE `tbl_home` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_home` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_ingredientes`
--

DROP TABLE IF EXISTS `tbl_ingredientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_ingredientes` (
  `id_ingrediente` int(11) NOT NULL AUTO_INCREMENT,
  `nome_ingrediente` varchar(50) NOT NULL,
  PRIMARY KEY (`id_ingrediente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_ingredientes`
--

LOCK TABLES `tbl_ingredientes` WRITE;
/*!40000 ALTER TABLE `tbl_ingredientes` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_ingredientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_item_pedido`
--

DROP TABLE IF EXISTS `tbl_item_pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_item_pedido` (
  `id_item_pedido` int(11) NOT NULL AUTO_INCREMENT,
  `id_pedido` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `id_funcionario` int(11) NOT NULL,
  PRIMARY KEY (`id_item_pedido`),
  KEY `fk_pedido_item_idx` (`id_pedido`),
  KEY `fk_produto_item_idx` (`id_produto`),
  KEY `fk_funcionario_item_idx` (`id_funcionario`),
  CONSTRAINT `fk_funcionario_item` FOREIGN KEY (`id_funcionario`) REFERENCES `tbl_funcionarios` (`id_funcionario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedido_item` FOREIGN KEY (`id_pedido`) REFERENCES `tbl_pedido` (`id_pedido`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_produto_item` FOREIGN KEY (`id_produto`) REFERENCES `tbl_produto` (`id_produto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_item_pedido`
--

LOCK TABLES `tbl_item_pedido` WRITE;
/*!40000 ALTER TABLE `tbl_item_pedido` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_item_pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_itens_pedido`
--

DROP TABLE IF EXISTS `tbl_itens_pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_itens_pedido` (
  `id_item_pedido` int(11) NOT NULL AUTO_INCREMENT,
  `id_pedido` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `id_funcionario` int(11) NOT NULL,
  `qtd_produto` int(11) NOT NULL,
  `id_status_pedido` int(11) NOT NULL,
  PRIMARY KEY (`id_item_pedido`),
  KEY `fk_iten_pedido_idx` (`id_pedido`),
  KEY `fk_iten_produto_idx` (`id_produto`),
  KEY `fk_iten_funcionario_idx` (`id_funcionario`),
  KEY `fk_id_status_pedido_idx` (`id_status_pedido`),
  CONSTRAINT `fk_id_status_pedido` FOREIGN KEY (`id_status_pedido`) REFERENCES `tbl_status_pedido` (`id_status_pedido`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_item_funcionario` FOREIGN KEY (`id_funcionario`) REFERENCES `tbl_funcionarios` (`id_funcionario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_item_pedido` FOREIGN KEY (`id_pedido`) REFERENCES `tbl_pedido` (`id_pedido`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_item_produto` FOREIGN KEY (`id_produto`) REFERENCES `tbl_produto` (`id_produto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_itens_pedido`
--

LOCK TABLES `tbl_itens_pedido` WRITE;
/*!40000 ALTER TABLE `tbl_itens_pedido` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_itens_pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_mesa`
--

DROP TABLE IF EXISTS `tbl_mesa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_mesa` (
  `id_mesa` int(11) NOT NULL AUTO_INCREMENT,
  `id_unidade` int(11) NOT NULL,
  `nome_mesa` varchar(50) NOT NULL,
  `qtd_pessoas` int(11) NOT NULL,
  `id_status_mesa` int(11) NOT NULL,
  PRIMARY KEY (`id_mesa`),
  KEY `fk_status_mesa_idx` (`id_status_mesa`),
  KEY `fk_unidade_mesa_idx` (`id_unidade`),
  CONSTRAINT `fk_status_mesa` FOREIGN KEY (`id_status_mesa`) REFERENCES `tbl_status_mesa` (`id_status_mesa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_unidade_mesa` FOREIGN KEY (`id_unidade`) REFERENCES `tbl_unidades` (`id_unidade`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_mesa`
--

LOCK TABLES `tbl_mesa` WRITE;
/*!40000 ALTER TABLE `tbl_mesa` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_mesa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_nota_garcom`
--

DROP TABLE IF EXISTS `tbl_nota_garcom`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_nota_garcom` (
  `id_nota_garcom` int(11) NOT NULL AUTO_INCREMENT,
  `nota_garcom` varchar(45) NOT NULL,
  PRIMARY KEY (`id_nota_garcom`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_nota_garcom`
--

LOCK TABLES `tbl_nota_garcom` WRITE;
/*!40000 ALTER TABLE `tbl_nota_garcom` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_nota_garcom` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_nota_produto`
--

DROP TABLE IF EXISTS `tbl_nota_produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_nota_produto` (
  `id_nota_prato` int(11) NOT NULL AUTO_INCREMENT,
  `nota_prato` varchar(45) NOT NULL,
  PRIMARY KEY (`id_nota_prato`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_nota_produto`
--

LOCK TABLES `tbl_nota_produto` WRITE;
/*!40000 ALTER TABLE `tbl_nota_produto` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_nota_produto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_notas`
--

DROP TABLE IF EXISTS `tbl_notas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_notas` (
  `id_nota` int(11) NOT NULL AUTO_INCREMENT,
  `desc_nota` varchar(45) NOT NULL,
  PRIMARY KEY (`id_nota`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_notas`
--

LOCK TABLES `tbl_notas` WRITE;
/*!40000 ALTER TABLE `tbl_notas` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_notas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_paginas`
--

DROP TABLE IF EXISTS `tbl_paginas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_paginas` (
  `id_pagina` int(11) NOT NULL AUTO_INCREMENT,
  `nome_pagina` varchar(20) NOT NULL,
  PRIMARY KEY (`id_pagina`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_paginas`
--

LOCK TABLES `tbl_paginas` WRITE;
/*!40000 ALTER TABLE `tbl_paginas` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_paginas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_pedido`
--

DROP TABLE IF EXISTS `tbl_pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_pedido` (
  `id_pedido` int(11) NOT NULL AUTO_INCREMENT,
  `id_mesa` int(11) NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`id_pedido`),
  KEY `fk_mesa_pedido_idx` (`id_mesa`),
  CONSTRAINT `fk_mesa_pedido` FOREIGN KEY (`id_mesa`) REFERENCES `tbl_mesa` (`id_mesa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_pedido`
--

LOCK TABLES `tbl_pedido` WRITE;
/*!40000 ALTER TABLE `tbl_pedido` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_periodo`
--

DROP TABLE IF EXISTS `tbl_periodo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_periodo` (
  `id_periodo` int(11) NOT NULL AUTO_INCREMENT,
  `nome_periodo` varchar(45) NOT NULL,
  PRIMARY KEY (`id_periodo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_periodo`
--

LOCK TABLES `tbl_periodo` WRITE;
/*!40000 ALTER TABLE `tbl_periodo` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_periodo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_prateleira`
--

DROP TABLE IF EXISTS `tbl_prateleira`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_prateleira` (
  `id_prateleira` int(11) NOT NULL AUTO_INCREMENT,
  `id_unidade` int(11) NOT NULL,
  `prateleira` varchar(45) NOT NULL,
  PRIMARY KEY (`id_prateleira`),
  KEY `fk_unidade_prateleira_idx` (`id_unidade`),
  CONSTRAINT `fk_unidade_prateleira` FOREIGN KEY (`id_unidade`) REFERENCES `tbl_unidades` (`id_unidade`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_prateleira`
--

LOCK TABLES `tbl_prateleira` WRITE;
/*!40000 ALTER TABLE `tbl_prateleira` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_prateleira` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_prateleira_industrializados`
--

DROP TABLE IF EXISTS `tbl_prateleira_industrializados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_prateleira_industrializados` (
  `id_prateleira_industrializados` int(11) NOT NULL AUTO_INCREMENT,
  `id_unidade` int(11) NOT NULL,
  `nome_prateleira_ind` varchar(50) NOT NULL,
  PRIMARY KEY (`id_prateleira_industrializados`),
  KEY `fk_unidade_prate_ind_idx` (`id_unidade`),
  CONSTRAINT `fk_unidade_prate_ind` FOREIGN KEY (`id_unidade`) REFERENCES `tbl_unidades` (`id_unidade`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_prateleira_industrializados`
--

LOCK TABLES `tbl_prateleira_industrializados` WRITE;
/*!40000 ALTER TABLE `tbl_prateleira_industrializados` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_prateleira_industrializados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_prateleira_ingrediente`
--

DROP TABLE IF EXISTS `tbl_prateleira_ingrediente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_prateleira_ingrediente` (
  `id_prateleira_ingrediente` int(11) NOT NULL AUTO_INCREMENT,
  `id_prateleira` int(11) NOT NULL,
  `id_ingrediente` int(11) NOT NULL,
  `qtd_ingrediente` int(11) NOT NULL,
  `validade_ingrediente` date NOT NULL,
  PRIMARY KEY (`id_prateleira_ingrediente`),
  KEY `fk_prateleira_ingrediente_idx` (`id_prateleira`),
  KEY `fk_ingrediente_prateleira_idx` (`id_ingrediente`),
  CONSTRAINT `fk_ingrediente_prateleira` FOREIGN KEY (`id_ingrediente`) REFERENCES `tbl_ingredientes` (`id_ingrediente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_prateleira_ingrediente` FOREIGN KEY (`id_prateleira`) REFERENCES `tbl_prateleira` (`id_prateleira`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_prateleira_ingrediente`
--

LOCK TABLES `tbl_prateleira_ingrediente` WRITE;
/*!40000 ALTER TABLE `tbl_prateleira_ingrediente` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_prateleira_ingrediente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_processo_home`
--

DROP TABLE IF EXISTS `tbl_processo_home`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_processo_home` (
  `id_processo_home` int(11) NOT NULL AUTO_INCREMENT,
  `slt_unidade` varchar(105) NOT NULL,
  `slt_periodo` varchar(105) NOT NULL,
  `slt_convidados` varchar(105) NOT NULL,
  `slt_pronto` varchar(105) NOT NULL,
  PRIMARY KEY (`id_processo_home`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_processo_home`
--

LOCK TABLES `tbl_processo_home` WRITE;
/*!40000 ALTER TABLE `tbl_processo_home` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_processo_home` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_prod_ind`
--

DROP TABLE IF EXISTS `tbl_prod_ind`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_prod_ind` (
  `id_prateleira_industrializados` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `qtde_produto_disponivel` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_prod_ind`
--

LOCK TABLES `tbl_prod_ind` WRITE;
/*!40000 ALTER TABLE `tbl_prod_ind` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_prod_ind` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_produto`
--

DROP TABLE IF EXISTS `tbl_produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_produto` (
  `id_produto` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipo_produto` int(11) NOT NULL,
  `nome_produto` varchar(50) NOT NULL,
  PRIMARY KEY (`id_produto`),
  KEY `fk_tipo_produto_idx` (`id_tipo_produto`),
  CONSTRAINT `fk_tipo_produto` FOREIGN KEY (`id_tipo_produto`) REFERENCES `tbl_tipo_produto` (`id_tipo_produto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_produto`
--

LOCK TABLES `tbl_produto` WRITE;
/*!40000 ALTER TABLE `tbl_produto` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_produto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_produto_ingredientes`
--

DROP TABLE IF EXISTS `tbl_produto_ingredientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_produto_ingredientes` (
  `id_produto` int(11) NOT NULL,
  `id_ingrediente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_produto_ingredientes`
--

LOCK TABLES `tbl_produto_ingredientes` WRITE;
/*!40000 ALTER TABLE `tbl_produto_ingredientes` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_produto_ingredientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_reserva`
--

DROP TABLE IF EXISTS `tbl_reserva`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_reserva` (
  `id_reserva` int(11) NOT NULL AUTO_INCREMENT,
  `id_status_reserva` int(11) NOT NULL,
  `id_periodo` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `data_requisicao` date NOT NULL,
  `data_agendada` date DEFAULT NULL,
  `id_nota` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_reserva`),
  KEY `fk_cliente_reserva_idx` (`id_cliente`),
  KEY `fk_periodo_reserva_idx` (`id_periodo`),
  KEY `fk_status_reserva_idx` (`id_status_reserva`),
  KEY `fk_nota_reserva_idx` (`id_nota`),
  CONSTRAINT `fk_cliente_reserva_idcliente` FOREIGN KEY (`id_cliente`) REFERENCES `tbl_clientes` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_nota_reserva` FOREIGN KEY (`id_nota`) REFERENCES `tbl_nota_garcom` (`id_nota_garcom`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_periodo_reserva` FOREIGN KEY (`id_periodo`) REFERENCES `tbl_periodo` (`id_periodo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_status_reserva` FOREIGN KEY (`id_status_reserva`) REFERENCES `tbl_status_reserva` (`id_status_reserva`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_reserva`
--

LOCK TABLES `tbl_reserva` WRITE;
/*!40000 ALTER TABLE `tbl_reserva` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_reserva` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_saida`
--

DROP TABLE IF EXISTS `tbl_saida`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_saida` (
  `id_saida` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipo_saida` int(11) NOT NULL,
  `dia` int(11) NOT NULL,
  `mes` int(11) NOT NULL,
  `ano` int(11) NOT NULL,
  `valor_saida` float NOT NULL,
  PRIMARY KEY (`id_saida`),
  KEY `fk_tipo_saida_idx` (`id_tipo_saida`),
  CONSTRAINT `fk_tipo_saida` FOREIGN KEY (`id_tipo_saida`) REFERENCES `tbl_tipo_saida` (`id_tipo_saida`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_saida`
--

LOCK TABLES `tbl_saida` WRITE;
/*!40000 ALTER TABLE `tbl_saida` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_saida` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_slider`
--

DROP TABLE IF EXISTS `tbl_slider`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_slider` (
  `id_slider` int(11) NOT NULL AUTO_INCREMENT,
  `imagem` varchar(100) NOT NULL,
  PRIMARY KEY (`id_slider`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_slider`
--

LOCK TABLES `tbl_slider` WRITE;
/*!40000 ALTER TABLE `tbl_slider` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_slider` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_slider_home`
--

DROP TABLE IF EXISTS `tbl_slider_home`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_slider_home` (
  `id_slider_home` int(11) NOT NULL AUTO_INCREMENT,
  `id_home` int(11) NOT NULL,
  `id_slider` int(11) NOT NULL,
  PRIMARY KEY (`id_slider_home`),
  KEY `fk_slider_home_idx` (`id_home`),
  KEY `fk_id_slider_home_idx` (`id_slider`),
  CONSTRAINT `fk_id_home_slider` FOREIGN KEY (`id_home`) REFERENCES `tbl_home` (`id_home`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_slider_home` FOREIGN KEY (`id_slider`) REFERENCES `tbl_slider` (`id_slider`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_slider_home`
--

LOCK TABLES `tbl_slider_home` WRITE;
/*!40000 ALTER TABLE `tbl_slider_home` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_slider_home` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_sobre_empresa`
--

DROP TABLE IF EXISTS `tbl_sobre_empresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_sobre_empresa` (
  `id_sobre_empresa` int(11) NOT NULL AUTO_INCREMENT,
  `missao` text NOT NULL,
  `valores` text NOT NULL,
  `objetivos` text NOT NULL,
  `historia` varchar(45) NOT NULL,
  `img_missao` varchar(105) NOT NULL,
  `img_valores` varchar(105) NOT NULL,
  `img_objetivo` varchar(45) NOT NULL,
  `img_historia` varchar(105) NOT NULL,
  `img_sobre` varchar(105) NOT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_sobre_empresa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_sobre_empresa`
--

LOCK TABLES `tbl_sobre_empresa` WRITE;
/*!40000 ALTER TABLE `tbl_sobre_empresa` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_sobre_empresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_status_mesa`
--

DROP TABLE IF EXISTS `tbl_status_mesa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_status_mesa` (
  `id_status_mesa` int(11) NOT NULL AUTO_INCREMENT,
  `nome_status` varchar(50) NOT NULL,
  PRIMARY KEY (`id_status_mesa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_status_mesa`
--

LOCK TABLES `tbl_status_mesa` WRITE;
/*!40000 ALTER TABLE `tbl_status_mesa` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_status_mesa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_status_pedido`
--

DROP TABLE IF EXISTS `tbl_status_pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_status_pedido` (
  `id_status_pedido` int(11) NOT NULL AUTO_INCREMENT,
  `status_pedido` varchar(45) NOT NULL,
  PRIMARY KEY (`id_status_pedido`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_status_pedido`
--

LOCK TABLES `tbl_status_pedido` WRITE;
/*!40000 ALTER TABLE `tbl_status_pedido` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_status_pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_status_reserva`
--

DROP TABLE IF EXISTS `tbl_status_reserva`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_status_reserva` (
  `id_status_reserva` int(11) NOT NULL AUTO_INCREMENT,
  `nome_status` varchar(45) NOT NULL,
  PRIMARY KEY (`id_status_reserva`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_status_reserva`
--

LOCK TABLES `tbl_status_reserva` WRITE;
/*!40000 ALTER TABLE `tbl_status_reserva` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_status_reserva` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_tipo_despesa`
--

DROP TABLE IF EXISTS `tbl_tipo_despesa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_tipo_despesa` (
  `id_tipo_saida` int(11) NOT NULL AUTO_INCREMENT,
  `nome_tipo` varchar(100) NOT NULL,
  PRIMARY KEY (`id_tipo_saida`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_tipo_despesa`
--

LOCK TABLES `tbl_tipo_despesa` WRITE;
/*!40000 ALTER TABLE `tbl_tipo_despesa` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_tipo_despesa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_tipo_produto`
--

DROP TABLE IF EXISTS `tbl_tipo_produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_tipo_produto` (
  `id_tipo_produto` int(11) NOT NULL AUTO_INCREMENT,
  `nome_tipo_produto` varchar(50) NOT NULL,
  PRIMARY KEY (`id_tipo_produto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_tipo_produto`
--

LOCK TABLES `tbl_tipo_produto` WRITE;
/*!40000 ALTER TABLE `tbl_tipo_produto` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_tipo_produto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_tipo_saida`
--

DROP TABLE IF EXISTS `tbl_tipo_saida`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_tipo_saida` (
  `id_tipo_saida` int(11) NOT NULL AUTO_INCREMENT,
  `nome_tipo` varchar(100) NOT NULL,
  PRIMARY KEY (`id_tipo_saida`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_tipo_saida`
--

LOCK TABLES `tbl_tipo_saida` WRITE;
/*!40000 ALTER TABLE `tbl_tipo_saida` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_tipo_saida` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_unidades`
--

DROP TABLE IF EXISTS `tbl_unidades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_unidades` (
  `id_unidade` int(11) NOT NULL AUTO_INCREMENT,
  `nome_unidade` varchar(45) NOT NULL,
  PRIMARY KEY (`id_unidade`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_unidades`
--

LOCK TABLES `tbl_unidades` WRITE;
/*!40000 ALTER TABLE `tbl_unidades` DISABLE KEYS */;
INSERT INTO `tbl_unidades` VALUES (1,'Jandira');
/*!40000 ALTER TABLE `tbl_unidades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'dbtheribs_ws'
--

--
-- Dumping routines for database 'dbtheribs_ws'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-10-01 23:37:07
