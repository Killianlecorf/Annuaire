
<?php

require_once __DIR__ . '/../config/ConnectDB.php';
require_once __DIR__ . '/../models/UpdateManager.php';

class UpdateController{
    

    public static function verificationUpdate() {

        var_dump($_POST);

            if (!empty($_POST)) {

                $user_ID = (int)$_POST['update_user_ID'] ;
                $update_name=$_POST['update_user_name'];
                $update_lname=$_POST['update_user_lname'];
                $update_email=$_POST['update_user_email'];
                $update_number=(int)$_POST['update_user_number'];
                $update_spe=$_POST['update_user_spe'];

                UpdateManager::Update($user_ID ,$update_name , $update_lname , $update_email , $update_number , $update_spe );
                
            }
        
        
    }

}



UpdateController::verificationUpdate();