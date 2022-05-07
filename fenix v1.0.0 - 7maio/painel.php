<?php

include('watcher_login.php');

?>


<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Painel - Fenix</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link href="./recursos/css/hb_stylespanel.css" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" type="image/ico" href="./recursos/hb_imagens/favicon.ico">


</head>

<body>



  <nav>
    <div class="nav-wrapper #424242 grey darken-3">
      <a href="#!" class="brand-logo"><div id="logopainel"><img src="./recursos/hb_imagens/logowhite.png" width="100"></div></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="efetuar_logout.php"><i class="material-icons right">power_settings_new</i>Finalizar Sessão</a></li>
      </ul>
    </div>
  </nav>

<br><br>

    <div id="opt-menu">

            <div class="opt-item">
            <a href="#verificarcliente" class="modal-trigger"><i class="material-icons">add_location</i> <br>
            <p>Novo cliente</p>
            </a></div>


            <div class="opt-item">
            <a href="#estoucientezapier" class="modal-trigger"><i class="material-icons">share</i>
            <p>Integrações</p></a>
            </div>

            <div class="opt-item">
            <a href="relatorios.php"><i class="material-icons">insert_chart</i>
            <p>Relatórios</p></a>
            </div>



            <div class="opt-item">
            <a href="configuracoes.php"><i class="material-icons">settings_applications</i>
            <p>Configurações</p></a>
            </div>



    </div>






  <div id="verificarcliente" class="modal">
    <div class="modal-content">
      <h4>Novo Cliente</h4>
      <p>Escolha como deseja registrar o cliente</p>

            <div id="mdmenu">
            <div class="opt-modal">
            <a href="#clientetelefone" class="modal-trigger"><i class="material-icons">contact_phone</i> <br>
            <p>Visita (Check-in)</p>
            </a></div>



            <div class="opt-modal">
            <a href="#verificarcliente" class="modal-trigger"><i class="material-icons">contact_mail</i> <br>
            <p>Ligação/WhatsApp</p>
            </a></div>

        </div>

    </div>
    <div class="modal-footer">
      <a href="#" class="modal-close waves-effect waves-green btn-flat">Voltar</a>
    </div>
  </div>

  <div id="estoucientezapier" class="modal">
    <div class="modal-content">
      <h4>Integrações</h4>
      <p>Aqui você controla os usuários que podem utilizar o app <a href="https://zapier.com/apps/hypnobox-crm/integrations">Hypnobox CRM no Zapier.</a></p>


            <div id="mdmenu">
        <p><b>Forneça acesso somente a pessoas em que o decisor da empresa formalizou via suporte@hypnobox.com.br a liberação do uso. Em caso de dúvidas, procure o gerente de contas responsável.</b></p>


        </div>

            <div>
                <a href="usuarios_zapier.php">
                <button class="btn waves-effect waves-light light-green lighten-1" name="action">Estou ciente
                <i class="material-icons right">check</i>
                </button></a>
            </div>
    </div>
    <div class="modal-footer">
      <a href="#" class="modal-close waves-effect waves-green btn-flat">Voltar</a>
    </div>
  </div>


  <div id="clientetelefone" class="modal">
    <div class="modal-content">
      <h4>Registrar Visita</h4>
      <p>Forneça o e-mail do cliente para continuar.</p>

            <div>
                <form action="consultacliente.php" method="POST">
            <div class="input-field col s6">
          <i class="material-icons prefix">mail</i>
          <input id="icon_telephone" type="email" class="validate" name="clienteemail">
          <label for="icon_telephone">E-mail (obrigatório)</label>
        </div>
            <p id="dica">O sistema buscará o cadastro do cliente com o e-mail fornecido.</p>
<button class="waves-effect waves-light btn-small #9ccc65 light-green lighten-1 " type="submit"><i class="material-icons left">contact_phone</i>Procurar</button>            </form></div>
               </div>
    <div class="modal-footer">
      <a href="#" class="modal-close waves-effect waves-green btn-flat">Voltar</a>
    </div>
  </div>


<script type="text/javascript">
    
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems);
  });



</script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            

<script>
  
M.AutoInit();

</script>



    <footer>
        <p>© 2022 - Software protegido | <a id="btn_forgot" href="https://linkedin.com/in/linorrocha">Contato com o desenvolvedor</a></p>
    </footer>



</body>