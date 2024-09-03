@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<style>
    .form-check-label{
        text-transform: capitalize;
    }
</style>
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Attribuer Permissions</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Attribuer permissions/li>
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
                    
                        <form class="row g-3" id="myForm" action="{{route('role.permission.store')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            
                            <div class="col-md-6">
                                <label for="input1" class="form-label">Roles</label>
                                <select name="role_id" class="form-select mb-3" aria-label="Default select example">
									<option  selected="" disabled >Selectionnez Un role</option>

                                    @foreach ($roles as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach

								</select>

                                <div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="CheckDefaultmain">
									<label class="form-check-label" for="CheckDefaultmain">Toute les permissions</label>
								</div>

                                <hr>
                                  
                                @foreach ($permission_groups as $group)
                                    
                               

                                <div class="row">

                                    <div class="col-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label style="background-color: orangered" class="form-check-label btn btn-primary px-1" for="flexCheckDefault">{{$group->group_name}}</label>
                                        </div>
        
                                    </div>
                                    
                                    
                                    @php
                                        $permissions = App\Models\User::getpermissionByGroupName($group->group_name)
                                    @endphp

                                      @foreach ($permissions as $permission)

                                        <div class="col-9">
                                            <div class="form-check">
                                                <input class="form-check-input" name="permission[]" type="checkbox" value="{{$permission->id}}" id="flexCheckDefault{{$permission->id}}" value="{{$permission->id}}">

                                                <label class="form-check-label" for="flexCheckDefault{{$permission->id}}">{{$permission->name}}</label>
                                            </div>
            
                                        </div>

                                    @endforeach
                                   <br>
                                   <br>  
                                   
                                </div>

                                @endforeach
                               
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


<script>
    $('#CheckDefaultmain').click(function(){
        if ($(this).is(':checked')) {
            $('input[type = checkbox]').prop('checked',true);

        }else{
            $('input[type = checkbox]').prop('checked',false);

        }
    });
</script>
@endsection