 <?php ob_start(); ?>
<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
  <div class="panel panel-danger">
    <div class="panel-heading">
      <center><h3 class="panel-title">Clientes</h3></center>
    </div>
    <div class="panel-body">
      <table class="table table-condensed table-hover">
        <thead>
         <tr>
           <th>ID</th>
           <th>Nombre</th>
           <th>Apellido</th>
           <th>Ciudad</th>
           <th>Direccion</th>
           <th>Telefono</th>
           <th>Email</th>
       </thead>
       <tbody >
         <?php foreach($clientes as $row){ ?>
        
           <tr id='<?php echo $row['id_cliente']; ?>'>
           <td><?php echo $row['id_cliente']; ?></td>
           <td id="1"><?php echo $row['nombre']; ?></td>
           <td id="2"><?php echo $row['apellido']; ?></td>
           <td id="3"><?php echo $row['ciudad']; ?></td>
           <td id="4"><?php echo $row['Direccion']; ?></td>
           <td id="5"><?php echo $row['telefono']; ?></td>
           <td id="6"><?php echo $row['email']; ?></td>
           <td>
           <center><a class="btn btn-success" data-toggle="modal" data-target="#ventana" id="<?php echo $row['id_cliente']; ?>"><span class="glyphicon glyphicon-edit"></span> Editar</a></center>
            <script language="JavaScript" type="text/javascript">
            $("#<?php echo $row['id_cliente']; ?>").click(function(){
              $.post('consultar_cliente',{
                id: <?php echo $row['id_cliente']; ?>
              },function(datos){
                  datos = $.parseJSON(datos);     
               document.getElementById('id_cliente').value =datos['id_cliente'];
               document.getElementById('nombre').value =datos['nombre'];
               document.getElementById('apellido').value =datos['apellido'];
               document.getElementById('ciudad').value =datos['ciudad'];
               document.getElementById('direccion').value =datos['Direccion'];
               document.getElementById('telefono').value =datos['telefono'];
               document.getElementById('email').value =datos['email'];
              }
              )
            }
            );
            </script>
          </td>
          </tr>
              <?php } ?>
</tbody>
</table>
</div>
</div>
</div>



<!--href='modificar_empleado'?id=".$row['id_cliente']."-->
<div class="container">

  <div class="col-xs-20 col-sm-4 col-md-12 col-lg-4">
  <div class="panel panel-default center">
    <div class="panel-heading">
         <h3 class="panel-title">Crear Cliente</h3>
  </div>
       <div class="panel-body">
         <form role="form" method="post" action="crear_cliente"  role="form">
               <div class="form-group">
                    <label>ID: </label>
                    <input type="text" name="ID" class="form-control" placeholder="ID" required>
                     <label>Nombre: </label>
                    <input type="text" name="name" class="form-control"  placeholder="Nombre" required>
                     <label>Apellido: </label>
                    <input type="text" name="apellido" class="form-control"  placeholder="Apellido" required>
                         <label>Ciudad: </label>
                    <input type="text" name="ciudad" class="form-control"  placeholder="Ciudad" required>
                         <label>Direcion: </label>
                    <input type="text" name="direccion" class="form-control"  placeholder="Direccion" required>
                         <label>Telefono: </label>
                    <input type="text" name="telefono" class="form-control"  placeholder="Telefono" required>
                         <label>Email: </label>
                    <input type="email" name="email" class="form-control"  placeholder="Email" required>
               
            
    </div>
    <center> <button class="btn btn-success" id="Enviar"><span class="glyphicon glyphicon-share-alt"></span>Crear</button></center>
   
    </form>
    </div>
  </div>
</div>
 </div>


 <div class="modal fade" id="ventana" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <center><h3>Editar Cliente</h3></center>
      </div>
      <div class="modal-body">
       <form action="modificar_cliente" method="post">
        <div class="form-group">
          <label for="">ID</label>
          <input type="text" name="id_cliente" class="form-control"  id="id_cliente" readonly="readonly"/>

          <label for="">Nombre</label>
          <input type="text" class="form-control" name="nombre"  id="nombre"  />

          <label for="">Apellido</label>
          <input type="text" class="form-control" name="apellido" id="apellido"   />

          <label for="">Ciudad</label>
          <input type="text" class="form-control" name="ciudad"  id="ciudad" />

          <label for="">Direccion</label>
          <input type="text" class="form-control" name="direccion"  id="direccion" >

          <label for="">Telefono</label>
          <input type="text" class="form-control" name="telefono"  id="telefono" >

          <label for="">Email</label>
          <input type=mail class="form-control" name="telefono" id="email" >
              </div>   
      </form>
 </div>   
 <div class="modal-footer">
      <center><button type="submit" class="btn btn-success" id="guardar" data-dismiss="modal"><span class="glyphicon glyphicon-refresh"></span> Actualizar</button>
      
      <button type="submit" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cerrar</button></center>
  <script language="JavaScript" type="text/javascript">
            $("#guardar").click(function(){
               $.post('modificar_cliente',{
               id_cliente: $("#id_cliente").val(),
               nombre: $("#nombre").val(),
               apellido: $("#apellido").val(),
               ciudad: $("#ciudad").val(),
               direccion: $("#direccion").val(),
               telefono: $("#telefono").val(),
               email: $("#email").val(),
              },function(datos){   
                 $("#"+$("#id_cliente").val()+" #1").text($("#nombre").val());
                 $("#"+$("#id_cliente").val()+" #2").text($("#apellido").val());
                 $("#"+$("#id_cliente").val()+" #3").text($("#ciudad").val());
                 $("#"+$("#id_cliente").val()+" #4").text($("#direccion").val());
                 $("#"+$("#id_cliente").val()+" #5").text($("#telefono").val());
                 $("#"+$("#id_cliente").val()+" #6").text($("#email").val());
                   alert("Modificacion Correcta");
              }
              )
            }
            );
            </script>     
    </div>
  </div>
</div>
</div>

<?php $contenido = ob_get_clean(); ?>
<?php include "base2.php"; ?>
