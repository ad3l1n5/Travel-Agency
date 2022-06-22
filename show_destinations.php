<?php
    session_start();

    $conn = mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"travel_ag");

    $sql = "SELECT * FROM destinatie";
    $res = $conn -> query($sql);
    $row = $res -> num_rows;

    echo "<table align=center border=1px>";
    for($i = 0; $i < $row; $i++){
        $res -> data_seek($i);
        $row = $res -> fetch_array(MYSQLI_ASSOC);
        

        $destinatie = $row['destinatie'];
        $descriere = $row['descriere'];
        $id_d = $row['id_destinatie'];

        echo "<tr border-bottom=1px><td>".$id_d."</td><td>".$destinatie."</td><td>".$descriere."</td></tr>";
    }

    echo "</table>";

mysqli_close($conn);
?>