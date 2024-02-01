DROP TABLE IF EXISTS Expediteur;


--Informations du client
CREATE TABLE Expediteur(
	exp_id SERIAL PRIMARY KEY,
	exp_nom VARCHAR(50) NOT NULL,
	exp_prenom VARCHAR(100) NOT NULL,
	exp_mail VARCHAR(50),
	exp_numero INT NOT NULL,
	exp_ville VARCHAR(100) NOT NULL,
	exp_adresse VARCHAR(100),
	exp_num_suivi VARCHAR(100)
);

