<?php
$title = 'Accueil';
$index = 'active';
ob_start();
?>
<div class="page-wrapper">
    <div class="nav-wrapper">
        <div class="headline">
            <h1>Application badminton</h1>
            <p>Permet de gérer, consulter, modifier, rechercher & supprimer un adhérent.</p>
        </div>
    </div>
<section class="container features">
    <div class="feature-container">
        <a href="gestionAdh.php"><h2>Gérer les adhérents</h2></a>
        <p>Tableau permettant de consulter, modifier & supprimer un adhérent.</p>
    </div>
    <div class="feature-container">
        <a href="ajouterAdh.php"><h2>Ajouter un adhérent</h2></a>
        <p>Ajouter un adhérent via un formulaire.</p>
    </div>
    <div class="feature-container">
        <a href="rechercherAdh.php"><h2>Rechercher un adhérent</h2></a>
        <p>Etablir une recherhce à partir de criteres.</p>
    </div>
</section>
</div>
<?php
$content = ob_get_clean();
include 'layouts/base.php' ?>
?>
