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
		 	<form action="cadastroComum.php" method="POST">
		 		<br>
		 		<br>
		 		<h3 style="text-align: center;">Cadastre-se Aqui</h3><br><br>
		 		<div class="inserts">
			 		
					Nome: <input type="text" name="nome" required=""><br><br>
			 		Email: <input type="email" name="email" required=""><br><br>
			 		Senha: <input type="text" name="senha" required=""><br><br>
			 		Telefone: <input type="number" name="telefone" style="margin-right: 15px;" required=""><br><br>

			 		<input type="submit" name="btn" class="btn btn-outline-info btn-md"  value="Próximo"><br><br>
			 	</div>
		 	</form>
		</div>
	</div>
	<?php
		if (isset($_POST["btn"])) {
			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$senha = $_POST['senha'];
			$telefone = $_POST['telefone'];

			CadastrarUsuario($nome,$email,$senha,$telefone);

			if ($nome == $_POST['nome']) {
				header('location: login.php');

			}

			}

	?>

</body>
</html>
				