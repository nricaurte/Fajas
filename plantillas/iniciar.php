<?php ob_start(); ?>

            <section id="miSlide" class="carousel slide">
                <ol class="carousel-indicators">
                    <li data-target="#miSlide" data-slide-to="0" class="active"></li>
                    <li data-target="#miSlide" data-slide-to="1"></li>
                    <li data-target="#miSlide" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="item active">
                        <img src="/Fajas-RosyWar/img/img1.jpg" class="adaptar">
                    </div>
                    <div class="item">
                        <img src="/Fajas-RosyWar/img/img2.jpg" class="adaptar">
                    </div>
                    <div class="item">
                        <img src="/Fajas-RosyWar/img/img3.jpg" class="adaptar">
                    </div>
                </div>

                <a href="#miSlide" class="left carousel-control" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a href="#miSlide" class="right carousel-control" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </section><br>

<script>
    $(document).ready(function(){
        $('.carousel').carousel({
            interval: 2500
        });
    });
</script>

 <section >


  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
    <br>
  <div class="panel panel-default center">
    <div class="panel-heading">
         <h3 class="panel-title">Iniciar Sesion</h3>
  </div>
       <div class="panel-body">
         <form role="form" method="post" >
                    <label>ID: </label>
                       <div class="input-group">
                    
                          <span class="input-group-btn">
                            <label class="btn btn-default" id="filter-clear"><span class="glyphicon glyphicon-user"></span></label>
                          </span>
                        <input type="text" name="idu" class="form-control"  placeholder="ID" required>
                       </div>
                      <label>Password: </label>
                      <div class="input-group">
                   
                        <span class="input-group-btn">
                          <label class="btn btn-default" id="filter-clear"><span class="glyphicon glyphicon-link"></span></label>
                        </span>
                        <input type="password" name="pass" class="form-control"  placeholder="Password" required>

                      </div>
                    <br>
                <button class="btn btn-success" id="Enviar"><span class="glyphicon glyphicon-share-alt"></span> Iniciar Sesion</button>
           
         </form>
     
    </div>
  </div>
</div>
 </section >
   <section class="navbar-inverse">
            <div class="container">
                <div >
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <h3>Quienes Somos</h3><hr>
                        <p align="justify">Fajas Rosi – War es  una  micro empresa enfocada a la elaboración de fajas de diferentes tipos que se  ajusten a la necesidad que cada mujer pueda tener para mejorar su calidad  de vida, brindando sus productos a todas las  mujeres colombianas.</p>
                                <h3>Mision</h3><hr>
                        <p align="justify">Somos una Compañía que orienta los recursos  de la empresa hacia la plena satisfacción de las necesidades de nuestro  cliente, elaborando productos de excelente calidad, a través de la realización  de diferentes actividades basado en el trabajo en equipo, la responsabilidad y  el cumplimiento, mejorando continuamente en cada uno de los procesos que  contribuyan a elevar los niveles de calidad</p>
                                <h3>Vision</h3><hr>
                        <p align="justify">Velar por un proceso de mejoramiento  continuo para seguir ofreciendo productos de excelencia, mediante una gestión  proactiva con proveedores, clientes y un equipo humano calificado y así poder  incrementar nuestra participación a nivel nacional contribuyendo a las  expectativas de rentabilidad y crecimiento</p>
                    </div>
                </div>
            </div><br>
        </section>
    
<?php $contenido = ob_get_clean(); ?>
<?php include "base.php"; ?>