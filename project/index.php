<?php

require_once 'includes/header.php';

?>

<?php
    if(isset($_SESSION['sessionId'])) {
        echo "Você está logado.";
    } else {
        echo "Home";
    }


?>

<?php
require_once 'includes/footer.php';
echo 'oi3';
?>