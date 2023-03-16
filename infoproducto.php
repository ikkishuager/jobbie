
  <head>  
  <meta charset="UTF8">
  <link rel="stylesheet" type="text/css" media="screen" href="css/menu.css">
  <link rel="stylesheet" type="text/css" media="screen" href="css/productocss.css">
  <script src="script/mensaje.js"></script>

</head>


<?php
// Te recomiendo utilizar esta conección, la que utilizas ya no es la recomendada. 
$link = new PDO('mysql:host=localhost;dbname=jobbie', 'root', '');

?>

<form action="buscar_productos.php" method="get" class="form_search">
<input  type="text" name="busqueda" id="busqueda" placeholder="buscar">
<input type="submit" value="Buscar" class="btn_search">

</form>
<body>

<div class="img-container"></div>
    <img src="imagenes/jobbie.png"  alt="" class="img"/>

    <ul class="menu">
			<li><a href="Inicio.php">Inicio</a></li>
			<li><a href="Suscripciones.php">Suscripciones</a></li>
			<li><a href="Aprende.php">Aprende</a></li>
			<li><a href="Blogs.php">Blogs</a></li>
      <li><a href="Desafios.php">Desafios</a></li>
      <li><a href="Tienda.php">Tienda</a></li>
      <li><a href="Soporte.php">Soporte</a></li>
		</ul>
        <cente>
       <a href="Carrito.php"><img  src="imagenes/Carrito.png"  alt="" width="120" height="80" class="carry"/></a>
       
      <a class= "logout"href="logout.php">Cerrar Sesión</a>
       <a href="perfil.php"><img  src="imagenes/iconousuario.png"  alt="" width="100" height="60" class="usericon"/></a>
</cente>
</body>
<?php foreach ($link->query('SELECT * from productos') as $row)?> 
  <table class="tablainfoproducto">
  
		<thead>
    <tr class="titulonombre">
    <td>
    <h1>Diorama Naval</h1>
    </td>
    
    </tr>
		<tr>
    
      <td>
<img class="imagen"src="./imagenesproducto/Diorama1.jpg" alt="" width="500" height="500">
      <td>
			<td>

      

  <li>Descripción: Diorama hecho con maqueta hobby-boss</li>
  <li>Categoría: Diorama</li>
  <li>Región: Metropolitana</li>
  <li>Stock: 1</li>
<li>Precio: $60.000</li>
<button class="botoncarrocomprap">Agregar al Carro</button>
<a href="confirmarcompra.php" class="buttonSP">Comprar</a>
<form method="post" action="agregarAlCarrito.php">
	
		</form>
      </td>
		</tr>
		</thead>

