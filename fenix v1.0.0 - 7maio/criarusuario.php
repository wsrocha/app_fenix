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


<h3>Novo usuário</h3>




<div style="margin: 30px; padding: 30px;">
<form action="action_criarusuario.php" method="POST">



  <div class="input-field">
    

      <select name="perfil" id="perfil">
      <option value="NULL" disabled selected>Escolha o perfil</option>
      <option value="1">Administrador</option>
      <option value="2" disabled>Recepcionista</option>
      <option value="3" disabled>Incorporador</option>
    </select>
    <label for="perfil">Perfil</label>

  </div>



  <div class="input-field col s12">
    
    <input type="text" name="nome" id="nome">
    <label for="nome">Nome</label>

  </div>




  <div class="input-field col s12">
    
    <input type="email" name="email" id="email" class="validate">
    <label for="email">Email</label>

  </div>

    <div class="input-field col s12">
    
    <input type="password" name="senha" id="senha" class="validate">
    <label for="senha">Senha de acesso</label>
    <p style="font-size: 12px; color: gray;">Essa senha não substitui a senha do CRM.</p>

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




<div id="btvoltar">
  <a class="waves-effect btn-flat" href="usuarios.php">Voltar</a>
</div>
<br><br>
    <footer>
        <p>© 2022 Hypnobox - Todos os direitos reservados. - AMBIENTE DE HOMOLOGAÇÃO</p>
    </footer>



</body>