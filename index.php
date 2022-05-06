<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="bootstrap-5.1.3-dist\css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css\indexcss.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  
    <title>Tecfem</title>
</head>

<body onload="interval()">
  <?php
    @include('header.php');
    ?>
    <!--Div del cuerpo-->
  
    <!--Cuerpo-->
    <div id="bordes" class="row">
    <div  id="cuerpo" class="col col-xs-12 col-sm-10 col-md-9 col-lg-9 col-xl-9 ">

    <!--Banner-->
    <div class="row">
        <div id="divbanner" class="col col-xs-8 col-sm-8 col-md-12 col-lg-12 col-xl-12">
            <img id="banner" src="img/bannerindex.png" class="img-fluid" alt="...">
        </div>        
    </div>
    
<!--Cards-->
    <div id="cards" class="row">
      
        <div id="card" class="col ">
            <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <h3>OFERTAS LABORALES PARA MUJERES EN STEM</h3>
                  </div>
                  <div class="flip-card-back">
                   <a id="textflipcard">¿Buscas nuevas oportunidades de trabajo? Empresas publican sus ofertas en nuestro portal</a>
                    <br><button><a href="#">Ver más</a></button>
                  </div>
                </div>
              </div>
        </div>

        <div id="card" class="col">
            <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <h3>SERVICIOS Y PRODUCTOS DE MUJERES</h3>
                  </div>
                  <div class="flip-card-back">
                    <a id="textflipcard" >Miles de mujeres ofrecen sus servicios y productos en nuestra web</a>
                    <br><button><a href="#">Ver más</a></button>
                  </div>
                </div>
              </div>
        </div>

        <div  id="card" class="col">
            <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <h3>AUSPICIADORES</h3>
                  </div>
                  <div class="flip-card-back">
                    <a id="textflipcard" >¿Quieres auspiciar cursos de oficios para mujeres o actividades de nuestra fundación?</a>
                    <br><button><a href="#">Ver más</a></button>
                  </div>
                </div>
              </div>
        </div>

        <div id="card" class="col">
            <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <h3>CAPACITACIONES DE GÉNERO Y OFICIOS</h3>
                  </div>
                  <div class="flip-card-back">
                    <a id="textflipcard">Capacitamos mujeres en el área STEM e impulsamos a las empresas con programas de género</a>
                    <br><button><a href="#">Ver más</a></button>
                  </div>
                </div>
              </div>
        </div>
    </div>

    <div class="row">
        <div id="frase" class="col col-xs-2 col-sm-2 col-md-10 col-lg-10 col-xl-8 mt-5">
            <h2>"La fuerza no viene de la capacidad corporal, sino de la voluntad del alma"</h1>
        </div>
    </div>

<!--Seccion de Quienes somos-->
<div class="row">
  <div class="col">
  <!--
    link imagen
    https://www.freepik.es/foto-gratis/mejores-amigos-angulo-mirando-abajo_7089950.htm
-->

  <div id="divquienessomos" class="row">

    <div id="txtQuieneSomos" class="col col-xs-2 col-sm-10 col-md-5 col-lg-6 col-xl-g">
    <h2>Quienes somos</h2>
    <p>“Somos una organización sin fines de lucro dedicada al ingreso de la mujer a sectores laborales históricamente ejercidos por hombres.
    Sabemos que estas carreras y oficios pueden ser una solución rápida y tangible y es por esto que nos enfocamos en las llamadas carreras STEM (ciencia, tecnología, ingeniería y matemáticas) trabajamos por ese fin, con diferentes herramientas las que son principalmente; nuestro portal web de servicios y trabajo, charlas de género e inclusión, acuerdos con entidades públicas y privadas y capacitación a mujeres de todo Chile a través de nuestra OTEC TECFEM Educa.
