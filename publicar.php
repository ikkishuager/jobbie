<link rel="stylesheet" type="text/css" media="screen" href="css/publicar.css">
<div><img src="imagenes/jobbielogo.png" alt=""/></div>
<header>De talento a morlacos...</header>


<div class="col-xs-12">

	<form method="post" action="publicarconn.php">
		<h1>Nueva publicación</h1>
		<br><br><br>
	<label for="productname">Título:</label>
		<input class="form-control" name="productname" required type="text" id="productname" placeholder="Escribe el titulo">
<br><br><br>
		<label class ="labeldesc" for="descripcion">Descripción:   </label>
		<textarea required id="descripcion" name="descripcion" cols="30" rows="5" class="form-control"></textarea>
		<br><br><br>
		<label for="precioVenta">Precio de venta:</label>
		<input class="form-control" name="precioVenta" required type="number" id="precioVenta" placeholder="Precio de venta">
		<br><br><br>
		<label for="existencia">Existencia:</label>
		<input class="form-control" name="existencia" required type="number" id="existencia" placeholder="Cantidad o existencia">
		<br><br><br>
		<label class="region" for="regiones">Región:          </label>
  <select name="regiones" id="regiones">
  <option value="arica">Arica y Parinacota</option>
  <option value="tarapaca">Tarapacá</option>
  <option value="antofagasta">Antofagasta</option>
  <option value="atacama">Atacama</option>
  <option value="coquimbo">Coquimbo</option>
  <option value="valparaiso">Valparaíso</option>
  <option value="metropolitana">Metropolitana</option>
  <option value="libertador">Libertador Bernardo O’Higgins</option>
  <option value="maule">Maule</option>
  <option value="ñuble">Ñuble</option>
  <option value="biobio">Biobío</option>
  <option value="araucania">La Araucanía</option>
  <option value="rios">Los Ríos</option>
  <option value="lagos">Los Lagos</option>
  <option value="aysen">Aysén</option>
  <option value="magallanes">Magallanes</option>
</select>
<br><br><br>
<label class="categoria" for="categorias">Categorías:</label>
<select name="categorias" id="categorias">
  <option value="dibujo">Dibujo 2D/3D</option>
  <option value="modelismo">Modelismo</option>
  <option value="dioramas">Dioramas</option>
  <option value="esculturas">Esculturas</option>
  <option value="ropa">Ropa</option>
  <option value="impresiones">Impresiones 3D</option>
  <option value="musica">Música</option>
  <option value="fotografia">Fotografía</option>
  <option value="modding">Modding</option>
  <option value="alfareria">Alfarería</option>
  <option value="carpinteria">Carpintería</option>
  <option value="reposteria">Repostería</option>
  <option value="educacional">Educacional</option>
</select>
<br><br><br>
		<label for="imagen">Seleccione una imagen:</label>
        <input class= "imagenpublicar" type="file" name="imagen"/>
		<br><br><input class="btn btn-info" type="submit" value="Publicar">
	</form>
</div>