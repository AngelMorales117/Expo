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
            <h1 class="text-center">Formulario de Compra</h1><br>
        </div>
        <br>

        <!--Tabla de precios-->

        <table  class="table ">

            <!-- Encabezado de tabla-->
            <thead>
                <tr>
                    <th></th>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th></th>
                    <th>$/U</th>
                    <th>SubTotal</th>
                </tr>
            </thead>

            <!-- Cuerpo de tabla-->
            <tbody>
                <tr>
                    <td><a href="" class="iconomenos"><span class="glyphicon glyphicon-remove"></span></a></td>
                    <td><a href=""  onClick="hideButton()" data-toggle="modal" data-target="#detalle"> Escritorio Clasico</a></td>
                    <td>1</td>
                    <td>
                        <a href="" class="iconomenos"><span class="glyphicon glyphicon-minus"></span></a>
                        <a href="" class="iconomas"><span class="glyphicon glyphicon-plus"></span></a>
                    </td>
                    <td>$109.99</td>
                    <td>$109.99</td>
                </tr>
                <tr>
                    <td><a href="" class="iconomenos"><span class="glyphicon glyphicon-remove"></span></a></td>
                    <td><a href="">Sala de estar</a></td>
                    <td>1</td>
                    <td>
                        <a href="" class="iconomenos"><span class="glyphicon glyphicon-minus"></span></a>
                        <a href="" class="iconomas"><span class="glyphicon glyphicon-plus"></span></a>
                    </td>
                    <td>$450.99</td>
                    <td>$450.99</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><strong>Total</strong></td>
                    <td>$560.98</td>
                </tr>

                <!--Botones de compra y cancelar -->
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><button class="btn btn-hola" onClick="comprar()">Comprar</button><button class="btn btn-hola hidden-xs  col-sm-offset-1" onClick="cancelar()">Cancelar</button></td>
                </tr>
                <tr class=" hidden-sm hidden-md hidden-lg">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><button class="btn btn-hola" onClick="comprar()">Cancelar</button></td>
                </tr>
            </tbody>
        </table>



    </div>
</div>
</div>
<br>

<!--Footer-->

                <?php include 'footer.php'; ?>

<!--fin del DOM-->
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

<script src="../js/vendor/bootstrap.min.js"></script>

<script src="../js/nav.js"></script>
</body>
</html>
