<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="form_style.css">
    <script src="dropd.js"></script>
    <title>Administrare destinatii</title>
</head>
<body> 
<?php
include("page_top_admin.php");
?>
<div class="mbody">
    <div class="line"></div>

    <div class="content">
        <h1 style="text-align:center"><b>Administrare baza de date</b></h1>
        <p style="text-align:center">Administrare destinatii turistice</p>
        <p style="text-align:center" ><a href="home_admin.php">Administrare clienti</a> </p>

        <form method="post" action="insert_destinations.php">
            <div class="form_input">
                <label>Destinatie</label>
                <input type="text" name="destinatie" value="">
            </div>
            <div class="form_input">
                <label>Descriere</label>
                <input type="text" name="descriere">
            </div>
            <div class="form_input">
                <button type="submit" class="btn" name="add_btn">Adauga</button>
            </div>
        </form>
        <br>
        <?php include("show_destinations.php"); ?>
        <br>
    </div>

    <div class="line"></div>

    <div class="content">
        <div class="head">Stergere destinatie</div>
        <form method="post" action="stergere_destinatie.php">
            <div class="form_input">
                <label>id_oras</label>
                <input type="text" name="id_destinatie" value="">
            </div>
            <div class="form_input">
                <button type="submit" class="btn" name="login_btn">Stergere</button>
            </div>
        </form>
        <br>
    </div>

    <div class="line"></div>
    <div class="line"></div>
    <?php 
      include("bottom_page.php")
    ?>
</div>
</body>
</html>
