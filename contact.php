<?php
$pageTitle = 'Contacto';
require_once 'partials/head.php';
require_once 'partials/navbar.php';
?>

<div class="contactContainer col-md-12">
  <div class="formContainer col-md-8">
    <form>
      <h1 id="formTitle">Formulario de contacto</h1>
      <br>
      <div class="form-row col-md-12">
        <input type="text" class="form-control" id="name" placeholder="Nombre">
      </div>
      <br>
      <div class="form-row col-md-12">
        <input type="text" class="form-control" id="surname" placeholder="Apellido">
      </div>
      <br>
      <div class="form-row col-md-12">
        <input type="email" class="form-control" id="email" placeholder="direccion@email.com">
      </div>
      <br>
      <div class="form-row col-md-12">
        <input type="text" class="form-control" id="phone" placeholder="Teléfono">
      </div>
      <br>
      <div class="form-row col-md-12">
        <textarea class="form-control" id="textareaContact" rows="3" placeholder="Escriba su consulta aquí..."></textarea>
      </div>
      <br>
      <div class="form-row col-md-8">
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
    </form>

  </div>
  <div class="contactFormData col-md-4">
    
  </div>
</div>

<?php require_once 'partials/footer.php'; ?>
