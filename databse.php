<?php

class connection{

    private $host;
    private $dbname;
    private $user;
    private $password;
    private $pdo;

    public function __consruct($host,$dbname,$user,$password)

    {
        $this->host=$host;
        $this->dbname=$dbname;
        $this->user=$user;
        $this->password=$password;
        $this->establishConnection(); 
    }

    private function establishConnection()
    {

        try{
            $this->pdo = new PDO("mysql=".$this->host,"dbname=".$this->dbname,$this->user,$this->password);

            $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            echo "Connection Successfully Connected.";
        
        }

        catch(PDOException $e){
            echo "Connection Failed." .$e->getMassege();
        }
    }

    public function getPDO()

    {
        return $this->pdo();
    }

}

?>