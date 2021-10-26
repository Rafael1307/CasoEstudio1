<?php
    $enlace = mysqli_connect("localhost", "root", "", "casoestudio");
    session_start();

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
                  <li><a href="irperfil.php"><span class="icon icon-person"></span></a></li>
                  
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

    <div class="site-blocks-cover" style="background-image: url(images/hero_1.jpg);" data-aos="fade">
      <div class="container" style="background-color: rgba(205, 205,205, .8);">
        <div class="row align-items-start align-items-md-center justify-content-end">
          <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
            <h1 class="mb-2">NEIL GAIMAN, AMERICAN GODS</h1>
            <div class="intro-text text-center text-md-left">
              <h3 class="mb-3" style="color: black">A mi modo de ver, una ciudad no es una ciudad sin una librería. Puede llamarse a sí misma ciudad, pero a menos que tenga una librería no engaña a un alma.</h3>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="site-section site-blocks-2">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
            <a class="block-2-item" href="#" onclick="javascript:document.getElementById('aventuraf').submit();
return false;">
              <form action="catcat.php" method="POST" id="aventuraf"><input type="hidden" value="Aventura" name="gene"></form>
              <figure class="image">
                <img src="images/fondo.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <h3>Aventura</h3>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
            <a class="block-2-item" href="#" onclick="javascript:document.getElementById('cff').submit();
return false;">
            <form action="catcat.php" method="POST" id="cff"><input type="hidden" value="Ciencia Ficcion" name="gene"></form>
              <figure class="image">
                <img src="images/fondo.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">>
                <h3>Ciencia Ficcion</h3>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
            <a class="block-2-item" href="#" onclick="javascript:document.getElementById('infaf').submit();
return false;">
            <form action="catcat.php" method="POST" id="infaf"><input type="hidden" value="Infantil" name="gene"></form>
              <figure class="image">
                <img src="images/fondo.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <h3>Infantil</h3>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
            <a class="block-2-item" href="#" onclick="javascript:document.getElementById('terrf').submit();
return false;">
            <form action="catcat.php" method="POST" id="terrf"><input type="hidden" value="Terror" name="gene"></form>
              <figure class="image">
                <img src="images/fondo.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <h3>Terror</h3>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
            <a class="block-2-item" href="#" onclick="javascript:document.getElementById('fantaf').submit();
return false;">
            <form action="catcat.php" method="POST" id="fantaf"><input type="hidden" value="Fantasia" name="gene"></form>
              <figure class="image">
                <img src="images/fondo.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <h3>Fantasia</h3>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
            <a class="block-2-item" href="#" onclick="javascript:document.getElementById('polif').submit();
return false;">
            <form action="catcat.php" method="POST" id="polif"><input type="hidden" value="Policiaca" name="gene"></form>
              <figure class="image">
                <img src="images/fondo.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <h3>Policiaca</h3>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
            <a class="block-2-item" href="#" onclick="javascript:document.getElementById('romaf').submit();
return false;">
            <form action="catcat.php" method="POST" id="romaf"><input type="hidden" value="Romance" name="gene"></form>
              <figure class="image">
                <img src="images/fondo.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <h3>Romance</h3>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
            <a class="block-2-item" href="#" onclick="javascript:document.getElementById('eduf').submit();
return false;">
            <form action="catcat.php" method="POST" id="eduf"><input type="hidden" value="Educacion" name="gene"></form>
              <figure class="image">
                <img src="images/fondo.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <h3>Educacion</h3>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
            <a class="block-2-item" href="#" onclick="javascript:document.getElementById('tecnof').submit();
return false;">
            <form action="catcat.php" method="POST" id="tecnof"><input type="hidden" value="Tecnologia" name="gene"></form>
              <figure class="image">
                <img src="images/fondo.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <h3>Tecnologia</h3>
              </div>
            </a>
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