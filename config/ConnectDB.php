<?php

class Database 
{
    private  $host;
    private  $dbname;
    private $username;
    private  $pwd;

    public function decodeJson()
    {
        $this->username = json_decode(file_get_contents('config\BDD.json'), true )["USERNAME"];
        $this->host = json_decode(file_get_contents('config\BDD.json'), true)["HOST"];
        $this->dbname = json_decode(file_get_contents('config\BDD.json'), true)["DBNAME"];
        $this->pwd = json_decode(file_get_contents('config\BDD.json'), true)["PWD"];
    }

    public function BDD()
    {
        try{
            $mysqlconnection = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname , "root" , $this->pwd);
            echo "connexion";
            return $mysqlconnection ;
        } catch (Exception $e) {
            die('Erreur :' .$e->getMessage());
        }
    }

}