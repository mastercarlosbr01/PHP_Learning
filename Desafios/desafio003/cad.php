<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <main>
        <h1>Conversor de moedas</h1>
        <p>
            <?php 
             $inicio = date("m-d-Y", strtotime("-7 days"));
             $fim = date("m-d-Y", strtotime("3 days"));
                $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao'; 
                $dados = json_decode(file_get_contents($url), true);
                
                $cotaç = number_format($dados["value"][0]["cotacaoCompra"],2);
                $dataAtual = date_create($dados["value"][0]["dataHoraCotacao"]);

                echo "Dollar hoje: RS$ ".$cotaç."<br><em>(<strong>Lembrando que aos sabados e aos domingos o Banco central não emite</strong>)<br>Data: ".date_format($dataAtual, "d/m/Y")."</em><br><br>";
                $cotação = 5;
                $num = $_REQUEST["numero"] ?? 0;  
                $dollar = $num / $cotação ;

                $padrao = numfmt_create("pt-BR", NumberFormatter :: CURRENCY);
                echo "Seus <strong>".numfmt_format_currency($padrao,$num,"BRL")."</strong> equivalem a US$ <strong>".numfmt_format_currency($padrao,$dollar,"USD")."</strong><br>";

                // echo "Seus <strong>".number_format($padrao,2)."</strong> equivalem a US$ <strong>".number_format($dollar, 2,",",".")."</strong><br>";
            ?>
        </p>
        <br>
        <button style="color: azure;" onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>    
    </main>
    
</body>
</html>