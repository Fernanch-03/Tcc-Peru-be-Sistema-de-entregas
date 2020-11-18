<?php
session_start();

$servidor = "localhost";
$usuario = "root";
$senha = "usbw";
$banco = "loja";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if(!$conexao){
    echo "Erro de conexão ao banco: ".$conexao->error;
}

function CadastrarUsuario($nome,$email,$senha,$telefone){
	if($_SESSION['TipoUsuario'] == "1"){

		$sql = 'INSERT INTO dono values(null,"'.$nome.'","'.$email.'","'.$senha.'",'.$telefone.');';
		$res = $GLOBALS['conexao']->query($sql);
    	return $res;

	}if($_SESSION['TipoUsuario']  == "2"){
		
		$sql2 = 'INSERT INTO cliente values(null,"'.$nome.'","'.$email.'","'.$senha.'",'.$telefone.');';
		$res2 = $GLOBALS['conexao']->query($sql2);
    	return $res2;

	}else{
		alert("erro");
	}
}

function SelecionarEmailDono($email){
	$sql = 'SELECT * FROM dono WHERE email = "'.$email.'";';
	$res = $GLOBALS['conexao']->query($sql);
	return $res;
	echo $res;
}

function CadastrarLoja($NomeLoja, $cnpj, $cep, $dono){
	$sql = 'INSERT INTO empresa values(null,'.$dono.',"'.$NomeLoja.'",'.$cnpj.','.$cep.');';
	$res = $GLOBALS['conexao']->query($sql);
    return $res;
}
