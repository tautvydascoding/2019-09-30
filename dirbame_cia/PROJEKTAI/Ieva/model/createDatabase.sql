 CREATE DATABASE  challenge_yourself;


use  challenge_yourself;

CREATE TABLE IF NOT EXISTS users (
      id INT UNSIGNED     AUTO_INCREMENT PRIMARY KEY,
      user_name VARCHAR(30) not NULL, 
      email VARCHAR(255) not NULL, 
      password VARCHAR(255) not NULL, 
      name VARCHAR(60) NOT NULL,
      lname VARCHAR(60) NOT NULL,
      rights VARCHAR(30) NOT NULL,
      registration_time TIMESTAMP NOT NULL,
      last_login TIMESTAMP NOT NULL
	  );


CREATE TABLE IF NOT EXISTS challenges (
     id INT UNSIGNED     AUTO_INCREMENT PRIMARY KEY,
     title VARCHAR(255) not NULL,
     description TEXT NOT NULL,
     tag VARCHAR(30) NOT NULL,
     img_id INT NOT NULL
     );

CREATE TABLE IF NOT EXISTS user_challenges (
      user_id INT NOT NULL,
      challenge_id INT NOT NULL,
      status INT(1) not NULL, 
      start_time TIMESTAMP not NULL, 
      end_time TIMESTAMP not NULL 
    );

CREATE TABLE IF NOT EXISTS about (
	 id INT(2) UNSIGNED     AUTO_INCREMENT PRIMARY KEY,
     title VARCHAR(255) not NULL,
	 description TEXT not NULL
	 );

CREATE TABLE IF NOT EXISTS img (
	 id INT UNSIGNED     AUTO_INCREMENT PRIMARY KEY,
	 name VARCHAR(255) not NULL
	 );

CREATE TABLE IF NOT EXISTS suggested_challenges(
	 user_id INT NOT NULL,
	 suggestion VARCHAR(255) not NULL
	 );

