<?php
$pageTitle = 'Home';
require_once 'partials/head.php';
require_once 'partials/navbar.php';
?>

<div class="indexContainer">
  <div id="carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active" data-interval="3000">
        <img src="img/slider1.jpg" class="d-block w-100" alt="slider1">
      </div>
      <div class="carousel-item" data-interval="3000">
        <img src="img/slider2.jpg" class="d-block w-100" alt="slider2">
      </div>
      <div class="carousel-item" data-interval="3000">
        <img src="img/slider3.jpg" class="d-block w-100" alt="slider3">
      </div>
    </div>
  </div>
</div>

    <div class="servicesContainer col-md-12">
      <h2>Nuestros servicios</h2>
      <div class="services col-md-12">
        <div class="oneService">
          <div class="serviceDescription">
            <p>Planes diseñados y adaptados a la necesidad de cada cliente que
            permiten optimizar su desarrollo.</p>
          </div>
          <div class="serviceName">
            <h4 style="font-size: 23px;">Hosting</h4>
          </div>
        </div>
        <div class="oneService">
          <div class="serviceDescription">
            <p>Sitios y herramientas web desarrolladas a medida específica de requerimientos establecidos.</p>
          </div>
          <div class="serviceName">
            <h4 style="font-size: 23px;">Desarrollo Web</h4>
          </div>
        </div>
        <div class="oneService">
          <div class="serviceDescription">
            <p>Diseños adaptables a los dispositivos requeridos: celulares, tablets, notebooks, ordenadores.</p>
          </div>
          <div class="serviceName">
            <h4 style="font-size: 23px;">Diseño Responsive</h4>
          </div>
        </div>
        <div class="oneService">
          <div class="serviceDescription">
            <p>Optimización en motores de búsqueda (S. E. O.) de su sitio para un mejor rendimiento.</p>
          </div>
          <div class="serviceName">
            <h4 style="font-size: 23px;">Posicionamiento</h4>
          </div>
        </div>
      </div>
    </div>
    <div class="infoContainer col-md-12">
      <div class="infoInformation col-md-7">
        <h3>Nuestra empresa</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a href="contact.php"><button type="button" class="btn btn-primary">CONTACTENOS</button></a>
      </div>
      <div class="infoImage col-md-5">
        <img src="img/weImage.jpg" alt="weImage">
      </div>
    </div>

<?php require_once 'partials/footer.php';  ?>
