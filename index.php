<?php

include("reunionBackend.php");
require_once("bd.php");

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
		h6{
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
				<h6><a>Contactanos|</a></h6>

			</div>
			<div class="3">			
				<h6><a> Ayuda|</a></h6>
			</div>
			<div class="3">
				<h6> <a>Cerrar sesion</a></h6>
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

				
				<?php
			if($ConsultaReunion): foreach($ConsultaReunion as $key):  ?>
				<div style="margin-top: 20px;margin-bottom: 10px;">
					<div  class="espaciador w-50	 m-auto mt-3 border bg-white" style="border-radius:20px;text-align: center;">
				<tr>
				<h1 class="m-3">Tema: <?= $key['tema']  ?> </h1>
				<h5 class="m-3">Numero reunion:	  <?= $key['id_reunion']  ?>  </h5>
				<h5 class="m-3">	  <?= $key['descripcion']  ?>  </h5>
				<h4	 class="m-3">	  <?= $key['fecha']  ?>  </h4>

				</tr>
			
				</div>
				</div>

				<?php endforeach; endif; ?> 
				<div class="col-12 " style="margin-bottom:20px;margin-left: 480px;">
				<button type="button" class="btn btn-info " data-bs-toggle="modal" data-bs-target="#NuevaActa">Agregar acta</button>
				</div>
				
						     <!-- Modal -->
							 <div class="modal fade" id="NuevaActa" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="staticBackdropLabel">Ingresar acta</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Cerrar</button>
        </div>
        <div class="modal-body">
            <form  action="crearActa.php"  method="POST"    >
                     <div ><label>Seleccione numero reunion: </label>
				<select class="form-select" name="id_r" >
				  	<?php
				    if($ConsultaReunion): foreach($ConsultaReunion as $key):  ?>
					
					<option ><?= $key['id_reunion']  ?>  </option>
				
					<?php endforeach; endif; ?>
				</select>
				  
				   </div>
					   <div >
						   <label>Descripción acta</label>
						 
						<input style="text-align: center; margin-bottom: 10px;width: 470px;height: 100px;" type="text" name="coment1" class="form-control" placeholder="Inserte aquí su acta..." required >
								
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
