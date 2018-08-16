<?php 

class Front {   
    public function __construct() {
    }

    public function view() { 
        //Do business logic and then echo the page.
        
        //Get DB.
        $db = new db;
        $dbh = $db->connect();
        
        $stmt = $dbh->prepare("SELECT * from users");
        $stmt->execute();

        $result = $stmt->fetchAll();

        $mainUserTable = '<table>';
        $mainUserTable .= '<tr><th>ID</th><th>User</th><th>Password</th><th>Actions</th></tr>';

        foreach($result as $key=>$user){
            $mainUserTable .= '<tr class="user" id="'.$user['id'].'"><td>'.$user['id'].'</td><td>'.$user['username'].'</td><td>'.$user['password'].'</td><td><a href="#" class="delete">Delete</a></tr>';
        }

        $mainUserTable .= '</table>';

        //Return the view.
        require_once 'src/views/front.php';
    } 
} 