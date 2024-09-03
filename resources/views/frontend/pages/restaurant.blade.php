@extends('frontend.main_master')
@section('main')

        <!-- Inner Banner -->
        <div class="inner-banner inner-bg12">
            <div class="container">
                <div class="inner-title">
                    <ul>
                        <li>
                            <a href="index.html">Acceuil</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>Restaurant</li>
                    </ul>
                    <h3>Restaurant</h3>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Breakfast Area -->
        <div class="breakfast-area pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <h2>Petit Déjeunée</h2>
                    <span> 8:00 AM - 12:00 PM</span>
                </div>
                <div class="row pt-45">
                    <div class="col-lg-6">
                        <div class="restaurant-item">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6 p-0">
                                    <div class="restaurant-img">
                                        <img src=" {{asset('frontend/assets/img/restaurant/breakfast-img1.jpg')}} " alt="Images">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 p-0">
                                    <div class="restaurant-content">
                                        <h3><a href="#">Assiette de Fruits Frais</a></h3>
                                        <p>
                                            Un assortiment de fruits de saison, accompagné de yaourt et de miel.
                                        </p>
                                        <h4>700 F</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="restaurant-item">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6 p-0">
                                    <div class="restaurant-img">
                                        <img src=" {{asset('frontend/assets/img/restaurant/breakfast-img2.jpg')}} " alt="Images">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 p-0">
                                    <div class="restaurant-content">
                                        <h3><a href="#">Omelette Maison</a></h3>
                                        <p>
                                            Omelette préparée avec des œufs frais, garnie de fromage, jambon, champignons et poivrons, servie avec du pain grillé.
                                        </p>
                                        <h4>1000 F</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="restaurant-item">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6 p-0">
                                    <div class="restaurant-img">
                                        <img src=" {{asset('frontend/assets/img/restaurant/breakfast-img3.jpg')}} " alt="Images">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 p-0">
                                    <div class="restaurant-content">
                                        <h3><a href="#">Crêpes à la Française</a></h3>
                                        <p>
                                            Crêpes légères et moelleuses, servies avec du sirop d'érable, des fruits frais et une touche de crème chantilly.
                                        </p>
                                        <h4>1500 F</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="restaurant-item">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6 p-0">
                                    <div class="restaurant-img">
                                        <img src=" {{asset('frontend/assets/img/restaurant/breakfast-img4.jpg')}} " alt="Images">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 p-0">
                                    <div class="restaurant-content">
                                        <h3><a href="#">Petit-Déjeuner Continental</a></h3>
                                        <p>
                                            Sélection de viennoiseries, pain frais, beurre, confitures maison, jus d'orange fraîchement pressé et café ou thé.
                                        </p>
                                        <h4>2500 F</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                   
                </div>
            </div>
        </div>
        <!-- Breakfast Area End -->

        <!-- Lunch Area -->
        <div class="lunch-area pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <h2>Déjeuner</h2>
                    <span> 12:30 PM - 3:00 PM</span>
                </div>
                <div class="row pt-45">
                    <div class="col-lg-6">
                        <div class="restaurant-item">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6 p-0">
                                    <div class="restaurant-img">
                                        <img src=" {{asset('frontend/assets/img/restaurant/plat.png')}} " alt="Images">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 p-0">
                                    <div class="restaurant-content">
                                        <h3><a href="#">Salade César au Poulet</a></h3>
                                        <p>
                                        Salade croquante avec laitue romaine, parmesan, croûtons, et poulet grillé, arrosée de sauce César maison.
                                        </p>
                                        <h4>1000 F</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="restaurant-item">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6 p-0">
                                    <div class="restaurant-img">
                                        <img src=" {{asset('frontend/assets/img/restaurant/plat1.png')}} " alt="Images">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 p-0">
                                    <div class="restaurant-content">
                                        <h3><a href="#">Sandwich Club</a></h3>
                                        <p>
                                            Triple decker sandwich avec poulet rôti, bacon, laitue, tomate et mayonnaise, servi avec des frites croustillantes,
                                        </p>
                                        <h4>2000 F</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="restaurant-item">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6 p-0">
                                    <div class="restaurant-img">
                                        <img src=" {{asset('frontend/assets/img/restaurant/plat2.png')}} " alt="Images">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 p-0">
                                    <div class="restaurant-content">
                                        <h3><a href="#">Quiche Lorraine</a></h3>
                                        <p>
                                            Quiche maison garnie de lardons, d'oignons et de fromage, accompagnée d'une salade verte.
                                        </p>
                                        <h4>1000 F</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="restaurant-item">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6 p-0">
                                    <div class="restaurant-img">
                                        <img src=" {{asset('frontend/assets/img/restaurant/plat3.png')}} " alt="Images">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 p-0">
                                    <div class="restaurant-content">
                                        <h3><a href="#"> Pâtes à la Carbonara

                                        </a></h3>
                                        <p> 
                                            Pâtes fraîches enrobées d'une sauce crémeuse au parmesan, avec lardons et un œuf poché.
                                        </p>
                                        <h4>2500 F</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                   
                </div>
            </div>
        </div>
        <!-- Lunch Area End -->

        <!-- Dinner Area -->
        <div class="dinner-area pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <h2>Dinné</h2>
                    <span> 20:00 PM - 00:00 PM</span>
                </div>
                <div class="row pt-45">
                    <div class="col-lg-6">
                        <div class="restaurant-item">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6 p-0">
                                    <div class="restaurant-img">
                                        <img src=" {{asset('frontend/assets/img/restaurant/plat5.png')}}  " alt="Images">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 p-0">
                                    <div class="restaurant-content">
                                        <h3><a href="#">Filet de Bœuf Sauce au Poivre</a></h3>
                                        <p>
                                            Filet de bœuf tendre grillé à la perfection, servi avec une sauce au poivre, des pommes de terre fondantes et des légumes de saison.
                                        </p>
                                        <h4>1200 F</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="restaurant-item">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6 p-0">
                                    <div class="restaurant-img">
                                        <img src=" {{asset('frontend/assets/img/restaurant/plat4.png')}} " alt="Images">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 p-0">
                                    <div class="restaurant-content">
                                        <h3><a href="#"> Saumon Grillé à l'Aneth</a></h3>
                                        <p>
                                            Saumon frais grillé, nappé d'une sauce à l'aneth, servi avec du riz sauvage et des asperges sautées.
                                        </p>
                                        <h4>2500 F</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="restaurant-item">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6 p-0">
                                    <div class="restaurant-img">
                                        <img src=" {{asset('frontend/assets/img/restaurant/plat6.png')}} " alt="Images">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 p-0">
                                    <div class="restaurant-content">
                                        <h3><a href="#">Magret de Canard à l'Orange</a></h3>
                                        <p>
                                            Magret de canard rôti, accompagné d'une sauce à l'orange et au miel, servi avec une purée de pommes de terre et des carottes glacées.
                                        </p>
                                        <h4>5000 F</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="restaurant-item">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6 p-0">
                                    <div class="restaurant-img">
                                        <img src=" {{asset('frontend/assets/img/restaurant/plat6.png')}} " alt="Images">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 p-0">
                                    <div class="restaurant-content">
                                        <h3><a href="#">Ratatouille Provençale</a></h3>
                                        <p>
                                            Mélange coloré de légumes méditerranéens mijotés, servi avec du quinoa et une salade verte.
                                        </p>
                                        <h4>2500 F</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                   
                </div>
            </div>
        </div>
        <!-- Dinner Area End -->

        <!-- Drink Area -->
        <div class="drink-area pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <h2>Bar</h2>
                    <span> Toujours Ouverts</span>
                </div>
                <div class="row pt-45">
                    <div class="col-lg-6">
                        <div class="restaurant-item">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6 p-0">
                                    <div class="restaurant-img">
                                        <img src="{{asset('frontend/assets/img/restaurant/bar1.png')}}" alt="Images">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 p-0">
                                    <div class="restaurant-content">
                                        <h3><a href="#">Cocktails à l'Orange</a></h3>
                                        <p>
                                            Un mélange rafraîchissant et vibrant, Un mélange rafraîchissant et vibrant, notre cocktail à l'orange combine du jus d'orange pressé avec une touche de vodka
                                        </p>
                                        <h4>800 F</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="restaurant-item">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6 p-0">
                                    <div class="restaurant-img">
                                        <img src="{{asset('frontend/assets/img/restaurant/Bar2.png')}}" alt="Images">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 p-0">
                                    <div class="restaurant-content">
                                        <h3><a href="#">Vin Rouge</a></h3>
                                        <p>
                                            Notre sélection de vin rouge comprend des crus de renommée mondiale issus des meilleurs vignobles.
                                        </p>
                                        <h4>2500 F</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="restaurant-item">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6 p-0">
                                    <div class="restaurant-img">
                                        <img src="{{asset('frontend/assets/img/restaurant/bar3.png')}}" alt="Images">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 p-0">
                                    <div class="restaurant-content">
                                        <h3><a href="#">Jus de Pastèque</a></h3>
                                        <p>
                                            Rien de tel qu'un jus de pastèque pour vous rafraîchir ! Préparé à partir de pastèques fraîches et juteuses,
                                        </p>
                                        <h4>1000 F</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="restaurant-item">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6 p-0">
                                    <div class="restaurant-img">
                                        <img src="{{asset('frontend/assets/img/restaurant/bar4.png')}}" alt="Images">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 p-0">
                                    <div class="restaurant-content">
                                        <h3><a href="#">Whisky</a></h3>
                                        <p>
                                            Découvrez la profondeur et la complexité de notre whisky premium, vieilli en fûts de chêne pour développer des saveurs riches et nuancées
                                        </p>
                                        <h4>3000 F</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                
                </div>
            </div>
        </div>
        <!-- Drink Area End -->
@endsection