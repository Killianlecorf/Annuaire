<?php

require_once __DIR__ . '/../config/ConnectDB.php';
include __DIR__ . '/../models/filterManager.php';



class TableStudentManager{

    public static function ViewTable() {
        $selectmysql = filterManager::searchoption();
        foreach($selectmysql as $row) {
            $user_id = $row['user_ID'];
            $user_name = htmlspecialchars($row['user_name']);
            $user_lname = htmlspecialchars($row['user_lname']);
            $user_mail = htmlspecialchars($row['user_mail']);
            $user_numero = htmlspecialchars($row['user_numero']);
            $user_spe = htmlspecialchars($row['user_spe']);
            $deletePath ="controller/deletecontroller.php?id=" . $row['user_ID'] . "&methode=delete";
            


            echo "<tr>
                <td><p> $user_name </p></td>
                <td><p> $user_lname </p></td>
                <td><p> $user_mail </p></td>
                <td><p>$user_numero </p></td>
                <td><p>$user_spe </p></td>
                <td><p>
                    <a href= $deletePath >
                        <i id='FA-delete' class='fa-solid fa-trash'></i>
                    </a>
                    
                </p></td>
                <td><p>
                        <i id='FA-edit' onclick='displayBlockFormUpdate($user_id)' class='fa-solid fa-pen-to-square'></i>
                </p></td>
            </tr>";

        } 
    }

    public static function ViewTableDev(){
    $filterDev = filterManager::filterDevOption();
            foreach($filterDev as $row) {
                $user_id = $row['user_ID'];
                $user_name = htmlspecialchars($row['user_name']);
                $user_lname = htmlspecialchars($row['user_lname']);
                $user_mail = htmlspecialchars($row['user_mail']);
                $user_numero = htmlspecialchars($row['user_numero']);
                $user_spe = htmlspecialchars($row['user_spe']);
                $deletePath ="controller/deletecontroller.php?id=" . $row['user_ID'] . "&methode=delete";
                
    
    
                echo "<tr>
                    <td><p> $user_name </p></td>
                    <td><p> $user_lname </p></td>
                    <td><p> $user_mail </p></td>
                    <td><p>$user_numero </p></td>
                    <td><p>$user_spe </p></td>
                    <td><p>
                        <a href= $deletePath >
                            <i id='FA-delete' class='fa-solid fa-trash'></i>
                        </a>
                        
                    </p></td>
                    <td><p>
                            <i id='FA-edit' onclick='displayBlockFormUpdate($user_id)' class='fa-solid fa-pen-to-square'></i>
                    </p></td>
                </tr>";
            }
        }

    public static function ViewTableCg(){
        $filtercg = filterManager::filterCgOption();
                foreach($filtercg as $row) {
                    $user_id = $row['user_ID'];
                    $user_name = htmlspecialchars($row['user_name']);
                    $user_lname = htmlspecialchars($row['user_lname']);
                    $user_mail = htmlspecialchars($row['user_mail']);
                    $user_numero = htmlspecialchars($row['user_numero']);
                    $user_spe = htmlspecialchars($row['user_spe']);
                    $deletePath ="controller/deletecontroller.php?id=" . $row['user_ID'] . "&methode=delete";
                    
        
        
                    echo "<tr>
                        <td><p> $user_name </p></td>
                        <td><p> $user_lname </p></td>
                        <td><p> $user_mail </p></td>
                        <td><p>$user_numero </p></td>
                        <td><p>$user_spe </p></td>
                        <td><p>
                            <a href= $deletePath >
                                <i id='FA-delete' class='fa-solid fa-trash'></i>
                            </a>
                            
                        </p></td>
                        <td><p>
                                <i id='FA-edit' onclick='displayBlockFormUpdate($user_id)' class='fa-solid fa-pen-to-square'></i>
                        </p></td>
                    </tr>";
                }
            }

    public static function ViewTableCM(){
        $filterCM = filterManager::filterCMOption();
            foreach($filterCM as $row) {
                $user_id = $row['user_ID'];
                $user_name = htmlspecialchars($row['user_name']);
                $user_lname = htmlspecialchars($row['user_lname']);
                $user_mail = htmlspecialchars($row['user_mail']);
                $user_numero = htmlspecialchars($row['user_numero']);
                $user_spe = htmlspecialchars($row['user_spe']);
                $deletePath ="controller/deletecontroller.php?id=" . $row['user_ID'] . "&methode=delete";
                
    
    
                echo "<tr>
                    <td><p> $user_name </p></td>
                    <td><p> $user_lname </p></td>
                    <td><p> $user_mail </p></td>
                    <td><p>$user_numero </p></td>
                    <td><p>$user_spe </p></td>
                    <td><p>
                        <a href= $deletePath >
                            <i id='FA-delete' class='fa-solid fa-trash'></i>
                        </a>
                        
                    </p></td>
                    <td><p>
                            <i id='FA-edit' onclick='displayBlockFormUpdate($user_id)' class='fa-solid fa-pen-to-square'></i>
                    </p></td>
                </tr>";
            }
        }

        public static function ViewTableMark(){
            $filterMark = filterManager::filterMarkOption();
                foreach($filterMark as $row) {
                    $user_id = $row['user_ID'];
                    $user_name = htmlspecialchars($row['user_name']);
                    $user_lname = htmlspecialchars($row['user_lname']);
                    $user_mail = htmlspecialchars($row['user_mail']);
                    $user_numero = htmlspecialchars($row['user_numero']);
                    $user_spe = htmlspecialchars($row['user_spe']);
                    $deletePath ="controller/deletecontroller.php?id=" . $row['user_ID'] . "&methode=delete";
                    
        
        
                    echo "<tr>
                        <td><p> $user_name </p></td>
                        <td><p> $user_lname </p></td>
                        <td><p> $user_mail </p></td>
                        <td><p>$user_numero </p></td>
                        <td><p>$user_spe </p></td>
                        <td><p>
                            <a href= $deletePath >
                                <i id='FA-delete' class='fa-solid fa-trash'></i>
                            </a>
                            
                        </p></td>
                        <td><p>
                                <i id='FA-edit' onclick='displayBlockFormUpdate($user_id)' class='fa-solid fa-pen-to-square'></i>
                        </p></td>
                    </tr>";
                }
            }
}
