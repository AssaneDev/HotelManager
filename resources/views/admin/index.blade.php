@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@php
    $bookings = App\Models\Booking::latest()->get();
    $pending = App\Models\Booking::where('status','0')->get();
    $complete = App\Models\Booking::where('status','1')->get();
    $totalPrice = App\Models\Booking::sum('total_price');

    $today = Carbon\Carbon::now()->toDateString();
    $todayPrice = App\Models\Booking::whereDate('created_at',$today)->sum('total_price');

    $allData = App\Models\Booking::orderBy('id','desc')->limit(10)->get();

@endphp

<div class="page-content">
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
       <div class="col">
         <div class="card radius-10 border-start border-0 border-4 border-info">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0 text-secondary">Total Réservation</p>
                        <h4 class="my-1 text-info">{{count($bookings)}}</h4>
                        
                    </div>
                    <div class="widgets-icons-2 rounded-circle bg-gradient-blues text-white ms-auto"><i class='bx bxs-cart'></i>
                    </div>
                </div>
            </div>
         </div>
       </div>
       <div class="col">
        <div class="card radius-10 border-start border-0 border-4 border-danger">
           <div class="card-body">
               <div class="d-flex align-items-center">
                   <div>
                       <p class="mb-0 text-secondary">Réservation en Attente</p>
                       <h4 class="my-1 text-danger">{{count($pending)}}</h4>
                       {{-- <p class="mb-0 font-13">+5.4% from last week</p> --}}
                   </div>
                   <div class="widgets-icons-2 rounded-circle bg-gradient-burning text-white ms-auto"><i class='bx bxs-wallet'></i>
                   </div>
               </div>
           </div>
        </div>
      </div>
      <div class="col">
        <div class="card radius-10 border-start border-0 border-4 border-success">
           <div class="card-body">
               <div class="d-flex align-items-center">
                   <div>
                       <p class="mb-0 text-secondary">Réservation Confirmer</p>
                       <h4 class="my-1 text-success">{{count($complete)}}</h4>
                       {{-- <p class="mb-0 font-13">-4.5% from last week</p> --}}
                   </div>
                   <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto"><i class='bx bxs-bar-chart-alt-2' ></i>
                   </div>
               </div>
           </div>
        </div>
      </div>
      <div class="col">
        <div class="card radius-10 border-start border-0 border-4 border-warning">
           <div class="card-body">
               <div class="d-flex align-items-center">
                   <div>
                       <p class="mb-0 text-secondary">Caisse du jour</p>
                       <h4 class="my-1 text-warning">{{$todayPrice}} €</h4>
                       {{-- <p class="mb-0 font-13">+8.4% from last week</p> --}}
                   </div>
                   <div class="widgets-icons-2 rounded-circle bg-gradient-orange text-white ms-auto"><i class='bx bxs-group'></i>
                   </div>
               </div>
           </div>
        </div>
      </div> 
    </div><!--end row-->

    <div class="row">
       <div class="col-12 col-lg-12 d-flex">
          <div class="card radius-10 w-100">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <div>
                        <h6 class="mb-0">Aperçu des ventes</h6>
                    </div>
                 
                </div>
            </div>
            
              <div class="row row-cols-1 row-cols-md-3 row-cols-xl-3 g-0 row-group text-center border-top">
               
                <canvas id="bookingChart"></canvas>
                
              </div>
          </div>
       </div>
    
    </div><!--end row-->

     <div class="card radius-10">
        <div class="card-header">
            <div class="d-flex align-items-center">
                <div>
                    <h6 class="mb-0">Derniere Reservation</h6>
                </div>
                
            </div>
        </div>
       
        <div class="card-body">
          <div class="table-responsive">
              <table id="example" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                    
                          
                      
                      <tr>
                          <th>S1</th>
                          <th>Resa No</th>
                          <th>Resa Date</th>
                          <th>Client</th>
                          <th>Chambre</th>
                          <th>Date Entré/Sortie</th>
                          <th>Nombre de Chambre</th>
                          <th>Nombre de persone</th>
                          <th>Payment</th>
                       
  
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ($allData as $key=>$item)
                      <tr>
                          <td>{{$key+1}}</td>
                        
                          <td> <a href="{{route('edit.booking',$item->id)}}"> {{$item->code}}</a> </td>
                          <td> {{$item->created_at->format('d/m/Y')}} </td>
                          <td> {{$item['user']['name']}} </td>
                          <td> {{$item['room']['type']['name']}} </td>
                          <td> <span class="badge bg-primary"> {{$item->check_in}}</span> / <br> <span class="badge bg-warning text-dark">{{$item->check_out}} </span>  </td>
                          <td> {{$item->number_of_rooms}} </td>
                          <td> {{$item->person}} </td>
                          <td>
                              @if ($item->payement_status == '1')
                              <span class="badge bg-gradient-quepal text-white shadow-sm w-100">Payé</span>
                                  @else
                                  <span class="badge bg-gradient-blooker text-white shadow-sm w-100">En Attente</span>
                                 
                              @endif
                          </td>
                          
                          </td>
                         
      
                      </tr>
                    @endforeach
                     
                  </tbody>
             
              </table>
         
          </div>
      </div>

      

        

