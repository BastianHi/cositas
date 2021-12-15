<?php

include("comentarioBackend.php");
include("ActaBackend.php");
include("reunionBackend.php");

//include("crearComentario.php");

?>
<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!--bostrap-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

	<!--font awesome-->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<!--datepicker-->
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

	<title>Menú</title>

	<style type="text/css">
		h5{
			color: red;
			font-size: 15px;
		}
        

    </style>
    
    <style>
.content{
    margin-left: 20px;
}



</style>


<body>
	
	<div class="container"  style="margin-top: 30px">
		
		<div class="row">
			<div class="col-9">
				<h1>NeighMeet</h1>
			</div>
			<div class="3">
				<h5><a>Contactanos|</a></h5>

			</div>
			<div class="3">			
				<h5><a> Ayuda|</a></h5>
			</div>
			<div class="3">
				<h5> <a>Cerrar sesion</a></h5>
			</div>
		</div>
		
		<hr>
		<div class="3" style="text-align: center; margin-left: 20px; margin-top:20px;">

			<button type="button" class="btn btn-primary">Ingresar a reunión</button>
			<button style="margin-left: 70px;"type="button" class="btn btn-primary">Noticias</button>
			<button style="margin-left: 70px;" type="button" class="btn btn-primary">Registro de Reuniones Realizadas</button>
		</div>
		<hr>
		
				
		
					
		<div class="row" style="text-align: center; margin-left: 20px; margin-top:20px;">
						<div style="margin-left: 200px;" >
							  <input type="text" aria-label="First name" placeholder="Buscar..." class="form-control">
							  
						</div>
						<div style="margin-left: 50px;">
							<button type="submit" class="btn btn-primary" >
								<a>Buscar</a>
							</button>   
						</div>
						<div style="margin-left: 50px;">
							<button class="btn btn-primary" id="datepicker" width="276" >
								Buscar por fecha
							</button>
						</div>
					</div>
					
					<div style="margin-top: 20px;margin-bottom: 10px;">
					<div  class="espaciador w-50	 m-auto mt-3 border bg-white" style="border-radius:20px;text-align: center;">
					<?php
			if($ConsultaReunion): foreach($ConsultaReunion as $key):  ?>
				
			
				<h1 class="titulo m-3">Acta: Reunión <?= $key['id_reunion'] ?> </h1>
				<h3 class="m-3">Tema: <?= $key['tema']  ?>  </h3>
			
				<?php endforeach; endif; ?> 
				
				<?php
			if($ConsultaActa): foreach($ConsultaActa as $key):  ?>				
				<?= $key['acta']  ?> 
				<?php endforeach; endif; ?>

				
				
			
				
						
						
					
						
						<div class="col-12 " style="margin-bottom:20px">
                <button type="button" class="btn btn-info " data-bs-toggle="modal" data-bs-target="#NuevoEmpleado">Comentar</button>
                </div>
				</div>
				</div>
						     <!-- Modal -->
							 <div class="modal fade" id="NuevoEmpleado" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="staticBackdropLabel">Comentar</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Cerrar</button>
        </div>
        <div class="modal-body">
            <form  action="crearComentario.php"  method="POST"    >
			<div class="row">
                   
				   </div>
				   <div >
					   <div>
						   <label>Usuario</label>
						   <input type="text" class="form-control" name="nombre" required>
					   </div>
					   <div >
						   <label>Comentario</label>
						 
						<input style="text-align: center; margin-bottom: 10px;" type="text" name="coment1" class="form-control" placeholder="Inserte aquí su comentario..." style=" width: 300px;height: 80px;" required >
								
					   </div>
				   </div>
   
				   <div class="offset-10">
					   <button type="submit" class="btn btn-primary">Enviar</button>
				   </div>
              </form>
            
        </div>
        
      </div>
    </div>
  </div>
						</div>
				</div>
				</div>
			   <div class="espaciador w-50	 m-auto mt-3 border bg-white" style="border-radius:20px;text-align: center;">
			   <table class="table table-striped" style="margin-top: 20px;">
				<h4 style="text-align: center;margin-top: 10px;">Comentarios Acta</h4>
				<thead class="table-white">
				<tr>
					<!--la cabecera ocupa la etiqueeta th-->
					<th>Usuario</th>
					<th>Comentario</th>
				</tr>
			</thead>
			<?php
			if($ConsultaComentario): foreach($ConsultaComentario as $key):  ?>
				
				<tr>
					<td>   <?= $key['usuario'] ?>    </td>
					<td> <?= $key['descripcion']  ?>  </td>

					

				</tr>
				<?php endforeach; endif; ?>
			</table>	
		</div>
</div>



    <!--JQuery-->	
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

	<!--bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


<!--datepicker-->
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>

<script>
	$('#datepicker').datepicker({
		uiLibrary: 'bootstrap4'
	});
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
   
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>

</body>
</html>
