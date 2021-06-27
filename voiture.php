<?php
include './scripts/voiture_form.php';
?>
<html lang="fr-FR">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Estime Auto</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <link rel="dns-prefetch" href="https://maps.googleapis.com/" />
    <link rel="dns-prefetch" href="https://maxcdn.bootstrapcdn.com/" />
    <link rel="dns-prefetch" href="https://fonts.googleapis.com/" />
    <link rel="dns-prefetch" href="https://s.w.org/" />
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat|Poppins&display=swap" rel="stylesheet" />

    <link rel="stylesheet" id="icomoon-css-css" href="./assets/css/icomoon.css" type="te    xt/css" media="all" />
    <link rel="stylesheet" id="flaticon-css-css" href="./assets/css/flaticon.css" type="text/css" media="all" />
    <link rel="stylesheet" id="reuse-form-two-css" href="./assets/css/reuse-form-two.css" type="text/css" media="all" />
    <link rel="stylesheet" id="reuse-form-css" href="./assets/css/reuse-form.css" type="text/css" media="all" />

    <link rel="stylesheet" id="rental-quote-css" href="./assets/css/quote-front.css" type="text/css" media="all" />
    <link rel="stylesheet" id="font-awesome.min.css-css" href="./assets/css/font-awesome.min.css" type="text/css"
      media="all" />
    <link rel="stylesheet" id="turbo-style-css" href="./assets/css/turbo.style.css" type="text/css" media="all" />
    <link rel="stylesheet" id="custom-style-css" href="./assets/css/custom-style.css" type="text/css" media="all" />
    <link rel="stylesheet" id="turbo-color-scheme-css" href="./assets/css/yellow.css" type="text/css" media="all" />

    <link rel="stylesheet" href="./assets/css/inline-styles.css" />
    <link rel="stylesheet" href="./styles.css" />

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" />
    <!--[if lt IE 9]>
        <link
          rel="stylesheet"
          id="vc_lte_ie9-css"
          href="https://redqteam.com/turbo-car/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css?ver=6.0.2"
          type="text/css"
          media="screen"
        />
      <![endif]-->
    <noscript>
      <style type="text/css">
        .wpb_animate_when_almost_visible {
          opacity: 1;
        }
      @media  screen and (max-width: 990px) {

  .form-element{
    width: 100%;
  }
  .light{
    background-color: white;
    color:#009CDE !important;
  }
  .dark{
    background-color: white;
  }
}</style>
    </noscript>

    <style>
      .main-btns-list {
        display: flex;
      }

      .main-btn {
        font-family: Poppins, sans-serif;
        padding: 10px 30px;
        border-radius: 25px;
        margin: 10px 20px;
        font-size: 20px;
        font-weight: 600;
        background-color: #009cde;
        width: 20%;
        min-width: max-content;
        letter-spacing: 2px;
      }

      .main-btn:hover {
        border: solid white 1px;
        background-color: #009cde;
      }

      .main-btn:focus {
        border: solid white 1px;
        background-color: #009cde;
      }

      .main-title {
        font-family: Poppins, sans-serif;
        color: whitesmoke;
        font-size: 30px;
        letter-spacing: 10px;
        font-weight: 600;
      }

      .transparent {
        background: transparent !important;
      }

      .dark {
        color: #191919 !important;
      }

      .light {
        color: #fff !important;
      }
      @media  screen and (max-width: 767px) {
        .turbo-vertical-search-area{
          width: 90vw !important;
        }
        .form-element{
          width: 100%;
        }
        header.header.transparent-header.sticky nav.navbar.navbar-default .navbar-nav {
          background:white;
          color:#009CDE !important;
        }
        .navbar-header{
          background:white;
        }

      }
    @media  screen and (max-width: 990px) {

  .form-element{
    width: 100%;
  }
  .light{
    background-color: white;
    color:#009CDE !important;
  }
  .dark{
    background-color: white;
  }
}</style>


    <link rel="stylesheet" id="flexbox-grid-css-css" href="./assets/flexboxgrid.css" type="text/css" media="all">
    <link rel="stylesheet" id="wp-color-picker-css" href="./assets/color-picker.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="grid-layout-css" href="./assets/grid-layout.css" type="text/css" media="all">
    <link rel="stylesheet" id="owlcarousel_css-css" href="./assets/owl.carousel.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="owlcarousel-theme-css-css" href="./assets/owl.theme.default.min.css" type="text/css"
      media="all">
    <link rel="stylesheet" id="magnific-popup-css-css" href="./assets/magnific-popup.css" type="text/css" media="all">
    <link rel="stylesheet" id="autosearch-css-css" href="./assets/reactive-autosearch.css" type="text/css" media="all">
    <link rel="stylesheet" id="gridavada-css-css" href="./assets/gridavada.css" type="text/css" media="all">
    <link rel="stylesheet" id="gridginie-css-css" href="./assets/gridginie.css" type="text/css" media="all">
    <link rel="stylesheet" id="gridUncode-css-css" href="./assets/gridUncode.css" type="text/css" media="all">
    <link rel="stylesheet" id="gridUncodeAlt-css-css" href="./assets/gridUncodeAlt.css" type="text/css" media="all">
    <link rel="stylesheet" id="gridproduct-css-css" href="./assets/gridproduct.css" type="text/css" media="all">
    <link rel="stylesheet" id="gridsimple-css-css" href="./assets/gridsimple.css" type="text/css" media="all">
    <link rel="stylesheet" id="userGrid-css-css" href="./assets/userGrid.css" type="text/css" media="all">
    <link rel="stylesheet" id="reviewGrid-css-css" href="./assets/reviewGrid.css" type="text/css" media="all">
    <link rel="stylesheet" id="bbGroupGrid-css-css" href="./assets/bbGroupGrid.css" type="text/css" media="all">
    <link rel="stylesheet" id="reactive-front-one-css" href="./assets/reactive-front.css" type="text/css" media="all">
    <link rel="stylesheet" id="reactive-front-two-css" href="./assets/reactive-front-two.css" type="text/css" media="all">
    <link rel="stylesheet" id="reactive-popover-css" href="./assets/reactive-popover.css" type="text/css" media="all">
    <link rel="stylesheet" id="ionicons-css" href="./assets/ionicons.min.css" type="text/css" media="all">


    <link rel="stylesheet" href="./assets//css/mystyles.css">
  </head>

  <body
    class="home page-template page-template-page-templates page-template-home-page page-template-page-templateshome-page-php page page-id-761 woocommerce-js  wpb-js-composer js-comp-ver-6.0.2 vc_responsive sticky-header">
    <div class="loader loader-default is-active"></div>
    <!-- Start main wrapper  -->
    <div id="main-wrapper">
    <header class="header transparent-header sticky-header  sticky-header-anime sticky">
      <nav class="navbar navbar-default transparent" id="sticker">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="" class="navbar-brand">
              <div class="logo" style="margin-top:10%">
                <img  id="logo" src="./assets/images/logo-dark.png"style=" width:100px"alt="">
              </div>
            </a>

          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div class="menu-turbo-menu-container">
              <ul id="menu-turbo-menu" class="nav navbar-nav navbar-center menu">
                <li id="" class="">
                  <a href="./index.php"
                    class=" main-link  menu-item menu-item-type-post_type menu-item-object-page menu-item-home page_item page-item-761 active dropdown"
                    role="button">Accueil</a>
                </li>
                <li id="menu-item-1158" class="  menu-item menu-item-type-post_type menu-item-object-page dropdown">
                  <a href="./voiture.php" class="  main-link  dropdown-toggle" role="button" data-toggle=""
                    aria-haspopup="true" aria-expanded="false">ESTIMER SA VOITURE</a>
                </li>
                <li id="menu-item-1154" class="menu-item menu-item-type-post_type menu-item-object-page dropdown">
                  <a href="./moto.php" class=" main-link  dropdown-toggle" role="button" data-toggle=""
                    aria-haspopup="true" aria-expanded="false">ESTIMER SA MOTO</a>
                </li>
                <li id="menu-item-1156" class="menu-item menu-item-type-post_type menu-item-object-page dropdown">
                  <a href="./propos.html" class="main-link  dropdown-toggle" role="button" data-toggle="" aria-haspopup="true"
                    aria-expanded="false">FAQ</a>
                </li>
                <li id="menu-item-1157" class="menu-item menu-item-type-post_type menu-item-object-page dropdown">
                  <a href="/contact.html" class=" main-link  dropdown-toggle" role="button" data-toggle="" aria-haspopup="true"
                    aria-expanded="false">CONTACT</a>
                </li>

              </ul>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <div class="vc_row wpb_row vc_row-fluid">
      <div class="turbo-default-wrap">
        <div class="wpb_column vc_column_container vc_col-sm-12">
          <div class="vc_column-inner">
            <div class="wpb_wrapper">
              <div class="header turbo-vertical-search-wrapper index-two-header">
                <div class="header-body"
                  style="background: url(&#39;&#39;) top center no-repeat; background-size: 100% auto;">
                  <div class="container">
                    <div class="turbo-vertical-search-area">
                      <div class="search-header">
                        <h3>ESTIMER VOTRE VOITURE AUX MEILLEURS PRIX</h3>
                      </div>

                      <form action="" method="POST"class="form form-group">
                        <div class=" form-elements">
                          <div class="col col-md-6 form-element">
                            <label for="model" class="form-label">
                              Marque de la voiture</label>
                            <label for="" class="select">
                              <select required name="marque" id="modele" class="select-element">
                                <option value="-1" selected disabled>Choisissez votre marque</option>
                                <option value="AUDI">AUDI</option>
                                <option value="BMW">BMW</option>
                                <option value="CITROEN">CITROEN</option>
                                <option value="FIAT">FIAT</option>
                                <option value="FORD">FORD</option>
                                <option value="MERCEDES">MERCEDES</option>
                                <option value="OPEL">OPEL</option>
                                <option value="PEUGEOT">PEUGEOT</option>
                                <option value="RENAULT">RENAULT</option>
                                <option value="VOLKWAGEN">VOLKWAGEN</option>
                                <option value="ALFA">ALFA</option>
                                <option value="ROMEO">ROMEO</option>
                                <option value="CADILLAC">CADILLAC</option>
                                <option value="CHEVROLET">CHEVROLET</option>
                                <option value="CHRYSLER">CHRYSLER</option>
                                <option value="DACIA">DACIA</option>
                                <option value="HONDA">HONDA</option>
                                <option value="HYUNDAI">HYUNDAI</option>
                                <option value="INFINITI">INFINITI</option>
                                <option value="JAGUAR">JAGUAR</option>
                                <option value="JEEP">JEEP</option>
                                <option value="KIA">KIA</option>
                                <option value="LAND">LAND</option>
                                <option value="ROVER">ROVER</option>
                                <option value="LEXUS">LEXUS</option>
                                <option value="MAZDA">MAZDA</option>
                                <option value="MINI">MINI</option>
                                <option value="NISSAN">NISSAN</option>
                                <option value="SMART">SMART</option>
                                <option value="SKODA">SKODA</option>
                                <option value="TESLA">TESLA</option>
                                <option value="TOYOTA">TOYOTA</option>
                                <option value="VOLVO">VOLVO</option>
                             </select>
                            </label>

                          </div>
                          <div class="col col-md-6 form-element">
                            <label for="model" class="form-label">
                              Modèle  de la voiture</label>
                            <input  required type="text" class="input" placeholder="Tapez votre Modèle " name="modele">

                          </div>
                        </div>
                        <div class=" form-elements">
                          <div class="col col-md-6 form-element">
                            <label for="marque" class="form-label">
                              État de véhicule
                            </label>
                             <label for="" class="select">
                              <select required name="etat" id="etat" class="select-element">
                                <option selected value="-1" disabled>Etat?</option>
                                <option value="Bon">Bon</option>
                                <option value="Moyen">Moyen</option>
                                <option value="Mauvais">Mauvais</option>
                              </select>
                            </label>
                          </div>
                          <div class="col col-md-6  form-element">
                            <label for="model" class="form-label">
                              Carnet Dispo</label>
                            <label for="" class="select">
                              <select required name="carnet" id="carnet" class="select-element">
                                <option selected value="-1" disabled>Carnet?</option>
                                <option value="Complet">Complet</option>
                                <option value="Incomplet">Incomplet</option>
                                <option value="Non disponible">Non disponible</option>
                              </select>
                            </label>
                          </div>
                        </div>
                        <div class=" form-elements">
                          <div class="col col-md-6  form-element">
                            <label for="marque" class="form-label">
                              Date de mise en circulation
                            </label>
                            <input  required type="date" class="input" placeholder="Etat?" name="date_MenC">

                          </div>
                          <div class="col col-md-6  form-element">
                            <label for="model" class="form-label">Kilométrage
                            </label>
                            <input  required type="text" class="input" placeholder="0 KM" name="kilometrage">
                          </div>
                        </div>
                        <div class=" form-elements">
                          <div class="col col-md-6 form-element">
                            <label for="model" class="form-label">
                              Carburant</label>
                            <label for="" class="select">
                              <select required name="carburant" id="carburant" class="select-element">
                                <option value="-1" selected disabled>Choisissez votre carburant</option>
                                <option value=" Hybride"> Hybride</option>
                                <option value=" Essence"> Essence</option>
                                <option value=" Électrique"> Électrique</option>
                                <option value=" Diesel"> Diesel</option>


                              </select>
                            </label>

                          </div>
                          <div class="col col-md-6 form-element">
                            <label for="model" class="form-label">
                              Boite de vitesse</label>
                            <label for="" class="select">
                              <select required name="boite_vitesse" id="modele" class="select-element">
                                <option value="-1"> Type de boite de vitesse</option>
                                <option value="manuelle">manuelle</option>
                                <option value="automatique">automatique</option>
                              </select>
                            </label>

                          </div>
                        </div>
                        <div class=" form-elements">
                          <div class="col col-md-6 form-element">
                            <label for="model" class="form-label">
                              Motorisation</label>
                             <input  required type="text" class="input" placeholder="0 CH" name="motorisation">
                          </div>
                          <div class="col col-md-6  form-element">
                            <label for="model" class="form-label">Couleur de véhicule
                            </label>
                            <input   type="text" class="input" placeholder="Couleur" name="couleur">
                          </div>
                        </div>
                        <div class=" form-elements">
                          <div class="col col-md-6 form-element">
                            <input type="submit" id="applyFilter" name="suivant" class="  form-button " value="Suivant" />

                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>

    <div class="vc_row wpb_row vc_row-fluid">
                    <div class="turbo-default-wrap">
                      <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner">
                          <div class="wpb_wrapper">
                            <div class="rq-content-block turbo-how-it-work-content-wrapper turbo-grid">
                              <div class="turbo-blok-content-inner-wrapper">
                                <div class="rq-title-container text-center">
                                  <h2 class="rq-title no-padding">Comment vendre sa voiture ou sa moto ?</h2>
                                  <p>3 étapes s'offrent à vous, nos experts sont là pour vous guider tout au long de la vente.</p>
                                </div>
                                <div class="rq-how-it-work-content">
                                  <div class="container">
                                    <div class="row">
                                      <div class="col-md-4">
                                        <div class="how-it-work-single">
                                          <img src="./assets/images/payment.png" alt="Img">
                                          <h4>ESTIMEZ VOTRE VOITURE ET MOTO</h4>
                                          <div class="content">Estimation précise de votre voiture et moto au meilleur prix garanti.</div>
                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="how-it-work-single">
                                          <img src="./assets/images/location.png" alt="Img">
                                          <h4>PRENEZ RENDEZ-VOUS </h4>
                                          <div class="content">Prenez rendez-vous sur le lieu de votre choix (domicile, travail...) Aucun déplacement en agence.</div>
                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="how-it-work-single">
                                          <img src="./assets/images/trip.png" alt="Img">
                                          <h4>VENDEZ VOTRE VOITURE</h4>
                                          <div class="content">Nous reprenons votre véhicule dès lors que notre offre vous convient. Paiement  sécurisé.</div>
                                        </div>
                                      </div>

                                    </div>
                                    <h4 style="text-align:center;margin-top:5%;"> Des questions ? Rendez-vous sur la page <a style="color:#009CDE" href="./propos.html"> FAQ</a></h4>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>



                  </div>

    <!-- php -->

    <!-- end #main-wrapper -->

    <footer class="rq-footer">
                  <div class="rq-main-footer"
                    style="background-color: #212020;background-repeat: repeat-x;background-size: cover; -webkit-background-size: cover;background-position: center center;background-attachment: scroll;">
                    <div class="container">
                      <div class="" style="float:center; text-align:center">
                        <div class="row">
                          <div class="col-md-3 col-sm-3 widget-list">
                            <h4 class="widget-title">
                            <div class="widget-list">
                              <ul>
                                <li><a href="./voiture.php">ESTIMER SA VOITURE</a></li>
                                <li><a href="./moto.php">ESTIMER SA MOTO</a></li>
                                <li><a href="./propos.html">FAQ</a></li>
                              </ul>
                            </div>
                            </h4>
                          </div>
                          <div class="col-md-3 col-sm-3 widget-list">
                            <h4 class="widget-title">
                            <div class="widget-list">
                              <ul>
                                <li><a href="./contact.php">CONTACT</a></li>
                              </ul>
                            </div>
                            </h4>
                          </div>
                          <div class="col-md-3 col-sm-3 widget-list">
                            <h4 class="widget-title">
                            <div class="widget-list">
                              <ul>
                                <li><a href="/">MENTIONS LEGALES </a></li>

                              </ul>
                            </div>
                            </h4>
                          </div>
                          <div class="col-md-3 col-sm-3 widget-list">
                            <div class="widget-list">
                              <div class="rq-newsletter">
                                <h4 class="widget-title">Newsletter</h4>
                                <form action="newsletter.php" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
                                  class="validate rq-newsletter-form" target="_blank">
                                  <input type="email" value="" name="email" placeholder="example@example.com"
                                  class="fq-newsletter-form" required />
                                  <button class="rq-btn" type="submit" name="newsletter">
                                  <i class="ion-android-send"></i>
                                  </button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="rq-copyright-section"
                    style="background-color: #191919;background-repeat: repeat-x;background-size: cover; -webkit-background-size: cover;background-position: center center;background-attachment: scroll;">
                    <div class="container">
                      <div class="copyright-content" >
                        <p style="display:flex;justify-content:center;">
                         <a href="/" ><img  src="./assets/images/logo-white.png" style="padding-top:10%; width:100px ;height:auto" alt="logo"></a>
                          © 2019 ESTIME, Inc. Tous droits réservés.
                        </p>
                        <ul class="list-unstyled social-list">
                          <li>
                            <a href="" target="_blank"><i class="fa fa-facebook"></i></a>
                          </li>
                          <li>
                            <a href="" target="_blank"><i class="fa fa-twitter"></i></a>
                          </li>
                          <li>
                            <a href="" target="_blank"><i class="fa fa-instagram"></i></a>
                          </li>
                          <li>
                            <a href="" target="_blank"><i class="fa fa-youtube"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
      integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
      crossorigin="anonymous"></script>

    <script>
      $(function () {
        var navbar = $(".navbar");
        var a = $(".main-link");
        $(window).scroll(function () {
          if ($(window).scrollTop() > 50) {
            navbar.removeClass("transparent");
            a.removeClass("light");
            a.addClass("dark");
          } else {
            navbar.addClass("transparent");
            a.removeClass("dark");
          }
        });
      });
      var clicked = true;
       function clickMe(){

         if(clicked){
          $('.toggle-widget').addClass('active');
          $('.footer-widget-toggle').css('display','block');
          clicked = false;
         }else{
          $('.toggle-widget').removeClass('active');
          $('.footer-widget-toggle').css('display','none');
          clicked = true;
         }


        }


    </script>
  </body>

</html>

