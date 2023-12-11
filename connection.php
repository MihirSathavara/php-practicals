<?php

class connection{

    private $host = 'localhost';
    private $db = 'cdata';
    private $user = 'root';
    private $pass = '';
    public $dbconn;
    public function __consturct(){

        try{

            $this->dbconn = new PDO("mysql:host=$this->host;dbname=$this->db",$this->user,$this->pass);

        }

        catch(PDOException $e){

            echo "Connetion Failed.".$e->getMassege();
        }
    }

}
?>