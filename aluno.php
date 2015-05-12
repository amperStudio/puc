<?php 
require_once 'conf/conn.php';
$id = $_GET['id'];
 ?>

<!DOCTYPE html>
<html>
  
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"
    rel="stylesheet" type="text/css">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
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
      <div class="row">
        <?php 
        $pdo = conn_mysql();
        try {
          
          $sql = 'SELECT * FROM aluno WHERE id = '. $id;
          $buscar = $pdo->query($sql);
            foreach ($buscar as $aluno){
            echo  "<div class='col-md-6'>";
            echo  "<img src='img/".$aluno['foto']."' class='img-responsive'>";
            echo  "</div>";
            echo "<div class='col-md-6'>";
            echo "<h1>".$aluno['Nome']."</h1>";
            echo "<hr>";
            echo "<h3>Cidade: ".$aluno['Cidade']."</h3>";
            echo "<h3>Estado: ".$aluno['ES']."</h3>";
            echo "<p>".$aluno['Descricao']."</p>";
            echo "</div>";
           }
          
        } catch (Exception $e) {
          
        }
         ?>

      </div>
    </div>
  </body>

</html>