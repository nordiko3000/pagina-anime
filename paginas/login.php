<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    
    
    <div class="login">
    <img src="../imagenes/login/354355.jpg" class="avatar">
    <h1>Login here</h1>
    <form>
         <label for="username" class="g">Usuario</label>
         <input type="text" placeholder="Introduzca su usuario">
         
         <label for="username" class="g">Contraseña</label>
         <input type="password" placeholder="Introduzca su contraseña">
         
         <input type="submit" value="Iniciar Sesion">
         <a href="index.html"><input type="submit" value="inicio"></a>
         
         
    </form>    
    </div>
    
    <main>
        <form class="register" action="../php/register.php" method="POST">
            <h1>Registrate</h1>
            <label for="username" class="g">Correo</label>
            <input type="text" placeholder="Introduzca su nombre completo" name="nombre">
         
            <label for="username" class="g">Usuario</label>
            <input type="text" placeholder="Introduzca usuario" name="nick_name">
         
            <label for="username" class="g">Nombre</label>
            <input type="text" placeholder="Introduzca su correo" name="correo">
        
            <label for="username" class="g">contraseña</label>
            <input type="password" placeholder="Introduzca su contraseña" name="contrasena">
         
         
         <button id="boton"> Registrate</button>
         
         
        
        </form>
    </main>    
    
       
    
    
    
</body>

</html>