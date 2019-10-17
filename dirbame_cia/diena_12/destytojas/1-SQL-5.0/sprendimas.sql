-- UZDUOTIS (select LIKE)- paimti visus gydytojus,
-- kuriu pavarde parsideda is "L" raides

SELECT * FROM doctors
        WHERE  doctors.lname LIKE "L%" ;
SELECT * FROM   patients
        WHERE    patients.lname LIKE "L%";


// uzduotis 1: istrinti gydytoja "Koris"
delete FROM doctors  WHERE name = "Koris" LIMIT 1;
SELECT * FROM doctors;

// uzduotis 2:  Pakeisti Paciento "Co" varda i "Karolis"
// uzduotis 3.1: visu pacientu, kuriu vardas yra "Tom" -  varda pakeisti i "Tomas"
// uzduotis 3.2: visu pacientu, kuriu vardas prasideda "T" -  docotor_id pakeisti i "4"
// uzduotis 4: gauti paciento "Mark" daktaro pavarde

SELECT doctors.lname    FROM doctors
                        INNER JOIN patients
                        ON doctors.id = patients.doctor_id
                        WHERE patients.name = "Mark";

-- ARBAw
SELECT lname FROM doctors
         WHERE id   IN (SELECT doctor_id FROM patients WHERE name="Mark");
