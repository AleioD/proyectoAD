<?php
if (!empty($_POST)) { ?>
	<script type="text/javascript">
	alert('El formulario ha sido enviado con éxito.')
	</script>
<?php } ?>

<?php
if (!empty($_POST)) {
	// Destinatario
	$for  = 'info@adwebtechs.com';
	// Asunto
	// Mensaje
	if(!empty($_POST['textareaContact'])){
		$subject = 'Consulta de ' . $_POST['name'] . " " . $_POST['surname'] . " - " . $_POST['email'];
		$message = $_POST['textareaContact'] . " - Teléfono: " . $_POST['phone'];
	} else {
		$subject = 'Consulta de ' . $_POST['name'] . " - " . $_POST['email'];
		$message = "Teléfono: " . $_POST['phone'];
	}
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


	// if(!empty($_POST['textareaContact'])){
	// 	mail($for, $subject, $message, $header);
	// } else {
	// 	mail($for, $subject, 'Sin mensaje', $header);
	// }

	mail($for, $subject, $message, $header);
}


?>

<!DOCTYPE html>
<html lang="es">
	<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<title><?=$pageTitle; ?></title>
    <link rel="stylesheet" href="css/app.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<style>
			.invalid {
				display: none;
				color: red;
			}
		</style>
		<div class="tags">
			<h1>AD Web Technologies</h1>
			<em>páginas</em>
			<em>web</em>
			<em>programas</em>
			<em>hosting</em>
			<em>seo</em>
			<em>posicionamiento</em>
			<em>responsive</em>
			<em>ad</em>
			<em>Technologies</em>
			<em>techs</em>
			<em>sitio</em>
			<em>desarollos</em>
		</div>
	</head>
	<body>
		<div class="container col-12">
