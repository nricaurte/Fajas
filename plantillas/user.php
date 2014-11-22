 <?php ob_start(); ?>
<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">

  <div class="panel panel-info">
    <div class="panel-heading">
      <h3 class="panel-title">Usuarios</h3>
    </div>
    <div class="panel-body">
      <table class="table table-condensed">
        <thead>
          <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
           <?php foreach($usuario as $row){ ?>
        
           <tr id='<?php echo $row['id_usuario']; ?>'>
           <td><?php echo $row['id_usuario']; ?></td>
           <td id="1"><?php echo $row['email']; ?></td>
           <td id="2"><?php echo $row['nombre']; ?></td>
           <td id="3"><?php echo $row['apellido']; ?></td>
           <td>
           <center><a class="btn btn-success" data-toggle="modal" data-target="#ventana" id="<?php echo $row['id_usuario']; ?>"><span class="glyphicon glyphicon-edit"></span> Editar</a></center>
            <script language="JavaScript" type="text/javascript">
            $("#<?php echo $row['id_usuario']; ?>").click(function(){
              $.post('consultar_user',{
                id: <?php echo $row['id_usuario']; ?>
              },function(datos){
                  datos = $.parseJSON(datos);     
               document.getElementById('id_usuario').value =datos['id_usuario'];
               document.getElementById('email').value =datos['email'];
               document.getElementById('nombre').value =datos['nombre'];
               document.getElementById('apellido').value =datos['apellido'];
              }
              )
            }
            );
            </script>
          </td>
           <td>   
            <a class="btn btn-danger" id="eli<?php echo $row['id_usuario']; ?>" href="eliminar_user?id=<?php echo $row['id_usuario']; ?>"><span class="glyphicon glyphicon-trash blue"></span></a> 
          </td>
          </tr>
              <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<div class="container">

  <div class="col-xs-20 col-sm-4 col-md-12 col-lg-4">
  <div class="panel panel-default center">
    <div class="panel-heading">
         <h3 class="panel-title">Crear Usuario</h3>
  </div>
       <div class="panel-body">
         <form role="form" method="post" action="/Fajas-RosyWar/index.php/crear_user">
           <div class="form-group">
                    <label>ID: </label>
                    <input type="text" name="ID" class="form-control"  placeholder="ID" required>
                     <label>Email: </label>
                    <input type="email" name="email" class="form-control"  placeholder="Email" required>
                     <label>Nombre: </label>
                    <input type="text" name="name" class="form-control"  placeholder="Nombre" required>
                     <label>Apellido: </label>
                    <input type="text" name="apellido" class="form-control"  placeholder="Apellido" required>
                    <label>Password: </label>
                    <input type="password" name="pass" class="form-control"  placeholder="Password" required>
              </div>
               <center><button class="btn btn-success" id="Enviar"><span class="glyphicon glyphicon-share-alt"></span> Crear</button></center>
           
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
        <center><h3>Editar Usuario</h3></center>
      </div>
      <div class="modal-body">
       <form action="modificar_cliente" method="post">
        <div class="form-group">
          <label for="">ID</label>
          <input type="text" name="id_usuario" class="form-control"  id="id_usuario" readonly="readonly"/>

          <label for="">Email</label>
          <input type="email" class="form-control" name="email"  id="email"  />

          <label for="">Nombre</label>
          <input type="text" class="form-control" name="nombre" id="nombre"   />

          <label for="">Apellido</label>
          <input type="text" class="form-control" name="apellido"  id="apellido" />

              </div>   
      </form>
 </div>   
 <div class="modal-footer">
      <center><button type="submit" class="btn btn-success" id="guardar" data-dismiss="modal"><span class="glyphicon glyphicon-refresh"></span> Actualizar</button>
      
      <button type="submit" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cerrar</button></center>
 <script type="text/javascript">
  $("#guardar").click(function(){
               $.post('modificar_user',{
               id_usuario: $("#id_usuario").val(),
               email: $("#email").val(),
               nombre: $("#nombre").val(),
               apellido: $("#apellido").val(),
              },function(datos){   
                 $("#"+$("#id_usuario").val()+" #1").text($("#email").val());
                 $("#"+$("#id_usuario").val()+" #2").text($("#nombre").val());
                 $("#"+$("#id_usuario").val()+" #3").text($("#apellido").val());
            
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
