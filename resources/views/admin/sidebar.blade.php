 <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="user-profile">
          <div class="user-image">
            <img src="admin/images/faces/face28.png">
          </div>
          <div class="user-name">
              Edward Spencer
          </div>
          <div class="user-designation">
              Developer
          </div>
        </div>
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic-collapse" aria-expanded="false" aria-controls="ui-basic-collapse">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">Elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic-collapse">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ url('fields') }}">Field</a></li>
                <li class="nav-item"> <a class="nav-link" href="admin/pages/ui-features/typography.html">Season</a></li>
                <li class="nav-item"> <a class="nav-link" href="admin/pages/ui-features/typography.html">Soil</a></li>

              </ul>
            </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic-collapse" aria-expanded="false" aria-controls="ui-basic-collapse">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">Expert</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic-collapse">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ url('createExpert') }}">Add Expert</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('viewExpert') }}">View Expert</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('updateExpert') }}">Update Expert</a></li>

              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('bookings') }}">
              <i class="icon-pie-graph menu-icon"></i>
              <span class="menu-title">Bookings</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('postPage') }}">
              <i class="icon-command menu-icon"></i>
              <span class="menu-title">Add post</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('showPost') }}">
              <i class="icon-command menu-icon"></i>
              <span class="menu-title">Show Post</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('blogDetails') }}">
              <i class="icon-command menu-icon"></i>
              <span class="menu-title">Blog Details</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('postBlog') }}">
              <i class="icon-command menu-icon"></i>
              <span class="menu-title">Add Blog</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('all_messages') }}">
              <i class="icon-help menu-icon"></i>
              <span class="menu-title">Messages</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('showUser') }}">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">All User Show</span>
            </a>
          </li>

        </ul>
      </nav>