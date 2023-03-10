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

-- Copiando dados para a tabela saga1.permissions: ~60 rows (aproximadamente)
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'saga-sistema', 'editar_senha', 'Usuário poderá trocar de senha', NULL, NULL),
	(2, 'view_user', 'Visualiza usuarios', NULL, NULL, NULL),
	(3, 'add_user', 'Adiciona usuario', NULL, '2017-10-04 22:55:40', '2017-10-04 22:55:45'),
	(4, 'edit_user', 'Edita usuario', NULL, NULL, NULL),
	(5, 'desativar_user', 'Desativar usuario', NULL, NULL, NULL),
	(6, 'view_tarefa', 'Visualiza tarefa', NULL, NULL, NULL),
	(7, 'add_tarefa', 'Adiciona tarefa', NULL, NULL, NULL),
	(8, 'edit_tarefa', 'Edita tarefa', NULL, NULL, NULL),
	(9, 'delete_tarefa', 'Deleta tarefa', NULL, NULL, NULL),
	(10, 'view_lembrete', 'Visualizar lembrete', NULL, NULL, NULL),
	(11, 'add_lembrete', 'Adiciona lembrete', NULL, NULL, NULL),
	(12, 'edit_lembrete', 'Edita lembrete', NULL, NULL, NULL),
	(13, 'delete_lembrete', 'Deleta lembrete', NULL, NULL, NULL),
	(14, 'view_notas', 'Visualizar notas', NULL, NULL, NULL),
	(15, 'add_notas', 'Adicionar notas', NULL, NULL, NULL),
	(16, 'edit_notas', 'Edita nota', NULL, NULL, NULL),
	(17, 'view_frenquencia', 'Visualizar frequencia', NULL, NULL, NULL),
	(18, 'add_frequencia', 'Adicionar frequencia', NULL, NULL, NULL),
	(19, 'edit_frequencia', 'Edita frequencia', NULL, NULL, NULL),
	(20, 'view_disciplina', 'Visualizar disciplina', NULL, NULL, NULL),
	(21, 'add_disciplina', 'Adiciona disciplina', NULL, NULL, NULL),
	(22, 'edit_disciplina', 'Edita disciplina', NULL, NULL, NULL),
	(23, 'concluir_disciplina', 'Concluir disciplina', NULL, NULL, NULL),
	(24, 'desativar_disciplina', 'Desativar disciplina', NULL, NULL, NULL),
	(25, 'view_material', 'Visualizar material', NULL, NULL, NULL),
	(26, 'add_material', 'Adiciona material', NULL, NULL, NULL),
	(27, 'edit_material', 'Edita material', NULL, NULL, NULL),
	(28, 'delete_material', 'Deleta material', NULL, NULL, NULL),
	(29, 'view_anotacao', 'Visualizar anotacao', NULL, NULL, NULL),
	(30, 'add_anotacao', 'Adiciona anotacao', NULL, NULL, NULL),
	(31, 'edit_anotacao', 'Edita anotacao', NULL, NULL, NULL),
	(32, 'delete_anotacao', 'Deleta anotacao', NULL, NULL, NULL),
	(33, 'compartilhar_anotacao', 'Compartilha a anotacao com outros usuarios', NULL, NULL, NULL),
	(34, 'view_aviso', 'Visualizar aviso', NULL, NULL, NULL),
	(35, 'add_aviso', 'Adiciona aviso', NULL, NULL, NULL),
	(36, 'edit_aviso', 'Edita aviso', NULL, NULL, NULL),
	(37, 'delete_aviso', 'Deleta aviso', NULL, NULL, NULL),
	(38, 'acionar_aviso', 'Aciona o aviso (pop up/alert)', NULL, NULL, NULL),
	(39, 'view_instituicao', 'Visualizar instituicao', NULL, NULL, NULL),
	(40, 'add_instituicao', 'Adiciona instituicao', NULL, NULL, NULL),
	(41, 'edit_instituicao', 'Edita instituicao', NULL, NULL, NULL),
	(42, 'desativar_instituicao', 'Desativa instituicao', NULL, NULL, NULL),
	(43, 'view_bate', 'Visualiza bate-papo', NULL, NULL, NULL),
	(44, 'view_menssagem', 'Visualiza menssagem', NULL, NULL, NULL),
	(45, 'add_menssagem', 'Adiciona menssagem', NULL, NULL, NULL),
	(46, 'limpar_bate', 'Limpar historico do bate-papo', NULL, NULL, NULL),
	(47, 'view_turma', 'Visualiza turma', NULL, NULL, NULL),
	(48, 'add_turma', 'Adiciona turma', NULL, NULL, NULL),
	(49, 'edit_turma', 'Edita turma', NULL, NULL, NULL),
	(50, 'desativa_turma', 'Desativa turma', NULL, NULL, NULL),
	(51, 'view_curso', 'Visualiza curso', NULL, NULL, NULL),
	(52, 'add_curso', 'Adiciona curso', NULL, NULL, NULL),
	(53, 'edit_curso', 'Edita curso', NULL, NULL, NULL),
	(54, 'desativa_curso', 'Desativa curso', NULL, NULL, NULL),
	(55, 'view_avaliacao', 'Visualizar avaliacao', NULL, NULL, NULL),
	(56, 'add_avaliacao', 'Adiciona avaliacao', NULL, NULL, NULL),
	(57, 'edit_avaliacao', 'Edita avaliacao', NULL, NULL, NULL),
	(58, 'delete_avaliacao', 'Deleta avaliacao', NULL, NULL, NULL),
	(59, 'view_perfil', 'Visualizar Perfil', 'Usuario pode ver seu perfil', NULL, NULL),
	(60, 'view_turno', 'Visualizar Turno', 'teste', NULL, NULL),
	(61, 'add_turno', 'Adiciona Turno', NULL, NULL, NULL),
	(62, 'edit_turno', 'Editar Turno', NULL, NULL, NULL),
	(63, 'delete_turno', 'Deleta Turno', NULL, NULL, NULL);
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;

