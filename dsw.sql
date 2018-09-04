CREATE DATABASE dsw;

USE dsw;

CREATE TABLE IF NOT EXISTS users (
    ID int AUTO_INCREMENT PRIMARY KEY, 
    username VARCHAR(20), 
    email VARCHAR(25), 
    password VARCHAR(20), 
    timestamp TIMESTAMP
);

CREATE TABLE IF NOT EXISTS boards (
	ID int AUTO_INCREMENT PRIMARY KEY,
	timestamp TIMESTAMP,
	userID int,
	FOREIGN KEY (userID) REFERENCES users(ID)
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

