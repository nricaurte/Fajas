<?php ob_start(); ?>
<div class="container-fluid">
	<div class="row">
		<?php foreach ($productos as $producto) { ?>
			<div class='col-xs-6 col-sm-6 col-md-6 col-lg-6'>
    			<div class='panel panel-success'>
    		 		<div class='panel-heading'>
    					<h4><?php echo $producto['nombre']; ?></h4>
    		  		</div>

    		  		<div class='panel-body'>
    		  			<div class='col-xs-6 col-sm-6 col-md-6 col-lg-6'>
                            <p><b>Codigo:</b><?php echo $producto['id_producto']; ?></p>
                            <p><b>Precio:</b> <?php echo $producto['precio']; ?></p>
                            <p><b>Descripcion:</b><?php echo $producto['descripcion']; ?></p>
                        </div>
                        <div class='col-xs-6 col-sm-6 col-md-6 col-lg-6'>
                            <img class='img-rounded img-responsive' alt='2' src='<?php echo "../".$producto['archivo']; ?>'/>
                        </div>
                    </div>
    			</div>
     		</div>
		<?php } ?>
	</div>
</div>
<?php $contenido = ob_get_clean(); ?>
<?php include "base2.php"; ?>