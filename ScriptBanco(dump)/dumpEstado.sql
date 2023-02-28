-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           5.7.19 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando dados para a tabela saga1.estados: ~25 rows (aproximadamente)
/*!40000 ALTER TABLE `estados` DISABLE KEYS */;
INSERT INTO `estados` (`id`, `nome`, `sg_estado`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Acre', 'AC', NULL, NULL, NULL),
	(2, 'Alagoas', 'AL', NULL, NULL, NULL),
	(3, 'Amapá', 'AP', NULL, NULL, NULL),
	(4, 'Amazonas', 'AM', NULL, NULL, NULL),
	(5, 'Bahia', 'BA', NULL, NULL, NULL),
	(6, 'Ceará', 'CE', NULL, NULL, NULL),
	(7, 'Distrito Federal', 'DF', NULL, NULL, NULL),
	(8, 'Espírito Santo', 'ES', NULL, NULL, NULL),
	(9, 'Goiás', 'GO', NULL, NULL, NULL),
	(10, 'Maranhão', 'MA', NULL, NULL, NULL),
	(11, 'Mato Grosso', 'MT', NULL, NULL, NULL),
	(12, 'Mato Grosso do Sul', 'MS', '2017-10-12 12:33:58', NULL, NULL),
	(13, 'Minas Gerais', 'MG', NULL, NULL, NULL),
	(14, 'Pará', 'PA', NULL, NULL, NULL),
	(15, 'Paraíba', 'PB', NULL, NULL, NULL),
	(16, 'Paraná', 'PR', NULL, NULL, NULL),
	(17, 'Pernambuco', 'PE', NULL, NULL, NULL),
	(18, 'Piauí', 'PI', NULL, NULL, NULL),
	(19, 'Rio de Janeiro', 'RJ', NULL, NULL, NULL),
	(20, 'Rio Grande do Norte', 'RN', NULL, NULL, NULL),
	(21, 'Rio Grande do Sul', 'RS', NULL, NULL, NULL),
	(22, 'Rondônia', 'RO', NULL, NULL, NULL),
	(23, 'Roraima', 'RR', NULL, NULL, NULL),
	(24, 'Santa Catarina', 'SC', NULL, NULL, NULL),
	(25, 'São Paulo', 'SP', NULL, NULL, NULL),
	(26, 'Sergipe', 'SE', NULL, NULL, NULL),
	(27, 'Tocantins', 'TO', NULL, NULL, NULL);
/*!40000 ALTER TABLE `estados` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;