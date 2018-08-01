<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<title>Chat message</title>
</head>
<body>
<div class="container">
	<div class="chat_message"></div>

	<form method="POST" action="message.php" class="chat__form">
		<strong class="username"></strong>
		<div class="form-group">
			<textarea class="form-control" rows="5" name="message"></textarea>
		</div>
		<button type="submit" class="btn btn-primary">Enviar</button>
	</form>

		<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="https://js.pusher.com/4.2/pusher.min.js"></script>
  <script type="text/javascript" src="js/app.js"></script>
	
</div>
</body>
</html>