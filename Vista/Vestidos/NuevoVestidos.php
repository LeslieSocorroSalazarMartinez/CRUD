<!DOCTYPE html>
<html lang="es">
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

			<form id="nuevo" name="nuevo" method="POST" action="index.php?c=vestidos&a=guarda" autocomplete="off">
				<div class="form-group">

					<br><br><label for="procad"><font face="tahoma" size="5">Codigo</label>
					<input type="text" class="form-control" id="procad" name="procad" /></font>
				</div><br><br>
				
				<div class="form-group">
					<label for="pronom"><font face="tahoma" size="5">Nombre</label>
					<input type="text" class="form-control" id="pronom" name="pronom" />
				</div>
				
				<div class="form-group"><br>
					<label for="promar"><font face="tahoma" size="5">Marca</label>
					<input type="text" class="form-control" id="promar" name="promar" />
				</div>
				
				<div class="form-group"><br>
					<label for="precio"><font face="tahoma" size="5">Precio</label>
					<input type="text" class="form-control" id="precio" name="precio" />
				</div>
                                       <div class="form-group">
					<br><label for="estatus"><font face="tahoma" size="5">Estatus</label>
					<input type="text" class="form-control" id="estatus" name="estatus" />
				</div>
                                        <div class="form-group">
					<br><label for="stock"><font face="tahoma" size="5">Stock</label>
					<input type="text" class="form-control" id="stock" name="stock" />
				</div>

				<div class="form-group">
					<br><label for="color"><font face="tahoma" size="5">Color</label>
					<input type="text" class="form-control" id="color" name="color" />
				</div>
				<div class="form-group">
					<br><label for="talla"><font face="tahoma" size="5">Talla</label>
					<input type="text" class="form-control" id="talla" name="talla" />
				</div><br><br>
				
				<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
				


</table>
			<br><br>
                    <div style="padding-right:2px ; padding:3px; ">
				                                
				   
	
	

				</form>
			</fieldset> 
		</div>
	</body>
</html>