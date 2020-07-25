
<!DOCTYPE html>
<html>
<head>
<title>Log in Hotelero</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="shortcut icon" type="image/x-icon" href="resources/ico.ico" />
<link rel="stylesheet" href="assets/css/login.css" type="text/css" media="all">
</head>
<body>
<div class="container">
<h1>Hotel Mozonte  <small>Sistema</small></h1>
     <div class="contact-form">
	 <div class="signin">
     <form method="post" action="controller/login.php">
	   <input name="user" type="text" class="user" value="Nombre de usuario" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nombre de usuario';}" />
		 <input name="pass" type="password" class="pass" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" />
     <input type="submit" value="Iniciar Sesión" />
     </form>
	 </div>
	 </div>
</div>
<div class="footer">
     <p>Copyright &copy; 2017 Derechos Reservados</p>
</div>
</body>
</html>
