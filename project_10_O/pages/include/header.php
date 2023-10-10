<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>HOME</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css"/>
</head>
<body>

    <?php if(isset($_SESSION['id'])) { ?>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand">Logo</a>
            <ul class="navbar-nav">
                <li><a href="home.php" class="nav-link">Prime Number</a></li>
                <li><a href="series.php"  class="nav-link">Series Program</a></li>
                <li><a href="action.php ?status=logout"  class="nav-link">Logout</a></li>
            </ul>
        </div>
    </nav>
    <?php } ?>