<!DOCTYPE html>
<html>
<head>
    <title>Caixa de Inserir Valor e Converter Base</title>
</head>
<body>

<form method="post" action="processar.php">
    <label for="valor">Insira o valor:</label>
    <input type="number" id="valor" name="valor">
    <label for="base_origem">Base de origem:</label>
    <select id="base_origem" name="base_origem">
        <option value="2">Binário</option>
        <option value="8">Octal</option>
        <option value="10" selected>Decimal</option>
        <option value="16">Hexadecimal</option>
    </select>
    <input type="submit" value="Converter">
</form>

</body>
</html>