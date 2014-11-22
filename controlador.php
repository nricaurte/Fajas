<?php
function iniciar(){
		if($_SERVER['REQUEST_METHOD'] != 'POST'){
		comprovar_usuario();
		require "plantillas/iniciar.php";
	}else{
		comprovar_usuario();
	}
	}
function salir(){
  cerrar();
}
function info(){
require "/plantillas/info.php";
}


function ver_user_action(){
$usuario=usuarios();
require "plantillas/user.php";
}
function crear_user_action(){
crear_usuario();
header('Location: ver_user');
}
function consultar_user_action(){
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$id=$_POST['id'];
$user=consultar_usuario($id);
$json = json_encode($user); 
echo $json;
}
}
function eliminar_user_action(){
if (isset($_GET['id'])) {
		eliminar_user($_GET['id']);
		header("location: ver_user");
	}	
}

function ver_productos(){
$productos=productos();
require "plantillas/productos.php";
}
function nuevo_producto_action(){
$productos=productos();
require "plantillas/nuevo_producto.php";
}
function crear_action_producto(){
crear_producto();
header('Location: ingreso_producto');
}
function consultar_action_producto(){
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$id=$_POST['id'];
$producto=consultar_producto($id);
$json = json_encode($producto); 
echo $json;
}
}
function eliminar_producto_action(){
	if (isset($_GET['id'])) {
		eliminar_producto($_GET['id']);
		header("location: ingreso_producto");
	}
}


function crear_cliente_action(){
crear_cliente();
header('Location: /Fajas-RosyWar/index.php/clientes');
}
function cliente(){
$clientes=clientes();
require "plantillas/clientes.php";
}
function consulta_action_cliente(){
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$id=$_POST['id'];
$clientes=consultar_cliente($id);
$json = json_encode($clientes); 
echo $json;
}
}


function micuenta_action(){
$usuarios=consultar_usuario($_SESSION['id_usuario']);
require "plantillas/micuenta.php";

}
function factura_action(){
$n_fact = num_factura();
$clientes=clientes();
$productos=productos();	
require "plantillas/facturacion.php";

}

?>
