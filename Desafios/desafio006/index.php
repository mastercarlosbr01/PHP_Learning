<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe seu salário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Capturando os dados do formulario retroalimentado
        $padrao = numfmt_create("pt-BR", NumberFormatter :: CURRENCY);
        $salario = $_GET['salario'] ?? 0;
        $salarioMin = 1320;
        $resultado =  (int)($salario / $salarioMin);
        $restoDiv = ($salario - ($resultado * 1320)) < $salarioMin ? 0 : ($salario - ($resultado * 1320));

        $infor = $salario > $salarioMin ? "<p>Quem recebe um salário de ".numfmt_format_currency($padrao,$salario,"BRL")." ganha <strong>".$resultado." salário mínimos</strong> + ".numfmt_format_currency($padrao,$restoDiv,"BRL")."</p>" : "<p>Você precisa estudar para ganhar mais, só com este salário de ".numfmt_format_currency($padrao,$salario,"BRL")."  não vai conseguir sobreviver neste país</p>";
    ?>
        <!-- shot tag <?=$valor1?> =  mesma coisa que <?php echo $valor1?> -->

    <main>
        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="salario">Salário R$</label>
            <input type="number" name="salario" id="salario" value="<?=$salario?>" step="0.01">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php 
            $padrao = numfmt_create("pt-BR", NumberFormatter :: CURRENCY);

            echo $infor;
        ?>
    </section>

    
</body>
</html>