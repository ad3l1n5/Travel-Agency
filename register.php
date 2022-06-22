<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Log up</title>
    <link rel="stylesheet" href="form_style.css">
</head>
<body> 
<?php
include("page_top.php");
?>
<div class="mbody">
    <div class="line"></div>

    <div class="content">
    <div class="head">Creaza un cont</div>
        <form method="post" action="register_account.php">
            <div class="form_input">
                <label>Email</label>
                <input type="text" name="email" value="">
            </div>
            <div class="form_input">
                <label>Parola</label>
                <input type="password" name="password">
            </div>
            <div class="form_input">
                <label>Nume</label>
                <input type="text" name="name">
            </div>
            <div class="form_input">
                <label>Prenume</label>
                <input type="text" name="prenume">
            </div>
            <div class="form_input">
                <label>Telefon</label>
                <input type="text" name="phone">
            </div>
            <div class="form_input">
                <button type="submit" class="btn" name="register_btn">Register</button>
            </div>
        </form>
    <div class="line"></div>
    </div>

<div class="line"></div>

<?php 
  include("bottom_page.php")
?>
</div>
</body>
</html>
