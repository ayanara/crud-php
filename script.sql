CREATE TABLE IF NOT EXISTS `Usuarios` (
	`id` int NOT NULL AUTO_INCREMENT UNIQUE,
	`Nome` varchar(300) NOT NULL DEFAULT '',
	`Nivel_de_permissao` int NOT NULL,
	`CPF` varchar(11) NOT NULL UNIQUE DEFAULT '',
	`EMAIL` varchar(300) NOT NULL UNIQUE DEFAULT '',
	`senha` varchar(300) NOT NULL DEFAULT '',
	PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `conteudo_de_materiais` (
	`id` int NOT NULL AUTO_INCREMENT UNIQUE,
	`Titulo` varchar(300) NOT NULL DEFAULT '',
	`ano_escolar` int NOT NULL,
	`descricao` varchar(2000) NOT NULL DEFAULT '',
	`disciplina` int NOT NULL,
	`Imagem` varchar(1000) DEFAULT '',
	`Link_video` varchar(1000) DEFAULT '',
	`arquivo_material` varchar(1000) DEFAULT '',
	PRIMARY KEY (`id`)
);