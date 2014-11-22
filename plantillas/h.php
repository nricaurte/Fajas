 </form>
        



        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table class="table table-responsive table-condensed">
                        <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th id="casa">Cantidad</th>
                                <th>Vlr Unidad</th>
                                <th>IVA</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody id="Filas">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="panel">
                <div class="panel-body">
                    <h3>SubTotal: $ <label id="subtotal">0</label></h3>
                    <h3>IVA: $ <label id="iva">0</label></h3>
                    <h3>Total: $ <label id="total">0</label></h3>
                    <a class="btn btn-success" id="cerrar_v"><span class="glyphicon glyphicon-ok"></span> Registrar</a>
                </div>
            </div>
        </div>
    </div>
</div>  
 </div>
 </div>



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
        <div>

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
        </div>

























