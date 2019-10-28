


CREATE DATABASE  `hospital9`;


-- sukuriame lentele prekes
CREATE TABLE IF NOT EXISTS prekes (
      id INT UNSIGNED     AUTO_INCREMENT PRIMARY KEY,
      kategorija VARCHAR(30) not NULL,
      pavadinimas VARCHAR(30) not NULL,
      aprasymas VARCHAR(255) not NULL,
      kaina INT,
      nuolaida INT,
      pozicija INT,
      data timestamp,
      kiekis INT
	  );





-- sukuriame lentele prekes_kategorija
CREATE TABLE IF NOT EXISTS prekes_kategorija (
      kategorijos_id INT UNSIGNED     AUTO_INCREMENT PRIMARY KEY,
      pavadinimas VARCHAR(30) not NULL,
      foto VARCHAR(30) not NULL,
      pozicija INT
      );

-- sukuriame lentele img
CREATE TABLE IF NOT EXISTS img (
      id INT,
      prekes_id INT,
      img_small VARCHAR(255) not NULL,
      img_big VARCHAR(255) not NULL
      );

      ALTER TABLE img
      ADD FOREIGN KEY (id) REFERENCES Prekes(id);

-- uzdedu foreign KEY ant prekes_id

ALTER TABLE img
ADD FOREIGN KEY (prekes_id) REFERENCES prekes(id);


ALTER TABLE img
DROP FOREIGN KEY id;

ALTER TABLE img
DROP CONSTRAINT img_ibfk_1';

DELETE FROM prekes
                                                      WHERE id = 25
 KLASIKINES GITAROS

INSERT INTO prekes VALUES ( NULL, 'klasik_gitara' , 'Alvarez AD30',
                          'Series: Alvarez Artist;  Top Wood: Solid A+ Sitka Spruce;
                           Back & Sides Wood: Mahogany; Shape: Dreadnought;
                           Neck: Mahogany, 50/50 Semi gloss finish',
                           269.00, 0, 1, null, 5);

INSERT INTO prekes VALUES ( NULL, 'klasik_gitara' , 'Alvarez AD70SB Akustine gitara',
                          'Series: Alvarez Artist Top Wood: Solid A+ Sitka Spruce Back & Sides Wood: Rosewood Shape: Dreadnought Neck: Mahogany',
                           412.71, 0, 2, null, 3);

INSERT INTO prekes VALUES ( NULL, 'klasik_gitara' , 'Alvarez MDA66SHB akustine gitara',
                          ' Top Wood: Solid A+ Sitka Spruce Back & Sides Wood: Rosewood Shape: Dreadnought Neck: Mahogany',
                           589.00, 0, 3, null, 7);
INSERT INTO prekes VALUES ( NULL, 'klasik_gitara' , 'Epiphone Hummingbird Artist Ebony akustine gitara',
                          ' Top Wood: Solid A+ Sitka Spruce Back & Sides Wood: Rosewood Shape: Dreadnought Neck: Mahogany',
                           199.00, 0, 4, null, 12);
INSERT INTO prekes VALUES ( NULL, 'klasik_gitara' , 'Epiphone Hummingbird Pro Faded Cherry Burst elektro-acoustic',
                          ' Top Wood: Solid A+ Sitka Spruce Back & Sides Wood: Rosewood Shape: Dreadnought Neck: Mahogany',
                           589.00, 0, 5, null, 4);

-- ELEKTRINES GITAROS

INSERT INTO prekes VALUES ( NULL, 'el_gitara' , 'Charvel DC1ST Trans Red Elektrine gitara',
                          'Double cutaway Mahogany body; Trans Red finish Mahogany Through-Body Fast Neck with Tilt-Back Scarf Joint Headstock EMG 81/85 humbucking pickups Black Nickel hardware',
                           607.91, 0, 1, null, 13);
