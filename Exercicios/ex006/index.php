<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritméticos</title>
    <link rel="stylesheet" href="/ex005/style.css">
</head>
<body>
<h1> Absoluto</h1>
<?php 
    $aboluto = abs(-50);
    echo "o valor absoluto=  $aboluto <br><br>";
?>

<h1> Converter a base</h1>
<?php 
    $base = base_convert(254, 10, 8);
    echo "base convertida =  $base <br><br>";
?> 
    
<h1> Resto da divisão</h1>
<?php 
    $r = intdiv(5,2);
    $rest = 5%2;

    echo "Divisão inteira =  $r <br>";
    echo "resto da divisão =  $rest <br><br>";

?> 


<h1> Valor minimo e  máximo</h1>
<?php 
    $min = min(5,2,10,45,8999);
    $max = max(5,2,15,8,9,4,3,7,5);


    echo "maior valor =  $min <br>";
    echo "menor =  $max <br><br>";

?> 

<h1> o valor de pi</h1>
<?php 
    $destaForma = pi();
    $ouDestaForma = M_PI;

    echo "pi pi pi  =  $destaForma <br>";
    echo "pi pi pi  =  $ouDestaForma <br><br>";

?> 


<h1> Potencia</h1>
<?php 
    $potencia = pow(5,2); 

    echo "potencia =  $potencia <br><br>";

?> 


<h1> Raiz quadrada</h1>
<?php 
    $quadr = sqrt(81); // pow(27, 1/3); raiz cubica de 27 LOL

    echo "Raiz quadrada =  $quadr <br><br>";

?> 

</body>
</html>