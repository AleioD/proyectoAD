<?php
$pageTitle = 'Home';
require_once 'partials/head.php';
require_once 'partials/navbar.php';
?>

<div class="indexContainer col-md-12">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
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
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt .</p>
          </div>
          <div class="serviceName">
            <h4 style="font-size: 23px;">Hosting</h4>
          </div>
        </div>
        <div class="oneService">
          <div class="serviceDescription">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt .</p>
          </div>
          <div class="serviceName">
            <h4 style="font-size: 23px;">Desarrollo Web</h4>
          </div>
        </div>
        <div class="oneService">
          <div class="serviceDescription">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt .</p>
          </div>
          <div class="serviceName">
            <h4 style="font-size: 23px;">Diseño Responsive</h4>
          </div>
        </div>
        <div class="oneService">
          <div class="serviceDescription">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt .</p>
          </div>
          <div class="serviceName">
            <h4 style="font-size: 23px;">Posicionamiento</h4>
          </div>
        </div>
      </div>
    </div>
    <div class="weContainer col-md-12">
      <div class="weInformation col-md-8">
        <h3>Nuestra empresa</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua kfdkfsd dfjsd fdijfsdijfsdij.</p>
        <a href="contact.php"><button type="button" class="btn btn-primary">CONTACTENOS</button></a>
      </div>
      <div class="weImage col-md-4">
        <img src="img/weImage.jpg" alt="weImage">
      </div>
    </div>
    <div class="indexFooter col-md-12">
      <div class="indexFooterLogo col-md-4">
        LOGO/NOMBRE
      </div>
      <div class="indexFooterContact col-md-4">
        CONTACTOS (teléfono, mail)
      </div>
      <div class="indexFooterSocial col-md-4">
        REDES
      </div>
    </div>

<?php require_once 'partials/footer.php';  ?>
