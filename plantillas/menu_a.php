
    <nav class="navbar navbar-menu">
            <div class="navbar-header">
                <a href="info" class="navbar-brand"><span class="glyphicon glyphicon-home"></span>HOME</a>
            </div>
           
            <div class="collapse navbar-collapse navbar-ex1-collapse">
             <ul class="nav navbar-nav">
             <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span  class="glyphicon glyphicon-book"></span>Productos<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
            <li><a href="productos"><span class="glyphicon glyphicon-book"></span>Catalogo</a></li>
            <li><a href="ingreso_producto"><span class="glyphicon glyphicon-list-alt"></span>Ingresar Producto</a></li>
           </ul>
           </li>
                    <li><a href="clientes"><span class="glyphicon glyphicon-list"></span>  Clientes</a></li>
                    <li><a href="ver_user"><span class="glyphicon glyphicon-folder-open "></span> Usuarios</a></li>
                    <li ><a href="facturacion"><span class="glyphicon glyphicon-book"></span>Facturacion</a></li>
                </ul>
             <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['nombre']; ?><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="micuenta"><span class="glyphicon glyphicon-cog"></span> Mi Cuenta</a></li>
            <li><a href="salir"><span class="glyphicon glyphicon-log-out"></span> Salir</a></li>
          </ul>
         </li>
         </ul>
</div>
</nav>    
