<?php
include('watcher_login.php');
include('bdcon.php');

	$nome = mysqli_escape_string($conexao, $_POST['nome']);
	$email = mysqli_escape_string($conexao, $_POST['email']);
	$perfil = mysqli_escape_string($conexao, $_POST['perfil']);
	$senha = mysqli_escape_string($conexao, $_POST['senha']);




$logdataehora = date('Y-m-d h:i:s a', time());
$datacriacao = date('Y-m-d h:i:s a', time());





$query_tenta_logar = "INSERT INTO system_logs (`log_usr_origin`, `log_message`, `log_type`, `log_terminal_id`, `log_created`,  `log_status`) VALUES ('0', 'Usuário {$email} criado via web.', 'Usuário - web', 0, '{$logdataehora}', 1);";

$query_criar = "INSERT INTO tb_users (user_name, user_email, user_password, user_type, user_created) VALUES ('{$nome}', '{$email}', md5('{$senha}'), '{$perfil}', '{$datacriacao}')";



$criando = mysqli_query($conexao, $query_criar);
$logando = mysqli_query($conexao, $query_tenta_logar);


$_SESSION['alertinha'] = "Usuário criado com sucesso!";
	header('Location: usuarios.php');



?>

