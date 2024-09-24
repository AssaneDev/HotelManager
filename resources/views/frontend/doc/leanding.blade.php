<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Hotel Ges+ : La Solution Complète pour la Gestion de Réservations d’Hôtel</title>
    <!-- Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Landing page template for creative dashboard">
    <meta name="keywords" content="Landing page template">
    <!-- Favicon icon -->
    <link rel="icon" href=" {{asset('leanding/assets/logos/favicon.ico')}} " type="image/png" sizes="16x16">
    <!-- Bootstrap -->
    <link href=" {{asset('leanding/assets/css/bootstrap.min.css')}} " rel="stylesheet" type="text/css" media="all" />
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
    <!-- Animate CSS -->
    <link rel="stylesheet" href=" {{asset('leanding/assets/css/animate.css')}} ">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href=" {{asset('leanding/assets/css/owl.carousel.css')}} ">
    <link rel="stylesheet" href=" {{asset('leanding/assets/css/owl.theme.css')}} ">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href=" {{asset('leanding/assets/css/magnific-popup.css')}} ">
    <!-- Full Page Animation -->
    <link rel="stylesheet" href=" {{asset('leanding/assets/css/animsition.min.css')}} ">
    <!-- Ionic Icons -->
    <link rel="stylesheet" href=" {{asset('leanding/assets/css/ionicons.min.css')}}">
    <!-- Main Style css -->
    <link href=" {{asset('leanding/assets/css/style.css')}} " rel="stylesheet" type="text/css" media="all" />
</head>
<style>
    .carousel-container {
  position: relative;
  max-width: 100%;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 2em;
  background: #111;
  border-radius: 0.25em;
}

.carousel {
  display: flex;
  gap: 1em;
  overflow-x: auto;
  scroll-behavior: smooth;
  -webkit-overflow-scrolling: touch;
  scroll-snap-type: x mandatory;
  padding-bottom: 1em;
    flex-direction: row;
}

.product-card {
  flex: 0 0 auto;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  background-color: #333;
  border-radius: 0.25em;
  padding: 1em;
  gap: 1em;
  scroll-snap-align: center;
  width: 32em;
  color: #ccc;
  text-decoration: none;
  transition: background-color 0.3s ease;
}

.product-card img {
  width: 100%;
}

.product-card h3,
.product-card p {
  text-align: center;
  margin: 0;
  color: #fff;
}

.product-card p {
  color: #aaa;
}

.product-card .buy-btn {
  padding: 0.8em 2em;
  background-color: #ccc;
  color: #101010;
  border: none;
  border-radius: 0.25em;
  cursor: pointer;
  font-size: 14px;
  align-self: center;
}

.product-card .buy-btn:hover {
  background-color: #eaeaea;
}

.product-card:hover {
  background-color: #444;
}

.carousel {
  scrollbar-width: thin;
  scrollbar-color: #444 #000;
}

.carousel::-webkit-scrollbar {
  height: 8px;
}

.carousel::-webkit-scrollbar-thumb {
  background-color: #444;
  border-radius: 10px;
}

.carousel::-webkit-scrollbar-track {
  background-color: #000;
}


