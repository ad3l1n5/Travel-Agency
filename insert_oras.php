<?php
    session_start();

    $conn = mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"travel_ag");

    $orass = $_POST['nume_oras'];

    $sql = "INSERT INTO orase (oras) VALUES ('$orass')";

    if(mysqli_query($conn, $sql))
        header("location: orase_admin.php");
    else
        echo "Nu s-a putut executa comanda!";
?>
