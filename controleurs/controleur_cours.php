<?php

function gerer_cours_liste() {
    $les_cours = get_all_cours();
    include("vues/vue_cours_liste.php");
}

