<div id="llistat">
    <?php foreach ($categories as $category): ?>
            <a class="card" id="cat" value="<?php echo htmlentities($category['id'], ENT_QUOTES | ENT_HTML5, 'UTF-8')?>" onclick="mostraProductes(this)">
                    <img src="<?php echo htmlspecialchars($category['imatge']); ?>" alt="<?php echo htmlspecialchars($category['name']); ?>">
                    <p><?php echo htmlentities($category['name'], ENT_QUOTES | ENT_HTML5, 'UTF-8') ?></p>
            </a>
    <?php endforeach; ?>
</div> 