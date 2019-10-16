-- UZDUOTIS UPDATE- pakeisti Koris pavarde i Makalas (suradus pagal id)
-- UZDUOTIS UPDATE- pakeisti Koris pavarde i Paulaitis (suradus pagal id ir pavarde)
-- UZDUOTIS (select LIKE)- paimti visus gydytojus, kuriu pavarde parsideda is "L" raides


SELECT * FROM doctors
WHERE lname LIKE "L%";

-- uzduotis:
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

-- // uzduotis 1: istrinti gydytoja "Koris"
-- // uzduotis 2:  Pakeisti Paciento "Co" varda i "Karolis"
-- // uzduotis 3.1: visu pacientu, kuriu vardas yra "Tom" -  varda pakeisti i "Tomas"
-- // uzduotis 3.2: visu pacientu, kuriu vardas prasideda "T" -  docotor_id pakeisti i "4"
-- // uzduotis 4: gauti paciento "Mark" daktaro pavarde

DELETE FROM doctors WHERE name = "Koris" LIMIT 1;

SELECT doctors, patients
WHERE doctors.lname LIKE "L%"
OR patients.lname LIKE "%L";

UPDATE patients
SET name = "Karolis"
WHERE name = "Co";

UPDATE patients
SET name = "Tomas"
WHERE name = "Tom";

UPDATE patients
SET doctor_id = 4
WHERE name LIKE "T%";

SELECT doctors.lname
FROM doctors
INNER JOIN patients
ON doctors.id = patients.doctor_id
WHERE patients.name = "Mark";

and name = "Mark" IN (SELECT name FROM patients)

SELECT lname
FROM doctors
WHERE id IN (SELECT doctor_id FROM patients WHERE name = "Mark");

or name = "Mark" IN (SELECT name FROM patients);


=======menu========
id    name   pozicija
1    Contact    3
2    Home       1
3    About      2

=======kontaktu puslapis========
id    miestas   adresas    tel_1    tel_2  email
1     Kaunas    Staybu g. 2  86xxx          info@pop.lt
2     London    Wood str. 4  86xxx          info@pop.com


=======about ========
id    antraste        turinys   pozicija   ar_rodyti
1     Musu Istorija    Lorem...  2          true
2     Ka gaminame?     Lorem...  1         true
3     Mes spaudoje     Lorem...  3         false

=======vartotoju klausimai ========
id    vardas   klausimas    tel_1              email
1     Tomas   Lorem....     86xxx          info@pop.lt
2     Julius  Lorem....                   info@pop.com

=======vartotoju atsiliepimai/komentarai ========
id    vardas   user_id   atsiliepimas/komentaras   ar_rodyti   data              email
1     Tomas       13      Lorem....                    true     2010-06-06          Tomas@tomas.lt
2     Julius      64  Lorem....                    false    2010-06-05         julius@julius.lt

======= Prekes/ straisniai   ========
id    pavadinimas   aprasymas      kaina    nuolaida  pozicija      data   kiekis
1     Dviratis       Lorem....     659
2     Paspirtukas     Lorem....     49.99       5           99999
3     Rieduciai       Lorem....     359         20          2

======= Paveiksliukai   ========
id    pavadinimas   aprasymas              pozicija      prekes_id
1     foto1.jpg       Lorem....                  3              1
2     foto2123123.PNG Lorem....                99999            18
3     foto123.jpg       Lorem....                2              5
-- tik pavadinimas nuotraukos, o ne kelias iki ju


======= Reklamos / sukiai  ========
id    pavadinimas               Turinys              pozicija           ar_rodyti
1     pagrindine                  Lorem....                  3            false
2     velykine                    Lorem....                99999           false
3    registraciju skatinimo        Lorem....                2                true
