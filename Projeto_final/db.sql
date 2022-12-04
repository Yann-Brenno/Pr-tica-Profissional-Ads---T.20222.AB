-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.11.0-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para votos
CREATE DATABASE IF NOT EXISTS `votos` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `votos`;

-- Copiando estrutura para tabela votos.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(10) NOT NULL AUTO_INCREMENT,
  `login_usuario` varchar(100) NOT NULL,
  `senha_usuario` varchar(100) NOT NULL,
  `nivel_usuario` int(5) NOT NULL,
  `id_funcionario` int(5) DEFAULT NULL,
  `matricula` int(255) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela votos.usuarios: ~2 rows (aproximadamente)
DELETE FROM `usuarios`;
INSERT INTO `usuarios` (`id_usuario`, `login_usuario`, `senha_usuario`, `nivel_usuario`, `id_funcionario`, `matricula`) VALUES
	(1, 'n.yann.ramos', '36e1a5072c78359066ed7715f5ff3da8', 3, 0, 215720),
	(2, 'test', '36e1a5072c78359066ed7715f5ff3da8', 2, 0, 212121);

-- Copiando estrutura para tabela votos.votos
CREATE TABLE IF NOT EXISTS `votos` (
  `cpf` varchar(255) DEFAULT NULL,
  `nome` text DEFAULT NULL,
  `cidade` text DEFAULT NULL,
  `voto_presidente` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela votos.votos: ~3 rows (aproximadamente)
DELETE FROM `votos`;
INSERT INTO `votos` (`cpf`, `nome`, `cidade`, `voto_presidente`) VALUES
	('13303935467', 'yann brenno da costa ramos', 'Campina Grande', 22),
	('133039354672', 'yann brenno da costa ramos2', 'Campina Grande', 22),
	('123456789', 'TESTE', 'Narnia', 99);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
