<x-home title="regime">
    <div class="p-5 bg-white rounded">
        <h2 class="text-center fw-bold"><i class="fas fa-tasks me-2"></i> {{__('navbar regime')}}</h2>
    </div>
    
    <div class="p-4 bg-white mt-3">
        <div class="card mt-4">
            <h5 class="card-header bg-primary text-white p-4">1- REGIME D'AUTORISATION</h5>
            <div class="card-body">
                <a href="{{route('download',['fichier'=>'REGIME D\'AUTORISATION.pdf'])}}" ><i class="fas fa-file-pdf text-danger"></i> Télécharger la fiche</a>
            </div>
        </div>

        <div class="card mt-4">
            <h5 class="card-header bg-primary text-white p-4">2- REGIME DE CONCESSION</h5>
            <div class="card-body">
                
                <a href="{{route('download',['fichier'=>'REGIME DE CONCESSION.pdf'])}}" ><i class="fas fa-file-pdf text-danger"></i> Télécharger la fiche</a>
            </div>
        </div>

        <div class="card mt-4">
            <h5 class="card-header bg-primary text-white p-4">3- REGIME DE DECLARATION</h5>
            <div class="card-body">
                
                <a href="{{route('download',['fichier'=>'REGIME DE DECLARATION.pdf'])}}" > <i class="fas fa-file-pdf text-danger"></i> Télécharger la fiche</a>
                
            </div>
        </div>

        <div class="card mt-4">
            <h5 class="card-header bg-primary text-white p-4">4- REGIME DE LIBERTE</h5>
            <div class="card-body">
                
                <a href="{{route('download',['fichier'=>'REGIME DE LIBERTE.pdf'])}}" ><i class="fas fa-file-pdf text-danger"></i> Télécharger la fiche</a>
               
            </div>
        </div>

        <div class="card mt-4">
            <h5 class="card-header bg-primary text-white p-4">5- REGIME DE LICENCE</h5>
            <div class="card-body">
                
                <a href="{{route('download',['fichier'=>'REGIME DE LICENCE.pdf'])}}" ><i class="fas fa-file-pdf text-danger"></i> Télécharger la fiche</a>
               
            </div>
        </div>
    </div>
</x-home>