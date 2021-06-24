<?php
    session_start();
    require_once 'database.php';
    require_once 'register-inc.php';
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<body>

    <header>
        <nav>
            <ul>
                <a href="index.php"> Home </a>
                <a href="login.php"> Login </a>
                <a href="register.php"> Registro </a>
            </ul>
        </nav>
    </header>