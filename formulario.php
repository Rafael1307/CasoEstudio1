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
      <div class="container">
      
        <div class="row">
            
          <div class="col-md-6 mb-5 mb-md-0">
          <form action="registroc.php" method="POST">
            <h2 class="h3 mb-3 text-black">Registro</h2>
            <div class="p-3 p-lg-5 border">
              
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_fname" class="text-black">Nombre <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_fname" name="cnombre" required>
                </div>
                <div class="col-md-6">
                  <label for="c_lname" class="text-black">Apellido <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_lname" name="capellido" required>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_fname" class="text-black">Correo <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" id="c_fname" name="ccorreo" required>
                </div>
                <div class="col-md-6">
                  <label for="c_lname" class="text-black">Contraseña <span class="text-danger">*</span></label>
                  <input type="password" class="form-control" id="c_lname" name="cpass"required>
                </div>
              </div>

            

              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_address" class="text-black">Telefono <span class="text-danger">*</span></label>
                  <input type="number" class="form-control" id="c_address" name="ctel" required>
                </div>
              </div>

              

              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_address" class="text-black">Fecha de nacimiento <span class="text-danger">*</span></label>
                  <input type="date" class="form-control" id="c_address" name="cfecha" max="2003-12-31" required>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_address" class="text-black">Pais <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_address" name="cpais" required>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_address" class="text-black">Estado <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_address" name="cestado" required>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_address" class="text-black">Ciudad <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_address" name="cciudad" required>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_address" class="text-black">Direccion <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_address" name="cdireccion" required>
                </div>
              </div>

              <div class="form-group">
                    <button class="btn btn-primary btn-lg py-3 btn-block" type="submit">Registrate</button>
                  </div>
            </div>
          </form>
          </div>
          <div class="col-md-6">

            <div class="row mb-5">
              <div class="col-md-12">
                  <form action="login.php" method="POST">
                <h2 class="h3 mb-3 text-black">Iniciar Sesion</h2>
                <div class="p-3 p-lg-5 border">
                  
                <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_fname" class="text-black">Correo <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_fname" name="ccorreo" required>
                </div>
                <div class="col-md-6">
                  <label for="c_lname" class="text-black">Contraseña <span class="text-danger">*</span></label>
                  <input type="password" class="form-control" id="c_lname" name="cpass" required>
                </div>
                
              </div>
              <div class="form-group">
                    <button class="btn btn-primary btn-lg py-3 btn-block" >Iniciar</button>
                  </div>
                </div>
                  </form>
              </div>
            </div>
            

          </div>
        </div>
        <!-- </form> -->
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