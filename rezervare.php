<?php
    session_start();

    $conn = mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"travel_ag");

    $destinatie = $_POST['destinatiee'];
    $oras = $_POST['orasel'];
    $transport = $_POST['transportare'];
    $nume = $_POST['nume'];
    $prenume = $_POST['prenume'];
    $email = $_POST['email'];

    $sql = "INSERT INTO rezervare (destinatie_r, oras_r, firma_transport_r, nume, prenume, email) VALUES ('$destinatie', '$oras', '$transport', '$nume', '$prenume', '$email')";

    if(mysqli_query($conn, $sql))
        header("location: home_logat.php");
    
    else
        echo "Nu s-a putut executa comanda!";
?>