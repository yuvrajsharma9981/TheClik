<?php
    //error_reporting(E_ALL);
    //ini_set('display_errors', 'On');
    
    $dsn = 'mysql:host=*******.cs.drexel.edu;dbname=******_info152_201503';
    $musername = '*****';
    $mpassword = '********';
        
    //create a POD(Php Data Object)
    $db = new PDO($dsn, $musername, $mpassword);




