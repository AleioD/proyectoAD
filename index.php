<?php
$pageTitle = 'AD Web Technologies - Home';
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
        <img src="img/Slider1.jpg" class="d-block w-100" alt="slider1">
      </div>
      <div class="carousel-item" data-interval="3000">
        <img src="img/Slider2.jpg" class="d-block w-100" alt="slider2">
      </div>
      <div class="carousel-item" data-interval="3000">
        <img src="img/Slider3.jpg" class="d-block w-100" alt="slider3">
      </div>
    </div>
  </div>
</div>

    <div class="servicesContainer col-md-12">
      <h2>Nuestros servicios</h2>
      <div class="services col-md-12">
        <div class="oneService">
          <div class="serviceDescription">
            <p>Encontrá tu plan ideal con todo lo necesario para alojar tu sitio web, con acceso completo y asistencia eficaz.</p>
          </div>
          <div class="serviceName">
            <h4 style="font-size: 18px;">Hosting</h4>
          </div>
        </div>
        <div class="oneService">
          <div class="serviceDescription">
            <p>Capacidad y creatividad al servicio de tus ideas para lograr el diseño óptimo de programas y sitios.</p>
          </div>
          <div class="serviceName">
            <h4 style="font-size: 18px;">Desarrollo Web</h4>
          </div>
        </div>
        <div class="oneService">
          <div class="serviceDescription">
            <p>Dinámicas para lograr la mejor performance en celulares, tablets, notebooks y ordenadores.</p>
          </div>
          <div class="serviceName">
            <h4 style="font-size: 18px;">Diseño Responsive</h4>
          </div>
        </div>
        <div class="oneService">
          <div class="serviceDescription">
            <p>Optimización en motores de búsqueda (SEO) para un sitio de primera línea en el máximo nivel.</p>
          </div>
          <div class="serviceName">
            <h4 style="font-size: 18px;">Posicionamiento</h4>
          </div>
        </div>
      </div>
    </div>
    <div class="infoContainer col-md-12">
      <div class="infoInformation col-md-8">
        <h3>Nuestra empresa</h3>
        <p>AD Web Technologies nació con el propósito de brindar soluciones simples a problemas complejos basándonos en tecnología web, la cual posee muchas ventajas con respecto a otras formas de encarar un proyecto.
        <br>En la actualidad, una página web como herramienta laboral es el paso fundamental para que cualquier empresa o desarrollo personal sea conocido con mayor facilidad. Pero también la tecnología web sirve para elaborar programas o pequeños módulos de trabajo con el fin de facilitar procesos, los cuales pueden ser ejecutados desde cualquier parte del mundo con una conexión a internet, así como también trabajados de manera local.
        <br>Interpretamos las necesidades del cliente, elaboramos un presupuesto sin costo y llevamos sus ideas a la realidad.</p>
        <a href="contact.php"><button type="button" class="btn btn-primary">CONTACTENOS</button></a>
      </div>
      <!-- <div class="infoImage col-md-5">
        <img src="img/weImage.jpg" alt="weImage">
      </div> -->
    </div>

<?php require_once 'partials/footer.php';  ?>
