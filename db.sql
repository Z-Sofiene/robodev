create database robodev_db;
use robodev_db;
drop table Etudiant;
CREATE TABLE Etudiant (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    niveau VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL
);
