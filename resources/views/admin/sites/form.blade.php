<x-admin title="provisoir page to add site">
    <div class="card bg-white p-5">
        {{ html()->form('POST', URL::full())->acceptsFiles()->open() }}

            <div class="row">
                <div class="col-lg-6">
                    <x-form-group label="Nom du site" class="mb-3 text-primary">
                        <input class="form-control" type="text" placeholder="Entrez le nom du site" name="name" />
                    </x-form-group>
                </div>

                <div class="col-lg-6">
                    <x-form-group label="Localite du site" class="mb-3 text-primary">
                        <input class="form-control" type="text" placeholder="Entrez le nom du site" name="localite" />
                    </x-form-group>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <x-form-group label="Latitude" class="mb-3 text-primary">
                        <input class="form-control" type="number" step="0.001" placeholder="Entrez le nom du site" name="latitude" />
                    </x-form-group>
                </div>

                <div class="col-lg-4">
                    <x-form-group label="Longitude" class="mb-3 text-primary">
                        <input class="form-control" type="number" step="0.001" placeholder="Entrez le nom du site" name="longitude" />
                    </x-form-group>
                </div>

                <div class="col-lg-4">
                    <x-form-group label="Capacité du site" class="mb-3 text-primary">
                        <input class="form-control" type="number" step="0.001" placeholder="Entrez le nom du site" name="capacite" />
                    </x-form-group>
                </div>
            </div>

            <x-form-group label="Description du site" class="mb-3 text-primary">
                <textarea name="description" class="form-control" cols="20" rows="5" placeholder="Entre une description"></textarea>
            </x-form-group>

            <div class="row">
                <div class="col-lg-4">
                    <x-form-group label="Selectioner la region du site" class="mb-3 text-primary">
                        <select class="form-select" disabled>
                            <option selected>Selectinner la region</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </x-form-group>
                </div>

                <div class="col-lg-4">
                    <x-form-group label="Selectioner le departement du site" class="mb-3 text-primary">
                        <select class="form-select"  disabled>
                            <option selected>Selectinner le departement</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </x-form-group>
                </div>

                <div class="col-lg-4">
                    <x-form-group label="Selectioner l'arrondissement du site" class="mb-3 text-primary">
                        <select name="arrondissement_id" class="form-select" >
                            <option selected>Selectinner l'arrondissement</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </x-form-group>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <x-form-group label="Selectioner la ou les sources d'energie" class="mb-3 text-primary">
                        <select name="source_energie_id" class="form-select">
                            <option selected>Selectinner la source d'energie</option>
                            @foreach ($sourceEnergies as $source)
                            <option value="{{$source->id}}">{{$source->name}}</option>
                            @endforeach
                          </select>
                    </x-form-group>
                </div>

                <div class="col-lg-6">
                    <x-form-group label="Selectioner le regime" class="mb-3 text-primary">
                        <select name="regime_id" class="form-select"  >
                            <option selected>Selectinner le regime</option>
                            @foreach ($regimes as $regimes)
                            <option value="{{$regimes->id}}">{{$regimes->name}}</option>
                            @endforeach
                          </select>
                    </x-form-group>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-9">
                    <x-form-group label="selectionnez quelque image du site" class="mb-3 text-primary">
                        <input class="form-control" name="files[]" type="file" id="formFileMultiple" multiple>
                    </x-form-group>
                </div>

                <div class="col-lg-3">
                    <p class="mb-1">Publiez le site</p>
                    <x-form-group  class="mb-3 text-primary form-check form-switch">
                        <input class="form-check-input" name="publication" type="checkbox" id="flexSwitchCheckChecked" >
                        <label class="form-check-label" for="flexSwitchCheckChecked">Publié</label>
                    </x-form-group>
                </div>

            </div>
            
        
        
            <x-errors />
        
            
            <button class="btn btn-primary" type="submit">Enregistrer </button>
            
        {{ html()->form()->close() }}
    </div>
    
</x-admin>