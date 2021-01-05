<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Page</title>
</head>
<body>


<h1>
	Selamat Datang 	
	<?php if($this->session->userdata("level") == "user"){
	 echo "Role ".$this->session->userdata("level");
	} ?>
</h1>

	<h1>INI HALAMAN USER</h1>

	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>

	<br>

	<a href="<?= base_url().'Home/logout'; ?>">
		Keluar
	</a>
</body>
</html>