<?php

 class sign_up_model{
     private $conn;
     private $table = 'user_id';


     public function __construct($db){
         $this->conn = $db;
     }

     //get post
     public function read($query){

         $stmt = $this->conn->prepare($query);
         $stmt->execute();
         return $stmt;
     }

     

     // Create Post
     public function signUp($email, $pass, $name)
     {
         $q = 'SELECT email FROM '
             .$this->table
             .' WHERE email= "'.$email.'" ';

         $stmt = $this->conn->prepare($q);
         $stmt->execute();
         if($stmt->rowCount()>0){return false;}


         $query =  'INSERT INTO '.$this->table.'(email, pass, name)
                    VALUES ("'.$email.'", "'.$pass.'", "'.$name.'")';

         // Prepare statement
         $stmt = $this->conn->prepare($query);

         if ($stmt->execute()) {
             return true;
         }

         printf("Error: %s.\n", $stmt->error);
         return false;
     }
 }