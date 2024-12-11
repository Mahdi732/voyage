CREATE DATABASE voyage;
USE voyage;
CREATE TABLE client (
    id_client int(11) AUTO_INCREMENT,
    nom varchar(100),
    prenom varchar(100),
    email varchar(150) UNIQUE,
    telephone varchar(15),
    address text,
    data_naissance date,
    PRIMARY KEY (id_client)
);
CREATE TABLE activite (
    id_activite int(11) AUTO_INCREMENT,
    titre varchar(150),
    description text,
    destination varchar(100),
    prix decimal(10,2) NOT NULL,
    date_debut date,
    date_fin date,
    places_desponsibles int(11),
    PRIMARY KEY (id_activite)
);
CREATE TABLE reservation (
    id_reservation int(11) AUTO_INCREMENT,
    id_client int(11),
    id_activite int(11),
    date_reservation timestamp,
    statu enum('En attent', 'Confirmée', 'Annulée'),
    PRIMARY KEY (id_reservation),
    FOREIGN KEY (id_client) REFERENCES client(id_client),
    FOREIGN KEY (id_activite) REFERENCES activite(id_activite) 
);

-- modifier champs de table
ALTER TABLE `activite` MODIFY `id_activite` INT(11) NOT NULL AUTO_INCREMENT;
--  Ajouter une nouvelle réservation.
$sql = "INSERT INTO reservation (id_reservation , id_client , id_activite , date_reservation, statu) VALUES ('$id_reservation', '$id_client', '$id_activite', '$date_reservation', '$statu')";
--  Modifier les détails d’une Activité.
UPDATE `activite` SET `titre` = 'Et corpori' WHERE `activite`.`id_activite` = 22;
-- Supprimer une réservation.
DELETE FROM `reservation` WHERE `reservation`.`id_reservation` = 23

-- la requete de jointure entre les tables pour selectionner
SELECT a.* FROM activite as a  INNER JOIN reservation as r on r.id_activite = a.id_activite INNER JOIN client as c on r.id_client = c.id_client 
WHERE nom = "Ruth";
