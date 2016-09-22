<!-- Banda de Presentacion  -->

	<nav class="navbar navbar-inverse">
  		<div class="container-fluid">
    	<!-- Brand and toggle get grouped for better mobile display -->
    		<div class="navbar-header">
      			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        			<span class="sr-only">Toggle navigation</span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
      			</button>
      			<a class="navbar-brand" href="/pasantes/index.php"> Inicio</a>
    		</div>

    		<!-- Collect the nav links, forms, and other content for toggling -->
    		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      		<ul class="nav navbar-nav">


            <li><a href="/pasantes/application/views/pantallaA">Pantalla A<span class="sr-only">(current)</span></a></li>
           
            <li><a href="/pasantes/application/views/pantallaB">Pantalla B<span class="sr-only"></span></a></li>
            
          </ul>
          <ul class="nav navbar-nav navbar-right" <?php if (isset($_SESSION['id_usu']))
  {
    echo ' style="display:none"';
  }
   ?>>
           
            <li><a href="" class="modal1" data-toggle="modal" data-target="#modalingreso">Ingresar</a></li>
          </ul>
          <div class="iniciado">
          <ul class="nav navbar-nav navbar-right" <?php if (!isset($_SESSION['id_usu']))
  {
    echo ' style="display:none"';
  }
   ?>>
               <li><a href="" ><?php echo $_SESSION['nombre']; ?> <?php echo $_SESSION['apellido']; ?> <?php echo $_SESSION['permiso']; ?></a></li>
            <li><a href="/pasantes/index.php" class="modal1" id="cerrar">Cerrar Sesion</a></li>
          </ul>
          </div>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
</div>


<!-- Formulario modal login -->
<div class="modal fade" id="modalingreso" tabindex="-1" role="dialog" aria-labelledby="modalingreso">
    <div class="modal-dialog" role="document">
    	<div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        			<h4 class="modal-title" id="myModalLabel">Ingreso</h4>
     		</div>
           
          	<div class="modal-body">
            	<form class="form-horizontal" method="post" name="login_form">
					<div class="form-group">
    					<label class="col-sm-2 col-sm-offset-1 control-label">CI:</label>
  					  	<div class="col-sm-7">
    						<input type="text" class="form-control" id="inputCi" name="inputCi" placeholder="Carnet de identidad" required>
   					 	</div>
 			 		</div>

 			 		<div class="form-group">
    					<label class="col-sm-2 col-sm-offset-1 control-label">Password:</label>
  					  	<div class="col-sm-7">
    						<input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Password" required>
   					 	</div>
 			 		</div>

 			 		<div class="form-group">
			    		<div class="col-sm-offset-3 col-sm-7">
			      			<button type="button" onclick="javascript:inicio_sesion();" class="btn btn-success">Ingresar</button>
			    		</div>
			  		</div>
              	</form>
          	</div>

          	<div class="modal-footer">
          		<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
          	</div>
        </div>
	</div>
</div>

