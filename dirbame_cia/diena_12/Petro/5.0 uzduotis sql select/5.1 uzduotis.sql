// uzduotis 1: istrinti gydytoja "Koris"
// uzduotis 2:  Pakeisti Paciento "Co" varda i "Karolis"
// uzduotis 3.1: visu pacientu, kuriu vardas yra "Tom" -  varda pakeisti i "Tomas"
// uzduotis 3.2: visu pacientu, kuriu vardas prasideda "T" -  docotor_id pakeisti i "4"
// uzduotis 4: gauti paciento "Mark" daktaro pavarde


DELETE FROM doctors WHERE name = "Koris";

SELECT * FROM doctors
    WHERE doctors.lname Like "L%";    -- isveda daktarus kuriu pavardes pirma raide - L

//

UPDATE  patients
SET name = 'Karolis'
WHERE id = 5
LIMIT 1;

UPDATE  patients
SET name = 'Tomas'
WHERE name = 'Tom';


SELECT doctors.lname    FROM doctors
                        INNER JOIN patients
                        ON doctors.id = patients.doctor_id
                        WHERE patients.name = 'Mark' ;

-- kitas variantas

SELECT lname FROM doctors
WHERE id IN (SELECT doctor_id FROM patients WHERE name = 'Mark');

