<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador de numero Real</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado</h1>
        <p>
            <?php 
                $num = $_REQUEST["n"] ?? 0;  

                echo "Analisando o numero <strong>".number_format($num,3,",",".")."</strong> informado pelo usuario:";
                $int = (int) $num;
                $fra = $num - $int;
                echo "<ul>
                <li>A parte inteira do numero <strong>".number_format($int, 0, ",", ".")."</strong></li>
                <li>A parte fracionária do numero <strong>".number_format($fra, 3, ",", ".")."</strong></li>
                </ul>";
            ?>
        </p>
        <br>
        <button style="color: azure;" onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>    
    </main>
    
</body>
</html>