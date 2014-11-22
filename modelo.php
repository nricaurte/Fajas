<?php
function conectar_base_de_datos (){
    $conexion=mysqli_connect("localhost","root","","fajasrosywar");
    if(!$conexion){
        echo 'No se pudo conectar con la jodida DB'.mysqli_error($conexion);
    }
    return $conexion;
}
function cerrar_conexion_db($conexion){
    mysqli_close($conexion);
}
function consultar_usuario($id){
	  $conexion = conectar_base_de_datos();
  $consulta = "SELECT * FROM usuario where id_usuario = '$id'";
  $resultado = mysqli_query($conexion,$consulta);
  $usuario = array();
  while ($fila = mysqli_fetch_assoc($resultado)) {
    $usuario = $fila;
  }
  cerrar_conexion_db($conexion);
  return $usuario;
    
}

function comprovar_usuario(){
 if($_SERVER['REQUEST_METHOD']=='POST'){
 	$id=$_POST['idu'];
     $usuario=consultar_usuario($id);
     $contrasena = hash("sha512",$_POST['pass']);
     $contrasena = $contrasena.$usuario['salt'];
	 if ($usuario['pass']==$contrasena) {
        $_SESSION['id_usuario']=$usuario['id_usuario'];
        $_SESSION['nombre']=$usuario['nombre'];
         header("location: menu");
      }else{
       header("location: iniciar");
      }
 }
}

function cerrar(){
    session_unset();
    session_destroy();
    header("Location: iniciar");
}
function crear_usuario(){
  if($_SERVER['REQUEST_METHOD']=="POST"){
  $conexion=conectar_base_de_datos();
  $ID=$_POST['ID'];
  $email=$_POST['email'];
  $nom=$_POST['name'];
  $ape=$_POST['apellido'];
  $pass=$_POST['pass'];
  $salt=md5(time());
  $passencriptado=hash("sha512",$pass);
  $passencriptado=$passencriptado.$salt;
  $consulta="INSERT INTO usuario VALUES ('$ID','$email','$nom','$ape','$passencriptado','$salt')";
  mysqli_query($conexion,$consulta);
  cerrar_conexion_db($conexion);
 } 
 }  
function usuarios (){
        $conexion=conectar_base_de_datos();
        $consulta="SELECT * FROM usuario";
        $resultado=mysqli_query($conexion,$consulta);
        $usuarios=array();
        while($fila=mysqli_fetch_assoc($resultado)){
            $usuarios[]=$fila;
        }
        cerrar_conexion_db($conexion);
        return $usuarios;
    }
function eliminar_user($id){
$conexion = conectar_base_de_datos();
mysqli_query($conexion,"DELETE FROM usuario where id_usuario='$id'");
cerrar_conexion_db($conexion);
} 
function crear_cliente(){
  if($_SERVER['REQUEST_METHOD']=="POST"){
  $conexion=conectar_base_de_datos();
  $ID=$_POST['ID'];
  $nombre=$_POST['name'];
  $apellido=$_POST['apellido'];
  $ciudad=$_POST['ciudad'];
  $direccion=$_POST['direccion'];
  $telefono=$_POST['telefono'];
  $email=$_POST['email'];
  $consulta="INSERT INTO cliente VALUES ('$ID','$nombre','$apellido','$ciudad','$direccion','$telefono','$email')";
  mysqli_query($conexion,$consulta);
  cerrar_conexion_db($conexion);
 } 
 }  
function clientes(){
        $conexion=conectar_base_de_datos();
        $consulta="SELECT * FROM cliente";
        $resultado=mysqli_query($conexion,$consulta);
        $usuarios=array();
        while($fila=mysqli_fetch_assoc($resultado)){
            $usuarios[]=$fila;
        }
        cerrar_conexion_db($conexion);
        return $usuarios;
    }
 function modificar_user(){
        
        $conexion = conectar_base_de_datos();
        $id=$_POST['id_usuario'];
        $email=$_POST['email'];
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];     
        $consulta =  "UPDATE usuario Set email='$email',nombre='$nombre',apellido='$apellido' where id_usuario='$id'"; 
        mysqli_query($conexion, $consulta);
        cerrar_conexion_db($conexion);
        

 }
