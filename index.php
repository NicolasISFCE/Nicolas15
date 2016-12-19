<?php
session_start();

include("./modeles/connexion_db.php");
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>ISFCE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="vues/bootstrap-3.3.7-dist/css/bootstrap.min.css">
        <script src=vues/jquery-3.1.1/jquery-3.1.1.min.js"></script>
        <script src="vues/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <?php
            include("./vues/menu_header_footer/vue_header.php");
            include("./vues/menu_header_footer/vue_menu.php");

            $navigation = isset($_GET['navigation']) ? $_GET['navigation'] : 'presentation';

            switch ($navigation) {
                case 'presentation' :
                    include("./vues/vue_presentation.php");
                    break;
            }
            include("./vues/menu_header_footer/vue_footer.php");
            ?>

        </div>
    </body>
</html>
