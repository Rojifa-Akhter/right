<nav class="flex-row p-0 navbar col-lg-12 col-12 fixed-top d-flex">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
      <a class="navbar-brand brand-logo" href="admin/index.html"><img src="admin/images/logo.png" alt="logo"/></a>
      <a class="navbar-brand brand-logo-mini" href="admin/index.html"><img src="admin/images/logo-mini.svg" alt="logo"/></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
      <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="icon-menu"></span>
      </button>
      <ul class="navbar-nav mr-lg-2">
        <li class="nav-item nav-search d-none d-lg-block">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="search">
                <i class="icon-search"></i>
              </span>
            </div>
            <input type="text" class="form-control" placeholder="Search Projects.." aria-label="search" aria-describedby="search">
          </div>
        </li>
      </ul>
      <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown d-lg-flex d-none">
              <button type="button" class="btn btn-info font-weight-bold">+ Create New</button>
          </li>
        <li class="nav-item dropdown d-flex">
          <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
            <i class="mx-0 icon-air-play"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
            <p class="float-left mb-0 font-weight-normal dropdown-header">Messages</p>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                  <img src="admin/images/faces/face4.jpg" alt="image" class="profile-pic">
              </div>
              <div class="flex-grow preview-item-content">
                <h6 class="preview-subject ellipsis font-weight-normal">David Grey
                </h6>
                <p class="mb-0 font-weight-light small-text text-muted">
                  The meeting is cancelled
                </p>
              </div>
            </a>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                  <img src="admin/images/faces/face2.jpg" alt="image" class="profile-pic">
              </div>
              <div class="flex-grow preview-item-content">
                <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook
                </h6>
                <p class="mb-0 font-weight-light small-text text-muted">
                  New product launch
                </p>
              </div>
            </a>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                  <img src="admin/images/faces/face3.jpg" alt="image" class="profile-pic">
              </div>
              <div class="flex-grow preview-item-content">
                <h6 class="preview-subject ellipsis font-weight-normal"> Johnson
                </h6>
                <p class="mb-0 font-weight-light small-text text-muted">
                  Upcoming board meeting
                </p>
              </div>
            </a>
          </div>
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