<?php

echo "oioioi";


if(isset($_POST['submit'])) {
    echo "oioioAi";

    $file = $_FILES['file'];
    $name = $_FILES['file']['name']; //encontra nome do arquivo
    $tmp_name = $_FILES['file']['tmp_name']; 
    $size = $_FILES['file']['size']; 
    $error = $_FILES['file']['error']; 

    $tempExtension = explode('.', $name);

    $fileExtension = strtolower(end($tempExtension));

    $isAllowed = array('jpg', 'jpeg', 'png', 'pdf');

    //0 no error
    if(in_array($fileExtension, $isAllowed)) {
        if ($error === 0) {
            if($size < 30000) {
                $newFileName = uniqid('', true) . "." . $fileExtension;

                $fileDestination = "uploads/" . $newFileName;
                move_uploaded_file($tmp_name, $fileDestination);

                header("Location: ../index.php?uploadsucess");
            } else {
                echo "Desculpe, o tamanho do arquivo e grande demais." . "." . $fileExtension;
            }
        } else {
            echo "Desculpa, ocorreu um erro. Tente novamente!";
        }
    } else {
        echo "Desculpa, esse tipo de aruqivo nao é suportado.";
    }
}
?>