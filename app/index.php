<?php
 $api = isset($_GET['api']) ? true : false;
 $control = isset($_GET['control']) ? addslashes(trim($_GET['control'])) : false;
 $view = isset($_GET['view']) ? addslashes(trim($_GET['view'])) : false;
 if($api) {
    $id = isset($_GET['id']) ? addslashes(trim($_GET['id'])) : false;
    require_once( "./controller/$control.php" );exit;
 }
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="/assets/dist/style.css">
    </head>
    <body>
        <?php require_once 'partials/nav.php' ?>
        <div class="container pt-5">
            <?php
                if( $control != false ) {
                    //... inclui o nome do parâmetro vindo do $_GET.
                    require_once( "./controller/$control.php" );
                // Ou então...
                } else { 
                    // Redireciona para uma página de erro
                    //header( "Location: 404.php" );
                } 
            ?>
        </div>
    </body>
    <script src="/assets/dist/script.js"></script>
</html>