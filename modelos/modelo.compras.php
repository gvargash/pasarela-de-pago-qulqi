<?php 
	require_once "conexion.php";
	class ModeloCompras
	{
		
		static public function mdlCompras($tabla,$datos)
		{
				

			$stmt=Conexion::conectar()->prepare("INSERT INTO $tabla(monto, numpedido, nombrecliente, apellidocliente, estado, fecha) VALUES(:monto,:numpedido,:nombrecliente,:apellidocliente,:estado,:fecha)");


			$stmt->binParam(":monto",$datos["monto"],PDO::ATTR_STR);
			$stmt->binParam(":numpedido",$datos["numeropedido"],PDO::ATTR_STR);
			$stmt->binParam(":nombrecliente",$datos["nombre"],PDO::ATTR_STR);
			$stmt->binParam(":apellidocliente",$datos["apellido"],PDO::ATTR_STR);
			$stmt->binParam(":estado",$datos["estado"],PDO::ATTR_INT);
			$stmt->binParam(":fecha",$datos["fecha"],PDO::ATTR_STR);	


			if ($stmt->execute()) {
				return "ok";
			}else{
				return "error";
			}
		}
	}
 ?>