<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>FARMAZ - Comprar Medicamento</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
  <title>FARMAZ - Tela Principal</title>
  <link rel="stylesheet" type="text/css" href="main.css">

</head>

<body>

  <section class="navigation">
    <div class="nav-container">
      <div class="brand"><a href="#">FARMAZ<a/></div>
      <nav>
        <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
        <ul class="nav-list">
          <li><a href="index.html">Tela Inicial</a></li>
          <li class = "dropdown"><a href="#!">Serviços</a>
              <ul class="nav-dropdown">
                <li><a href="medicos.php">Consulta Medica</a></li>
                <li><a href="comprar_medicamento.php">Medicamentos</a></li>
                
              </ul>
            </li>
            <li><a href="#!">Fale Conosco</a></li>
            <li><a href="#!">Ajuda</a></li>
        </ul>
      </nav>
    </div>
  </section>
  <h1></br></h1>
   
<?PHP
	require_once ("../DAO/databse.php");
	$conn = new DatabaseUtility;
	$conn->connect();
	echo "<center>";
	echo "<h1>Compra Online </h1>";
	$conn->search_med();
	echo "<form action='../control/confirmar.php'>";	
    echo "<input type='submit' value='Confirmar Compra' />";
	echo "</form>";
	echo "</center>";
?>

</body>




<footer>



	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>

    <script  src="js/index.js"></script> 


</footer>