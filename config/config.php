<?php

    try{
            //HOST
            define("HOSTNAME", "localhost");

            //DBNAME
            define("DBNAME", "homeland");
        
            //USER
            define("USER", "root");
        
            //PASSWORD
            define("PASS", "");
        
            $conn = new PDO("mysql:host=".HOSTNAME.";dbname=".DBNAME.";", USER, PASS);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
    }catch(PDOException $e){
        die("Database connection failed: " . $e->getMessage());
    }


