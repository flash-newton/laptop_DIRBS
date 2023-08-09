<nav class="bignav navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="bignav navbar-brand-wrapper d-flex justify-content-center">
      <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100 color-white">  
        <a class="navbar-brand brand-logo headtext " href="/home"><img src="{{asset('img/apiitlogo.jpg')}}" alt="logo"/><span class="titletext">DIRBS</span> </a>
        <a class="navbar-brand brand-logo-mini" href="/home"><img src="{{asset('img/logo.png')}}" alt="logo"/></a>
        <button class="headtext navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-sort-variant"></span>
        </button>
      </div>  
    </div>
    <div class="bignav navbar-menu-wrapper d-flex align-items-center justify-content-end">
     
      <ul class="bignav navbar-nav navbar-nav-right">
        <li class="nav-item dropdown me-1">
           <div style="font-weight:600; padding:3px 10px 3px 10px; color:white; background-color:rgb(79, 172, 226);">Mode : {{auth()->user()->role==0? 'Admin' : 'SuperAdmin'}}</div>
        </li>
        
        <li class=" nav-item nav-profile dropdown">
          <div class="nav-link " href="#" data-bs-toggle="dropdown" id="profileDropdown">
            <img src="{{asset('/img/prof.png')}}" alt="profile"/>
            <span class="headtext nav-profile-name">{{auth()->user()->name}}</span>
          </div>
          
          <a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
             <i style="color: rgb(182, 179, 179)" class="mdi icon-md mdi-door"></i>
            </a>
           

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
               @csrf
            </form>
        </li>
      </ul>


      
      <button class="headtext navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-menu"></span>

      </button>
    </div>
    
  </nav>