INSERT INTO prekes VALUES ( NULL, 'el_gitara' , 'Charvel DX1FR Flat Black Elektrine gitara',
                          'Double cutaway Mahogany body; Trans Red finish Mahogany Through-Body Fast Neck with Tilt-Back Scarf Joint Headstock EMG 81/85 humbucking pickups Black Nickel hardware',
                           692.19, 0, 2, null, 4);
INSERT INTO prekes VALUES ( NULL, 'el_gitara' , 'Encore E2SB Elektrine gitara',
                          'Double cutaway Mahogany body; Trans Red finish Mahogany Through-Body Fast Neck with Tilt-Back Scarf Joint Headstock EMG 81/85 humbucking pickups Black Nickel hardware',
                           289.00, 0, 3, null, 8);
INSERT INTO prekes VALUES ( NULL, 'el_gitara' , 'Edwards E-MA-100SD VHB Elektrine gitara',
                          'Double cutaway Mahogany body; Trans Red finish Mahogany Through-Body Fast Neck with Tilt-Back Scarf Joint Headstock EMG 81/85 humbucking pickups Black Nickel hardware',
                           926.49, 0, 4, null, 11);

-- BOSINES GITAROS

INSERT INTO prekes VALUES ( NULL, 'bass_gitara' , 'Fender Nate Mendel Precision Bass RW CAR Bosine gitara',
                          'Ash body with maple neck and rosewood fretboard Seymour Duncan Quarter Pound single-coil pickup for killer low end Lightly aged nitrocellulose lacquer finish',
                           1067.00, 0, 1, null, 3);

INSERT INTO prekes VALUES ( NULL, 'bass_gitara' , 'Fender Limited Edition Sandblasted P Bass Sapphire Blue Bosine gitara',
                          'Ash body with maple neck and rosewood fretboard Seymour Duncan Quarter Pound single-coil pickup for killer low end Lightly aged nitrocellulose lacquer finish',
                           1269.00, 0, 2, null, 6);

INSERT INTO prekes VALUES ( NULL, 'bass_gitara' , 'Fender Player Series Jaguar Bass PF SGM Bosine gitara',
                          'Ash body with maple neck and rosewood fretboard Seymour Duncan Quarter Pound single-coil pickup for killer low end Lightly aged nitrocellulose lacquer finish',
                           889.89, 0, 3, null, 2);

-- MUSAMIEJI

INSERT INTO prekes VALUES ( NULL, 'musamieji' , 'Alesis DM Lite Drum kit',
                          'DM Lite E-Drum Set for beginners, DM Lite Drummodule with 200 sounds, 10 drumkits, 30 songs, coaching-feature, LED-illumined drum and cymbal pads als optisches Feedback für Lernmodi, 2x mono 1/4" jack outputs, 1x stereo 1/8" jack aux-in, stereo 1/8" jack headphones',
                           325.00, 0, 1, null, 4);
INSERT INTO prekes VALUES ( NULL, 'musamieji' , 'Alesis DM6 Drum kit',
                          'DM Lite E-Drum Set for beginners, DM Lite Drummodule with 200 sounds, 10 drumkits, 30 songs, coaching-feature, LED-illumined drum and cymbal pads als optisches Feedback für Lernmodi, 2x mono 1/4" jack outputs, 1x stereo 1/8" jack aux-in, stereo 1/8" jack headphones',
                           489.46, 0, 2, null, 2);
INSERT INTO prekes VALUES ( NULL, 'musamieji' , 'DW Performance 18x22 bosinis būgnas',
                          'DM Lite E-Drum Set for beginners, DM Lite Drummodule with 200 sounds, 10 drumkits, 30 songs, coaching-feature, LED-illumined drum and cymbal pads als optisches Feedback für Lernmodi, 2x mono 1/4" jack outputs, 1x stereo 1/8" jack aux-in, stereo 1/8" jack headphones',
                           307.46, 0, 3, null, 5);
