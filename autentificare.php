<?php
session_start();

$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"travel_ag");

$email = $_POST['email'];
$password = $_POST['password'];
$pass = md5($password);

$sql = "SELECT * FROM clienti WHERE email like '$email'";

if($result = mysqli_query($conn, $sql)){

 if(mysqli_num_rows($result) > 0){
     while($row = mysqli_fetch_array($result)){
         $pass = $row['parola'];

         if(($row['email'] == 'admin') && ($row['parola'] == 'admin')){
             header('Location:home_admin.php');
         } else if(($row['email'] == $email) && ($row['parola'] == $pass))
            header('Location:home_logat.php');
        else
            header('Location:home_error.php');
     } 
    }
}
else
    echo 'Campurile nu pot fi goale';
?>