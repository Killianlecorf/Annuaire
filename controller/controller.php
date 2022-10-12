<?php

require_once __DIR__ . '/../config/ConnectDB.php';
require_once __DIR__ . '/../models/MessageManager.php';

class BDDupdate{
    
    public static function verification() {
        

        if (isset($_POST['user_name'])!= "" && 
        isset($_POST['user_lname'])!= "" &&
        isset($_POST['user_email'])!= "" && 
        isset($_POST['user_number'])!= "" && 
        isset($_POST['user_spe'])!= ""  ) {

            $name=$_POST['user_name'];
            $lname=$_POST['user_lname'];
            $email=$_POST['user_email'];
            $number=$_POST['user_number'];
            $spe=$_POST['user_spe'];



            MessageManager::insert($name,$lname,$email,$number,$spe);
            echo 'message envoyer';

        }
    }

}

BDDupdate::verification();

