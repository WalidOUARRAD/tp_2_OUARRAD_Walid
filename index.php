<?php
    // recuperer les valeurs de mon formulaire
    include "../tp_2_OUARRAD_Walid/confirmation.php";
    if(isset($_POST['ff'])){
        ajouter($_POST);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'Adresses</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="process.php" method="post">
        <label for="id">Combien d'adresses avez-vous ?</label>
        <input type="number" name="id" required>
        <button type="submit" name="ff">Valider</button>
    </form>
</body>
</html>
