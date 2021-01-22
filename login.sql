CREATE DATABASE SQL_Injection;
CREATE TABLE usuarios (id INT(6) AUTO_INCREMENT PRIMARY KEY,nombres VARCHAR(150) NOT NULL, usuario VARCHAR(150) NOT NULL, password VARCHAR(150) NOT NULL);
INSERT INTO usuarios (nombres,usuario, password) VALUES ("adrian","Adrian", "P@ssw0rd");
INSERT INTO usuarios (nombres,usuario, password) VALUES ("Marta","Marta", "H@kantor1");
INSERT INTO usuarios (nombres,usuario, password) VALUES ("admin","admin", "R@@T3");