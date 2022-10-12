<?php

require_once __DIR__ . '/../config/ConnectDB.php';
require_once __DIR__ . '/../controller/controller.php';

class  MessageManager{

    public static function insert($name) {

        $mysqlconnection = database::BDD();
        $numero = 35952;
        $request = "INSERT INTO `user`(`user_name`,`user_lname`,`user_mail`,`user_numero`,`user_spe`) VALUE ('$name' , '$name','$name' ,'$numero' , '$name');";
        $mysqlconnection->exec($request);

        header("Location: ../models/MessageManager.php");
    }
}
