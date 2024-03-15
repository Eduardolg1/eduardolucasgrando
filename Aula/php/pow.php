<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arquivo de PHP</title>
    <link rel="stylesheet" href="../css/estilo.css">


</head>
<body>

<?php
  
    $basepow = $_GET["basepow"];
    $expoente = $_GET["expoente"];


    echo "<p> O valor $basepow elevado à potência de $expoente é: " . pow($basepow, $expoente);
  

    ?>
    <br><br>
    
</body>
</html>