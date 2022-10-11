<?php

require_once __DIR__ . '/../config/ConnectDB.php';


function insert() {
    $mysqlconnection = database::BDD();
    $name = $_POST['user_name'];
    $lname = $_POST['user_lname'];
    $email = $_POST['user_email'];
    $number = $_POST['user_number'];
    $spe = $_POST['user_spe'];

    if (isset($_POST['user_name'])!= "" && 
    isset($_POST['user_name'])!= "" &&
    isset($_POST['user_name'])!= "" && 
    isset($_POST['user_name'])!= "" && 
    isset($_POST['user_name'])!= ""  ) {
        $request = "INSERT INTO `user`(`user_name`,`user_lname`,`user_mail`,`user_numero`,`user_spe`) VALUES ('$name' , '$lname','$email' ,'$number' , '$spe');";
        $mysqlconnection->exec($request);
    }
    var_dump($name);
}

insert();
