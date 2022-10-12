<?php

require_once __DIR__ . '/../config/ConnectDB.php';
require_once __DIR__ . '/../controller/controller.php';

class  MessageManager{

    public static function insert($name ,$lname,$email,$number,$spe) {

        $mysqlconnection = database::BDD();
        $request = "INSERT INTO `user`(`user_name`,`user_lname`,`user_mail`,`user_numero`,`user_spe`) VALUE ('$name' , '$lname','$email' ,'$number' , '$spe');";
        $mysqlconnection->exec($request);
        header("Location: ../index.php");
    }
}