</p><br>
<p>
    Nos mueve entregar soluciones reales y efectivas a las mujeres en un contexto laboral y personal. Estamos continuamente buscando, desarrollando y aplicando estrategias que puedan ayudarles a crecer. Creemos en ti y sabemos que: ¡Juntos y juntas derribaremos las brechas de género!
</p> 
  </div>

    <div class="col col-xs- col-sm-10 col-md-5 col-lg-5 col-xl-5">
    <img id="imgQuienesSomos" src="img\quienessomos.PNG">
    </div>
  </div>
  </div>

</div>
<!--Fin seccion quienes somos-->

<!--Seccion que es STEM-->
<div class="row">
  <div id="queEsStem" class="col col-xs-10 col-sm-10 col-md-11 col-lg-11 col-xl-11">
  <h4>¿Qué es STEM?</h4>
  <p>Hace referencia a las áreas de Ciencia, Tecnología, Ingeniería y Matemática (CTIM es su sigla en español). </p>
  
  <p>
  Esta abarca una gran categoría de carreras y profesiones tales como la medicina. Cuándo piensa en un profesional de ingeniería o matemáticas ¿En quién piensa? Para muchos puede venirse a la mente a un conocido o familiar que se desempeñe en el área. Durante mucho tiempo era socialmente aceptado que estas carreras eran aptas para el género masculino. Aun hoy, existe una necesidad de mayor representación de mujeres en el área de STEM. A diferencia de décadas pasadas, existe espacio para ella, pero estas siguen siendo una minoría en el mercado laboral.  
Históricamente las mujeres han tenido un rol secundario en el ámbito educacional. Las familias promovían que las niñas aprendieran labores domésticas antes de aptitudes académicas, especialmente en el área de las ciencias y matemáticas. Según el Ministerio de la mujer, en Chile para el 2018 1 de cada 4 matrículas en el área STEM era por parte de una mujer y “la brecha de género en la matrícula de Pregrado en Tecnología de 75% en desmedro de las mujeres”. 
¿Por qué es importante las mujeres en STEM? “Muchos han señalado que la sociedad en su conjunto avanza cuando contamos con equipos heterogéneos para resolver los problemas científicos y tecnológicos” (Información tomada de Google Art&Culture en el apartado de las mujeres en las TIC).
</p>
<h5>Categorías destacadas</h5>


  <div class="row" id="catdes">
    
  <div class="col col-xs-1 col-sm-1 col-md-2 col-lg-2 col-xl-2 m-1 ms-4" id="catdestt">
    
			<img class="col col-xs-2 col-sm-2 col-md-12 col-lg-10 col-xl-12 m-1" id="imgslide" src="img\informáticas.jpg" alt="Informática" />
      <h5 class="col col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-8 m-1">Informática</h5>
     
		</div>

    <div class="col col-xs-1 col-sm-1 col-md-2 col-lg-2 col-xl-2 m-1" id="catdestt"  >
    <div class="row">
			<img class="col col-xs-2 col-sm-12 col-md-12 col-lg-10 col-xl-12 m-1" id="imgslide" src="img\ingenierasindex.png" alt="Ingenieras" />
      <h5 class="col col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-8 m-1">Ingenieriería</h5>
      </div>
		</div>

    <div class="col col-xs-1 col-sm-1 col-md-2 col-lg-2 col-xl-2 m-1"   id="catdestt">
    <div class="row">
			<img class="col col-xs-12 col-sm-12 col-md-12 col-lg-10 col-xl-12 m-1" id="imgslide" src="img\electrónica.jpg" alt="Electrónica" />
      <h5 class="col col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-8 m-1">Electrónica</h5>
      </div>
		</div>
    <div class="col col-xs-1 col-sm-1 col-md-2 col-lg-2 col-xl-2 m-1"  id="catdestt">
    <div class="row">
			<img class="col col-xs-12 col-sm-12 col-md-12 col-lg-10 col-xl-12 m-1" id="imgslide" src="img\electricidad.jpg" alt="Electrcidad" />
      <h5 class="col col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-8 m-1">Electricidad</h5>
      </div>
		</div>
    <div class="col col-xs-1 col-sm-1 col-md-2 col-lg-2 col-xl-2 m-1"  id="catdestt">
    <div class="row">
			<img class="col col-xs-12 col-sm-12 col-md-12 col-lg-10 col-xl-12 m-1" id="imgslide" src="img\gasfitería.jpg" alt="Gasfitería" />
      <h5 class="col col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-8 ">Gasfitería</h5>
      </div>
		</div>

		

    </div>


