<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script defer src="{{ asset('fontawesome/js/all.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/style.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/stepper/bs-stepper.min.css') }}">  
    <link rel="stylesheet" href="{{ asset('plugins/magnific-popup/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/owl-caroussel/owl.carousel.min.css')}}">  
    
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <h1 class="mb-5 fw-bold text-primary">{{__('demande title')}}</h1>

        <div class="row">
            <div class="col-lg-6">
                <x-form-group label="Nom" class="mb-3 text-primary">
                    <input class="form-control" type="text" placeholder="Entrez le nom" value="{{$fisrt_name}}" name="name" />
                </x-form-group>
            </div>

            <div class="col-lg-6">
                <x-form-group label="Prénom" class="mb-3 text-primary">
                    <input class="form-control" type="text" placeholder="Entrez le prénom" value="{{$last_name}}" name="first_name" />
                </x-form-group>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <x-form-group label="Dénomination ou la raison sociale " class="mb-3 text-primary">
                    <input class="form-control" type="text" step="0.001" placeholder="Entrez la dénomination ou la raison sociale" value="{{$raison_social}}" name="raison_social" />
                </x-form-group>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-lg-4">
                <x-form-group label="Nationalité" class="mb-3 text-primary">
                    <input class="form-control" type="text" step="0.001" placeholder="Entrez la nationnalité" value="{{$nationalite}}" name="nationalite" />
                </x-form-group>
            </div>

            <div class="col-lg-4">
                <x-form-group label="Domicile" class="mb-3 text-primary">
                    <input class="form-control" type="text" step="0.001" placeholder="Entrez votre domicile" value="{{$domicile}}" name="domicile" />
                </x-form-group>
            </div>
            
        </div>

        <div>
            <h5 class="mb-2 mt-2 fw-bold text-primary">{{__('demande adresse')}}</h5>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <x-form-group label="Ville " class="mb-3 text-primary">
                    <input class="form-control" type="text" step="0.001" placeholder="Entrez la ville" value="{{$ville}}" name="ville" />
                </x-form-group>
            </div>

            <div class="col-lg-4">
                <x-form-group label="Lieu " class="mb-3 text-primary">
                    <input class="form-control" type="text" step="0.001" placeholder="Entrez votre lieu de résidence" value="{{$lieu}}" name="lieu" />
                </x-form-group>
            </div>

            <div class="col-lg-4">
                <x-form-group label="Numéro de téléphone" class="mb-3 text-primary">
                    <input class="form-control" type="text" step="0.001" placeholder="Entrez votre numéro de téléphone" value="{{$tel}}" name="tel" />
                </x-form-group>
            </div>
            
        </div>

        <div class="row">
            <div class="col-lg-4">
                <x-form-group label="Courriel professionnel " class="mb-3 text-primary">
                    <input class="form-control" type="text" step="0.001" placeholder="Entrez votre courriel professionnel " value="{{$courriel}}" name="courriel" />
                </x-form-group>
            </div>

            <div class="col-lg-4">
                <x-form-group label="Fax professionnel" class="mb-3 text-primary">
                    <input class="form-control" type="text" step="0.001" placeholder="Entrez votre fax professionnel" value="{{$fax}}" name="fax" />
                </x-form-group>
            </div>

            <div class="col-lg-4">
                <x-form-group label="Code postal" class="mb-3 text-primary">
                    <input class="form-control" type="text" step="0.001" placeholder="Entrez votre code postal" value="{{$code_postal}}" name="code_postal"/>
                </x-form-group>
            </div>
            
        </div>

        <div class="col-lg-12">
            <x-form-group label="Email" class="mb-3 text-primary">
                <input class="form-control" type="email" step="0.001" placeholder="Entrez votre email" value="{{$email}}" name="email" />
            </x-form-group>
        </div>

        <x-form-group label="Objet principal de l’entreprise" class="mb-5 text-primary">
            <textarea name="objet" class="form-control" cols="20" rows="5" placeholder="Entrer l'objet principal de l’entreprise"> {{$objet}}</textarea>
        </x-form-group>

        <div>
            <h3 class="mb-2 mt-4 fw-bold text-primary">{{__('demande status')}}</h3>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h6 class="mb-2 fw-bold text-primary">{{__('demande status1')}}</h6>
            </div>

            <div class="col-lg-12">
                <x-form-group label="Fonction occupé dans l'entreprise " class="mb-3 text-primary">
                    <input class="form-control" type="text" step="0.001" value="{{$fonction_1}}" placeholder="Entrez la fonction occupé" name="fonction_1" />
                </x-form-group>
            </div>

            <div class="col-lg-4">
                <x-form-group label="Courriel professionnel " class="mb-3 text-primary">
                    <input class="form-control" type="text" step="0.001" value="{{$courriel1}}" placeholder="Entrez votre courriel professionnel " name="courriel1" />
                </x-form-group>
            </div>

            <div class="col-lg-4">
                <x-form-group label="Fax professionnel" class="mb-3 text-primary">
                    <input class="form-control" type="text" step="0.001" value="{{$fax1}}" placeholder="Entrez votre fax professionnel" name="fax1" />
                </x-form-group>
            </div>

            <div class="col-lg-4">
                <x-form-group label="Code postal" class="mb-3 text-primary">
                    <input class="form-control" type="text" step="0.001" value="{{$code_postal1}}" placeholder="Entrez votre code postal" name="code_postal1"/>
                </x-form-group>
            </div>
            
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h6 class="mb-2 fw-bold text-primary">{{__('demande status2')}}</h6>
            </div>

            <div class="col-lg-12">
                <x-form-group label="Fonction occupé dans l'entreprise " class="mb-3 text-primary">
                    <input class="form-control" type="text" step="0.001" value="{{$fonction_2}}" placeholder="Entrez la fonction occupé" name="fonction_2" />
                </x-form-group>
            </div>

            <div class="col-lg-4">
                <x-form-group label="Courriel professionnel " class="mb-3 text-primary">
                    <input class="form-control" type="text" step="0.001" value="{{$courriel2}}" placeholder="Entrez votre courriel professionnel " name="courriel2" />
                </x-form-group>
            </div>

            <div class="col-lg-4">
                <x-form-group label="Fax professionnel" class="mb-3 text-primary">
                    <input class="form-control" type="text" step="0.001" value="{{$fax2}}" placeholder="Entrez votre fax professionnel" name="fax2" />
                </x-form-group>
            </div>

            <div class="col-lg-4">
                <x-form-group label="Code postal" class="mb-3 text-primary">
                    <input class="form-control" type="text" step="0.001" value="{{$code_postal2}}" placeholder="Entrez votre code postal" name="code_postal2"/>
                </x-form-group>
            </div>
            
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h6 class="mb-2 fw-bold text-primary">{{__('demande status3')}}</h6>
            </div>

            <div class="col-lg-12">
                <x-form-group label="Fonction occupé dans l'entreprise " class="mb-3 text-primary">
                    <input class="form-control" type="text" step="0.001" value="{{$fonction_3}}" placeholder="Entrez la fonction occupé" name="fonction_3" />
                </x-form-group>
            </div>

            <div class="col-lg-4">
                <x-form-group label="Courriel professionnel " class="mb-3 text-primary">
                    <input class="form-control" type="text" step="0.001" value="{{$courriel3}}" placeholder="Entrez votre courriel professionnel " name="courriel3" />
                </x-form-group>
            </div>

            <div class="col-lg-4">
                <x-form-group label="Fax professionnel" class="mb-3 text-primary">
                    <input class="form-control" type="text" step="0.001" value="{{$fax3}}" placeholder="Entrez votre fax professionnel" name="fax3" />
                </x-form-group>
            </div>

            <div class="col-lg-4">
                <x-form-group label="Code postal" class="mb-3 text-primary">
                    <input class="form-control" type="text" step="0.001" value="{{$code_postal3}}" placeholder="Entrez votre code postal" name="code_postal3"/>
                </x-form-group>
            </div>
            
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h6 class="mb-2 fw-bold text-primary">{{__('demande status4')}}</h6>
            </div>

            <div class="col-lg-12">
                <x-form-group label="Fonction occupé dans l'entreprise " class="mb-3 text-primary">
                    <input class="form-control" type="text" step="0.001" value="{{$fonction_4}}" placeholder="Entrez la fonction occupé" name="fonction_4" />
                </x-form-group>
            </div>

            <div class="col-lg-4">
                <x-form-group label="Courriel professionnel " class="mb-3 text-primary">
                    <input class="form-control" type="text" step="0.001" value="{{$courriel4}}" placeholder="Entrez votre courriel professionnel " name="courriel4" />
                </x-form-group>
            </div>

            <div class="col-lg-4">
                <x-form-group label="Fax professionnel" class="mb-3 text-primary">
                    <input class="form-control" type="text" step="0.001" value="{{$fax4}}" placeholder="Entrez votre fax professionnel" name="fax4" />
                </x-form-group>
            </div>

            <div class="col-lg-4">
                <x-form-group label="Code postal" class="mb-3 text-primary">
                    <input class="form-control" type="text" step="0.001" value="{{$code_postal4}}" placeholder="Entrez votre code postal" name="code_postal4"/>
                </x-form-group>
            </div>
            
        </div>

        <!-- test -->

        <div class="row">
            <div class="col-lg-12">
                <x-form-group label="Indications des périmètres des autorisations, des licences ou des concessions demandées" class="mb-3 text-primary">
                    <input class="form-control" type="number" placeholder="en m²" value="{{$perimetre}}" name="perimetre" />
                    <small class="text-danger d-none" id="msg-err-email">{{__("register email-error")}}</small>
                </x-form-group>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <x-form-group label="Nature de l'activité envisagée" class="mb-3 text-primary">
                    <input class="form-control" type="number" value="{{$libelle_activite}}" />
                    <small class="text-danger d-none" id="msg-err-email">{{__("register email-error")}}</small>
                </x-form-group>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <x-form-group label="Lieu d'implantation des ouvrages " class="mb-3 text-primary">
                    <input class="form-control" type="text" value="{{$lieu_implementation}}" placeholder="Entrer le lieu d'implantation des ouvrages" name="lieu_implementation" />
                    <small class="text-danger d-none" id="msg-err-email">{{__("register email-error")}}</small>
                </x-form-group>
            </div>
        </div>      

        {{-- <div class="col-lg-12">
            <x-form-group label="Durée probable des La durée de la concession, de la licence ou de l'autorisation demandée" class="mb-3 text-primary">
                <input class="form-control" type="text" step="0.001" value="{{$raison_social}}" placeholder="Entrez la fonction occupé" name="fonction_2" />
            </x-form-group>
        </div>

        <div class="col-lg-12">
            <x-form-group label="Durée probable des travaux" class="mb-3 text-primary">
                <input class="form-control" type="text" step="0.001" value="{{$raison_social}}" placeholder="Entrez la fonction occupé" name="fonction_2" />
            </x-form-group>
        </div> --}}

    </div>
</body>
</html>