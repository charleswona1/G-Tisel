<x-home title="Textes juridique">
    <div class="p-5 bg-white rounded">
        <h2 class="text-center fw-bold"><i class="fas fa-gavel me-2"></i> {{__('navbar juridic')}}</h2>
    </div>
    
    <div class="p-4 bg-white mt-3">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">{{__('navbar loi')}}</button>
              <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">{{__('navbar decret')}}</button>
              <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">{{__('navbar arrete')}}</button>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="card mt-4">
                    <h5 class="card-header bg-primary text-white p-4">LOI N° 2011/022 DU 14 DECEMBRE 2011
                        REGISSANT LE SECTEUR DE L'ELECTRICITE AU CAMEROUN</h5>
                    <div class="card-body">
                        
                        <h5 class="card-title mb-4">L'Assemblée Nationale a délibéré et adopté,
                            Le Président de la République promulgue la loi dont la teneur suit:</h5>
                        <p class="card-text mb-4">TITRE I : DISPOSITIONS GENERALES</p>
                        <p>ARTICLE 1er :- (1) La présente loi régit le secteur de l'électricité en vue de sa modernisation 
                            et de son développement. 
                            (2) Elle s'applique aux activités de production à partir de toute source primaire ou secondaire 
                            d'énergie, de transport, de distribution, de fourniture, d'importation, d'exportation et de vente 
                            de l'électricité, réalisées par toute personne physique ou morale sur le territoire camerounais. </p>
                        <a href="{{route('download',['fichier'=>'loi__regissant_le_secteur_de_lelectricite_au_cameroun.pdf'])}}" class="btn btn-primary">Télécharger la suite</a>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="card mt-4">
                    <h5 class="card-header bg-primary text-white p-4">decret 2013_ portant organisation et fonctionnement de l'ARSEL</h5>
                    <div class="card-body">
                        
                        <h5 class="card-title mb-4">DECRET</h5>
                        <p class="card-text mb-4">TITRE I : DISPOSITIONS GENERALES</p>
                        <p>ARTICLE 1:_ (1) Le présent décret porte organisation et fonctionnement de
                            l'Agence de Régulation du Secteur de l'Electricité, en abrégé « ARSEL », ci-après
                            désignée « l'Agence».
                            (2) L'Agence est un établissement public administratif doté de la
                            personnalité juridique et de l'autonomie financière.</p>
                        <a href="{{route('download',['fichier'=>'decret 2013_ portant organisation et fonctionnement de l\'ARSEL.pdf'])}}" class="btn btn-primary">Télécharger la suite</a>
                    </div>
                </div>

                <div class="card mt-4">
                    <h5 class="card-header bg-primary text-white p-4">decret d'application loi electritie 2012</h5>
                    <div class="card-body">
                        
                        <h5 class="card-title mb-4">Transmission d'un décret.</h5>
                        <p class="card-text mb-4"></p>
                        <p>J'ai l'honneur de vous faire tenir ci-joint, pour information, copie du décret
                            n02012/2806/PM du 24 septembre 2012 portant application de certaines
                            dispositions de la loi n02011j022 du 14 décembre 2011 régissant le secteur de l'électricité,
                            signé par le Premier Ministre, Chef du Gouvernement.</p>
                        <a href="{{route('download',['fichier'=>'decret_dapplication_loi_electritie_2012.pdf'])}}" class="btn btn-primary">Télécharger la suite</a>
                    </div>
                </div>

                <div class="card mt-4">
                    <h5 class="card-header bg-primary text-white p-4">decret 30-juin-2000 du secteur de l'electricite</h5>
                    <div class="card-body">
                        
                        <h5 class="card-title mb-4">Decret:</h5>
                        <p class="card-text mb-4">TITRE I: DES DISPOSITIONS GENERALES</p>
                        <p>Art. 1er.- (1) Le présent décret porte organisation des activités du secteur de l’électricité et 
                            fixe les modalités d’octroi, de renouvellement, de révision, de suspension et de retrait des 
                            concessions, des licences et des autorisations prévues par la loi n° 98/022 du 24 décembre 
                            1998 régissant le secteur de l’électricité. </p>
                        <a href="{{route('download',['fichier'=>'decret-30-juin-2000-secteur-electricite.pdf'])}}" class="btn btn-primary">Télécharger la suite</a>
                    </div>
                </div>

                <div class="card mt-4">
                    <h5 class="card-header bg-primary text-white p-4">Décret Fonds de développement de l'électricité</h5>
                    <div class="card-body">
                        
                        <h5 class="card-title mb-4">Decret.</h5>
                        <p class="card-text mb-4"> CHAPITRE 1: DES DISPOSITIONS GENERALES</p>
                        <p>ARTICLE 1:__ Le présent décret porte création, organisation et fonctionnement du Fonds 
                            de Développement du Secteur de !'Electricité, en abrégé «FDSE», ci-après désigné « le 
                            Fonds».  </p>
                        <a href="{{route('download',['fichier'=>'Décret-Fonds-de-développement-de-lélectricité.pdf'])}}" class="btn btn-primary">Télécharger la suite</a>
                    </div>
                </div>

                <div class="card mt-4">
                    <h5 class="card-header bg-primary text-white p-4">APPLICATION DE CERTAINES DISPOSITIONS DE LA LOI 
                        N°2011/022 DU 14 DECEMBRE 2011 REGISSANT LE SECTEUR DE 
                        L’ELECTRICITE AU CAMEROUN</h5>
                    <div class="card-body">
                        
                        <h5 class="card-title mb-4">Le Premier ministre, chef du gouvernement décrète</h5>
                        <p class="card-text mb-4"> CHAPITRE 1er
                            DISPOSITIONS GENERALES </p>
                        <p>ARTICLE 1er : Le présent décret porte application de certaines dispositions de la loi 
                            n° 2011/022 du 14 décembre 2011 régissant le secteur de l’électricité au Cameroun.  </p>
                        <a href="{{route('download',['fichier'=>'decret-n2012-2806-pm.pdf'])}}" class="btn btn-primary">Télécharger la suite</a>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <div class="card mt-4">
                    <h5 class="card-header bg-primary text-white p-4">Arrete code de marche</h5>
                    <div class="card-body">
                        
                        <h5 class="card-title mb-4">Le Premier ministre, chef du gouvernement décrète</h5>
                        <p class="card-text mb-4"> ARRETE </p>
                        <p>Article 1er_Le présent arrêté porte adoption et application du code de Marché de
                            l'électricité au Cameroun, conformément aux dispositions des articles 41 alinéa 2 et 52
                            alinéa 2 du décret n" 2012/2805 du 24 septembre 2012 portant application de certaines
                            dispositions de la loi n" 2011/022 du 14 décembre 20 Il régissant le secteur de
                            l'électricité au Cameroun.
                        </p>
                        <a href="{{route('download',['fichier'=>'arrete_code_de_marche.pdf'])}}" class="btn btn-primary">Télécharger la suite</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-home>