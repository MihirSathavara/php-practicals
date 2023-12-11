<?php

include 'connection.php';
class user extends connection{
    
    public $res,$data,$sql,$ar;

    public function query(){
        
        try{

            $this->res = $this->dbconn->query('select * from user');
            $this->data = $this->res->fetchAll(PDO:FETCH_ASSOC);
            return $this->data;
        }

        catch(PDOException $e){

            echo $e->getMassege();
        }
    }

    public function insert($name,$mobile_no,$email,$address,$password){

        try{

            $this->sql = "INSERT INFO 'user1'('Name','Mobile NO','Email','Address')VALUE('$name','$mobile_no','$email','$address','$password')"

            // return $this->ar;
        };

        catch(PDOException $e){

            echo $e->getMassege();
        }
    }
}
?>