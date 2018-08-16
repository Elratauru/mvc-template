<?php

class db {   
    public function __construct() {
    }

    public function connect() { 
        $user = 'root';
        $pass = '';

        try {
            $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
            return $dbh;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    } 
} 

