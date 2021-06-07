<?php
 $conexion=mysqli_connect("localhost", "root", "", "proyecto");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Visualizar tabla</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body background="https://www.commentnation.com/backgrounds/images/baby_blue_seamless_paw_prints_wallpaper.gif">
  <div class="cursor">
  <script src="funciones.js"></script>
</div>
    <header>
   <div class="banner">
   </div>
    <div class="barra">
  <nav>
    <ul>
      <li><a href="index.html">Inicio</a></li>
      <li><a href="cuidados.html">Cuidados</a></li>
      <li><a href="razas.html">Razas</a></li>
      <li><a href="formulario.html">Registro</a></li>
      <li><a href="tabla.php">Comunidad</a></li>
      <li><a href="about.html">Acerca de nosotros</a></li>
    </ul>
  </nav>
 </header>
 <div class="cuerpo">
    <br>
    <h1>CONTACTA CON OTROS USUARIOS</h1>
    Es normal que al tener una mascota nos surgan dudas, es por ello, que si gustas 
    contactar con otras personas para resolver las dudas que tengas, las puedes 
    consultar con los siguientes usuarios.
    <br>
    Si gustas ayudar a otros usuarios a resolver sus dudas, registrate en la pestaña de 
    "Registro". <br><br>
        <table border="3" style="border-collapse: collapse; border-color: blue;" align="center" >
            <tr>
                <td bgcolor="lightblue"><b>Nombre de usuario</b></td>
                <td bgcolor="lightblue"><b>E-mail</b></td>
                <td bgcolor="lightblue"><b>Contacto</b></td>
            </tr>
            <?php
            $sql = "SELECT * FROM usuarios";
            $result = mysqli_query($conexion, $sql);
            while($mostrar = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td bgcolor="lightgrey"><?php echo $mostrar ['usuario']?></td>
                <td bgcolor="lightgrey"><?php echo $mostrar ['email']?></td>
                <td bgcolor="lightgrey"><?php echo $mostrar ['contacto']?></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>
</html>