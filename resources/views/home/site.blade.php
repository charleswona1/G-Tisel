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
                        <li class="list-group-item title-item-filtre">{{__('site regime')}}</li>
                        <li class="list-group-item title-item-filtre">{{__('site source energie')}}</li>
                        <li class="list-group-item title-item-filtre">{{__('site type exploitation')}}</li>
                        <li class="list-group-item title-item-filtre">{{__('site region')}}</li>
                        <li class="list-group-item title-item-filtre">{{__('site departement')}}</li>
                        <li class="list-group-item title-item-filtre">{{__('site arrondissement')}}</li>
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
                                                @forelse ($site->Regime->Activites as $activite)
                                                    {{$activite->libelle_activite}}
                                                @empty
                                                    Aucune activité
                                                @endforelse    
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
                    <p class="title-normal"> {{__('site suivit')}} </p>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
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
                        <li class="list-group-item">

                            <div class="row">
                            
                                <div class="col-3 justify-content-center">
                                    <span class="border border-light">
                                        <img src="{{asset('assets/img/chutte.jpg')}}" style="height: 40px;" alt="item1" class="rounded">
                                    </span>
                                </div>

                                <div class="col-7">
                                    <p class="title-site"> Station eolienne de yoko (40 000 kWatt) </p>
                                
                                    <div class="d-flex">
                                        <div class="icon-grey-ligth" style="margin-right: 10px;"><i class="far fa-briefcase"></i></div>
                                        <p class="subtitle-calification-site" > Production</p>
                                    
                                    </div>
                                    <div class="d-flex">
                                        <div class="icon-grey-ligth" style="margin-right: 10px;"><i class="far fa-map-marker"></i></div>
                                        
                                        <p class="subtitle-localite-site" > Mbam ekim, Ntui </p>
                                    </div>
                                </div>

                                <div class="col-2 d-flex justify-content-end icon-grey-dark">
                                    <i class="fas fa-ellipsis-h mb-lg-1 me-3 me-lg-0"></i>
                                </div>    
                            </div>

                            <div class="d-flex justify-content-between mt-1">
                                <div class="d-flex" > 
                                    <div class="icon-grey-ligth" style="margin-right: 5px;"><i class="far fa-file-signature"></i></div>
                                    <div>
                                        <p class="subtitle-labe-service-site mb-0">{{__('site service')}}</p> 
                                        <p class="subtitle-detail-site mb-0">---</p> 
                                    </div>
                                </div>

                                <div class="subtitle-detail-site d-flex" > 
                                    <div class="statusIndex rounded-circle" style="background-color: #49c151;"></div>
                                    <p class="subtitle-detail-site mb-0">Attribué</p> 
                                </div>
                                
                            </div>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</x-home>