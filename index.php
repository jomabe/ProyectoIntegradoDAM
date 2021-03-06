﻿<!-- David Marí, Paco Monrabal, Adrian Poveda, Borja Royuela, Jose Vicente Marí, Victor Olivares -->
<!DOCTYPE html>
<html lang="es">
<head>
<title>Hotel Dam</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/animate.css" type="text/css" media="all">
<link rel="stylesheet" href="css/login.css" type="text/css" media="all">
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<!-- Aquí implementamos la función de traductor -->
<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'es', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</head>
<body id="page1">
<div class="bg1">
  <div class="bg2">
    <div class="main">
      <!-- Cabecera -->
      <header>
        <h1><a href="index.php" id="logo">DAMHotel</a></h1>
        <div class="department"> Florida Universitaria, Catarroja<br>
          <span>Teléfono: 96 122 03 80</span> <br>
          <span>Correo: info@florida.es </span> <br> 
        </div>
      </header>
      <p>
      <div class="box">
        <nav>
          <ul id="menu">
            <li class="active"><a href="index.php">Inicio</a></li>
            <li><a href="servicios.php">Servicios</a></li>
            <li><a href="tour.php">Tour</a></li>
            <li><a href="habitaciones.php">Habitaciones</a></li>
            <li><a href="contacto.php">Contacto</a></li>
          </ul>
        </nav>
        <!-- Final Cabecera -->
        <!-- Pagina Principal -->
        <article id="content">
          <div class="box1">
            <div class="wrapper">
              <form action="reservar.php" id="form1" method="post">
                <h2>Reservar Habitación</h2>
                <fieldset>
                  <div class="row">Fecha de Llegada: <br><input type="date" name="fechallegada" id="fecha_llegada" required></div><br>
                  <div class="row"><br>Fecha de Salida:<br><input type="date" name="fechasalida" id="fecha_salida" required> </div><br>
                  <div class="row"> <br>
                   <br>Elige pensión:<br>
                      <select form="form1" name="pension">
                          <option>Alojamiento</option>
                          <option>Desayuno</option>
                          <option>Media</option>
                          <option>Completa</option>
                        </select>
                    </div><br><br><br>
                  <br> <div class="wrapper"> <input type="submit" class="button1"></a> <input type="reset" class="button1"></a> </div>
                </fieldset>
              </form>
                <div style="overflow: hidden;">
                <img class="mySlides slideInRight" src="images/img1.jpg" width="640" height="454">
                <img class="mySlides slideInRight" src="images/img2.jpg" width="640" height="454">
                <img class="mySlides slideInRight" src="images/img3.jpg" width="640" height="454">
                <img class="mySlides slideInRight" src="images/img4.jpg" width="640" height="454">
                </div>
            </div>
            <div class="pad">
              <div class="line1">
                <div class="wrapper line2">
                  <div class="col1">
                    <h2><img src="images/title_marker1.jpg" alt="">Mejores Precios</h2>
                    <p class="pad_bot1">Nuestro hotel contiene las mejores habitaciónes en relación calidad precio.</p>
                    </div>
                  <div class="col1 pad_left1">
                    <h2><img src="images/title_marker2.jpg" alt="">Habitaciones</h2>
                    <p class="pad_bot1">Puedes ver una vista general de las habitaciones en las fotos que hay en la parte superior de esta página.</p>
                    </div>
                  <div class="col1 pad_left1">
                    <h2><img src="images/title_marker3.jpg" alt="">Servicios</h2>
                    <p class="pad_bot1">Consulta nuestra pagina de servicios para ver todo lo que ofrecemos</p>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="pad">
            <div class="wrapper line3">
              <div class="col2">
                <h2>¡Bienvenidos a Hotel Desk!</h2>
                <p class="pad_bot1"><strong class="color2">Descubre todo lo que te podemos ofrecer</strong><br>
                  Consulta en recepción o en nuestra pagina web para descubrir las habitaciones y servicios que ofrecemos. </p>
                <p class="pad_bot2"> </p>
                <a href="#" class="button1">Leer Más</a> </div>
              <div class="col1 pad_left1">
                <h2>Sobre Nosotros</h2>
                <div class="wrapper">
                  <figure class="left marg_right1"><img src="images/f_azul.jpg" alt=""></figure>
                  <p class="pad_bot1"><strong class="color2">96 122 03 80</strong></p>
                  <p class="pad_bot2"> Hotel Desk localizado en Catarroja, pagina desarrollada para el proyecto integrado de 1º DAM .</p>
                </div>
                <a href="#" class="button1">Leer Más</a> </div>
            </div>
          </div>
        </article>
        <!--Fin Pagina Principal-->
      </div>
    </div>
  </div>
</div>
<div class="main">
  <!-- Pie de Pagina -->
  <footer>
    <div class="col2">Copyright &copy;<a href="#"> www.hoteldesk.com</a> Proyecto Integrado | DAM
      <nav>
        <ul id="footer_menu">
          <li class="active"><a href="index.php">Inicio</a></li>
          <li><a href="servicios.php">Servicios</a></li>
          <li><a href="tour.php">Tour</a></li>
          <li><a href="habitaciones.php">Habitaciones</a></li>
          <li class="last"><a href="contacto.php">Contacto</a></li>
        </ul>
      </nav>
    </div>
    <div class="col1 pad_left1">
      <ul id="icons">
        <li><a href="#" class="normaltip"><img src="images/icon1.jpg" alt=""></a></li>
        <li><a href="#" class="normaltip"><img src="images/icon2.jpg" alt=""></a></li>
        <li><a href="#" class="normaltip"><img src="images/icon3.jpg" alt=""></a></li>
        <li><a href="#" class="normaltip"><img src="images/icon4.jpg" alt=""></a></li>
      </ul>
    </div>
  </footer>
</div>
<script src="js/datepicker_llegada.js"></script>
<script src="js/datepicker_salida.js"></script>
<script src="js/slideShowAutomatico.js"></script>
</body>
</html>