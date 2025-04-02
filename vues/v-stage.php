<div class="container">
    <div class="row">
        <h1 class="text-center mb-5 text-gradient">Stages en entreprise </h1>
        <div class="col-3">
            <div class="card d-flex align-items-center justify-content-center" style="width: 18rem; height: 10rem;">
                <img src="./assets/img/logotekin.png" class="card-img-top" alt="logo tekin">
                <div class="card-overlay">
                    <a href="index.php?uc=stage1" class="btn btn-primary">Plus d'infos</a>
                </div>
            </div>
            <p> 1ère année</p>
        </div>
        <div class="col-3">
            <div class="card d-flex align-items-center justify-content-center" style="width: 18rem; height: 10rem;">
                <img src="./assets/img/exaegis.png" class="card-img-top" alt="logo d'attente">
                <div class="card-overlay">
                    <a href="index.php?uc=stage2" class="btn btn-primary">Plus d'infos</a>
                </div>
            </div>
            <p> 2ème année</p>
        </div>
    </div>
    <hr class="border border-1 opacity-100">
    <div class="row">
        <div class="col-3">
            <div class="card d-flex align-items-center justify-content-center" style="width: 18rem; height: 10rem;">
                <img src="./assets/img/comparatif.png" class="card-img-top" alt="logo tekin">
                <div class="card-overlay">
                    <a href="index.php?uc=comparatifstage" class="btn btn-primary">Plus d'infos</a>
                </div>
            </div>
            <p>Comparatif des deux entreprises</p>
        </div>
    </div>
    <hr class="border border-1 opacity-100">
    <div class="container">
        <h4>Compétences acquises</h3>
            <div class="table-responsive">
                <table class="table table-bordered text-white align-middle" style="background-color: transparent; border-color: rgba(255, 255, 255, 0.2);">
                    <thead class="text-white">
                        <tr class="text-center">
                            <th>Entreprise</th>
                            <th colspan="6">TEKIN</th>
                        </tr>
                        <tr class="text-center">
                            <th>Compétences / Réalisation Pro</th>
                            <th>Gérer le patrimoine informatique</th>
                            <th>Répondre aux incidents et aux demandes d'assistance et d'évolution</th>
                            <th>Développer la présence en ligne de l'oganisation</th>
                            <th>Travailler en mode projet</th>
                            <th>Mettre à disposition des utilisateurs un service informatique</th>
                            <th>Organiser son développement professionnel</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </div>
</div>


<style>
    table,
    th,
    td {
        color: white !important;
        background-color: transparent !important;
    }

    td {
        width: 10px;
    }

    h3 {
        color: white;
        margin-bottom: 50px;
        font-weight: bold;
    }

    .row {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 50px;
    }

    .card {
        position: relative;
        cursor: pointer;
        overflow: hidden;
    }

    .card-img-top {
        transition: transform 0.3s, filter 0.3s;
    }

    .card:hover .card-img-top {
        filter: grayscale(100%);
        transform: scale(1.1);
    }

    .card-overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        opacity: 0;
        transition: opacity 0.3s;
    }

    .card:hover .card-overlay {
        opacity: 1;
    }
</style>