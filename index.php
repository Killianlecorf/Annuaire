<?php

include('../Annuaire/config/ConnectDB.php');

$mysqlconnection = new Database ;
$mysqlconnection -> BDD() ;
$mysqlconnection -> decodeJson() ;