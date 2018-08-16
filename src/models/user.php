<?php

class User {   
    public function __construct() {
    }

    public function view() { 
        //Get DB.
        $db = new db;
        $dbh = $db->connect();

        $stmt = $dbh->prepare("SELECT * from users");
        $stmt->bindParam(':name', $name);
        $stmt->execute();

        //Return JSON.
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $json = json_encode($results);

        echo $json;
        die;
    } 

    public function delete($id){
        //Get DB.
        $db = new db;
        $dbh = $db->connect();

        $stmt = $dbh->prepare("DELETE FROM users where id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        if($stmt->rowCount() == 1){
            echo 'ok';
        } else {
            echo 'error';
        }
        
        die;
    }
} 



