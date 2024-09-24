<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Hotel Ges+</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href=" {{asset('documentation/img/faviconn.png')}} ">

        <!-- Bootstrap -->
        <link href=" {{asset('documentation/css/bootstrap.css')}} " rel="stylesheet">
        
        <link href=" {{asset('documentation/css/style.css')}} " rel="stylesheet">        
        
    </head>
    <body>
        
        <header class="navbar navbar-inverse" role="banner">
          <div class="container">
            <div class="navbar-header float-left d-inline-block">
                <a href="#">
                    <img src="{{asset('documentation/img/logo1.png')}}"/>  
                </a>
            </div>
            
            <nav class="float-right d-inline-block" role="navigation">
                <ul class="nav navbar-right">
                    <!-- <li>
                        <a href="#style" class="px-3 py-0">Theme Color</a>
                    </li> -->
                </ul>
            </nav>
          </div>
        </header>

        <div class="container text-center">
        <div id="masthead">  
              <div class="row">
                <div class="col-md-12">
                  <h1>HOTELGES+</h1>
                    <p class="lead">Site web & System de Gestion de Reservation</p>
                </div>
                 
              </div> 
          </div><!-- /cont -->
        </div>

        <!-- Begin Body -->
        <div class="container">
            <div class="row">
                    <div class="col-md-3" id="leftCol">
                        <nav class="navbar sticky-top navbar-light bg-white side-nav">
                            <div class="navbar-collapse">
                                <ul class="nav flex-column py-3" id="sidebar">
                                    <li><a href="#introduction">Introduction</a></li>
                                    <li><a href="#fonctionnalites-du-backend">Fonctionnalités du Backend</a>
                                        
                                        <ul>
                                            <li><a href="#dashboard">Dashboard</a></li>
                                            <li><a href="#notification">Notification</a></li>

                                            <li><a href="#g-chambre">Gestion des Chambres</a></li>
                                            <li><a href="#g-reservation">Gestion des Réservations</a></li>
                                            <li><a href="#reservation-manuel">Réservation Manuelle</a></li>
                                            <li><a href="#status-chambre">Statuts des Chambres</a></li>
                                            <li><a href="#rapport-reservation">Rapports des Réservations</a></li>
                                            <li><a href="#role-permission">Rôles et Permissions</a></li>
                                            <li><a href="#maj-siteWeb">Mise à Jour du Site Web</a></li>
                                            <li><a href="#gestion-blog">Gestion du Blog</a></li>
                                         
                                            
                                        </ul>

                                    </li>


                                    <li><a href="#fonctionnalite-frontend">Fonctionnalités du Frontend</a>
                                        
                                        <ul>
                                            <li><a href="#recherche-chambre">Recherche et Réservation de Chambres</a></li>
                                            <li><a href="#support-ligne">Support en Ligne</a></li>
                                            <li><a href="#page-du-site">Pages du Site</a></li>
                                            <li><a href="#dashboad-utilisateur">Dashboard Utilisateur</a></li>
                                            
                                         
                                            
                                        </ul>

                                    </li>

                                   

                                </ul>
                            </div>
                        </nav>
                    </div>  
                    <div class="col-md-9">
                        
                        <div class="py-3 pt-5" id="introduction">
                            <h2 style="color: #0f6ca9;" class="mb-4">Introduction</h2>
                                <h5>Hotel Ges+:</h5>
                                <ul>
                                    <li> Cette documentation décrit les fonctionnalités de la plateforme de gestion de réservations d’hôtel, incluant les <strong>parties backend</strong>  (pour les administrateurs) et <strong>frontend</strong>  (pour les utilisateurs).</li>
                                </ul>

                               
                        </div>
                        
                       

                         
                         <!-- CSS linking-->
                         <h2 style="color: #0f6ca9;" class="mb-4" id="fonctionnalites-du-backend">. Fonctionnalités du Backend</h2>
                        <div class="py-3" id="dashboard">
                            <h2>Tableau de Bord</h2>


                            <ul>
                                <li><strong>Vue d'ensemble des réservations du jour</strong> : <strong> total des réservations, réservations en attente, réservations confirmées, caisse du jour</strong> .</li>
                                <li><strong>Graphiques statistiques</strong> : représentations visuelles des données. <br> 
                                </li>
                                <li><strong>Liste des réservations</strong> : affiche toutes les réservations avec possibilité de filtrer</li>
                                
                            </ul>


                        </div>
                        
                         <!-- JS Files Including -->
                        
                        
                        <div class="py-3" id="notification">
                            <h2>Notifications</h2>
                            <ul>
                                <li> <strong>Réception de notifications</strong>: chaque nouvelle réservation génère <strong>une notification</strong>  avec les détails nécessaires. .</li>
                            </ul>

                            
                        </div>


                        <!-- Gestion des Chambres -->
                        <div class="py-3" id="g-chambre">

                            <h2>Gestion des Chambres</h2>

                           <li> <strong>Ajouter un type de chambre:</strong>  création de différents types de chambres.</li>
                           <li><strong>Gestion des chambres:</strong>
                                <ul>  
                                    <li>Créer, modifier, supprimer une chambre.</li>
                                    <li>Détails des chambres: nombre d’adultes, nombre d’enfants, image, galerie d'images, prix, promotion, capacité, dimensions, vue, style de lit, description, équipements.
                                    </li>
                                </ul>
                           </li> 
                           <li><strong>Numéro de chambre et statuts:</strong>
                            <ul>  
                                <li>Lier les chambres avec des numéros spécifiques.</li>
                                <li> Gérer le statut des chambres (disponible, réservé, etc.).
                                </li>
                            </ul>
                       </li>
                            
                            
                            
                           



                            
