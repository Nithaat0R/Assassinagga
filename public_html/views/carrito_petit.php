<hr>

<div id='titol-carrito'>
    <h2>Cabàs</h2>
</div>

<div id="resum-carrito">
    <?php
    $prod = count($_SESSION['carrito']);
    $unitats = 0;
    $import = 0;
    
    foreach ($_SESSION['carrito'] as $producte){
        $unitats += $producte['quantitat'];
        $import += $producte['preu'] * $producte['quantitat'];
    }

    echo "<p class='compra'><b>Productes: </b>" . $prod . "</p>";
    echo "<p class='compra'><b>Unitats totals: </b>" . $unitats . "</p>";
    echo "<p class='compra'><b>Preu total: </b>" . $import . "</p>";

    if($_SESSION['carrito'] == []){
        echo '<button class="compra"; onclick="alert(\'El cabas està buit\')">Cabàs buit</button>';
    }else{
        echo "<button class='compra'; onclick='viewCarrito()'>Veure cabàs</button>";
        echo "<button class='compra'; onclick='buidarCarrito()'>Buidar cabàs</button>";
    }
    ?>
</div>

