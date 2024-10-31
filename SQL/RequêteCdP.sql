-- DROP DATABASE db_cdp;
CREATE DATABASE if NOT EXISTS db_cdp;
USE db_cdp;

-- Creation de la table utilisateur
CREATE TABLE if NOT EXISTS `user` (
	id_user INT PRIMARY KEY AUTO_INCREMENT,
	pseudo VARCHAR(20) NOT NULL,
	`name` VARCHAR(50) NOT NULL,
	`firstname` VARCHAR(50) NOT NULL,
	email VARCHAR(100) NOT NULL,
	`password` VARCHAR(255) NOT NULL,
	registration_date DATE NOT NULL,
	profil_picture BLOB NOT NULL
);

-- Création de la table groupe
CREATE TABLE if NOT EXISTS `group` (
	id_group INT PRIMARY KEY AUTO_INCREMENT,
	`name` VARCHAR(50) NOT NULL,
	`description` LONGTEXT DEFAULT NULL,
	id_admin INT NOT NULL,
	CONSTRAINT `fk_id_user_admin_group` FOREIGN KEY (`id_admin`) REFERENCES `user`(id_user)
);

-- Création de la table groupe utilisateur comme table associative entre la table groupe et la table utilisateur (relation Many to Many)
CREATE TABLE if NOT EXISTS group_user (
	id_user INT NOT NULL,
	id_group INT NOT NULL,
	PRIMARY KEY (id_user, id_group),
	CONSTRAINT fk_id_user_group FOREIGN KEY (id_user) REFERENCES `user`(id_user),
	CONSTRAINT fk_id_group_user FOREIGN KEY (id_group) REFERENCES `group`(id_group)
);

-- Création de la table événement
CREATE TABLE if NOT EXISTS `event` (
	id_event INT PRIMARY KEY AUTO_INCREMENT,
	title VARCHAR(50) NOT NULL,
	`description` LONGTEXT DEFAULT NULL,
	start_date DATE NOT NULL,
	end_date DATE NOT NULL,
	place VARCHAR(255) DEFAULT NULL,
	category VARCHAR(50) DEFAULT NULL,
	private BOOL DEFAULT TRUE,
	id_admin INT NOT NULL,
	CONSTRAINT fk_id_user_admin_event FOREIGN KEY (id_admin) REFERENCES `user`(id_user)
);

-- Création de la table associative `user_event` qui joint la table user et la table event avec une relation many to many
CREATE TABLE if NOT EXISTS `user_event` (
	id_user INT NOT NULL,
	id_event INT NOT NULL,
	PRIMARY KEY (id_user, id_event),
	CONSTRAINT fk_id_user_event FOREIGN KEY (id_user) REFERENCES `user`(id_user),
	CONSTRAINT fk_id_event_user FOREIGN KEY (id_event) REFERENCES `event`(id_event)
);

-- 