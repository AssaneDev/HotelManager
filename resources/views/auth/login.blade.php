@extends('frontend.main_master')
@section('main')
   <!-- Inner Banner -->
   <div class="inner-banner inner-bg9">
    <div class="container">
        <div class="inner-title">
            <ul>
                <li>
                    <a href="">Acceuil</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>Connexion</li>
            </ul>
            <h3>Connexion</h3>
        </div>
    </div>
</div>
<!-- Inner Banner End -->

<!-- Sign In Area -->
<div class="sign-in-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="user-all-form">
                    <div class="contact-form">
                        <div class="section-title text-center">
                            <span class="sp-color">Connexion</span>
                            <h2>Connecter vous sur votre compte!</h2>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 ">
                                    <div class="form-group">
                                        <input type="text" name="login" id="login" class="form-control" required data-error="Please enter your Username or Email" placeholder="Email/Name/Phone">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" type="password" name="password" placeholder="Mot de pass">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6 form-condition">
                                    <div class="agree-label">
                                        <input type="checkbox" id="chb1">
                                        <label for="chb1">
                                            Se Souvenir
                                        </label>
                                    </div>
                                </div>
    
                                <div class="col-lg-6 col-sm-6">
                                    <a class="forget" href="{{route('password.request')}}">Mot de pass oublier?</a>
                                </div>

                                <div class="col-lg-12 col-md-12 text-center">
                                    <button type="submit" class="default-btn btn-bg-three border-radius-5">
                                        Se Connecter
                                    </button>
                                </div>

                                <div class="col-12">
                                    <p class="account-desc">
                                        Pas de compte ?
                                        <a href="{{route('register')}}">Crée un compte</a>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sign In Area End -->
@endsection