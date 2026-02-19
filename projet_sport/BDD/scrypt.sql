CREATE DATABASE cours_sport;
use cours_sport;

CREATE TABLE membres (
    id int not null AUTO_INCREMENT,
    genre BOOLEAN,
    nom varchar (255) not null,
    prenom varchar (255) not null,
    mdp varchar(255) not null,
    email varchar (255) not null UNIQUE,
    telephone varchar (255) not null UNIQUE,
    adresse varchar (255) not null,
    PRIMARY KEY (id)
    );

INSERT INTO membres (genre,nom,prenom,mdp,email,telephone,adresse) value ('0','Camara','Allama','1234','allamacamara1@gmail.com','0641339356','83 RUE DU CHEVALERET 75013 PARIS');
INSERT INTO membres (genre,nom,prenom,mdp,email,telephone,adresse) value ('0','Camara','mohamed','1234','allamacamara2@gmail.com','0641339357','83 RUE DU CHEVALERET 75013 PARIS');