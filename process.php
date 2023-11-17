<?php
include "../tp_2_OUARRAD_Walid/confirmation.php";
if(isset($_POST['cof'])){
    ajouter($_POST); 
}
?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Adresses</title>
    <link rel='stylesheet' href='style.css'>
</head>
<body>
     <form method="post">   
        <label for='street'>Street:</label>
        <input type='text' name='street' maxlength='50' required>
        
        <label for='street_nb'>Street Number:</label>
        <input type='number' name='street_nb' required>
        
        <label for='type'>Type:</label>
        <select name='type' required>
            <option value='livraison'>Livraison</option>
            <option value='facturation'>Facturation</option>
            <option value='autre'>Autre</option>
        </select>
        
        <label for='city'>City:</label>
        <select name='city' required>
            <option value='Montreal'>Montreal</option>
            <option value='Laval'>Laval</option>
            <option value='Toronto'>Toronto</option>
            <option value='Quebec'>Quebec</option>
        </select>
        
        <label for='zipcode'>Zip Code:</label>
        <input type='text' name='zipcode' maxlength='6' required>
        
        <button type='submit' name="cof">Confirmer</button>
    </form>
</body>
</html>
