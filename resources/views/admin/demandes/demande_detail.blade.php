<x-admin title="Liste des sites">
    <div class="card bg-white p-4 mb-3">
        <div class="d-flex justify-content-between">
            <h3>Traitement des demandes</h3>

           <!-- <a href="{{route('admin.create')}}" class="btn btn-primary btn-sm">Ajouter un site</a> -->
        </div>
    </div>

    <x-flash-bag></x-flash-bag>
    <div class="card bg-white p-5">
        {{ html()->form('POST', URL::full())->acceptsFiles()->open() }}

            <div class="row">
                <div class="col-lg-6">
                    <x-form-group label="Nom du requerant" class="mb-3 ">
                        <input class="form-control" type="text" placeholder="Entrez le nom du requerant" value="{{$demande->user->last_name}} {{$demande->user->first_name}}" name="name_requerant" />
                    </x-form-group>
                </div>

                <div class="col-lg-6">
                    <x-form-group label="Responsable ARSEL" class="mb-3 ">
                        <input class="form-control" type="text" placeholder="Entrez le nom du responsable" value="{{$demande->name_responsable}}" name="name_responsable" />
                    </x-form-group>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <x-form-group label="Selectioner la categorie" class="mb-3 ">
                        <select name="categorie" class="form-select" >
                            <option selected>Selectinner la catégorie</option>
                            <option value="GTisel ARSEL">GTisel ARSEL</option>
                            <option value="MINEE">MINEE</option>
                          </select>
                    </x-form-group>
                </div>
            </div>    
            <div class="row">

                <div class="col-lg-4">
                    <x-form-group label="localite" class="mb-3 ">
                        <input class="form-control" type="text" placeholder="Entrez la localite" disabled name="localite" value="{{$demande->site->longitude}}" />
                    </x-form-group>
                </div>

                <div class="col-lg-4">
                    <x-form-group label="Activite" class="mb-3 ">
                        <input class="form-control" type="text" placeholder="Entrez l'activite" disabled name="activite" value="{{$demande->site->Regime->Activites[0]->libelle_activite}}" />
                    </x-form-group>
                </div>

                <div class="col-lg-4">
                    <x-form-group label="Régime" class="mb-3 ">
                        <input class="form-control" type="text" placeholder="Entrez le regime" disabled name="regime" value="{{$demande->site->Regime->name}}" />
                    </x-form-group>
                </div>

            </div>

            <div class="row">

                <div class="col-lg-6">
                    <x-form-group label="Formulaire de demande" class="mb-3 ">
                        <input class="form-control" name="formulaire_demande[]" disabled type="file" id="formFileMultiple" multiple>
                    </x-form-group>
                </div>

                <div class="col-lg-6">
                    <x-form-group label="Ajouter fichier">
                        <input class="form-control" name="fichier_pdf" accept=".pdf" type="file">
                    </x-form-group>
                </div>

            </div>

            <x-form-group label="Description affaire" class="mb-3 ">
                <textarea name="description" class="form-control" cols="20" rows="5"  value="{{$demande->description}} placeholder="Entrer une description"></textarea>
            </x-form-group>

            <div class="row">
                <div class="col-lg-6">
                    <x-form-group label="Selectioner le status" class="mb-3 ">
                        <select name="status" class="form-select">
                            <option selected>Selectinner le status</option>
                            <option value="Pending">En attente</option>
                            <option value="Processed">En cours</option>
                            <option value="success">Attribué</option>
                            <option value="Dismiss">Rejeté</option>
                          </select>
                    </x-form-group>
                </div>

            
            </div>

            <div class="mt-3 row border">
                @for ($i =1 ; $i<15 ; $i++)
                    @if ($demande->file.$i != null && $demande->file.$i != "")
                        
                    @endif
                @endfor
            </div>
            
            <x-errors />
    
            <button class="btn btn-primary" type="submit">Enregistrer </button>
            
        {{ html()->form()->close() }}
    </div>
</x-admin>