<?php
session_start();

$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"travel_ag");

$id_client = $_POST['id_client'];

$sql = "DELETE FROM clienti where id_client='$id_client'";
$result = mysqli_query($conn,$sql);
if($result == 0)
    echo 'Nu s-a putut efectua stergerea';
else
    header("Location:home_admin.php");

mysqli_close($conn);
?>