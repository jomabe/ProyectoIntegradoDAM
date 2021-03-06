<!-- David Marí, Paco Monrabal, Adrian Poveda, Borja Royuela, Jose Vicente Marí, Victor Olivares -->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Hotel DAM | Servicios</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<!-- Aquí implementamos la función de traductor -->
<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'es', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</head>
<body id="page2">
<div class="bg1">
  <div class="bg2">
    <div class="main">
      <!-- Cabecera -->
      <header>
        <h1><a href="index.php" id="logo">DAMHotel</a></h1>
        <div class="department"> Florida Universitaria, Catarroja<br>
          <span>Teléfono: 96 122 03 80</span> <br>
          <span>Correo: info@florida.es </span> </div>
      </header>
      <div class="box">
        <nav>
          <ul id="menu">
            <li><a href="index.php">Inicio</a></li>
            <li class="active"><a href="servicios.php">Servicios</a></li>
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
              <div class="col2 pad">
                <h2><img src="images/title_marker1.jpg" alt="">Servicios Principales</h2>
                <div class="wrapper pad_bot2">
                  <figure class="left marg_right1"><img src="images/rest_1.jpg" alt=""></figure>
                  <p class="pad_bot1"><strong class="color3">Restaurante</strong><br>
                    Disfruta de una buena comida en nuestro servicio restaurante, donde podrás reservar una mesa en recepción.</p>
                   </div>
                <div class="wrapper">
                  <figure class="left marg_right1"><img src="images/spa_1.jpg" alt=""></figure>
                  <p class="pad_bot1"><strong class="color3">Servicio de Spa</strong><br>
                    Relajate en nuestro Spa el cual incluye: Baños Termales, Jacuzzi, Sauna, Servicio de Masaje, etc. Pregunta en recepción para reservar una cita.</p>
                  </div>
              </div>
            </div>
          </div>
          <div class="pad">
            <div class="wrapper line3">
              <div class="col2">
                <h2>Servicios Principal</h2>
                <p class="pad_bot1"><strong class="color2">Tenemos varios servicios a disposición del cliente</strong> </p>
                <p class="pad_bot1"> Come en el restaurante. Relajate en el Spa. Disfruta de nuestros campos de mini-golf o juega unas partidas en nuestras pistas de tenis y padel.</p>
                <div class="wrapper pad_bot2">
                  <div class="col1">
                    <ul class="list1">
                      <li><a href="#">Reserva una mesa en el restaurante</a></li>
                      <li><a href="#">Reserva una sesión de Masaje</a></li>
                      <li><a href="#">Resrva una Pista de Tenis o Padel</a></li>
                      <li><a href="#">Reserva para jugar en el mini-golf</a></li>
                    </ul>
                  </div>
                  <div class="col1 pad_left1">
                    <ul class="list1">
                      <li><a href="#">Temporalmente no Disponible</a></li>
                      <li><a href="#">Temporalmente no Disponible</a></li>
                      <li><a href="#">Temporalmente no Disponible</a></li>
                      <li><a href="#">Temporalmente no Disponible</a></li>
                    </ul>
                  </div>
                </div>
                <a href="#" class="button1">Leer Más</a> </div>
              <div class="col1 pad_left1">
                <h2>Ofertas Especiales</h2>
                <div class="wrapper">
                  <figure class="left marg_right1"><img src="images/page2_img3.jpg" alt=""></figure>
                  <p class="pad_bot1"><strong class="color2">Planta 23</strong></p>
                  <p class="pad_bot1">Oferta especial en las habitaciones del piso 23 este mes.</p>
                </div>
                <div class="wrapper">
                  <figure class="left marg_right1"><img src="images/page2_img4.jpg" alt=""></figure>
                  <p class="pad_bot1"><strong class="color2">Suite</strong></p>
                  <p class="pad_bot2">Durante esta semana la Suite esta diponible con un 33% de descuento.</p>
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
          <li><a href="index.php">Inicio</a></li>
          <li class="active"><a href="services.php">Servicios</a></li>
          <li><a href="booking.php">Tour</a></li>
          <li><a href="rooms.php">Habitaciones</a></li>
          <li class="last"><a href="locations.php">Contacto</a></li>
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
  <!-- Final Pie de Pagina -->
</div>
<script src="js/datepicker_llegada.js"></script>
<script src="js/datepicker_salida.js"></script>
</body>
</html>