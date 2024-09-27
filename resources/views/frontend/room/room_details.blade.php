@extends('frontend.main_master')
@section('main')

        <!-- Inner Banner --> 
        {{-- <div class="inner-banner inner-bg10">
            <div class="container">
                <div class="inner-title">
                    <ul>
                        <li>
                            <a href="index.html">Acceuil</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>Détails Chambre </li>
                    </ul>
                    <h3>{{$roomdetails->type->name}}</h3>
                </div>
            </div>
        </div> --}}
        <!-- Inner Banner End -->

        <!-- Room Details Area End -->
        <div class="room-details-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="room-details-side">
                            <div class="side-bar-form">
                                <h3>Réservez La Villa 01 </h3>
                                <form {{route('user_booking_store',$roomdetails->id)}}" method="post" id="bk_form">
                                    @csrf
                                    <input type="hidden" name="room_id" value="{{$roomdetails->id}}">
                                    <div class="row align-items-center">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Date Arrivé</label>
                                                <div class="input-group">
                                                    <input autocomplete="off" type="text" required name="check_in" id="check_in" class="form-control dt_picker" value="{{old('check_in') ? date('d-m-y',strtotime(old('check_in'))) : ''}}">
                                                    <span class="input-group-addon"></span>
                                                </div>
                                                <i class='bx bxs-calendar'></i>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Date Départ</label>
                                                <div class="input-group">
                                                    <input autocomplete="off" type="text" required name="check_out" id="check_out" class="form-control dt_picker" value="{{old('check_out') ? date('d-m-y',strtotime(old('check_out'))) : ''}}">
                                                    <span class="input-group-addon"></span>
                                                </div>
                                                <i class='bx bxs-calendar'></i>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Nombre de Personne</label>
                                                <select class="form-control" name="person" id="nbr_person">
                                                    @for($i = 1; $i <= 4; $i++)
                                                       <option {{old('person') == $i ? 'selected' : ''}} value="0{{$i}}" >0 {{$i}} </option>
                                                    @endfor
                                                    
                                                   
                                                </select>	
                                            </div>
                                        </div>

                                        <input type="hidden" name="" id="total_adult" value="{{$roomdetails->total_adult}}">
                                        <input type="hidden" name="" id="room_price" value="{{$roomdetails->price}}">
                                        <input type="hidden" name="" id="discount_p" value="{{$roomdetails->discount}}">


                                        <div class="col-lg-12">
                                            <div style="display: none" class="form-group">
                                                <label>Nombre de chambre</label>
                                                <select  class="form-control number_of_rooms" name="number_of_rooms" id="select_room">
                                                   @for ($i = 1; $i <= 5; $i++)

                                                   <option value="0{{$i}}">0{{$i}}</option>
                                                       
                                                   @endfor
                                                    
                                                   
                                                </select>	
                                            </div>
                                            <input type="hidden" name="available_room" id="available_room" value="">
                                            <p style="display: none" class="available_room"></p>
                                        </div>

                                        <div class="col-lg-12">
                                            <table class="table">
                                               
                                                <tbody>
                                                  <tr>
                                                    <td> <p>Sous-total</p> </td>
                                                    <td style="text-align:right"> <span class="t_subtotal">0</span> Fcfa </td>
                                                  </tr>
                                                  <tr>
                                                    <td><p>Rabais</p></td>
                                                    <td style="text-align:right"> <span class="t_discount">0</span> Fcfa </td>
                                                  </tr>
                                                  <tr>
                                                    <td><p>Total</p></td>
                                                    <td style="text-align:right"> <span class="t_g_total">0</span> Fcfa </td>
                                                  </tr>

            
                                                 
                                                </tbody>
                                              </table>
                                        </div>
            
                                        <div class="col-lg-12 col-md-12">
                                            <button type="submit" class="default-btn btn-bg-three border-radius-5">
                                                Reservez
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                          
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="room-details-article">
                            <div class="room-details-slider owl-carousel owl-theme">
                                @foreach ($multiImage as $image)
                                    <div class="room-details-item">
                                        <img src=" {{asset('upload/roomimg/multi_img/'.$image->multi_img)}} " alt="Images">
                                    </div>
                                @endforeach
                                
                                
                            </div>


 


                            <div class="room-details-title">
                                <h2>{{$roomdetails->type->name}}</h2>
                                <ul>
                                    
                                    <li>
                                       <b> Basic : {{$roomdetails->price}}€/Nuit</b>
                                    </li> 
                                 
                                </ul>
                            </div>

                            <div class="room-details-content">
                                <p>
                                    {!!$roomdetails->description!!}
                                </p>




   <div class="side-bar-plan">
                                <h3>Basic Plan Facilities</h3>
                              
                                <ul>
                                    @foreach ($facility as $fac)
                                        <li><a href="#"> {{$fac->facility_name}} </a></li>
                                    @endforeach
                                </ul>

                                
                            </div>







