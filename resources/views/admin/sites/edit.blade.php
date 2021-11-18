<x-admin title="Update site">
    <div class="card bg-white p-4 mb-3">
        <div class="row justify-content-between">
            <h5><i class="fas fa-pencil-alt me-2 ms-4"></i> Modifier un site</h5>
        </div>
        
    </div>
    <div class="card bg-white p-5">
        {{ html()->form('POST', URL::full())->acceptsFiles()->open() }}

            <div class="row">
                <div class="col-lg-6">
                    <x-form-group label="Nom du site" class="mb-3 ">
                        <input class="form-control" value="{{$site->name}}" type="text" placeholder="Entrez le nom du site" name="name" />
                    </x-form-group>
                </div>

                <div class="col-lg-6">
                    <x-form-group label="Localite du site" class="mb-3 ">
                        <input class="form-control" value="{{$site->localite}}" type="text" placeholder="Entrez le nom du site" name="localite" />
                    </x-form-group>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <x-form-group label="Latitude" class="mb-3 ">
                        <input class="form-control" value="{{$site->latitude}}" type="number" step="0.001" placeholder="Entrez le nom du site" name="latitude" />
                    </x-form-group>
                </div>

                <div class="col-lg-4">
                    <x-form-group label="Longitude" class="mb-3 ">
                        <input class="form-control" value="{{$site->longitude}}" type="number" step="0.001" placeholder="Entrez le nom du site" name="longitude" />
                    </x-form-group>
                </div>

                <div class="col-lg-4">
                    <x-form-group label="Capacité du site" class="mb-3 ">
                        <input class="form-control" value="{{$site->capacite}}" type="number" step="0.001" placeholder="Entrez le nom du site" name="capacite" />
                    </x-form-group>
                </div>
            </div>

            <x-form-group label="Description du site" class="mb-3 ">
                <textarea name="description" class="form-control" cols="20" rows="5" placeholder="Entre une description">{{$site->description}}</textarea>
            </x-form-group>

            <div class="row">
                <div class="col-lg-4">
                    <x-form-group label="Selectioner la region du site" class="mb-3 ">
                        <select id="region" class="form-select" >
                            <option selected>Selectinner la region</option>
                            @foreach ($regions as $region)
                                <option value="{{$region->id}}">{{$region->name}}</option>
                            @endforeach
                          </select>
                    </x-form-group>
                </div>

                <div class="col-lg-4">
                    <x-form-group label="Selectioner le departement du site" class="mb-3 ">
                        <select id="depart" class="form-select">
                            <option  selected>Selectionner le departement</option>
                            @foreach ($departements as $departement)
                                <option value="{{$departement->id}}" >{{$departement->name}}</option>
                            @endforeach
                          </select>
                    </x-form-group>
                </div>

                <div class="col-lg-4">
                    <x-form-group label="Selectioner l'arrondissement du site" class="mb-3 ">
                        <select id="arrond" name="arrondissement_id" class="form-select" >
                            <option selected>Selectinner l'arrondissement</option>
                            @foreach ($arrondissements as $arrondissement)
                            <option value="{{$arrondissement->id}}" @if($arrondissement->id == $site->arrondissement_id) selected  @endif >{{$arrondissement->name}}</option>
                            @endforeach
                          </select>
                    </x-form-group>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <x-form-group label="Selectioner la ou les sources d'energie" class="mb-3 ">
                        <select name="source_id" class="form-select">
                            <option selected>Selectinner la source d'energie</option>
                            @foreach ($sourceEnergies as $source)
                            <option value="{{$source->id}}" @if($source->id == $site->source_id) selected  @endif >{{$source->name}}</option>
                            @endforeach
                          </select>
                    </x-form-group>
                </div>

                <div class="col-lg-6">
                    <x-form-group label="Selectioner le regime" class="mb-3 ">
                        <select name="regime_id" class="form-select"  >
                            <option selected>Selectinner le regime</option>
                            @foreach ($regimes as $regime)
                            <option value="{{$regime->id}}" @if($regime->id == $site->regime_id) selected  @endif >{{$regime->name}}</option>
                            @endforeach
                          </select>
                    </x-form-group>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-9">
                    <x-form-group label="selectionnez quelque image du site" class="mb-3 ">
                        <input class="form-control" name="files[]" type="file" id="formFileMultiple" multiple>
                    </x-form-group>
                </div>

                <div class="col-lg-3">
                    <p class="mb-1">Publiez le site</p>
                    <x-form-group  class="mb-3  form-check form-switch">
                        <input class="form-check-input" name="publication" value="{{$site->publication}}" type="checkbox" id="flexSwitchCheckChecked" >
                        <label class="form-check-label" for="flexSwitchCheckChecked">Publié</label>
                    </x-form-group>
                </div>
            </div>
            
            <x-errors />
    
            <button class="btn btn-primary" type="submit">Modifier </button>
            
        {{ html()->form()->close() }}
    </div>
    <script>
       
    </script>

    @push('javascripts')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
           jQuery(document).ready(function($) {
                $('#region').on('change',function(e){
                    $('#depart').empty();
                    $('#arrond').empty();
                    let select ="";
            
                    $.ajax({
                        url: "{{route('admin.search')}}",
                        type: "GET",
                        data:{region:e.target.value},

                        success:function(response){
                            select +="<option  selected>Selectionner le departement</option>"
                            $.each(response, function(key,elt){
                                console.log(elt);
                                select += "<option value="+elt.id+">"+elt.name+"</option>"
                            });

                            $('#depart').append(select);
                            $('#arrond').append("<option  selected>Selectionner un arrondissement </option>");
                        },
                        error: function(response){
                        
                        }
                    });
                   
                });

                $('#depart').on('change',function(e){
                    
                    $('#arrond').empty();
                    let select ="";
            
                    $.ajax({
                        url: "{{route('admin.search')}}",
                        type: "GET",
                        data:{depart:e.target.value},

                        success:function(response){
                            select +="<option  selected>Selectionner un arrondissement </option>"
                            $.each(response, function(key,elt){
                                console.log(elt);
                                select += "<option value="+elt.id+">"+elt.name+"</option>"
                            });

                            $('#arrond').append(select);
                        },
                        error: function(response){
                        
                        }
                    });
                });

                function getdata(data,route) {
                    $.ajax({
                        url: route,
                        type: "GET",
                        data:data,

                        success:function(response){
                            return response;
                        },
                        error: function(response){
                        
                        }
                    });
                }
            });
        </script>
    @endpush
    
</x-admin>