</style>
<div class="wrapper animsition" data-animsition-in-class="fade-in" data-animsition-in-duration="1000"
    data-animsition-out-class="fade-out" data-animsition-out-duration="1000">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <a class="navbar-brand page-scroll" href="#main"><img src=" {{asset('leanding/assets/logos/logo.png')}} " alt="adminity Logo" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">
                    </ul>
                    <ul class="navbar-nav my-2 my-lg-0">
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#main" style="color: rgba(0,0,0,.5);">Acceuil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#services"
                                style="color: rgba(0,0,0,.5);">Important</a>
                        </li>
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                style="color: rgba(0,0,0,.5);">Dropdown</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#!">Level 1</a>
                                <a class="dropdown-item" href="#!">Level 2</a>
                                <a class="dropdown-item" href="#!">Level 3</a>
                            </div>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#features" style="color: rgba(0,0,0,.5);">Avantages</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link page-scroll" href="#reviews"
                                style="color: rgba(0,0,0,.5);">Testimonials</a>
                        </li> -->
                        <!-- <li class="nav-item">
                            <a class="nav-link page-scroll" href="#pricing" style="color: rgba(0,0,0,.5);">Pricing</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="main" id="main">
        <!-- Main Section-->
        <div class="hero-section app-hero">
            <div class="container">
                <div class="hero-content app-hero-content text-center">
                    <div class="row justify-content-md-center">
                        <div class="col-md-10">
                            <h1 class="wow fadeInUp" data-wow-delay="0s">Simplifiez la gestion de votre hôtel </h1>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                offrez une expérience client inégalée avec Hotel Ges+. <br class="hidden-xs"> Plus un site web intuitifs
                            </p>
                            <a class="btn btn-primary btn-action" data-wow-delay="0.2s" href="#!">Voir en live</a>
                            <a class="btn btn-primary btn-action" data-wow-delay="0.2s" href="#!">Acheter Maintenant</a>
                        </div>
                        <div class="col-md-12">
                            <div class="hero-image">
                                <img class="img-fluid" src=" {{asset('leanding/assets/images/home.png')}} " alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="services-section text-center" id="services">
            <!-- Services section (small) with icons -->
            <div class="container">
                <div class="row  justify-content-md-center">
                    <div class="col-md-8">
                        <div class="services-content">
                            <h1 class="wow fadeInUp" data-wow-delay="0s">Backend Puissant pour les Administrateurs
                            </h1>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Accédez à une vue d’ensemble de toutes les réservations du jour en un coup d'œil. Consultez le total des réservations, les réservations en attente, les réservations confirmées, ainsi que la caisse du jour. 
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        <div class="services">
                            <div class="row">
                                <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="services-icon">
                                        <img src=" {{asset('leanding/assets/logos/icon1.png')}} " height="60" width="60" alt="Service" />
                                    </div>
                                    <div class="services-description">
                                        <h1>Vue d'ensemble</h1>
                                        <p>
                                            Accédez à une vue d’ensemble de toutes les réservations du jour en un coup d'œil. Consultez le total des réservations, les réservations en attente, les réservations confirmées, ainsi que la caisse du jour.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="services-icon">
                                        <img class="icon-2" src=" {{asset('leanding/assets/logos/icon2.png')}} " height="60" width="60"
                                            alt="Service" />
                                    </div>
                                    <div class="services-description">
                                        <h1>Visualisez vos données</h1>
                                        <p>
                                            grâce à des graphiques statistiques clairs et consultez la liste complète des réservations.
                                            Recevez des notifications en temps réel avec tous les détails nécessaires à chaque nouvelle réservation. 
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="services-icon">
                                        <img class="icon-3" src=" {{asset('leanding/assets/logos/icon3.png')}} " height="60" width="60"
                                            alt="Service" />
                                    </div>
                                    <div class="services-description">
                                        <h1>Recherche et Réservation Simplifiées  </h1>
                                        <p>
                                           
                                            Permettez à vos clients de rechercher facilement les chambres disponibles en fonction de leurs dates et du nombre de personnes. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-features" id="features">
            <div class="container">
                <div class="flex-split">
                    <div class="f-left wow fadeInUp" data-wow-delay="0s">
                        <div class="left-content">
                            <img class="img-fluid" src=" {{asset('leanding/assets/images/ordi.png')}} " alt="" />
                        </div>
                    </div>
                    <div class="f-right wow fadeInUp" data-wow-delay="0.2s">
                        <div class="right-content">
                            <h2>Gestion Avancée des Chambres</h2>
                            <p>
                                Dasho is full flexible solution for your entire project development. You can easily
                                maintain all of its module/components.
                            </p>
                            <ul>
                                <li><i class="ion-android-checkbox-outline"></i>Gestion Avancée des Chambres</li>
                                <li><i class="ion-android-checkbox-outline"></i>Gestion Réservation</li>
                                <li><i class="ion-android-checkbox-outline"></i>Rapports de Réservation</li>
                                <li><i class="ion-android-checkbox-outline"></i>Rôles et Permissions Personnalisés</li>
                                <li><i class="ion-android-checkbox-outline"></i>Mise à Jour Facile du Site Web</li>

                            </ul>
                            <button class="btn btn-primary btn-action btn-fill">Learn More</button>
                        </div>
                    </div>
                </div>
                <div class="flex-split">
                    <div class="f-right">
                        <div class="right-content wow fadeInUp" data-wow-delay="0.2s">
                            <h2>Frontend Utilisateurs Convivial</h2>
                            <p>
                                Bower - Grunt - Sass Dependencies for easy project flow management.
                            </p>
                            <ul>
                                <li><i class="ion-android-checkbox-outline"></i>Recherche et Réservation Simplifiées</li>
                                <li><i class="ion-android-checkbox-outline"></i>Tableau de Bord Client</li>
                                <li><i class="ion-android-checkbox-outline"></i>Pages Web Informatives</li>
                                <li><i class="ion-android-checkbox-outline"></i>Support en Ligne 24h/24</li>

                            </ul>
                            <button class="btn btn-primary btn-action btn-fill">Learn More</button>
                        </div>
                    </div>
                    <div class="f-left">
                        <div class="left-content wow fadeInUp" data-wow-delay="0.3s">
                            <img class="img-fluid" src="assets/images/site.jpg" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- Card Hotel -->
