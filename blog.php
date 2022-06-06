<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/blog.css" >
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconectar" href="https://fonts.gstatic.com">
    <link href="https: //fonts.googleapis.com/css2? family= Lato:ital,wght@0,100;0,400;1,400 & display=swap" rel="stylesheet">


    <title>Document</title>
</head>
<body>

    <header class="header" id="inicio" >
        <img src="img/icono.menu.svg" alt="icono menu" class="menu">
        <nav class="menu-navegacion">
        <a href="#inicio">Inicio</a>
        <a href="#servicio">Servicio</a>
        <a href="#portafolio">Galeria</a>
        <a href="#expertos">Testimonios</a>
        <a href="#contacto">Contacto</a>
    </nav>

    <div class="contenedor head" >
        <h1 class="titulo" >Bienvenida a mi Blog</h1>
        <p class="copy" >Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        
        <form action='destroy.php'>
        <input type="submit" name="destroysession" value="Cerrar sesion"/>
        </form>
        <!---<a href="destroy.php" > Cerrar sesion</a>-->

    </div>
    </header>

    <!------Contenido dentro del main---------->
    <main>
        <section class="contenedor" id="servicio">
            <h2 class="subtitulo" >Acerca de Mi</h2>
            <div class="contenedor-servicio" >
                


            <div class="checklist-servicio">
                <img src="img/experto.jpg" class="col-md-6 float-md-end mb-3 ms-md-3" alt="..." width="150" height="350" >
              
                <p>
                  A paragraph of placeholder text. We're using it here to show the use of the clearfix class. We're adding quite a few meaningless phrases here to demonstrate how the columns interact here with the floated image.
                </p>
              
                <p>
                  As you can see the paragraphs gracefully wrap around the floated image. Now imagine how this would look with some actual content in here, rather than just this boring placeholder text that goes on and on, but actually conveys no tangible information at. It simply takes up space and should not really be read.
                </p>
              
                <p>
                  And yet, here you are, still persevering in reading this placeholder text, hoping for some more insights, or some hidden easter egg of content. A joke, perhaps. Unfortunately, there's none of that here.
                </p>
              </div>
              

        </section>

        <section class="gallery" id="portafolio">
            <div class="contenedor" >
                <h2 class="subtitulo" >Galería</h2>
                <div class="contenedor-galeria">
                    <img src="img/foto.jpg" alt="" class="img-galeria" >
                    <img src="img/foto1.jpg" alt=""class="img-galeria" >
                    <img src="img/foto2.jpg" alt="" class="img-galeria">
                    <img src="img/foto.jpg" alt="" class="img-galeria">
                    <img src="img/foto1.jpg" alt="" class="img-galeria">
                    <img src="img/foto2.jpg" alt="" class="img-galeria">
                </div>
            </div>

        </section>
        
        <!--<section class="imagen-light">
            <img src="img/icono.x.svg" alt="cerrar" class="cerrar">
            <img src="img/foto.jpg" alt="" class="agregar-imagen" >
        </section>--->

        <?php include ("calificacion.php") ?>
       
        <?php include ("comentarios.php") ?>
    
      

    </main>
    
    <footer id="contacto" >
        <div class="contendor footer-content">
            <div class="contact-us">
                <h2 class="brand"> Tecfem</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias mollitia architecto, adipisci iusto commodi fugiat autem? Vitae, qui in excepturi animi dolorem quia, id libero atque perferendis assumenda fugiat deserunt.</p>   
            </div>

            <div class="social-media" >
                <a href="" class="social-media-icon">
                    <i class='bx bxl-facebook-circle'></i>
                </a>

                <a href="" class="social-media-icon">
                    <i class='bx bxl-twitter'></i>
                </a> 

                <a href="" class="social-media-icon">
                    <i class='bx bxl-instagram-alt'></i>
                </a>
                
            </div>


        </div>
        <div class="line"></div>
        
    </footer>
    

  


    <script src="js/menu.js"></script>
    <script src="js/lightbox.js" ></script>
</body>
</html>
