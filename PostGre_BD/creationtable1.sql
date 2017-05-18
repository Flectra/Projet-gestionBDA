CREATE TABLE IF NOT EXISTS utilisateur (
	username varchar(40) CONSTRAINT p_keyAdmin PRIMARY KEY,
	password varchar(300),
	salt varchar(30),
	role varchar(30)	
);

CREATE TABLE IF NOT EXISTS RESPO (
	IDRespo SERIAL NOT NULL,
	Firstname varchar(30),
	mail varchar(100),
CONSTRAINT p_keyRespo PRIMARY KEY (IDRespo)
);

CREATE TABLE IF NOT EXISTS CLUB (
	NomClub varchar(50) CONSTRAINT p_keyClub PRIMARY KEY,
	PageFB varchar(200),
	Descriptif varchar(500),
	respo integer,
	CONSTRAINT f_keyRespo FOREIGN KEY (respo) references Respo(IDRespo)
);
	


