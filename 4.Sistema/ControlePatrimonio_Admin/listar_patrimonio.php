<?php
  include 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
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

  <body>
    </br></br>
    <?php
      include 'menu_admin.php';

      $sql = "SELECT * FROM patrimonio ORDER BY 'id' ";
      $resultado = $conn->query($sql);
      $linhas = mysqli_num_rows($resultado);

      ?>

    <div class="container theme-showcase" role="main">
    </br>
      <div class="page-header">
        <h1>Lista de Patrimônios</h1>
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Data de Compra</th>
                <th>Preço</th>
                <th>Descrição</th>
                <th>Situação</th>
                <th>Departamento</th>
                <th>Gerente</th>
              </tr>
            </thead>
            <tbody>
              <?php
              if (mysqli_num_rows($resultado) > 0) {
                  while ($linhas = mysqli_fetch_assoc($resultado)){
                    echo "<tr>";
                    echo "<td>".$linhas['id']."</td>";
                    echo "<td>".$linhas['nome']."</td>";
                    echo "<td>".$linhas['data_de_compra']."</td>";
                    echo "<td>".$linhas['preco']."</td>";
                    echo "<td>".$linhas['descricao']."</td>";
                    echo "<td>".$linhas['id_situacao']."</td>";
                    echo "<td>".$linhas['id_departamento']."</td>";
                    echo "<td>".$linhas['id_gerente']."</td>";
                    echo "<td><a href='processa/proc_apagar_patrimonio.php?id=".$linhas['id']."'><button type='button' class='btn btn-sm btn-danger'>Apagar</button></a></td>";
                    echo "</tr>";
                  }
                  } else {
                      echo "0 Resultados";
                      echo "</br>";
                  }
                    mysqli_close($conn);
                  ?>



            </tbody>
          </table>
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
