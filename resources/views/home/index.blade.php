<x-home title="Gestion des titres dans le secteur de l'energie">
    {{-- block de titre --}}
    <div class=" p-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 class="fw-bold ">
                        Gestion des titres dans le secteur de l'energie
                    </h1>
                    <h3 class="mt-2">
                        <small class="text-muted">Agence de regulation du secteur de l'electricité</small>
                    </h3>
                    <div class="d-grid gap-2 d-md-block mt-2">
                        <a class="btn btn-sm btn-primary"> plus <i class="fas fa-chevron-right"></i></a>
                    </div>
                    
                </div>
                <div class="col-lg-6">
                    <img src="{{asset("assets/img/solaire.jpg")}}" class="w-100 rounded" alt="" srcset="">
                </div>
            </div>
        </div>
    </div>

    {{-- block de la liste des type de source d'enerngie --}}

    <div class="p-5">
        <div class="container">
            <h1 class="text-center fw-bold">Sources d'energies proposées</h1>

            <div class="mt-5">
                <div class="owl-carousel">
                    <div class="card d-flex flex-column justify-content-center">
                        <img src="{{asset('assets/img/illustration/hydro.jpg')}}" class="card-img-top" style="max-height: 250px;">
                        <div class="card-body">
                            <h5 class="card-title">Centrale hydroélectrique</h5>
                            <p class="card-text">le potentiel hydroélectrique du Cameroun est estimé à 23000MW ,le 3ème potentiel énergétique au sud du Sahara et seulement 3% de ce potentiel est exploité.</p>
                        </div>
                    </div>

                    <div class="card d-flex flex-column justify-content-center">
                        <img src="{{asset('assets/img/illustration/solar.jpg')}}" class="card-img-top" style="max-height: 250px;">
                        <div class="card-body">
                            <h5 class="card-title">Centrale solaire</h5>
                            <p class="card-text">le Cameroun dispose d'un potentiel significatif en ressource d'énergie renouvelable, avec notamment un important gisement solaire car dispose d'un potentiel solaire estimé à  89,25 terawatt - heur</p>
                        </div>
                    </div>

                    <div class="card d-flex flex-column justify-content-center">
                        <img src="{{asset('assets/img/illustration/thermal.jpg')}}" class="card-img-top" style="max-height: 250px;">
                        <div class="card-body">
                            <h5 class="card-title">Centrale thermique</h5>
                            <p class="card-text">les centrale thermique à combustible fossiles sont un à tout majeure dans le processus de développement énergétique du Cameroun à l'exemple de la centrale de yassa qui a un potentiel de  production de 85MW</p>
                        </div>
                    </div>

                    <div class="card d-flex flex-column justify-content-center">
                        <img src="{{asset('assets/img/illustration/turbine.png')}}" class="card-img-top" style="max-height: 250px;">
                        <div class="card-body">
                            <h5 class="card-title fw-2">Centrale éoliene</h5>
                            <p class="card-text">l'évaluation de la ressource éolienne au Cameroun est représentée dans la carte Atlas des vent.il en ressort que la ressource éolienne est très abondante dans les régions septentrionales du pays</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- block du process d'aqquisition de titre  --}}

    <div class="p-5 bg-light">
        
    </div>

    {{-- bloc de la newlettre  --}}

    <div class="p-5">
        <div class="container">
            <h1 class="text-center fw-bold">Obtenez plus d'information en nous contactant </h1>

            <div class="mt-5">
              <div class="d-flex justify-content-center">
                  
                  <div class="col-lg-8">
                    {{ html()->form('POST', URL::full())->open() }}
                        <div class="row">
                            <div class="col-lg-6">
                                <x-form-group label="Noms" class="mb-3 text-primary">
                                    <input class="form-control" type="text" placeholder="Entrez votre noms" name="lastName" />
                                </x-form-group>
                            </div>
                            <div class="col-lg-6">
                                <x-form-group label="Prenoms" class="mb-3 text-primary">
                                    <input class="form-control" type="text" placeholder="Entrez votre prenoms" name="firstName" />
                                </x-form-group>
                            </div>
                        </div>
                        <x-form-group label="E-mail" class="mb-3 text-primary">
                            <input class="form-control" type="email" placeholder="Entrez votre e-mail" name="email" />
                        </x-form-group>
                        <x-form-group label="Message" class="mb-3 text-primary">
                            <textarea name="message" class="form-control" id="" cols="20" rows="5"></textarea>
                        </x-form-group>

                        <button type="button" class="btn btn-primary">Envoyer</button>

                    {{ html()->form()->close() }}
                  </div>
              </div>
            </div>
        </div>
    </div>

    @push('javascripts')
        <script>
            $(document).ready(function(){
                $(".owl-carousel").owlCarousel(
                    {
                        items:4,
                        loop:true,
                        margin:20,
                        autoplay:true,
                        autoplayTimeout:8000,
                        autoplayHoverPause:false,
                        responsiveClass:true,
                        responsive:{
                            0:{
                                items:1,
                                nav:true
                            },
                            600:{
                                items:2,
                                nav:false
                            },
                            1000:{
                                items:4,
                                nav:true,
                                loop:false
                            }
                        }
                    }
                );
            });
        </script>
    @endpush
</x-home>