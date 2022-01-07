<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Punto de Encuentro</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <style type="text/css">
    html,
    body,
    header,
    .view {
      height: 100%;
    }

    @media (max-width: 740px) {
      html,
      body,
      header,
      .view {
        height: 1000px;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      html,
      body,
      header,
      .view {
        height: 650px;
      }
    }
    @media (min-width: 800px) and (max-width: 850px) {
              .navbar:not(.top-nav-collapse) {
                  background: #1C2331!important;
              }
          }
      
      .rgba-gradient {
          background: -webkit-linear-gradient(45deg, rgba(160, 160, 130, 0.7), rgba(255, 255, 255, 0.4) 100%);
          background: -webkit-gradient(linear, 45deg, from(rgba(160, 160, 130, 0.7), rgba(255, 255, 255, 0.4) 100%)));
          background: linear-gradient(to 45deg, rgba(0, 0, 0, 0.7), rgba(255, 255, 255, 0.4) 100%);
      }

      .card {
        background-color: rgba(126, 123, 215, 0.2);
      }

      .md-form label, i {
        color: #ffffff;
      }  
               
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

      <!-- Brand -->

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Inicio
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#spaanseles">Clase de español</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#docenten">Maestros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#certificaten">Certificados</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="inscripcion%20escuelita%20de%20espanol%202021-2022.pdf">Inscripción</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#wiezijnwij">¿Quiénes somos?</a>
          </li>
          </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a href="https://www.facebook.com/escuelaalmerepuntodeencuentro" class="nav-link" target="_blank">
              <i class="fab fa-facebook-square"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://www.youtube.com/channel/UCMSdxMCw1HQahqM6G9v712Q" class="nav-link" target="_blank">
              <i class="fab fa-youtube-square"></i>
            </a>
          </li>        
           <li class="nav-item">
            <a class="nav-link" href="index.php"><img src="/img/svg/nl.svg.png" alt=""></a>
          </li>
          </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->

  <!-- Full Page Intro -->
  <div class="view full-page-intro" style="background-image: url('/img/background/bg.jpg'); background-repeat: no-repeat; background-size: cover;">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

      <!-- Content -->
      <div class="container">

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col-md-6 mb-4 white-text text-center text-md-left">

            <h1 class="display-4 font-weight-bold">Aprender español</h1>

            <hr class="hr-light">

            <p>
              <strong>Para familias donde se habla español.</strong>
            </p>

            <p class="mb-4 d-none d-md-block">
              <strong>Enseñamos español para niños con antecedentes españoles o latinoamericanos.</strong>
            </p>

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 col-xl-5 mb-4">

            <!--Card-->
            <div class="card rgba-gradient">

              <!--Card content-->
              <div class="card-body">
                  
                <!-- Form -->
                    <form id ="contact-form" name="contact-form" action="mail.php" method="POST"  onsubmit="return validateForm()" >
                        <h3 class="dark-grey-text text-center">
                            <strong>Escríbenos:</strong>
                        </h3>                    
                        <div class="md-form">
                            <i class="fas fa-user prefix"></i>
                            <input type="text" id="name" name="name" class="form-control">    
                            <label for="name" class="">Tu nombre</label>                       
                        </div>
                        <div class="md-form">
                            <i class="fas fa-envelope prefix"></i>
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Correo electrónico</label>
                        </div>
                        <div class="md-form">
                            <i class="fas fa-info-circle prefix"></i>
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="">Asunto</label>
                        </div>
                        <div class="md-form">
                            <i class="fas fa-pencil-alt prefix"></i>
                            <textarea type="text" id="message" name="message" class="md-textarea"></textarea>    
                            <label for="message">¿En qué podemos ayudarlo?</label>
                        </div>
                        <div class="text-center">
                            <a class="btn btn-indigo" onclick="validateForm()">Enviar</a>               
                        </div>
                        <div class="text-center">
                            <div class="status white-text" id="status">&nbsp;</div>        
                        </div>
                    </form>
                <!-- Form -->               
                                    
              </div>

            </div>
            <!--/.Card-->

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </div>
      <!-- Content -->

    </div>
    <!-- Mask & flexbox options-->

  </div>
  <!-- Full Page Intro -->

  <!--Main layout-->
  <main>
    <div class="container">

    <a name="spaanseles"></a>        
    <br><br>
        
      <!--Section: Main info-->
      <section class="mt-5 wow fadeIn">

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-md-6 mb-4">

            <img src="/img/photos/spaanseles.jpg" class="img-fluid z-depth-1-half" alt="">

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 mb-4">
              
            <!-- Main heading -->
            <h3 class="h3 mb-3">Clase de español</h3>
            <p>Damos lecciones a niños de 4 a 12 años con padres Españoles y América Latina. Las clases tienen lugar todos los sábados de 10 a.m. a 11:30 a.m. Durante las lecciones, por un lado, se enseña el idioma español y, por otro lado, se enseñan las tradiciones de los países de habla hispana. </p>
            <!-- Main heading -->

            <p>La escuela tiene una grande historia cultural, ya que los niños y los maestros se reúnen de casi todos los países de habla hispana. La reunión con otros niños anima a los niños a expresarse en español.</p>

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Main info-->

    <a name="docenten"></a>        

      <hr class="my-5">

      <!--Section: Main features & Quick Start-->
      <section>

        <h3 class="h3 text-center mb-5">Maestros</h3>

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col-lg-6 col-md-12 px-4">

            <!--First row-->
            <div class="row">
              <div class="col-1 mr-3">
                <i class="fas fa-globe fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h5 class="feature-title">Antecedentes</h5>
                <p class="grey-text">Todos los maestros tienen antecedentes españoles o latinoamericanos.</p>
              </div>
            </div>
            <!--/First row-->

            <div style="height:30px"></div>

            <!--Second row-->
            <div class="row">
              <div class="col-1 mr-3">
                <i class="fas fa-certificate fa-2x blue-text"></i>
              </div>
              <div class="col-10">
                <h5 class="feature-title">Calificado</h5>
                <p class="grey-text">Su hijo recibe las lecciones por maestros competente para enseñar el idioma español.
                </p>
              </div>
            </div>
            <!--/Second row-->

            <div style="height:30px"></div>

            <!--Third row-->
            <div class="row">
              <div class="col-1 mr-3">
                <i class="fas fa-id-badge fa-2x cyan-text"></i>
              </div>
              <div class="col-10">
                <h5 class="feature-title">Referencias</h5>
                <p class="grey-text"> 
                  Garantizamos una alta calidad al verificar las referencias del maestro para que su hijo pueda desarrollarse en un ambiente seguro.</p>
              </div>
            </div>
            <!--/Third row-->

          </div>
          <!--/Grid column-->

          <!--Grid column-->
          <div class="col-md-6 mb-4">

            <img src="/img/photos/docenten.jpg" class="img-fluid z-depth-1-half" alt="">

          </div>
          <!--Grid column-->            
            
        </div>
        <!--/Grid row-->      
          
      </section>
      <!--Section: Main features & Quick Start-->

    <a name="certificaten"></a>        
        
      <hr class="my-5">

      <!--Section: Main info-->
      <section class="mt-5 wow fadeIn">

        <!--Grid row-->
        <div class="row">
         
          <!--Grid column-->
          <div class="col-md-6 mb-4">

            <img src="/img/photos/diplomadele.jpg" class="img-fluid z-depth-1-half" alt="">

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 mb-4">

            <!-- Main heading -->
            <h3 class="h3 mb-3">Certificados</h3>
            <p>Su hijo se prepara de acuerdo con DELE, certificado oficial y reconocido de español. Según el Ministerio de Educación y Formación Profesional de España, demuestras que has dominado el idioma español. Esto lo preparará para una profesión o capacitación en un país de habla hispana.</p>
            <!-- Main heading -->

            <p>Los diplomas DELE son altamente reconocidos internacionalmente. Todas las instituciones educativas, autoridades y también en los negocios y entre las cámaras de comercio, los diplomas DELE son reconocidos y gozan de gran prestigio. Son una prueba oficial de competencia en la evaluación y certificación de competencia lingüística en español.</p>

          </div>
          <!--Grid column-->              
            
            
        </div>
        <!--Grid row-->

      </section>
      <!--Section: Main info-->        
        
      <hr class="mb-5">
        
      <!--Section: Not enough-->
      <section>

        <h2 class="my-5 h3 text-center">¿Y que mas?</h2>

        <!--First row-->
        <div class="row features-small mb-5 mt-3 wow fadeIn">

          <!--First column-->
          <div class="col-md-4">
            <!--First row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h6 class="feature-title">A los niños les gusta</h6>
                <p class="grey-text">Mientras juega, su hijo aprende español y ¿a qué niño no le gusta jugar? 
                </p>
                <div style="height:15px"></div>
              </div>
            </div>
            <!--/First row-->

            <!--Second row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h6 class="feature-title">El español es muy común</h6>
                <p class="grey-text">El español no solo se habla en casa, sino también en otros lugares.
                </p>
                <div style="height:15px"></div>
              </div>
            </div>
            <!--/Second row-->

            <!--Third row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h6 class="feature-title">Hacer nuevos amigos</h6>
                <p class="grey-text">No solo los niños, sino también los adultos conocen gente nueva mientras esperan a sus hijos.</p>
                <div style="height:15px"></div>
              </div>
            </div>
            <!--/Third row-->

            <!--Fourth row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h6 class="feature-title">Eventos</h6>
                <p class="grey-text">La escuela organiza eventos divertidos en los que todos pueden participar.</p>
                <div style="height:15px"></div>
              </div>
            </div>
            <!--/Fourth row-->
          </div>
          <!--/First column-->

          <!--Second column-->
          <div class="col-md-4 flex-center">
            <img src="/img/photos/kindopa.jpg" alt="Opa en kind" class="img-fluid z-depth-1-half">
          </div>
          <!--/Second column-->

          <!--Third column-->
          <div class="col-md-4 mt-2">
            <!--First row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h6 class="feature-title">No mucho tiempo sentado</h6>
                <p class="grey-text">Para la mayoría de los niños, una lección de una hora y media es perfecta.
                </p>
                <div style="height:15px"></div>
              </div>
            </div>
            <!--/First row-->

            <!--Second row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h6 class="feature-title">No es caro</h6>
                <p class="grey-text">Con una contribución mínima, esta forma de educación se puede llamar muy beneficiosa.</p>
                <div style="height:15px"></div>
              </div>
            </div>
            <!--/Second row-->

            <!--Third row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h6 class="feature-title">Buen cafe</h6>
                <p class="grey-text">Mientras los padres esperan, pueden disfrutar de una buena taza de café o té.
                </p>
                <div style="height:15px"></div>
              </div>
            </div>
            <!--/Third row-->

            <!--Fourth row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h6 class="feature-title">WiFi gratis</h6>
                <p class="grey-text">Hay WiFi gratuito en la institución. Entonces también puede trabajar mientras su hijo recibe lección.</p>
                <div style="height:15px"></div>
              </div>
            </div>
            <!--/Fourth row-->
          </div>
          <!--/Third column-->

        </div>
        <!--/First row-->

      </section>
      <!--Section: Not enough-->

        <a name="wiezijnwij"></a>        
        
      <hr class="mb-5">
        
      <!--Section: Main features & Quick Start-->
      <section>

        <h3 class="h3 text-center mb-5">¿Quiénes somos?</h3>

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col-lg-6 col-md-12 px-4">

            <!--First row-->
            <div class="row">
              <div class="col-1 mr-3">
                <i class="fas fa-heart fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h5 class="feature-title">Intención sin fines de lucro</h5>
                <p class="grey-text">Punto de Encuentro es una fundación, dirigida por voluntarios y sin el apoyo financiero de otras organizaciones.</p>
              </div>
            </div>
            <!--/First row-->

            <div style="height:30px"></div>

            <!--Second row-->
            <div class="row">
              <div class="col-1 mr-3">
                <i class="fas fa-map-marker fa-2x blue-text"></i>
              </div>
              <div class="col-10">
                <h5 class="feature-title">Ubicación</h5>
                <p class="grey-text">Las lecciones se imparten en el centro comunal Cobra. Dirección: Hildo Kropstraat 8, 1328 a. C. en Almere.
                </p>
              </div>
            </div>
            <!--/Second row-->

            <div style="height:30px"></div>

            <!--Third row-->
            <div class="row">
              <div class="col-1 mr-3">
                <i class="fas fa-envelope fa-2x cyan-text"></i>
              </div>
              <div class="col-10">
                <h5 class="feature-title">Contacto</h5>
                <p class="grey-text"> 
                  Para mas información en la parte superior de la pagina se encuentra el formulario para contacto directo con nosotros.</p>
              </div>
            </div>
            <!--/Third row-->

          </div>
          <!--/Grid column-->

          <!--Grid column-->
          <div class="col-md-6 mb-4">

            <img src="/img/photos/pdelogo.jpg" alt="">

          </div>
          <!--Grid column-->            
            
        </div>
        <!--/Grid row-->      
          
      </section>
      <!--Section: Main features & Quick Start-->        
        
        
        

    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">



    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2020 con dedicación hecha por
      <a href="http://renejansen.in" target="_blank"> renejansen.<i class="fab fa-linkedin"></i></a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
    
        <script>
        function validateForm() {
         //get input field values data to be sent to server
            document.getElementById('status').innerHTML = "Enviar ...";
            formData = {
                'name'     : $('input[name=name]').val(),
                'email'    : $('input[name=email]').val(),
                'subject'  : $('input[name=subject]').val(),
                'message'  : $('textarea[name=message]').val()
            };

           $.ajax({
            url : "mail_es.php",
            type: "POST",
            data : formData,
            success: function(data, textStatus, jqXHR)
            {

                $('#status').text(data.message);
                if (data.code) //If mail was sent successfully, reset the form.
                $('#contact-form').closest('form').find("input[type=text], textarea").val("");
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                $('#status').text(jqXHR);
            }
        });

        }
    </script>
    
</body>

</html>
