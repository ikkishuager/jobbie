
<!DOCTYPE html>
<html> 
    <head>  
  <meta charset="UTF8">
  <link rel="stylesheet" type="text/css" media="screen" href="css/menu.css">

</head>



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
      <li><a href="Desafios.php">Desafios</a></li>
      <li><a href="Tienda.php">Tienda</a></li>
      <li><a href="Soporte.php">Soporte</a></li>
		</ul>
        </body>
        <br>
        <br>
        <br>  <br>  <br>  <br>  <br>  <br>  
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="btn-toolbar">
    <button class="btn btn-primary">Tus Suscripciones</button>
   
</div>
<div class="well">
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>Tiempo Suscrito</th>
          <th>Experto en</th>
          <th>Nombre Usuario</th>
          <th style="width: 36px;"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>1 Mes</td>
          <td>Dibujo 2D/3D</td>
          <td>Vixosky</td>
          <td>
              <a href="user.html"><i class="icon-pencil"></i></a>
              <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>1 Mes</td>
          <td>Dioramas</td>
          <td>don pepe</td>
          <td>
              <a href="user.html"><i class="icon-pencil"></i></a>
              <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>1 Mes</td>
          <td>Carpintería</td>
          <td>Soraxo</td>
          <td>
              <a href="user.html"><i class="icon-pencil"></i></a>
              <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>2 Meses</td>
          <td>Dibujo 2D/3D</td>
          <td>BlackLance</td>
          <td>
              <a href="user.html"><i class="icon-pencil"></i></a>
              <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
          </td>
        </tr>
        <tr>
          <td>5</td>
          <td>1 Mes</td>
          <td>Tutorias</td>
          <td>Helmirth</td>
          <td>
              <a href="user.html"><i class="icon-pencil"></i></a>
              <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
          </td>
        </tr>
        <tr>
          <td>6</td>
          <td>1 Mes</td>
          <td>Repostería</td>
          <td>Yanbo</td>
          <td>
              <a href="user.html"><i class="icon-pencil"></i></a>
              <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
          </td>
        </tr>
      </tbody>
    </table>
</div>
<div class="pagination">
    <ul>
        <li><a href="#">Anterior</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">Siguiente</a></li>
    </ul>
</div>
<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Delete Confirmation</h3>
    </div>
    <div class="modal-body">
        <p class="error-text">¿Seguro de cancelar suscripción?</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
        <button class="btn btn-danger" data-dismiss="modal">Delete</button>
    </div>
</div>

</html>
