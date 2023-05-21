<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteado numeros</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>

        <p>
            <?php
             $min = 0;
             $max  = 100;
             $valorGerado = mt_rand($min, $max);
             echo "Gerando um numero aleatorio entre $min e $max .... <br>";
             echo "O valor ferado foi <strong>$valorGerado</strong>"
            ?>
        </p>

        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro</button>
    </main>
</body>
</html>