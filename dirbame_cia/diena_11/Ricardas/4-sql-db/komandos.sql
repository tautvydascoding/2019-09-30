CREATE TABLE songs (
  id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  length FLOAT NOT NULL,
  album_id INT NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (album_id) REFERENCES albums(id)
)

SELECT bands.name AS 'Band Name'
FROM bands;

SELECT * FROM albums
WHERE release_year IS NOT NULL
ORDER BY release_year
LIMIT 1

SELECT DISTINCT bands.name AS 'Band Name'
FROM bands
JOIN albums ON bands.id = albums.band_id;

SELECT bands.name AS 'Band Name'
FROM bands
LEFT JOIN albums ON bands.id = albums.band_id
GROUP BY albums.band_id
HAVING COUNT(albums.id) = 0;

SELECT
  albums.name as Name,
  albums.release_year as 'Release Year',
  SUM(songs.length) as 'Duration'
FROM albums
JOIN songs on albums.id = songs.album_id
GROUP BY songs.album_id
ORDER BY Duration DESC
LIMIT 1;

UPDATE albums
SET release_year = 1986
WHERE id = 4;

INSERT INTO albums (name, release_year, band_id)
VALUES ('Favorite Album Name', 2000, 8);

DELETE FROM albums
WHERE id = 19;

SELECT AVG(length) as 'Average Song Duration'
FROM songs;

SELECT
  albums.name AS 'Album',
  albums.release_year AS 'Release Year',
  MAX(songs.length) AS 'Duration'
FROM albums
JOIN songs ON albums.id = songs.album_id
GROUP BY songs.album_id;

SELECT
  bands.name AS 'Band',
  COUNT(songs.id) AS 'Number of Songs'
FROM bands
JOIN albums ON bands.id = albums.band_id
JOIN songs ON albums.id = songs.album_id
GROUP BY albums.band_id;



show databases;
use duomenuBazesPavadinimas; -- !!! nurodai su kuria DB nuo siol dirbsi !!!
show tables;  -- parodo visas DB lenteles

-- '*' yra stulpeliu pavadinimai
-- 'user' yra lenteles pavadinimas
SELECT * FROM user;    -- issirenki duomenis, kuriuos nori surasti DB-je
SELECT USER, PASSWORD, password_expired FROM user;


" "
' '
` ` - tables, db pavadinimams
 word kabute - !!!! neveikia



 -- tratata - spaltazodis
 -- username - pas kai kuriuos negali tureti skaiciu!!!
 CREATE USER 'tautvydas11'@'localhost' IDENTIFIED BY 'tratata'  PASSWORD EXPIRE NEVER;
 ALTER USER 'tautvydas11'@'localhost' PASSWORD EXPIRE NEVER;
 GRANT ALL PRIVILEGES ON * . * TO 'tautvydas11'@'localhost' WITH GRANT OPTION;


 CREATE DATABASE  `hospital4`;

 CREATE DATABASE IF NOT EXISTS `hospital4` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;


USER     IF NOT EXISTS
 CREATE DATABASE IF NOT EXISTS  `hospital6` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
		TABLE    IF NOT EXISTS



// ====== naudingos kitos:
// reset autoincreament :
ALTER TABLE tablename AUTO_INCREMENT = 1;   // A) budas
DBCC CHECKIDENT (mytable, RESEED, 0);       // B) budas

//===========pvz============
use duomenuBazesPavadinimas;   // pasikeisti DB  pries kuriant lenteles




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



// -------SQL komandos----------------------
` - geros kabutes
' - geros kabutes
‘  - blogos kabutes


SELECT column1, column2, ...
	FROM table_name
	WHERE condition1 AND condition2 AND condition3 ...;
	WHERE condition1 OR condition2 OR condition3 ...;
	WHERE NOT condition;
	WHERE CustomerName LIKE 'a%'; 				 // PRASIDEDA "a" zodis
	ORDER BY column1, column2, ... ASC|DESC;     // rikiavimas
	ORDER BY Country ASC, CustomerName DESC;

INSERT INTO table_name
	VALUES (value1, value2, value3, ...);

INSERT INTO Customers (CustomerName, City, Country)
	VALUES ('Cardinal', 'Stavanger', 'Norway');


DELETE FROM table_name
	WHERE condition;

UPDATE table_name
	SET column1 = value1, column2 = value2, ...
	WHERE condition;


 SELECT TOP 3 * FROM Customers;
 // BEVEIK TAS PATS
 SELECT * FROM Customers LIMIT 3;


// rikiuoti pagal kaina
SELECT MIN(column_name)
	FROM table_name
	WHERE condition;

SELECT MIN(Price) AS SmallestPrice
	FROM Products;

SELECT AVG(column_name)
	FROM table_name
	WHERE condition;

SELECT * FROM Customers
	WHERE City LIKE 'ber%';
	WHERE Country IN ('Germany', 'France', 'UK');
	WHERE Country NOT IN ('Germany', 'France', 'UK');
	WHERE Country IN (SELECT Country FROM Suppliers);

SELECT * FROM Products
	WHERE Price BETWEEN 10 AND 20;

SELECT Orders.OrderID, Customers.CustomerName
	FROM Orders
	INNER JOIN Customers ON Orders.CustomerID = Customers.CustomerID;
