<x-admin title="Liste des sites">
    <div class="card bg-white p-4 mb-3">
        <div class="d-flex justify-content-between">
            <h3>Listes des demandes</h3>

           <!-- <a href="{{route('admin.create')}}" class="btn btn-primary btn-sm">Ajouter un site</a> -->
        </div>
    </div>

    <x-flash-bag></x-flash-bag>
    <div class="card h-100 bg-white p-4 table-responsive">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nom du site</th>
                <th scope="col">Localite</th>
                <th scope="col">Adhérant</th>
                <th scope="col">Activité</th>
                <th scope="col">Statut</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($demandes as $key=>$demande)
                   
                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$demande->site->name}}</td>
                        <td>{{$demande->site->Arrondissement->name}}, {{$demande->site->localite}}</td>
                        <td>{{$demande->user->fisrt_name}} {{$demande->user->last_name}}</td>
                        <td>{{$demande->site->Regime->Activites[0]->libelle_activite}} </td>
                        <td>
                            {{$demande->status == 'Pending' ? 'En Attente' : ( $demande->status == 'Processed' ? 'En Cours' : ( $demande->status == 'success' ? 'Attribué' : 'Rejeté'))}}
                        </td>
                        <td class="d-flex">
                            <div class="dropdown" style="margin-right: 10px;">
                                <a class="btn btn-primary text-white btn-sm btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-coreui-toggle="dropdown" aria-expanded="false">
                                  Affecter
                                </a>
                              
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                  <li><a class="dropdown-item" href="#">Direction du régime</a></li>
                                  <li><a class="dropdown-item" href="#">Département juridique</a></li>
                                 
                                </ul>
                            </div>
                            
                            <div class="dropdown" style="margin-right: 10px;">
                                <a class="btn btn-success text-white btn-sm btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-coreui-toggle="dropdown" aria-expanded="false">
                                    Changer le status
                                </a>
                              
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                  <li><a class="dropdown-item" href="#">En attente</a></li>
                                  <li><a class="dropdown-item" href="#">En cours</a></li>
                                  <li><a class="dropdown-item" href="#">Rejeté</a></li>
                                </ul>
                            </div>
                        
                        </td>
                    </tr>
                @empty
                <tr>
                    <th colspan="7" class="text-center">Aucune données disponibles</th>
                </tr>
                @endforelse
              
            </tbody>
          </table>
    </div>
</x-admin>