<?php
/**
 * chaque echo permet de mettre en 'active' dans la navbar
 */
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <a class="navbar-brand" href="index.php">Badminton</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link <?php echo $index ?> " href="index.php">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $gest ?>" href="gestionAdh.php">Gestion des adhérents</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $add ?>" href="ajouterAdh.php">Ajouter un adhérent</a>
            </li>
            <li class="nav-item">
                <a class="nav-link  <?php echo $rech ?>" href="rechercherAdh.php">Rechercher un adhérent</a>
            </li>
        </ul>
    </div>
</nav>