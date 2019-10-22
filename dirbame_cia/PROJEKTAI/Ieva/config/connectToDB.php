<?php

$debug_mode = 0;

define('MYSQL_VARTOTOJAS', 'root');
define('MYSQL_SLAPTAZODIS', 'root');
define('DB_VARDAS', 'challenge_yourself');
define('DB_HOST', 'localhost');

$connection = mysqli_connect(DB_HOST, MYSQL_VARTOTOJAS, MYSQL_SLAPTAZODIS, DB_VARDAS);

function getConnect() {
    global $connection, $debug_mode; 
    if ($connection) {
        if ($debug_mode > 1) {
             echo "Successfully connected to database <br>";  
           } 
           return $connection;
        } else {
            echo "ERROR: Cannot connect to databases:".mysqli_connect_error();
}    
}

// getConnect(); //test