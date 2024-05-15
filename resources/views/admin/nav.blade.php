<nav class="flex-row p-0 navbar col-lg-12 col-12 fixed-top d-flex">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
      <a class="navbar-brand brand-logo" href=""><img src="admin/images/logo.png" alt="logo"/></a>
      <a class="navbar-brand brand-logo-mini" href=""><img src="admin/images/logo-mini.svg" alt="logo"/></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
      <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="icon-menu"></span>
      </button>
      
      <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown d-lg-flex d-none">
              {{-- <button type="button" class="btn btn-info font-weight-bold">+ Create New</button> --}}
          </li>
        
        <li class="mr-4 nav-item dropdown d-flex ">
              
          {{-- <a href="{{ route('logout') }}">Logout</a> --}}
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Logout</button>
        </form>
        
        
            
        </li>
        
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="icon-menu"></span>
      </button>
    </div>
  </nav>