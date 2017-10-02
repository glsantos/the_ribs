-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: localhost    Database: dbtheribs_ws
-- ------------------------------------------------------
-- Server version	5.7.10-log

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
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-10-02 15:19:40
