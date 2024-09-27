@php
$setting = App\Models\SiteSetting::find(1);
@endphp
        <!-- Footer Area -->
        <footer class="footer-area footer-bg">
            <div class="container">
                <div class="footer-top pt-100 pb-70">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-widget">
                                <div class="footer-logo">
                                    <a href="index.html">
                                        <img src="{{asset($setting->logo)}}" alt="Images">
                                    </a>
                                </div>
                                <p>
                                    Profitez d'une expérience sans souci avec notre formule tout compris, où chaque détail est soigneusement pensé pour votre confort et plaisir.
                                </p>
                                <ul class="footer-list-contact">
                                    <li>
                                        <i class='bx bx-home-alt'></i>
                                        <a href="#">{{$setting->address}}</a>
                                    </li>
                                    <li>
                                        <i class='bx bx-phone-call'></i>
                                        <a href="tel:+1-(123)-456-7890">{{$setting->phone}}</a>
                                    </li>
                                    <li>
                                        <i class='bx bx-envelope'></i>
                                        <a href="mailto:hello@atoli.com">{{$setting->email}}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
    
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-widget pl-5">
                                <h3>Liens Rapide</h3>
                                <ul class="footer-list">
                                    <li>
                                        <a href="{{route('apropos')}}">
                                            <i class='bx bx-caret-right'></i>
                                            A Propos
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="{{route('from.all')}}" >
                                            <i class='bx bx-caret-right'></i>
                                            Chambres 
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="{{route('blog.list')}}" >
                                            <i class='bx bx-caret-right'></i>
                                            Blog
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="{{route('show.gallery')}}" >
                                            <i class='bx bx-caret-right'></i>
                                            Gallerie
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="{{route('restaurant')}}">
                                            <i class='bx bx-caret-right'></i>
                                            Restaurant
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="#">
                                            <i class='bx bx-caret-right'></i>
                                            Recrutements
                                        </a>
                                    </li> 
                                </ul>
                            </div>
                        </div>
    
                        {{-- <div class="col-lg-3 col-md-6">
                            <div class="footer-widget">
                                <h3>Useful Links</h3>
                                <ul class="footer-list">
                                    <li>
                                        <a href="index.html" target="_blank">
                                            <i class='bx bx-caret-right'></i>
                                            Home
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="blog-1.html" target="_blank">
                                            <i class='bx bx-caret-right'></i>
                                            Blog
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="faq.html" target="_blank">
                                            <i class='bx bx-caret-right'></i>
                                            FAQ
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="testimonials.html" target="_blank">
                                            <i class='bx bx-caret-right'></i>
                                            Testimonials
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="gallery.html" target="_blank">
                                            <i class='bx bx-caret-right'></i>
                                            Gallery
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="contact.html" target="_blank">
                                            <i class='bx bx-caret-right'></i>
                                            Contact Us
                                        </a>
                                    </li> 
                                </ul>
                            </div>
                        </div> --}}
    
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-widget">
                                <h3>Newsletter</h3>
                                <p>
                                   Restez informer de nos nouveautées & promotions
                                </p>
                                <div class="footer-form">
                                    <form class="newsletter-form" data-toggle="validator" method="POST">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" placeholder="Your Email*" name="EMAIL" required autocomplete="off">
                                                </div>
                                            </div>
    
                                            <div class="col-lg-12 col-md-12">
                                                <button type="submit" class="default-btn btn-bg-one">
                                                    S'inscrire Maintenant
                                                </button>
                                                <div id="validator-newsletter" class="form-result"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="copy-right-area">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">
                            <div class="copy-right-text text-align1">
                                <p>
                                    {{$setting->copyright}}
                                </p>
                            </div>
                        </div>
    
                        <div class="col-lg-4 col-md-4">
                            <div class="social-icon text-align2">
                                <ul class="social-link">
                                    <li>
                                        <a href="{{$setting->facebook}}" target="_blank"><i class='bx bxl-facebook'></i></a>
                                    </li> 
                                    <li>
                                        <a href="{{$setting->twitter}}" target="_blank"><i class='bx bxl-twitter'></i></a>
                                    </li> 
                                    {{-- <li>
                                        <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                                    </li> 
                                    <li>
                                        <a href="#" target="_blank"><i class='bx bxl-pinterest-alt'></i></a>
                                    </li> 
                                    <li>
                                        <a href="#" target="_blank"><i class='bx bxl-youtube'></i></a>
                                    </li>  --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End -->