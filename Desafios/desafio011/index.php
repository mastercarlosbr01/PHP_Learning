<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        date_default_timezone_set("America/Sao_Paulo"); //GMT-3
        $dateActual = date('d/m/Y H:i:s');
        // Capturando os dados do formulario retroalimentado
        $seconds = $_GET['seconds'] ?? 0;
   
    ?>
        <!-- shot tag <?=$valor1?> =  mesma coisa que <?php echo $valor1?> -->

    <main>
        <h1>Calculadora de tempo</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="seconds">Qual é o total de segundos?</label>
            <input type="text" name="seconds" id="seconds" value="<?=$seconds?>" maxlength="7" max="7" size="7" >
            <input type="submit" value="Calcular">

        </form>
    </main>
    <section id="resultado">
        <h2>Totalizando Tudo</h2>
        <p>
        <?php 
                    $a = new DateTime(' +'.$seconds.' seconds');
                    // $a->modify('+'.$seconds.' seconds');
                    $b = new DateTime();
                    $intervalo = $a->diff($b);
                    $semana = $intervalo->d / 7;
                    $semanaRes = $intervalo->d % 7;

            echo "Analisando o valor que você digitou , <strong>resultado</strong> segundos equivalem a um total de:<br>
            <ul>
                <li> ".number_format($semana,0)." semanas ($semanaRes dia(s)) </li>
                <li> $intervalo->d dias</li>
                <li> $intervalo->h horas</li>
                <li> $intervalo->i minutos</li>
                <li> $intervalo->s segundos</li>

            </ul><br>";
        ?>
        </p>
    </section>
</body>
</html>