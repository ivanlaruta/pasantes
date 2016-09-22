<?php
@session_start();
  if ($_SESSION['permiso']==1 or $_SESSION['permiso']==3 )
  {
}
else
{
    header('Location: /pasantes/index.php');
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="/pasates/bootstrap-3.3.6-dist/css/bootstrap.css">
    <script src="/logpst/bootstrap-3.3.6-dist/jquery.js"></script>
    <script src="/logpst/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
    <script src="/logpst/bootstrap-3.3.6-dist/jquery.min.js"></script>
 
    
</head>
<body>
<!--  llamada a la cabecera -->
<?php 
    require_once $_SERVER["DOCUMENT_ROOT"]."/pasantes/barramenusr.php";
  ?>

<!-- Contenedor Pestaña ABM Activo -->
<div class="col-sm-offset-2 col-sm-8">
<div class="panel panel-primary">
  <div class="panel-heading">Pantalla A </div>
  <div class="panel-body">



</div>
  


	   </div>
    </div>
    </div>

</body>
</html>

