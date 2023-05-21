<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php 
                // var_dump($_GET); pega    
                // var_dump($_POST); envia
                // var_dump($_REQUEST); no php vale como envio e pega também dados, tanto post quanto get
                $num= $_REQUEST["numero"]  ?? "0";  // ?? para ver a variavel está vazia
                $ante = $num - 1 ?? 0;
                $suce = $num + 1 ?? 0;
                echo "O número escolhido foi: <strong>$num</strong><br>";
                // echo "<p>O seu antecessor é:  <strong>$ante</strong><br>";
                echo "O seu <em>antecessor</em> é:  <strong>".($num - 1)."</strong><br>";
                echo "O seu sucessor é: <strong>$suce</strong><br>";
                // echo "<p>O seu sucessor é: <strong>".($num + 1)."</strong><br>";
            ?>
        </p>
        <br>
        <button style="color: azure;" onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>    
    </main>
    
</body>
</html>