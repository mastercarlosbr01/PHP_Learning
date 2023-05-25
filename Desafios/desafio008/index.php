<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média Aritméticas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Capturando os dados do formulario retroalimentado
        $var1 = $_GET['var1'] ?? 0;
        $pes1 = $_GET['pes1'] ?? 1;
        $var2 = $_GET['var2'] ?? 0;
        $pes2 = $_GET['pes2'] ?? 1;

        $mediaAri = ($var1 + $var2) / 2;
        $mediaPon = (($var1 * $pes1) + ($var2 * $pes2)) / ($pes1 + $pes2);

   
    ?>
        <!-- shot tag <?=$valor1?> =  mesma coisa que <?php echo $valor1?> -->

    <main>
        <h1>Média Aritméticas</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="var1">1º Valor</label>
            <input type="number" name="var1" id="var1" value="<?=$var1?>" >
            <label for="pes1">1º Peso</label>
            <input type="number" name="pes1" id="pes1" value="<?=$pes1?>" >
            <label for="var2">2º Valor</label>
            <input type="number" name="var2" id="var2" value="<?=$var2?>" >
            <label for="pes2">2º Peso</label>
            <input type="number" name="pes2" id="pes2" value="<?=$pes2?>" >
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section id="resultado">
        <h2>Calculo das Médias</h2>
        <p>
        <?php 
            echo "Analisando os valores <strong>$var1</strong> e <strong>$var2</strong>:<br>
            <ul>
            <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <strong>".number_format($mediaAri,2)."</strong></li>
            <li>A <strong>Média Aritmética Ponderada</strong> com os pesos <strong>$pes1</strong> e <strong>$pes2</strong> é igual a <strong>".number_format($mediaPon,2)."</strong></li>
        </ul>
        ";
        ?>
        </p>
    </section>


    
</body>
</html>