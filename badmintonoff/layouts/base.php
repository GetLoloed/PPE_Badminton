<?php // Fichier template pour les pages web ?>
<!-- Header -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--  Bootstrap  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b1b4f5435a.js" crossorigin="anonymous"></script>
    <title><?php echo $title // Permet d'afficher le titre en fonction de la page ?> - Badminton</title>

</head>
<body>
<?php include "nav/nav.php"; ?>
<?php echo $content; // Affiche le contenu d'une page ?>
<!-- Footer -->
<div class="container">
    <footer class="footer-copyright text-center fixed-bottom">
        &copy;La maison des ligues
    </footer>
</div>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
<script>
    //    Fonction pour faire la recherche dynamique.
    $(document).ready(function () {

        load_data();

        function load_data(query) {
            $.ajax({
                url: "controleur/fetch.php",
                method: "POST",
                data: {query: query},
                success: function (data) {
                    $('#result').html(data);
                }
            });
        }

        $('#search_text').keyup(function () {
            var search = $(this).val();
            if (search != '') {
                load_data(search);
            } else {
                load_data();
            }
        });
    });
</script>
</body>
</html>