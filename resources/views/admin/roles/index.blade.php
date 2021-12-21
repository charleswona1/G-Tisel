<x-admin title="Les rôles ">
    <div class="card bg-white p-4 mb-3">
        <div class="d-flex justify-content-between">
            <h3>Gestions des rôles </h3>

            <a href="{{route('admin.create')}}" class="btn btn-primary btn-sm">Ajouter un role  </a>
        </div>
    </div>

    <x-flash-bag></x-flash-bag>
    <div class="card bg-white p-4 table-responsive">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nom du personnel</th>
                <th scope="col">Titre</th>
                <th scope="col">Status</th>
                <th scope="col">Acces</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                
                <tr>
                    <th colspan="6" class="text-center">Aucune données disponibles</th>
                </tr>
               
              
            </tbody>
          </table>
    </div>
</x-admin>