</div>
<!--FIn seccion que es stem-->

<!--Seccion de Colaboradores-->
<!--Colaboradores-->

<div id="colaboradoresD">
  <h4>Colaboradores de Técfem</h4>
  <p>Nuestros colaboradores comaprten nuestra visión y nos ayudan a traer más oportunidades para muejeres de STEM.</p>
  <br>

  <div id="imgcolaboradorD" class="col col-xs-1 col-sm-1 col-md-2 col-lg-2 col-xl-2">
  <img src="img\auspiciadorAccenture.png" class="img-fluid" alt="Colaborador de Tecfem">
  </div>
  
  <div id="imgcolaboradorD" class="col col-xs-1 col-sm-1 col-md-2 col-lg-2 col-xl-2">
  <img src="img\auspiciadorBancochile.png" class="img-fluid" alt="Colaborador de Tecfem">
  </div>

  <div id="imgcolaboradorD" class="col col-xs-1 col-sm-1 col-md-2 col-lg-2 col-xl-2">
  <img src="img\auspiciadorBci.png" class="img-fluid" alt="Colaborador de Tecfem">
  </div>

  <div id="imgcolaboradorD" class="col col-xs-1 col-sm-1 col-md-2 col-lg-2 col-xl-2">
  <img src="img\auspiciadorBimbo.jpg" class="img-fluid" alt="Colaborador de Tecfem">
  </div>

  
  <div id="imgcolaboradorD" class="col col-xs-1 col-sm-1 col-md-2 col-lg-2 col-xl-2">
  <img src="img\auspiciadorBolsa.png" class="img-fluid" alt="Colaborador de Tecfem">
  </div>

  <div id="imgcolaboradorD" class="col col-xs-1 col-sm-1 col-md-2 col-lg-2 col-xl-2">
  <img src="img\auspiciadorEbco.jpg" class="img-fluid" alt="Colaborador de Tecfem">
  </div>

  <div id="imgcolaboradorD" class="col col-xs-1 col-sm-1 col-md-2 col-lg-2 col-xl-2">
  <img src="img\auspiciadorEngine.png" class="img-fluid" alt="Colaborador de Tecfem">
  </div>

  <div id="imgcolaboradorD" class="col col-xs-1 col-sm-1 col-md-2 col-lg-2 col-xl-2">
  <img src="img\auspiciadorVerisure.png" class="img-fluid" alt="Colaborador de Tecfem">
  </div>

  <div id="imgcolaboradorD" class="col col-xs-1 col-sm-1 col-md-2 col-lg-2 col-xl-2">
  <img src="img\auspiciadorWaltmart.png" class="img-fluid" alt="Colaborador de Tecfem">
  </div>

</div>


<!--Fin Colaboiradores-->

<!--Beneficios para mujeres-->
<!--Fin beneficios para mujeres-->


<!--Directorio-->
<!--Fin del Directorio-->

</div> <!--Fin Div del cuerpo-->


</div>









<!--Inicio del contenido para dispositivos moviles-->
<div id="cuerpomovil" class="col col-xs-8 col-sm-8">

<!--Banner-->
<div id="divbannermovil" class="col col-xs-10 col-sm-10 col-md-10">
<img id="bannermovil" src="img/bannerindex.png" class="img-fluid" alt="...">
</div>

