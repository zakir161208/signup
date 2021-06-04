<?php

 class forget_up_model{
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

      public function forget($email, $pass){

        $query = 'SELECT email, pass FROM '
             . $this->table
             . ' WHERE email="' . $email. '" ;

         $stmt = $this->conn->prepare($query);
         $stmt->execute();
         if($stmt->rowCount()>0){
            $query1 = 'Update  pass FROM '
             . $this->table
             . ' WHERE pass="' . $pass. '" ;
 

            return true;}

         return false;
     }

    }