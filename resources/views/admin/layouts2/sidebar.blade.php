<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
      <a class="sidebar-brand brand-logo" href="index.html"><img src="{{asset('backend2/assets/images/logo.svg')}}" alt="logo" /></a>
      <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
    </div>
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
          <div class="nav-profile-image">
            <img src="{{asset('backend2/assets/images/faces/face1.jpg')}}" alt="profile" />
            <span class="login-status online"></span>
            <!--change to offline or busy as needed-->
          </div>
          <div class="nav-profile-text d-flex flex-column pr-3">
            <span class="font-weight-medium mb-2">Henry Klein</span>
            <span class="font-weight-normal">$8,753.00</span>
          </div>
          <span class="badge badge-danger text-white ml-3 rounded">3</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="mdi mdi-home menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="pages/icons/mdi.html">
          <i class="mdi mdi-contacts menu-icon"></i>
          <span class="menu-title">Users</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('companies.index')}}">
          <i class="mdi mdi-contacts menu-icon"></i>
          <span class="menu-title">Company</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/forms/basic_elements.html">
          <i class="mdi mdi-format-list-bulleted menu-icon"></i>
          <span class="menu-title">Posts</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('jobs.create')}}">
          <i class="mdi mdi-chart-bar menu-icon"></i>
          <span class="menu-title">Jobs</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/tables/basic-table.html">
          <i class="mdi mdi-table-large menu-icon"></i>
          <span class="menu-title">Categories</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/charts/chartjs.html">
          <i class="mdi mdi-chart-bar menu-icon"></i>
          <span class="menu-title">FAQS</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/charts/chartjs.html">
          <i class="mdi mdi-chart-bar menu-icon"></i>
          <span class="menu-title">Sliders</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="mdi mdi-crosshairs-gps menu-icon"></i>
          <span class="menu-title">Location</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="pages/ui-features/buttons.html">Country</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/ui-features/dropdowns.html">State</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/ui-features/typography.html">City</a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="mdi mdi-file-document-box menu-icon"></i>
          <span class="menu-title">Testimonial</span>
        </a>
      </li>
      <li class="nav-item sidebar-actions">
        <div class="nav-link">
          <div class="mt-4">
            <div class="border-none">
              <p class="text-black">Notification</p>
            </div>
        </div>
      </li>
    </ul>
  </nav>
