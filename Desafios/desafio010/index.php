<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador de Preço</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $padrao = numfmt_create("pt-BR", NumberFormatter :: CURRENCY);

        $prec = $_REQUEST['prec'] ?? 0;
        $reajus = $_REQUEST['reajus'] ?? 0;

        $resultado =  $prec + ($prec *  ($reajus / 100));

   
    ?>
        <!-- shot tag <?=$valor1?> =  mesma coisa que <?php echo $valor1?> -->

    <main>
        <h1>Reajustador de Preço</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="prec">Preço do Produto (R$)</label>
            <input type="number" name="prec" id="prec" value="<?=$prec?>">
            <strong><label for="prec">Qual será o percentual de reajuste? <strong><?=$reajus?>% </strong></label></strong>
            <input type="range" min="0" max="100" step="1" value="<?=$reajus?>" id="foo" name="reajus" onchange='document.getElementById("foo").value;'/>
            <input type="submit" value="Reajustar">

        </form>
    </main>
    <section id="resultado">
        <h2>Resultado do Reajuste</h2>
        <p>
        <?php 
            echo "O produto que custava <strong>".numfmt_format_currency($padrao,$prec,"BRL")."</strong>, com <strong>$reajus% </strong>de aumento vai passar a custar <strong>".numfmt_format_currency($padrao,$resultado,"BRL")."</strong> a partir de agora.";
        ?>
        </p>
    </section>


    
</body>
</html>