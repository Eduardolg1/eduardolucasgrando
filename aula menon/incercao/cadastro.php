<?php
if(isset($_POST['submit']))
{
    include_once('conexao.php');

    $nome =$_POST['nome'];
    $email =$_POST['email'];
    $telefone =$_POST['telefone'];
    $data_nac =$_POST['data_nascimento'];
    $cidade =$_POST['cidade'];




$result = mysqli_query($con, "INSERT INTO cliente(nome, email, telefone, datan, cidade)
 values ('$nome','$email','$telefone','$data_nac','$cidade')");
echo("cadastrado!");
}
?>