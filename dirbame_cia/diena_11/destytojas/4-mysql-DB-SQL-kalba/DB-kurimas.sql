

show databases;

-- issirenkam DB, kurioje visos komandos veiks
use mysql;

show tables;  -- parodo visas lenteles(isirinktos DB)

-- paemimas duomenu (is issirinktos DB)
-- SELECT kokius stulpelius  FROM is kurios lenteles;
SELECT *  FROM user;

SELECT password, User, Grant_priv FROM user;

 CREATE DATABASE  `hospital9`;
 -- arba
 CREATE DATABASE  hospital9;
show databases;  --test

-- sukuriam lentele
CREATE TABLE IF NOT EXISTS doctors (
     id INT(5) UNSIGNED     AUTO_INCREMENT PRIMARY KEY,
     name VARCHAR(30) not NULL,
     lname VARCHAR(30) NOT NULL
     );
-- INSERT INTO lenteles pavadinimas VALUES (kiekvieno stulpelio duomenis eiles tvarka);
//-------------DOCTORS----------
--                         id     name   lname
INSERT INTO doctors VALUES (NULL, "Tim", "Logan");
INSERT INTO doctors VALUES (NULL, "Paul", "Leo");
INSERT INTO doctors VALUES ("", "Ona", "Onutaite");
INSERT INTO doctors VALUES ("", "Lite", "Rene");
INSERT INTO doctors VALUES ("", "Koris", "Pitas");
-------------patients---------------
CREATE TABLE patients (
   id INT(6) AUTO_INCREMENT PRIMARY KEY,
   name varchar(25),
   lname varchar(30),
   doctor_id INT(6)
   );
INSERT INTO patients VALUES (NULL, "Mark", "John", 2);
INSERT INTO patients VALUES (NULL, "Tom", "karlos", 2 );
INSERT INTO patients VALUES ("", "Aris", "Tiedo", 1 );
INSERT INTO patients VALUES ("", "Tom", "Kori", 3 );
INSERT INTO patients VALUES ("", "Co", "Jo", 1 );
INSERT INTO patients VALUES ("", "Tom", "Naro", 5 );
INSERT INTO patients VALUES ("", "Jili", "Joli", 4 );
-------------IMG---------------
Create TABLE `img` (
      id INT(6) AUTO_INCREMENT PRIMARY KEY,
      name VARCHAR(55),
      client_id int(6)
    );

INSERT INTO img  VALUES  ('', 'pic-46.jpg', '5');
INSERT INTO img  VALUES  ('', 'pic-46.PNG', '1');
INSERT INTO img  VALUES  ('', 'pic-456.jpg', '3');
INSERT INTO img  VALUES  ('', 'pic-4234234.GIF', '2');
INSERT INTO img  VALUES  ('', 'pic-4622.GIF', '4');
SELECT * FROM doctors; -- test



 --
