uzduotis:
-- 0. istrinti paskutine nuotrauka
-- 0. Pakeisti Litos pavarde i Litaitė
-- 1. ISVESTI SURIKIUOTUS GYTYTOJUS PAGAL pavarde
-- 2. ISVESTI GYTYTOJUS kuriu id mazesnis uz 3
-- 3. ISVESTI paciantus kuriu vardas is raides "A"

-- UZDUOTIS  1.1  (SELECT) : ISVESTI 4 IR 5 gydytoja
-- UZDUOTIS  1.2  (SELECT) : ISVESTI visus gydytojus, kuriu vardas: 'Tim' ARBA pavarde 'Leo'
-- UZDUOTIS  1.3  (SELECT): isvesti visus gydytojus, kuriu 'id' mazesnis uz 4
-- UZDUOTIS  1.4  (SELECT): isvesti visus gydytojus, bet ne 'Ona'
-- UZDUOTIS  1.5  (SELECT): isvesti visus paciantus, surikiuotus pagal varda
-- // UZDUOTIS 2: pervadinti gydytoja 'Lita' i 'Litas'



-- UZDUOTIS UPDATE- pakeisti Koris pavarde i Makalas (suradus pagal id)
-- UZDUOTIS UPDATE- pakeisti Koris pavarde i Paulaitis (suradus pagal id ir pavarde)
-- UZDUOTIS (select LIKE)- paimti visus gydytojus, kuriu pavarde parsideda is "L" raides

-- patikrinam ar yra doctors ir patients bazese vardu is L raides
SELECT * FROM doctors WHERE doctors.lname LIKE "L%";
 SELECT * FROM patients WHERE patients.lname LIKE "L%";


// uzduotis 1: istrinti gydytoja "Koris"
DELETE FROM doctors 	WHERE name = "Koris" LIMIT 1;


// uzduotis 2:  Pakeisti Paciento "Co" varda i "Karolis"
UPDATE patients
  SET name="Jili"
  WHERE id=7;
  +----+------+--------+-----------+
  | id | name | lname  | doctor_id |
  +----+------+--------+-----------+
  |  1 | Mark | John   |         2 |
  |  2 | Tom  | Karlos |         2 |
  |  3 | Aris | Tiedo  |         1 |
  |  4 | Tom  | Kori   |         3 |
  |  5 | Co   | Jo     |         1 |
  |  6 | Tom  | Naro   |         5 |
  |  7 | Jili | Joli   |         4 |
// uzduotis 3.1: visu pacientu, kuriu vardas yra "Tom" -  varda pakeisti i "Tomas"

// uzduotis 3.2: visu pacientu, kuriu vardas prasideda "T" -  docotor_id pakeisti i "4"
// uzduotis 4: gauti paciento "Mark" daktaro pavarde
SELECT doctors.lname
FROM doctors
INNER JOIN patients
ON doctors.id = patients.doctor_id
WHERE patients.name="Mark";

Sitam uzdaviniui dar tinka JOIN komanda

arba
SELECT doctors.lname FROM doctors
WHERE doctors.id  IN (SELECT doctor_id FROM PATIENTS WHERE patients.name="Mark");
