<?php

require_once __DIR__ . '/../config/ConnectDB.php';

class TableStudentManager{

    public static function ViewTable() {
        $mysqlconnection = database::BDD();
        $sql = "SELECT * FROM `user`";
        $selectmysql =  $mysqlconnection->query($sql);
        while($row = $selectmysql->fetch(PDO::FETCH_ASSOC)) : ?>
            <tr>
                <td><?php echo htmlspecialchars($row['user_name']); ?></td>
                <td><?php echo htmlspecialchars($row['user_lname']); ?></td>
                <td><?php echo htmlspecialchars($row['user_mail']); ?></td>
                <td><?php echo htmlspecialchars($row['user_numero']); ?></td>
                <td><?php echo htmlspecialchars($row['user_spe']); ?></td>
            </tr>
        <?php endwhile; 
    }


}