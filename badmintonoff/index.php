<!-- Header -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/styles.css"><!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b1b4f5435a.js" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <a class="navbar-brand" href="../index.php">Badminton</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="vues/v_gestionAdh.php">Gestion des adhérents</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="vues/v_ajouterAdh.php">Ajouter un adhérent</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="vues/v_rechercherAdh.php">Rechercher un adhérent</a>
            </li>
        </ul>
    </div>
</nav>
<div class="page-wrapper">
    <div class="nav-wrapper">
        <div class="headline">
            <h1>Application badminton</h1>
            <p>Permet de gérer, consulter, modifier, rechercher & supprimer un adhérent.</p>
        </div>
    </div>
<section class="container features">
    <div class="feature-container">
        <a href="vues/v_gestionAdh.php"><h2>Gérer les adhérents</h2></a>
        <p>Tableau permettant de consulter, modifier & supprimer un adhérent.</p>
    </div>
    <div class="feature-container">
        <a href="vues/v_ajouterAdh.php"><h2>Ajouter un adhérent</h2></a>
        <p>Ajouter un adhérent via un formulaire.</p>
    </div>
    <div class="feature-container">
        <a href="vues/v_rechercherAdh.php"><h2>Rechercher un adhérent</h2></a>
        <p>Etablir une recherhce à partir de criteres.</p>
    </div>
</section>
</div>
<?php include "vues/v_footer.html";?>