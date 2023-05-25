<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe um número</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Capturando os dados do formulario retroalimentado
        $num = $_GET['num'] ?? 0;
        $raizQuad =  sqrt($num);
        $raizCub = pow($num, 1/3);

        $infor = "<p> Analisando o número <strong>$num</strong>, temos: <br> 
        <ul>
        <li>
            <p> A sua raiz quadrada é <strong>".number_format($raizQuad,3)."</strong></p>
        </li>
        <li>
            <p>A sua raiz cúbica é <strong>".number_format($raizCub,3)."</strong></p>
        </li>
    </ul><br>
    </p>";
    ?>
        <!-- shot tag <?=$valor1?> =  mesma coisa que <?php echo $valor1?> -->

    <main>
        <h1>Informe um número</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" value="<?=$num?>" >
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php 
            echo $infor;
        ?>
    </section>

    
</body>
</html>