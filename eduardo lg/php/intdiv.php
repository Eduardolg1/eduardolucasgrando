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
  $num = $_GET["num"];
  $num1 = $_GET["num1"];
  echo "<p> o valor da divisão de inteiros é: " . intdiv($num, $num1);
  ?>
  <br>
    <a href="http://localhost/srv/http/eduardo lg/index.html">voltar</a>
</body>
</html>