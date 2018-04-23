<?php 
	class ControladorCompras
	{
		
		public function ctrCompras($datos)
		{
			$tabla="compras";


			$respuesta=ModeloCompras::mdlCompras($tabla,$compras);

			return $respuesta;
		}
	}

 ?>