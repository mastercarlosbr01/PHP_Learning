<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste em tipos primitivos</title>
</head>
<body>
    <h1>Teste em tipos primitivos</h1>
    <?php 
        $num = 0x1A;
        echo "O valor da variável é $num";      
        echo "Ver o tipo primitivo da variavel: ". var_dump($num);


        $bolee = true;
        echo "O valor da variável é $bolee";   
        
        echo "Ver o tipo primitivo da variavel: ". var_dump($bolee);
    ?>
</body>
</html>