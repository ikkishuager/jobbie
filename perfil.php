<!DOCTYPE html>
<html> 
    <head>  
  <meta charset="UTF8">
  <link rel="stylesheet" type="text/css" media="screen" href="css/menu.css">
  <link rel="stylesheet" type="text/css" media="screen" href="css/perfil.css">
 
</head>




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
       <cente>
       <a href="Carrito.php"><img  src="imagenes/Carrito.png"  alt="" width="120" height="80" class="carry"/></a>
       
      <a class= "logout"href="logout.php">Cerrar Sesión</a>
       <a href="perfil.php"><img  src="imagenes/iconousuario.png"  alt="" width="100" height="60" class="usericon"/></a>
  
     

      
       
</cente>
<br>
<a href="publicar.php"><img  src="imagenes/publicarboton.png"  alt="10" width="60" height="60" class="publicon"/></a>
<a href="mensajes.php"><img  src="imagenes/mensaje.png"  alt="" width="50" height="50" class="mensajeria"/></a>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="https://i.imgur.com/JtrgvxP.jpg" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Cambiar Imagen
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        Manuel Osorio
                                    </h5>
                                    <h6>
                                        Manuehh
                                    </h6>
                                    <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Datos Personales</a>
                                   

                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Editar datos"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>INFORMACIÓN</p>
                            <a href="">Publicaciones</a><br/>
                            <a href="">Productos Vendidos</a><br/>
                            <a href="">Suscripciones</a><br>
                            <a href="">Compras</a>

                            <p>SKILLS</p>
                            <a href="">Creador de Dioramas</a><br/>
                            <a href="">Dibujo 3D</a><br/>
                            <a href="">Maquetismo</a><br/>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nombre Usuario</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Manuehh</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nombre</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Manuel</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Apellido</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Osorio</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>manuel_el_oso@gmail.com</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Teléfono</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>+569 555555</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Dirección</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Calle Falsa #1234, Independencia, Región Metropolitana</p>
                                            </div>
                                        </div>
                                        
                            </div>
                          
                    </div>
                </div>
            </form>           
        </div>
</body>
</html>


