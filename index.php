<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Annuaire/Assets/css/form.css">
    <link rel="stylesheet" href="../Annuaire/Assets/css/readTable.css">
    <link rel="stylesheet" href="../Annuaire/Assets/css/header.css">
    <script src="https://kit.fontawesome.com/e1106f8104.js" crossorigin="anonymous"></script>
</head>
<body>

    <?php

        include('../Annuaire/templates/form.php');

        include('../Annuaire/templates/UpdateForm.php');

        include('../Annuaire/templates/header.php');

        include('../Annuaire/config/ConnectDB.php');

        
    ?>

    <section class="sectionTable">
            <?php
                include('../Annuaire/templates/readTable.php');
            ?>
    </section>

    <script src="../Annuaire/Assets/js/script.js"></script>
</body>
</html>