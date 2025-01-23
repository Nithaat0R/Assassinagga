<div class="carrito-container">
    <h1>Cabàs</h1>
    <br>

    <?php
        $unitats = 0;
        $import = 0;

        foreach ($_SESSION['carrito'] as $producte){
            $unitats += $producte['quantitat'];
            $import += $producte['preu'] * $producte['quantitat'];
            
            echo "<div class=producte-cabas>";
            echo "Producte: {$producte['nom']}, Preu: {$producte['preu']}, Quantitat: {$producte['quantitat']} ";
            echo "<button onclick='actualitzaQuantitat(\"{$producte['nom']}\", \"rm\")'>Eliminar producte</button>";
            echo "<button onclick='actualitzaQuantitat(\"{$producte['nom']}\", \"add\")'>+</button>";
            echo "<button onclick='actualitzaQuantitat(\"{$producte['nom']}\", \"sub\")'>-</button>";
            echo "<br><br>";
            echo "</div>";
        }

        echo "<p class='compra';><b>Quantitat: </b>" . count($_SESSION['carrito']) . "</p>";
        echo "<p class='compra';><b>Unitats totals: </b>" . $unitats . "</p>";
        echo "<p class='compra';><b>Preu total: </b>" . $import . "</p>";

        echo "<br>";

        if($_SESSION['carrito'] == []){
            echo '<button class="compra"; onclick="alert(\'El cabas està buit\')">Cabàs buit</button>';
        }else{
            echo "<button class='compra'; onclick='buidarCarrito()'>Buidar cabàs</button>";

            if(!isset($_SESSION['user_id'])){
                echo "<button class='compra'; disabled>Inicia sessió per comprar</button>";
            }else{
                echo "<button class='compra'; onclick='comprarFinal()'>Comprar</button>";
            }
        }
    ?>
</div>