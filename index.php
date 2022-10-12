
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Annuaire/Assets/css/form.css">
    <script src="https://kit.fontawesome.com/e1106f8104.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        include('../Annuaire/config/ConnectDB.php');

        include('../Annuaire/templates/form.php');
    ?>
    <button onclick="displayBlockForm()">ouvrir</button>

    <script src="../Annuaire/Assets/js/script.js"></script>
</body>
</html>