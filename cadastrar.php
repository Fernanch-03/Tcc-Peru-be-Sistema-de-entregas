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
		 	<form action="cadastrar.php" method="POST">
		 		<br>
		 		<br>
		 		<h3 style="text-align: center;">Cadastre-se Aqui</h3><br><br>
		 		<div class="inserts" >
			 		Tipo de Usuário: 
			 		<select name="TipoUsuario">
			 			<option value="1">Dono de loja</option>
			 			<option value="2">Usuário Comum</option>
			 		</select><br><br>

			 		<input type="submit" name="btn" class="btn btn-outline-info btn-md"  value="Próximo"><br><br>
			 	</div>
		 	</form>
		</div>
	</div>
	<?php
		if (isset($_POST["btn"])) {
			$usuario = $_POST['TipoUsuario'];
			
			$_SESSION['TipoUsuario'] = $usuario;

			if($_SESSION['TipoUsuario'] == "1"){
				header('Location: cadastroLoja.php');
			}if($_SESSION['TipoUsuario']  == "2"){
				header('Location: cadastroComum.php');
			}
			
		}
			
			
			
		
	?>

</body>
</html>