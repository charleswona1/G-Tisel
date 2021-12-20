<x-admin title="liste de demandeurs">
    <div class="card bg-white p-4 mb-3">
        <div class="d-flex justify-content-between">
            <h3>Liste </h3>
        </div>
    </div>

    <x-flash-bag></x-flash-bag>
    <div class="card bg-white p-4 table-responsive">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nom complet</th>
                <th scope="col">Pays</th>
                <th scope="col">Ville</th>
                <th scope="col">Telephone</th>
                <th scope="col">Email</th>
                <th scope="col">status</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($users as $key=>$user)
                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$user->last_name}} {{$user->firstname}}</td>
                        <td>{{$user->country}}</td>
                        <td>{{$user->city}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            @if (isset($user->email_verified_at))
                            <span class="badge rounded-pill bg-success">Actif</span>
                            @else
                            <span class="badge rounded-pill bg-danger">Non actif</span> 
                            @endif
                        </td>
                        <td>
                            <a href="{{route('admin.activation',$user)}}" class="btn-success text-white btn-sm btn"><i class="fas fa-edit"></i></a>
                            <a href="{{route('admin.deleteCompte',$user)}}" class="btn-danger text-white btn-sm btn"><i class="fas fa-trash"></i></a>
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