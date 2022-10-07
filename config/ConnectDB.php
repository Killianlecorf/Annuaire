<?php

class Database 
{
    private  $host;
    private  $dbname;
    private $username;
    private  $pwd;

    public static function decodeJson()
    {
        $json = json_decode(file_get_contents(__DIR__ . '/BDD.json'), true) ;
        return $json ;
    }

    public static function BDD()
    {
        try{
            $json = Database::decodeJson();
            $mysqlconnection = new PDO('mysql:host=' . $json["HOST"] . ';dbname=' . $json["DBNAME"] , $json["USERNAME"] , $json["PWD"]);
            echo "connexion";
            return $mysqlconnection ;
        } catch (Exception $e) {
            die('Erreur :' .$e->getMessage());
        }
    }
    

}