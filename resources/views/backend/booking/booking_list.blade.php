@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
 
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Liste Réservation</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a href="{{route('add.team')}}" class="btn btn-primary px-5 "> Ajouter Réservation</a>
                
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
                            <th>Resa No</th>
                            <th>Resa Date</th>
                            <th>Client</th>
                            <th>Chambre</th>
                            <th>Date Entré/Sortie</th>
                            <th>Nombre de Chambre</th>
                            <th>Nombre de persone</th>
                            <th>Payment</th>
                            <th>Status</th>
                            {{-- <th>Action</th> --}}





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
                                    <span class="text-sucess">Complete</span>
                                    @else
                                    <span class="text-danger">Pending</span>
                                   
                                @endif
                            </td>
                            <td> 
                                @if ($item->status == '1')
                                <span class="text-sucess">Active</span>
                                @else
                                <span class="text-danger">Pending</span>
                               
                            @endif
                            </td>
                           
                            {{-- <td>
                               
                                <a href="{{route('delete.team',$item->id)}}" class="btn btn-danger px-3 radius-30" id="delete"> Supprimer</a>

                            </td> --}}
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