CREATE DATABASE kelas;

CREATE TABLE session (
    id int PRIMARY KEY,
    username varchar(50),
	password varchar(50)
)

CREATE TABLE sessionadmin (
    id int PRIMARY KEY,
    username varchar(50),
	password varchar(50)
)

INSERT INTO `session` (`id`, `username`, `password`) VALUES (NULL, 'Tomlut', MD5('Pizza123'));