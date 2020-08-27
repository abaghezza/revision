
-- base de donnees: 'agence'
--
create database if not exists agence default character set utf8 collate utf8_general_ci;
use agence;
-- --------------------------------------------------------
-- creation des tables

set foreign_key_checks =0;

-- table client
drop table if exists client;
create table client (
	cli_id int not null auto_increment primary key,
	cli_prenom varchar(50) not null,
	cli_nom varchar(50) not null,
	cli_adresse varchar(100) not null,
	cli_ville varchar(50) not null,
	cli_cp varchar(5) not null
)engine=innodb;

-- table articles
drop table if exists article;
create table article (
	art_id int not null auto_increment primary key,
	art_type varchar(50) not null,
	art_carac varchar (9) not null,
	art_adresse varchar(50) not null
) engine=innodb;

set foreign_key_checks = 1;

