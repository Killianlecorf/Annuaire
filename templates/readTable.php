<section class="table-Back">
    <div class="table-content">
        <table>
            <thead>
                <tr>
                    <th colspan="1">Nom</th>
                    <th colspan="1">Prénom</th>
                    <th colspan="1">email</th>
                    <th colspan="1">numéro</th>
                    <th colspan="1">spécialté</th>
                    <th colspan="2 ">supprimer</th>

                </tr>
            </thead>
            <tbody>

                <?php
                    include('../Annuaire/models/TableStudentManager.php');
                    if (isset($_POST['dev'])) {
                        TableStudentManager::ViewTableDev();
                    }elseif (isset($_POST['cg'])) {
                        TableStudentManager::ViewTableCg();
                    }elseif (isset($_POST['com'])) {
                        TableStudentManager::ViewTableCM();
                    }elseif (isset($_POST['mark'])) {
                        TableStudentManager::ViewTableMark();
                    }else {
                        TableStudentManager::ViewTable();
                    }
                ?>

            </tbody>
        </table>

    </div>
</section>