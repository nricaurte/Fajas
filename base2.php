<?php ob_start(); ?>
<?php
  if(isset($_SESSION['nombre'])){
        include 'plantillas/menu_a.php';
    }?>
<?php $menu = ob_get_clean(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fajas RosiWar</title>
            <meta name="description" content="">
            <meta name="viewport" content="width=device-width">
            <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
            <link rel="stylesheet" href="/Fajas-RosyWar/css/bootstrap.css">
            <link rel="stylesheet" href="/Fajas-RosyWar/css/main.css">
            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
  </head>
  <body >
<div class="col">
 <div class="container ">
          <header>
            <div class="container ">                       
                        <h1 class="texto tamtex2 text-primary">Fajas Rosy War</h1>
            </div>
        </header>
   <?php echo $menu; ?>
   <?php echo $contenido; ?>
     </div>
      <div class="container">
    <footer class="color5 texto1 tamtex1">
            <div class="container">
                    <p>Derechos reservados @2014 Fernando Ricaurte</p>
            </div>
        </footer>
    </div>
  
    <script language="javascript" type="text/javascript" src="/Fajas-RosyWar/js/jquery.js"></script>
    <script language="javascript" type="text/javascript" src="/Fajas-RosyWar/js/jquery.validate.js"></script>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="/Fajas-RosyWar/js/bootstrap.min.js"></script>
  </body>
</html>

