@php
$setting = App\Models\SiteSetting::find(1);
@endphp
<!-- Start Navbar Area -->
<div class="navbar-area">
    <!-- Menu For Mobile Device -->
    <div class="mobile-nav">
        <a href="{{url('/')}}" class="logo">
            <img src="  {{asset($setting->logo)}}" class="logo-one" alt="Logo">
            <img src=" {{asset($setting->logo)}}" class="logo-two" alt="Logo">
        </a>
    </div>

    <!-- Menu For Desktop Device -->
    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light ">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src=" {{asset($setting->logo)}}" class="logo-one" alt="Logo">
                    <img src=" {{asset($setting->logo)}}" class="logo-two" alt="Logo">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="{{url('/')}}" class="nav-link active">
                                Acceuil
                               
                            </a>
                         
                        </li>
                        <li class="nav-item">
                            <a href="{{route('apropos')}}" class="nav-link">
                                à Propos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('restaurant')}}" class="nav-link">
                                Restaurant
                                
                            </a>
                          
                        </li>
                        <li class="nav-item">
                            <a href="{{route('show.gallery')}}" class="nav-link">
                                Gallery
                                
                            </a>
                          
                        </li>


                        <li class="nav-item">
                            <a href="{{route('blog.list')}}" class="nav-link">
                                Blog
                            </a>
                           
                        </li>
@php
    $room = App\Models\Room::latest()->get();
@endphp

                        <li class="nav-item">
                            <a href="{{route('from.all')}}" class="nav-link">
                                Nos Chambres
                            </a>
                            {{-- <ul class="dropdown-menu">
                                @foreach ($room as $item)
                                <li class="nav-item">
                                    <a href="room.html" class="nav-link">
                                        {{$item['type']['name'] ?? null}}
                                    </a>
                                </li>
                                @endforeach
                                
                             
                            </ul> --}}
                        </li>

                        <li class="nav-item">
                            <a href="{{route('contact.us')}}" class="nav-link">
                                Contact
                            </a>
                        </li>

                        <li class="nav-item-btn">
                            <a href="{{route('from.all')}}" class="default-btn btn-bg-one border-radius-5">Reservez Maintenant</a>
                        </li>
                    </ul>

                    <div class="nav-btn">
                        <a href="{{route('from.all')}}" class="default-btn btn-bg-one border-radius-5">Reservez Maintenant</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar Area -->