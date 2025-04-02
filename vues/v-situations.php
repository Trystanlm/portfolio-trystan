<div class="container mt-4">
    <div class="row">
        <h1 class="text-center mb-5 text-gradient">Situations professionnel</h1>
        <h2 class="mb-5 text-gradient">Première année</h2>
        <div class="col-3">
            <div class="card d-flex align-items-center justify-content-center" style="width: 18rem; height: 10rem;">
                <img src="./assets/img/logo_biodice.png" class="card-img-top" alt="logo biodicé">
                <div class="card-overlay">
                    <a href="index.php?uc=sp1" class="btn btn-primary">Plus d'infos</a>
                </div>
            </div>
            <p>Refonte du site Biodicé</p>
        </div>
        <div class="col-3">
            <div class="card d-flex align-items-center justify-content-center" style="width: 18rem; height: 10rem;">
                <img src="./assets/img/logo_barec.png" class="card-img-top" alt="logo barec">
                <div class="card-overlay">
                    <a href="index.php?uc=sp2" class="btn btn-primary">Plus d'infos</a>
                </div>
            </div>
            <p>Gestion MSL - Barec</p>
        </div>
    </div>
    <hr class="border border-1 opacity-100">
    <div class="row">
        <h2 class="mb-5 text-gradient">Deuxième année</h2>
        <div class="col-3">
            <div class="card d-flex align-items-center justify-content-center" style="width: 18rem; height: 10rem;">
                <img src="./assets/img/ccdv.png" class="card-img-top" alt="logo ccdv">
                <div class="card-overlay">
                    <a href="index.php?uc=sp3" class="btn btn-primary">Plus d'infos</a>
                </div>
            </div>
            <p>Concours des vins</p>
        </div>
        <div class="col-3">
            <div class="card d-flex align-items-center justify-content-center" style="width: 18rem; height: 10rem;">
                <img src="./assets/img/seg.png" class="card-img-top" alt="logo seg">
                <div class="card-overlay">
                    <a href="index.php?uc=sp4" class="btn btn-primary">Plus d'infos</a>
                </div>
            </div>
            <p>Gestion des eaux - SEG</p>
        </div>
    </div>
</div>

<style>
    p {
        margin-top: 7px;
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