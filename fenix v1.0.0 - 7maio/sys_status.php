<?php
include('watcher_login.php');

?>


<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Configurações - Totem Hypnobox</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link href="./recursos/css/hb_stylesconfig.css" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" type="image/ico" href="./recursos/hb_imagens/favicon.ico">


</head>

<body>



  <nav>
    <div class="nav-wrapper #424242 grey darken-3">
      <a href="#!" class="brand-logo"><img src="./recursos/hb_imagens/logowhite.png" width="100"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="efetuar_logout.php"><i class="material-icons right">power_settings_new</i>Finalizar Sessão</a></li>
      </ul>
    </div>
  </nav>

<br><br>


<!-- CHAMAR /api_system_status.php PARA CONSULTAR STATUS DO SISTEMA -->
<div style="text-align: center;">
      <i class="material-icons">cloud_done</i>
<p>Todos os serviços estão funcionando corretamente.</p>
</div>


<div id="btvoltar">
  <a class="waves-effect btn-flat" href="painel.php">Voltar</a>
</div>

    <footer>
        <p>© 2022 Hypnobox - Todos os direitos reservados. - AMBIENTE DE HOMOLOGAÇÃO</p>
    </footer>



</body>