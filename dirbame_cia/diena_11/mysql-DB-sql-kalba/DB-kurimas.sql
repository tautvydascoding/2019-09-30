show databases; -- parodo visas duomenu duomenuBazesPavadinimas, paleidimas myesql.exe lange

-- issirenkam DB
use mysql; -- pasirinkom mysql
show tables; -- parodo visas lenteles tos db
--po komandos butina ideti kabliataski
--duomenu paemimas is pasirinktos DB
SELECT * FROM user; -- KOKIUS stulpelius paimti is kokios lenteles

SELECT password, User, Grant_priv FROM user;

" "
' '
` ` - tables, db pavadinimams
 word kabute - !!!! neveikia

 CREATE USER 'asta'@'localhost' IDENTIFIED BY 'astapasta'  PASSWORD EXPIRE NEVER; --susikurti vartotoja
ALTER USER 'asta'@'localhost' PASSWORD EXPIRE NEVER; --pakeisti slaptazodi
GRANT ALL PRIVILEGES ON * . * TO 'asta'@'localhost' WITH GRANT OPTION; --susikuria teises, zvaigzdutes reiskia, kad visose DB, visose lentelese

CREATE DATABASE  `hospital4`;  -- sukuria duombaze

CREATE DATABASE IF NOT EXISTS `hospital4` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci; -- collate raso kokia kalba veikius

INT - skaiciai
VARCHAR(30) - tekstas, skliausteliuose ilgis
              salia patartina rasyti not nulla

AUTO_INCREMENT  - automatinis ID priskiriamas
PRIMARY KEY - nebus raktinis stulpelis vienodas

Duomenu baze gali tureti kiek tik nori lenteliu
Susikuriam lentele doctors
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

Kaip ikelti duomenis i lentele:
INSERT INTO doctors VALUES (NULL, 'Tim', 'Logan');
NULL - todel, kad suteiktu index'a.
INSERT INTO patients VALUES (NULL, 'Mark', 'John', 3);
INSERT INTO img VALUES (NULL, 'foto-3.gif', 3);
