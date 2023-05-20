<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            // var_dump($_GET); pega    
            // var_dump($_POST); envia
            // var_dump($_REQUEST); no php vale como envio e pega também dados, tanto post quanto get
            $nomePHP = $_GET["nome"]  ?? "sem nome // ";  // ?? para ver a variavel está vazia
            $sobrenomePHP = $_GET["sobrenome"] ?? " // sem sobrenome";
            echo "<p>É um grande prazer te conhecer <strong>$nomePHP $sobrenomePHP</strong>, caso queira voltar só apertar o link!";
        ?>
        <br>
        <p><a href="index.php"> Voltar </a></p>
    
    </main>
    
</body>
</html>