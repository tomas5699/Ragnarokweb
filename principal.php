<?php
include("db.php");
session_start();
if (!isset($_SESSION['usuario'] )) {
    echo '
        <script>
       window.location = "../web-Ragnarok-main/index.html";
        </script>
        ';
    session_destroy();
    die();
}

$usuario = $_SESSION['usuario'];
$validar_login =  "SELECT usuario, nombre, apellido FROM usuarios where usuario='$usuario'";
$resultado =$conexion->query($validar_login);
$row = $resultado->fetch_assoc();


?>

<!DOCTYPE html>
<html>

<head>
    <title>Ragnarok </title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="web-Ragnarok-main/css/mi_estilo.css">
    <script src="js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>


</head>

<body background="https://as.com/meristation/imagenes/2020/03/18/noticias/1584542832_808762_1584542931_noticia_normal.jpg">

  <nav class="navbar navbar-expand-lg navbar-light bg-light">

        
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
     
            <a class="navbar-brand" href="#">
                <font color= #ff0697>
                   
                        <font size="10"> Ragnarok </font>
                    
                </font>
        
        </a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <font color= #ff0697>
                    
                        <font size="10">
                            
         <?php
           $usuario = $_SESSION['usuario'];
           echo utf8_decode($row['nombre']);
           echo ' ';
           echo utf8_decode($row['apellido']);
         ?>
       
           
                  </font>
                </font>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
    
          <a class="dropdown-item" href="cerrar_sesion.php"><b><strong>Cerrar Sesión</strong></b></a>
        </div>
      </li>
  
            </ul>

        </div>
       
    </nav>

    <br>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <center><img src="img/carrusel/ima1.jpg" class="d-block w-90" alt="..."></center>
            </div>
            <div class="carousel-item">
                <center><img src="img/carrusel/ima2.jpg" class="d-block w-90" alt="..."></center>
            </div>
            <div class="carousel-item">
                <center><img src="img/carrusel/ima3.jpg" class="d-block w-90" alt="..."></center>
            </div>
            <div class="carousel-item">
                <center><img src="img/carrusel/ima4.jpg" class="d-block w-90" alt="..."></center>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    </br>

   <main class="container-fluid">
        <br>
        <div class="row">
            <div class="col-sm">
                <div class="card" style="background-color: black">
                    <center><img src="https://images-na.ssl-images-amazon.com/images/I/81EWBpGwbKL._AC_SL1500_.jpg" class="d-block w-50" alt="..."></center>
                    <div class="card-body">
                        <center>
                            <h5 class="card-title">
                                <font color="0AF76B">FIFA 2021</h5>
                            </font>
                        </center>
                        <p class="card-text">
                            <font color="F8FDFD">FIFA 21 es un videojuego de simulación de fútbol del año 2020 disponible para Microsoft Windows, PlayStation 4, Xbox One y Nintendo Switch el 9 de octubre de 2020, y aparte es el primer videojuego de la serie FIFA para Google
                                Stadia, PlayStation 5 y Xbox Series X|S.</p>
                            </font>
                        <center><a href="Descarga1.html" class="btn btn-primary">Go Download </a></center>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" style="background-color: black">
                    <center><img src="https://images-na.ssl-images-amazon.com/images/I/915vmmyZhiL._AC_SL1500_.jpg" class="d-block w-50" alt="..."></center>
                    <div class="card-body">
                        <center>
                            <h5 class="card-title">
                                <font color="0AF76B">Far Cry 4</h5>
                            </font>
                        </center>
                        <p class="card-text">
                            <font color="F8FDFD">Far Cry 4 es un videojuego de acción en primera persona de mundo abierto desarrollado por Ubisoft Montreal en conjunto con Ubisoft Red Storm, Ubisoft Toronto, Ubisoft Shanghai y Ubisoft Kiev y distribuido por Ubisoft.</p>
                        </font>
                        <center><a href="Farcry4.html" class="btn btn-primary">Go Download </a></center>
                    </div>
                </div>
            </div>

            <div class="col-sm">
                <div class="card" style="background-color: black">
                    <center><img src="https://images-na.ssl-images-amazon.com/images/I/91IHut4C9vL._AC_SL1500_.jpg" class="d-block w-50" alt="..."></center>
                    <div class="card-body">
                        <center>
                            <h5 class="card-title">
                                <font color="0AF76B">Far Cry Primal </h5>
                            </font>
                        </center>
                        < <p class="card-text">
                            <font color="F8FDFD">Far Cry Primal es un videojuego de acción y aventura en primera persona distribuido por Ubisoft y desarrollado por Ubisoft Montreal para las plataformas Microsoft Windows, Xbox One y PlayStation 4. Es la secuela de Far Cry
                                4.
                                </p>
                            </font>
                            <center><a href="Farcryprimal.html" class="btn btn-primary">Go Download</a></center>
                    </div>
                </div>
            </div>
        </div>

        <br />
        <div class="row">
            <div class="col-sm">
                <div class="card tamanho-card" style="background-color: black">
                    <center><img src="https://www.compucalitv.com/wp-content/uploads/2021/04/Nemesis-Race-Against-The-Pandemic-2021-PC-Full-Espanol-Portada-1.jpg" class="d-block w-50" alt="..."></center>
                    <div class="card-body">
                        <center>
                            <h5 class="card-title">
                                <font color="0AF76B">NEMESIS</h5>
                        </center>
                        </font>
                        <p class="card-text">
                            <font color="F8FDFD">Es un juego de disparos en tercera persona. Nuestro protagonista, Connor Sergei, es un agente especial de una unidad militar altamente clasificada Quantum. Quantum obtuvo información sobre un grupo terrorista malvado formado por antiguos militares conocido como Alas Negras. </p>
                        </font>
                        <center><a href="Nemesis.html" class="btn btn-primary">Go Download</a></center>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card tamanho-card" style="background-color: black">
                    <center><img src="https://images-na.ssl-images-amazon.com/images/I/91ukzWGzKrL._AC_SL1500_.jpg" class="d-block w-50" alt="..."></center>
                    <div class="card-body">
                        <center>
                            <h5 class="card-title">
                                <font color="0AF76B">Far Cry 3</h5>
                            </font>
                        </center>
                        <p class="card-text">
                            <font color="F8FDFD">Far Cry 3 es un juego de acción y supervivencia en el trópico, creado por Ubisoft Montreal y Massive Studios que se lanzó el 29 de noviembre del 2012 para PlayStation 3, Xbox 360 y Microsoft Windows..</p>
                        </font>
                        <center><a href="Farcry3.html" class="btn btn-primary">Go Download</a></center>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card tamanho-card" style="background-color: black">
                    <center><img src="https://www.compucalitv.com/wp-content/uploads/2019/03/visage-pc-full-espanol-portada.jpg" class="d-block w-50" alt="..."></center>
                    <div class="card-body">
                        <center>
                            <h5 class="card-title">
                                <font color="0AF76B">Visage</h5>
                            </font>
                        </center>
                        <p class="card-text">
                            <font color="F8FDFD">Perturbador e interesante se puede definir Visage PC Full Español un juego de terror psicológico en primera persona donde el explora lo es todo. Viaja por una misteriosa casa en constante cambio sumergiéndote lentamente en una atmósfera que combina entornos acogedores e inquietantes con otros terroríficamente realistas, y disfruta de una auténtica experiencia de terror.</p>
                        </font>
                        <center><a href="Visage.html" class="btn btn-primary">Go Download</a></center>
                    </div>
                </div>
            </div>

        </div>



        <br />

    </main>
       
</body>

</html>