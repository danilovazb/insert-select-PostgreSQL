<!DOCTYPE html>
<html lang="en">
  <head>

<?php
include('class/conect.php'); 
?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Tabela</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<br><br><br>
    <div class="container">

      <div class="starter-template">
        <h3>Insert</h3>
	<form class="navbar-form navbar-left" action="class/insert.php" method="post">
	  <div class="form-group">
	    <input name="nome" type="text" class="form-control" placeholder="NOME">
	    <input name="email" type="text" class="form-control" placeholder="EMAIL">
	  </div>
	  <button type="submit" class="btn btn-default">Insert</button>
	</form>

      </div>

    </div><!-- /.container -->

    <div class="container">

      <div class="starter-template">
        <h3>Delete</h3>
        <form class="navbar-form navbar-left" action="class/delete.php" method="post">
          <div class="form-group">
            <input name="id" type="text" class="form-control" placeholder="ID">
          </div>
          <button type="submit" class="btn btn-default">Delete</button>
        </form>

      </div>

    </div><!-- /.container -->


<div class="bs-example" data-example-id="striped-table">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>NOME</th>
          <th>EMAIL</th>
        </tr>
      </thead>
      <tbody>
<?php
$result=pg_query($conexao, "SELECT * FROM cliente;");
  if  (!$result) {
   echo "Não foi possível executar a consulta";
  }
  else
   {
    /* Retonar um array associativo correspondente a cada linha da tabela */
     while($consulta = pg_fetch_assoc($result))
     {     
       echo "<tr>";
       echo "<th scope='row'>" . $consulta['id'] . "</th>";
       echo "<td>".$consulta['nome']."</td>";
       echo "<td>".$consulta['email']."</td>";
       echo "</tr>";
     }

     pg_close($conexao);
   } 

?>
</tbody>
    </table>
  </div><!-- /example -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

