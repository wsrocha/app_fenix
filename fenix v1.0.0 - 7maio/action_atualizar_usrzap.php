<?php
include('watcher_login.php');
include('bdcon.php');

	$nome = mysqli_escape_string($conexao, $_POST['nome']);
	$email = mysqli_escape_string($conexao, $_POST['email']);
	$ambiente = mysqli_escape_string($conexao, $_POST['ambiente']);
	$senha = mysqli_escape_string($conexao, $_POST['senha']);
	$id = mysqli_escape_string($conexao, $_POST['id']);


$logdataehora = date('Y-m-d h:i:s a', time());
$datacriacao = date('Y-m-d h:i:s a', time());


$query_update_nome = "UPDATE tb_zapier_users SET usrzap_name = '{$nome}' WHERE usrzap_id = '{$id}'";

$query_update_email = "UPDATE tb_zapier_users SET usrzap_email= '{$email}' WHERE usrzap_id = '{$id}'";

$query_update_ambiente = "UPDATE tb_zapier_users SET usrzap_company = '{$ambiente}' WHERE usrzap_id = '{$id}'";

$query_update_senha = "UPDATE tb_zapier_users SET usrzap_pwd = md5('{$senha}') WHERE usrzap_id = '{$id}'";

$query_update_final = "UPDATE tb_zapier_users SET usrzap_updated = '{$logdataehora}' WHERE usrzap_id '{$id}'";


$alteranome = mysqli_query($conexao, $query_update_nome);

$alteraemail = mysqli_query($conexao, $query_update_email);

$alteraambiente = mysqli_query($conexao, $query_update_ambiente);

$alterasenha = mysqli_query($conexao, $query_update_senha);

$sobealteracao = mysqli_query($conexao, $query_update_final);


$log = "INSERT INTO system_logs (`log_usr_origin`, `log_message`, `log_type`, `log_terminal_id`, `log_created`,  `log_status`) VALUES ('0', 'Atualização de credencial para ID de usuário {$id} com os dados: {$nome}, {$email}, {$ambiente}, {$logdataehora}', 'Zapier - web', 0, '{$datacriacao}', 1);";


$salvalog = mysqli_query($conexao, $log);



$_SESSION['alertinha'] = "Credencial atualizada com sucesso.";
	header('Location: usuarios_zapier.php');



?>

