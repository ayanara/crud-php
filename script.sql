CREATE TABLE IF NOT EXISTS `user` (
	`id` int NOT NULL AUTO_INCREMENT UNIQUE,
	`nome` varchar(300) NOT NULL DEFAULT '',
	`nivel_de_permissao` int NOT NULL,
	`cpf` varchar(11) NOT NULL UNIQUE DEFAULT '',
	`email` varchar(300) NOT NULL UNIQUE DEFAULT '',
	`senha` varchar(300) NOT NULL DEFAULT '',
	PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `conteudo_de_materiais` (
	`id` int NOT NULL AUTO_INCREMENT UNIQUE,
	`titulo` varchar(300) NOT NULL DEFAULT '',
	`ano_escolar` int NOT NULL,
	`descricao` varchar(2000) NOT NULL DEFAULT '',
	`disciplina` int NOT NULL,
	`imagem` varchar(1000) DEFAULT '',
	`link_video` varchar(1000) DEFAULT '',
	`arquivo_material` varchar(1000) DEFAULT '',
	PRIMARY KEY (`id`)
);