INSERT INTO prekes VALUES ( NULL, 'musamieji' , 'Gretsch Catalina Jazz 4PC W18 SN būgnų komplektas',
                          'DM Lite E-Drum Set for beginners, DM Lite Drummodule with 200 sounds, 10 drumkits, 30 songs, coaching-feature, LED-illumined drum and cymbal pads als optisches Feedback für Lernmodi, 2x mono 1/4" jack outputs, 1x stereo 1/8" jack aux-in, stereo 1/8" jack headphones',
                           1257.89, 0, 4, null, 7);
INSERT INTO prekes VALUES ( NULL, 'musamieji' , 'Yamaha YV3910M vibrofonas 3.5 ooktavų su motoru',
                          'DM Lite E-Drum Set for beginners, DM Lite Drummodule with 200 sounds, 10 drumkits, 30 songs, coaching-feature, LED-illumined drum and cymbal pads als optisches Feedback für Lernmodi, 2x mono 1/4" jack outputs, 1x stereo 1/8" jack aux-in, stereo 1/8" jack headphones',
                           1050.89, 0, 5, null, 2);

-- SINTEZATORIAI

INSERT INTO prekes VALUES ( NULL, 'sintezatoriai' , 'Korg Kronos 2-61 sintezatorius',
                          '61 klavišo pusiau- pasunkinta klaviatūra Solid state vidinis diskinis kaupiklis 8" spalvotas liečiamas ekranas 4 krypčių vairalazdė. 9 garso moduliai',
                           2749.00, 0, 1, null, 4);
INSERT INTO prekes VALUES ( NULL, 'sintezatoriai' , 'Korg Microkorg XL sintezatorius',
                          '61 klavišo pusiau- pasunkinta klaviatūra Solid state vidinis diskinis kaupiklis 8" spalvotas liečiamas ekranas 4 krypčių vairalazdė. 9 garso moduliai',
                           318.29, 0, 2, null, 5);
INSERT INTO prekes VALUES ( NULL, 'sintezatoriai' , 'Korg X50 sintezatorius',
                          '61 klavišo pusiau- pasunkinta klaviatūra Solid state vidinis diskinis kaupiklis 8" spalvotas liečiamas ekranas 4 krypčių vairalazdė. 9 garso moduliai',
                           578.95, 0, 3, null, 3);

INSERT INTO prekes VALUES ( NULL, 'sintezatoriai' , 'Nord Lead 4 sintezatorius',
                          '61 klavišo pusiau- pasunkinta klaviatūra Solid state vidinis diskinis kaupiklis 8" spalvotas liečiamas ekranas 4 krypčių vairalazdė. 9 garso moduliai',
                           1839.00, 0, 4, null, 6);
INSERT INTO prekes VALUES ( NULL, 'sintezatoriai' , 'Waldorf KB37 sintezatorius',
                          '61 klavišo pusiau- pasunkinta klaviatūra Solid state vidinis diskinis kaupiklis 8" spalvotas liečiamas ekranas 4 krypčių vairalazdė. 9 garso moduliai',
                           789.00, 0, 5, null, 4);



	 SELECT * FROM prekes;


INSERT INTO prekes_kategorija VALUES ( NULL, 'Klasikines gitaros' , 'clasicGuitars.jpg',
                          1);
INSERT INTO prekes_kategorija VALUES ( NULL, 'Elektrines gitaros' , 'elGuitars.jpg',
                          2);
INSERT INTO prekes_kategorija VALUES ( NULL, 'Bosines gitaros' , 'bassGuitars.jpg',
                          3);
INSERT INTO prekes_kategorija VALUES ( NULL, 'Sintezatoriai' , 'piano.jpg',
                          4);
INSERT INTO prekes_kategorija VALUES ( NULL, 'Musamieji' , 'drums.jpg',
                          5);

	 SELECT * FROM prekes;