</div>
</div>

                        <!-- Gestion des Réservations-->
                        <div class="py-3" id="g-reservation">
                            <h2>Gestion des Réservations</h2>
                            <li> <strong>Liste des réservations</strong> : numéro de réservation, date, nom du client, dates d’entrée et de sortie, nombre de chambres réservées, nombre de personnes, méthode de paiement, statut du paiement.</li>
                            <li> <strong>Détails de la réservation</strong> : code, date, méthode de paiement, statut du paiement, statut de la réservation, détails de la facture.</li>
                            <li> <strong>Actions sur les réservations</strong> : attribuer une chambre, mettre à jour la réservation, confirmer un paiement, mettre à jour le statut, télécharger la facture.</li>


<br>
</div>

                        
                        <!-- Réservation Manuelle-->
                        <div class="py-3" id="reservation-manuel">
                            <h2>Réservation Manuelle</h2>
                            <li> <strong>Possibilité de réserver manuellement</strong> : pour les clients qui réservent par téléphone ou sur place.</li>
                          
           
                        </div>
                        <div class="py-3" id="status-chambre">
                        <h2>Statuts des Chambres</h2>
                            
                            <li> <strong>Liste des chambres</strong> : informations affichées si la chambre est réservée ou statut disponible.</li>

                            
                    
                        

                        </div>

                        <!-- Rapport des Réservations -->
                        <div class="py-3" id="rapport-reservation">
                            <h2>Rapport des Réservations</h2>
                            <li> <strong>Rapport sur une période définie</strong>  : intervalle de dates pour obtenir les informations des réservations.</li>
                            <li> <strong>Détails du rapport</strong> : code de réservation, nom du client, email, méthode de paiement, prix total, téléchargement de la facture.</li>

                            
                           

                        </div>


                        <!-- Rôles et Permissions -->
                        <div class="py-3" id="role-permission">
                            <h2 class="mb-3">Rôles et Permissions</h2>
                            <li> <strong>Définir des rôles et accès</strong>:  pour chaque utilisateur</li>
                            <li> <strong>Contrôle des pages accessibles</strong> : déterminer les pages accessibles ou non pour chaque administrateur.</li>



                        </div>


                        <!-- Mise à Jour du Site Web-->
                        <div class="py-3" id="maj-siteWeb">
                            <h2>Mise à Jour du Site Web</h2>
                            <li> <strong>Sections modifiables</strong> : images et contenu du site web.</li>
                          
                        </div>
                        

                    
                        <!--Gestion du Blog-->
                        <div class="py-3" id="gestion-blog">
                            <h2>Gestion du Blog</h2>
                            <li> <strong>Gestion des articles</strong> : créer, modifier, supprimer des articles et des catégories.</li>
                            <li> <strong>Commentaires</strong> : activer ou désactiver les commentaires.</li>
                        </div>

                        <h1 style="color: #0f6ca9;" id="fonctionnalite-frontend" > Fonctionnalités du Frontend</h1>


                        <!-- Recherche et Réservation de Chambre -->
                        <div class="py-3" id="recherche-chambre">
                            <h2>Recherche et Réservation de Chambres</h2>
                            <li> <strong>Recherche</strong> : par intervalle de dates et nombre de personnes.</li>
                            <li> <strong>Détails des chambres</strong> : description, nombre de personnes, disponibilité.</li>
                            <li> <strong>Calcul du prix</strong> : sous-total, rabais, total de la réservation.</li>
                        </div>

                        <!--Source & Credits-->
                        <div class="py-3" id="support-ligne">
                            <h2>Support en Ligne</h2>
                            <li> <strong>Support 24h/24</strong> : chat en ligne disponible à tout moment.</li>
                        </div>

                        <!--Source & Credits-->
                        <div class="py-3" id="page-du-site">
                            <h2>Pages du Site</h2>
                            <li> <strong>Accueil</strong> </li>
                            <li> <strong>Nos chambres</strong> </li>
                            <li> <strong>À propos</strong> </li>
                            <li> <strong>Restaurant</strong> </li>
                            <li> <strong>Galerie</strong> </li>
                            <li> <strong>Activités de l’hôtel</strong> </li>
                            <li> <strong>Blog</strong> </li>
                            <li> <strong>Contact</strong> </li>

                        </div>

                         <!--Source & Credits-->
                         <div class="py-3" id="dashboad-utilisateur">
                            <h2>Tableau Bord Utilisateur</h2>
                            <li> <strong>Modification du profil</strong>: possibilité pour l'utilisateur de mettre à jour ses informations. </li>
                            <li> <strong> Vue des réservations</strong>: liste des réservations en attente, confirmées, et total des réservations avec détails. </li>
                           

                        </div>

                    </div> 
            </div>
            <div class="footer highlight box mb-3 text-center">
                <h6>HotelGes+ - Tout Droit Réserver <i><a href="https://themeforest.net/user/wpthemebooster/portfolio">Voir la Plateforme</a></i></h6>
                <p>2024</p>
                <p class="nav fw-bold w-100 d-flex justify-content-center">
                    <a href="#masthead">Retour En Haut</a>
                </p>
            </div>
        </div>


        <!-- JS Include -->
        <script src=" {{asset('documentation/js/jquery-3.6.0.min.js')}}"></script>
        <script src=" {{asset('documentation/js/bootstrap.min.js')}}"></script>
        
        <!---->        
        <script>        
            $(document).ready(function() {
               $('.nav a').click(function (e) {
                    var linkHref = $(this).attr("href");
                    var idElement = linkHref.substr(linkHref.indexOf("#"));
                    $('html, body').animate({
                        scrollTop: $(idElement).offset().top
                    }, 1000);
                    return false;
                });
            });        
        </script>
        
    </body>
</html>