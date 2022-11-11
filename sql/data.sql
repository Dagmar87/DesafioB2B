CREATE DATABASE usuariophpdb;

Create table `usuarios` (
`id` int(11) NOT NULL AUTO_INCREMENT,  
`nome` varchar(200) NOT NULL, 
`email` varchar(100) NOT NULL, 
`senha` varchar(8) NOT NULL,
`cpf` varchar(11) NOT NULL,
`login` varchar(11) NOT NULL,
PRIMARY KEY (`id`)
)