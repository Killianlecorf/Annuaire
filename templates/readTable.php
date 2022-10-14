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
                    TableStudentManager::ViewTable();
                ?>

            </tbody>
        </table>

    </div>
</section>