<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>arquivo max</title>
  <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
  <?php
  $n3 = $_GET["n3"];
  $n4 = $_GET["n4"];
  
  echo  "<p> o valor maximo é: " . max($n3, $n4)
  ?>
  <br>
    <a href="http://localhost/srv/http/eduardo lg/index.html">voltar</a>
</body>
</html>