<div class="carousel-container">
    <div class="carousel">
      <a href="https://html.ditsolution.net/royella/" class="product-card">
        <img src="https://html.ditsolution.net/royella-preview/assets/images/demo/demo1.jpg" alt="Product 1">
        <h3 class="buy-btn">Voir</h3>
        
      </a>
      <a href="https://html.ditsolution.net/royella/index-2.html" class="product-card">
        <img src="https://html.ditsolution.net/royella-preview/assets/images/demo/demo2.jpg" alt="Product 2">
        <h3 class="buy-btn">Voir</h3>
      </a>
      <a href="https://html.ditsolution.net/royella/index-3.html" class="product-card">
        <img src="https://html.ditsolution.net/royella-preview/assets/images/demo/demo3.jpg" alt="Product 3">
        <h3 class="buy-btn">Voir</h3>
      </a>
    
      
      
    </div>
  </div>

  <div class="carousel-container">
    <div class="carousel">
      <a href="https://seapearl-luxury.netlify.app/home-v2" class="product-card">
        <img src="https://seapearl-luxury.netlify.app/assets/img/demo/home-2.jpeg" alt="Product 1">
        <h3 class="buy-btn">Voir</h3>
        
      </a>
      <a href="https://seapearl-luxury.netlify.app/home-v3" class="product-card">
        <img src="https://seapearl-luxury.netlify.app/assets/img/demo/home-3.jpeg" alt="Product 2">
        <h3 class="buy-btn">Voir</h3>
      </a>
      <a href="https://seapearl-luxury.netlify.app/home-v7" class="product-card">
        <img src="https://seapearl-luxury.netlify.app/assets/img/demo/home-7.jpeg" alt="Product 3">
        <h3 class="buy-btn">Voir</h3>
      </a>
    
      
      
    </div>
  </div>
