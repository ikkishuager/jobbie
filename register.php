
<?php
 
 include('BD/config.php');
 session_start();
  
 if (isset($_POST['register'])) {
  
     $username = $_POST['username'];
     $email = $_POST['email'];
     $name = $_POST['name'];
     $lastname = $_POST['lastname'];
     $address = $_POST['address'];
     $password = $_POST['password'];
     $password_hash = password_hash($password, PASSWORD_BCRYPT);
  
     $query = $connection->prepare("SELECT * FROM users WHERE EMAIL=:email");
     $query->bindParam("email", $email, PDO::PARAM_STR);
     $query->execute();
  
     if ($query->rowCount() > 0) {
         echo '<p class="error">Este correo ya está registrado</p>';
     }
  
     if ($query->rowCount() == 0) {
         $query = $connection->prepare("INSERT INTO users(USERNAME,PASSWORD,EMAIL,NAME,LASTNAME,ADDRESS) VALUES (:username,:password,:email,:name,:lastname,:address)");
         $query->bindParam("username", $username, PDO::PARAM_STR);
         $query->bindParam("password", $password_hash, PDO::PARAM_STR);
         $query->bindParam("email", $email, PDO::PARAM_STR);
         $query->bindParam("name", $name, PDO::PARAM_STR);
         $query->bindParam("lastname", $lastname, PDO::PARAM_STR);
         $query->bindParam("address", $address, PDO::PARAM_STR);
         $result = $query->execute();
  
         if ($result) {
             echo '<p class="success">Tu registro fue exitoso</p>';
             sleep(1);
             header("location:login.php");
         } else {
             echo '<p class="error">Algo salio mal</p>';
         }
     }
 }
  
 ?>
<link rel="stylesheet" type="text/css" media="screen" href="css/estilos.css">
<div><img src="imagenes/jobbielogo.png" alt=""/></div>
<header>De talento a morlacos...</header>
<form method="post" action="" name="signup-form">
    <div class="form-element">
        <label>Nombre Usuario</label>
        <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
    </div>
    <div class="form-element">
        <label>Contraseña</label>
        <input type="password" name="password" required />

    </div>
    <div class="form-element">
        <label>Nombre</label>
        <input type="text" name="name" pattern="[a-zA-Z0-9]+" required />
        </div>
        <div class="form-element">
        <label>Apellido</label>
        <input type="text" name="lastname" pattern="[a-zA-Z0-9]+" required />
        </div>
    <div class="form-element">
        <label>Correo</label>
        <input type="email" name="email" required />
    </div>
    <div class="form-element">
        <label>Direccion</label>
        <input type="text" name="address" required />
    </div>
    <button type="submit" name="register" value="register">Registar</button>
    
    


</form>