 <?php ob_start(); ?>
<div class="container">

  <div class="col-xs-20 col-sm-4 col-md-12 col-lg-4">
  <div class="panel panel-default center">
    <div class="panel-heading">
         <h3 class="panel-title">Editar Cliente</h3>
  </div>
       <div class="panel-body">
         <?php foreach($usuarios as $row): ?>
    
                    <label>ID: </label>
                    <input type="text" name="ID" class="form-control"  placeholder="ID" value="<?php echo $row["id_cliente"] ?>" required>
                     <label>Nombre: </label>
                    <input type="text" name="name" class="form-control"  placeholder="Nombre"  value="<?php echo $row["nombre"] ?>"  required>
                     <label>Apellido: </label>
                    <input type="text" name="apellido" class="form-control"  placeholder="Apellido"  value="<?php echo $row["apellido"] ?>"  required>
                         <label>Ciudad: </label>
                    <input type="text" name="ciudad" class="form-control"  placeholder="Ciudad" value="<?php echo $row["ciudad"] ?>"  required>
                         <label>Direcion: </label>
                    <input type="text" name="direccion" class="form-control"  placeholder="Direccion" value="<?php echo $row["Direccion"] ?>"  required>
                         <label>Telefono: </label>
                    <input type="text" name="telefono" class="form-control"  placeholder="Telefono" value="<?php echo $row["telefono"] ?>"  required>
                         <label>Email: </label>
                    <input type="email" name="email" class="form-control"  placeholder="Email" value="<?php echo $row["email"] ?>"  required>
             

         <?php endforeach ?>    
     </div>
    </div>
  </div>
</div>

 </div>
<?php $contenido = ob_get_clean(); ?>
<?php include "base2.php"; ?>
