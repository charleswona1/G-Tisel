<x-admin title="Liste des sites">
    <div class="card bg-white p-4 mb-3 mt-3">
        <div class="d-flex justify-content-between">
            <h3>Tableau de board</h3>
        </div>
    </div>


    <x-flash-bag></x-flash-bag>
    
    <div class="container-fluid mt-3">
        <h4>Staistique des sites</h4>
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="card mb-4 text-white bg-primary">
                    <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                        <div>
                            <div class="fs-4 fw-semibold">0</div>
                            <div>Nombre de site</div>
                        </div>
                    </div>
                    <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                        <canvas class="chart" id="card-chart1" height="87" width="312"
                            style="display: block; box-sizing: border-box; height: 69.6px; width: 249.6px;"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="card mb-4 text-white bg-info">
                    <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                        <div>
                            <div class="fs-4 fw-semibold">0</div>
                            <div>Sites publiés</div>
                        </div>
                    </div>
                    <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                        <canvas class="chart" id="card-chart2" height="87" width="312"
                            style="display: block; box-sizing: border-box; height: 69.6px; width: 249.6px;"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="card mb-4 text-white bg-warning">
                    <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                        <div>
                            <div class="fs-4 fw-semibold">O</div>
                            <div>Sites non publiés</div>
                        </div>
                    </div>
                    <div class="c-chart-wrapper mt-3" style="height:70px;">
                        <canvas class="chart" id="card-chart3" height="87" width="352"
                            style="display: block; box-sizing: border-box; height: 69.6px; width: 281.6px;"></canvas>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid mt-3">
        <h4>Staistique des Demandes</h4>
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="card mb-4 text-white bg-primary">
                    <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                        <div>
                            <div class="fs-4 fw-semibold">0</div>
                            <div>Nombre de demandes</div>
                        </div>
                    </div>
                    <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                        <canvas class="chart" id="card-chart1" height="87" width="312"
                            style="display: block; box-sizing: border-box; height: 69.6px; width: 249.6px;"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="card mb-4 text-white bg-info">
                    <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                        <div>
                            <div class="fs-4 fw-semibold">0</div>
                            <div>Demandes Traitées</div>
                        </div>
                    </div>
                    <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                        <canvas class="chart" id="card-chart2" height="87" width="312"
                            style="display: block; box-sizing: border-box; height: 69.6px; width: 249.6px;"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="card mb-4 text-white bg-warning">
                    <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                        <div>
                            <div class="fs-4 fw-semibold">O</div>
                            <div>Demandes non traitées</div>
                        </div>
                    </div>
                    <div class="c-chart-wrapper mt-3" style="height:70px;">
                        <canvas class="chart" id="card-chart3" height="87" width="352"
                            style="display: block; box-sizing: border-box; height: 69.6px; width: 281.6px;"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="card mb-4 text-white bg-secondary">
                    <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                        <div>
                            <div class="fs-4 fw-semibold">O</div>
                            <div>Demandes en cours</div>
                        </div>
                    </div>
                    <div class="c-chart-wrapper mt-3" style="height:70px;">
                        <canvas class="chart" id="card-chart3" height="87" width="352"
                            style="display: block; box-sizing: border-box; height: 69.6px; width: 281.6px;"></canvas>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
</x-admin>