-- Copiando dados para a tabela saga1.permission_role: ~255 rows (aproximadamente)
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
	(1, 1),
	(2, 1),
	(3, 1),
	(4, 1),
	(5, 1),
	(6, 1),
	(7, 1),
	(8, 1),
	(9, 1),
	(10, 1),
	(11, 1),
	(12, 1),
	(13, 1),
	(14, 1),
	(15, 1),
	(16, 1),
	(17, 1),
	(18, 1),
	(19, 1),
	(20, 1),
	(21, 1),
	(22, 1),
	(23, 1),
	(24, 1),
	(25, 1),
	(26, 1),
	(27, 1),
	(28, 1),
	(29, 1),
	(30, 1),
	(31, 1),
	(32, 1),
	(33, 1),
	(34, 1),
	(35, 1),
	(36, 1),
	(37, 1),
	(38, 1),
	(39, 1),
	(40, 1),
	(41, 1),
	(42, 1),
	(43, 1),
	(44, 1),
	(45, 1),
	(46, 1),
	(47, 1),
	(48, 1),
	(49, 1),
	(50, 1),
	(51, 1),
	(52, 1),
	(53, 1),
	(54, 1),
	(55, 1),
	(56, 1),
	(57, 1),
	(58, 1),
	(59, 1),
	(60, 1),
	(61, 1),
	(62, 1),
	(63, 1),
	(1, 2),
	(2, 2),
	(3, 2),
	(4, 2),
	(5, 2),
	(6, 2),
	(7, 2),
	(8, 2),
	(9, 2),
	(10, 2),
	(11, 2),
	(12, 2),
	(13, 2),
	(14, 2),
	(16, 2),
	(17, 2),
	(19, 2),
	(20, 2),
	(23, 2),
	(24, 2),
	(25, 2),
	(34, 2),
	(35, 2),
	(36, 2),
	(37, 2),
	(38, 2),
	(39, 2),
	(40, 2),
	(41, 2),
	(42, 2),
	(43, 2),
	(44, 2),
	(45, 2),
	(46, 2),
	(47, 2),
	(51, 2),
	(52, 2),
	(53, 2),
	(54, 2),
	(55, 2),
	(59, 2),
	(60, 2),
	(61, 2),
	(62, 2),
	(63, 2),
	(1, 3),
	(2, 3),
	(3, 3),
	(4, 3),
	(5, 3),
	(6, 3),
	(7, 3),
	(8, 3),
	(9, 3),
	(10, 3),
	(11, 3),
	(12, 3),
	(13, 3),
	(14, 3),
	(16, 3),
	(17, 3),
	(19, 3),
	(20, 3),
	(21, 3),
	(22, 3),
	(23, 3),
	(24, 3),
	(34, 3),
	(35, 3),
	(36, 3),
	(37, 3),
	(38, 3),
	(39, 3),
	(43, 3),
	(44, 3),
	(45, 3),
	(46, 3),
	(47, 3),
	(48, 3),
	(49, 3),
	(50, 3),
	(51, 3),
	(52, 3),
	(53, 3),
	(54, 3),
	(59, 3),
	(60, 3),
	(61, 3),
	(62, 3),
	(63, 3),
	(1, 4),
	(10, 4),
	(11, 4),
	(12, 4),
	(13, 4),
	(14, 4),
	(15, 4),
	(16, 4),
	(17, 4),
	(18, 4),
	(19, 4),
	(20, 4),
	(22, 4),
	(25, 4),
	(26, 4),
	(27, 4),
	(28, 4),
	(34, 4),
	(35, 4),
	(36, 4),
	(37, 4),
	(38, 4),
	(39, 4),
	(43, 4),
	(44, 4),
	(45, 4),
	(55, 4),
	(56, 4),
	(57, 4),
	(58, 4),
	(59, 4),
	(60, 4),
	(1, 5),
	(10, 5),
	(11, 5),
	(12, 5),
	(13, 5),
	(14, 5),
	(15, 5),
	(16, 5),
	(17, 5),
	(18, 5),
	(19, 5),
	(20, 5),
	(22, 5),
	(25, 5),
	(26, 5),
	(27, 5),
	(28, 5),
	(34, 5),
	(39, 5),
	(43, 5),
	(44, 5),
	(45, 5),
	(55, 5),
	(56, 5),
	(57, 5),
	(58, 5),
	(59, 5),
	(60, 5),
	(1, 6),
	(6, 6),
	(7, 6),
	(8, 6),
	(9, 6),
	(10, 6),
	(11, 6),
	(12, 6),
	(13, 6),
	(14, 6),
	(17, 6),
	(20, 6),
	(25, 6),
	(29, 6),
	(30, 6),
	(31, 6),
	(32, 6),
	(33, 6),
	(34, 6),
	(35, 6),
	(36, 6),
	(37, 6),
	(38, 6),
	(39, 6),
	(43, 6),
	(44, 6),
	(45, 6),
	(51, 6),
	(55, 6),
	(59, 6),
	(60, 6),
	(1, 7),
	(6, 7),
	(7, 7),
	(8, 7),
	(9, 7),
	(10, 7),
	(11, 7),
	(12, 7),
	(13, 7),
	(14, 7),
	(17, 7),
	(20, 7),
	(25, 7),
	(29, 7),
	(30, 7),
	(31, 7),
	(32, 7),
	(33, 7),
	(34, 7),
	(39, 7),
	(43, 7),
	(44, 7),
	(45, 7),
	(51, 7),
	(55, 7),
	(59, 7),
	(60, 7);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;

-- Copiando dados para a tabela saga1.roles: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'Adm', 'Administrador', NULL, NULL, NULL),
	(2, 'Diretor', 'Diretor da Instituição', NULL, NULL, NULL),
	(3, 'Secretaria', 'Secretaria da Instituição', NULL, NULL, NULL),
	(4, 'Coordenador', 'Coordenador da Instituição', NULL, NULL, NULL),
	(5, 'Professor', 'Professor da Instituição', NULL, NULL, NULL),
	(6, 'Representante', 'Representante de Classe', NULL, NULL, NULL),
	(7, 'Aluno', 'Aluno da Instituição', NULL, NULL, NULL);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;