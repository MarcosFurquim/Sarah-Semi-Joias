<?php
 $page = isset($_GET['page']) ? addslashes(trim($_GET['page'])) : false;
 var_dump($page);
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="./assets/dist/style.css">
    </head>
    <body>
        <?php require_once 'partials/nav.php' ?>
        <div class="container pt-5">
            <?php
                if( $page != false ) {
                    //... inclui o nome do parâmetro vindo do $_GET.
                    include( "./view/$page.php" );
                // Ou então...
                } else { 
                    // Redireciona para uma página de erro
                    //header( "Location: 404.php" );
                } 
            ?>
        </div>
    </body>
    <script src="./assets/dist/script.js"></script>
</html>