<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pasarela de pago</title>
	<?php 
	$url=Ruta::ctrRuta();
 	?>
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	

    	

</head>


<body>
	<?php 
			include "modulos/pasarela.php";
	 ?>

	
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- Incluyendo .js de Culqi Checkout-->
	<script src="https://checkout.culqi.com/v2"></script>
	 <script src="<?php echo $url; ?>vistas/js/app.js"></script>
</body>
</html>