<?php
include('watcher_login.php');
include('bdcon.php');

?>


<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Logs - Totem Hypnobox</title>
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




<div style="margin: 30px; padding: 30px;">
<h3>Logs</h3>




<!-- simboraminhagente -->


<div class="row">
  <div class="col s12 m10 push-m1">

<table class="striped" class="responsive-table">
  
  <thead>
    
    <tr>
    <th>Log ID</th>
    <th>Mensagem</th>
    <th>Tipo</th>
    <th>Data de registro</th>
    </tr>

    <tbody>

      <?php 

        $sql_logs = "SELECT * FROM system_logs";
        $resultado = mysqli_query($conexao, $sql_logs);
        while ($dados = mysqli_fetch_array($resultado)):
       ?>

       <tr>
      <td><?php echo $dados['log_id']; ?></td>
      <td><?php echo $dados['log_message']; ?></td>
      <td><?php echo $dados['log_type']; ?></td>
      <td><?php echo $dados['log_created']; ?></td>
          

      </tr>
<?php endwhile; ?>

    </tbody>

  </thead>
</table>


<br>


  </div>
</div>




</div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            

<script>
  
M.AutoInit();

</script>









<div id="btvoltar">
  <a class="waves-effect btn-flat" href="configuracoes.php">Voltar</a>
</div>

    <footer>
        <p>© 2022 Hypnobox - Todos os direitos reservados. - AMBIENTE DE HOMOLOGAÇÃO</p>
    </footer>



</body>