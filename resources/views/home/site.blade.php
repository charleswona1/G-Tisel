<x-home title="Sites disponibles">

<style>
    .title {
        font-size: 20px;
        font-weight: bold;
    }

    .title-site {
        font-size: 19px;
        font-weight: bold;
        color: #4c4ca2;
        margin-bottom: 0px;
    }
    
    .description-site {
        color: #65696a;
    }

    .subtitle-calification-site {
        margin-bottom: 0px;
        font-size: 15px;
        font-weight: 600;
        color: #686868;
    }

    .subtitle-localite-site {
        margin-bottom: 0px;
        font-size: 15px;
        font-weight: 600;
        color: #686868;
    }

    .subtitle-capacite-site {
        font-size: 13px;
        font-weight: 900;
        color: #5f994e;
    }

    .subtitle-detail-site {
        margin-bottom: 0px;
        font-size: 13px;
        font-weight: 600;
        color: #686868;
    }

    .icon-grey-dark {
        color: #555;
    }

    .icon-grey-ligth {
        color: #686868;
    }

    .statusIndex {
        margin-right: 5px;
        height: 10px;
        width: 10px;
        margin-top: 3px;
    }

    .title-normal {
        font-size: 19px;
        font-weight: bold;
        margin-bottom: 0px;
    }

    .title-item-filtre {
        font-size: 16px;
        font-weight: bold;
        margin-bottom: 0px;
    }

    .subtitle-labe-service-site {
        font-size: 14px;
        font-weight: bold;
        color: #5f994e;
        margin-bottom: 0px;
    }

