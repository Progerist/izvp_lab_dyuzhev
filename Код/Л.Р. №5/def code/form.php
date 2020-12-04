<!DOCTYPE html>
<html lang="uk">
<head>
<meta charset="utf-8">
<style type="text/css">
	form {
		width: 25%;
	}
	.form-row {
		display: flex;
	}
	.form-row > label {
		flex: 1;
	}
	.form-row > input {
		flex: 2;
	}
	.form-row > textarea {
		flex: 2;
	}
</style>
</head>
<body>
<div>
<?php
if(isset($_POST['firstname']) && isset($_POST['email']) && isset($_POST['message'])) {
	$firstname = $_POST['firstname'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $email_validate = filter_var($email, FILTER_VALIDATE_EMAIL);
  if ($email_validate)
  	echo "Ваше ім'я: $firstname <br> Ваша пошта: $email <br> Ваше повідомлення: $message";
}
?>
</div>
<h3>Форма зворотнього зв'язку</h3>
<form method="POST">
		<div class="form-row">
			<label for="name">Ім'я</label><input id="name" type="text" name="firstname" required>
		</div>
		<div class="form-row">
			<label for="e-mail">Пошта</label><input id="e-mail" type="e-mail" name="email" required>
		</div>
		<div class="form-row">
			<label for="message">Текст повідомлення</label><textarea id="message" name="message" required></textarea>
		</div>
		<div class="form-row">
			<input type="submit" value="Відправити">
		</div>
</form>
</body>
</html>