<?php
session_start();

$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"travel_ag");

$id_oras = $_POST['id_oras'];

$sql = "DELETE FROM orase where id_oras='$id_oras'";
$result = mysqli_query($conn,$sql);
if($result == 0)
    echo 'Nu s-a putut efectua stergerea';
else
    header("Location:orase_admin.php");

mysqli_close($conn);
?>