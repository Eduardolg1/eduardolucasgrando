<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arquivo de PHP</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

<?php
  
    $numtan = $_GET["numtan"];

    echo "<p> A tangente de $numtan é: " .tan($numtan);
  


    ?>
    
</body>
</html>