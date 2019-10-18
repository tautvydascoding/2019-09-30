


CREATE DATABASE  `hospital9`;


-- sukuriame lentele
CREATE TABLE IF NOT EXISTS doctors (
      id INT UNSIGNED     AUTO_INCREMENT PRIMARY KEY,
      name VARCHAR(30) not NULL,
      lname VARCHAR(30) NOT NULL
	  );

	CREATE TABLE IF NOT EXISTS patients (
     id INT(6) UNSIGNED     AUTO_INCREMENT PRIMARY KEY,
     name VARCHAR(30) not NULL,
     lname VARCHAR(30) NOT NULL,
     doctor_id INT(6) NOT NULL
     );

CREATE TABLE IF NOT EXISTS img (
	 id INT(6) UNSIGNED     AUTO_INCREMENT PRIMARY KEY,
	 name VARCHAR(60) not NULL,
	 doctor_id INT(6) NOT NULL
	 );


	 INSERT INTO doctors VALUES ( NULL, 'Tim' , 'Logan');
	 SELECT * FROM doctors;

	 INSERT INTO doctors VALUES ( NULL, 'Tim' , 'Logan');
	 INSERT INTO doctors VALUES ( NULL, 'Paul' , 'Leo');
    INSERT INTO doctors VALUES ( NULL, 'Ona' , 'Onutaite');
    INSERT INTO doctors VALUES ( NULL, 'Lite' , 'Rahe');
    INSERT INTO doctors VALUES ( NULL, 'Koris' , 'Pitas');

    INSERT INTO patients VALUES ( NULL, 'Mark' , 'John', 2);
    INSERT INTO patients VALUES ( NULL, 'Tom' , 'Karlos', 2);
    INSERT INTO patients VALUES ( NULL, 'Aris' , 'Tiedo', 1);
    INSERT INTO patients VALUES ( NULL, 'Tom' , 'Kori', 3);
    INSERT INTO patients VALUES ( NULL, 'Co' , 'Jo', 1);
    INSERT INTO patients VALUES ( NULL, 'Tom' , 'Naro', 5);
    INSERT INTO patients VALUES ( NULL, 'Jili' , 'Joli', 4);

    INSERT INTO img VALUES ( NULL, 'foto.jpg' , 5);
    INSERT INTO img VALUES ( NULL, 'foto2.jpg' , 1);
    INSERT INTO img VALUES ( NULL, 'foto3.jpg' , 3);


    --





