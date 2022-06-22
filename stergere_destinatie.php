<?php
session_start();

$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"travel_ag");

$id_d = $_POST['id_destinatie'];

$sql = "DELETE FROM destinatie where id_destinatie='$id_d'";
$result = mysqli_query($conn,$sql);
if($result == 0)
    echo 'Nu s-a putut efectua stergerea';
else
    header("Location:destinatii_admin.php");

mysqli_close($conn);

?>