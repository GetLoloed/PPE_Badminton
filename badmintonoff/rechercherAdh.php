<?php
/**
 * Fichier pour la recherche
 */
$title = 'Rechercher un adhérent';
$rech = 'active';
include 'controleur/c_config.php';
include 'controleur/c_fonctions.php';
?>
<hr>
<h2 align="center">Rechercher des adhérents</h2>
<hr>
<div class="container text-center input-group">
    <input type="text" name="search_text" id="search_text" placeholder="Rechercher un adhérent" class="form-control"/>
</div>
<br/>
<div id="result"></div>

<?php
$content = ob_get_clean();
include 'layouts/base.php';
?>
