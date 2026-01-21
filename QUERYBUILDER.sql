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


/* TABLE ANGGOTA */

class Anggota extends Database;

CREATE TABLE anggota (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    npm VARCHAR(20) NOT NULL,
    quotes TEXT,
    foto VARCHAR(255)
);

INSERT INTO anggota (nama, npm, quotes, foto) VALUES ('nama', 'npm', 'quotes', 'foto');

UPDATE anggota
SET 
    nama = 'nama',
    npm = 'npm',
    quotes = 'quotes',
    foto = 'file'
WHERE id = 1;

DELETE FROM anggota WHERE id = 1;