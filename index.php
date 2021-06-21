<html>
<head>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="corpo">
        <div id="topo">
            <nav>
                <a href="#">Home</a>
                <a href="#">Sobre</a>
                <a href="#">Contato</a>
            </nav>
        </div>
        
<?php
    echo $name = $_FILES['file']['name'] . "ee</br";
    //echo $type = $_FILES['file']['type'];
?>

        <div id="conteudo">
            bla bla bla bla bla

            <div id="form">
                <form action="superglobals/upload.php" method="post" enctype="multipart/form-data">

                    <input type="file" name="file">
                    </br>
                    <button type="submit" name="submit">ENVIAR</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>