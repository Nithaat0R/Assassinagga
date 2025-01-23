<html lang="ca">
    <head>
        <title>Llistat de categories - TDIW</title>
        <link rel="stylesheet" href="/estil.css"/>
        <script src="scripts.js"></script>
    </head>
    
    <body> 
        <?php require __DIR__.'/controller/menu_superior.php';?>
        <div class="container" id="container">
            <?php require __DIR__.'/controller/llista_categories.php';?>
        </div>
        <div id='carrito-petit'>
            <?php require __DIR__.'/controller/carrito_petit.php';?>
        </div>
        
    </body>
</html>

<!-- crida al controlador que crida a la vista. -->