@php
$room = App\Models\Room::latest()->limit(4)->get();
@endphp
 <!-- Room Area -->
 <div class="room-area pt-100 pb-70 section-bg" style="background-color:#ffffff">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color">CHAMBRES</span>
            <h2>Nos chambres et suites</h2>
        </div>
        
        <div class="row pt-45">
            @foreach ($room as $item)
                <div class="col-lg-6">
                    <div class="room-card-two">
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-md-4 p-0">
                                <div class="room-card-img">
                                    <a href="{{ route('search_room_details',$item->id.'?check_in='.\Carbon\Carbon::now()->format('Y-m-d').'&check_out='. \Carbon\Carbon::now()->format('Y-m-d') .'&person='.old('person')) }}">
                                        <img src="{{asset('upload/roomimg/'.$item->image)}}" alt="Images">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-7 col-md-8 p-0">
                                <div class="room-card-content">
                                    <h3>
                                         <a href="{{ route('search_room_details',$item->id.'?check_in='.\Carbon\Carbon::now()->format('Y-m-d').'&check_out='. \Carbon\Carbon::now()->format('Y-m-d') .'&person='.old('person')) }}">{{$item['type']['name'] ?? null}}</a>
                                    </h3>
                                    <span>{{$item->price}} Fcfa/ Par nuit </span>
                                    <div class="rating">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                    </div>
                                    <p>{{$item->short_desc}}.</p>
                                    <ul>
                                        <li><i class='bx bx-user'></i> {{$item->room_capacity}} Personnes</li>
                                        <li><i class='bx bx-expand'></i> {{$item->size}}</li>
                                    </ul>

                                    <ul>
                                        <li><i class='bx bx-show-alt'></i>{{$item->view}}</li>
                                        <li><i class='bx bxs-hotel'></i> {{$item->bed_style}}</li>
                                    </ul>
                                    
                                    <a href="{{ route('search_room_details',$item->id.'?check_in='.\Carbon\Carbon::now()->format('Y-m-d').'&check_out='. \Carbon\Carbon::now()->format('Y-m-d') .'&person='.old('person')) }}" class="book-more-btn">
                                        Reservez Maintenant
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

          

        
        </div>
    </div>
</div>
<!-- Room Area End -->