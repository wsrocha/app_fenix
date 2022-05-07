<?php


include('./bd/sec/conapibd.php');


if (empty($_GET['ambiente']) || empty($_GET['email']) || empty($_GET['senha'])       ) {

// retornando 401 pois nao foi possível autenticar.
http_response_code(401);

//montando o json
$resultado = [ 'codigo_http' => '401', 'msg' => 'Credenciais insuficientes.', 'software' => 'Fenix Core', 'dev' => 'linkedin.com/in/linorrocha' ];

//exibindo o json lindão ai caramba que API maravilhosa né
header('Content-type: application/json');
echo json_encode( $resultado );

	exit();

}

$sql_ambiente = mysqli_real_escape_string($conexao, $_GET['ambiente']);
$sql_email = mysqli_real_escape_string($conexao, $_GET['email']);
$sql_senha = mysqli_real_escape_string($conexao, $_GET['senha']);

$agent = $_SERVER['HTTP_USER_AGENT'];


$logdataehora = date('Y-m-d h:i:s a', time());

$query_tenta_logar = "INSERT INTO system_logs (`log_usr_origin`, `log_message`, `log_type`, `log_terminal_id`, `log_created`,  `log_status`) VALUES ('0', 'o agente é {$sql_ambiente}', 'Login - Web', 0, '{$logdataehora}', 1);";


$log = mysqli_query($conexao, $query_tenta_logar);




$query = "select usrzap_id from tb_zapier_users where usrzap_email = '{$sql_email}' AND usrzap_pwd = md5('{$sql_senha}') AND usrzap_company = '{$sql_ambiente}' AND usrzap_deleted IS NULL";

$rodaauth = mysqli_query($conexao, $query);

$row = mysqli_num_rows($rodaauth);


echo "total de linhas é $row";





if ($row == 1) {
	//retornando 200 pois a autenticação encontrou um resultado válido.
	http_response_code(200);

//montando o json
$msgsucesso = [ 'codigo_http' => '200', 'msg' => 'Usuário autenticado com sucesso.', 'software' => 'Fenix Core', 'dev' => 'linkedin.com/in/linorrocha' ];

//exibindo o json lindão ai caramba que API maravilhosa né
header('Content-type: application/json');
echo json_encode( $msgsucesso );
			
	exit();


} else {

// retornando 401 pois nao foi possível autenticar.
http_response_code(401);

//montando o json
$msgerro = [ 'codigo_http' => '401', 'msg' => 'Credenciais inválidas.', 'software' => 'Fenix Core', 'dev' => 'linkedin.com/in/linorrocha' ];

//exibindo o json lindão ai caramba que API maravilhosa né
header('Content-type: application/json');
echo json_encode( $msgerro );

	exit();

		}


?>