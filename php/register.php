<?php
    
    include 'conexion.php';
    //cariables de las tablas
    $nombre = $_POST["nombre"];
    $nick_name = $_POST["nick_name"];
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];
    $contrasena = hash('sha512', $contrasena);

    //variable para insertar los datos en la base de datos 



    $query = "INSERT INTO usuarios(nombre, nick_name, correo, contrasena) 
              VALUES ('$nombre','$nick_name','$correo','$contrasena')";
              
    //variables para hacer lo que es la validacion de datos 

    $verificar_nombre = mysqli_query ($conexion,  "SELECT * FROM usuarios WHERE nombre = '$nombre'");
    $verificar_usuario = mysqli_query ($conexion,  "SELECT * FROM usuarios WHERE nick_name = '$nick_name'");
    $verificar_correo = mysqli_query ($conexion, "SELECT * FROM usuarios WHERE correo= '$correo'");

    //aqui valido los datos con un or para no hacer todos en solo uno 

    if ((mysqli_num_rows($verificar_nombre) > 0 ||
        mysqli_num_rows($verificar_usuario) > 0||
        mysqli_num_rows($verificar_correo) > 0)){
        echo '
         <script>
           alert ("correo, usuario o nombre ya registrados intentalo de nuevo");
           window.location ="../html/index.php"
         </script>
         ';
         exit();
    }
    
//esto es la conexion y la recoguida de datos pero no funciona :c

    $ejecutar = mysqli_query($conexion, $query);

    if ($ejecutar){
        echo'
        <script>
             alert("usuario registrado exitosamente")
             window.location ="../paginas/login.php"
        </script>     
             ';
    }else{
    echo '
        <script>
             alert("error usuario no registrado")
             window.location ="../paginas/login.php"
        </script>     
             ';
    }

mysqli_close($conexion);


?>