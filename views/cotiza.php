<!doctype html>
<html class="no-js" lang="es">
<head>
    <meta charset="utf-8">
    <title>Formulario de Compra</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Estilos-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../css/mainEdwin.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/products.css">


</head>
<body>
    <!-- Barra de navegación -->
    <?php include 'nav.php'; ?>
    <?php include '../views/detalle.php'; ?>

    <!--Blog-->
    <div class="container vcenter">
      <div class="row">
        <div class="blogback col-md-offset-1 col-md-10">
          <div class="cabez"><br>
            <h1 class="text-center">Cotiza tus Ideas</h1><br>
        </div>
        <br>
                <h3 class="text-center">Estamos encantados en ayudarte</h3>
                <!-- formulario de ingreso de duda-->
                <form role="form">
                    <div class="form-group detalle">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control dnombre" id="name" placeholder="Ingrese sus nombres">
                    </div>

                    <div class="form-group detalle">
                        <label for="pwd">Comentanos tu Idea</label>
                        <textarea class="form-control" id="pwd" rows="7" name="comment" placeholder="Te responderemos lo mas antes posible" >
                        </textarea>
                    </div>
                    <div class="detalle">
                        <input type="text" class="form-control col-lg-8 dnombre" id="name" placeholder="Dirección Imagen">
                        <button class="btn btn-default col-lg-2">Subir imagen</button>

                    </div>
                    <br>
                </form>
                <br> <button class="btn btn-hola col-lg-offset-9 col-lg-2">Enviar Cotización</button><br><br>
    </div>
</div>
</div>
<br>

<!--Footer-->
<div class="container-fluid">
        <div class="row">
            <div class="col-lg-offset-2 col-lg-8 col-sm-offset-1 col-sm-10">
                <?php include 'footer.php'; ?>
            </div>
        </div>
    </div>
<!--fin del DOM-->
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

<script src="../js/vendor/bootstrap.min.js"></script>

<script src="../js/nav.js"></script>
</body>
</html>
