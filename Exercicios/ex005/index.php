<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interação com Fomulários</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <h1>Apresente-se para nós</h1>
    </header>
    <section>
    <form action="cad.php" method="get">
    <div>
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="idNome">
        <label for="sobreNome">Sobrenome</label>
        <input type="text" name="sobrenome" id="idSobreNome">
        <input type="submit" value="Enviar">
    </div>
    </form>
    </section>

    
</body>
</html>