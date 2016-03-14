<nav class="navbar navbar-fixed-top topedegama">
          <div class="container-fluid">
            <div class="navbar-header">
              <button class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!--Marca del nav -->
              <a href="#" class="navbar-brand"><img src="../img/logos/logo1.png" class="img-responsive marca" alt="Responsive image"></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="../index.php">Home</a></li>
                 <!-- dropdown de productos -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Productos<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="ecopet.php">Eco-Pet</a></li>
                    <li><a href="hogar.php">Hogar</a></li>
                    <li><a href="#">Oficinas</a></li>
                    <li><a href="bodas.php">Bodas</a></li>
                    <li><a href="decoracion.php">Decoración</a></li>
                  </ul>
                </li>

                <!-- dropdown de blog -->
                <li><a href="blog.php" role="button">Blog</a>
                </li>
                
                <!--Dropdown de quienes somos -->
                <li class="dropdown">
                  <a href="quienes.php" role="button">Quienes Somos</span></a>
                </li>

                <!-- dropdown de blog -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contactanos<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#" data-toggle="modal" data-target="#help">Formulario de Contacto</a></li>
                    <li><a href="ask.php">Preguntas Frecuentes</a></li>
                  </ul>
                </li>
                                 
                <li><a href="login.php">Iniciar Sesión</a></li>
                <li><a href="register.php">Registrate</a></li>
              </ul>
            </div>
          </div>
        </nav>

        <?php include 'contac.php'; ?>