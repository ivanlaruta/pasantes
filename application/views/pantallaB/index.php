<?php
@session_start();
 
  if ($_SESSION['permiso']==2 or $_SESSION['permiso']==3 )
  {
}
else
{
    header('Location: ../pasantes/index.php');
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../pasantes/bootstrap-3.3.6-dist/css/bootstrap.css">
    <script src="../pasantes/bootstrap-3.3.6-dist/jquery.js"></script>
    <script src="../pasantes/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
    <script type="text/javascript">
    	$(document).ready(function() {

    	})
     
    </script>
</head>
<body>
<!--  llamada a la cabecera -->
 	<?php 
    require_once ("../../../pasantes/barramenusr.php");
  ?>

<!-- Contenedor   -->
<div class="col-sm-offset-2 col-sm-8">
  <div class="panel panel-primary">
   <div class="panel-heading">Pantalla B</div>
    <div class="panel-body">





	   </div>
    </div>
     </div>
    </div>
</body>
</html>

