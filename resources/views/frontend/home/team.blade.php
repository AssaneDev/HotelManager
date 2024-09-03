@php
    $team = App\Models\Team::latest()->get();
@endphp

<div class="team-area-three pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color">Équpes</span>
            <h2>Les Meilleurs dans leurs Domaines</h2>
        </div>
        <div class="team-slider-two owl-carousel owl-theme pt-45">
           
       @foreach ($team as $item)
       <div class="team-item">
        <a href="team.html">
            <img src=" {{asset($item->image)}} " alt="Images">
        </a>
        <div class="content">
            <h3><a href="team.html">{{$item->name}}</a></h3>
            <span>{{$item->postion}}</span>
            <ul class="social-link">
                <li>
                    <a href="{{$item->url}}" target="_blank"><i class='bx bxl-facebook'></i></a>
                </li> 
                <li>
                    <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                </li> 
                <li>
                    <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                </li> 
                <li>
                    <a href="#" target="_blank"><i class='bx bxl-pinterest-alt'></i></a>
                </li> 
            </ul>
        </div>
    </div>
       @endforeach
            

         
        </div>
    </div>
</div>