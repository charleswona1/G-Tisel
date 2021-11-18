<x-home title="Procédure">
    <div class="p-5 bg-white rounded">
        <h2 class="text-center fw-bold"><i class="fas fa-tasks me-2"></i> {{__('navbar procedure')}}</h2>
    </div>
    
    <div class="p-4 bg-white mt-3">
        <div class="card mt-4">
            <h5 class="card-header bg-primary text-white p-4">1- Procédure d'aquisition des titres</h5>
            <div class="card-body">
                <a href="{{route('download',['fichier'=>'PROCEDURE d\'aquisition des titres.pdf'])}}" ><i class="fas fa-file-pdf text-danger"></i> Télécharger la procedure d'aquisition des titres</a>
            </div>
        </div>

        <div class="card mt-4">
            <h5 class="card-header bg-primary text-white p-4">2- Procedure deTraitement des appels d'offre des études technique</h5>
            <div class="card-body">
                
                <a href="{{route('download',['fichier'=>'Procedure contratuelle et Appel D\'offre.pdf'])}}" ><i class="fas fa-file-pdf text-danger"></i> Télécharger la procedure contratuelle et Appel D'offre</a>
            </div>
        </div>

        <div class="card mt-4">
            <h5 class="card-header bg-primary text-white p-4">3- Procedure de rédaction du cahier de charge des etudes technique</h5>
            <div class="card-body">
                
                <a href="{{route('download',['fichier'=>'Rédaction du cahier des charges des etudes 1.pdf'])}}" ><i class="fas fa-file-pdf text-danger"></i> Télécharger la procedure de rédaction du cahier des charges des etudes 1</a>
                <br>
                <a href="{{route('download',['fichier'=>'Rédaction du cahier des charges des etudes 2.pdf'])}}" ><i class="fas fa-file-pdf text-danger"></i> Télécharger la procedure de rédaction du cahier des charges des etudes 2</a>
            </div>
        </div>

        <div class="card mt-4">
            <h5 class="card-header bg-primary text-white p-4">4- Procedure de Revision du document contractuel</h5>
            <div class="card-body">
                
                <a href="{{route('download',['fichier'=>'Procedure contratuelle 1.pdf'])}}" ><i class="fas fa-file-pdf text-danger"></i> Télécharger la Procedure contratuelle 1</a>
                <br>
                <a href="{{route('download',['fichier'=>'Procedure contratuelle 2.pdf'])}}" ><i class="fas fa-file-pdf text-danger"></i> Télécharger la Procedure contratuelle 2</a>
            </div>
        </div>
    </div>

</x-home>