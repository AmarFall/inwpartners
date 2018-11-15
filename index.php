<?php
  session_start();
  ?>

<!DOCTYPE html>
<html lang="fr" class="translated-ltr"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">


  <head>

    <meta charset="utf-8">
    <title>INW PARTNERS</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/cs'>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/Bootstrap.min.css" >
    <link rel="stylesheet" href="css/style.css" >

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/scrollup.js"></script>


  </head>

  <body id="page-top">

  <!-- header -->
    <header class="container-fluid header">
      <dir class="container">
        <img src="img/logo.png" alt="logo" height="70px">

        <nav class="menu">
          <a href="#">ACCUEIL</a>
          <a href="#about">NOTRE EXPERTISE</a>
          <a href="#portfolio">OFFRES DE SERVICES</a>
          <a href="#">GESTION DES CARRIÈRES</a>
          <a href="#contact">CONTACT</a>         
        </nav>

      </dir>

    </header>
  <!-- fin header -->

  <!-- debut banner -->
    <section class="container-fluid banner">
      <div class="ban">
        <img src="img/Resultat.jpg" alt="bannière du site">
      </div>
      <div class="inner-banner">
        <h1> Bienvenue sur INW PARTNERS </h1>
        <marquee>
          <P>INWPARTNERS POUR UNE ECOLUSION REGULIERE ET DURABLE</P> <br/>
          <P>INWPARTNERS VOTRE PARTENAIRE POUR UN ACCOMPAGNEMENT SAIN ET ROBUSTE</P>
        </marquee>
        <button class="btn btn-custom" href="contact.php"> Contactez NOUS! </button>
      </div>
    </section>
  <!-- fin banner -->

  <!-- a propos -->
    <section class="container-fluid about">
      <div class="container">
       
        <h2 id="about">QUI SOMMES-NOUS</h2><br>

        <hr class="separator">
         <div class="row">
          <article class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
            <h2>Etudes</h2>
            <p> j'ai mis une ressource sur le projet de refonte de votre site web. j'ai crée un petit doc ppt rapidement pour te ressortir les éléments.</p>
          </article>

          <article class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
            <h2>Experience</h2>
            <p> j'ai mis une ressource sur le projet de refonte de votre site web. j'ai crée un petit doc ppt rapidement pour te ressortir les éléments.</p>
          </article>

          <article class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
            <h2>Resultats</h2>
            <p> j'ai mis une ressource sur le projet de refonte de votre site web. j'ai crée un petit doc ppt rapidement pour te ressortir les éléments.</p>
          </article>
        </div> 
      </div>
      
    </section>
  <!-- fin a propos -->

 <!-- contact-->
    <section class="container-fluid footer">
      <div class="row" id="contatti">
        <div class="container mt-5" >

            <div class="row" style="height:550px;">
              <div class="col-md-6 maps" >
                 <iframe src="https://www.google.com/maps/embed?pb=!4v1538146897374!6m8!1m7!1sBXNTnEkMVfgeel364BKQSw!2m2!1d14.71485586176142!2d-17.46533181072746!3f198.39783611468664!4f0!5f1.1924812503605782"  frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
              <div class="col-md-6">
                <h2 class="text-uppercase mt-3 font-weight-bold text-white">CONTACTS</h2>

              <!-- CONTENT -->
              <div class="container" id="contact">
              <?php if(array_key_exists('errors',$_SESSION)): ?>
                <div class="alert alert-danger">
                Veuillez revoir les informations, car votre votre envoie a échoué!
                </div>
              <?php endif; ?>
              <?php if(array_key_exists('success',$_SESSION)): ?>
                <div class="alert alert-success">
                Votre email à bien été transmis !
                </div>
              <?php endif; ?>

                <form action="send_form.php" method="post">
                  <div class="row">

                    <div class="col-lg-6">
                      <div class="form-group">
                        <input required name="prenom" type="text" class="form-control mt-2" placeholder="Prénom" value="<?php echo isset($_SESSION['inputs']['prenom'])? $_SESSION['inputs']['prenom'] : ''; ?>">
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="form-group">
                        <input required name="name" type="text" class="form-control mt-2" placeholder="Nom" value="<?php echo isset($_SESSION['inputs']['name'])? $_SESSION['inputs']['name'] : ''; ?>">
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="form-group">
                        <input required type="email" name="email" class="form-control mt-2" placeholder="Email" value="<?php echo isset($_SESSION['inputs']['email'])? $_SESSION['inputs']['email'] : ''; ?>">
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="form-group">
                        <input required type="tel" name="tel" class="form-control mt-2" placeholder="Telephone" value="<?php echo isset($_SESSION['inputs']['tel'])? $_SESSION['inputs']['tel'] : ''; ?>">
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="form-group">
                        <textarea required class="form-control" placeholder="Votre message" rows="3"><?php echo isset($_SESSION['inputs']['message'])? $_SESSION['inputs']['message'] : ''; ?></textarea>
                      </div>
                    </div>

                    <div class="col-12">
                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                        <label class="form-check-label" for="invalidCheck2">
                          J'accépte les conditions
                        </label>
                      </div>
                    </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-light" type="submit">Envoyer</button>
                    </div>
                  </div>
                </form>
                <div class="text-white">
                  <h2 class="text-uppercase mt-4 font-weight-bold">Joignez Nous</h2>
                  <i class="fas fa-phone mt-3"></i> <a href="tel:+">(+221) 33 825 68 13</a><br>
                  <i class="fas fa-phone mt-3"></i> <a href="fax:+">(+221) 33 825 67 90</a><br>
                  <i class="fa fa-envelope mt-3"></i> <a href="email:+">info@inwpartners.com</a><br>
                  
                    <a href=""><i class="fab fa-facebook fa-3x pr-4"></i></a>
                    <a href=""><i class="fab fa-linkedin fa-3x"></i></a>
                    <a href=""><i class="fab fa-twitter-square fa-3x"></i></a>
                    <a href=""><i class="fab fa-google-plus-square fa-3x"></i></a><br>
                  <i class="fas fa-globe mt-3">Sacré Coeur 1 lot N°6 BP 4568 DAKAR NAFA-VDN</i> 
                </div>
              </div>
            </div>
        </div>
        </div>
    </section>
  <!-- fin contact -->


  <!-- footer -->
    <footer>
    <div class="row row-foot">
      <article class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
        <div class="foot-div">
          <h5 class="foot-subt">NOS PARTENAIRES</h5>
        </div>
        <a class="foot-link" href="http://www.icomgroupe.com/" title="footer_Home">Icom Groupe</a>
        <a class="foot-link" href="https://www.ebp.com/" title="footer_Home">EBP</a>
      </article>

      <article class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
        <div class="foot-div">
          <h5 class="foot-subt">Pourquoi rejoindre INWPARTNERS</h5>
        </div>
        <p>En nous rejoignant, vous rejoignez :
              Un cabinet de conseil en pleine croissance,
              Des équipes interdisciplinaires, hautement qualifiées et expérimentées,
              Des projets vraiment innovants.</p>
      </article>

      <article class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
        <div class="foot-div">
          <h5 class="foot-subt">NOUS SUIVRE</h5>
        </div><!-- Contact Me -->
              <a href="./contact.php"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
            <button onclick="topFunction()" id="myBtn" title="Retour en haut">Remonter</button>
      </article>
 
      </div>

    <center>
      <p class="credits"><div class="name">&copy 2018 INW PARTNERS | tous droits réservés ;</div>.</p>
    </center>

    </footer>
  <!-- fin footer -->

  </body>

</html>
  <?php
unset($_SESSION['inputs']); // on nettoie les données précédentes
  unset($_SESSION['success']);
  unset($_SESSION['errors']);
  ?>
