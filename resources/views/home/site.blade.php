<x-home title="Sites disponibles">

    <div class="row" >
        <div class="col-lg-2 ">
            <div class="card">
                <div class="card-header">
                    <p class="title-normal"> {{__('site filtre')}} </p>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item title-item-filtre">{{__('site all')}}</li>
                        <li class="list-group-item title-item-filtre pointer" data-bs-toggle="modal" data-bs-target="#regime">{{__('site regime')}}</li>
                        <li class="list-group-item title-item-filtre pointer" data-bs-toggle="modal" data-bs-target="#Source">{{__('site source energie')}}</li>
                        <li class="list-group-item title-item-filtre pointer" data-bs-toggle="modal" data-bs-target="#localisation">{{__('site zone')}}</li>
                        <li class="list-group-item title-item-filtre">{{__('site activite')}}</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header pt-4 pb-0">
                    <h1 class="title mb-0" >{{__('site title')}}</h1>
                    <p class="subtitle mb-1">{{__('site subtitle')}}</p>
                    
                </div>
                <div class="card-body pt-0">
                    <ul class="list-group list-group-flush">
                        
                            @forelse ($sites as $site)
                            <li class="list-group-item mt-2">
                                <div class="row item-site">
                                    <div class="col-2 justify-content-center">
                                        <span class="border border-light">
                                            @php
                                                \Debugbar::info($site->UploadFileSite[0]->url)
                                            @endphp
                                            <img src="{{asset("storage/".$site->UploadFileSite[0]->url)}}" style="height: 40px;" alt="item1" class="rounded">
                                        </span>
                                    </div>

                                    <div class="col-8">
                                        <a href="{{Route('show',$site)}}"> 
                                            <p class="title-site"  >{{$site->name}}</p>
                                        </a>
                                        
                                        <p class="mb-1 description-site"> {{$site->description}} </p>
                                        <div class="d-flex">
                                            <div class="icon-grey-ligth" style="margin-right: 10px;"><i class="far fa-briefcase"></i></div>
                                            <p class="subtitle-calification-site" > 
                                               <!--  @forelse ($site->Regime->Activites as $activite)
                                                    {{$activite->libelle_activite}}
                                                @empty
                                                    Aucune activité
                                                @endforelse -->
                                                {{$site->Regime->Activites[0]->libelle_activite}}
                                                
                                            </p>
                                        
                                        </div>
                                        <div class="d-flex">
                                            <div class="icon-grey-ligth" style="margin-right: 10px;"><i class="far fa-map-marker"></i></div>
                                            
                                            <p class="subtitle-localite-site" > {{$site->Arrondissement->name}}, {{$site->localite}} </p>
                                        </div>
                                    
                                        <div class="d-flex">
                                            <div class="icon-grey-ligth" style="margin-right: 10px;"><i class="far fa-bolt"></i></div>
                                            
                                            <p class="subtitle-capacite-site" > {{$site->capacite}} Mwatt</p>
                                        </div>
                                        

                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex" > 
                                                <div class="icon-grey-ligth" style="margin-right: 5px;"><i class="far fa-calendar-alt"></i></div>
                                            <p class="subtitle-detail-site mb-0 mt-1">{{date('d/m/Y', strtotime($site->created_at))}} </p> 
                                            </div>

                                            <div class=" d-flex " > 
                                                <div class="icon-grey-ligth" style="margin-right: 5px;"><i class="far fa-users"></i></div>
                                                <p class="subtitle-detail-site mb-0 mt-1"> 6 {{__('site postulant')}}</p>
                                            </div>

                                            <div class="d-flex mt-1" > 
                                                <div class="statusIndex rounded-circle" style="background-color: #297dc8;"></div>
                                                <p class="subtitle-detail-site mb-0 ">En cours</p> 
                                            </div>
                                            
                                        </div>
                                    </div>

                                    <div class="col-2 d-flex justify-content-end icon-grey-dark">
                                        <i class="fas fa-ellipsis-h mb-lg-1 me-3 me-lg-0"></i>
                                    </div>        
                                </div>
                            </li>
                            @empty
                            <li class="list-group-item mt-2">
                                <h4>Aucun site disponible</h4>
                            </li>
                            @endforelse
                            
                            
                        </li>

                        
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header !font-weight-bold">
                    <p class="title-normal"> {{__('site audiance')}} </p>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        @forelse ($demandeTitres as $demandeTitre)
                        <li class="list-group-item">

                            <div class="row">
                                
                                <div class="col-3 justify-content-center">
                                    <span class="border border-light">
                                        <img src="{{asset('assets/img/chutte.jpg')}}" style="height: 40px;" alt="item1" class="rounded">
                                    </span>
                                </div>

                                <div class="col-7">
                                    <p class="title-site" >Barrage hydroélectrique de Foumbot </p>
                                
                                    <div class="d-flex">
                                        <div class="icon-grey-ligth" style="margin-right: 10px;"><i class="far fa-briefcase"></i></div>
                                        <p class="subtitle-calification-site" > Production</p>
                                    
                                    </div>
                                    <div class="d-flex">
                                        <div class="icon-grey-ligth" style="margin-right: 10px;"><i class="far fa-map-marker"></i></div>
                                        
                                        <p class="subtitle-localite-site" > Noun, Foumbot </p>
                                    </div>
                                </div>

                                <div class="col-2 d-flex justify-content-end icon-grey-dark">
                                    <i class="fas fa-ellipsis-h mb-lg-1 me-3 me-lg-0"></i>
                                </div>    
                                

                                <div class="d-flex justify-content-between mt-1">
                                    <div class="d-flex" > 
                                        <div class="icon-grey-ligth" style="margin-right: 5px;"><i class="far fa-file-signature"></i></div>
                                        <div>
                                            <p class="subtitle-labe-service-site mb-0">{{__('site service')}}</p> 
                                            <p class="subtitle-detail-site mb-0">Dirrection des régimes</p> 
                                        </div>
                                    </div>

                                    <div class="subtitle-detail-site d-flex" > 
                                        <div class="statusIndex rounded-circle" style="background-color: #297dc8;"></div>
                                        <p class="subtitle-detail-site mb-0">En Attente</p> 
                                    </div>
                                    
                                </div>

                        </li>
                        @empty
                            <h5>Vous n'avez aucune demande de site</h5>
                        @endforelse
                
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="regime" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body">
                <div class="d-flex justify-content-between">
                    <h6>Filtre sur les regimes</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="p-2">
                    @forelse ($regimes as $regime)
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="{{$regime->id}}" name="regime_id" id="regime_id">
                            <label class="form-check-label" for="regime_id">
                                {{$regime->name}}
                            </label>
                        </div>
                    @empty
                        <p class="text-center">Aucun regime disponible</p>
                    @endforelse
                </div>

                <div class="d-flex justify-content-between">
                    <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    
                    <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal" aria-label="find">
                        <i class="fas fa-check"></i>
                    </button>
                </div>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="Source" tabindex="-1" aria-labelledby="source d'energie" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body">
                <div class="d-flex justify-content-between">
                    <h6>Filtre sur les Sources d'energie</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="p-2">
                    @forelse ($sources as $source)
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="{{$source->id}}" name="source_id" id="source_id">
                            <label class="form-check-label" for="source_id">
                                {{$source->name}}
                            </label>
                        </div>
                    @empty
                        <p class="text-center">Aucune source d'energie disponible</p>
                    @endforelse
                </div>

                <div class="d-flex justify-content-between">
                    <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    
                    <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal" aria-label="find">
                        <i class="fas fa-check"></i>
                    </button>
                </div>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="localisation" tabindex="-1" aria-labelledby="localisation du site" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body">
                <div class="d-flex justify-content-between">
                    <h6>Filtre sur les Sources d'energie</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="p-2">
                    <div class="row">
                        <div class="col-lg-4">
                            <x-form-group label="Selectioner le regime" class="mb-3 text-primary">
                                <select name="regime_id" class="form-select"  >
                                    <option selected>Selectinner la region</option>
                                    @foreach ($regions as $region)
                                        <option value="{{$region->id}}">{{$region->name}}</option>
                                    @endforeach
                                  </select>
                            </x-form-group>
                        </div>

                        <div class="col-lg-4">
                            <x-form-group label="Selectioner le regime" class="mb-3 text-primary">
                                <select name="regime_id" class="form-select"  >
                                    <option selected>Selectinner le departement</option>
                                    @foreach ($departements as $departement)
                                        <option value="{{$departement->id}}">{{$departement->name}}</option>
                                    @endforeach
                                  </select>
                            </x-form-group>
                        </div>

                        <div class="col-lg-4">
                            <x-form-group label="Selectioner le regime" class="mb-3 text-primary">
                                <select name="regime_id" class="form-select"  >
                                    <option selected>Selectinner l'arrondissement</option>
                                    @foreach ($arrondissements as $arrondissement)
                                        <option value="{{$arrondissement->id}}">{{$arrondissement->name}}</option>
                                    @endforeach
                                  </select>
                            </x-form-group>
                        </div>
                    </div>
                   
                </div>

                <div class="d-flex justify-content-between">
                    <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    
                    <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal" aria-label="find">
                        <i class="fas fa-check"></i>
                    </button>
                </div>
            </div>
          </div>
        </div>
    </div>
</x-home>