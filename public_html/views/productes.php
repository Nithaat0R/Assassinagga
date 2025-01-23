<?php foreach ($products as $producteI): ?>
    <a class="card" id="prod" value="<?php echo htmlentities($producteI['id'], ENT_QUOTES | ENT_HTML5, 'UTF-8')?>" onclick="mostraDetalls(this)">
        <img src="<?php echo htmlspecialchars($producteI['imatge']); ?>" alt="<?php echo htmlspecialchars($producteI['nom']); ?>">
        <p>
            <?php echo htmlspecialchars($producteI['nom']); ?></br>
            <?php echo htmlspecialchars($producteI['preu']); ?>€
        </p>
    </a>
<?php endforeach; ?>