<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Sistema Controle de Patrimônio</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">


  </head>

  <body role="document">
    <?php
      include_once("menu_admin.php");
      echo "</br>";
     ?>
    <div class="container">
      <div class="page-header">
        <h1>Cadastrar Gerente</h1>
      </div>
      <div class="row">
      <div class="col-md-12">
        <form class="form-horizontal" method="post" action="processa/proc_cad_gerente.php">
          <div class="form-group">
            <label  class="col-sm-2 control-label">Nome</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nome" placeholder="Nome Completo do Gerente">
            </div>
          </div>

          <div class="form-group">
            <label  class="col-sm-2 control-label">CPF</label>
            <div class="col-sm-10">
              <input type="" class="form-control" name="cpf" placeholder="CPF">
            </div>
          </div>

          <div class="form-group">
            <label  class="col-sm-2 control-label">Sexo</label>
            <div class="col-sm-10">
              <input type="" class="form-control" name="sexo" placeholder="sexo">
            </div>
          </div>

          <div class="form-group">
            <label  class="col-sm-2 control-label">Data Nascimento</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" name="data_nascimento" placeholder="data_nascimento">
            </div>
          </div>

          <div class="form-group">
            <label  class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="email" placeholder="email">
            </div>
          </div>

          <div class="form-group">
            <label name="" class="col-sm-2 control-label">Id Cargo</label>
            <div class="col-sm-10">
              <input type="" class="form-control" name="id_cargo" placeholder="Id do Cargo">
            </div>
          </div>


          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Cadastrar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="assets/js/docs.min.js"></script>

  </body>
</html>
