@php
$id = Auth::user()->id;
$profileData = App\Models\User::find($id);    
@endphp
<div class="services-bar-widget">
    <h3 class="title">User Sidebar</h3>
    <div class="side-bar-categories">
        <img style="width: 120px; height: 120px; text-align: center" src=" {{ (!empty($profileData->photo)) ? url('upload/user_images/'.$profileData->photo) : url('upload/no_image.jpg')}}" class="user-img" alt="user avatar"><br> <br>
        <p> {{$profileData->name}} </p>  
        <p> {{$profileData->email}} </p> 
         
         


<ul> 

<li>
<a href="{{route('dashboard')}}">User Dashboard</a>
</li>
<li>
<a href="{{route('user.profile')}}">User Profile </a>
</li>
<li>
<a href="{{route('user.change.password')}}">Change Password</a>
</li>
<li>
<a href="{{route('user.booking')}}">Booking Details </a>
</li>
<li>
<a href="{{route('user.logout')}}">Logout </a>
</li>
</ul>
    </div>
</div>