function productos(){
        $conexion=conectar_base_de_datos();
        $consulta="SELECT * FROM producto";
        $resultado=mysqli_query($conexion,$consulta);
        while($fila=mysqli_fetch_array($resultado)){
            $productos[]=$fila;
        }
        cerrar_conexion_db($conexion);
        return $productos;
    }    
function consultar_cliente($cedula){
  
  $conexion = conectar_base_de_datos();
  $consulta = "SELECT * FROM cliente where id_cliente = '$cedula'";
  $resultado = mysqli_query($conexion,$consulta);
  $cliente = array();
  while ($fila = mysqli_fetch_assoc($resultado)) {
    $cliente = $fila;
  }
  cerrar_conexion_db($conexion);
  return $cliente;
}
 function modifica_action_cliente(){
        
        $conexion = conectar_base_de_datos();
        $id=$_POST['id_cliente'];
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $ciudad=$_POST['ciudad'];
        $direccion=$_POST['direccion'];
        $telefono=$_POST['telefono'];
        $email=$_POST['email'];
        $consulta =  "UPDATE cliente Set nombre='$nombre',apellido='$apellido',ciudad='$ciudad',Direccion='$direccion',telefono='$telefono',email='$email' where id_cliente='$id'"; 
        mysqli_query($conexion, $consulta);
        cerrar_conexion_db($conexion);
        

 }  

function crear_producto(){
    
if($_SERVER['REQUEST_METHOD']=="POST"){

  $conexion=conectar_base_de_datos();  
  $id_producto=$_POST['id_producto'];
  $descripcion=$_POST['descripcion'];
  $nombre=$_POST['nombre'];
  $cantidad=$_POST['cantidad'];
  $precio=$_POST['precio'];

 if($_FILES['archivo']['error']=="0"){
  $nombre1=$_FILES['archivo']['name'];
  $destino="archivo/".$nombre1;
  $ubicacion_temp=$_FILES['archivo']['tmp_name']; 
  move_uploaded_file($ubicacion_temp,$destino);
  $consulta="INSERT INTO producto VALUES ('$id_producto','$descripcion','$nombre','$cantidad','$precio','$destino')";
  mysqli_query($conexion, $consulta);
  cerrar_conexion_db($conexion);   
 
 }    
}   
}

function consultar_producto($id){

  $conexion = conectar_base_de_datos();
  $consulta = "SELECT * FROM producto where id_producto = '$id'";
  $resultado = mysqli_query($conexion,$consulta);
  $producto = array();
  while ($fila = mysqli_fetch_assoc($resultado)) {
    $producto = $fila;
  }
  cerrar_conexion_db($conexion);
  return $producto;

}

 function modificar_producto(){
     if($_SERVER['REQUEST_METHOD']=="POST"){   
        $conexion = conectar_base_de_datos();
        $id_producto=$_POST['id_producto'];
        $descripcion=$_POST['descripcion'];
        $nombre=$_POST['nombre'];
        $cantidad=$_POST['cantidad'];
        $precio=$_POST['precio'];


        $consulta =  "UPDATE producto Set descripcion='$descripcion',nombre='$nombre',cantidad=' $cantidad',precio='$precio' where id_producto='$id_producto'"; 
        mysqli_query($conexion, $consulta);
        cerrar_conexion_db($conexion);
        
}
 }  

function eliminar_producto($id){
$conexion = conectar_base_de_datos();
mysqli_query($conexion,"DELETE FROM producto where id_producto='$id'");
cerrar_conexion_db($conexion);
} 

function num_factura(){
  $conexion = conectar_base_de_datos(); 
  $consulta = "SELECT n_factura FROM factura order by n_factura desc limit 1 ";
  $resultado = mysqli_query($conexion,$consulta); 
  $row = mysqli_fetch_array($resultado); 
  $n_fact = $row['n_factura']+1;
  cerrar_conexion_db($conexion);
  return $n_fact;
}
?>