INSERT INTO img VALUES ( 1, 1, 'gitar1S.png' , 'gitar1.png');
INSERT INTO img VALUES ( 2, 2, 'gitar2S.jpg' , 'gitar2.jpg');
INSERT INTO img VALUES ( 3, 3, 'gitar3S.png' , 'gitar3.png');
INSERT INTO img VALUES ( 4, 4, 'gitar4S.png' , 'gitar4.png');
INSERT INTO img VALUES ( 5, 5, 'gitar5S.jpg' , 'gitar5.jpg');
INSERT INTO img VALUES ( 6, 6, 'elgit1S.jpg' , 'elgit1.jpg');
INSERT INTO img VALUES ( 7, 7, 'elgit2S.png' , 'elgit2.png');
INSERT INTO img VALUES ( 8, 8, 'elgit3S.jpg' , 'elgit3.jpg');
INSERT INTO img VALUES ( 9, 9, 'elgit4S.jpg' , 'elgit4.jpg');
INSERT INTO img VALUES ( 10,10, 'bosgit1S.jpg' , 'bosgit1.jpg');
INSERT INTO img VALUES ( 11,11, 'bosgit2S.jpg' , 'bosgit2.jpg');
INSERT INTO img VALUES ( 12,12, 'bosgit3S.jpg' , 'bosgit3.jpg');
INSERT INTO img VALUES ( 13,13, 'mus1S.jpg' , 'mus1.jpg');
INSERT INTO img VALUES ( 14,14, 'mus2S.jpg' , 'mus2.jpg');
INSERT INTO img VALUES ( 15,15, 'mus3S.jpg' , 'mus3.jpg');
INSERT INTO img VALUES ( 16,16, 'mus4S.jpg' , 'mus4.jpg');
INSERT INTO img VALUES ( 17,17, 'mus5S.jpg' , 'mus5.jpg');
INSERT INTO img VALUES ( 18,18, 'sint1S.jpg' , 'sint1.jpg');
INSERT INTO img VALUES ( 19,19, 'sint2S.jpg' , 'sint2.jpg');
INSERT INTO img VALUES ( 20,20, 'sint3S.jpg' , 'sint3.jpg');
INSERT INTO img VALUES ( 21,21, 'sint4S.jpg' , 'sint4.jpg');
INSERT INTO img VALUES ( 22,22, 'sint5S.png' , 'sint5.png');

INSERT INTO img (prekes_id)
VALUES (1);





======= Prekes/ straisniai   ========
id   kategorija   pavadinimas   aprasymas        kaina    nuolaida  pozicija      data   kiekis
1   klasikgitara    Dviratis       Lorem....     659
2                   Paspirtukas     Lorem....     49.99       5           99999
3                   Rieduciai       Lorem....     359         20          2

======= Paveiksliukai   ========
id    pavadinimas   aprasymas              pozicija      prekes_id
1     foto1.jpg       Lorem....                  3              1
2     foto2123123.PNG Lorem....                99999            18
3     foto123.jpg       Lorem....                2              5






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


SELECT prekes.id, prekes.pavadinimas  FROM prekes WHERE prekes.kategorija = 'klasik_gitara';

SELECT * FROM prekes,img WHERE img.prekes_id = prekes.id;

SELECT prekes.pavadinimas, prekes.aprasymas, prekes.kaina, prekes.kiekis, img.img_small, img.img_big FROM prekes,img WHERE prekes.kategorija = 'klasik_gitara' AND img.prekes_id = prekes.id;

SELECT prekes.kategorija, prekes.pavadinimas, prekes.aprasymas, prekes.kaina, prekes.kiekis, img.img_small, img.img_big FROM prekes,img WHERE prekes.kategorija = '$kategorija' AND img.prekes_id = prekes.id;

SELECT prekes.kategorija, prekes.pavadinimas, prekes.aprasymas, prekes.kaina, img.img_big FROM prekes,img WHERE prekes.kategorija = '$kategorija' AND img.prekes_id = prekes.id;

SELECT * FROM prekes,img WHERE prekes.id ='1' AND img.prekes_id = prekes.id;