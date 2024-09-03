@extends('frontend.main_master')
@section('main')
      <!-- Inner Banner -->
      <div class="inner-banner inner-bg1">
        <div class="container">
            <div class="inner-title">
                <ul>
                    <li>
                        <a href="index.html">Acceuil</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>Sérénité Suite</li>
                </ul>
                <h3>A propos de notre établissement</h3>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- About Area -->
    <div class="about-area pt-100 pb-70">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src=" {{asset('frontend/assets/img/about/about-img3.jpg')}}" alt="Images">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title">
                            <h2>Plus de 20 Ans d'Expérience au Niveau Mondial et International</h2>
                            <p>
                                Fort de plus de deux décennies d'expérience dans le secteur de l'hôtellerie, notre hôtel a su se distinguer par son engagement constant envers l'excellence et la satisfaction de sa clientèle. Notre présence mondiale nous permet de comprendre et de répondre aux besoins variés de nos invités, qu'ils voyagent pour affaires ou pour le plaisir.
                            </p>
                        </div>


                        <div class="banner-form-area" style="margin-top: 20%">
                            <div class="container">
                                <div class="banner-form">
                                    <form method="GET" action="{{route('booking.search')}}">
                                        <div class="row align-items-center">
                                            <div class="col-lg-3 col-md-3">
                                                <div class="form-group">
                                                    <label>ARRIVÉ</label>
                                                    <div class="input-group">
                                                        <input autocomplete="off" type="text" required name="check_in" class="form-control dt_picker" placeholder="yyy-mm-dd">
                                                        <span class="input-group-addon"></span>
                                                    </div>
                                                    <i class='bx bxs-calendar'></i>
                                                </div>
                                            </div>
                    
                                            <div class="col-lg-3 col-md-3">
                                                <div class="form-group">
                                                    <label>DEPART</label>
                                                    <div class="input-group">
                                                        <input autocomplete="off" type="text" required name="check_out" class="form-control dt_picker" placeholder="yyy-mm-dd">
                                                        <span class="input-group-addon"></span>
                                                    </div>
                                                    <i class='bx bxs-calendar'></i>
                                                </div>
                                            </div>
                    
                                            <div class="col-lg-4 col-md-4">
                                                <div class="form-group">
                                                    <label>Nombre Personne</label>
                                                    <select name="person" class="form-control">
                                                        <option>01</option>
                                                        <option>02</option>
                                                        <option>03</option>
                                                        <option>04</option>
                                                    </select>	
                                                </div>
                                            </div>
                    
                                           
                                        </div>
                                        <div class="col-lg-6 col-md-6" style="margin: 0px auto" >

                                            <button type="submit" class="default-btn btn-bg-one border-radius-5">
                                                Voir Disponiblités
                                            </button>
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
    <!-- About Area End -->

    <!-- Choose Area -->
    <div class="choose-area pb-70">
        <div class="container">
            <div class="section-title text-center">
                <h2>Pourquoi Choisir Notre Hôtel ?</h2>
            </div>
            <div class="row pt-45">
                <div class="col-lg-4 col-md-6">
                    <div class="choose-card">
                        <i class="flaticon-restaurant"></i>
                        <h3>Restaurant Gastronomique</h3>
                        <p>Notre restaurant offre une expérience culinaire inégalée, avec des plats préparés par des chefs de renommée internationale utilisant des ingrédients frais et locaux.</p>
                        <a href="#" class="read-btn">Voir Plus</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="choose-card">
                        <i class="flaticon-wifi-signal-1"></i>
                        <h3>Connexion Wifi Gratuite</h3>
                        <p>
                            Restez connecté avec nos services Wifi haut débit disponibles dans tout l'établissement, assurant que votre séjour soit à la fois productif et agréable.
                        </p>
                        <a href="#" class="read-btn">Voir Plus</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                    <div class="choose-card">
                        <i class="flaticon-fireworks"></i>
                        <h3>4 Étoiles</h3>
                        <p>
                            Notre hôtel est classé quatre étoiles, garantissant des normes élevées de confort, de service et de commodités.
                        </p>
                        <a href="#" class="read-btn">Voir Plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Choose Area End -->

    <!-- Ability Area -->
    <div class="ability-area section-bg pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="ability-content">
                        <div class="section-title">
                            <h2>Notre Capacité à Répondre aux Besoins du Marché Mondial et International</h2>
                            <p>
                                Grâce à notre réseau global et à notre compréhension des attentes internationales, nous sommes en mesure d'offrir des services personnalisés et adaptés à chaque culture et préférence. Nous accueillons des clients de tous horizons et nous nous efforçons de rendre leur séjour mémorable grâce à des services de qualité supérieure et une attention personnalisée.
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="ability-counter">
                                    <h3 class="text-color">14K</h3>
                                    <p>D'avis Positif</p>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="ability-counter">
                                    <h3 class="text-color">225K</h3>
                                    <p>D'équipe de séminaire</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="ability-img-2">
                        <img src=" {{asset('frontend/assets/img/ability-img2.jpg')}} " alt="Images">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ability Area  End -->

    <!-- Specialty Area Two -->
    <div class="specialty-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="specialty-img-3">
                        <img src=" {{asset('frontend/assets/img/specialty/specialty-img3.jpg')}} " alt="Images">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="specialty-list">
                        <div class="section-title">
                            <h2>Nos Secteurs de Spécialisation</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="specialty-list-card">
                                    <i class="text-color flaticon-decoration"></i>
                                    <h3>Décoration Élégante</h3>
                                    <p>Nos chambres et espaces communs sont décorés avec soin, alliant confort moderne et charme traditionnel pour créer une atmosphère accueillante et relaxante.</p>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="specialty-list-card">
                                    <i class="text-color flaticon-champagne-glass"></i>
                                    <h3>Bar de Luxe </h3>
                                    <p> Détendez-vous dans notre bar de luxe, où vous pourrez déguster des cocktails exquis et une sélection de vins fins dans un cadre sophistiqué.</p>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="specialty-list-card">
                                    <i class="text-color flaticon-fireworks"></i>
                                    <h3>Services Quatre Étoiles</h3>
                                    <p>Profitez de notre gamme complète de services, y compris une réception 24h/24, un service de conciergerie, un centre de fitness, une piscine, et bien plus encore, tous conçus pour rendre votre séjour exceptionnel. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Specialty Area Two End -->
@endsection