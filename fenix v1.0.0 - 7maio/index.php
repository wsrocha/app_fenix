<?php
session_start();

?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Fenix para Hypnobox</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link href="./recursos/css/hb_styles.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" type="image/ico" href="./recursos/hb_imagens/favicon.ico">


</head>

<body>

	<div id="login_components">

		<div id="header">
			<br><br>
			<img src="./recursos/hb_imagens/logo-hypnobox.png" width="200">
			<br><br>
			<!-- 
			<p id="login_header" class="login_center">Iniciar Sessão</p>
			-->
		</div>

		<div id="container_form">
			<form action="efetuar_login.php" method="POST">
				<div class="input-field">
				<input id=email class="validate" type="email" name="usr_email">
          		<label for="email">E-mail do usuário</label>
       			</div>

				<div class="input-field">
				<input id=password class="validate" type="password" name="usr_password">
          		<label for="password">Senha de acesso</label>
       			</div>

				<button type="submit" class="waves-effect waves-light btn" id="botoes">Iniciar Sessão   
					<i class="material-icons right">verified_user</i></button>


			</form>
<br>
		<a href="#recovery_password.php" id="btn_forgot">Esqueci minha senha</a>
		</div>
	</div>
	<footer>
		<p>© 2022 - Software protegido | <a id="btn_forgot" href="https://linkedin.com/in/linorrocha">Contato com o desenvolvedor</a></p>
	</footer>


<?php

if(isset($_SESSION['nosession'])):
	?>
<div class="notificacao">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


<script>
$("document").ready( function() {
  M.toast({html: '<i class="material-icons">assignment_ind</i>. E-mail e/ou senha inválidos.'}, 4000);
});
		</script>

</div>

<?php

endif;
unset($_SESSION['nosession']);

?>

</body>

</html>