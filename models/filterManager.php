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

    public static function filterDevOption()
    {   
        $mysqlconnection = Database::BDD();
        $sql = "SELECT * FROM `user` WHERE `user_spe`='developpement';";

        $queryfilter  = $mysqlconnection->prepare($sql);
        $queryfilter->execute() ;
        $filterDev = $queryfilter->fetchAll(PDO::FETCH_ASSOC);
        return $filterDev ;
    }  

    public static function filterCgOption()
    {   
        $mysqlconnection = Database::BDD();
        $sql = "SELECT * FROM `user` WHERE `user_spe`='communication graphique';";

        $queryfilter  = $mysqlconnection->prepare($sql);
        $queryfilter->execute() ;
        $filterCG = $queryfilter->fetchAll(PDO::FETCH_ASSOC);
        return $filterCG ;
    } 

    public static function filterCMOption()
    {   
        $mysqlconnection = Database::BDD();
        $sql = "SELECT * FROM `user` WHERE `user_spe`='community manager';";

        $queryfilter  = $mysqlconnection->prepare($sql);
        $queryfilter->execute() ;
        $filterCM = $queryfilter->fetchAll(PDO::FETCH_ASSOC);
        return $filterCM ;
    } 

    public static function filterMarkOption()
    {   
        $mysqlconnection = Database::BDD();
        $sql = "SELECT * FROM `user` WHERE `user_spe`='E-Marketing';";

        $queryfilter  = $mysqlconnection->prepare($sql);
        $queryfilter->execute() ;
        $filterMark = $queryfilter->fetchAll(PDO::FETCH_ASSOC);
        return $filterMark ;
    } 
};