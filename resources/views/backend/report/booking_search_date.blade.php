@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
 
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    <li class="breadcrumb-item active" aria-current="page">Résultat pour la periode</li>

                    <li class="breadcrumb-item active" aria-current="page">Du <span class="badge bg-success" > {{$startDate}} </span> au  <span class="badge bg-danger" >{{$endDate}}  </span> </li>


                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a href="{{route('booking.report')}}" class="btn btn-primary px-5 ">  Reservation sur une periode</a>
                
            </div>
        </div>
    </div>
    <!--end breadcrumb-->
   
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                      
                            
                        
                        <tr>
                            <th>S1</th>
                            <th>Code</th>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Methode Paiement</th>
                            <th>Total</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($bookings as $key=>$item)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$item->code}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->payment_method}}</td>
                            <td>{{$item->total_price}}€</td>

                            <td>
                                <a class="btn btn-warning px-3 radius-10" href="{{route('download.invoice',$item->id)}}"> <i class="lni lni-download"></i> Telecharger Facture</a>

                            </td>
                        </tr>
                      @endforeach
                       
                    </tbody>
               
                </table>
            </div>
        </div>
    </div>
   
    <hr/>
   
</div>
@endsection