<?php
 include 'conexao.php'; 
?>

<meta charset="utf-8">
<!DOCTYPE html>
<html>
<head>
	<title>Sistema de entregas</title>
</head>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

<body>
	<div class="fundo" style="width: 24%; margin-right: 38%; margin-left: 38%; margin-top: 160px;" >
		 <div class="login">
		 	<form action="login.php" method="POST">
		 		<br>
		 		<br>
		 		<h3 style="text-align: center;">Inicie a sua sessão</h3><br><br>
		 		<div class="inserts" style=";">
			 		Email: <input type="email" name="email"><br><br>
			 		Senha: <input type="text" name="senha"><br><br>
			 		<button name="btn" class="btn btn-outline-info btn-md" style="margin-left: 5%">Entrar</button><br><br>
			 	</div>
		 	</form>
		 	<p style="text-align: center;">Não tem uma conta? Cadastre-se <a href="cadastrar.php">aqui</a></p><br><br>
		 </div>
	</div>

	<?php
	var_dump($_SESSION['EmailDono']);
	var_dump($_SESSION['TipoUsuario']);

	?>
</body>
</html>