<link rel="stylesheet" type="text/css" media="screen" href="css/donar.css">

<form post>
<div><img src="imagenes/jobbielogo.png" alt=""/></div>
<header>De talento a morlacos...</header>
<br>
<br><br><br><br>
Usted realizará una donacion de $<?php echo (int)$_POST['monto']; ?> (clp).
<br>
Este mensaje: <?php echo $_POST['mensaje']; ?> es para Usuario1
<br>
<br><br><input class="button" type="submit" value="Proceder al pago">


	</form>

	