<?php

require_once __DIR__ . '/../config/ConnectDB.php';

class DeleteManager{

    public static function DeleteCommande()
    {
        $mysqlconnection = database::BDD();
        $sql= 'SELECT `user_ID` FROM `user`;';
        $id = $mysqlconnection->query($sql);
        $deleterequest = 'DELETE FROM `user` WHERE' . $id . ';' ;
        $delete
    }
}