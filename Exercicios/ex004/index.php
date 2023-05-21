<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
</head>
<body>
    <h1>String</h1>
    <?php 
        $nome = "Carlos";

        echo "Olá $nome \u{1FAF6}\n";

    ?>
    <br> <!-- <br> as vezes é mais fácil colocar o br, porém o /n não vai por conta de estar em html, mas se colocar em text area o /n pula linha -->
    <?php 
    $anoAtual = date('Y');
        echo "$nome você vai ter que se virar nos 30, e o ano atual é $anoAtual<br>";
        echo "Porém hoje vamos trabalhar com string";
    ?>
    
</body>
</html>