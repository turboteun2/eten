<?php
    require_once 'dbh.inc.php';

    // Controleer of er een afbeelding is geüpload
    if(isset($_FILES['afbeelding'])) {
        $afbeelding = $_FILES['afbeelding']['tmp_name'];
        $afbeelding_naam = $_FILES['afbeelding']['name'];
        $afbeelding_data = file_get_contents($afbeelding);
        
        // Bereid de query voor om de afbeelding op te slaan
        $query = "INSERT INTO producten (naam, afbeelding) VALUES (?, ?)";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "ss", $afbeelding_naam, $afbeelding_data);
        mysqli_stmt_execute($stmt);
        
        // Controleer of de query is gelukt
        if(mysqli_stmt_affected_rows($stmt) > 0) {
            echo "Afbeelding is succesvol geüpload naar de database.";
        } else {
            echo "Er is iets fout gegaan bij het uploaden van de afbeelding.";
        }
        
        // Sluit de statement af
        mysqli_stmt_close($stmt);
    }

    // Sluit de verbinding met de database af
    mysqli_close($conn);