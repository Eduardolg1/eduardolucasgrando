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
  
  $numsqrt = $_GET["numsqrt"];

  echo "<p>A raiz quadrada $numsqrt é: " .sqrt($numsqrt);



  ?>
    
</body>
</html>