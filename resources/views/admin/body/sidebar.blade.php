@php
$setting = App\Models\SiteSetting::find(1);
@endphp
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="  {{asset($setting->logo)}}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">S.S Hotel</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
     </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{route('admin.dashboard')}}">
                <div class="parent-icon"><i class='bx bx-home-alt'></i>
                </div>
                <div class="menu-title">Tableau de Bord</div>
            </a>
        </li>
        {{-- room --}}
        <li class="menu-label">Gestion Réservation</li>
        @if(Auth::User()->can('gestion.reservation	'))
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bx bx-bed"></i>
                    </div>
                    <div class="menu-title">Gestion Chambre</div>
                </a>
                <ul>
                    <li> <a href="{{route('room.type.list')}}"><i class='bx bx-radio-circle'></i>Types de Chambre</a>
                    </li>
                
                
                </ul>
            </li>
       @endif     

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-book-add'></i>
                </div>
                <div class="menu-title">Réservation</div>
            </a>
            @if(Auth::User()->can('reservation.chambre'))
                <ul>
                    <li> <a href="{{route('booking.list')}}"><i class='bx bx-radio-circle'></i>Liste Réservation</a>
                    </li>
                    <li> <a href="{{route('add.room.list')}}"><i class='bx bx-radio-circle'></i>Ajouter Réservation</a>
                    </li> 
                    
                </ul>
            @endif 
        </li>

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-buildings'></i>
                </div>
                <div class="menu-title">Etat Réservations</div>
            </a>
            <ul>
                <li> <a href="{{route('view.room.list')}}"><i class='bx bx-radio-circle'></i>Gestion Réservation Chambre</a>
                </li>
              
              
            </ul>
        </li>
     @if(Auth::User()->can('rapport.reservation	'))
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-abacus'></i>
                </div>
                <div class="menu-title">Rapport de réservation
                </div>
            </a>
            <ul>
                <li> <a href="{{route('booking.report')}}"><i class='bx bx-radio-circle'></i>Booking report</a>
                </li>
              
            </ul>
        </li>
       @endif 
        @if(Auth::User()->can('message.menue'))
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class='bx bx-message-minus'></i>
                    </div>
                    <div class="menu-title">Message Contact</div>
                </a>
                <ul>
                    <li> <a href="{{route('contact.message')}}"><i class='bx bx-radio-circle'></i>message</a>
                    </li>
                
                </ul>
            </li>
        @endif
        {{-- room --}}
        <li class="menu-label">Gestion Du Site </li>
        @if(Auth::User()->can('equipe.menu'))
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-user-plus"></i>
                </div>
                
                <div class="menu-title">Gestion Equipe</div>
            </a>
            <ul>
                @if(Auth::User()->can('equipe.liste'))
                <li> <a href="{{route('all.team')}}"><i class='bx bx-radio-circle'></i>Equipe</a>
                </li>
                @endif
                @if(Auth::User()->can('equipe.ajouter'))
                <li> <a href="{{route('add.team')}}"><i class='bx bx-radio-circle'></i>Ajouter Equipe</a>
                </li>
                @endif
             
            </ul>
        </li>
        @endif

        @if(Auth::User()->can('section.reservation'))

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="fadeIn animated bx bx-book"></i>
                </div>
                <div class="menu-title">Section Réservation</div>
                <ul>
                    
                    <li> <a href="{{route('book.area')}}"><i class='bx bx-radio-circle'></i>MAJ Book Area</a>
                    </li>
                    
                 
                </ul>
            </a>
           
        </li>
        @endif
        @if(Auth::User()->can('temoignage.menue'))
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx  bx-comment-check'></i>
                </div>
                <div class="menu-title">Testimonial</div>
            </a>
            <ul>
                <li> <a href="{{route('all.testimonial')}}"><i class='bx bx-radio-circle'></i>Liste Testimonial</a>
                </li>
                <li> <a href="{{route('add.testimonial')}}"><i class='bx bx-radio-circle'></i>Ajouter Testimonial</a>

              
              
            </ul>
        </li>
        @endif
         @if(Auth::User()->can('blog.menue'))
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-message-detail'></i>
                </div>
                <div class="menu-title">Blog</div>
            </a>
            <ul>
                <li> <a href="{{route('blog.category')}}"><i class='bx bx-radio-circle'></i>Category Blog</a>
                </li>
                <li> <a href="{{route('all.blog.post')}}"><i class='bx bx-radio-circle'></i>Liste articles blog</a>

              
              
            </ul>
        </li>
        @endif  	
        @if(Auth::User()->can('commentaire.menue'))

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-comment-edit'></i>
                </div>
                <div class="menu-title">Commentaires</div>
            </a>
            <ul>
                <li> <a href="{{route('all.comment')}}"><i class='bx bx-radio-circle'></i>Les Commentaires</a>
                </li>
              

              
              
            </ul>
        </li>  
        @endif 

         @if(Auth::User()->can('galerie.menue'))

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-images'></i>
                </div>
                <div class="menu-title">Galerie Hotel</div>
            </a>
            <ul>
                <li> <a href="{{route('all.gallery')}}"><i class='bx bx-radio-circle'></i>Toute les Galerie</a>
                </li>
              
            </ul>
        </li>
        @endif

	
        
        
        {{-- -------------- --}}
       
       
        
        
       
       
       
        
          
           
        </li> 	
      
        <li class="menu-label">Roles & Permissions</li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx bx-wrench'></i>
                </div>
                <div class="menu-title">Parametre</div>
            </a>
            <ul>
                <li> <a href="{{route('smtp.setting')}}"><i class='bx bx-radio-circle'></i>Parametre Smtp</a>
                </li>

                <li> <a href="{{route('site.setting')}}"><i class='bx bx-radio-circle'></i>Parametre Site</a>
                </li>
              
              
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-user-plus'></i>
                </div>
                <div class="menu-title">Roles & Permissions</div>
            </a>
            <ul>
                <li> <a href="{{route('all.permission')}}"><i class='bx bx-radio-circle'></i>Liste des Permissions</a>
                </li>

                <li> <a href="{{route('all.roles')}}"><i class='bx bx-radio-circle'></i>Liste des Roles</a>
                </li>
              

                <li> <a href="{{route('add.roles.permission')}}"><i class='bx bx-radio-circle'></i>Attribuer des permission</a>
                </li>


                <li> <a href="{{route('all.roles.permission')}}"><i class='bx bx-radio-circle'></i>Tous Les Roles Attribuer</a>
                </li>
            </ul>
        </li>


        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-tag'></i>
                </div>
                <div class="menu-title">Gestion admin User</div>
            </a>
            <ul>
                <li> <a href="{{route('all.admin')}}"><i class='bx bx-radio-circle'></i>Liste des Admins</a>
                </li>
                <li> <a href="{{route('add.admin')}}"><i class='bx bx-radio-circle'></i>ajouter Admin</a>
                </li>
              
            </ul>
        </li>

 
        
        <li class="menu-label">Others</li>
        <li>
            <a href="#" target="_blank">
                <div class="parent-icon"><i class="bx bx-support"></i>
                </div>
                <div class="menu-title">Support</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</div>