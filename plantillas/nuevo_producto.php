 <?php ob_start(); ?>
<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
  <div class="panel panel-danger">
    <div class="panel-heading">
      <center><h3 class="panel-title">Productos</h3></center>
    </div>
    <div class="panel-body">
      <table class="table table-condensed table-hover">
        <thead>
         <tr>
           <th>Id_Producto</th>
           <th>Descripcion</th>
           <th>Nombre</th>
           <th>Cantidad</th>
           <th>Precio</th>
        </thead>
       <tbody >
         <?php foreach($productos as $row){ ?>
        
           <tr id='<?php echo $row['id_producto']; ?>'>
           <td><?php echo $row['id_producto']; ?></td>
           <td id="1"><?php echo $row['descripcion']; ?></td>
           <td id="2"><?php echo $row['nombre']; ?></td>
           <td id="3"><?php echo $row['cantidad']; ?></td>
           <td id="4"><?php echo $row['precio']; ?></td>
           <td>
          <center><a class="btn btn-success" data-toggle="modal" data-target="#ventana" id="<?php echo $row['id_producto']; ?>"><span class="glyphicon glyphicon-edit"></span> Editar</a></center>
            <script language="JavaScript" type="text/javascript">
            $("#<?php echo $row['id_producto']; ?>").click(function(){
              $.post('consultar_producto',{
                id: <?php echo $row['id_producto']; ?>
              },function(datos){
                  datos = $.parseJSON(datos);     
               document.getElementById('id_producto').value =datos['id_producto'];
               document.getElementById('descripcion').value =datos['descripcion'];
               document.getElementById('nombre').value =datos['nombre'];
               document.getElementById('cantidad').value =datos['cantidad'];
               document.getElementById('precio').value =datos['precio'];
              }
              )
            }
            );
            </script>
          </td>
          <td>   
            <a class="btn btn-danger" id="eli<?php echo $row['id_producto']; ?>" href="eliminar_producto?id=<?php echo $row['id_producto']; ?>"><span class="glyphicon glyphicon-trash blue"></span></a> 
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
         <h3 class="panel-title">Crear Producto</h3>
  </div>
       <div class="panel-body">
         <form role="form" method="post" action="crear_producto"   enctype="multipart/form-data">
               <div class="form-group">
                    <label>Id_Producto: </label>
                    <input type="text" name="id_producto" class="form-control" placeholder="Id_producto" required>
                     <label>Descripcion: </label>
                    <input type="text" name="descripcion" class="form-control"  placeholder="Descripcion" required>
                     <label>Nombre: </label>
                    <input type="text" name="nombre" class="form-control"  placeholder="Nombre" required>
                         <label>Cantidad: </label>
                    <input type="text" name="cantidad" class="form-control"  placeholder="Cantidad" required>
                         <label>Precio: </label>
                    <input type="text" name="precio" class="form-control"  placeholder="Precio" required>
                    <label>Archivo: </label>
                    <input type="file" name="archivo" class="form-control"  placeholder="archivo" required>
              
            
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
        <center><h3>Editar Producto</h3></center>
      </div>
      <div class="modal-body">
       <form action="modificar_cliente" method="post">
        <div class="form-group">
          <label for="">Id_producto</label>
          <input type="text" name="id_producto" class="form-control"  id="id_producto" readonly="readonly"/>

          <label for="">Descripcion</label>
          <input type="text" class="form-control" name="descipcion"  id="descripcion"  />

          <label for="">Nombre</label>
          <input type="text" class="form-control" name="nombre" id="nombre"   />

          <label for="">Cantidad</label>
          <input type="text" class="form-control" name="cantidad"  id="cantidad" />

          <label for="">Precio</label>
          <input type="text" class="form-control" name="precio"  id="precio" >

              </div>   
      </form>
 </div>   
 <div class="modal-footer">
      <center><button type="submit" class="btn btn-success" id="guardar" data-dismiss="modal"><span class="glyphicon glyphicon-refresh"></span> Actualizar</button>
      
      <button type="submit" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cerrar</button></center>
      <script language="JavaScript" type="text/javascript">
            $("#guardar").click(function(){
               $.post('modificar_producto',{
               id_producto: $("#id_producto").val(),
               descripcion: $("#descripcion").val(),
               nombre: $("#nombre").val(),
               cantidad: $("#cantidad").val(),
               precio: $("#precio").val(),
              },function(datos){   
                 $("#"+$("#id_producto").val()+" #1").text($("#descripcion").val());
                 $("#"+$("#id_producto").val()+" #2").text($("#nombre").val());
                 $("#"+$("#id_producto").val()+" #3").text($("#cantidad").val());
                 $("#"+$("#id_producto").val()+" #4").text($("#precio").val());
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
