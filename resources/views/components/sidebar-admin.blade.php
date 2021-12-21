<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
     <h2><img src="{{asset('assets/img/logo/brand.jpg')}}" style="height: 30px !important;width: auto !important" alt="" srcset=""> G-Tisel</h2>
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
            <a class="nav-link nav-group-toggle" href="{{route('admin.index-demande')}}">
                <i class="fas fa-file me-4"></i>
                Gestion des demandes
            </a>
          <ul class="nav-group-items">
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.index-demande')}}">
                    @php
                        $nbDemande = App\Models\DemandeTitre::count();
                    @endphp
                    Listes des demandes ({{$nbDemande}})
                </a>
                <a class="nav-link" href="{{route('admin.demande-attente')}}">
                    @php
                        $nbDemande = App\Models\DemandeTitre::where('status', 'Pending')->count();
                    @endphp
                    Demandes en attentes ({{$nbDemande}})
                </a>
                <a class="nav-link" href="{{route('admin.demande-en-cours')}}">
                    @php
                        $nbDemande = App\Models\DemandeTitre::where('status', 'Processed')->count();
                    @endphp
                    Demandes en cours ({{$nbDemande}})
                </a>
                <a class="nav-link" href="{{route('admin.demande-rejete')}}">
                    @php
                        $nbDemande = App\Models\DemandeTitre::where('status', 'Dismiss')->count();
                    @endphp
                    Demandes Rejetées ({{$nbDemande}})
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
                <a class="nav-link" href="{{route('admin.personnel')}}"> 
                    Listes de Utilisateurs
                </a>
                <a class="nav-link" href="#"> 
                    Accès Utilisateurs
                </a>
            </li>
          </ul>
        </li>
        
        <li class="nav-item "><a class="nav-link" href="{{route('admin.demandeur')}}">Demandeur</a></li>
        
        

        
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