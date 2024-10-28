@extends('frontend.main_master')
@section('main')


      <!-- Inner Banner -->
      <div class="inner-banner inner-bg2">
        <div class="container">
            <div class="inner-title">
                <ul>
                    <li>
                        <a href="">Acceuil</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>Contact</li>
                </ul>
                <h3>Contact</h3>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Contact Area -->
    <div class="contact-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact-content">
                        <div class="section-title">
                            <h2>Nous envoyer un message et à nous contacter</h2>
                        </div>
                        <div class="contact-img">
                            <img src=" {{asset('frontend/assets/img/contact/contact-img1.jpg')}} " alt="Images">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="contact-form">
                        <form method="POST" action="{{route('store.contact')}}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="phone" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Téléphone">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Sujet">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message" placeholder="Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>


                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn btn-bg-three">
                                        Envoyer Message
                                    </button>
                                    
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Area End -->
    @php
    $setting = App\Models\SiteSetting::find(1);
    @endphp

    <!-- contact Another -->
    <div class="contact-another pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-another-content">
                        <div class="section-title">
                            <h2>Contacts Info</h2>
                            <p>
                                Nous sommes l'un des meilleurs hotels du Sénégal.
                            </p>
                        </div>

                        <div class="contact-item">
                            <ul>
                                <li>
                                    <i class='bx bx-home-alt'></i>
                                    <div class="content">
                                        <span>{{$setting->address}}</span>
                                        <span>{{$setting->address}}</span>
                                    </div>
                                </li>
                                <li>
                                    <i class='bx bx-phone-call'></i>
                                    <div class="content">
                                        <span><a href="tel:+1(123)4567890">{{$setting->phone}}</a></span>
                                        <span><a href="tel:+1(123)4567896">{{$setting->phone}}</a></span>
                                    </div>
                                </li>
                                <li>
                                    <i class='bx bx-envelope'></i>
                                    <div class="content">
                                        <span><a href="info@atoli.com">{{$setting->email}}</a></span>
                                        <span><a href="hello@atoli.com">{{$setting->email}}</a></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6">
                    <div class="contact-another-img">
                        <img src=" {{asset('frontend/assets/img/contact/contact-img2.jpg')}} " alt="Images">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact Another End -->

    <!-- Map Area -->
    <div class="map-area">
        <div class="container-fluid m-0 p-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d123499.67418486426!2d-17.540319723064478!3d14.6919495631251!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0xec173e2c9636c0f%3A0x4690252c8ab481dd!2sPOINT%20E%20RUE%201%20x%20MAISON%20DES%20ECRIVAINS%2C%20Dakar%2C%20Dakar%2002302!3m2!1d14.6919641!2d-17.457917899999998!5e0!3m2!1sen!2ssn!4v1730144327950!5m2!1sen!2ssn" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <!-- Map Area End -->
    @endsection