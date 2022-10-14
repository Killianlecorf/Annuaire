<?php

require_once __DIR__ . '/../config/ConnectDB.php';

class TableStudentManager{

    public static function ViewTable() {
        $mysqlconnection = database::BDD();
        $sql = "SELECT * FROM `user` ORDER BY `user_ID` DESC;";
        $selectmysql =  $mysqlconnection->query($sql);
        while($row = $selectmysql->fetch(PDO::FETCH_ASSOC)) : ?>
            <tr>
                <td><p><?php echo htmlspecialchars($row['user_name']); ?></p></td>
                <td><p><?php echo htmlspecialchars($row['user_lname']); ?></p></td>
                <td><p><?php echo htmlspecialchars($row['user_mail']); ?></p></td>
                <td><p><?php echo htmlspecialchars($row['user_numero']); ?></p></td>
                <td><p><?php echo htmlspecialchars($row['user_spe']); ?></p></td>
                <td><p>
                    <a href= <?php echo "controller/deletecontroller.php?id=" . $row['user_ID'] . "&methode=delete"?> >
                        <i id="FA-delete" class="fa-solid fa-trash"></i>
                    </a>
                    
                </p></td>
                <td><p><i id="FA-edit" class="fa-solid fa-pen-to-square"></i></p></td>
            </tr>
        <?php endwhile; 
    }


}