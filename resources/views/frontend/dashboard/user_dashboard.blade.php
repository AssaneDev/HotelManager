@php


use Illuminate\Support\Facades\Auth;
use App\Models\Booking;

// Récupérer l'ID de l'utilisateur connecté
$id = Auth::user()->id;

// Récupérer toutes les réservations du client
$allBookings = Booking::where('user_id', $id)->orderBy('id', 'desc')->get();

// Calculer le nombre total de réservations
$totalReservations = $allBookings->count();

// Filtrer les réservations en cours (status = 1) et terminées (status = 0)
$ongoingReservations = $allBookings->where('status', 0)->count();
$completedReservations = $allBookings->where('status', 1)->count();



   

@endphp
@extends('frontend.main_master')
@section('main')
           <!-- Inner Banner -->
           <div class="inner-banner inner-bg6">
            <div class="container">
                <div class="inner-title">
                    <ul>
                        <li>
                            <a href="index.html">Acceuil</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>Tableau de bord </li>
                    </ul>
                    <h3>Client</h3>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Service Details Area -->
        <div class="service-details-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                     <div class="col-lg-3">
                        <div class="service-side-bar">
                            

                        @include('frontend.dashboard.user_menu')

                           
                        </div>
                    </div>


                    <div class="col-lg-9">
                        <div class="service-article">
                            

                            <div class="service-article-title">
                                <h2>Tableau de bord client</h2>
                            </div>

                            <div class="service-article-content">
                            <div class="row">

        <div class="col-md-4">
<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-header">Total Reservation </div>
  <div class="card-body">
    
   <h1 class="card-title" style="font-size: 45px;">
      {{$totalReservations}}
    
   </h1>
    
  </div>
</div>                   
         </div>

             <div class="col-md-4">
<div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
  <div class="card-header">Réservation En Attente </div>
  <div class="card-body">
 
    <h1 class="card-title" style="font-size: 45px;">{{$ongoingReservations}}</h1>
    
  </div>
</div>                   
         </div>


             <div class="col-md-4">
<div class="card text-white bg-success mb-3" style="max-width: 18rem;">
  <div class="card-header">Réservation Complete</div>
  <div class="card-body">
    <h1 class="card-title" style="font-size: 45px;"> {{$completedReservations}} </h1>
    
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
        <!-- Service Details Area End -->
@endsection