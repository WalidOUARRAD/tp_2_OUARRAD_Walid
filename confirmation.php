//confirmation.php
<?php

// Function to connect to the database
function connexionDb(){
    $conn = mysqli_connect("localhost","root","","ecom1_tp2");
    if(mysqli_connect_errno()){
        echo "Failed to connect to mysql ".mysqli_connect_error();
        exit();
    }
    return $conn;
}
function ajouter($formData){
    $id = $formData['id'];
    $street = $formData['street'];
    $street_nb = $formData['street_nb'];
    $type = $formData['type'];
    $city = $formData['city'];
    $zipcode = $formData['zipcode'];

    if(isset($id, $street, $street_nb, $type, $city, $zipcode)){
                  $sql = "INSERT INTO address (id, street, street_nb, type, city, zipcode) VALUES (?, ?, ?, ?, ?, ?)";
        

            $conn = connexionDb();

            // Prepare the query
            $stmt = mysqli_prepare($conn, $sql);

            // Bind parameters
            mysqli_stmt_bind_param($stmt, "ississ", $id, $street, $street_nb, $type, $city, $zipcode);

            // Execute the query
            $result = mysqli_stmt_execute($stmt);

            if($result){
                echo "Ajout réussi";
            } else {
                echo "Une erreur";
            }

            // Close the statement
            mysqli_stmt_close($stmt);

            // Close the database connection
            mysqli_close($conn);
        }
}
?>
