<html lang="ca">
    <head>
        <title>Compte - TDIW</title>
        <link rel="stylesheet" href="/estil.css"/>
        <script src="scripts.js"></script>
    </head>
    
    <body> 
        <?php require __DIR__.'/controller/menu_superior.php';?>
        <div class="container">
            <?php require __DIR__.'/controller/compte.php';?>
        </div>
    </body>
</html>

<!-- crida al controlador que crida a la vista. -->