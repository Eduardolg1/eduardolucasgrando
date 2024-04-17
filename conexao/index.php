<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    require_once("bd.php");
?>
    <h1>conexao com o banco !!!!</h1>
 
    <?php
   
        $sql = "select * from pessoa";
        $resultado = mysqli_query($conn, $sql);
       
        while ($dados = mysqli_fetch_assoc($resultado)) {
            echo"".$dados["nome"]." ".$dados["idade"]." ".$dados["cidade"]."<br>";
        }
    ?>
   

</body>
</html>
