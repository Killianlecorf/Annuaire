<?php

class deleteController  
{

    
    public static function deleteMessage()
    {
        if (isset($_GET['ID'])) {
            Deletemanager::DeleteCommande();
        }
    }
}
