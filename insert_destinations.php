<?php
    session_start();

    $conn = mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"travel_ag");

    $destinatie = $_POST['destinatie'];
    $descriere = $_POST['descriere'];

    $sql = "INSERT INTO destinatie (destinatie, descriere) VALUES ('$destinatie', '$descriere')";

    if(mysqli_query($conn, $sql))
        header("location: destinatii_admin.php");
    
    else
        echo "Nu s-a putut executa comanda!";
?>