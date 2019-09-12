<?php
$pageTitle = 'Contacto';
if (!empty($_POST)) { ?>
  <script type="text/javascript">
  alert('El formulario ha sido enviado con éxito.')
  </script>
<?php } ?>

<?php
require_once 'partials/head.php';
require_once 'partials/navbar.php';
?>

<div class="contactContainer col-md-12">
  <div class="formContainer col-md-8">
    <form class="" action="contact.php" method="POST">
      <h1 id="formTitle">Formulario de contacto</h1>
      <br>
      <div class="form-row col-md-12">
        <input type="text" class="form-control" name="name" id="name" placeholder="Nombre">
        <div class="invalid">
          <!-- Mensaje de error -->
        </div>
      </div>
      <br>
      <div class="form-row col-md-12">
        <input type="text" class="form-control" name="surname" id="surname" placeholder="Apellido">
        <div class="invalid">
          <!-- Mensaje de error -->
        </div>
      </div>
      <br>
      <div class="form-row col-md-12">
        <input type="email" class="form-control" name="email" id="email" placeholder="direccion@email.com">
        <div class="invalid">
          <!-- Mensaje de error -->
        </div>
      </div>
      <br>
      <div class="form-row col-md-12">
        <input type="text" class="form-control" name="phone" id="phone" placeholder="Teléfono">
        <div class="invalid">
          <!-- Mensaje de error -->
        </div>
      </div>
      <br>
      <div class="form-row col-md-12">
        <textarea class="form-control" name="textareaContact" id="textareaContact" rows="3" placeholder="Escriba su consulta aquí..."></textarea>
        <div class="invalid">
          <!-- Mensaje de error -->
        </div>
      </div>
      <br>
      <div class="form-row col-md-8">
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
    </form>

  </div>
  <div class="dataContainer col-md-4">
    <div class="dataTitle col-md-8">
      <ion-icon name="mail"></ion-icon><h2>MAIL</h2>
    </div>
    <div class="dataData col-md-8">
      <h4>alejandrodaquila@gmail.com</h4>
    </div>
    <div class="dataTitle col-md-8">
      <ion-icon name="phone-portrait"></ion-icon><h2>TELEFONO</h2>
    </div>
    <div class="dataData col-md-8">
      <h4>+54 (011) 5973-3315</h4>
    </div>
  </div>
</div>

<?php require_once 'partials/footer.php'; ?>
