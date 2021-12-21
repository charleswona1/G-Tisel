<x-admin title="Creation d'un personnel">
    <div class="card bg-white p-4 mb-3">
        <div class="row justify-content-between">
            <h5><i class="fas fa-pencil-alt me-2 ms-4"></i> Créer un personnel</h5>
        </div>
        
    </div>

    <x-flash-bag></x-flash-bag>
    <div class="card bg-white p-5">
        {{ html()->form('POST', URL::full())->acceptsFiles()->open() }}

            <div class="row">
                <div class="col-lg-6">
                    <x-form-group label="Nom du personnel" class="mb-3 ">
                        <input class="form-control" type="text" placeholder="Entrez le nom" name="name" value="{{$admin->name}}"/>
                    </x-form-group>
                </div>

                <div class="col-lg-6">
                    <x-form-group label="Téléphone du personnel" class="mb-3 ">
                        <input class="form-control" type="text" placeholder="Entrez le telephone" name="phone"  value="{{$admin->phone}}"/>
                    </x-form-group>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <x-form-group label="Code postale" class="mb-3 ">
                        <input class="form-control" type="number" placeholder="Entrez le code postale" name="codePostale"  value="{{$admin->codePostale}}"/>
                    </x-form-group>
                </div>

                <div class="col-lg-6">
                    <x-form-group label="Adresse email" class="mb-3 ">
                        <input class="form-control" type="email" placeholder="Entrez l'adresse email" name="email"  value="{{$admin->email}}"/>
                    </x-form-group>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <x-form-group label="Poste occupé" class="mb-3 ">
                        <input class="form-control" type="text" placeholder="Entrez le poste" name="poste"  value="{{$admin->poste}}"/>
                    </x-form-group>
                </div>

                <div class="col-lg-6">
                    <x-form-group label="Type de compte" class="mb-3 ">
                        <select name="type_compte_id" class="form-select">
                            <option value="">Slection du type</option>
                            @foreach ($types as $type)
                                <option value="{{$type->id}}" @if ($admin->type_compte_id == $type->id)
                                    selected
                                @endif >{{$type->libelle}}</option>
                            @endforeach
                        </select>
                    </x-form-group>
                </div>
            </div>
            
            <x-errors />
    
            <button class="btn btn-primary" type="submit">Enregistrer </button>
            
        {{ html()->form()->close() }}
    </div>
</x-admin>