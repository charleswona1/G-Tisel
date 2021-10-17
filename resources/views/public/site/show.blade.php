<x-espace-public title="detail d'un site">
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header font-weight-bold">
                    <div class="d-flex justify-content-between">
                        <p class="title-normal"> {{__('site title-detail')}} {{$site->name}}</p>
                        <div>
                            <a class="btn btn-primary btn-sm" href="{{route('public.demand',[$lang,$site])}}" role="button">Demander</a>
                        </div>
                        
                    </div>
                    
                </div>
                @php
                    \Debugbar::info($site->UploadFileSite)
                @endphp
                <div class="card-body">

                    <div class="row mx-auto my-auto justify-content-center">
                        <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                            
                            <div class="carousel-inner"  role="listbox">
                                @forelse ($site->UploadFileSite as $key=>$patchImg)
                                    <div class="carousel-item {{$key == 0? "active":""}}">
                                        <div class="col-md-4">
                                            <div class="card">
                                                @php
                                                    \Debugbar::info($patchImg->url)
                                                @endphp
                                                <a class="image-link"  href="{{asset("storage/".$patchImg->url)}}" >
                                                    <div class="card-img" >
                                                        <img src="{{asset("storage/".$patchImg->url)}}" class="img-fluid h-100">
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    
                                @endforelse
                            
                            </div>
                            <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            </a>
                            <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>

                    <div class="d-flex px-3 mt-4">
                        <div class="icon-grey-ligth" style="margin-right: 10px;"><i class="far fa-file-contract"></i></div>
                        <p class="subtitle-calification-site" > {{$site->Regime->name}} </p>
                    
                    </div>

                    <div class="d-flex px-3 pt-2">
                        <div class="icon-grey-ligth" style="margin-right: 10px;"><i class="far fa-briefcase"></i></div>
                        <p class="subtitle-calification-site" > 
                            @forelse ($site->Regime->Activites as $activite)
                                {{$activite->libelle_activite}}
                            @empty
                                Aucune activité
                            @endforelse 
                        </p>
                    
                    </div>

                    <div class="d-flex px-3 pt-2">
                        <div class="icon-grey-ligth" style="margin-right: 10px;"><i class="far fa-map-marker"></i></div>
                        
                        <p class="subtitle-localite-site" > {{$site->Arrondissement->name}}, {{$site->localite}} </p>
                    </div>

                    <div class="d-flex px-3 pt-2">
                        <div class="icon-grey-ligth" style="margin-right: 10px;"><i class="far fa-bolt"></i></div>
                        
                        <p class="subtitle-capacite-site" >potentiel de production:  {{$site->capacite}} Mwatt</p>
                    </div>

                    

                    <div class="px-3 mt-4">
                        <h6 class="fw-bold mb-2">Descriptions</h6>

                        <p>
                            {{$site->description}}
                        </p>
                    </div>
                    
                    <hr>
                    <div class="d-flex justify-content-between px-3 ">
                        <div class="d-flex" > 
                            <div class="icon-grey-ligth" style="margin-right: 5px;"><i class="far fa-calendar-alt"></i></div>
                           <p class="subtitle-detail-site mb-0">{{date('d/m/Y', strtotime($site->created_at))}} </p> 
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
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header font-weight-bold">
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
    <style>
        @media (max-width: 767px) {
            .carousel-inner .carousel-item > div {
                display: none;
            }
            .carousel-inner .carousel-item > div:first-child {
                display: block;

            }
        }

        .carousel-inner .carousel-item.active,
        .carousel-inner .carousel-item-next,
        .carousel-inner .carousel-item-prev {
            display: flex;
        }

        /* medium and up screens */
        @media (min-width: 768px) {
            
            .carousel-inner .carousel-item-end.active,
            .carousel-inner .carousel-item-next {
            transform: translateX(25%);
            }
            
            .carousel-inner .carousel-item-start.active, 
            .carousel-inner .carousel-item-prev {
            transform: translateX(-25%);
            }
        }

        .carousel-inner .carousel-item-end,
        .carousel-inner .carousel-item-start { 
        transform: translateX(0);
        }
    </style>

    @push('javascripts')
        <script>
            let items = document.querySelectorAll('.carousel .carousel-item')

            items.forEach((el) => {
                const minPerSlide = 3
                let next = el.nextElementSibling
                for (var i=1; i<minPerSlide; i++) {
                    if (!next) {
                        // wrap carousel by using first child
                        next = items[0]
                    }
                    let cloneChild = next.cloneNode(true)
                    el.appendChild(cloneChild.children[0])
                    next = next.nextElementSibling
                }
            });
            $(document).ready(function() {
                $('.carousel-inner').magnificPopup({
                    delegate: 'a',
                    type:'image'
                });
            });
        </script>
    @endpush
</x-espace-public>