</style>

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
                        <li class="list-group-item mt-2">
                            <div class="row item-site">
                                <div class="col-2 justify-content-center">
                                    <span class="border border-light">
                                        <img src="{{asset('assets/img/chutte.jpg')}}" style="height: 40px;" alt="item1" class="rounded">
                                    </span>
                                </div>

                                <div class="col-8">
                                    <p class="title-site" >Barrage hydroélectrique de Foumbot </p>
                                    <p class="mb-1 description-site"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore quae fugiat
                                     quisquam obcaecati sunt quasi. Quisquam aliquam architecto illo enim adipisci alias temporibus... </p>
                                    <div class="d-flex">
                                        <div class="icon-grey-ligth" style="margin-right: 10px;"><i class="far fa-briefcase"></i></div>
                                        <p class="subtitle-calification-site" > Production, Transport, Commercialisation </p>
                                    
                                    </div>
                                    <div class="d-flex">
                                        <div class="icon-grey-ligth" style="margin-right: 10px;"><i class="far fa-map-marker"></i></div>
                                        
                                        <p class="subtitle-localite-site" > Noun, Foumbot </p>
                                    </div>
                                
                                    <div class="d-flex">
                                        <div class="icon-grey-ligth" style="margin-right: 10px;"><i class="far fa-bolt"></i></div>
                                        
                                        <p class="subtitle-capacite-site" > 120 000 Kwatt</p>
                                    </div>
                                    

                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex" > 
                                            <div class="icon-grey-ligth" style="margin-right: 5px;"><i class="far fa-calendar-alt"></i></div>
                                           <p class="subtitle-detail-site mb-0">12/06/2021</p> 
                                        </div>

                                        <div class="subtitle-detail-site d-flex" > 
                                            <div class="icon-grey-ligth" style="margin-right: 5px;"><i class="far fa-users"></i></div>
                                            <p class="subtitle-detail-site mb-0"> 6 {{__('site postulant')}}</p>
                                        </div>

                                        <div class="subtitle-detail-site d-flex" > 
                                            <div class="statusIndex rounded-circle" style="background-color: #297dc8;"></div>
                                            <p class="subtitle-detail-site mb-0">En cours</p> 
                                        </div>
                                        
                                    </div>
                                </div>

                                <div class="col-2 d-flex justify-content-end icon-grey-dark">
                                    <i class="fas fa-ellipsis-h mb-lg-1 me-3 me-lg-0"></i>
                                </div>        
                            </div>
                            
                        </li>

                        <li class="list-group-item mt-2">
                            <div class="row item-site">
                                <div class="col-2 justify-content-center">
                                    <span class="border border-light">
                                        <img src="{{asset('assets/img/eolienne.jpeg')}}" style="height: 40px;" alt="item1" class="rounded">
                                    </span>
                                </div>

                                <div class="col-8">
                                    <p class="title-site" >Station eolienne de Koumba </p>
                                    <p class="mb-1 description-site"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore quae fugiat
                                     quisquam obcaecati sunt quasi. Quisquam aliquam architecto illo enim adipisci alias temporibus... </p>
                                    <div class="d-flex">
                                        <div class="icon-grey-ligth" style="margin-right: 10px;"><i class="far fa-briefcase"></i></div>
                                        <p class="subtitle-calification-site" > Production, Transport, Commercialisation </p>
                                    
                                    </div>
                                    <div class="d-flex">
                                        <div class="icon-grey-ligth" style="margin-right: 10px;"><i class="far fa-map-marker"></i></div>
                                        
                                        <p class="subtitle-localite-site" > Noun, Koumba </p>
                                    </div>
                                
                                    <div class="d-flex">
                                        <div class="icon-grey-ligth" style="margin-right: 10px;"><i class="far fa-bolt"></i></div>
                                        
                                        <p class="subtitle-capacite-site" > 10 000 Kwatt</p>
                                    </div>
                                    

                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex" > 
                                            <div class="icon-grey-ligth" style="margin-right: 5px;"><i class="far fa-calendar-alt"></i></div>
                                           <p class="subtitle-detail-site mb-0">12/06/2021</p> 
                                        </div>

                                        <div class="subtitle-detail-site d-flex" > 
                                            <div class="icon-grey-ligth" style="margin-right: 5px;"><i class="far fa-users"></i></div>
                                            <p class="subtitle-detail-site mb-0"> 18 {{__('site postulant')}}</p>
                                        </div>

                                        <div class="subtitle-detail-site d-flex" > 
                                            <div class="statusIndex rounded-circle" style="background-color: #ec5c63;"></div>
                                            <p class="subtitle-detail-site mb-0" >Expiré</p> 
                                        </div>
                                        
                                    </div>
                                </div>

                                <div class="col-2 d-flex justify-content-end icon-grey-dark">
                                    <i class="fas fa-ellipsis-h mb-lg-1 me-3 me-lg-0"></i>
                                </div>        
                            </div>
                            
                        </li>

                        <li class="list-group-item mt-2">
                            <div class="row item-site">
                                <div class="col-2 justify-content-center">
                                    <span class="border border-light">
                                        <img src="{{asset('assets/img/savane.jpg')}}" style="height: 40px;" alt="item1" class="rounded">
                                    </span>
                                </div>

                                <div class="col-8">
                                    <p class="title-site" >Station solaire de kousserie </p>
                                    <p class="mb-1 description-site"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore quae fugiat
                                     quisquam obcaecati sunt quasi. Quisquam aliquam architecto illo enim adipisci alias temporibus... </p>
                                    <div class="d-flex">
                                        <div class="icon-grey-ligth" style="margin-right: 10px;"><i class="far fa-briefcase"></i></div>
                                        <p class="subtitle-calification-site" > Production, Transport, Commercialisation </p>
                                    
                                    </div>
                                    <div class="d-flex">
                                        <div class="icon-grey-ligth" style="margin-right: 10px;"><i class="far fa-map-marker"></i></div>
                                        
                                        <p class="subtitle-localite-site" > Mayo danai, kousseire </p>
                                    </div>
                                
                                    <div class="d-flex">
                                        <div class="icon-grey-ligth" style="margin-right: 10px;"><i class="far fa-bolt"></i></div>
                                        
                                        <p class="subtitle-capacite-site" > 120 000 Kwatt</p>
                                    </div>
                                    

                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex" > 
                                            <div class="icon-grey-ligth" style="margin-right: 5px;"><i class="far fa-calendar-alt"></i></div>
                                           <p class="subtitle-detail-site mb-0">12/06/2021</p> 
                                        </div>

                                        <div class="subtitle-detail-site d-flex" > 
                                            <div class="icon-grey-ligth" style="margin-right: 5px;"><i class="far fa-users"></i></div>
                                            <p class="subtitle-detail-site mb-0"> 6 {{__('site postulant')}}</p>
                                        </div>

                                        <div class="subtitle-detail-site d-flex" > 
                                            <div class="statusIndex rounded-circle" style="background-color: #297dc8;"></div>
                                            <p class="subtitle-detail-site mb-0">En cours</p> 
                                        </div>
                                        
                                    </div>
                                </div>

                                <div class="col-2 d-flex justify-content-end icon-grey-dark">
                                    <i class="fas fa-ellipsis-h mb-lg-1 me-3 me-lg-0"></i>
                                </div>        
                            </div>
                            
                        </li>
                    </ul>
                </div>
                <div class="card-footer text-muted">
                  2 days ago
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
    </div>

</x-home>