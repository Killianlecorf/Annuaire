<?php

class Database 
{
    private  $host;
    private  $dbname;
    private  $login;
    private  $pwd;

    public function decodeJson()
    {
        $this->host = json_decode(file_get_contents('BDD.json'), true)["HOST"];
        $this->dbname = json_decode(file_get_contents('BDD.json'), true)["DBNAME"];
        $this->login = json_decode(file_get_contents('BDD.json'), true)["LOGIN"];
        $this->pwd = json_decode(file_get_contents('BDD.json'), true)["PWD"];
    }

    public function BDD()
    {
        try{
            // $mysqlconnection = new PDO('mysql:host=localhost;dbname=test', 'root', '');
            $mysqlconnection = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname . $this->login , $this->pwd );
            echo "connexion";
            return $mysqlconnection ;
        } catch (Exception $e) {
            die('Erreur :' .$e->getMessage());
        }
    }
}