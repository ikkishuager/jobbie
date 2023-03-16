
<?php
 
 include('BD/config.php');
 session_start();
  
 if (isset($_POST['login'])) {
  
     $username = $_POST['username'];
     $password = $_POST['password'];
  
     $query = $connection->prepare("SELECT * FROM users WHERE USERNAME=:username");
     $query->bindParam("username", $username, PDO::PARAM_STR);
     $query->execute();
  
     $result = $query->fetch(PDO::FETCH_ASSOC);
  
     if (!$result) {
         echo '<p class="error">Datos erroneos o no existen!</p>';
     } else {
         if (password_verify($password, $result['password'])) {
             $_SESSION['user_id'] = $result['ID'];
             echo '<p class="success">Haz iniciado sesión con exito</p>';
             sleep(1);
             header("location:Inicio.php");
         } else {
             echo '<p class="error">Nombre de usuario o contraseña erroneos!</p>';
         }
     }
 }

 ?>
<link rel="stylesheet" type="text/css" media="screen" href="css/estilos.css">
<div><img src="imagenes/jobbielogo.png" alt=""/></div>
<header>De talento a morlacos...</header>


<form method="post" action="" name="signin-form">
    <div class="form-element">
        <label>Nombre Usuario</label>

        <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
    </div>
    <div class="form-element">
        <label>Contraseña</label>
        <input type="password" name="password" required />
    </div>
    <button type="submit" name="login" value="login">Entrar</button>
    <h1><a href="register.php">Registrate Aquí</a></h1>
</form>