<!--Frase-->
<div id="divfrasemovil" class="col col-xs-5 col-sm-5">
<h2>"La fuerza no viene de la capacidad corporal, sino de la voluntad del alma".</h1>
</div>


<!--Tarjetas-->
<div  id="cardscont" class="row">

      <div id="contenedordecards" class="col-xs-1 col-sm-1 ms-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Ofertas laborales para mujeres en STEM</h5>
              <p class="card-text">¿Buscas nuevas oportunidades de trabajo? Empresas publican sus ofertas en nuestro portal.</p>
             </div>
            </div>
 
        <div class="card">
          <div class="card-body">
           <h5 class="card-title">Servicios de y para mujeres</h5>
           <p class="card-text">Miles de mujeres ofrecen sus servicios y productos en nuestra web.</p>
          </div>
       </div>
  
      </div>
 <br>

    <div class="row">
        <div id="contenedordecards" class="col-xs-1 col-sm-1">
          <div id="cardcol2" class="card">
              <div class="card-body">
               <h5 class="card-title">Auspiciadores</h5>
                <p class="card-text">¿Quieres auspiciar cursos de oficios para mujeres o actividades de nuestra fundación?.</p>
       
              </div>
            </div>
  
  
          <div class="card">
            <div class="card-body">
            <h5 class="card-title">Capacitaciones de género y oficios</h5>
            <p class="card-text">Capacitamos mujeres en el área STEM e impulsamos a las empresas con programas de género.</p>
      
           </div>
         </div>
     </div>
   </div>

</div>




<!--Quienes somos-->

<div id="divquienessomosmovil" class="row">

<div id="txtmovilsomos" class="col col-xs-8 col-sm-10 col-md-10">
<h4>Quienes somos</h4>
<div id="txtmovilsomos2" class="col col-xs-8 col-sm-10 col-md-10">

<p>“Somos una organización sin fines de lucro dedicada al ingreso de la mujer a sectores laborales históricamente ejercidos por hombres.
Sabemos que estas carreras y oficios pueden ser una solución rápida y tangible y es por esto que nos enfocamos en las llamadas carreras STEM (ciencia, tecnología, ingeniería y matemáticas) trabajamos por ese fin, con diferentes herramientas las que son principalmente; nuestro portal web de servicios y trabajo, charlas de género e inclusión, acuerdos con entidades públicas y privadas y capacitación a mujeres de todo Chile a través de nuestra OTEC TECFEM Educa.
</p><br>
<p>
Nos mueve entregar soluciones reales y efectivas a las mujeres en un contexto laboral y personal. Estamos continuamente buscando, desarrollando y aplicando estrategias que puedan ayudarles a crecer. Creemos en ti y sabemos que: ¡Juntos y juntas derribaremos las brechas de género!
</p> 
</div>
</div>
</div>


<!--Qué es Stem-->
<div id="queEsStemmovil" class="col col-xs-8 col-sm-12">
  <h4>¿Qué es STEM?</h4>

  <div id="queEsStemmovil2" class="col col-xs-8  col-sm-12">
  <p>Hace referencia a las áreas de Ciencia, Tecnología, Ingeniería y Matemática (CTIM es su sigla en español). </p>
  
  <p>
  Esta abarca una gran categoría de carreras y profesiones tales como la medicina. Cuándo piensa en un profesional de ingeniería o matemáticas ¿En quién piensa? Para muchos puede venirse a la mente a un conocido o familiar que se desempeñe en el área. Durante mucho tiempo era socialmente aceptado que estas carreras eran aptas para el género masculino. Aun hoy, existe una necesidad de mayor representación de mujeres en el área de STEM. A diferencia de décadas pasadas, existe espacio para ella, pero estas siguen siendo una minoría en el mercado laboral.  
