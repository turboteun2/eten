--- Tabel waar alle artikelen geplaatst die voor elke gebruiker algemeen telt.
CREATE TABLE artikel (
    id INT NOT NULL AUTO_INCREMENT,
    foto VARCHAR(250) NOT NULL,
    naam VARCHAR(50) NOT NULL,
    categorie VARCHAR(50) NOT NULL,
    houdbaarheid VARCHAR(50) NOT NULL,
    PRIMARY KEY (id)
);

--- Tabel waar elk artikel apart wordt gepresenteerd.
CREATE TABLE artikelen (
    id INT NOT NULL AUTO_INCREMENT,
    art_id INT NOT NULL,
    datum_inlezen VARCHAR(50) NOT NULL,
    datum_houdbaarheid VARCHAR(50) NOT NULL,
    verlopen VARCHAR(1) NOT NULL,
    PRIMARY KEY (id)
);

INSERT INTO artikel () VALUES ();

INSERT INTO artikelen () VALUES ();