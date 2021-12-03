<?php
  session_start();
    //require_once("../back/db/dbExec.php");
    if(!isset($_SESSION["token"])){
      header("Location: /labuenacopa/inicio");
      exit();
    }else{
      $tipo=$_SESSION["tipo"]; 
      if($tipo==''){
        header("Location: /labuenacopa/inicio");
        exit();
      }else if($tipo=='P'){
        header("Location: /labuenacopa/proveedor/"); 
        exit();
      }else if($tipo=='C'){
        header("Location: /labuenacopa/cliente/"); 
        exit();
      }else if($tipo=='M'){
        header("Location: /labuenacopa/master/"); 
        exit();
      }   
    }
?>    
<!doctype html>
<html lang="es">
	<head>
	  <!-- Required meta tags -->
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <!-- Bootstrap CSS -->
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	  <link href="https://fonts.googleapis.com/css2?family=Mr+Dafoe&display=swap" rel="stylesheet"> 
	  <link rel="stylesheet" type="text/css" href="css/inicio.css">
	  <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">
	  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	  <title>La buena copa</title>
	</head>
	<body>
		<div class="container-fluid">
			<div id="sec1" class="row">
				<nav class="navbar navbar-expand-lg navbar-light" style="border: 0px;padding: 0px; width: 100%;">
				  <a class="navbar-brand" href="#">
				    <img id="lg_labuenacopa" src="img/logo.png" class="d-inline-block align-top" alt="" loading="lazy"  style="margin: 0px;">
				    <a class="nav-link" href="#" id="text3">La<span style="color: #8bb121;"> buena</span> copa</a>
				  </a>
				  <div class="collapse navbar-collapse  justify-content-center" id="navbarNav">
				    <ul class="navbar-nav ">
				      <li class="nav-item active">
				        <a class="nav-link text_menu" onclick="fn_listProv()" href="#">Proveedores</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link text_menu" href="#">Inventario</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link text_menu" href="#">Configuración</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link text_menu" href="#">Galeria</a>
				      </li>
				    </ul>
				  </div>
				  <form class="form-inline justify-content-end">
				    <a class="btn btn-danger  btn-sm" type="submit" href="../back/registro/closeSesion.php">Salir</a>
				  </form>
				</nav>	
			</div>
			<div id="sec2" class="row" style="overflow-y: auto;">
				<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<div id="tarjetProve" class="container-fluid">
					</div>	
				</div>
			</div>
			<div id="sec3" class="row">
				<div class="col-sm-4 col-md-4 col-lg-2 col-xl-2">
					<img id="lg_arb" src="img/arb.png"  class="d-inline-block align-top" alt="" loading="lazy">
				</div>
			</div>
		</div>

		<div class="modal fade" id="modalEditPro" tabindex="-1" role="dialog" aria-hidden="true">
		  <div class="modal-dialog modal-xl">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="tMEditProduc">Editar producto</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <form enctype="multipart/form-data" action="#" method="POST">
		         <div class="form-group col-md-6" >
		          <div class="card mb-3" style="max-width: 540px; border: none;">
		            <div class="row no-gutters">
		              <div class="col-md-4">
		                <img class="card-img-top" src="images/default-avatar.png" id="editImg" width="80" height="150">
		              </div>
		              <div class="col-md-8">
		                <div class="card-body" >

		                  <div class="form-group">
		                    <div class="input-group is-invalid">
		                      <div class="custom-file" lang="es">
		                        <input type="file" class="custom-file-input" name="image" id="imagedit" required>
		                        <label class="custom-file-label" for="validatedInputGroupCustomFile"></label>

		                      </div>
		                      <div class="input-group-append">
		                       <button class="btn btn-dark uploadedit" value="Subir imagen" type="button">Subir</button>
		                     </div>
		                   </div>
		                 </div>                  
		               </div>
		             </div>
		           </div>
		         </div>
		       </div>
		       <!--  <div class="form-group col-md-6" >
		           <div class="card" style="width: 10rem; height: 10rem;">
		            <img class="card-img-top" src="images/default-avatar.png" id="editImg" width="80" height="150">
		          </div>  
		          <div class="card-body">
		            <div class="form-group">
		              <input type="file" class="form-control-file" name="image" id="image">
		              <br>
		              <input type="button" class="btn btn-dark upload" value="Subir imagen" >

		            </div>
		          </div>
		        </div> -->
		        <br>
		        <br>
		        <div class="form-row">
		          <div class="form-group col-md-4">
		            <label for="editNombre">Nombre</label>
		            <input type="text" class="form-control" id="editNombre">
		          </div>
		          <div class="form-group col-md-4">
		            <label for="inputPassword4">Fermentacion</label>
		            <input type="text" class="form-control" id="editFermentacion">
		          </div>
		          <div class="form-group col-md-2">
		            <label for="inputEmail4">Alcohol</label>
		            <input type="text" class="form-control" id="editAlcohol">
		          </div>
		          <div class="form-group col-md-2">
		            <label for="inputEmail4">Temperatura</label>
		            <input type="text" class="form-control" id="editTemperatura">
		          </div>

		        </div>
		        <div class="form-row">
		         <div class="form-group col-md-6">
		          <label for="exampleFormControlTextarea1">Descripcion</label>
		          <textarea class="form-control" id="editDescripcion" rows="3"></textarea>
		        </div>
		        <div class="form-group col-md-6">
		          <label for="exampleFormControlTextarea1">Cepa</label>
		          <textarea class="form-control" id="editCepa" rows="3"></textarea>
		        </div>
		      </div>
		      <div class="form-row">
		        <div class="form-group col-md-4">
		          <label for="inputEmail4">Nacimiento</label>
		          <input type="date" class="form-control" id="editNacimiento">
		        </div>
		        <div class="form-group col-md-4">
		          <label for="inputPassword4">Barrica</label>
		          <input type="text" class="form-control" id="editBarrica">
		        </div>
		        <div class="form-group col-md-2">
		          <label for="inputEmail4">Presentacion</label>
		          <input type="text" class="form-control" id="editPresentacion">
		        </div>
		        <div class="form-group col-md-2">
		          <label for="inputEmail4">Precio</label>
		          <input type="number" class="form-control" id="editPrecio">
		        </div>
		      </div>
		      <div class="form-group">
		        <label for="exampleFormControlTextarea1">Cata</label>
		        <textarea class="form-control" id="editCata" rows="3"></textarea>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
		        <button type="button" class="btn btn-dark" id="btnGuardarModal" onclick="fn_updateProd()">Guardar cambios</button>
		      </div>
		    </form>
		  	</div>

				</div>
			</div>
		</div>


		<div id="mdl_newPro" class="modal" tabindex="-1" role="dialog">
		  <div class="modal-dialog  modal-xl">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title">Nuevo Proveedor</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      	<ul class="nav nav-tabs" id="myTab" role="tablist">
				  <li class="nav-item" role="presentation">
				    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Datos</a>
				  </li>
				  <li class="nav-item" role="presentation">
				    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Ubicación</a>
				  </li>
				  <li class="nav-item" role="presentation">
				    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Usuario</a>
				  </li>
				</ul>
				<div class="tab-content" id="myTabContent">
				  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
				  	<form>
					  <div class="form-group" style="margin-bottom: 0rem;" >
					    <div class="input-group mt-1">
						  <div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Nombre:</span>
						  </div>
						  <input id="mdlFrm_nomPrv" type="text" class="form-control" placeholder="Nombre Proveedor" aria-describedby="basic-addon1">
						</div>
					  </div>
					  <div class="form-row">
					    <div class="col">
					      	<div class="input-group mt-1">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon1">Web:</span>
							  </div>
							  <input  id="mdlFrm_pagePrv" type="url" class="form-control" placeholder="www.ejemplo.com"aria-describedby="basic-addon1">
							</div>
					    </div>
					    <div class="col">
					      	<div class="input-group mt-1">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon1">Tel:</span>
							  </div>
							  <input  id="mdlFrm_telPrv" type="tel" class="form-control" placeholder="" aria-describedby="basic-addon1">
							</div>					      
					    </div>
					  </div>
					  <div class="form-group">
					    <div class="input-group mt-1">
						  <div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Descripción:</span>
						  </div>
						  <textarea  id="mdlFrm_descPrv" class="form-control" aria-label="With textarea"></textarea>
						</div>
					  </div>
					</form>
				  </div>
				  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
				  	<form>
					  <div class="form-group" style="margin-bottom: 0rem;" >
					    <div class="input-group mt-1">
						  <div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Calle:</span>
						  </div>
						  <input id="mdlFrm_callePrv" type="text" class="form-control" placeholder="" aria-describedby="basic-addon1">
						</div>
					  </div>
					  <div class="form-row">
					    <div class="col">
					      	<div class="input-group mt-1">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon1">Num. Int:</span>
							  </div>
							  <input id="mdlFrm_nIntPrv" type="text" class="form-control" placeholder="" aria-describedby="basic-addon1">
							</div>
					    </div>
					    <div class="col">
					      	<div class="input-group mt-1">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon1">Num. Ext:</span>
							  </div>
							  <input  id="mdlFrm_nExtPrv" type="text" class="form-control" placeholder="" aria-describedby="basic-addon1">
							</div>					      
					    </div>
					    <div class="col">
					      	<div class="input-group mt-1">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon1">C.P.:</span>
							  </div>
							  <input  id="mdlFrm_nCPPrv" type="text" class="form-control" placeholder="" aria-describedby="basic-addon1">
							  <div class="input-group-append">
							    <button class="btn btn-info" type="button" id="" onclick="fn_cpllenar()">Buscar</button>
							  </div>
							</div>					      
					    </div>
					  </div>
					  <div class="form-row">
					    <div class="col">
					      	<div class="input-group mt-1">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon1">Colonia:</span>
							  </div>
							  <input id="mdlFrm_colPrv" type="text" class="form-control" placeholder="" aria-describedby="basic-addon1">
							</div>
					    </div>
					    <div class="col">
					      	<div class="input-group mt-1">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon1">Delegación:</span>
							  </div>
							  <input  id="mdlFrm_delPrv" type="text" class="form-control" placeholder="" aria-describedby="basic-addon1">
							</div>					      
					    </div>
					  </div>
					  <div class="form-row">
					    <div class="col">
					      	<div class="input-group mt-1">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon1">Estado:</span>
							  </div>
							  <input id="mdlFrm_estPrv" type="text" class="form-control" placeholder="" aria-describedby="basic-addon1">
							</div>
					    </div>
					    <div class="col">
					      	<div class="input-group mt-1">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon1">Pais:</span>
							  </div>
							  <input  id="mdlFrm_paisPrv" type="text" class="form-control" placeholder="" aria-describedby="basic-addon1">
							</div>					      
					    </div>
					  </div>
					  <div class="form-row">
					    <div class="col">
					      	<div class="input-group mt-1">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon1">Latitud:</span>
							  </div>
							  <input id="mdlFrm_latPrv" type="text" class="form-control" placeholder="" aria-describedby="basic-addon1">
							</div>
					    </div>
					    <div class="col">
					      	<div class="input-group mt-1">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon1">Longitud:</span>
							  </div>
							  <input  id="mdlFrm_longPrv" type="text" class="form-control" placeholder="" aria-describedby="basic-addon1">
							</div>					      
					    </div>
					  </div>
					</form>
				  </div>
				  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
				  	<form>
					  <div class="form-group" style="margin-bottom: 0rem;" >
					    <div class="input-group mt-1">
						  <div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Nombre Usuario:</span>
						  </div>
						  <input id="mdlFrm_nomPrv" type="text" class="form-control" placeholder="Nombre" aria-describedby="basic-addon1">
						</div>
					  </div>
					  <div class="form-row">
					    <div class="col">
					      	<div class="input-group mt-1">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon1">Correo:</span>
							  </div>
							  <input  id="mdlFrm_emailPrv" type="email" class="form-control" placeholder=""aria-describedby="basic-addon1">
							</div>
					    </div>
					    <div class="col">
					      	<div class="input-group mt-1">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon1">Contraseña:</span>
							  </div>
							  <input  id="mdlFrm_passPrv" type="password" class="form-control" placeholder="" aria-describedby="basic-addon1">
							</div>					      
					    </div>
					  </div>
					</form>
				  </div>
				</div>
			 </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
		        <button type="button" class="btn btn-primary" onclick="fn_newProveedorBD()">Guardar</button>
		      </div>
		    </div>
		  </div>
		</div>

		<div id="mas_proveedor" class="text-center mas_proveedor" onclick="fn_newProveedor()" data-toggle="tooltip" data-placement="top" title="Agregar Proveedor Nuevo">
			<span>+</span>
		</div>




		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		
		<script src="js/jquery/jquery.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

		<script src="js/layout.js"></script>
		<script src="js/oper.js"></script>
		<script type="text/javascript">
			
		</script>
	</body>
</html>