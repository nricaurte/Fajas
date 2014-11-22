<?php
session_start();
require_once "modelo.php";
require_once "controlador.php";


$URI = $_SERVER['REQUEST_URI'];
$URI = explode("?", $URI);

	switch ($URI[0]) {
		
		case "/Fajas-RosyWar/index.php/iniciar":
		iniciar();
		break;
		case "/Fajas-RosyWar/index.php/salir":
	    salir();
		break;
		 case "/Fajas-RosyWar/index.php/menu":
	    info();
		break;
		case "/Fajas-RosyWar/":
		header("Location: index.php/iniciar");
		break;
		case "/Fajas-RosyWar/index.php":
		header("Location: index.php/iniciar");
		break;
	  
		

       
		case "/Fajas-RosyWar/index.php/ver_user":
	    ver_user_action();
		break;
		case "/Fajas-RosyWar/index.php/crear_user":
	    crear_user_action();
		break;
	    case "/Fajas-RosyWar/index.php/consultar_user":
		consultar_user_action();
		break;
		case "/Fajas-RosyWar/index.php/modificar_user":
		modificar_user();
		break;
		case "/Fajas-RosyWar/index.php/eliminar_user":
		eliminar_user_action();
		break;





		case "/Fajas-RosyWar/index.php/info":
		info();
		break;
		case "/Fajas-RosyWar/index.php/productos":
		ver_productos();
		break;
		case "/Fajas-RosyWar/index.php/ingreso_producto":
		nuevo_producto_action();
		break;
		case "/Fajas-RosyWar/index.php/crear_producto":
		crear_action_producto();
		break;
		case "/Fajas-RosyWar/index.php/consultar_producto":
		consultar_action_producto();
		break;
		case "/Fajas-RosyWar/index.php/modificar_producto":
		modificar_producto();
		break;
		case "/Fajas-RosyWar/index.php/eliminar_producto":
		eliminar_producto_action();
		break;

		
	

        
        case "/Fajas-RosyWar/index.php/clientes":
		cliente();
		break;
		case "/Fajas-RosyWar/index.php/crear_cliente":
		crear_cliente_action();
		break;
		case "/Fajas-RosyWar/index.php/modificar_cliente":
		modifica_action_cliente();
    	header('Location: /Fajas-RosyWar/index.php/clientes');
    	break;
    	case "/Fajas-RosyWar/index.php/micuenta":
		micuenta_action();
		break;
		case "/Fajas-RosyWar/index.php/consultar_cliente":
		consulta_action_cliente();
		break;




		case "/Fajas-RosyWar/index.php/facturacion":
		factura_action();
		break;

	}
	
?>