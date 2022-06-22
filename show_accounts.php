
<?php
session_start();

$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"travel_ag");

$sql = "SELECT * FROM clienti";
$res = $conn -> query($sql);
$row = $res -> num_rows;

echo "<table align=center border=1px>";
for($i = 0; $i < $row; $i++){
    $res -> data_seek($i);
    $row = $res -> fetch_array(MYSQLI_ASSOC);
    
    $idc = $row['id_client'];
    $nume = $row['nume'];
    $prenume = $row['prenume'];
    $email = $row['email'];
    $telefon = $row['telefon'];

    echo "<tr border-bottom=1px><td>".$idc."</td><td>".$nume."</td><td>".$prenume."</td><td>".$email."</td><td>".$telefon."</td></tr>";
}

echo "</table>";

$conn -> close();

?>