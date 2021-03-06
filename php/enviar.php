
<?php

$destino="laabuelamatie@hotmail.com";
$nombre=$_POST["nombre"];
$Email=$_POST["Email"];
$telefono=$_POST["telefono"];
$mensaje=$_POST["mensaje"];

$contenido= "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTelefono: " . $tefelono . "\nMensaje " . $mensaje;

mail($destino, "Contacto", $contenido);

header("Location:index.html")

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/7933f2fedc.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&family=Libre+Bodoni:ital@1&family=Send+Flowers&display=swap" rel="stylesheet">

  <!-- Keywords -->
  <meta name="keywords" content="Rotiseria, Casa de comidas, comidas rapidas, delivery de comidas en zona sur, zona sur, rotiserias en Quilmes, Rotiseria La Abu Matie">

  <!-- Description -->
  <meta name="description" content="Rotiseria y casa de comidas, hacemos delivery por Quilmes Oeste,Zona Sur. Vendemos viandas personalizadas, comida casera y comidas rapidas. ">

 <!-- Link a estilos bootstrap -->
 <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 
 
 <!-- Link a mi css -->
 <link rel="stylesheet" href="css/maincss.css">

 <!-- Favicon -->
 <link rel="icon" href="./iconos/favicon-32x32.png">
 
 <!-- Title -->
 <title>Rotiseria La Abuela Matie - Home</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="./imagenes nuevas/logo_transp.png" alt="">
          </a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarNavDropdown">
       <ul class="navbar-nav">
         <li class="nav-item">
          <button type="button" class="btn btn-outline-secondary">
           <a class="nav-link active" aria-current="page" href="/index.html">Home</a>
           </button>
         </li>
         <li class="nav-item">
          <button type="button" class="btn btn-outline-secondary">
           <a class="nav-link" href="./pages/galeria.html">Galeria</a>
          </button>
         </li>
         <li class="nav-item">
          <button type="button" class="btn btn-outline-secondary">
           <a class="nav-link" href="./pages/menus.html">Menus</a>
          </button>
         </li>
         <li class="nav-item dropdown">
          <button type="button" class="btn btn-outline-secondary">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Mas...
           </a>
           <ul class="dropdown-menu bg-secondary"  aria-labelledby="navbarDropdownMenuLink">
             <li><a class="dropdown-item" href="./pages/viandas.html">Viandas</a></li>
             <li><a class="dropdown-item" href="./pages/nosotros.html">Nosotros</a></li>
           </ul>
          </button>
         </li>
       </ul>
    </div>
    </div>
    </nav>
    
    <header class= "home-header">
    
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./imagenes nuevas/lasagna-1900529_960_720.jpg" class="d-block img-fluid w-100" widht="800" height="300" alt="...">
              </div>
        <div class="carousel-item">
          <img src="./imagenes nuevas/pasta-1181189_960_720.jpg" class="d-block img-fluid w-100" widht="800" height="300" alt="...">
              </div>
        <div class="carousel-item">
          <img src="./imagenes nuevas/pizza-3010062_960_720.jpg" class="d-block img-fluid w-100" widht="800" height="300" alt="...">
              </div>
                  </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
          </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
            </button>
                  </div>
                        <div>
                            <h1>Comidas caseras, elaboradas con amor y sabor</h1>
                                  </div>
                                        </header>
    
    <main>
      <section class="seccion-1">
          <div class="mensaje-inicial">
    
              <p> Bienvenidos a <span>La Abuela Matie Rotiseria</span>, un emprendimiento familiar de gran prestigio en el sector gastron??mico y atendido por sus due??os. </p>
              <br>
              <p>Te ofrecemos platos confeccionados para sentirte como si estuvieras en tu casa.</p><br>
                  <span>Nuestros sabores</span> <br><p> te van a llevar a aquellos recuerdos de los domingos en familia, disfrutando del placer de comer rico.</p>
    <br>
              <p>Contamos con servicio de delivery.
              </p>
          </div>
      </section>
  
<section class="fondo-formulario">
  <form action="enviar.php" method="post" class="formulario">
    <h1 class="formulario__titulo">Cont??ctenos</h1>
      <input type="text" name="nombre" class="formulario__input">
      <label for="" class="formulario__label">Nombre y Apellido</label>
      <input type="text" name="Email" class="formulario__input">
      <label for="" class="formulario__label">Email</label>
      <input type="text" name="telefono" class="formulario__input">
      <label for="" class="formulario__label">Telefono</label>
      <input type="text" class="formulario__input">
      <label for="" name="mensaje" class="formulario__label">Deje su mensaje</label>
      <input type="submit" class="formulario__submit">
  </form>
</section>
    
<section class="video">
  <div>
    <iframe class="player" src="https://www.youtube.com/embed/-aF8lH-QxYs" frameborder="0" allowfullscreen></iframe>
  </div>
</section>
   </main>

    
    <footer class="pie-de-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure> 
                    <a id="bottom">
                        <img src="./imagenes nuevas/logo_transp.png" alt="logo de la pagina">
                     </a>
                </figure>
            </div>
    
             <div class="box">
                 <h2>HORARIOS Y CONTACTO</h2>
                <ul>
                    <li>Miercoles a Domingos</li> 
                    <li>11.30 a 15 y de 19.30 a 23.30 hs</li>
                    <li>Whatsapp: +54 11 2842-1359</li>
                    <li>Telefono: 011 2842-1359</li>
                    <li>Direccion: 881 N?? 5000, San Fco. Solano</li>
                    <li>Mail: laabuelamatie@hotmail.com</li>
                </ul>
            </div>
        <div class="red-social">
            <h2>SEGUINOS EN</h2>
            <a href="https://wa.me/541128421359" class="fa-fa-whatsapp">
              <i class="fa-brands fa-whatsapp"></i>
            </a>
            <a href="https://www.facebook.com/LaAbuMatie/" class="fa-fa-facebook">
              <i class="fa-brands fa-facebook"></i>
            </a>
            <a href="https://instagram.com/laabumatie?utm_medium=copy_link" class="fa-fa-instagram">
              <i class="fa-brands fa-instagram"></i>
            </a>
        </div>
      </div>
      
        <div class="grupo-2">  
            <small>&copy; 2022 <b>La Abu Matie</b> - Todos los derechos reservados. </small>     
    </div>
    </footer>
    
    
  

    
</body>
<script src="form.js"></script>

<!-- Link a script de bootstrap --> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>





