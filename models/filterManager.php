<?php

require_once __DIR__ . '/../config/ConnectDB.php';

class filterManager{

    public static function searchoption()
    {   
        $mysqlconnection = Database::BDD();
        $sql = "SELECT * FROM user ";
        $params = [];

        if (!empty($_GET['q'])) {
        
            $sql .= "WHERE `user_lname` LIKE :lname ";
            $params[':lname'] = '%' . $_GET['q'] . '%';
        }

        $querySql = $mysqlconnection->prepare($sql);
        $querySql->execute($params);
        $selectmysql = $querySql->fetchAll(PDO::FETCH_ASSOC);
        return $selectmysql ;
    }   

 
}