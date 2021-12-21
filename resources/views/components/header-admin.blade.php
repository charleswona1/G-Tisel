<header class="header header-sticky mb-4">
    <div class="container-fluid text-white">
        <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
            <i class="fas fa-bars"></i>
        </button>
        <a class="header-brand d-md-none" href="#">
            Gtisel
        </a>
    
      <ul class="header-nav ms-3">
        <li class="nav-item dropdown">
            <a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-md">
                    <i class="fas fa-user-circle fa-2x"></i>
                </div>
            </a>
          <div class="dropdown-menu dropdown-menu-end pt-0">

            <div class="dropdown-header bg-light py-2">
              <div class="fw-semibold">Settings</div>
            </div><a class="dropdown-item" href="#">
              <svg class="icon me-2">
                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-user"></use>
              </svg> Profile</a>
              
            <div class="dropdown-divider"></div>
             <a class="dropdown-item" href="#">
              <svg class="icon me-2">
                <use xlink:href="{{route('admin.auth.logout')}}"></use>
              </svg> Logout</a>
          </div>
        </li>
      </ul>
    </div>
    <div class="header-divider"></div>
    <div class="container-fluid">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb my-0 ms-2">
          <li class="breadcrumb-item">
            <!-- if breadcrumb is single--><span>Home</span>
          </li>
          <li class="breadcrumb-item active"><span>Dashboard</span></li>
        </ol>
      </nav>
    </div>
  </header>

  <style>
      .header{
          background: #4AA0DF !important
      }
  </style>