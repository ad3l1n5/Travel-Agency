<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="form_style.css">
    <title>Administrator</title>
</head>
<body> 
<?php
include("page_top_admin.php");
?>
<div class="mbody">
    <div class="line"></div>

    <div class="content">
        <h1 style="text-align:center"><b>Administrare baza de date</b></h1>
        <h1 style="font-size:large; text-align: center">Afisare clienti</h1>
        <p style="text-align:center" ><a href="destinatii_admin.php">Administrare destinatii turistice</a> </p>
        <p style="text-align:center" ><a href="transport_admin.php">Administrare firme transport</a> </p>
        <p style="text-align:center" ><a href="orase_admin.php">Administrare orase</a> </p>
        <p style="text-align:center" ><a href="rezervari_admin.php">Administrare rezervari</a> </p>
        <?php include("show_accounts.php"); ?>
        <br>
    </div>

    <div class="line"></div>

    <div class="content">
        <div class="head">Stergere client</div>
        <form method="post" action="stergere_client.php">
            <div class="form_input">
                <label>id_client</label>
                <input type="text" name="id_client" value="">
            </div>
            <div class="form_input">
                <button type="submit" class="btn" name="login_btn">Stergere</button>
            </div>
        </form>
        <div class="line"></div>
    </div>

    <div class="line"></div>

    <div class="line"></div>

    <?php 
      include("bottom_page.php")
    ?>
</div>
</body>
</html>
