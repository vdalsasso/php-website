<?php

require_once 'includes/header.php';

?>
<div>
    <h1>Registrar</h1>
    <p>Já tem uma conta? <a href="login.php">Logue aqui!</a></p>

    <form action="includes/register-inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="confirmPassword" placeholder="Confirme o Password">
        <button type="submit" name="submit">REGISTRAR</button>
    </form>
</div>

<?php
require_once 'includes/footer.php';
?>