<div class="forms-container">
  <form action="index.php?action=modifica_dades" class="login-forms" method="post">
    <h2>MODIFICA LES TEVES DADES</h2>
    <h3>Nom:</h3>
    <input type="text" id="nom" name="nom" value="<?php echo htmlspecialchars($_SESSION['name']); ?>">
    <h3>Mail:</h3>
    <input type="text" id="mail" name="mail" value="<?php echo htmlspecialchars($_SESSION['mail']); ?>">
    <h3>Contrasenya:</h3>
    <input type="password" id="contrasenya" name="contrasenya" placeholder="Introdueixi la nova contrasenya que vulgui utilitzar">
    <h3>Adreça:</h3>
    <input type="text" id="address" name="address" value="<?php echo htmlspecialchars($_SESSION['address']); ?>">
    <h3>Ciutat:</h3>
    <input type="text" id="city" name="city" value="<?php echo htmlspecialchars($_SESSION['city']); ?>">
    <h3>Codi postal:</h3>
    <input type="text" id="postcode" name="postcode" value="<?php echo htmlspecialchars($_SESSION['postcode']); ?>">
    <input type="submit" value="Modificar dades">
  </form>
</div>