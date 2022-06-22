<?php
    session_start();

    $conn = mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"travel_ag");

    $sql = "SELECT * FROM rezervare";
    $res = $conn -> query($sql);
    $row = $res -> num_rows;

    echo "<table align=center border=1px>";
    for($i = 0; $i < $row; $i++){
        $res -> data_seek($i);
        $row = $res -> fetch_array(MYSQLI_ASSOC);
        
        $id_r = $row['id_rezervare'];
        $destinatie = $row['destinatie_r'];
        $oras = $row['oras_r'];
        $transport = $row['firma_transport_r'];
        $nume = $row['nume'];
        $prenume = $row['prenume'];
        $data = $row['data_rezervarii'];

        echo "<tr border-bottom=1px><td>".$id_r."</td><td>".$destinatie."</td><td>".$oras."</td><td>".$transport."</td><td>".$nume."</td><td>".$prenume."</td><td>".$data."</td></tr>";
    }

    echo "</table>";

mysqli_close($conn);
?>