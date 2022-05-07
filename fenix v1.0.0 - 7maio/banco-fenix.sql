-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.27 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para app_fenix
CREATE DATABASE IF NOT EXISTS `app_fenix` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `app_fenix`;

-- Copiando estrutura para tabela app_fenix.system_logs
CREATE TABLE IF NOT EXISTS `system_logs` (
  `log_id` int NOT NULL AUTO_INCREMENT,
  `log_usr_origin` int DEFAULT NULL,
  `log_message` varchar(255) DEFAULT NULL,
  `log_type` varchar(50) DEFAULT NULL,
  `log_terminal_id` int DEFAULT NULL,
  `log_created` datetime DEFAULT NULL,
  `log_status` int DEFAULT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela app_fenix.system_logs: 78 rows
/*!40000 ALTER TABLE `system_logs` DISABLE KEYS */;
INSERT INTO `system_logs` (`log_id`, `log_usr_origin`, `log_message`, `log_type`, `log_terminal_id`, `log_created`, `log_status`) VALUES
	(1, 0, 'Atualização de credencial para ID de usuário 903 com os dados: Sheldon, scooper@tbbt.com, scooper.corp.com, 2022-05-07 07:10:18 pm', 'Zapier - web', 0, '2022-05-07 07:10:18', 1),
	(2, 0, 'Atualização de credencial para ID de usuário 903 com os dados: Sheldon, scooper@tbbt.com, scooper.corp.com, 2022-05-07 07:10:57 pm', 'Zapier - web', 0, '2022-05-07 07:10:57', 1),
	(3, 0, 'Atualização de credencial para ID de usuário 903 com os dados: teste, aaaaaaaaaaa@oihgjkfdsg.net, scooper.corp.comaaaaaaaaa, 2022-05-07 07:11:28 pm', 'Zapier - web', 0, '2022-05-07 07:11:28', 1),
	(4, 0, 'Atualização de credencial para ID de usuário 903 com os dados: teste, aaaaaaaaaaa@oihgjkfdsg.net, yuyuyuii, 2022-05-07 07:11:52 pm', 'Zapier - web', 0, '2022-05-07 07:11:52', 1),
	(5, 0, 'Atualização de credencial para ID de usuário 903 com os dados: Mark, mark@fb.com, fb.hypnobox.com.br, 2022-05-07 07:12:37 pm', 'Zapier - web', 0, '2022-05-07 07:12:37', 1),
	(6, 0, 'Tentando conectar com usuário wrocha.py@gmail.com...', 'Login - Web', 0, '2022-05-07 08:25:20', 1),
	(7, 0, 'wrocha.py@gmail.com entrou no sistema', 'Login - Web', 0, '2022-05-07 08:25:20', 1),
	(8, 0, 'Usuário teste@api.com criado via web para Zapier.', 'Zapier - web', 0, '2022-05-07 08:25:49', 1),
	(9, 0, 'o agente é insomnia/2022.3.0', 'Login - Web', 0, '2022-05-07 08:43:32', 1),
	(10, 0, 'o agente é Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.54 Safari/537.36', 'Login - Web', 0, '2022-05-07 08:43:35', 1),
	(11, 0, 'o agente é insomnia/2022.3.0', 'Login - Web', 0, '2022-05-07 08:44:17', 1),
	(12, 0, 'o agente é Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.54 Safari/537.36', 'Login - Web', 0, '2022-05-07 08:44:20', 1),
	(13, 0, 'o agente é ', 'Login - Web', 0, '2022-05-07 08:44:49', 1),
	(14, 0, 'o agente é ', 'Login - Web', 0, '2022-05-07 08:46:10', 1),
	(15, 0, 'o agente é 1123', 'Login - Web', 0, '2022-05-07 08:47:03', 1),
	(16, 0, 'o agente é 1123', 'Login - Web', 0, '2022-05-07 08:47:58', 1),
	(17, 0, 'o agente é api.fenix.com', 'Login - Web', 0, '2022-05-07 08:48:37', 1),
	(18, 0, 'o agente é api.fenix.com', 'Login - Web', 0, '2022-05-07 08:49:41', 1),
	(19, 0, 'o agente é api.fenix.com', 'Login - Web', 0, '2022-05-07 08:49:47', 1),
	(20, 0, 'o agente é api.fenix.com', 'Login - Web', 0, '2022-05-07 08:49:51', 1),
	(21, 0, 'o agente é api.fenix.com', 'Login - Web', 0, '2022-05-07 08:53:19', 1),
	(22, 0, 'o agente é api.fenix.com', 'Login - Web', 0, '2022-05-07 08:53:27', 1),
	(23, 0, 'o agente é api.fenix.com', 'Login - Web', 0, '2022-05-07 08:54:10', 1),
	(24, 0, 'o agente é api.fenix.com', 'Login - Web', 0, '2022-05-07 08:54:23', 1),
	(25, 0, 'o agente é api.fenix.com', 'Login - Web', 0, '2022-05-07 08:54:27', 1),
	(26, 0, 'o agente é api.fenix.com', 'Login - Web', 0, '2022-05-07 08:54:34', 1),
	(27, 0, 'Tentando conectar com usuário wrocha.py@gmail.com...', 'Login - Web', 0, '2022-05-07 08:55:17', 1),
	(28, 0, 'wrocha.py@gmail.com entrou no sistema', 'Login - Web', 0, '2022-05-07 08:55:17', 1),
	(29, 0, 'Usuário kart@kart.com criado via web para Zapier.', 'Zapier - web', 0, '2022-05-07 08:55:47', 1),
	(30, 0, 'o agente é api.fenix.com', 'Login - Web', 0, '2022-05-07 08:55:59', 1),
	(31, 0, 'o agente é kart.hypnobox.com.', 'Login - Web', 0, '2022-05-07 08:56:08', 1),
	(32, 0, 'o agente é kart.hypnobox.com.br', 'Login - Web', 0, '2022-05-07 08:56:11', 1),
	(33, 0, 'o agente é kart.hypnobox.com.br', 'Login - Web', 0, '2022-05-07 08:56:18', 1),
	(34, 0, 'Tentando conectar com usuário wrocha.py@gmail.com...', 'Login - Web', 0, '2022-05-07 08:56:39', 1),
	(35, 0, 'wrocha.py@gmail.com entrou no sistema', 'Login - Web', 0, '2022-05-07 08:56:39', 1),
	(36, 0, 'o agente é kart.hypnobox.com.br', 'Login - Web', 0, '2022-05-07 08:56:55', 1),
	(37, 0, 'o agente é kart.hypnobox.com.br', 'Login - Web', 0, '2022-05-07 08:57:25', 1),
	(38, 0, 'o agente é kart.hypnobox.com.br', 'Login - Web', 0, '2022-05-07 08:57:31', 1),
	(39, 0, 'o agente é kart.hypnobox.com.br', 'Login - Web', 0, '2022-05-07 08:58:00', 1);
/*!40000 ALTER TABLE `system_logs` ENABLE KEYS */;

-- Copiando estrutura para tabela app_fenix.tb_users
CREATE TABLE IF NOT EXISTS `tb_users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_password` varchar(32) DEFAULT NULL,
  `user_type` varchar(10) DEFAULT NULL,
  `user_created` varchar(20) DEFAULT NULL,
  `user_updated` varchar(20) DEFAULT NULL,
  `user_deleted` varchar(20) DEFAULT NULL,
  `user_lastlogin` varchar(20) DEFAULT NULL,
  `user_img` varchar(255) DEFAULT NULL,
  `user_status` int DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=104 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela app_fenix.tb_users: 8 rows
/*!40000 ALTER TABLE `tb_users` DISABLE KEYS */;
INSERT INTO `tb_users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_type`, `user_created`, `user_updated`, `user_deleted`, `user_lastlogin`, `user_img`, `user_status`) VALUES
	(102, 'Wesley Rocha', 'wrocha.py@gmail.com', '013de0c99e66d589b96d74eb85d44c58', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(103, 'Admin Fenix', 'admin.fenix@fenixapp.com', 'd65ea8078c670fec9ce618515ca4d0bd', '1', '2022-05-07 04:34:29 ', NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `tb_users` ENABLE KEYS */;

-- Copiando estrutura para tabela app_fenix.tb_zapier_logs
CREATE TABLE IF NOT EXISTS `tb_zapier_logs` (
  `zapierlog_id` int NOT NULL,
  `zapierlog_type` varchar(32) DEFAULT NULL,
  `zapierlog_text` varchar(50) DEFAULT NULL,
  `zapierlog_date` datetime DEFAULT NULL,
  PRIMARY KEY (`zapierlog_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela app_fenix.tb_zapier_logs: 0 rows
/*!40000 ALTER TABLE `tb_zapier_logs` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_zapier_logs` ENABLE KEYS */;

-- Copiando estrutura para tabela app_fenix.tb_zapier_users
CREATE TABLE IF NOT EXISTS `tb_zapier_users` (
  `usrzap_id` int NOT NULL AUTO_INCREMENT,
  `usrzap_name` varchar(32) DEFAULT NULL,
  `usrzap_email` varchar(50) DEFAULT NULL,
  `usrzap_pwd` varchar(32) DEFAULT NULL,
  `usrzap_company` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `usrzap_created` datetime DEFAULT NULL,
  `usrzap_updated` datetime DEFAULT NULL,
  `usrzap_deleted` datetime DEFAULT NULL,
  PRIMARY KEY (`usrzap_id`)
) ENGINE=MyISAM AUTO_INCREMENT=907 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela app_fenix.tb_zapier_users: 0 rows
/*!40000 ALTER TABLE `tb_zapier_users` DISABLE KEYS */;
INSERT INTO `tb_zapier_users` (`usrzap_id`, `usrzap_name`, `usrzap_email`, `usrzap_pwd`, `usrzap_company`, `usrzap_created`, `usrzap_updated`, `usrzap_deleted`) VALUES
	(901, 'John Doe', 'john.doe@gmail.com', '013de0c99e66d589b96d74eb85d44c58', 'fenix.hypnobox.com.br', '2022-05-07 12:31:04', '2022-05-07 12:31:06', NULL),
	(904, 'Wesley', 'wesley@wes.com', 'e11170b8cbd2d74102651cb967fa28e5', 'demo.hypnobox.com.br', '2022-05-07 06:22:00', '2022-05-07 15:08:46', NULL);
/*!40000 ALTER TABLE `tb_zapier_users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
