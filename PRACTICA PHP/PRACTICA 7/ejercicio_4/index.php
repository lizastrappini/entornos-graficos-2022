<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
<title>Cookies en PHP</title>
</head>
<body>
<p>
<?php
  if (isset($_COOKIE['noticias'])){
  	if($_COOKIE['noticias']=="politica"){
  		echo ('<h1>NOTICIA POLITICA</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>');
  	}
  	else if($_COOKIE['noticias']=="economica"){
  		echo ('<h1>NOTICIA ECONOMICA</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>');
  	}
  	else if($_COOKIE['noticias']=="deportiva"){
  		echo ('<h1>NOTICIA DEPORTIVA</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>');
  	}}
  else {
 ?>
<form action="cookies.php" method="post"> Seleccionar titular:
<br>
<input type="radio" name="titular" value="politica"> Noticia politica<br>
    <input type="radio" name="titular" value="economica"> Noticia economica<br>
    <input type="radio" name="titular" value="deportiva"> Noticia deportiva
  </p>
<input type="submit" value="Actualizar el estilo" >
</form>
<?php
  }
 ?>
<a href="borrar.php">Borrar cookies</a>
</body>
</html>