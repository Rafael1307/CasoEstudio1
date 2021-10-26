<?php
    $enlace = mysqli_connect("localhost", "root", "", "casoestudio");
    session_start();
    $booka = $_SESSION['booka'];

    $clienteA = $_SESSION['clienteA'];
    ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Shoppers &mdash; Colorlib e-Commerce Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">
  <header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
              <form action="catbus.php" method="POST" class="site-block-top-search" id="busqueda">
                <a href="#" onclick="javascript:document.getElementById('busqueda').submit();
return false;"><span class="icon icon-search2"></span></a>
                <input type="text" class="form-control border-0" placeholder="Buscar" name="buscar">
              </form>
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
                <a href="index2.php" class="js-logo-clone">Libros</a>
              </div>
            </div>

            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
              <div class="site-top-icons">
                <ul>
                  <li><a href="#"><span class="icon icon-person"></span></a></li>
                  
                  <li>
                  <a href="ircarrito.php" class="site-cart">
                      <span class="icon icon-shopping_cart"></span>
                      <?php $contsql = "SELECT COUNT(*) as ttl FROM carrito WHERE clientecarro = '$clienteA'";
  $cont = mysqli_query($enlace, $contsql);
   $num =  mysqli_fetch_assoc($cont);
?>
                      <span class="count"><?php echo $num['ttl']; ?></span>
                    </a>
                  </li> 
                  
                </ul>
              </div> 
            </div>

          </div>
        </div>
      </div> 
      <nav class="site-navigation text-right text-md-center" role="navigation"> <!--Menu-->
        <div class="container">
          <ul class="site-menu js-clone-nav d-none d-md-block">
          <li><a href="index2.php">Inicio</a></li>
            <li class="has-children active">
              <a href="#">Generos</a>
              <ul class="dropdown">
                <li><a href="#" onclick="javascript:document.getElementById('aventuraf').submit();
return false;">Aventura</a></li>
                <li><a href="#" onclick="javascript:document.getElementById('cff').submit();
return false;">Cincia Ficcion</a></li>
                <li><a href="#" onclick="javascript:document.getElementById('infaf').submit();
return false;">Infantil</a></li>
                <li><a href="#" onclick="javascript:document.getElementById('fantaf').submit();
return false;">Fantasia</a></li>
                <li><a href="#" onclick="javascript:document.getElementById('polif').submit();
return false;">Policiaca</a></li>
                <li><a href="#" onclick="javascript:document.getElementById('terrf').submit();
return false;">Terror</a></li>
                <li><a href="#" onclick="javascript:document.getElementById('romaf').submit();
return false;">Romance</a></li>
                <li><a href="#" onclick="javascript:document.getElementById('eduf').submit();
return false;">Educacion</a></li>
                <li><a href="#" onclick="javascript:document.getElementById('tecnof').submit();
return false;">Tecnologia</a></li>
              </ul>
            </li>
            <li><a href="catfull.php">Catalogo</a></li>
          </ul>
        </div>
      </nav><!--End Menu-->
    </header>
   
    <div class="site-section">
    <?php 
                $autora = "a";
                $generoa = "1";
                $consulta = "SELECT * FROM libros WHERE idLibro = $booka";
                $resultado = mysqli_query($enlace, $consulta);
                while($row = mysqli_fetch_array($resultado)){
                    $autora = $row['Autor'];
                    $generoa = $row['Genero'];
            ?>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="<?php echo $row['Portada'];?>" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-6">
            <h2 class="text-black"><?php echo $row['Titulo'];?></h2>
            <h4 class="text-black">Autor: <?php echo $row['Autor'];?></h4>
            <h4 class="text-black">Editorial: <?php echo $row['Editorial'];?></h4>
            <h4 class="text-black">Publicacion: <?php echo $row['Publicacion'];?></h4>
            <p><?php echo $row['Descripcion'];?></p>
            <p><strong class="text-primary h4">$<?php echo $row['Precio'];?></strong></p>
            <form method="POST" action="addcarrito.php" id="addcar">
                  <input type="hidden" value="<?php echo $booka;?>" name="booka">
                  <input type="hidden" value="<?php echo $row['Precio'];?>" name="pricea">
            <div class="mb-5">
              <div class="input-group mb-3" style="max-width: 120px;">
              <div class="input-group-prepend">
                <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
              </div>
              
              <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" name="cant">
             
              <div class="input-group-append">
                <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
              </div>
            </div>

            </div>
            </form>
            <p><a href="cart.html" class="buy-now btn btn-sm btn-primary" onclick="javascript:document.getElementById('addcar').submit();
return false;">Agregar</a></p>

          </div>
        </div>
      </div>
      <?php } ?>
    </div>
    
    <div class="site-section block-3 site-blocks-2 bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>Productos similares</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="nonloop-block-3 owl-carousel">
            <?php 
                $consulta = "SELECT * FROM libros WHERE Genero = '$generoa'";
                $resultado = mysqli_query($enlace, $consulta);
                while($row = mysqli_fetch_array($resultado)){
            ?>
            
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                  <form action="datos.php" method="POST" id="libro<?php echo $row['idLibro'];?>"><input type="hidden" value="<?php echo $row['idLibro'];?>" name="booka"></form>
                    <img src="<?php echo $row['Portada'];?>" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="#" onclick="javascript:document.getElementById('libro<?php echo $row['idLibro'];?>').submit();
return false;"><?php echo $row['Titulo'];?></a></h3>
                    <p class="text-primary font-weight-bold">$<?php echo $row['Precio'];?></p>
                  </div>
                </div>
              </div> 
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section block-3 site-blocks-2 bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>Mas del mismo autor</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="nonloop-block-3 owl-carousel">
            <?php 
                $consulta = "SELECT * FROM libros WHERE Autor = '$autora'";
                $resultado = mysqli_query($enlace, $consulta);
                while($row = mysqli_fetch_array($resultado)){
            ?>
             <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                  <form action="datos.php" method="POST" id="libro<?php echo $row['idLibro'];?>"><input type="hidden" value="<?php echo $row['idLibro'];?>" name="booka"></form>
                    <img src="<?php echo $row['Portada'];?>" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="#" onclick="javascript:document.getElementById('libro<?php echo $row['idLibro'];?>').submit();
return false;"><?php echo $row['Titulo'];?></a></h3>
                    <p class="text-primary font-weight-bold">$<?php echo $row['Precio'];?></p>
                  </div>
                </div>
              </div> 
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="site-footer border-top">
      <div class="container">
        <div class="row">
          
          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contacto</h3>
              <ul class="list-unstyled">
                <li class="address">Guadalajara, Jalisco, Mexico</li>
                <li class="phone"><a href="tel://23923929210">+52 3323678364</a></li>
                <li class="email">libreria@libros.com</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>