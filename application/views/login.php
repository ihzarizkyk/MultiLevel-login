<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>

	<?= $judul; ?>

	<br>

	<form action="<?= base_url().'Home/auth';?>" method="POST">
		<label>
			Username :
		</label>
		<br>
		<input type="text" name="username">
		<br><br>
		<label>
			Password :
		</label>
		<br>
		<input type="password" name="password">
		<br><br>
		<button type="submit" name="login">
			Login
		</button>
	</form>

</body>
</html>