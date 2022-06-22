<?php
    session_start();

    $conn = mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"travel_ag");

    $transport = $_POST['transport'];

    $sql = "INSERT INTO firme_transport (firma_transport) VALUES ('$transport')";

    if(mysqli_query($conn, $sql))
        header("location: transport_admin.php");
    
    else
        echo "Nu s-a putut executa comanda!";
?>