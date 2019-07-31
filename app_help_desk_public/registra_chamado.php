<?php 
	
	session_start();

	//montagem do texto
	$_POST = str_replace('#', '-', $_POST);
	$texto = $_SESSION['id'] . '#' . implode('#', $_POST) . PHP_EOL;

	//abrindo arquivo
	$arquivo = fopen('../app_help_desk_private/arquivo.hd', 'a');
	//escrevendo arquivo
	fwrite($arquivo, $texto);
	//fechando arquivo
	fclose($arquivo);

	//echo $texto;
	header('Location: abrir_chamado.php');
?>