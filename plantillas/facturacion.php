<?php ob_start() ?>

   <div class="panel panel-default">
          <div class="panel-body">
          <div>
          <div class="col-xs-6 col-md-4">
          <div class="form-group">          
                                    <label class="col-xs-12 col-sm-6 col-md-6 col-lg-6 control-label">N° Factura</label>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 control-label">
                                        <input type="text" class="form-control input-sm" id="numero" value="<?php echo $n_fact;?>" >
                                    </div>

          </div>
          </div>
          <div class="col-xs-6 col-md-4">
          <div class="form-group">          
                                    <label class="col-xs-12 col-sm-6 col-md-4 col-lg-4 control-label">Fecha</label>
                                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
                                    <input type="date" class="form-control input-sm" id="fecha" value="<?php echo strftime("%Y-%m-%d"); ?>" >
                                   </div>


        </div>
        </div>
        <div class="col-xs-6 col-md-4">
        <div class="form-group">          
                                    <label class="col-xs-12 col-sm-6 col-md-4 col-lg-4 control-label">Cajero</label>
                                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
                                    <input type="text" class="form-control input-sm" id="fecha" value="<?php echo $_SESSION['id_usuario']; ?>" readonly="readonly" >
                                   </div>


        </div>
        </div>
        </div>
        

         <div class="col-xs-12 col-md-8">
              <div class="form-group">          
                                    <label class="col-xs-12 col-sm-6 col-md-4 col-lg-4 control-label">Cliente</label>
                                    <select name="cc_cliente" class="form-control input-sm" id="cc_cliente">                                     
                                     <?php foreach ($clientes as $cliente) { ?>
                                        <option value='<?php echo $cliente['id_cliente']; ?>'><?php echo $cliente['id_cliente']." - ".$cliente['nombre']." ".$cliente['apellido']; ?></option>
                                        <?php } ?>
                                    </select> 

                </div>
                 </div>
   


         <form name="hola" class="form-horizontal" >
        
         <div class="col-xs-6 col-md-5">
        <div class="form-group">          
                <label class="col-xs-12 col-sm-6 col-md-4 col-lg-4 control-label">Codigo</label>
                <select name="codigo_p" class="form-control input-sm" id="codigo_p">                                     
                <?php foreach ($productos as $row) { ?>
         <option value='<?php echo $row['id_producto']; ?>'><?php echo $row['id_producto']." - ".$row['nombre']."-".$row['descripcion']; ?></option>
                <?php } ?>
               </select> 

        </div>
        </div>
        <div class="col-xs-6 col-md-5">
        <div class="form-group">          
          <label class="col-xs-12 col-sm-6 col-md-4 col-lg-4 control-label">Cantidad</label>
              <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
              <input type="text" class="form-control input-sm" id="cant"   >
              </div>
        </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2">
  <button type="submit" class="btn btn-primary form-control" id="agregar"><span class="glyphicon glyphicon-plus"></span> Agregar</button>
         </div>

          <script type="text/javascript">
         $("#agregar").click(function(){
             var n= $("#codigo_p").val();
            $.post('consultar_producto',{
                id: n
              },function(datos){
                   alert(datos); 
               var cantidad= $("#cant").val();
                   alert(cantidad);
              datos = $.parseJSON(datos);     
              var total=datos['precio']*cantidad;   
              var nombre =datos['nombre']; 
              var precio=datos['precio'];
     // if(nombre!="" || precio!="" ||cantidad!="" ||precio!="" ){ 
      //tablaDatos.append("<tr><td>"+nombre+"</td><td>"+precio+"</td><td>"+cantidad+"</td><td>"+precio+"</td></tr>"); 
      //}
              alert(precio+total+precio+nombre);
               document.getElementById('1').value =datos['nombre'];

              }
              )
            }
         
            );
            </script> 
         <from>


          </div>
        



<table width="70%" border="0" align="center" cellpadding="0" cellspacing="0" class="tablaDatos" id="tblDatos">
      <tr class="tablaDatosTitulo">
         <td  id="1"><strong>Nombres</strong></td>
         <td id="2"><strong>Apellidos</strong></td>
         <td id="3"><strong>Teléfono</strong></td>
         <td id="4"><strong>Teléfono</strong></td>
      </tr>
</table>

  </div>







 <?php $contenido = ob_get_clean(); ?>
<?php include "base2.php"; ?>
