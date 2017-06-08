<?php 
require 'init.php';
 ?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Projet Web : SoftMarket</title>
    <link rel="stylesheet" href="../css/bootstrap.css"/>
    <link rel="stylesheet" href="../css/style.css"/>
    <link rel="stylesheet" href="../css/jquery-ui.min.css"/>
    <link rel="stylesheet" href="../css/menu.css"/>
    <link rel="stylesheet" href="../css/header.css"/>
    <link rel="stylesheet" href="../css/toolbar.css"/>
    <link rel="stylesheet" href="../css/article.css"/>
    <link rel="stylesheet" href="../css/footer.css"/>
    <link rel="stylesheet" href="../css/cart.css"/>
    <link rel="stylesheet" href="../css/animate.css"/>
    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/jquery-ui.min.js"></script>
    <script src="../js/app.js"></script>

</head>
<body>
<div class="container">
    <header>
        <div class="row header-top">
            <div id="header-info" class="col-md-4">
                <p>Shop by Phone <span>(01) 123 456 SM</span> <a href="#">Live Chat With Us</a></p>
            </div>
            <div id="header-menu" class="col-md-8">
                <div id="cart">
                    <a href="cart.php">My Cart <span>(<span id="count"><?= $panier->count()?></span>)</span></a>
                    <p class="dropdown-toggle" style="padding-left: 12px;"></p><span class="caret"></span> <!-- le caret est plus loin que l'autre -->
                </div>
                <div id="account">
                    <a href="#">My Account</a>
                    <p class="dropdown-toggle"></p><span class="caret"></span>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-left">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php"><img src="../ressources/logo.png"></a>
                </div>
                <div id="nav-menu" class="nav nav-pills float-right">
                    <ul>
                        <li class="nav-item"><a class="nav-link" href="#">OFFICE</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">MULTIMEDIA</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php">DESIGN</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">DEVELOPER</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">UTILITIES</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">GAMES</a></li>
                    </ul>
                    <div class="search-input-content">
                        <input class="search" type="text" title="search"></div>
                </div>
            </div>
        </nav>
    </header>
</div>
<div id="header-separator"></div><br>
<div id="main-container" class="container">
    <div class="breadcrumbs">
        <ul>
            <li class="home">
                <a href="index.php" title="Go to Home Page">Home</a>
                <span>/ </span>
            </li>
            <li class="category">
