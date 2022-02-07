CREATE TABLE categorie(
   id INT AUTO_INCREMENT,
   nom_categorie VARCHAR(50) ,
   type VARCHAR(50) ,
   PRIMARY KEY(id)
);

CREATE TABLE email(
   id INT AUTO_INCREMENT,
   email VARCHAR(50) ,
   PRIMARY KEY(id)
);

CREATE TABLE annonce(
   id INT AUTO_INCREMENT,
   nom VARCHAR(50) ,
   description TEXT,
   prix VARCHAR(50) ,
   id_categorie VARCHAR(50) ,
   id_email VARCHAR(50) ,
   id_photo VARCHAR(50) ,
   id_1 INT NOT NULL,
   PRIMARY KEY(id),
   FOREIGN KEY(id_1) REFERENCES email(id)
);

CREATE TABLE photo(
   id INT AUTO_INCREMENT,
   nom_photo VARCHAR(50) ,
   id_1 INT NOT NULL,
   PRIMARY KEY(id),
   FOREIGN KEY(id_1) REFERENCES annonce(id)
);

CREATE TABLE correspond2(
   id INT,
   id_1 INT,
   PRIMARY KEY(id, id_1),
   FOREIGN KEY(id) REFERENCES annonce(id),
   FOREIGN KEY(id_1) REFERENCES categorie(id)
);
