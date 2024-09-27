@extends('frontend.main_master')
@section('main')


        <!-- Inner Banner -->
        <div class="inner-banner inner-bg9">
            <div class="container">
                <div class="inner-title">
                    <ul>
                        <li>
                            <a href="index.html">Acceuil</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>Chambres</li>
                    </ul>
                    <h3>Chambres & Suites</h3>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Room Area -->
        <div class="room-area pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sp-color">Chambres & Suites</span>
                    <h2>Chambres & Suites Disponibles</h2>
                </div>
                <div class="row pt-45">

                     @foreach ($rooms as $item)
                     <div class="col-lg-4 col-md-6">
                        <div class="room-card">
                            <a href="{{ route('search_room_details',$item->id.'?check_in='.\Carbon\Carbon::now()->format('Y-m-d').'&check_out='. \Carbon\Carbon::now()->format('Y-m-d') .'&person='.old('person')) }}">
                                <img src="{{asset('upload/roomimg/'.$item->image)}}" alt="Images" style="width: 500px; height: 300px;">
                            </a>
                            <div class="content">
                                <h6 ><a style="color: Black" href="{{ route('search_room_details',$item->id.'?check_in='.\Carbon\Carbon::now()->format('Y-m-d').'&check_out='. \Carbon\Carbon::now()->format('Y-m-d') .'&person='.old('person')) }}">{{$item['type']['name'] ?? null}}</a></h6>
                                <ul>
                                    <li class="text-color">{{$item->price}}  Fcfa</li>
                                    <li class="text-color">Nuit</li>
                                </ul>
                                <div class="rating text-color">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star-half'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                     @endforeach
                    

                  

                 
                </div>
            </div>
        </div>
        <!-- Room Area End -->




@endsection
