<!DOCTYPE html>
<html lang="en">

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
      height: 100%;6263
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
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#spaanseles">Spaanse les</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#docenten">Docenten</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#certificaten">Certificaten</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="inscripcion%20escuelita%20de%20espanol%202021-2022.pdf">Aanmelden</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#wiezijnwij">Wie zijn wij?</a>
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
            <a class="nav-link" href="index_es.php"><img src="/img/svg/es.svg.png" alt=""></a>
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

            <h1 class="display-4 font-weight-bold">Spaans leren</h1>

            <hr class="hr-light">

            <p>
              <strong>Voor families waar Spaans gesproken wordt.</strong>
            </p>

            <p class="mb-4 d-none d-md-block">
              <strong>Wij geven Spaanse les voor kinderen met een Spaanse of Latijns-Amerikaanse achtergrond.</strong>
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
                            <strong>Schrijf ons:</strong>
                        </h3>                    
                        <div class="md-form">
                            <i class="fas fa-user prefix"></i>
                            <input type="text" id="name" name="name" class="form-control">    
                            <label for="name" class="">Je naam</label>                       
                        </div>
                        <div class="md-form">
                            <i class="fas fa-envelope prefix"></i>
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">E-mail adres</label>
                        </div>
                        <div class="md-form">
                            <i class="fas fa-info-circle prefix"></i>
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="">Onderwerp</label>
                        </div>
                        <div class="md-form">
                            <i class="fas fa-pencil-alt prefix"></i>
                            <textarea type="text" id="message" name="message" class="md-textarea"></textarea>    
                            <label for="message">Waarmee kunnen we je helpen?</label>
                        </div>
                        <div class="text-center">
                            <a class="btn btn-indigo" onclick="validateForm()">Verzenden</a>               
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
            <h3 class="h3 mb-3">Spaanse les</h3>
            <p>Wij geven les aan kinderen van 4 t/m 12 jaar met ouders afkomstig uit Spanje en Latijns-Amerika. Elke zaterdag vinden de lessen plaats van 10:00 - 11:30 uur. Tijdens de lessen wordt enerzijds de Spaanse taal onderwezen en anderzijds worden tradities van de Spaanstalige landen bijgebracht. </p>
            <!-- Main heading -->


            <p>De school heeft een rijke culturele achtergrond, aangezien er kinderen en docenten bijeenkomen uit vrijwel alle Spaans sprekende landen. De ontmoeting met andere kinderen stimuleert de kinderen zich uit te drukken in het Spaans.</p>

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

        <h3 class="h3 text-center mb-5">Docenten</h3>

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
                <h5 class="feature-title">Achtergrond</h5>
                <p class="grey-text">Alle docenten hebben een Spaanse of Latijns-Amerikaanse achtergrond.</p>
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
                <h5 class="feature-title">Gekwalificeerd</h5>
                <p class="grey-text">Uw kind krijgt les van een docent die bevoegd is om de Spaanse taal de onderwijzen.
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
                <h5 class="feature-title">Referenties</h5>
                <p class="grey-text"> 
                  We garanderen een hoge kwaliteit door referenties van docenten na te gaan, zodat uw kind  zich in een veilige omgeving kan ontwikkelen.</p>
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
            <h3 class="h3 mb-3">Certificaten</h3>
            <p>Uw kind bereidt zich voor volgens DELE, een officieel Spaans curriculum. Volgens het Ministerie van Onderwijs en Beroepsopleiding van Spanje toon je hiermee aan de Spaanse taal te beheersen. Hiermee bereid je je voor op een beroep of opleiding in een Spaanstalig land.</p>
            <!-- Main heading -->

            <p>DELE-diploma's staan internationaal hoog aangeschreven. Alle onderwijsinstellingen, autoriteiten en ook in het bedrijfsleven en tussen kamers van koophandel worden de DELE-diploma's erkend en genieten een grote prestige. Ze zijn een officieel bewijs van bekwaamheid bij de evaluatie en certificering van taalvaardigheid in het Spaans.</p>

          </div>
          <!--Grid column-->              
            
            
        </div>
        <!--Grid row-->

      </section>
      <!--Section: Main info-->        
        
      <hr class="mb-5">
        
      <!--Section: Not enough-->
      <section>

        <h2 class="my-5 h3 text-center">En wat nog meer?</h2>

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
                <h6 class="feature-title">De kinderen vinden het leuk</h6>
                <p class="grey-text">Spelenderwijs leert uw kind Spaans en welk kind houdt niet van spelen? 
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
                <h6 class="feature-title">Spaans is heel gewoon</h6>
                <p class="grey-text">Niet alleen thuis, maar ook elders wordt Spaans gesproken.
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
                <h6 class="feature-title">Nieuwe vrienden maken</h6>
                <p class="grey-text">Niet alleen de kinderen, maar ook de volwassenen ontmoeten nieuwe mensen tijdens het weachten op hun kinderen.</p>
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
                <h6 class="feature-title">Evenementen</h6>
                <p class="grey-text">De school organiseert leuke evenementen, waar iedereen aan mee mag doen.</p>
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
                <h6 class="feature-title">Geen lange zit</h6>
                <p class="grey-text">Voor de meeste kinderen is een les van anderhalf uur prima te doen.
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
                <h6 class="feature-title">Niet duur</h6>
                <p class="grey-text">Met een minimale bijdrage is deze vorm van onderwijs heel voordelig te noemen.</p>
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
                <h6 class="feature-title">Goede koffie</h6>
                <p class="grey-text">Terwijl de ouders wachten, kunnen zij de week voorbij laten gaan met een lekker kopje koffie of thee.
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
                <h6 class="feature-title">Gratis Wifi</h6>
                <p class="grey-text">In het buurtcentrum is gratis wifi. Je kan dus ook even werken, terwijl je kind les krijgt.</p>
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

        <h3 class="h3 text-center mb-5">Wie zijn wij?</h3>

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
                <h5 class="feature-title">Zonder winst oogmerk</h5>
                <p class="grey-text">Punto de Encuentro is een stichting, geleid door vrijwilligers en zonder financiële steun door andere organisaties.</p>
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
                <h5 class="feature-title">Locatie</h5>
                <p class="grey-text">De lessen worden gegeven in het buurtcentrum Cobra. Adres: Hildo Kropstraat 8, 1328 BC in Almere.
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
                <h5 class="feature-title">Contact</h5>
                <p class="grey-text"> 
                  Voor meer informatie vindt u bovenaan de pagina het formulier voor direct contact met ons..</p>
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
      © 2020 met toewijding gemaakt door
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
            document.getElementById('status').innerHTML = "Verzenden ...";
            formData = {
                'name'     : $('input[name=name]').val(),
                'email'    : $('input[name=email]').val(),
                'subject'  : $('input[name=subject]').val(),
                'message'  : $('textarea[name=message]').val()
            };

           $.ajax({
            url : "mail.php",
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
