@php
 $blog = App\Models\BlogPost::latest()->limit(3)->get();    
@endphp

<div class="blog-area pt-100 pb-70">

    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color">BLOGS</span>
            <h2>Nos derniers articles de blogs </h2>
        </div>
        <div class="row pt-45">

          @foreach ($blog as $post)
    

            <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <a href="blog-details.html">
                        <img src=" {{asset($post->post_image)}} " alt="Images">
                    </a>
                    <div class="content">
                        <ul>
                            <li> {{$post->created_at->format('d M Y')}} </li>
                            <li><i class='bx bx-user'></i>29K</li>
                            <li><i class='bx bx-message-alt-dots'></i>15K</li>
                        </ul>
                        <h3>
                            <a href="blog-details.html">{{$post->post_title}}</a>
                        </h3>
                        <p>{{$post->post_short_desc}}</p>
                        <a href="{{url('/blog/details/'.$post->post_slug)}}" class="read-btn">
                            LIRE PLUS
                        </a>
                    </div>
                </div>
            </div>

            @endforeach          
        </div>
    </div>
</div>