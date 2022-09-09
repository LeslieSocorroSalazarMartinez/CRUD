<!DOCTYPE html>
<html lang="es">
	<head><title> Registro Producto</title></head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<script src="assets/js/bootstrap.min.js" ></script>
                <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
                <link rel="stylesheet" type="text/css" href="bootstrap/css/hoja.css">
<style>
footer{

color: white;
padding: 1em 3px 30px 5px;


width: auto;
height:50px;

text-align: center;
background-color: #3A67A0;
 }
      
</style>
    </head>
    <body>
        <?php include('barra.php'); ?>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                   


                    </form>
                </div>
            </div>
        </div>
        <div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>



	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" cont="width=device-width, initial-scale=1">
	<script src= "bootstrap/js/jquery.js"></script>
	<script src= "bootstrap/js/bootstrap.js"></script>
	<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.css">




<style>
	.carousel-inner > .item > img,
	.carousel-inner > .item > a > img {
	    width: 30%;
        height: 55%;
	    margin: auto;
}
</style>

</style>	



</head>
	
	<body>
		<div class="container">
			<h1><text-align:center><?php echo $data["titulo"]; ?></h1>
			
			<a href="index.php?c=vestidos&a=nuevo" class="btn btn-primary">Agregar</a>
			
			<br />
			<br />
			<div class="table-responsive">
				<table border="1" width="80%" class="table">
					<thead>
						<tr class="table-primary">
                                                       
							<th><font face="tahoma" size="4">Codigo</th></font>
							<th><font face="tahoma" size="4">Nombre</th></font>
                                                        <th><font face="tahoma" size="4">Marca</th></font>
							<th><font face="tahoma" size="4">Precio</th></font>
                                                        <th><font face="tahoma" size="4">Estatus</th></font>
							<th><font face="tahoma" size="4">Stock</th></font>
							<th><font face="tahoma" size="4">Color</th>
                                                        <th><font face="tahoma" size="4">Talla</th>
							<th>Editar</th>
							<th>Eliminar</th>
						</tr>
					</thead>
					
					<tbody>
						<?php foreach($data["vestidos"] as $dato) {
							echo "<tr>";
                                             
							echo "<td>".$dato["procad"]."</td>";
							echo "<td>".$dato["pronom"]."</td>";
							echo "<td>".$dato["promar"]."</td>";
							echo "<td>".$dato["precio"]."</td>";
							echo "<td>".$dato["estatus"]."</td>";
                                                        echo "<td>".$dato["stock"]."</td>";
							echo "<td>".$dato["color"]."</td>";
                                                        echo "<td>".$dato["talla"]."</td>";
							echo "<td><a href='index.php?c=vestidos&a=modificar&id=".$dato["id"]."' class='btn btn-warning'>Modificar</a></td>";
							echo "<td><a href='index.php?c=vestidos&a=eliminar&id=".$dato["id"]."' class='btn btn-danger'>Eliminar</a></td>";
							echo "</tr>";
						}
						?>
					</tbody>
					
				</table>
			</div>
		</div>
	</body>
</html>