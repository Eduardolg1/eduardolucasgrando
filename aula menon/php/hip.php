<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arquivo php</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <?php
        $cat1 = $_GET["cat1"];
        $cat2 = $_GET["cat2"];
        echo "<p> o valor da hipotenusa é: " . hypot($cat1, $cat2);
    ?>
    <br>
    <a href="http://localhost/srv/http/eduardo lg/index.html">voltar</a>
</body>
</html>