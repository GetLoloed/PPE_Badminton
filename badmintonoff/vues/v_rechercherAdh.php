<?php
include "v_header.html";
include '../controleur/c_config.php';
include '../controleur/c_fonctions.php';
?>
<title>Badminton | Rechercher </title>
<body>
<div class="container">
    <br />
    <h2 align="center">Rechercher des adhérents</h2><br />
    <div class="form-group">
        <div class="input-group">
            <input type="text" name="search_text" id="search_text" placeholder="Rechercher un adhérent" class="form-control" />
        </div>
    </div>
    <br />
    <div id="result"></div>
</div>

<?php include "v_footer.html"; ?>
