<x-espace-public title="Demande de titre">
    <div class="d-flex justify-content-center align-items-center">
        <div class="col-lg-10 col-md-12">
            <div class="card p-5">
                <h1 class="mb-5 fw-bold text-primary">{{__('demande title')}}</h1>
                {{ html()->form('POST', URL::full())->acceptsFiles()->open() }}

                    <div class="bs-stepper">
                        <div class="bs-stepper-header" role="tablist">
                            <!-- your steps here -->
                            <div class="step" data-target="#admin-info">
                                <button type="button" class="step-trigger" role="tab" aria-controls="personnel-part" id="personnel-part-trigger">
                                <span class="bs-stepper-circle">1</span>
                                <span class="bs-stepper-label">{{__('demande steppe1')}}</span>
                                </button>
                            </div>
                            <div class="line"></div>
                            <div class="step" data-target="#techniq-info">
                                <button type="button" class="step-trigger" role="tab" aria-controls="account-part" id="account-part-trigger">
                                <span class="bs-stepper-circle">2</span>
                                <span class="bs-stepper-label">{{__('demande steppe2')}}</span>
                                </button>
                            </div>
                        </div>
                            <div class="bs-stepper-content py-5">
                                <!-- your steps content here -->
                                     <div id="admin-info" class="content" role="tabpanel" aria-labelledby="personnel-part-trigger">
                                        <div>
                                            <h3 class="mb-2 fw-bold text-primary">{{__('demande subtitle1')}}</h3>
                                        </div>
                                    
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <x-form-group label="Nom" class="mb-3 text-primary">
                                                    <input class="form-control" type="text" placeholder="Entrez le nom" name="name" />
                                                </x-form-group>
                                            </div>
        
                                            <div class="col-lg-6">
                                                <x-form-group label="Prénom" class="mb-3 text-primary">
                                                    <input class="form-control" type="text" placeholder="Entrez le prénom" name="first_name" />
                                                </x-form-group>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <x-form-group label="Dénomination ou la raison sociale " class="mb-3 text-primary">
                                                    <input class="form-control" type="text" step="0.001" placeholder="Entrez la dénomination ou la raison sociale" name="raison_social" />
                                                </x-form-group>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-lg-4">
                                                <x-form-group label="Nationalité" class="mb-3 text-primary">
                                                    <input class="form-control" type="text" step="0.001" placeholder="Entrez la nationnalité" name="nationalite" />
                                                </x-form-group>
                                            </div>
        
                                            <div class="col-lg-4">
                                                <x-form-group label="Domicile" class="mb-3 text-primary">
                                                    <input class="form-control" type="text" step="0.001" placeholder="Entrez votre domicile" name="domicile" />
                                                </x-form-group>
                                            </div>
                                            
                                        </div>
        
                                        <div>
                                            <h5 class="mb-2 mt-2 fw-bold text-primary">{{__('demande adresse')}}</h5>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <x-form-group label="Ville " class="mb-3 text-primary">
                                                    <input class="form-control" type="text" step="0.001" placeholder="Entrez la ville" name="ville" />
                                                </x-form-group>
                                            </div>
        
                                            <div class="col-lg-4">
                                                <x-form-group label="Lieu " class="mb-3 text-primary">
                                                    <input class="form-control" type="text" step="0.001" placeholder="Entrez votre lieu de résidence" name="lieu" />
                                                </x-form-group>
                                            </div>
        
                                            <div class="col-lg-4">
                                                <x-form-group label="Numéro de téléphone" class="mb-3 text-primary">
                                                    <input class="form-control" type="text" step="0.001" placeholder="Entrez votre numéro de téléphone" name="tel" />
                                                </x-form-group>
                                            </div>
                                            
                                        </div>
        
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <x-form-group label="Courriel professionnel " class="mb-3 text-primary">
                                                    <input class="form-control" type="text" step="0.001" placeholder="Entrez votre courriel professionnel " name="courriel" />
                                                </x-form-group>
                                            </div>
        
                                            <div class="col-lg-4">
                                                <x-form-group label="Fax professionnel" class="mb-3 text-primary">
                                                    <input class="form-control" type="text" step="0.001" placeholder="Entrez votre fax professionnel" name="fax" />
                                                </x-form-group>
                                            </div>
        
                                            <div class="col-lg-4">
                                                <x-form-group label="Code postal" class="mb-3 text-primary">
                                                    <input class="form-control" type="text" step="0.001" placeholder="Entrez votre code postal" name="code_postal"/>
                                                </x-form-group>
                                            </div>
                                            
                                        </div>
        
                                        <div class="col-lg-12">
                                            <x-form-group label="Email" class="mb-3 text-primary">
                                                <input class="form-control" type="email" step="0.001" placeholder="Entrez votre email" name="email" />
                                            </x-form-group>
                                        </div>
        
                                        <x-form-group label="Objet principal de l’entreprise" class="mb-5 text-primary">
                                            <textarea name="objet" class="form-control" cols="20" rows="5" placeholder="Entrer l'objet principal de l’entreprise"></textarea>
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
                                                    <input class="form-control" type="text" step="0.001" placeholder="Entrez la fonction occupé" name="fonction_1" />
                                                </x-form-group>
                                            </div>
        
                                            <div class="col-lg-4">
                                                <x-form-group label="Courriel professionnel " class="mb-3 text-primary">
                                                    <input class="form-control" type="text" step="0.001" placeholder="Entrez votre courriel professionnel " name="courriel1" />
                                                </x-form-group>
                                            </div>
        
                                            <div class="col-lg-4">
                                                <x-form-group label="Fax professionnel" class="mb-3 text-primary">
                                                    <input class="form-control" type="text" step="0.001" placeholder="Entrez votre fax professionnel" name="fax1" />
                                                </x-form-group>
                                            </div>
        
                                            <div class="col-lg-4">
                                                <x-form-group label="Code postal" class="mb-3 text-primary">
                                                    <input class="form-control" type="text" step="0.001" placeholder="Entrez votre code postal" name="code_postal1"/>
                                                </x-form-group>
                                            </div>
                                            
                                        </div>
        
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h6 class="mb-2 fw-bold text-primary">{{__('demande status2')}}</h6>
                                            </div>
        
                                            <div class="col-lg-12">
                                                <x-form-group label="Fonction occupé dans l'entreprise " class="mb-3 text-primary">
                                                    <input class="form-control" type="text" step="0.001" placeholder="Entrez la fonction occupé" name="fonction_2" />
                                                </x-form-group>
                                            </div>
        
                                            <div class="col-lg-4">
                                                <x-form-group label="Courriel professionnel " class="mb-3 text-primary">
                                                    <input class="form-control" type="text" step="0.001" placeholder="Entrez votre courriel professionnel " name="courriel2" />
                                                </x-form-group>
                                            </div>
        
                                            <div class="col-lg-4">
                                                <x-form-group label="Fax professionnel" class="mb-3 text-primary">
                                                    <input class="form-control" type="text" step="0.001" placeholder="Entrez votre fax professionnel" name="fax2" />
                                                </x-form-group>
                                            </div>
        
                                            <div class="col-lg-4">
                                                <x-form-group label="Code postal" class="mb-3 text-primary">
                                                    <input class="form-control" type="text" step="0.001" placeholder="Entrez votre code postal" name="code_postal2"/>
                                                </x-form-group>
                                            </div>
                                            
                                        </div>
        
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h6 class="mb-2 fw-bold text-primary">{{__('demande status3')}}</h6>
                                            </div>
        
                                            <div class="col-lg-12">
                                                <x-form-group label="Fonction occupé dans l'entreprise " class="mb-3 text-primary">
                                                    <input class="form-control" type="text" step="0.001" placeholder="Entrez la fonction occupé" name="fonction_3" />
                                                </x-form-group>
                                            </div>
        
                                            <div class="col-lg-4">
                                                <x-form-group label="Courriel professionnel " class="mb-3 text-primary">
                                                    <input class="form-control" type="text" step="0.001" placeholder="Entrez votre courriel professionnel " name="courriel3" />
                                                </x-form-group>
                                            </div>
        
                                            <div class="col-lg-4">
                                                <x-form-group label="Fax professionnel" class="mb-3 text-primary">
                                                    <input class="form-control" type="text" step="0.001" placeholder="Entrez votre fax professionnel" name="fax3" />
                                                </x-form-group>
                                            </div>
        
                                            <div class="col-lg-4">
                                                <x-form-group label="Code postal" class="mb-3 text-primary">
                                                    <input class="form-control" type="text" step="0.001" placeholder="Entrez votre code postal" name="code_postal3"/>
                                                </x-form-group>
                                            </div>
                                            
                                        </div>
        
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h6 class="mb-2 fw-bold text-primary">{{__('demande status4')}}</h6>
                                            </div>
        
                                            <div class="col-lg-12">
                                                <x-form-group label="Fonction occupé dans l'entreprise " class="mb-3 text-primary">
                                                    <input class="form-control" type="text" step="0.001" placeholder="Entrez la fonction occupé" name="fonction_4" />
                                                </x-form-group>
                                            </div>
        
                                            <div class="col-lg-4">
                                                <x-form-group label="Courriel professionnel " class="mb-3 text-primary">
                                                    <input class="form-control" type="text" step="0.001" placeholder="Entrez votre courriel professionnel " name="courriel4" />
                                                </x-form-group>
                                            </div>
        
                                            <div class="col-lg-4">
                                                <x-form-group label="Fax professionnel" class="mb-3 text-primary">
                                                    <input class="form-control" type="text" step="0.001" placeholder="Entrez votre fax professionnel" name="fax4" />
                                                </x-form-group>
                                            </div>
        
                                            <div class="col-lg-4">
                                                <x-form-group label="Code postal" class="mb-3 text-primary">
                                                    <input class="form-control" type="text" step="0.001" placeholder="Entrez votre code postal" name="code_postal4"/>
                                                </x-form-group>
                                            </div>
                                            
                                        </div>
        
                                        <div class="row">
                                            <div>
                                                <h3 class="mb-2 mt-4 fw-bold text-primary">{{__('demande document')}}</h3>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <x-form-group label="Document justifiant votre capacité technique et votre expérience" class="mb-3 text-primary">
                                                    <input class="form-control" name="pdf1" type="file" accept=".pdf">
                                                </x-form-group>
                                            </div>
        
                                            <div class="col-lg-12">
                                                <x-form-group label="Document justifiant la capacité financière du 
                                                demandeur (les comptes d’exploitation, Les bilans des trois (3)
                                                 derniers exercices et la liste des principaux actionnaires s’il
                                                  y’a lieu, un reçu de versement des frais d’instruction du dossier
                                                   délivré par l’Agence)" class="mb-3 text-primary">
                                                    <input class="form-control" name="pdf2" type="file" accept=".pdf" >
                                                </x-form-group>
                                            </div>
        
                                            <div class="col-lg-12">
                                                <x-form-group label="Les autorisations nécessaires délivrées par les autorités compétentes au
                                                 cas où les travaux de construction des ouvrages envisagés empiètent ou traversent des zones
                                                  protégées" class="mb-3 text-primary">
                                                    <input class="form-control" name="pdf3" type="file" accept=".pdf">
                                                </x-form-group>
                                            </div>
                                        </div>
                                        
                                        <button type="button" id="next" class="btn btn-primary btn-sm">{{__('register next')}}</button>
                                        
                                       
                                    </div>
                                    <div id="techniq-info" class="content" role="tabpanel" aria-labelledby="account-part-trigger">
                                        <div class="row">
                                             <div class="col-lg-12">
                                                 <x-form-group label="Indications des périmètres des autorisations, des licences ou des concessions demandées" class="mb-3 text-primary">
                                                     <input class="form-control" type="number" placeholder="en m²" name="perimetre" />
                                                     <small class="text-danger d-none" id="msg-err-email">{{__("register email-error")}}</small>
                                                 </x-form-group>
                                             </div>
                                         </div>
         
                                         <div class="row">
                                             <div class="col-lg-6">
                                                 <x-form-group label="Nature de l'activité envisagée" class="mb-3 text-primary">
                                                     <select name="activite_id" class="form-select">
                                                         <option value="" selected>Selectinner la source d'energie</option>
                                                         @foreach ($site->Regime->Activites as $activite)
                                                            <option value={{$activite->id}} selected>{{$activite->libelle_activite}}</option>
                                                         @endforeach
                                                         
                                                     </select>
                                                 </x-form-group>
                                             </div>
                                         </div>
         
                                         <div class="row">
                                             <div class="col-lg-12">
                                                 <x-form-group label="Lieu d'implantation des ouvrages " class="mb-3 text-primary">
                                                     <input class="form-control" type="text" placeholder="Entrer le lieu d'implantation des ouvrages" name="lieu_implementation" />
                                                     <small class="text-danger d-none" id="msg-err-email">{{__("register email-error")}}</small>
                                                 </x-form-group>
                                             </div>
                                         </div>
         
                                         <div class="col-lg-12">
                                             <x-form-group label="Document justifiant la capacité financière du 
                                             demandeur (les comptes d’exploitation, Les bilans des trois (3)
                                                 derniers exercices et la liste des principaux actionnaires s’il
                                                 y’a lieu, un reçu de versement des frais d’instruction du dossier
                                                 délivré par l’Agence)" class="mb-3 text-primary">
                                                 <input class="form-control" name="pdf4" accept=".pdf" type="file">
                                             </x-form-group>
                                         </div>
         
                                         <div class="col-lg-12">
                                             <x-form-group label="La description des ouvrages à réaliser (indiquez les caractéristiques techniques des installations :
                                              les sources d'énergie primaires utilisées les puissances à fournir ou à acheminer) ">
                                                 <input class="form-control" name="pdf5" accept=".pdf" type="file">
                                             </x-form-group>
                                         </div>
         
                                         <div class="col-lg-12">
                                             <x-form-group label="Une attestation de conformité des installations électriques aux standards homologués et aux normes de sécurité">
                                                 <input class="form-control" name="pdf6" accept=".pdf" type="file">
                                             </x-form-group>
                                         </div>
         
                                         <div class="col-lg-12">
                                             <x-form-group label="Une étude d'impact sur l'environnement réalisé conformément aux prescriptions en vigueur" class="mb-3 text-primary">
                                                 <input class="form-control" name="pdf7" accept="image/*,.pdf" type="file">
                                             </x-form-group>
                                         </div>
         
                                     
                                         <div class="col-lg-12">
                                             <x-form-group label="Un plan de situation à l'échelle 1/20 000ème ">
                                                 <input class="form-control" name="pdf8" accept="image/*,.pdf" type="file">
                                             </x-form-group>
                                         </div>
         
                                         <div class="col-lg-12">
                                             <x-form-group label="Une carte à l'échelle 1/5000imè indiquant les limites géographiques du périmètre de l'activité envisagée " class="mb-3 text-primary">
                                                 <input class="form-control" accept="image/*,.pdf" name="pdf9" type="file">
                                             </x-form-group>
                                         </div>
         
                                         <div class="col-lg-12">
                                             <x-form-group label="Un plan sommaire des lieux et des ouvrages projetés sur lequel sont indiquées les limites géographiques des périmètres occupés par les ouvrages et leurs annexes " class="mb-3 text-primary">
                                                 <input class="form-control" name="pdf10" accept="image/*,.pdf" type="file">
                                             </x-form-group>
                                         </div>
         
         
                                         <div class="col-lg-12">
                                             <x-form-group label="Un plan d'ensemble des ouvrages " class="mb-3 text-primary">
                                                 <input class="form-control" accept=".pdf" name="pdf11" type="file">
                                             </x-form-group>
                                         </div>
         
                                         <div class="col-lg-12">
                                             <x-form-group label="Une étude économique et financière faisant ressortir entre autres, le montant des investissements, le compte d’exploitation prévisionnel de l'activité envisagée" class="mb-3 text-primary">
                                                 <input class="form-control" accept=".pdf" name="pdf12" type="file" >
                                             </x-form-group>
                                         </div>
                                         
                                         <x-form-group label="Les objectifs à atteindre en ce qui concerne notamment le nombre des consommateurs et la qualité de service" class="mb-5 text-primary">
                                             <textarea name="objet" class="form-control" cols="20" rows="5" placeholder="Entrer l'objet principal de l’entreprise"></textarea>
                                         </x-form-group>
         
                                         <div class="col-lg-12">
                                             <x-form-group label="Une étude tarifaire faisant ressortir les différentes catégories tarifaires retenues, ainsi que les tarifs appliqués et les faunules d'ajustement desdits tarifs" class="mb-3 text-primary">
                                                 <input class="form-control" accept=".pdf" name="pdf13" type="file" >
                                             </x-form-group>
                                         </div>
         
                                         <div class="col-lg-12">
                                             <x-form-group label="Un projet de contrat et de cahier des charges de concession de licence ou d'autorisation conforme aux cahiers des charges- types élaborés par l’Agence et approuvés par l’Administration chargée de l'électricité" class="mb-3 text-primary">
                                                 <input class="form-control" accept=".pdf" name="pdf14" type="file" >
                                             </x-form-group>
                                         </div>
         
                                         <div class="col-lg-12">
                                             <x-form-group label="Durée probable des La durée de la concession, de la licence ou de l'autorisation demandée" class="mb-3 text-primary">
                                                 <input class="form-control" type="text" step="0.001" placeholder="Entrez la fonction occupé" name="fonction_2" />
                                             </x-form-group>
                                         </div>
         
                                         <div class="col-lg-12">
                                             <x-form-group label="Durée probable des travaux" class="mb-3 text-primary">
                                                 <input class="form-control" type="text" step="0.001" placeholder="Entrez la fonction occupé" name="fonction_2" />
                                             </x-form-group>
                                         </div>
         
                                         <div class="col-lg-12">
                                             <x-form-group label="Les accords éventuels entre le demandeur et les collectivités territoriales décentralisées ou les populations riveraines sur l'indemnisation des droits aliénés" class="mb-3 text-primary">
                                                 <input class="form-control" accept=".pdf" name="pdf15" type="file" >
                                             </x-form-group>
                                         </div> 
         
                                        
         
                                         <button type="button" id="prev2" class="btn btn-primary btn-sm">{{__('register previous')}}</button>
                                         <button type="submit" class="btn btn-primary btn-sm">Save</button>
                                     </div>    
                            </div>
                        </div>
                        
                    </div>
                
                    <x-errors />
                {{ html()->form()->close() }}

            </div>
        </div>
    </div>
    @push('javascripts')
        <script>
            $(document).ready(function () {
                var stepper = new Stepper($('.bs-stepper')[0],
                    {
                        linear: true,
                        animation: true,
                        selectors: {
                            steps: '.step',
                            trigger: '.step-trigger',
                            stepper: '.bs-stepper'
                        }
                    }
                )
                var steppe1Err = [];
                var steppe2Err = [];
                $('#next').click(function(){
                    steppe1Err = validatePersonnalInfo();
                    if (steppe1Err.length == 0) {
                        stepper.next();
                    }
                });
                
                $('#next2').click(function(){
                    steppe2Err = validateAccountInfo();
                    if (steppe2Err.length == 0) {
                        stepper.next();
                    }
                });

                $('#prev,#prev2').click(function(){
                    stepper.previous();
                });

                function validatePersonnalInfo(){
                    var lastName = $('#last-name');
                    var country = $('#country');
                    var city = $('#city');
                    var phone = $('#phone');
                    var codePostale = $('#codePostale');

                    var isValide = [];

                    if (lastName.val() == "") {
                        lastName.css('border','2px solid red');
                        isValide.push(true)
                    }else{
                        lastName.css('border','1px solid #ced4da')
                    }
                    if (country.val() == "") {
                        country.css('border','2px solid red');
                        isValide.push(true)
                    }else{
                        country.css('border','1px solid #ced4da');
                    }
                    if (city.val() == "") {
                        city.css('border','2px solid red');
                        isValide.push(true)
                    }else{
                        city.css('border','1px solid #ced4da');
                    }
                    if (phone.val() == "") {
                        phone.css('border','2px solid red');
                        isValide.push(true)
                    }else{
                        phone.css('border','1px solid #ced4da');
                    }
                    if (codePostale.val() == "" || codePostale.val() < 1) {
                        codePostale.css('border','2px solid red');
                        isValide.push(true)
                    }else{
                        codePostale.css('border','1px solid #ced4da');
                    }

                    return isValide;
                }

                function validateAccountInfo(){
                    var userName = $('#userName');
                    var email = $('#email');
                    var mdp = $('#mdp');
                    var cmdp = $('#cmdp');
                    var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
                   

                    var isValide = [];

                    if (userName.val() == "") {
                        userName.css('border','2px solid red');
                        isValide.push(true)
                    }else{
                        userName.css('border','1px solid #ced4da')
                    }
                    
                    if (email.val() == "" || !pattern.test(email.val())) {
                        isValide.push(true)
                        email.css('border','2px solid red');
                        $('#msg-err-email').removeClass('d-none');
                    }else{
                        email.css('border','1px solid #ced4da');
                        $('#msg-err-email').addClass('d-none');
                    }

                    if (mdp.val() == "" || mdp.val().length < 6) {
                        mdp.css('border','2px solid red');
                        isValide.push(true)
                    }else{
                        mdp.css('border','1px solid #ced4da');
                    }
                    if (cmdp.val() == "" || mdp.val() != cmdp.val()) {
                        cmdp.css('border','2px solid red');
                        $('#msg-err').removeClass('d-none');
                        isValide.push(true)
                    }else{
                        cmdp.css('border','1px solid #ced4da');
                        $('#msg-err').addClass('d-none');
                    }

                    return isValide;
                }
            })
        </script>
    @endpush
</x-espace-public>