<?php 
require_once 'conf/conn.php';
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Puc Minas Virtual</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"
    rel="stylesheet" type="text/css">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <style>
    .visible-xs, .visible-sm, .visible-md, .visible-lg{
      display: block!important;
    }
    </style>
  </head>
  <body class="">
    <div class="navbar navbar-inverse navbar-static-top">
      <style>
        .body{padding-top:70px}
      </style>
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Yearbook PUC Minas Virtual</a>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active">
              <a href="index.php">Home</a>
            </li>
            <li class="">
              <a href="#">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container">
    <?php 
    $pdo = conn_mysql();
    try {
      $sql = 'SELECT * FROM aluno;';
      $buscar = $pdo->query($sql);
      if ($buscar->rowCount()> 0) {
        $cont = 1;
        foreach ($buscar as $aluno){
          if ($cont == 1) {
            echo "<div class='row'>";
          }
          ?>
         <div class="col-md-4">
          <img src="img/<?php echo $aluno['foto'] ?>" class="img-responsive visible-lg visible-sm">
          <h2><?php echo $aluno['Nome'] ?></h2>
          <a class="btn btn-primary" href="aluno.php?id=<?php echo $aluno['id']?>">+ Detalhes</a>
        </div>
          <?php
          if ($cont == 3) {
            echo "</div>";
          }
        $cont++; if($cont == 4){$cont = 1;}
        }
      }
    } catch (PDOException $e) {
      $e->gerMessage();
    }
     ?>
     </div>
  </body>

</html>
