<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando sua Idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        date_default_timezone_set("America/Sao_Paulo"); //GMT-3
        $dateActual = date("Y");
        // Capturando os dados do formulario retroalimentado
        $dataNasc = $_GET['dataNasc'] ?? 0;
        $dataYear = $_GET['dataYear'] ?? $dateActual;

        $idade = $dataYear - $dataNasc;
   
    ?>
        <!-- shot tag <?=$valor1?> =  mesma coisa que <?php echo $valor1?> -->

    <main>
        <h1>Calculando sua Idade</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="dataNasc">Em que ano você nasceu?</label>
            <input type="number" name="dataNasc" id="dataNasc" value="<?=$dataNasc?>" maxlength="4" >
            <label for="dataYear">Quer saber sua idade em que ano? (atualmente estamos em <strong><?= $dateActual?></strong>)</label>
            <input type="number" name="dataYear" id="dataYear" value="<?=$dataYear?>" maxlength="4" >
            <input type="submit" value="Qual será minha idade?">

        </form>
    </main>
    <section id="resultado">
        <h2>Resultado</h2>
        <p>
        <?php 
            echo $dataYear > $dataNasc ? "Quem nasceu em <strong>$dataNasc</strong> vai ter <strong>$idade anos</strong> em <strong>$dataYear</strong>!" : "A data na qual você deseja verificar está menor que a de Nacimento!!<br> <strong>Tente novamente!</strong>";
        ?>
        </p>
    </section>


    
</body>
</html>