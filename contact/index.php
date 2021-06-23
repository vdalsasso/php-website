<html>
<head>
    <meta charset="UTF-8">
    <title> Formulário de contato </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div>
        <h1> Entrar em contato: </h1>
        <p> Por favor, preencha os campos. </p>
    </div>

    <form action="contact.php" method="post">
        <input type="text" name="name" placeholder="Nome completo">
        <input type="text" name="email" placeholder="E-mail">
        <input type="text" name="assunto" placeholder="Assunto">

        <textarea name="mensagem" placeholder="Por favor, digite sua mensagem"></textarea>
        <button type="submit" name="submit">ENVIAR</button>
    </form>
</body>
</html>