<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>arquivo intdiv</title>
  <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
  <?php
  $n1 = $_GET["n1"];
  $n2 = $_GET["n2"];
  
  echo  "<p> o valor minimo é: " . min($n1, $n2)
  ?>
  <br>
    <a href="http://localhost/srv/http/eduardo lg/index.html">voltar</a>
</body>
</html>