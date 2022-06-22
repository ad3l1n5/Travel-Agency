<?php
    session_start();

    $conn = mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"travel_ag");

    $sql = "SELECT * FROM firme_transport";
    $res = $conn -> query($sql);
    $row = $res -> num_rows;

    echo "<table align=center border=1px>";
    for($i = 0; $i < $row; $i++){
        $res -> data_seek($i);
        $row = $res -> fetch_array(MYSQLI_ASSOC);
        
        $idtr = $row['id_firma_transport'];
        $transport = $row['firma_transport'];

        echo "<tr border-bottom=1px><td>".$idtr."</td><td>".$transport."</td></tr>";
    }

    echo "</table>";

mysqli_close($conn);
?>