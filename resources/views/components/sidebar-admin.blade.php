<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
     <h2>Gtisel</h2>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.dashboard')}}">
                <i class="far fa-tachometer-alt-slowest me-4"></i>
                Tableau de bord
            </a>
        </li>
        <li class="nav-title">Sites</li>
        <li class="nav-group" >
            <a class="nav-link nav-group-toggle" href="{{route('admin.index')}}">
                <i class="fas fa-map-marked-alt me-4"></i>
                Gestion des sites
            </a>
          <ul class="nav-group-items">
            <li class="nav-item">
                <a class="nav-link"href="{{route('admin.index')}}"> 
                    @php
                        $nbSite = App\Models\Site::count();
                    @endphp
                    Listes de sites ({{$nbSite}})
                </a>
                <a class="nav-link" href="{{route('admin.publie')}}"> 
                    @php
                        $nbPublie = App\Models\Site::where("publication","on")->count();
                    @endphp
                    Sites Publiés ({{$nbPublie}})
                </a>
                <a class="nav-link" href="{{route('admin.non-publie')}}"> 
                    Sites non Publiés ({{$nbSite - $nbPublie}})
                </a>
            </li>
          </ul>
        </li>

        <li class="nav-group">
            <a class="nav-link nav-group-toggle" href="#">
                <i class="fas fa-file me-4"></i>
                Gestion des demandes
            </a>
          <ul class="nav-group-items">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Listes de demandes (1)
                </a>
                <a class="nav-link" href="#">
                    Demandes traitées (0)
                </a>
                <a class="nav-link" href="#">
                    Demandes en cours (0)
                </a>
                <a class="nav-link" href="#">
                    Demandes regettées (0)
                </a>
            </li>
        
          </ul>
        </li>


        <li class="nav-title">Utilisateurs</li>
        <li class="nav-group">
            <a class="nav-link nav-group-toggle" href="#">
                <i class="fas fa-users me-4"></i>
                Gestion des Utilisateurs
            </a>
          <ul class="nav-group-items">
            <li class="nav-item">
                <a class="nav-link" href="#"> 
                    Listes de Utilisateurs (1)
                </a>
                <a class="nav-link" href="#"> 
                    Accès Utilisateurs
                </a>
            </li>
          </ul>
        </li>
        
        <li class="nav-group">
            <a class="nav-link nav-group-toggle" href="#">
                <i class="fas fa-user-shield me-4"></i>
                Gestion des Roles
            </a>
            <ul class="nav-group-items">
                <li class="nav-item">
                    <a class="nav-link" href="#"> 
                        Liste des roles
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> 
                        Accès Utilisateurs
                    </a>
                </li>
            </ul>
        </li>
        

        
      <li class="nav-divider"></li>
      <li class="nav-item mt-auto"><a class="nav-link" href="docs.html">doc</a></li>
      <li class="nav-item"><a class="nav-link nav-link-danger" href="https://coreui.io/pro/" target="_top">Pro</a></li>
    </ul>
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
  </div>
  <style>
      .sidebar-brand{
        background: #3B91D1 !important
      }
  </style>