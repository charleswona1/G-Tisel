<x-admin title="Liste des sites">
    <div class="card bg-white p-4 mb-3">
        <div class="d-flex justify-content-between">
            <h3>Listes des sites</h3>

            <a href="{{route('admin.create')}}" class="btn btn-primary btn-sm">Ajouter un site</a>
        </div>
    </div>

    <div class="card bg-white p-4">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">source d'energie</th>
                <th scope="col">Capacité</th>
                <th scope="col">Localite</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($sites as $key=>$site)
                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$site->name}}</td>
                        <td>{{$site->SourceEnergie->name}} ({{$site->SourceEnergie->source}})</td>
                        <td>{{$site->capacite}} Mwatt</td>
                        <td>{{$site->Arrondissement->name}}, {{$site->localite}}</td>
                        <td>
                            <a href="#" class="btn-primary btn-sm btn"><i class="fas fa-eye"></i></a>
                            <a href="#" class="btn-success btn-sm btn"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn-success btn-sm btn"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @empty
                    
                @endforelse
              
            </tbody>
          </table>
    </div>
</x-admin>