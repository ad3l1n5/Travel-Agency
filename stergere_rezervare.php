<?php
session_start();

$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"travel_ag");

$id_r = $_POST['id_rezervare'];

$sql = "DELETE FROM rezervare where id_rezervare='$id_r'";
$result = mysqli_query($conn,$sql);
if($result == 0)
    echo 'Nu s-a putut efectua stergerea';
else
    header("Location:rezervari_admin.php");

mysqli_close($conn);

?>