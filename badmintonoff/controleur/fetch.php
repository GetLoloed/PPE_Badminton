<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "badminton");
$output = '';
if (isset($_POST["query"])) {
    $search = mysqli_real_escape_string($connect, $_POST["query"]);
    $query = "
  SELECT * FROM adherent INNER JOIN type t ON adherent.typeAdh = t.numType
  WHERE nomAdh LIKE '%" . $search . "%'
  OR prenomAdh LIKE '%" . $search . "%' 
  OR villeAdh LIKE '%" . $search . "%' 
  OR cpAdh LIKE '%" . $search . "%'
  OR libelleType LIKE '%" . $search . "%'
  OR niveauAdh LIKE '%" . $search . "%'
 ";
} else {
    $query = "
  SELECT * FROM adherent INNER JOIN type t ON adherent.typeAdh = t.numType
 ";
}
$result = mysqli_query($connect, $query);
if (mysqli_num_rows($result) > 0) {
    $output .= '
<div class="container">
   <table class="table">
   <thead class="thead-dark">
    <tr>
     <th>Nom</th>
     <th>Prénom</th>
     <th>Ville</th>
     <th>Code postal</th>
     <th>Niveau</th>
     <th>Type</th>
    </tr>
    </thead>
 ';
    while ($row = mysqli_fetch_array($result)) {
        $output .= '
    <tbody>
   <tr>
    <td>' . $row["nomAdh"] . '</td>
    <td>' . $row["prenomAdh"] . '</td>
    <td>' . $row["villeAdh"] . '</td>
    <td>' . $row["cpAdh"] . '</td>
    <td>' . $row["niveauAdh"] . '</td>
    <td>' . $row["libelleType"] . '</td>
   </tr>
   </tbody>
   </div>
  ';
    }
    echo $output;
} else {
    echo '<div class="container text-center">';
    echo '<span style="color: red">Pas de données.</span>';
    echo '</div>';
}

?>