<?php
	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<script src="assets/js/bootstrap.min.js" ></script>



 <style>
body{
	font: tahoma;
	size: 30;
}
h1{ color: rgb(9, 14, 100);
    margin-left: 20px;
size: 30;
font: tahoma;
text-align: center;
		
}

fieldset 	{
  display: block;
  margin-left: 600px;
  margin-right: 600px;
  margin-top: 40px;
  padding-top: 0.35em;
  padding-bottom: 0.900em;
  padding-left: 0.75em;
  padding-right: 0.75em;
  background: rgb(210, 211, 248);
  border-radius: 15px;
  border-width: 2px;
  border-style: groove;
  border-color: rgb(252, 252, 252);
			
			}
button{
				
  background-color: rgb(30, 30, 133);
  
  border-radius: 10px;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  font: tahoma;
  padding-left:20px;
  margin-right: 200px;
  padding-right: 20px;
  padding-left:20px;
  
}
      </style>








	</head>
	
	<body>
		<div class="container">
			
			<h1><?php echo $data["titulo"]; ?></h1>
			
			 <fieldset >
		    <table align="center">

			<form id="nuevo" name="nuevo" method="POST" action="index.php?c=vestidos&a=actualizar" autocomplete="off">
				
				<input type="hidden"  id=" id" name=" id" value="<?php echo $data["id"]; ?>" />
				<br><br>
				<div class="form-group">
					<label for="placa"><font face="tahoma" size="5">Codigo</label>
					<input type="text" class="form-control" id="procad" name="procad" value="<?php echo $data["vestidos"]["procad"]?>" />
				</div><br>
                                        <div class="form-group">
					<label for="placa">Nombre</label>
					<input type="text" class="form-control" id="pronom" name="pronom" value="<?php echo $data["vestidos"]["pronom"]?>" />
				</div><br>
                                        <div class="form-group">
					<label for="placa">Marca</label>
					<input type="text" class="form-control" id="promar" name="promar" value="<?php echo $data["vestidos"]["promar"]?>" />
				</div><br>
				
				<div class="form-group">
					<label for="marca">Precio</label>
					<input type="text" class="form-control" id="precio" name="precio" value="<?php echo $data["vestidos"]["precio"]?>" />
				</div><br>
				
				<div class="form-group">
					<label for="modelo">Estatus</label>
					<input type="text" class="form-control" id="estatus" name="estatus" value="<?php echo $data["vestidos"]["estatus"]?>" />
				</div><br>
				
				<div class="form-group">
					<label for="anio">Stock</label>
					<input type="text" class="form-control" id="stock" name="stock" value="<?php echo $data["vestidos"]["stock"]?>" />
				</div><br>
				
				<div class="form-group">
					<label for="color">Color</label>
					<input type="text" class="form-control" id="color" name="color" value="<?php echo $data["vestidos"]["color"]?>" />
				</div><br>
                                <div class="form-group">
					<label for="color">Talla</label>
					<input type="text" class="form-control" id="talla" name="talla" value="<?php echo $data["vestidos"]["talla"]?>" />
				</div></font><br><br>
				
				<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
				
				</form>
			</fieldset> 
		</body>
	</html>		