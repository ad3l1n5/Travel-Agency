<?php
session_start();

$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"travel_ag");

$password = $_POST['password'];
$pass = md5($password);
$nume = $_POST['name'];
$prenume = $_POST['prenume'];
$email = $_POST['email'];
$phone = $_POST['phone'];

function verificare_telefon($phone){
    $filter_phone = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
    $phone_check = str_replace("-", "", $filter_phone);
    if(strlen($phone_check) < 10 || strlen($phone_check) > 14)
        return false;

    else
        return true;
}

if((filter_var($nume, FILTER_UNSAFE_RAW) != false) && (filter_var($prenume, FILTER_UNSAFE_RAW) != false) && (filter_var($email, FILTER_SANITIZE_EMAIL) != false) && (verificare_telefon($phone) == true)){
    $sql = "INSERT INTO clienti (nume, prenume, parola, email, telefon) VALUES ('$nume', '$prenume', '$pass', '$email', '$phone')";
    
    if(mysqli_query($conn, $sql)){
        header("Location:account.php");

    }
    else
        echo 'ERROR: Nu s-a putut executa comanda ' . $sql . mysqli_error($conn);
}
else
    echo 'Campurile nu au fost completate corect';

mysqli_close($conn);

?>