<tr>
    
  
  
  <td>

  <?php foreach ($link->query('SELECT * from users') as $row)?>
       <a href="usuario.php" class="userVboton">Usuario:  <?php echo $row['username'] ?></a>
  </td>
    
  

    

                                                                                                                                       
 </tr>

 <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
	<div class="row">
	<!-- Contenedor Principal -->
    <div class="comments-container">
		<h1>Comentarios</h1>

		<ul id="comments-list" class="comments-list">
			<li>
				<div class="comment-main-level">
					<!-- Avatar -->
					<div class="comment-avatar"><img src="data:image/jpeg;base64,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+2dR8wOoKaFizDRFX0mtz+8kCa2C70KlamaaZaeRnPoIO9qk+3VdOctxHFKTIy5HqaguzVEU1ANmI7tsqg/JvbY77YKlLvKknIQurhseMLhCyn8biTNrXifS208DHQ41xXDtTXA4aoTTcBjUN1AqGxpU26L88/PbN8kiRVENO5YEMCVAOhBBsxI+j9vqm9TrYZt6BAG572mbD/4o4lxFarB1pKpChTmcVC1vRNwFsbWHna+9751yVyX3m5SxdwFbTTKCNB4iLk+yY+8+hS/P70p3n0Kf5/egFTK3HphhZbC5LKdgCWCqP3re8DzmjVS2trbjyuDr9n5tM1LFFfk07XB36bfK85di8SalgbWtrqu53O/516yVJIWjEqRaUlVCREQiREQiREQiREQiREQiREQiREQiREQiREQiREQiv75soTMcoJYLfwgkWJt1sLRTqFTcW/O4PlLIhRC2K1RbZUGm5vvfkPUL298wEykQpSIiESIiESIiESIiESIiESIiESIiESIiESIiESIiESIiESIiESIiESIiESIiESIiESIiESIiESIiESIiESIiESIiESIiESIiESIiESIiESIiESIiESIiESIiESIiESIiESIiESIiESIiESIiESIiEX//2Q==" alt=""></div>
					<!-- Contenedor del Comentario -->
					<div class="comment-box">
						<div class="comment-head">
							<h6 class="comment-name by-author"><a href="usuario.php">donshuager</a></h6>
							<span>hace 3 dias</span>
							<i class="fa fa-reply"></i>
							<i class="fa fa-heart"></i>
						</div>
						<div class="comment-content">
							Primer diorama a la venta, lo segui viendo un tutorial en internet, espero que les guste.
						</div>
					</div>
				</div>
				<!-- Respuestas de los comentarios -->
				<ul class="comments-list reply-list">
					<li>
						<!-- Avatar -->
						<div class="comment-avatar"><img src="https://xombitgames.com/files/2016/04/oie13jbiwAQkmm3.jpg" alt=""></div>
						<!-- Contenedor del Comentario -->
						<div class="comment-box">
							<div class="comment-head">
								<h6 class="comment-name">Manuehh</h6>
								<span>hace 3 dias</span>
								<i class="fa fa-reply"></i>
								<i class="fa fa-heart"></i>
							</div>
							<div class="comment-content">
								Tire el dato socio, deje ver el tutorial.
							</div>
						</div>
					</li>

					<li>
						<!-- Avatar -->
						<div class="comment-avatar"><img src="https://image.freepik.com/vector-gratis/gundam-barbatos_54889-221.jpg" alt=""></div>
						<!-- Contenedor del Comentario -->
						<div class="comment-box">
							<div class="comment-head">
								<h6 class="comment-name by-author"><a href="usuario.php">donjose</a></h6>
								<span>hace 2 dias</span>
								<i class="fa fa-reply"></i>
								<i class="fa fa-heart"></i>
							</div>
							<div class="comment-content">
								Un mago no dice sus secretos, jajajaja, na mentira, el tutorial era pagado no puedo dar info. (cof cof por privado cof cof).
							</div>
						</div>
					</li>
				</ul>
			</li>

			<li>
				<div class="comment-main-level">
					<!-- Avatar -->
					<div class="comment-avatar"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTggEoepPsvvx-WwDlXTLesfgMq65M1r4JA3C2zU1knI5z-ekbBL-2wHlSNUgrWondHlIY&usqp=CAU" alt=""></div>
					<!-- Contenedor del Comentario -->
					<div class="comment-box">
						<div class="comment-head">
							<h6 class="comment-name">Vichosky</h6>
							<span>hace 10 minutos</span>
							<i class="fa fa-reply"></i>
							<i class="fa fa-heart"></i>
						</div>
						<div class="comment-content">
							Ta feo.
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
	</div>
</div>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

 <link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
<div class="container">
	<div class="row">
	
	</div>
    
    <div class="row">
    
    <div class="col-md-6">
    						<div class="widget-area no-padding blank">
								<div class="status-upload">
									<form>
										<textarea placeholder="Vamos escribe algo :)" ></textarea>
										<ul>
											
										</ul>
										<button type="submit" class="btn btn-success green"><i class="fa fa-share"></i> Enviar</button>
									</form>
								</div><!-- Status Upload  -->
							</div><!-- Widget Area -->
						</div>
        
    </div>
</div>

</table>
