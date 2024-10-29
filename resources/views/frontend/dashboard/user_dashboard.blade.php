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
                    <li><a href="index.html">Accueil</a></li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>Tableau de bord</li>
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

                                <!-- Card: Total Reservations -->
                                <div class="col-md-4">
                                    <div class="card text-white bg-primary mb-3 shadow-sm" style="border-radius: 10px;">
                                        <div class="card-header">
                                            <i class="fas fa-calendar-check"></i> Total Réservations
                                        </div>
                                        <div class="card-body">
                                            <h1 class="card-title" style="font-size: 40px;">{{$totalReservations}}</h1>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card: Ongoing Reservations -->
                                <div class="col-md-4">
                                    <div class="card text-white bg-warning mb-3 shadow-sm" style="border-radius: 10px;">
                                        <div class="card-header">
                                            <i class="fas fa-hourglass-half"></i> Réservations En Attente
                                        </div>
                                        <div class="card-body">
                                            <h1 class="card-title" style="font-size: 40px;">{{$ongoingReservations}}</h1>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card: Completed Reservations -->
                                <div class="col-md-4">
                                    <div class="card text-white bg-success mb-3 shadow-sm" style="border-radius: 10px;">
                                        <div class="card-header">
                                            <i class="fas fa-check-circle"></i> Réservations Complètes
                                        </div>
                                        <div class="card-body">
                                            <h1 class="card-title" style="font-size: 40px;">{{$completedReservations}}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Messages pour les réservations -->
                            @if ($ongoingReservations > 0)
                                <div class="alert alert-info mt-4" role="alert">
                                    <p>Votre réservation est bien prise en compte ! 😊 Nous vous tiendrons informé dès qu’elle sera confirmée. En attendant, restez en contact pour toute question.</p>
                                </div>
                            @elseif ($completedReservations > 0)
                                <div class="alert alert-success mt-4" role="alert">
                                    <p>Bonne nouvelle ! 🎉 Votre réservation a été confirmée. Nous sommes impatients de vous accueillir et de rendre votre séjour exceptionnel !</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Service Details Area End -->
@endsection
