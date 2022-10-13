<?php

require_once __DIR__ . '/../config/ConnectDB.php';

class TableStudentManager{

    public static function ViewTable() {
        $mysqlconnection = database::BDD();
        $sql = "SELECT * FROM `user`";
        $selectmysql =  $mysqlconnection->query($sql);
        while($row = $selectmysql->fetch(PDO::FETCH_ASSOC)) : ?>
            <tr>
                <td><p><?php echo htmlspecialchars($row['user_name']); ?></p></td>
                <td><p><?php echo htmlspecialchars($row['user_lname']); ?></p></td>
                <td><p><?php echo htmlspecialchars($row['user_mail']); ?></p></td>
                <td><p><?php echo htmlspecialchars($row['user_numero']); ?></p></td>
                <td><p><?php echo htmlspecialchars($row['user_spe']); ?></p></td>
            </tr>
        <?php endwhile; 
    }


}