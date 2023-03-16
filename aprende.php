<!DOCTYPE html>
<html> 
    <head>  
  <meta charset="UTF8">
  <link rel="stylesheet" type="text/css" media="screen" href="css/menu.css">
  <link rel="stylesheet" type="text/css" media="screen" href="css/aprende.css">

</head>




<form action="buscar_productos.php" method="get" class="form_search">
<input  type="text" name="busqueda" id="busqueda" placeholder="buscar">
<input type="submit" value="Buscar" class="btn_search">

</form>
<body>
<cente>
       <a href="Carrito.php"><img  src="imagenes/Carrito.png"  alt="" width="120" height="80" class="carry"/></a>
       
      <a class= "logout"href="logout.php">Cerrar Sesión</a>
       <a href="perfil.php"><img  src="imagenes/iconousuario.png"  alt="" width="100" height="60" class="usericon"/></a>
</cente>

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
 <main>
<table class="tablita1" >
<tr>
   <td class= "titulo"> 
<b>Tutorial de Modelismo #1</b>
   </td>
</tr>
<tr>
  
<td class="parrafo">
El primer paso en el mundo del modelismo es tener las  <b> herramientas adecuadas</b>, no se necesitan de gran valor (por ahora), pero nos ayudaran a tener un buen acabado.
<br>
<iframe 
     width="560" height="315" src="https://www.youtube.com/embed/cdI9LOj0A_Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
   
   </td>
</li>
   <table class="tablita2" >
<tr>
   <td class= "titulo"> 
<b>A Trabajar</b>
   </td>
</tr>
<tr>
<td class="parrafo"><br>
<br>
Ahora que sabemos lo básico, solo falta ir a nuestra tienda favorita para comprar nuestras herramientas que nos faltan, y porque no, más maquetas.
<br>
Te recomendamos los siguientes profesores, expertos en el tema, para que sigas aprendiendo y aumentando tus conocimientos, quien sane, tal vez tu seas uno de ellos.
<br>
<br>
<button type="button" name="profesormodel" value="profesormodel">Mas tutores</button>
<br>
<br>
<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="imagenes/img1.jpg" style="width:100%">
    <div class="text">Tutor 1</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="imagenes/img2.jpg" style="width: 100%">
    <div class="text">Tutor 2</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="imagenes/img3.jpg" style="width:100%">
    <div class="text">Tutor 3</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
</td> 

   

</table>
<main>

</body>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</html>
