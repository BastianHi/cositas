<?php

include("comentarioBackend.php");
include("crearComentario.php");

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
						<h2 class="titulo m-3">Reunion 5</h2>
						<h3 class="m-3"> Tema: Porton</h3>
						
						<p class=" m-3" style="text-align:justify;">  
							Delegado Juan Fuentes: En la reunion de ayer quedó acordado que se instalarán portones 
									en la entrada y salida del pasaje, todo para la seguridad de la comunidad.
						</p>
						<h6 class="m-3">Fecha: 15-07-2021 </h6> 
						<h6 class="m-3">Hora: 18:00 hrs </h6>
						
						<form action="crearComentario.php"  method="POST">	

						<div class="form-group  row" style="text-align: center; margin-left: 20px; margin-top:20px;">
						
						
							<input type="text" name="coment1" class="form-control" placeholder="Inserte aquí su comentario..." style="width: 300px;height: 80px;" required >
								  
						
							<div  class="offset-10" style=" margin-left: 60px; margin-top:20px;">
								<button type="submit" class="btn btn-primary">Comentar</button>
							</div> 
		
							</div> 
						 </form>
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

</body>
</html>