<!DOCTYPE html>
<html> 
    <head>  
  <meta charset="UTF8">
  <link rel="stylesheet" type="text/css" media="screen" href="css/menu.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</head>


<?php
// Te recomiendo utilizar esta conección, la que utilizas ya no es la recomendada. 
$link = new PDO('mysql:host=localhost;dbname=jobbie', 'root', '');

?>


</form>
<body>
<cente>
       <a href="Carrito.php"><img  src="imagenes/Carrito.png"  alt="" width="120" height="80" class="carry"/></a>
       
      <a class= "logout"href="logout.php">cerrar sesion</a>
       <a href="perfil.php"><img  src="imagenes/iconousuario.png"  alt="" width="100" height="60" class="usericon"/></a>
</cente>


<div class="img-container"></div>
    <img src="imagenes/jobbie.png"  alt="" class="img"/>

    <ul class="menu">
			<li><a href="Inicio.php">Inicio</a></li>
			<li><a href="Suscripciones.php">Suscripciones</a></li>
			<li><a href="Aprende.php">Aprende</a></li>
			<li><a href="Blogs.php">Blogs</a></li>
            <li><a href="Desafios.php">Desafiós</a></li>
            <li><a href="Tienda.php">Tienda</a></li>
            <li><a href="Soporte.php">Soporte</a></li>
		</ul>
    <form action="buscar_productos.php" method="get" class="form_search2">
<input  type="text" name="busqueda" id="busqueda" placeholder="buscar">
<input type="submit" value="Buscar" class="btn_search">

</form>
<table class="tiendatabla">
  
<tr>

<td class="categoriastabla">
  <h1>Ubicación</h1>
  
<label class="region" for="regiones">Región:</label>
<select name="regiones" id="regiones">
  <option value="Arica y Parinacota">Arica y Parinacota</option>
  <option value="Tarapacá">Tarapacá</option>
  <option value="Antofagasta">Antofagasta</option>
  <option value="Atacama">Atacama</option>
  <option value="Coquimbo">Coquimbo</option>
  <option value="Valparaíso">Valparaíso</option>
  <option value="Metropolitana">Metropolitana</option>
  <option value="Libertador Bernardo O’Higgins">Libertador Bernardo O’Higgins</option>
  <option value="Maule">Maule</option>
  <option value="Ñuble">Ñuble</option>
  <option value="Biobío">Biobío</option>
  <option value="La Araucanía">La Araucanía</option>
  <option value="Los Ríos">Los Ríos</option>
  <option value="Los Lagos">Los Lagos</option>
  <option value="Aysén">Aysén</option>
  <option value="Magallane">Magallanes</option>
</select>
<h1>Filtros</h1>
<label class="categoria" for="categorias">Categorías:</label>
<select name="categorias" id="categorias">
  <option value="Dibujo 2D/3D">Dibujo 2D/3D</option>
  <option value="Modelismo">Modelismo</option>
  <option value="Dioramas">Dioramas</option>
  <option value="Escultura">Esculturas</option>
  <option value="Ropa">Ropa</option>
  <option value="Impresiones 3D">Impresiones 3D</option>
  <option value="Música">Música</option>
  <option value="Fotografía">Fotografía</option>
  <option value="Modding">Modding</option>
  <option value="Alfarería">Alfarería</option>
  <option value="Carpintería">Carpintería</option>
  <option value="Repostería">Repostería</option>
  <option value="Educacional">Educacional</option>
</select>

<h1>Rango de Valor</h1>
<input class="rango" type="range" list="tickmarks">

<datalist id="tickmarks">
  <option value="0" label="0%">
  <option value="10">
  <option value="20">
  <option value="30">
  <option value="40">
  <option value="50" label="50%">
  <option value="60">
  <option value="70">
  <option value="80">
  <option value="90">
  <option value="100" label="100%">
</datalist>



<h1>Ordenar</h1>
<label class="orden" for="ordenar"></label>
<select name="ordenar" id="ordenar">
  <option value="mayor">Mayor Precio</option>
  <option value="menor">Menor Precio</option>
</select>


<?php     include "mandarcarrito.php"; ?>


<td class="productostabla">

  	
        <?php  if ($mensaje != ""): ?>
        <div class="alert alert-success" role="alert">
            <?php echo $mensaje; ?>
            <a href="Carrito.php" class="badge badge-success">Ver Carrito</a>    
        </div>
        <?php endif; ?>
        <div class="row">
            <?php 
                $statement = $link->prepare("SELECT * FROM productos");
                $statement->execute();
                $listaProductos = $statement->fetchAll(PDO::FETCH_ASSOC);
                // print_r($listaProductos);
            ?>
            <?php foreach($listaProductos as $producto): ?>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card">
                    <img 
                        alt="<?= $producto['productname'] ?>"
                        class="card-img-top" 
                        data-content="<?= $producto['descripcion'] ?>"
                        data-toggle="popover"
                        data-trigger="hover"
                        height="317"
                        src="imagenesproducto/figura ironman.jpg" 
                        title="<?= $producto['productname'] ?>" 
                        >
                        <div class="card-body">
                            <span><?= $producto['productname'] ?></span>
                            <h5 class="card-title">$<?= $producto['precioVenta'] ?></h5>
                            <p class="card-text"><?php echo ($producto['categorias']); ?></p>
                            <form action="" method="POST">
                                <input type="hidden" name="id" id="id" value="<?php echo ($producto['id']); ?>">
                                <input type="hidden" name="productname" id="productname" value="<?php echo ($producto['productname']); ?>">
                                <input type="hidden" name="precioVenta" id="precioVenta" value="<?php echo ($producto['precioVenta']); ?>">
                                <input type="hidden" name="existencia" id="existencia" value="<?php echo ($producto['existencia']); ?>">
                                <button class="btn btn-warning" name="btnAccion" value="Agregar" type="submit">Agregar el carrito</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <script>
        $(function(){
            $('[data-toggle="popover"]').popover();
        })
    </script>





</body>
        
</html>
