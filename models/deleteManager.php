<?php

require_once __DIR__ . '/../config/ConnectDB.php';

class DeleteManager{

    public static function DeleteCommande()
    {
        $mysqlconnection = database::BDD();
        $deleteRequest = 'DELETE FROM `user` WHERE `user_ID` = ' . $_GET['id'] . ';' ;
        $mysqlconnection->exec($deleteRequest);
        header("Location: ../index.php");
    }
}

