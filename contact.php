<?php
$pageTitle = 'Contacto';
if (!empty($_POST)) { ?>
  <script type="text/javascript">
  alert('El formulario ha sido enviado con éxito.')
  </script>
<?php } ?>

<?php
if (!empty($_POST)) {
  // Destinatario
  $for  = 'alejandrodaquila@gmail.com';
  // Asunto
  $subject = 'Consulta de ' . $_POST['email'];
  // Mensaje
  $message = $_POST['textareaContact'];
  // // Send
  // $headers = "From: " . $_POST['email'];

  $encoding = "utf-8";

    // Preferences for Subject field
    $subject_preferences = array(
        "input-charset" => $encoding,
        "output-charset" => $encoding,
        "line-length" => 76,
        "line-break-chars" => "\r\n"
    );

    // Mail header
    $header = "Content-type: text/html; charset=".$encoding." \r\n";
    $header .= "From: " . $_POST['email'] . "\r\n";
    $header .= "MIME-Version: 1.0 \r\n";
    $header .= "Content-Transfer-Encoding: 8bit \r\n";
    $header .= "Date: ".date("r (T)")." \r\n";
    // $header .= iconv_mime_encode("Subject", $subject);

  $mail_sent = mail($for, $subject, $message, $header);
}

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
        <h4><a href="mailto:info@adwebtechs.com" target="_top">info@adwebtechs.com</a></h4>
      </div>
      <div class="dataTitle col-md-8">
        <ion-icon name="phone-portrait"></ion-icon><h2>TELEFONO</h2>
      </div>
      <div class="dataData col-md-8">
        <h4>+54 (011) 5973-3315</h4>
      </div>
    </div>
  </div>

  <script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule="" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js"></script>
  <script src="js/app.js" charset="utf-8"></script>
  </div>
</body>
</html>
