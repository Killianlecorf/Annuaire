<?php

class UpdateManager{

    public static function Update($user_ID ,$update_name , $update_lname , $update_email , $update_number , $update_spe)
    {
        $mysqlconnection = Database::BDD();
        $sql ="UPDATE user SET `user_name`='$update_name' , `user_lname`='$update_lname' , `user_mail`='$update_email' , `user_numero`='$update_number',`user_spe`='$update_spe' WHERE `user_ID`='$user_ID'";
        $mysqlconnection->exec($sql);
        header("Location: ../index.php");
    }
}