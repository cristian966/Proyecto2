DROP DATABASE IF EXISTS gaming;
CREATE database if not exists gaming ;
use gaming;


CREATE TABLE IF NOT EXISTS `rol` (
    `id_rol` INT(10) NOT NULL auto_increment,
    `nombre_rol` VARCHAR(50) NOT NULL,
    PRIMARY KEY (`id_rol`)
);

CREATE TABLE IF NOT EXISTS `usuario` (
    `id_usuario` INT(10) NOT NULL AUTO_INCREMENT,
    `nombre_usuario` VARCHAR(50) NOT NULL,
    `contraseña` VARCHAR(16) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `id_rol` INT(10) NOT NULL,
    PRIMARY KEY (`id_usuario`),
    FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`)
);

CREATE TABLE IF NOT EXISTS `categorias` (
    `id_categoria` INT(10) NOT NULL AUTO_INCREMENT,
    `nombre_categoria` VARCHAR(50) NOT NULL,
    PRIMARY KEY (`id_categoria`)
);

CREATE TABLE IF NOT EXISTS `post` (
    `id_post` INT(10) NOT NULL AUTO_INCREMENT,
    `titulo` VARCHAR(50) NOT NULL,
    `texto_post` TEXT NOT NULL,
    `comentario` VARCHAR(255),
    `id_usuario` INT(10),
    `id_categoria` INT(10),
    PRIMARY KEY (`id_post`),
    FOREIGN KEY (`id_usuario`)  REFERENCES `usuario`(`id_usuario`),
    FOREIGN KEY (`id_categoria`) REFERENCES `categorias`(`id_categoria`)
);

CREATE TABLE IF NOT EXISTS `juego` (
    `id_juego` INT(10) NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(50) NOT NULL,
    `descripcion` TEXT NOT NULL,
    `foto` VARCHAR(200),
    `tag` VARCHAR(100),
    PRIMARY KEY (`id_juego`)
);

CREATE TABLE IF NOT EXISTS `noticia` (
    `id_noticias` INT(10) NOT NULL AUTO_INCREMENT,
    `titulo` VARCHAR(50) NOT NULL,
    `texto_noticia` TEXT NOT NULL,
    `id_juego` INT(10), 
    PRIMARY KEY (`id_noticias`),
    FOREIGN KEY (`id_juego`) REFERENCES `juego`(`id_juego`)
);

CREATE TABLE IF NOT EXISTS `review` (
    `id_review` INT(10) NOT NULL AUTO_INCREMENT,
    `titulo` VARCHAR(50) NOT NULL,
    `texto_review` TEXT NOT NULL,
    `id_juego` INT(10),
    PRIMARY KEY (`id_review`),
    FOREIGN KEY (`id_juego`) REFERENCES `juego`(`id_juego`)
);

CREATE TABLE IF NOT EXISTS `guia` (
    `id_guia` INT(10) NOT NULL AUTO_INCREMENT,
    `titulo` VARCHAR(50) NOT NULL,
    `texto_guia` TEXT NOT NULL,
    `id_juego` INT(10),
    PRIMARY KEY (`id_guia`),
    FOREIGN KEY (`id_juego`) REFERENCES `juego`(`id_juego`)
);