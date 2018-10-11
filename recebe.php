<?php

require_once("connection/conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$linha = $_POST['linha'];
$turno = $_POST['turno'];
$frequencia = $_POST['frequencia'];
$Radios = $_POST['Radios'];
$Radios1 = $_POST['Radios1'];
$reclame = $_POST['reclame'];


$sql = "INSERT INTO `usuarios` (`nome`, `email`, `linha`, `turno`, `frequencia`, `Radios`, `Radios1`, `reclame`) VALUES ('$nome', '$email', '$linha', '$turno', '$frequencia', '$Radios', '$Radios1', '$reclame')";
$result = mysqli_query($con, $sql);

if(!$result) {
	echo("Ocorreu um erro durante a inserção na tabela!");
} else {
	echo("Dados inseridos com sucesso! ");
	$last_id = mysqli_insert_id($con);
    echo "Você foi á " . $last_id . "ª pessoa que registrou uma reclamação!";

}

?>

<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<br><input type="submit" value="Home" onclick="location.href='index.html'">
</body>
</html>
