<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Capturando os dados do formulario retroalimentado

        $dividendo = $_GET['dividendo'] ?? 0;
        $divisor = $_GET['divisor'] ?? 1;
        $resultado = floor($dividendo / $divisor);
        $restoDiv = floor($dividendo % $divisor);
        $infor = ($dividendo % $divisor) == 0 ? "Divisão <strong>exata</strong>" : "Divisão <strong>não exata</strong>";
    ?>
        <!-- shot tag <?=$valor1?> =  mesma coisa que <?php echo $valor1?> -->

    <main>
        <h1>Somador de valores</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" value="<?=$dividendo?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" value="<?=$divisor?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section id="resultado">
        <h2>Estrutura da Divisão</h2>
        <?php 
            echo "<p>O dividendo é  $dividendo. <br> O divisor é $divisor.<br>O resto da visão é $restoDiv.<br>O resultado é $resultado<br>$infor</p>";
        ?>

<table>
    <tr>
        <td>
         <?= $dividendo?>
        </td>
        <td>
         <?= $divisor?>
        </td>
    </tr>
    <tr>
        <td>
            <?= $restoDiv?>
        </td>
        <td>
            <?= $resultado?>
        </td>
    </tr>
</table>
    </section>

    
</body>
</html>