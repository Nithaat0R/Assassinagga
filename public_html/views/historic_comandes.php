<div class="historic">
    <h1>Historic de comandes</h1>
    <br>

    <?php foreach ($comandes as $comanda):?>
            <?php $total = 0; ?>
            <div class=producte-cabas>
                <h2>ID de la comanda: <?php echo($comanda[0]['comanda_id'])?> </h2>
                <?php foreach ($comanda as $producte):?>
                    <hr>
                    <p>Producte: <?php echo($producte['product_name'])?></p>
                    <p>Quantitat: <?php echo($producte['quantity'])?></p>
                    <p>Preu per unitat: <?php echo($producte['unit_price'])?></p>
                    <p>Subtotal: <?php echo($producte['unit_price'] * $producte['quantity'])?></p>
                    <?php $total += $producte['unit_price'] * $producte['quantity']; ?>
                <?php endforeach; ?>
                <hr>
                <h2>Preu total: <?php echo($total)?> </h2>
            </div>
    <?php endforeach; ?>
</div> 