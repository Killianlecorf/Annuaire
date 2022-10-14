<?php

require_once __DIR__ . '/../models/deleteManager.php';

class deleteController  
{
    public static function deleteMessage()
    {
        if ($_GET['methode']) {
            if ($_GET['id']) {
                Deletemanager::DeleteCommande();
            }
        }
        
    }
}

deletecontroller::deleteMessage();
