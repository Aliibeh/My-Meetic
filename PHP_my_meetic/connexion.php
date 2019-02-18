<?php

class db{
    private $db;

    public function __consctruct(){
        $this->db;
    }

    public function Connexion(){
        try{
            $bdd = new PDO("mysql:host=localhost;dbname=my_meetic", "root", "");
        }

        catch(PDOExcpetion $e){
            echo "Error : " . $e->getMessage();
        }
    }
}
?>