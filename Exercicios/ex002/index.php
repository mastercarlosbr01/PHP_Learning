<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplos de PHP</h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo"); //GMT-3
        echo "Hoje é dia " . date("d/M/Y");
        echo " e a hora atual é ". date("G:i:s");

        $nome = "Carlos";
        $sobreNome = " Henrique Brasil";


        const PAIS = "Brasil";

        echo "<br><br>Olá, <br>$nome $sobreNome, você mora no ".PAIS.".";
    ?>
</body>
</html>