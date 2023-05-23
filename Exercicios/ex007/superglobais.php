<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicios PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <pre>
            <?php 
                session_start();
                $_SESSION["teste"] = "Funcionou!";

                setcookie("dia-da-semana", "SEGUNDA", time() + 3600);

                echo "<h1> Super Global GET </h1>";
                var_dump($_GET);

                echo "<h1> Super Global POST </h1>";
                var_dump($_POST);

                echo "<h1> Super Global REQUEST </h1>";
                var_dump($_REQUEST);

                echo "<h1> Super Global COOKIE </h1>";
                var_dump($_COOKIE);

                echo "<h1> Super Global SESSION </h1>";
                var_dump($_SESSION);

                echo "<h1> Super Global ENV </h1>";
                var_dump($_ENV);
                // foreach (getenv() as $key => $value) {
                //    echo "<br>$key -> $value";
                // }

                echo "<h1> Super Global SERVER </h1>";
                var_dump($_SERVER);

                echo "<h1> Super Global GOLBALS </h1>";
                var_dump($GLOBALS);
            ?>
        </pre>
    </main>
    
</body>
</html>