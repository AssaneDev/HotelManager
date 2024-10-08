@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Article</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Modifier Un ARTicle</li>
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
                    
                        <form class="row g-3" id="myForm" action="{{route('update.blog.post')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" id="id" value="{{$post->id}}">
                        <div class="col-md-6">
                            <label for="input7" class="form-label">Categories</label>
                            <select name="blogcat_id" id="input7" class="form-select">
                                <option selected="">Selectionne Un Categorie</option>
                                @foreach ($blogcat as $item)
                                <option value="{{$item->id}}" {{$item->id == $post->blogcat_id ? 'selected' : ''}} >{{$item->category_name}}</option>
                                @endforeach
                               
                               
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="input1" class="form-label">Titre Article</label>
                            <input type="text" name="post_title" class="form-control" id="input1" placeholder="Titre Article" value="{{$post->post_title}}">
                        </div>

                        <div class="col-md-12">
                            <label for="input11" class="form-label">Courte Description</label>
                            <textarea class="form-control" name="short_desc" value rows="3">{{$post->short_desc}}</textarea>
                        </div>

                        <div class="col-md-12">
                            <label for="input11" class="form-label">Description</label>
                            <textarea class="form-control" id="myeditorinstance" name="long_descp" value rows="3">{!!$post->long_descp!!}</textarea>
                        </div>
                        
                        <div class="col-md-6">
                            <label for="input1" class="form-label">Image Article</label>
                            <input class="form-control" name="post_image" type="file" id="image">
                        </div>
                        <div class="col-md-6">
                            <img id="showImage" src=" {{ asset($post->post_image)}} " alt="Admin" class="rounded-circle p-1 bg-primary" width="80"/>
                        </div>
                       
                        <div class="col-md-12">
                            <div class="d-md-flex d-grid align-items-center gap-3">
                                <button type="submit" class="btn btn-primary px-4">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                name: {
                    required : true,
                }, 
                postion: {
                    required : true,
                }, 
                facebook: {
                    required : true,
                }, 
                image: {
                    required : true,
                }, 
                
            },
            messages :{
                name: {
                    required : 'Please Enter Name',
                }, 
                postion: {
                    required : 'veuillez entrer le post occupé',
                }, 
                facebook: {
                    required : 'veuillez entrer le liens facebook',
                }, 
                image: {
                    required : 'veuillez selectionnez une  image',
                }, 
                 
                 
                 

            },
            errorElement : 'span', 
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });
    
</script> --}}
   <script type="text/javascript">
        $(document).ready(function(){
            $('#image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
   </script>
@endsection
