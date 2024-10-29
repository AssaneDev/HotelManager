@extends('frontend.main_master')
@section('main')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Inner Banner -->
<div class="inner-banner inner-bg6">
    <div class="container">
        <div class="inner-title">
            <ul>
                <li><a href="index.html">Accueil</a></li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>Liste des Réservations</li>
            </ul>
            <h3>Liste Réservation</h3>
        </div>
    </div>
</div>
<!-- Inner Banner End -->

<!-- Service Details Area -->
<div class="service-details-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                @include('frontend.dashboard.user_menu')
            </div>

            <div class="col-lg-9">
                <div class="service-article">
                    <section class="checkout-area pb-70">
                        <div class="container">
                            <h3 class="title">Liste des Réservations</h3>

                            <table class="table table-bordered table-hover shadow-sm" style="background-color: white;">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">Num Résa</th>
                                        <th scope="col">Date Résa</th>
                                        <th scope="col">Client</th>
                                        <th scope="col">Entrée/Sortie</th>
                                        <th scope="col">Nombre Chambres</th>
                                        <th scope="col">Nombre Personnes</th>
                                        <th scope="col">État</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allData as $item)
                                    <tr>
                                        <td>
                                            @if ($item->status == 1)
                                                <a href="{{ route('user.invoice', $item->id) }}" class="text-primary font-weight-bold">
                                                    {{$item->code}}
                                                </a>
                                            @else
                                                <span class="text-muted">{{$item->code}}</span>
                                            @endif
                                        </td>
                                        <td>{{$item->created_at->format('d/m/Y')}}</td>
                                        <td>{{$item['user']['name']}}</td>
                                        <td>
                                            <span class="badge bg-primary">{{$item->check_in}}</span> /
                                            <span class="badge bg-warning text-dark">{{$item->check_out}}</span>
                                        </td>
                                        <td>{{$item->number_of_rooms}}</td>
                                        <td>{{$item->person}}</td>
                                        <td>
                                            @if ($item->status == 1)
                                                <span class="badge bg-success">Complète</span>
                                            @else
                                                <span class="badge bg-info text-dark">En Attente</span>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service Details Area End -->
@endsection
