<?php

session_start();

include('bdcon.php');

if (empty($_POST['usr_email']) || empty($_POST['usr_password'])) {

	header('Location: index.php');

	exit();

}


$usr_email = mysqli_real_escape_string($conexao, $_POST['usr_email']);
$usr_password = mysqli_real_escape_string($conexao, $_POST['usr_password']);





$logdataehora = date('Y-m-d h:i:s a', time());




$query_tenta_logar = "INSERT INTO system_logs (`log_usr_origin`, `log_message`, `log_type`, `log_terminal_id`, `log_created`,  `log_status`) VALUES ('0', 'Tentando conectar com usuário {$usr_email}...', 'Login - Web', 0, '{$logdataehora}', 1);";

$query = "select user_id, user_name from tb_users where user_email = '{$usr_email}' AND user_password = md5('{$usr_password}')";

$result = mysqli_query($conexao, $query);

$log = mysqli_query($conexao, $query_tenta_logar);

$row = mysqli_num_rows($result);

if ($row == 1) {

	$_SESSION['user_email'] = $usr_email;
	header('Location: painel.php');

	$query_login_sucesso = "INSERT INTO system_logs (`log_usr_origin`, `log_message`, `log_type`, `log_terminal_id`, `log_created`,  `log_status`) VALUES ('0', '{$usr_email} entrou no sistema', 'Login - Web', 0,  '{$logdataehora}', 1);";

	$logsucesso = mysqli_query($conexao, $query_login_sucesso);


	exit();

} else {
	$_SESSION['nosession'] = true;
	header('Location: index.php');


	$query_login_erro = "INSERT INTO system_logs (`log_usr_origin`, `log_message`, `log_type`, `log_terminal_id`, `log_created`,  `log_status`) VALUES ('0', 'Tentativa de login inválida para {$usr_email} - usuário ou senha incorretos.', 'Login - Web', 0,  '{$logdataehora}', 1);";

	$logerro = mysqli_query($conexao, $query_login_erro);

	exit ();

}

exit;

