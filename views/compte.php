<div class="compte-container">
    <h2>EL MEU COMPTE</h2>
    <h3>Nom: <?php echo($_SESSION['name'])?></h3>
    <h3>Mail: <?php echo($_SESSION['mail'])?></h3>
    <h3>Adreça: <?php echo($_SESSION['address'])?></h3>
    <h3>Ciutat: <?php echo($_SESSION['city'])?></h3>
    <button class="modifica-dades" onclick="window.location.href='index.php?action=modifica_dades'">
        MODIFICAR DADES
    </button>
</div>