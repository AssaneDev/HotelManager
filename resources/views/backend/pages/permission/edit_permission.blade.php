@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Ajouter une permission</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Ajouter Une Permission</li>
                </ol>
            </nav>
        </div>
       
    </div>
    <!--end breadcrumb-->
    <div class="container">
        <div class="main-body">
            <div class="row">
               
         <div class="col-lg-12">
            <div class="card">
                <div class="card-body p-4">
                    
                        <form class="row g-3" id="myForm" action="{{route('update.permission')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="id" value="{{$permission->id}}">

                            <div class="col-md-6">
                                <label for="input1" class="form-label">Nom Permission</label>
                                <input type="text" name="name" class="form-control" value="{{$permission->name}}" >
                                
                            </div>

                            <div class="col-md-6">
                                <label for="input1" class="form-label">Gourpe Permission</label>
                                <select name="group_name" class="form-select mb-3" aria-label="Default select example">
									<option  selected="">Selectionnez Un Goupe</option>
									<option value="Equipe" {{$permission->group_name == 'Equipe' ? 'selected' : ''}} >Equipe</option>
									<option value="Section Reservation" {{$permission->group_name == 'Section Reservation' ? 'selected' : ''}}>Section Reservation</option>
									<option value="Gestion Chambre" {{$permission->group_name == 'Gestion Chambre' ? 'selected' : ''}}>Gestion Chambre</option>

									<option value="Reservation" {{$permission->group_name == 'Reservation' ? 'selected' : ''}}>Reservation</option>
									<option value="Reservation Chambre"{{$permission->group_name == 'Reservation Chambre' ? 'selected' : ''}}>Reservation Chambre</option>
									<option value="Parametre" {{$permission->group_name == 'Parametre' ? 'selected' : ''}}>Parametre</option>
									<option value="Temoignage" {{$permission->group_name == 'Temoignage' ? 'selected' : ''}}>Temoignage</option>
									<option value="Blog" {{$permission->group_name == 'Blog' ? 'selected' : ''}}>Blog</option>
									<option value="Commentaire" {{$permission->group_name == 'Commentaire' ? 'selected' : ''}}>Commentaire</option>
									<option value="Rapport Réservation" {{$permission->group_name == 'Rapport Réservation' ? 'selected' : ''}}>Rapport Réservation</option>
									<option value="Galerie Hotel" {{$permission->group_name == 'Galerie Hotel' ? 'selected' : ''}}>Galerie Hotel</option>
									<option value="Message Contact" {{$permission->group_name == 'Message Contacte' ? 'selected' : ''}}>Message Contacte</option>
									<option value="Role et Permission" {{$permission->group_name == 'Role et Permission' ? 'selected' : ''}}>Role et Permission</option>

								</select>
                               
                            </div>

                            
                            
                           

                        
                        
                            <div class="col-md-12">
                                <div class="d-md-flex d-grid align-items-center gap-3">
                                    <button type="submit" class="btn btn-primary px-4">Enrigistrer</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<
@endsection