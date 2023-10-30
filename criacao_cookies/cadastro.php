
<?php



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio</title>
</head>
<body>
    <form name="cadastro" method="post" action="exibicao.php">
<table>
    <tr>
        <td><label>Nome:</label></td>
        <td><input type="text" name="nome"></td>
    </tr>
    <tr>
        <td><label>Data de Nascimento:</label></td>
        <td><input type="date" name="dataNascimento"></td>
    </tr>
    <tr>
        <td><label>Endereço:</label></td>
        <td><textarea name="endereco" rows="3" cols="22"></textarea></td>
    </tr>
    <tr>
        <td><label>Estado Cívil:</label></td>
        <td><select name="estadoCivil">
            <option value="C">Casado(a)</option>
            <option value="S">Solteiro(a)</option>
            <option value="V">Viuvo(a)</option>
        </select></td>
    </tr>
    <tr>
        <td><label>Sexo:</label></td>
        <td>
            Masculino<input type="radio" name="sexo" value="M">
            Feminino<input type="radio" name="sexo" value="F">
            Outros<input type="radio" name="sexo" value="O">

        </td>
    </tr>
    <tr>
        <td><label>Meio de Locomoção:</label></td>
        <td>
            <input type="checkbox" name="locomocao[]" value="M">Moto 
            <input type="checkbox" name="locomocao[]" value="C">Carro
            <input type="checkbox" name="locomocao[]" value="B">Bicicleta
        </td>
    </tr>
    <tr>
        <td><label>Senha:</label></td>
        <td><input type="password" name="senha" size="20"></td>
    </tr>
    <tr>
        <td><label>Confirmação de Senha:</label></td>
        <td><input type="password" name="confirmaSenha" size="20"></td>
    </tr>
    <tr > 
        <td colspan="2">
            <input type="submit" name="enviar" value="Enviar">
            <input type="reset" name="limpar" value="Limpar">
        </td>
    </tr>
</table>
</form>
</body>

</html>