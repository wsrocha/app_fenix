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


<h3>Nova Credencial - Zapier</h3>




<div style="margin: 30px; padding: 30px;">
<form action="action_criar_usrzap.php" method="POST">



  <div class="input-field">
    

      <select name="perfil" id="perfil">
      <option value="NULL" disabled selected>Escolha a plataforma</option>
      <option value="1">Zapier</option>
      <option value="4" disabled>Automate</option>
      <option value="6" disabled>IFTTT - If this then that</option>
      <option value="2" disabled>Integrately</option>
      <option value="3" disabled>Integromat</option>
      <option value="5" disabled>Microsoft Flow</option>
    </select>
    <label for="perfil">Perfil</label>

  </div>



  <div class="input-field col s12">
    
    <input type="text" name="nome" id="nome">
    <label for="nome">Nome do titular da credencial</label>

  </div>




  <div class="input-field col s12">
    
    <input type="email" name="email" id="email" class="validate">
    <label for="email">E-mail de autenticação</label>

  </div>


  <div class="input-field col s12">
    
    <input type="text" name="ambiente" id="ambiente">
    <label for="ambiente">Ambiente (URL completa: demo.hypnobox.com.br)</label>

  </div>



    <div class="input-field col s12">
    
    <input type="password" name="senha" id="senha" class="validate"  minlength="8" maxlength="10" inputmode="numeric">
    <label for="senha">Senha de autenticação</label>
    <p style="font-size: 12px; color: gray;">Essa senha não substitui a senha do CRM.</p>

  </div>

      <div class="input-field col s12">
    
    <input type="password" name="senha" id="checksenha" class="validate" minlength="8" maxlength="10">
    <label for="senha">Confirmar Senha</label>

  </div>


<br><br>



<button type="submit"  class="waves-effect waves-light btn #9ccc65 light-green lighten-1">CRIAR USUÁRIO</button>




</form>






</div>




<script type="text/javascript">
  
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems);
});

</script>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            

<script>
  
M.AutoInit();

</script>



<div class="btvoltar">
  <a class="waves-effect btn-flat" href="painel.php">Voltar</a>
</div>







<script type="text/javascript">
  

  var pwd = document.getElementById("senha")
  , checkpwd = document.getElementById("checksenha");

function validasenha(){
  if(pwd.value != checkpwd.value) {
    checkpwd.setCustomValidity("Senhas digitadas são diferentes.");
  } else {
    checkpwd.setCustomValidity('');
  }
}

pwd.onchange = validasenha;
checkpwd.onkeyup = validasenha;


</script>





</body>