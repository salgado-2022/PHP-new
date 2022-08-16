<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola</title>

    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


</head>
<body>
    
  <div class="container-fluid">
		<h3 class="text-center py-3">LOGO</h3>
	</div>

<!--Contenido-->

    <div class="container-fluid">
		<div class="container">
			<ul class="nav nav-justified py-2 nav-pills">
                <?php if (isset($_GET["pagina"])):?>
                    <?php if  ($_GET["pagina"]=="registro"):?>
				<li class="nav-item">
					<a class="nav-link active" href="index.php?pagina=registro">Registro</a>
				</li>
                <?php else: ?>
                    <li class="nav-item">
					<a class="nav-link" href="index.php?pagina=registro">Registro</a>
				</li>
                <?php endif ?>


                <?php if  ($_GET["pagina"]=="ingreso"):?>
                    <li class="nav-item">
					<a class="nav-link active" href="index.php?pagina=ingreso">Ingreso</a>
				</li>
                <?php else: ?>
                    <li class="nav-item">
					<a class="nav-link " href="index.php?pagina=ingreso">Ingreso</a>
				</li>
                <?php endif ?>


                <?php if  ($_GET["pagina"]=="inicio"):?>
                    <li class="nav-item">
					<a class="nav-link active" href="index.php?pagina=inicio">Inicio</a>
				</li>
                <?php else: ?>
                    <li class="nav-item">
					<a class="nav-link " href="index.php?pagina=inicio">Inicio</a>
				</li>
                <?php endif ?>

                <?php if  ($_GET["pagina"]=="salir"):?>
                    <li class="nav-item">
					<a class="nav-link active" href="index.php?pagina=salir">Salir</a>
				</li>
                <?php else: ?>
                    <li class="nav-item">
					<a class="nav-link " href="index.php?pagina=salir">Salir</a>
				</li>
                <?php endif ?>
                <?php endif ?>
                
			</ul>
		</div>
	</div>
    <div class="container-fluid">
        <div class="container py-5">
<?php

if (isset($_GET["pagina"])){
    if ($_GET["pagina"]=="registro"||
    $_GET["pagina"]=="ingreso"||
    $_GET["pagina"]=="inicio"||
    $_GET["pagina"]=="salir") {
       include "paginas/".$_GET["pagina"].".php";
    }
    else{
		include "paginas/error404.php";

    }
}else{

    echo('   <div class="container-fluid">
    <div class="container">
        <ul class="nav nav-justified py-2 nav-pills">
            <li class="nav-item">
                <a class="nav-link active" href="index.php?pagina=registro">Registro</a>
                <li class="nav-item">
                <a class="nav-link " href="index.php?pagina=ingreso">Ingreso</a>
            </li>           
            
                <li class="nav-item">
                <a class="nav-link " href="index.php?pagina=inicio">Inicio</a>
            </li>  
                <li class="nav-item">
                <a class="nav-link " href="index.php?pagina=salir">Salir</a>
            </li>
   
        </ul>
    </div>
</div>
<div class="container-fluid">
    <div class="container py-5">');
}
?>

        </div> 
    </div>
<!-- jQuery -->
<script src="../../modelo/AdminLTE-3.0.5/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../modelo/AdminLTE-3.0.5/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../modelo/AdminLTE-3.0.5/dist/js/adminlte.min.js"></script>
<!-- Importando scrpt para acciones personalizadas -->
<script src="../../modelo/AdminLTE-3.0.5/lib/scripts/myScript.js"></script>
  
<script src="js/myscript.js"></script>  
    
</body>
</html>