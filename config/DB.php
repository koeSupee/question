<?php

    $connect;
    $result;
    $recode = array();
    
    $type      = 'mysql';
    $server    = 'localhost';
    $username  = 'root';
    $password  = '87654321';
    $tbname    = 'tb_info';
    $dbname    = 'question';
    $charset   = 'utf8';


    // Create connection
    $conn = new mysqli($server, $username, $password,$dbname);
    $conn->set_charset($charset);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        exit();
    }
 ?>