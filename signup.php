<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Log up</title>
    <style>   
    .login{
        width: 40%;
        height: 50%;
        margin-left: 30%;
        margin-top: 2%;
        margin-bottom: 5%;
        background-image: linear-gradient(#0033cc 33%, purple 50%, #0033cc 100%);
        border-radius: 10px;
    }

    input{
        width: 98%;
        height: 30px;
        float: left;
        background-color: white;
        border-radius: 5px;
        box-sizing: content-box;
    }

    button{
        padding-top: 10px;
        margin-left: 100px;
        width: 100%;
        float: left;
        background-color: red;
    }

    button:hover{
        border: 1px solid black;
        background-color: #ff0000;
    }

    </style>
</head>
<body> 
<?php
include("page_top.php");
?>
<div class="mbody">
    <div class="line"></div>

    <div class="content">
        <div class="login">
            <h3 style="text-align:center; color:white;">Sign up</h3>
            <form action="login.php" method="$_POST">
                <input type="text" name="nume" placeholder="Nume">
                <input type="text" name="prenume" placeholder="Prenume">
                <input type="text" name="Judet" placeholder="Judet">
                <input type="text" name="oras" placeholder="Oras">
                <input type="text" name="telefon" placeholder="Numar de telefon">
                <input type="email" name="email" placeholder="Email">  
                <input type="password" name="password" placeholder="Password">
                <button>Logup</button>
            </form>

        </div>
    </div>
</div>
</body>
</html>
