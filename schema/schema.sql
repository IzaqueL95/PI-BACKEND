CREATE DATABASE pibackend;

USE pibackend;

CREATE TABLE USER (
user_id INT NOT NULL auto_increment,
user_name VARCHAR(30) NOT NULL,
user_email VARCHAR(100) NOT NULL,
user_password VARCHAR(200),
user_tipo char,
user_cpf varchar(11),
user_cnpj varchar(14),
user_score int,
PRIMARY KEY(user_id)
);

CREATE TABLE POSTAGENS(
postagem_id INT NOT NULL auto_increment,
postagem_titulo VARCHAR(20) NOT NULL,
postagem_descricao VARCHAR(100) NOT NULL,
postagem_likes int,
postagem_deslikes int,
postagem_user_id INT NOT NULL,
postagem_empr_ref INT,
postagem_coment_aberto char,
PRIMARY KEY(postagem_id)
);

CREATE TABLE COMENTARIOS(
comentario_id INT NOT NULL auto_increment,
comentario_descricao varchar(60),
comentario_post_id int NOT NULL,
comentario_likes int,
comentario_deslikes int,
comentario_oficial char,
PRIMARY KEY (comentario_id)
);