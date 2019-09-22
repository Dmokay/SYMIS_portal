<nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="{{asset('assets/images/logo/SYMIS.jpg')}}" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">SYMIS</p>
                  <p class="designation">The Ultimate Companion</p>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">Main Menu</li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('panel')}}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">School Admin</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('principal')}}">School Principal</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('pta')}}">PTA Chairman</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('students')}}">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">Students</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('parents')}}">
                <i class="menu-icon typcn typcn-th-large-outline"></i>
                <span class="menu-title">Parents</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('teachers')}}">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Teachers</span>
              </a>
            </li>               
          </ul>
        </nav>