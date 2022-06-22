<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Log in</title>
    <link rel="stylesheet" href="form_style.css">
</head>
<body> 
<?php
include("page_top.php");
?>
<div class="mbody">
    <div class="line"></div>

    <div class="content">
        <div class="head">Log in</div>
        <form method="post" action="autentificare.php">
            <div class="form_input">
                <label>Email</label>
                <input type="text" name="email" value="">
            </div>
            <div class="form_input">
                <label>Parola</label>
                <input type="password" name="password">
            </div>
            <div class="form_input">
                <button type="submit" class="btn" name="login_btn">Log in</button>
            </div>

            <p style="text-align:center; background-color: red; color:white">Email sau parola introduse gresit!</p>
            <p>
                Daca nu ai un cont apasa <a href="register.php">aici</a> pentru a crea unul
            </p>
        </form>
    </div>

    <div class="line"></div>

    <?php 
      include("bottom_page.php")
    ?>
</div>
</body>
</html>