</div>


{{-- <div class="card-body">
  <div class="table-responsive">
    <table class="table align-middle mb-0">
     <thead class="table-light">
      <tr>
        <th>Product</th>
        <th>Photo</th>
        <th>Product ID</th>
        <th>Status</th>
        <th>Amount</th>
        <th>Date</th>
        <th>Shipping</th>
      </tr>
      </thead>
      <tbody><tr>
       <td>Iphone 5</td>
       <td><img src="assets/images/products/01.png" class="product-img-2" alt="product img"></td>
       <td>#9405822</td>
       <td><span class="badge bg-gradient-quepal text-white shadow-sm w-100">Paid</span></td>
       <td>$1250.00</td>
       <td>03 Feb 2020</td>
       <td><div class="progress" style="height: 6px;">
             <div class="progress-bar bg-gradient-quepal" role="progressbar" style="width: 100%"></div>
           </div></td>
      </tr>

      <tr>
       <td>Earphone GL</td>
       <td><img src="assets/images/products/02.png" class="product-img-2" alt="product img"></td>
       <td>#8304620</td>
       <td><span class="badge bg-gradient-blooker text-white shadow-sm w-100">Pending</span></td>
       <td>$1500.00</td>
       <td>05 Feb 2020</td>
       <td><div class="progress" style="height: 6px;">
             <div class="progress-bar bg-gradient-blooker" role="progressbar" style="width: 60%"></div>
           </div></td>
      </tr>

      <tr>
       <td>HD Hand Camera</td>
       <td><img src="assets/images/products/03.png" class="product-img-2" alt="product img"></td>
       <td>#4736890</td>
       <td><span class="badge bg-gradient-bloody text-white shadow-sm w-100">Failed</span></td>
       <td>$1400.00</td>
       <td>06 Feb 2020</td>
       <td><div class="progress" style="height: 6px;">
             <div class="progress-bar bg-gradient-bloody" role="progressbar" style="width: 70%"></div>
           </div></td>
      </tr>

      <tr>
       <td>Clasic Shoes</td>
       <td><img src="assets/images/products/04.png" class="product-img-2" alt="product img"></td>
       <td>#8543765</td>
       <td><span class="badge bg-gradient-quepal text-white shadow-sm w-100">Paid</span></td>
       <td>$1200.00</td>
       <td>14 Feb 2020</td>
       <td><div class="progress" style="height: 6px;">
             <div class="progress-bar bg-gradient-quepal" role="progressbar" style="width: 100%"></div>
           </div></td>
      </tr>
      <tr>
       <td>Sitting Chair</td>
       <td><img src="assets/images/products/06.png" class="product-img-2" alt="product img"></td>
       <td>#9629240</td>
       <td><span class="badge bg-gradient-blooker text-white shadow-sm w-100">Pending</span></td>
       <td>$1500.00</td>
       <td>18 Feb 2020</td>
       <td><div class="progress" style="height: 6px;">
             <div class="progress-bar bg-gradient-blooker" role="progressbar" style="width: 60%"></div>
           </div></td>
      </tr>
      <tr>
       <td>Hand Watch</td>
       <td><img src="assets/images/products/05.png" class="product-img-2" alt="product img"></td>
       <td>#8506790</td>
       <td><span class="badge bg-gradient-bloody text-white shadow-sm w-100">Failed</span></td>
       <td>$1800.00</td>
       <td>21 Feb 2020</td>
       <td><div class="progress" style="height: 6px;">
             <div class="progress-bar bg-gradient-bloody" role="progressbar" style="width: 40%"></div>
           </div></td>
      </tr>
     </tbody>
   </table>
   </div>
  </div>
</div> --}}

<script>
  var ctx = document.getElementById('bookingChart').getContext('2d');
  var bookings = @json($bookings);

  // Extract the required data from the bookings
  var labels = bookings.map(function(booking) {
      return booking.check_in; 
  });

  var data = bookings.map(function(booking) {
      return booking.total_price;
  });

  var bookingChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: labels,
          datasets: [{
              label: 'Booking Data',
              data: data,
              backgroundColor: 'rgba(75, 192, 192, 0.2)',
              borderColor: 'rgba(75, 192, 192, 1)',
              borderWidth: 1
          }]
      },
      options: {
          scales: {
              y: {
                  beginAtZero: true
              }
          }
      }
  });
</script>
@endsection
