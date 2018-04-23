<?php 
	require_once "../controlador/controlador.compras.php";
	require_once "../modelos/modelo.compras.php";

	// Cargamos Requests y Culqi PHP
	require_once '../Extenciones/Requests/library/Requests.php';
	Requests::register_autoloader();
	require_once '../Extenciones/culqi/lib/culqi.php';

	$SECRET_KEY = "sk_test_yx2o0neJYAzTlauG";
	$culqi = new Culqi\Culqi(array('api_key' => $SECRET_KEY));

	//enviando datos a qulqi


		// Creamos Cargo a una tarjeta
		$charge = $culqi->Charges->create(
		    array(
		      "amount" => $_POST["monto"],
		      "capture" => true,
		      "currency_code" => "PEN",
		      "description" => $_POST["producto"],
		      "email" => $_POST["email"],
		      "installments" => 0,
		      "antifraud_details" => array(
		          "address" => "Av. Lima 123",
		          "address_city" => "LIMA",
		          "country_code" => "PE",
		          "first_name" => "Will",
		          "last_name" => "Muro",
		          "phone_number" => "9889678986",
		      ),
		      "source_id" =>$_POST["token"]
		    )
		);

//Respuesta
print_r($charge);



