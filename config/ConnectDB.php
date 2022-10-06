<?php

class Database 
{
    private  $host;
    private  $dbname;
    private $username;
    private  $pwd;

    public function decodeJson()
    {
        $json = json_decode(file_get_contents(__DIR__ . '/BDD.json'), true) ;
        $this->host = $json["HOST"];
        $this->dbname = $json["DBNAME"];
        $this->username = $json["USERNAME"];
        $this->pwd = $json["PWD"];
    }

    public function BDD()
    {
        try{
            $this->decodeJson();
            $mysqlconnection = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname , $this->username , $this->pwd);
            echo "connexion";
            return $mysqlconnection ;
        } catch (Exception $e) {
            die('Erreur :' .$e->getMessage());
        }
    }

}