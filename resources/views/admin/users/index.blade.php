<x-admin title="Liste du personnels administratifs">
    <div class="card bg-white p-4 mb-3">
        <div class="d-flex justify-content-between">
            <h3>Listes du personnels</h3>

            <a href="{{route('admin.create-personnel')}}" class="btn btn-primary btn-sm">Ajouter un personnel  </a>
        </div>
    </div>

    <x-flash-bag></x-flash-bag>
    <div class="card bg-white p-4 table-responsive">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nom du personnel</th>
                <th scope="col">Poste</th>
                <th scope="col">Role</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($admins as $key=>$admin)
                <tr>
                    <th scope="col">{{$key + 1}}</th>
                    <th scope="col">{{$admin->name}}</th>
                    <th scope="col">{{$admin->poste}}</th>
                    <th scope="col">{{$admin->TypeCompte->libelle}}</th>
                    <th scope="col">
                        <a href="{{route('admin.edit-personnel',$admin)}}" class="btn-success text-white btn-sm btn"><i class="fas fa-edit"></i></a>
                        <a href="{{route('admin.delete-personnel',$admin)}}" class="btn-danger text-white btn-sm btn"><i class="fas fa-trash"></i></a>
                    </th>
                  </tr>
                @empty
                <tr>
                    <th colspan="6" class="text-center">Aucune données disponibles</th>
                </tr>    
                @endforelse
                  
            </tbody>
          </table>
    </div>
</x-admin>