Históricamente las mujeres han tenido un rol secundario en el ámbito educacional. Las familias promovían que las niñas aprendieran labores domésticas antes de aptitudes académicas, especialmente en el área de las ciencias y matemáticas. Según el Ministerio de la mujer, en Chile para el 2018 1 de cada 4 matrículas en el área STEM era por parte de una mujer y “la brecha de género en la matrícula de Pregrado en Tecnología de 75% en desmedro de las mujeres”. 
¿Por qué es importante las mujeres en STEM? “Muchos han señalado que la sociedad en su conjunto avanza cuando contamos con equipos heterogéneos para resolver los problemas científicos y tecnológicos” (Información tomada de Google Art&Culture en el apartado de las mujeres en las TIC).
</p>
<br>
<h5>Categorías destacadas</h5>

<ul id="listcate" class="list-group list-group-flush ">
  <li class="list-group-item">Ingenieriería</li>
  <li class="list-group-item">Tecnología</li>
  <li class="list-group-item">Gasfitería</li>
  <li class="list-group-item">Electrónica</li>
  <li class="list-group-item">Electrcidad</li>
</ul>

</div>
</div>

<!--Colaboradores-->

<div id="colaboradores">
  <h4>Colaboradores de Técfem</h4>
  <p>Nuestros colaboradores comaprten nuestra visión y nos ayudan a traer más oportunidades para muejeres de STEM.</p>
  <br>

  <div id="imgcolaborador" class="col col-xs-1 col-sm-1 col-md-2 col-lg-2 col-xl-2">
  <img src="img\auspiciadorAccenture.png" class="img-fluid" alt="Colaborador de Tecfem">
  </div>
  
  <div id="imgcolaborador" class="col col-xs-1 col-sm-1 col-md-2 col-lg-2 col-xl-2">
  <img src="img\auspiciadorBancochile.png" class="img-fluid" alt="Colaborador de Tecfem">
  </div>

  <div id="imgcolaborador" class="col col-xs-1 col-sm-1 col-md-2 col-lg-2 col-xl-2">
  <img src="img\auspiciadorBci.png" class="img-fluid" alt="Colaborador de Tecfem">
  </div>

  <div id="imgcolaborador" class="col col-xs-1 col-sm-1 col-md-2 col-lg-2 col-xl-2">
  <img src="img\auspiciadorBimbo.jpg" class="img-fluid" alt="Colaborador de Tecfem">
  </div>

  
  <div id="imgcolaborador" class="col col-xs-1 col-sm-1 col-md-2 col-lg-2 col-xl-2">
  <img src="img\auspiciadorBolsa.png" class="img-fluid" alt="Colaborador de Tecfem">
  </div>

  <div id="imgcolaborador" class="col col-xs-1 col-sm-1 col-md-2 col-lg-2 col-xl-2">
  <img src="img\auspiciadorEbco.jpg" class="img-fluid" alt="Colaborador de Tecfem">
  </div>

  <div id="imgcolaborador" class="col col-xs-1 col-sm-1 col-md-2 col-lg-2 col-xl-2">
  <img src="img\auspiciadorEngine.png" class="img-fluid" alt="Colaborador de Tecfem">
  </div>

  <div id="imgcolaborador" class="col col-xs-1 col-sm-1 col-md-2 col-lg-2 col-xl-2">
  <img src="img\auspiciadorVerisure.png" class="img-fluid" alt="Colaborador de Tecfem">
  </div>

  <div id="imgcolaborador" class="col col-xs-1 col-sm-1 col-md-2 col-lg-2 col-xl-2">
  <img src="img\auspiciadorWaltmart.png" class="img-fluid" alt="Colaborador de Tecfem">
  </div>

</div>



</div>
</div>
</div>
    <!--Inicio del footer-->
    <br><br>
  <footer>
    <?php
    @include('footer.php');

    ?>
  </footer>
    <!--Fin de footer -->

      <!--js de bootstap-->
  <script src="\bootstrap-5.1.3-dist\js"></script>
    <script src="js\index.js"></script>
  
  </body>

</html>