<!-- Card Hotel -->

         <!--  <div class="testimonial-section" id="reviews">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <div class="testimonials owl-carousel owl-theme">
                            <div class="testimonial-single"><img class="img-circle" src="assets/images/site.png"
                                    alt="Client Testimonoal" />
                                <div class="testimonial-text wow fadeInUp" data-wow-delay="0.2s">
                                    <p>Totally flexible admin template. Easy to use and easy to manage all the elements
                                        in entire theme. <br class="hidden-xs"> Great support team behind this product.
                                        Low turnaround time with exact support which i needed.
                                    </p>
                                    <h3>Code Quality</h3>
                                    <h3> - amit1134 [Buyer - NZ]</h3>
                                    <i class="ion ion-star"></i>
                                    <i class="ion ion-star"></i>
                                    <i class="ion ion-star"></i>
                                    <i class="ion ion-star"></i>
                                    <i class="ion ion-star"></i>
                                </div>
                            </div>
                            <div class="testimonial-single"><img class="img-circle" src="assets/images/testimonial1.jpg"
                                    alt="Client Testimonoal" />
                                <div class="testimonial-text">
                                    <p>The main reason for the Rating for Able pro admin template is that its is awesome
                                        template with tons of ready to use features.<br class="hidden-xs"> - Top quality
                                        - Regular updates - PHP version - Clean n Neat code
                                        - Saves lots of developing time
                                    </p>
                                    <h3>Flexibility</h3>
                                    <h3>- vishalmg [Buyer -India]</h3>
                                    <i class="ion ion-star"></i>
                                    <i class="ion ion-star"></i>
                                    <i class="ion ion-star"></i>
                                    <i class="ion ion-star"></i>
                                    <i class="ion ion-ios-star-half"></i>
                                </div>
                            </div>
                            <div class="testimonial-single"><img class="img-circle" src="assets/images/testimonial3.jpg"
                                    alt="Client Testimonoal" />
                                <div class="testimonial-text">
                                    <p>5 stars are for the excellent support, that is brilliant! The design is very cool
                                        and the quality of code is excellent. <br class="hidden-xs">Compliments!</p>
                                    <h3>Code Quality</h3>
                                    <h3>- ab69aho [Buyer -Italy]</h3>
                                    <i class="ion ion-star"></i>
                                    <i class="ion ion-star"></i>
                                    <i class="ion ion-star"></i>
                                    <i class="ion ion-star"></i>
                                    <i class="ion ion-ios-star-half"></i>
                                </div>
                            </div>
                            <div class="testimonial-single"><img class="img-circle" src="assets/images/testimonial2.jpg"
                                    alt="Client Testimonoal" />
                                <div class="testimonial-text">
                                    <p>The product is high end and high-end specialized assistance in solving problems.
                                        <br class="hidden-xs">I would highly recommend.
                                    </p>
                                    <h3>Customer Support</h3>
                                    <h3>- donpavulon [Buyer -US]</h3>
                                    <i class="ion ion-star"></i>
                                    <i class="ion ion-star"></i>
                                    <i class="ion ion-star"></i>
                                    <i class="ion ion-star"></i>
                                    <i class="ion ion-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Feature Image Big -->
        <div class="feature_huge text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <img class="img-fluid wow fadeInUp" data-wow-delay="0.1s" src="assets/images/full.png"
                            alt="" style="max-width:100%" />
                    </div>
                    <div class="col-md-12 feature_list">
                        <div class="row">
                            <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.2s">
                                <img src=" {{asset('leanding/assets/logos/feature_icon.png')}} " alt="Feature" />
                                <h1>Produit de confiance</h1>
                                <!-- <p>
                                    We increasingly grow our talent and skills in admin dashboard development.
                                </p> -->
                            </div>
                            <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.4s">
                                <img src=" {{asset('leanding/assets/logos/feature_icon_2.png')}} " alt="Feature" />
                                <h1>Documentation En Ligne</h1>
                                <!-- <p>
                                    Documentation helps you in every steps on your entire project.
                                </p> -->
                            </div>
                            <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
                                <img src=" {{asset('leanding/assets/logos/feature_icon_3.png')}} " alt="Feature" />
                                <h1>Mises à jour et assistance gratuites</h1>
                                <!-- <p>
                                    Fast and accurate outline during support. Low turnaround time.
                                </p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter Section start  -->
        <!-- <div class="counter-section">
            <div class="container">
                <div class="row text-center">
                    <div class="col-6 col-md-3">
                        <div class="counter-up">
                            <div class="counter-icon">
                                <i class="ion-android-download"></i>
                            </div>
                            <h3><span class="counter">250</span>+</h3>
                            <div class="counter-text">
                                <h4>Pages</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="counter-up">
                            <div class="counter-icon">
                                <i class="ion-cube"></i>
                            </div>
                            <h3><span class="counter">1000</span>+</h3>
                            <div class="counter-text">
                                <h4>UI Elements</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="counter-up">
                            <div class="counter-icon">
                                <i class="ion-ios-people"></i>
                            </div>
                            <h3><span class="counter">500</span>+</h3>
                            <div class="counter-text">
                                <h4>Form Elements</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="counter-up">
                            <div class="counter-icon">
                                <i class="ion-ios-paper"></i>
                            </div>
                            <h3><span class="counter">80</span>+</h3>
                            <div class="counter-text">
                                <h4>Widgets</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Counter Section End -->
        <!-- <div class="features-section">
           
            <div class="f-left">
                <div class="left-content wow fadeInLeft" data-wow-delay="0s">
                    <h2 class="wow fadeInLeft" data-wow-delay="0.1s">We are available for custom work development</h2>
                    <p class="wow fadeInLeft" data-wow-delay="0.2s">
                        We at Dasho available for custom work development with High end specialized developer.
                    </p>
                    <button class="btn btn-primary btn-action btn-fill wow fadeInLeft" data-wow-delay="0.2s">Click to
                        send query</button>
                </div>
            </div>
            <div class="f-right">
            </div>
        </div> -->
        <!-- Pricing Section -->
        <!-- <div class="pricing-section no-color text-center" id="pricing">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="pricing-intro">
                            <h1 class="wow fadeInUp" data-wow-delay="0s">Pricing Table</h1>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Loream ipsum dummy text loream ipsum dummy text loream ipsum dummy text <br
                                    class="hidden-xs"> loream ipsum dummy text. Get the right plan that suits you.
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="table-left wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="icon">
                                        <img src="assets/logos/cart2.png" alt="Icon" />
                                    </div>
                                    <div class="pricing-details">
                                        <h2>Beginner Plan</h2>
                                        <span>$5.90</span>
                                        <p>
                                            Pay little enjoy the product <br class="hidden-xs"> for life time.
                                        </p>
                                        <ul>
                                            <li>First basic feature </li>
                                            <li>Second feature goes here</li>
                                            <li>Any other third feature</li>
                                            <li>And the last one goes here</li>
                                        </ul>
                                        <button class="btn btn-primary btn-action btn-fill">Get Plan</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 ">
                                <div class="table-right wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="icon">
                                        <img src="assets/logos/cart1.png" alt="Icon" />
                                    </div>
                                    <div class="pricing-details">
                                        <h2>Premium Plan</h2>
                                        <span>$19.99</span>
                                        <p>
                                            Pay only for what you use. Flexible <br class="hidden-xs"> payment options.
                                        </p>
                                        <ul>
                                            <li>First premium feature </li>
                                            <li>Second premium one goes here</li>
                                            <li>Third premium feature here</li>
                                            <li>Final premium feature</li>
                                        </ul>
                                        <button class="btn btn-primary btn-action btn-fill">Buy Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->


        <!-- Client Section -->


        <!-- <div class="client-section">
            <div class="container text-center">
                <div class="clients owl-carousel owl-theme">
                    <div class="single">
                        <img src="assets/logos/logo1.png" alt="" />
                    </div>
                    <div class="single">
                        <img src="assets/logos/logo2.png" alt="" />
                    </div>
                    <div class="single">
                        <img src="assets/logos/logo3.png" alt="" />
                    </div>
                    <div class="single">
                        <img src="assets/logos/logo4.png" alt="" />
                    </div>
                    <div class="single">
                        <img src="assets/logos/logo6.png" alt="" />
                    </div>
                    <div class="single">
                        <img src="assets/logos/logo7.png" alt="" />
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Subscribe Form -->
        <!-- <div class="cta-sub text-center no-color">
            <div class="container">
                <h1 class="wow fadeInUp" data-wow-delay="0s">New product notification subscription</h1>
                <p class="wow fadeInUp" data-wow-delay="0.2s">
                    We sent you daily mail about product updates / releases / version change logs<br
                        class="hidden-xs">Please write accurate email address below.
                </p>
                <div class="form wow fadeInUp" data-wow-delay="0.3s">
                    <form class="subscribe-form wow zoomIn" action="assets/php/subscribe.php" method="post"
                        accept-charset="UTF-8" enctype="application/x-www-form-urlencoded" autocomplete="off"
                        novalidate>
                        <input class="mail" type="email" name="email" placeholder="Email address"
                            autocomplete="off"><input class="submit-button" type="submit" value="Subscribe">
                    </form>
                    <div class="success-message"></div>
                    <div class="error-message"></div>
                </div>
            </div>
        </div> -->

        
         <!-- CONTACT SECTION START -->
         <section class="contact-section" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7 order-2 order-md-1">
                        <div class="contact-form-box wow fadeInLeft" data-wow-delay=".3s">
                            

                            <div class="tj-contact-form">
                                <form action="index.html">
                                    <div class="row gx-3">
                                        <div class="col-sm-6">
                                            <div class="form_group">
                                                <input type="text" name="fname" id="fname" placeholder="Prénom"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form_group">
                                                <input type="text" name="lname" id="lname" placeholder="Nom"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form_group">
                                                <input type="email" name="email" id="email" placeholder="Email"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form_group">
                                                <input type="tel" name="phone" id="phone" placeholder="Téléphone"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                        <!-- <div class="col-12">
                                            <div class="form_group">
                                                <select name="service" id="service" class="tj-nice-select">
                                                    <option value="" selected disabled>Choose Service</option>
                                                    <option value="braning">Branding Design</option>
                                                    <option value="web">Web Design</option>
                                                    <option value="uxui">UI/UX Design</option>
                                                    <option value="app">App Design</option>
                                                </select>
                                            </div>
                                        </div> -->
                                        <div class="col-12">
                                            <div class="form_group">
                                                <textarea name="message" id="message" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form_btn">
                                                <button type="submit" style="color: white; background-color: black;" class="btn tj-btn-primary">Envoyez</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 offset-lg-1 col-md-5  d-flex flex-wrap align-items-center  order-1 order-md-2">
                        <div class="contact-info-list">
                            <ul class="ul-reset">
                                <li class="d-flex flex-wrap align-items-center position-relative wow fadeInRight"
                                    data-wow-delay=".4s">
                                    <div class="icon-box">
                                        <i class="flaticon-phone-call"></i>
                                    </div>
                                    <div class="text-box">
                                        <p style="color: #c6dbca;">Téléphone</p>
                                        <a href="tel:0123456789">33 999 41 57</a>
                                    </div>
                                </li>
                                <li class="d-flex flex-wrap align-items-center position-relative wow fadeInRight"
                                    data-wow-delay=".5s">
                                    <div class="icon-box">
                                        <i class="flaticon-mail-inbox-app"></i>
                                    </div>
                                    <div class="text-box">
                                        <p style="color: #c6dbca;">Email</p>
                                        <a href="mailto:mail@mail.com">hotelges@mail.com</a>
                                    </div>
                                </li>
                                <li class="d-flex flex-wrap align-items-center position-relative wow fadeInRight"
                                    data-wow-delay=".6s">
                                    <div class="icon-box">
                                        <i class="flaticon-location"></i>
                                    </div>
                                    <div class="text-box">
                                        <p style="color: #c6dbca;">Address</p>
                                        <a href="#">Sénégal, Mbour, <br>Sur la RN1</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CONTACT SECTION END -->
        <!-- Footer Section -->
        <div class="footer">
            <div class="container">
                <div class="col-md-12 text-center">
                    <img src=" {{asset('leanding/assets/logos/logo.png')}} " alt="Dasho Logo" />
                    <ul class="footer-menu">
                        <li><a href="http://demo.com">Site</a></li>
                        <li><a href="#!">Support</a></li>
                        <li><a href="#!">Terms</a></li>
                        <li><a href="#!">Privacy</a></li>
                    </ul>
                    <div class="footer-text">
                        <p>
                            Copyright © HotelGes+ 2024. All Rights Reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Scroll To Top start -->
        <a id="back-top" class="back-to-top page-scroll" href="#main">
            <i class="ion-ios-arrow-thin-up"></i>
        </a>
        <!-- Scroll To Top Ends-->
    </div>
    <!-- Main Section -->
</div>
<!-- Wrapper-->

<!-- Jquery and Js Plugins -->
<script type="text/javascript" src=" {{asset('leanding/assets/js/jquery-2.1.1.js')}} "></script>
<script type="text/javascript" src=" {{asset('leanding/assets/js/bootstrap.min.js')}} "></script>
<script type="text/javascript" src=" {{asset('leanding/assets/js/plugins.js')}} "></script>
<script type="text/javascript" src=" {{asset('leanding/assets/js/menu.js')}} "></script>
<script type="text/javascript" src=" {{asset('leanding/assets/js/custom.js')}} "></script>
</body>

</html>