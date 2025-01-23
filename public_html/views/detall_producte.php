<div class="expositor">
    <h1 style="grid-area: titol"><?php echo $product['nom']?></h1>
    <img id="imatge" style="grid-area: imatge" src="<?php echo htmlspecialchars($product['imatge']); ?>" alt="<?php echo htmlspecialchars($product['nom']); ?>">
    <h1 style="grid-area: preu" ><?php echo $product['preu']?>€</h1>
    <aside style="grid-area: descripcio" ><?php echo $product['descripcio']?></aside>


    <button onclick="afegirProducte('<?php echo $product['nom']; ?>', <?php echo $product['preu']; ?>, <?php echo $product['id']; ?>);">Afegir al carro</button>
</div>