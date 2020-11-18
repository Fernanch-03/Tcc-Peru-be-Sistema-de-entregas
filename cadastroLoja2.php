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
		 	<form action="cadastroLoja2.php" method="POST">
		 		<br>
		 		<br>
		 		<h3 style="text-align: center;">Cadastre-se Aqui</h3><br><br>
		 		<div class="inserts">
			 		
					Nome da Loja: <input type="text" name="loja" style="margin-right: 45px;"><br><br>
			 		CNPJ: <input type="number" name="cnpj"><br><br>
			 		CEP: <input type="number" name="cep"><br><br>
			 		

			 		<input type="submit" name="btn" class="btn btn-outline-info btn-md"  value="Cadastrar"><br><br>
			 	</div>
		 	</form>
		</div>
	</div>
	<?php
		if(isset($_POST['btn'])){
			$NomeLoja = $_POST['loja'];
			$cnpj = $_POST['cnpj'];
			$cep = $_POST['cep'];

			$email = $_SESSION['EmailDono'];
			$email = SelecionarEmailDono($email);
			while($e = $email->fetch_array()){

				 CadastrarLoja($NomeLoja, $cnpj, $cep, $e['id']);

			}
		}
	?>


</body>
</html>
				