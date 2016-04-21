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
            </div><strong>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="../index.php">Home</a></li>
                 <!-- dropdown de productos -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Productos<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="../views/ecopet.php">Eco-Pet</a></li>
                    <li><a href="../views/hogar.php">Hogar</a></li>
                    <li><a href="../views/oficina.php">Oficinas</a></li>
                    <li><a href="../views/bodas.php">Bodas</a></li>
                    <li><a href="../views/decoracion.php">Decoración</a></li>
                  </ul>
                </li>

                <!-- dropdown de blog -->
                <li><a href="../views/blog.php" role="button">Blog</a>
                </li>
                
                <!--Dropdown de quienes somos -->
                <li class="dropdown">
                  <a href="../views/quienes.php" role="button">Quienes Somos</span></a>
                </li>

                <!-- dropdown de blog -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contactanos<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#" data-toggle="modal" data-target="#help">Formulario de Contacto</a></li>
                    <li><a href="../views/ask.php">Preguntas Frecuentes</a></li>
                  </ul>
                </li>
                                 
                <li><a href="../views/login.php">Iniciar Sesión</a></li>
                <li><a href="../views/register.php">Registrate</a></li>
              </ul>
            </div></strong>
          </div>
        </nav>

        <?php include 'contac.php'; ?>