<!DOCTYPE html>
<html>
<body>

<form method="post">

Nome:
<input type="text" name="nome"><br><br>

Email:
<input type="email" name="email"><br><br>

Telefone:
<input type="text" name="telefone"><br><br>

Data de nascimento:
<input type="date" name="data"><br><br>

Cidade:
<input type="text" name="cidade"><br><br>

Estado:
<input type="text" name="estado"><br><br>

Sexo:
<select name="sexo">
    <option>Masculino</option>
    <option>Feminino</option>
</select>

<br><br>

Curso:
<input type="text" name="curso"><br><br>

Observações:<br>
<textarea name="obs"></textarea>

<br><br>

<input type="submit" value="Cadastrar">

</form>

<?php

if($_POST){

echo "<h2>Cartão de Cadastro</h2>";

echo "Nome: ".$_POST["nome"]."<br>";
echo "Email: ".$_POST["email"]."<br>";
echo "Telefone: ".$_POST["telefone"]."<br>";
echo "Nascimento: ".$_POST["data"]."<br>";
echo "Cidade: ".$_POST["cidade"]."<br>";
echo "Estado: ".$_POST["estado"]."<br>";
echo "Sexo: ".$_POST["sexo"]."<br>";
echo "Curso: ".$_POST["curso"]."<br>";
echo "Observações: ".$_POST["obs"]."<br>";

}

?>

</body>
</html>