<?php

require_once __DIR__ . '/../config/ConnectDB.php';
require_once __DIR__ . '/../models/MessageManager.php';

class BDDupdate{
    
    public static function verification() {
        

        if (isset($_POST['user_name'])!= "" && 
        isset($_POST['user_lname'])!= "" &&
        isset($_POST['user_email'])!= "" && 
        isset($_POST['user_number'])!= "" && 
        isset($_POST['user_name'])!= ""  ) {

            $name =$_POST['user_name'];

            MessageManager::insert($name);

        }
    }

}

BDDupdate::verification();

