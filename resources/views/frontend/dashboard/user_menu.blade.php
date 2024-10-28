@php
$id = Auth::user()->id;
$profileData = App\Models\User::find($id);    
@endphp
<div class="services-bar-widget">
    <h3 class="title">Votre Espace</h3>
    <div class="side-bar-categories">
        <img style="width: 120px; height: 120px; text-align: center" src=" {{ (!empty($profileData->photo)) ? url('upload/user_images/'.$profileData->photo) : url('upload/no_image.jpg')}}" class="user-img" alt="user avatar"><br> <br>
        <p> {{$profileData->name}} </p>  
        <p> {{$profileData->email}} </p> 
         
         


<ul> 

<li>
<a href="{{route('dashboard')}}">Tableau de bord</a>
</li>
<li>
<a href="{{route('user.profile')}}">Profile </a>
</li>
<li>
<a href="{{route('user.change.password')}}">Changer mot de pass</a>
</li>
<li>
<a href="{{route('user.booking')}}">Détails Réservation & facture </a>
</li>
<li>
<a href="{{route('user.logout')}}">Deconexion </a>
</li>
</ul>
    </div>
</div>