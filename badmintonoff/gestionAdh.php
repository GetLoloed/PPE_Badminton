<?php
$title = 'Gestion des adhérents';
$gest = 'active';
ob_start();
?>
<!--Tableau Gestion des adhérents-->
    <div class="container text-center">
        <hr>
        <h1>Gestion des adhérents.</h1>
        <hr>
        <table class="table table-responsive-sm table-hover">
            <thead class="thead-dark">
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Niveau</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php
            include 'controleur/c_config.php';
            include 'controleur/c_fonctions.php';

            $fonctions = new Fonctions();
            $records = $fonctions->getInfoAdh($connexion);

            if ($records->num_rows > 0)
            {
            while ($record = $records->fetch_object())
            {
            $matriculeAdh = $record->matriculeAdh;
            $nomAdh = $record->nomAdh;
            $prenomAdh = $record->prenomAdh;
            $niveauAdh = $record->niveauAdh;
            ?>
            <tr>
                <td><?php echo $nomAdh ?></td>
                <td><?php echo $prenomAdh ?></td>
                <td><?php echo $niveauAdh ?></td>
                <td>
                    <a href="consultAdh.php?matriculeAdh=<?php echo $matriculeAdh ?>" class="btn  btn-outline-primary consultbtn" data-toggle="tooltip" data-placement="top" title="Consulter la fiche de l'adhérent"><i class="fas fa-eye"></i></a>
                    <a href="modifierAdh.php?matriculeAdh=<?php echo $matriculeAdh ?>" class="btn  btn-outline-secondary" data-toggle="tooltip" data-placement="top" title="Modifier la fiche de l'adhérent" ><i class="fas fa-edit"></i></a>
                    <a href="controleur/c_supprAdh.php?matriculeAdh=<?php echo $matriculeAdh ?>" class="btn btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Supprimer l'adhérent"><i class="far fa-trash-alt"></i></a>
                </td>
            </tr>
                    <?php
                    }
                    }
                    ?>

            </tbody>
        </table>
    </div>
<?php
$content = ob_get_clean();
include 'layouts/base.php';
?>