<h1>Les cours</h1>

<br/>

<?php
if ($les_cours === FALSE) {
    echo("<p class='alert alert-danger'> Erreur : la requête SQL est incorrecte.</p>");
} else {
    foreach ($les_cours as $un_cours) {
        echo("<h3>" . $un_cours['nom_cours'] . "</h3>");
        echo("<p> professeur : " . $un_cours['nom_professeur'] . "</p>");
        echo("<p> nombre d'heures : " . $un_cours['nb_heures'] . " </p>");
        
    }
}
?>


