
<?php @session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" href="/pasantes/bootstrap-3.3.6-dist/css/bootstrap.css">
    <script src="/pasantes/bootstrap-3.3.6-dist/jquery.js"></script>
    <script src="/pasantes/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
    <script type="text/javascript">

    $(document).ready(function() {

      // cerrar_sesiones();
      $('#cerrar').click(cerrar_sesiones);
    }) 

     function inicio_sesion()
    {
                location.reload();
          setTimeout("$('.ocultar').hide();", 1000);
          var a =$('#inputCi').val();
          var b=$('#inputPassword').val();
          var datos = "opcion=" + encodeURIComponent('inicio_sesion')+"&inputCi=" + encodeURIComponent(a)+"&inputPassword=" + encodeURIComponent(b);
          console.log(datos);
          $.ajax({
            url: 'secion.php',
            type: 'POST',
            data: datos
          })
          .done(function(data) {
            var resp = $.parseJSON(data);
            console.log(resp);
            if (resp.res == 1)
            {
              var mostrar = '<div  class="alert alert-success ocultar col-xs-offset-2 col-xs-8" role="alert"> Bienvenido!</div>'; 
              setTimeout("$('#modalingreso').modal('hide');", 2000);
            }
            else
            {
              var mostrar='<div  class="alert alert-danger ocultar" role="alert"> CI o Password Incorrectos</div>'; 
            }    
            $('#muestra').html(mostrar); 
          })
          .fail(function() {
            console.log("error");
          })
          event.preventDefault();
    }
     function cerrar_sesiones()
        {          
          location.reload();
          var id = "opcion=" + encodeURIComponent('cierra_sesion');
          console.log(id);
          $.ajax({
            url: 'secion.php',
            type: 'POST',
            data: id
          })
          .done(function(data) {
            console.log(data);
            var resp = $.parseJSON(data);
            if(resp.res==1)
            {
              window.location="index.php"; 
            }
          })
          .fail(function() {
            console.log("error");
          })
          event.preventDefault();          
        }
    </script>
</head>
<body>
<!--  llamada a la cabecera -->
  <?php 
    require_once $_SERVER["DOCUMENT_ROOT"]."/pasantes/barramenusr.php";
  ?>
  <!--  menu de deportes existentes -->
 	<div class="col-xs-offset-2 col-xs-8">
 		<div class="jumbotron">
  			<div class="media">
  				<div class="media-left">
    				<a href="#">
      					<img class="img-rounded media-object" width="300" height="300" src="/pasantes/Imagenes/1.jpg" alt="Imagen Futbol">
    				</a>
         </div> 
  			<div class="media-body">
    			<h4 class="media-heading">Activos:</h4>
    				prueba 1 TALLER DE SISTEMAS <br>
            <br>
            <a href="#">
              <button type="button" class="btn btn-info">
                Seleccionar
              </button>
            </a>
        </div>
			</div>
		</div>	
 	</div>
</body>
</html>

