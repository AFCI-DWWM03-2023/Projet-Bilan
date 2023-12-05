CREATE database bilan ;
use bilan 
DROP TABLE IF EXISTS utilisateur;

CREATE TABLE utilisateur (
    idUtilisateur int AUTO_INCREMENT NOT NULL,
    nom VARCHAR(22),
    prenom VARCHAR(22),
    idRole INT(22) NOT NULL,
    PRIMARY KEY (idUtilisateur)
) ENGINE = InnoDB;

DROP TABLE IF EXISTS role;

CREATE TABLE role (
    idRole int AUTO_INCREMENT NOT NULL,
    roles VARCHAR(22),
    PRIMARY KEY (idRole)
) ENGINE = InnoDB;

DROP TABLE IF EXISTS plaintes;

CREATE TABLE plaintes (
    idPlainte int AUTO_INCREMENT NOT NULL,
    plainte INT(22),
    PRIMARY KEY (idPlainte)
) ENGINE = InnoDB;

DROP TABLE IF EXISTS villecentre;

CREATE TABLE villecentre (
    idVillecentre int AUTO_INCREMENT NOT NULL,
    villecentre VARCHAR(22),
    PRIMARY KEY (idVillecentre)
) ENGINE = InnoDB;

DROP TABLE IF EXISTS intituleforma;

CREATE TABLE intituleforma (
    idIntitule int AUTO_INCREMENT NOT NULL,
    intitule VARCHAR(22),
    PRIMARY KEY (idIntitule)
) ENGINE = InnoDB;

DROP TABLE IF EXISTS atouts;

CREATE TABLE atouts (
    idAtouts int AUTO_INCREMENT NOT NULL,
    atout VARCHAR(22),
    PRIMARY KEY (idAtouts)
) ENGINE = InnoDB;

DROP TABLE IF EXISTS satisfaction;

CREATE TABLE satisfaction (
    idSatisf int AUTO_INCREMENT NOT NULL,
    satisfaction VARCHAR(22),
    PRIMARY KEY (idSatisf)
) ENGINE = InnoDB;

DROP TABLE IF EXISTS reponse;

CREATE TABLE reponse (
    idUtilisateur int AUTO_INCREMENT NOT NULL,
    idPlainte INT(22) NOT NULL,
    idVillecentre INT(22) NOT NULL,
    idIntitule INT(22) NOT NULL,
    idAtouts INT(22) NOT NULL,
    idSatisf INT(22) NOT NULL,
    PRIMARY KEY (
        idUtilisateur,
        idPlainte,
        idVillecentre,
        idIntitule,
        idAtouts,
        idSatisf
    )
) ENGINE = InnoDB;

ALTER TABLE
    utilisateur
ADD
    CONSTRAINT FK_utilisateur_idRole FOREIGN KEY (idRole) REFERENCES role (idRole);

ALTER TABLE
    reponse
ADD
    CONSTRAINT FK_reponse_idUtilisateur FOREIGN KEY (idUtilisateur) REFERENCES utilisateur (idUtilisateur);

ALTER TABLE
    reponse
ADD
    CONSTRAINT FK_reponse_idPlainte FOREIGN KEY (idPlainte) REFERENCES plaintes (idPlainte);

ALTER TABLE
    reponse
ADD
    CONSTRAINT FK_reponse_idVillecentre FOREIGN KEY (idVillecentre) REFERENCES villecentre (idVillecentre);

ALTER TABLE
    reponse
ADD
    CONSTRAINT FK_reponse_idIntitule FOREIGN KEY (idIntitule) REFERENCES intituleforma (idIntitule);

ALTER TABLE
    reponse
ADD
    CONSTRAINT FK_reponse_idAtouts FOREIGN KEY (idAtouts) REFERENCES atouts (idAtouts);

ALTER TABLE
    reponse
ADD
    CONSTRAINT FK_reponse_idSatisf FOREIGN KEY (idSatisf) REFERENCES satisfaction (idSatisf);

    INSERT INTO  
    `role`(`idRole`, `roles`)
values
    (1, "admin"),
    (2, "apprenant"),
    (3, "gerant");

      INSERT INTO  
      `utilisateur`(`idUtilisateur`,`nom`,`prenom`,`idRole`)
      values
      (1,"dupont","clad",1),
      (2,"leffy","roipirate",2),
      (3,"migi","shinichi",3);

