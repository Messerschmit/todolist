<?php

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    require_once 'controllers/classes/database.php';

    $db = new Database();

    $link = $db->ConnectedToDB();
    
    header("Location: enter.html");

