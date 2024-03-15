<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arquivo de PHP</title>
</head>

<body>

<?php

$angulo = $_GET ["angulo"];

echo "<p> o cosseno de $angulo é: ". cos($angulo);

?>
    
</body>
</html>