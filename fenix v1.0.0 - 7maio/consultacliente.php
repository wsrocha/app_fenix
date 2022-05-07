<?php


include('watcher_login.php');

include('bdcon.php');



$form_email = $_POST['clienteemail'];



if (empty('$form_email')) {

	header('Location: painel.php');

	exit();




echo "form_email";



?>