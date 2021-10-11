create database db_carros;

use db_carros;

CREATE TABLE IF NOT EXISTS `users` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
    `email` varchar(100) NOT NULL,
    `password` varchar(150) NOT NULL,
    `created_at` DATETIME DEFAULT null,
	`updated_at` DATETIME DEFAULT null,
    PRIMARY KEY (`id`)
    );
    
INSERT INTO `users` (`id`, `email`, `password`, `created_at`) VALUES (1, "admin@admin.com", "$2y$10$v0Pj26vi2qpUMy4i7QcdeuzKhDBIFwicN3AjC4zt0DPMI99js3znW", current_timestamp());

CREATE TABLE IF NOT EXISTS `carros` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`user_id` int(11) NOT NULL,
`nome_veiculo` varchar(100) NOT NULL,
`link` varchar(250) NOT NULL,
`ano` varchar(10) NOT NULL,
`combustivel` varchar(20) NOT NULL,
`portas` varchar(20) NOT NULL,
`quilometragem` varchar(100) NOT NULL,
`cambio` varchar(20) NOT NULL,
`cor` varchar(20) NOT NULL,
`created_at` DATETIME DEFAULT null,
`updated_at` DATETIME DEFAULT null,
PRIMARY KEY(`id`)
);




