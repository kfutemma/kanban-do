DROP DATABASE dsw;
CREATE DATABASE dsw;

USE dsw;
/*
CREATE TABLE IF NOT EXISTS users (
    ID int AUTO_INCREMENT PRIMARY KEY, 
    username VARCHAR(20), 
    email VARCHAR(25), 
    password VARCHAR(20), 
    timestamp TIMESTAMP
);
*/
CREATE TABLE IF NOT EXISTS boards (
	ID int AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(30),
	first_column VARCHAR(30),
	second_column VARCHAR(30),
	third_column VARCHAR(30),
	timestamp TIMESTAMP
);

CREATE TABLE IF NOT EXISTS cards (
	ID int AUTO_INCREMENT PRIMARY KEY,
	title VARCHAR(20),
	state VARCHAR(1),
	description VARCHAR(240),
	boardID int,
	timestamp TIMESTAMP,
	FOREIGN KEY (boardID) REFERENCES boards(ID)
);


insert into boards(name, first_column, second_column, third_column)
VALUES ('AAA', 'Coluna 1','Coluna 2','Coluna 3');

insert into cards(title, STATE, description, boardID)
VALUES ('Teste', 1,'Teste de descricao', 1);