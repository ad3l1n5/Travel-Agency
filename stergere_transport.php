<?php
session_start();

$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"travel_ag");

$id_transport = $_POST['id_transport'];

$sql = "DELETE FROM firme_transport where id_firma_transport='$id_transport'";
$result = mysqli_query($conn,$sql);
if($result == 0)
    echo 'Nu s-a putut efectua stergerea';
else
    header("Location:transport_admin.php");

mysqli_close($conn);
?>