<div class="row"> 
 <div class="col-lg-6">



 <div class="services-bar-widget">
                                <h3 class="title">Détails Chambres</h3>
        <div class="side-bar-list">
            <ul>
               <li>
                    <a href="#"> <b>Capacité : </b> {{$roomdetails->room_capacity}} Personnes<i class='bx bxs-cloud-download'></i></a>
                </li>
                <li>
                     <a href="#"> <b>Dimension : </b> {{$roomdetails->size}} m <i class='bx bxs-cloud-download'></i></a>
                </li>
               
               
            </ul>
        </div>
    </div>




 </div>



 <div class="col-lg-6">
 <div class="services-bar-widget">
        <h3 class="title">Détails Chambres</h3>
        <div class="side-bar-list">
            <ul>
               <li>
                    <a href="#"> <b>Vue : </b>{{$roomdetails->view}} <i class='bx bxs-cloud-download'></i></a>
                </li>
                <li>
                     <a href="#"> <b>Style Lit : </b> {{$roomdetails->bed_style}} <i class='bx bxs-cloud-download'></i></a>
                </li>
                 
            </ul>
        </div>
    </div> 

                    </div> 
                        </div>

 

                            </div>

                            <div class="room-details-review">
                                <h2>Clients Review and Retting's</h2>
                                <div class="review-ratting">
                                    <h3>Your retting: </h3>
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                </div>
                                <form >
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control"  cols="30" rows="8" required data-error="Write your message" placeholder="Write your review here.... "></textarea>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12">
                                            <button type="submit" class="default-btn btn-bg-three">
                                                Submit Review
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Room Details Area End -->

        <!-- Room Details Other -->
        <div class="room-details-other pb-70">
            <div class="container">
                <div class="room-details-text">
                    <h2>D'autres Chambres</h2>
                </div>

                <div class="row ">
                    @foreach ($otherRooms as $item)
                    <div class="col-lg-6">
                        <div class="room-card-two">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-4 p-0">
                                    <div class="room-card-img">
                                        <a href="{{ url('/room/details/'.$item->id) }}">
                                            <img src="{{asset('upload/roomimg/'.$item->image)}}" alt="Images">
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-7 col-md-8 p-0">
                                    <div class="room-card-content">
                                         <h3>
                                            <a href="{{ url('/room/details/'.$item->id) }}">{{$item['type']['name'] ?? null}}</a>
                                        </h3>
                                        <span>{{$item->price}} / Par nuit </span>
                                        <div class="rating">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p>{{$item->short_desc}}.</p>
                                        <ul>
                                            <li><i class='bx bx-user'></i> {{$item->room_capacity}} Personne</li>
                                            <li><i class='bx bx-expand'></i> {{$item->size}}</li>
                                        </ul>

                                        <ul>
                                            <li><i class='bx bx-show-alt'></i>{{$item->view}}</li>
                                            <li><i class='bx bxs-hotel'></i> {{$item->bed_style}}</li>
                                        </ul>
                                        
                                        <a href="room-details.html" class="book-more-btn">
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
        <!-- Room Details Other End -->

        <script>
            // Variables globales pour les dates et l'ID de la chambre
            var check_in = "{{ old('check_in') }}";
            var check_out = "{{ old('check_out') }}";
            var room_id = "{{ $roomdetails->id }}";
         
            // Si les dates sont déjà remplies (en cas de validation échouée), vérifie la disponibilité
            if (check_in != '' && check_out != ''){
               getAvaility(formatDate(check_in), formatDate(check_out), room_id);
            }
         
            // Lors de la sélection de la date de départ (check_out)
            $("#check_out").on('change', function () {
               var check_out = formatDate($(this).val());
               var check_in = formatDate($("#check_in").val());
         
               if(check_in != '' && check_out != ''){
                  getAvaility(check_in, check_out, room_id);
               }
            });
         
            // Lors du changement du nombre de chambres
            $(".number_of_rooms").on('change', function () {
               var check_out = formatDate($("#check_out").val());
               var check_in = formatDate($("#check_in").val());
         
               if(check_in != '' && check_out != ''){
                  getAvaility(check_in, check_out, room_id);
               }
            });
         
            // Fonction pour vérifier la disponibilité des chambres via AJAX
            function getAvaility(check_in, check_out, room_id) {
               $.ajax({
                  url: "{{ route('check_room_availability') }}",
                  data: {room_id:room_id, check_in:check_in, check_out:check_out},
                  success: function(data){
                     $(".available_room").html('Availability : <span class="text-success">'+data['available_room']+' Rooms</span>');
                     $("#available_room").val(data['available_room']);
                     price_calculate(data['total_nights']);
                  }
               });
            }
         
            // Fonction pour calculer le prix en fonction des nuits et des chambres
            function price_calculate(total_nights){
               var room_price = $("#room_price").val();
               var discount_p = $("#discount_p").val();
               var select_room = $("#select_room").val();
         
               var sub_total = room_price * total_nights * parseInt(select_room);
               var discount_price = (parseInt(discount_p)/100)*sub_total;
         
               $(".t_subtotal").text(sub_total);
               $(".t_discount").text(discount_price);
               $(".t_g_total").text(sub_total-discount_price);
            }
         
            // Lors de la soumission du formulaire
            $("#bk_form").on('submit', function () {
               var av_room = $("#available_room").val();
               var select_room = $("#select_room").val();
               
               // Vérifie le nombre de chambres disponibles
               if (parseInt(select_room) > av_room){
                  alert('Sorry, you selected more rooms than are available.');
                  return false;
               }
               
               // Vérifie le nombre de personnes sélectionnées
               var nmbr_person = $("#nbr_person").val();
               var total_adult = $("#total_adult").val();
               if(parseInt(nmbr_person) > parseInt(total_adult)){
                  alert('Sorry, you selected more people than the maximum allowed.');
                  return false;
               }
            });
         
            // Fonction pour formater les dates en DD-mm-YY
            function formatDate(dateStr) {
               if (!dateStr) return '';
               var parts = dateStr.split('-'); // Sépare la date
               // Si elle est déjà au format attendu, retourne-la
               if (parts.length === 3 && parts[2].length === 2) return dateStr;
               
               // Si elle est au format YY-mm-dd (par exemple), réorganise-la
               var year = parts[0];
               var month = parts[1];
               var day = parts[2];
               
               // Vérifie que chaque partie existe et renvoie au format DD-mm-YY
               return day && month && year ? `${day}-${month}-${year.substr(-2)}` : '';
            }
         </script>
         
        
 @endsection       