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

<h4>Compétences acquises</h3>
    <button class="btn btn-danger mt-2" id="toggle-table" onclick="changement()">Exaegis</button>
    <div class="competence-table-container">
        <table class="competence-table" id="tekin-table">
            <thead>
                <tr>
                    <th class="header-top"><strong>TEKIN</strong></th>
                    <th>Gérer le patrimoine informatique</th>
                    <th>Répondre aux incidents et demandes d’évolution</th>
                    <th>Développer la présence en ligne</th>
                    <th>Travailler en mode projet</th>
                    <th>Mettre à disposition un service</th>
                    <th>Organiser son développement professionnel</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="desc"><strong>TEKIN</strong> – Développement de graphiques pour la gestion de télémétries afin de trouver le Framework le plus performant</td>
                    <td></td>
                    <td class="x">X</td>
                    <td></td>
                    <td class="x">X</td>
                    <td class="x">X</td>
                    <td class="x">X</td>
                </tr>
                <tr>
                    <td class="desc"><strong>TEKIN</strong> – Mise à jour du site en ligne de l’entreprise</td>
                    <td></td>
                    <td class="x">X</td>
                    <td class="x">X</td>
                    <td class="x">X</td>
                    <td></td>
                    <td class="x">X</td>
                </tr>
                <tr>
                    <td class="desc"><strong>TEKIN</strong> – Développement d’une application python pour gérer automatiquement le tri des sauvegardes sur leur cloud Scaleway</td>
                    <td class="x">X</td>
                    <td class="x">X</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="x">X</td>
                </tr>
            </tbody>
        </table>

        <table class="competence-table" id="exaegis-table" hidden="true">
            <thead>
                <tr>
                    <th class="header-top"><strong>Exaegis</strong></th>
                    <th>Gérer le patrimoine informatique</th>
                    <th>Répondre aux incidents et demandes d’évolution</th>
                    <th>Développer la présence en ligne</th>
                    <th>Travailler en mode projet</th>
                    <th>Mettre à disposition un service</th>
                    <th>Organiser son développement professionnel</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="desc"><strong>Exaegis</strong> – Résolution de ticket JIRA</td>
                    <td></td>
                    <td class="x">X</td>
                    <td></td>
                    <td class="x">X</td>
                    <td class="x">X</td>
                    <td class="x">X</td>
                </tr>
                <tr>
                    <td class="desc"><strong>Exaegis</strong> – Développement de code de scraping afin de récupérer des documents administratifs de différentes collectivités de France</td>
                    <td></td>
                    <td class="x">X</td>
                    <td class="x">X</td>
                    <td class="x">X</td>
                    <td class="x">X</td>
                    <td class="x">X</td>
                </tr>
                <tr>
                    <td class="desc"><strong>Exaegis</strong> – Exploitation d’une API permettant de récupérer les données clients d’une entreprise gérée par Exaegis</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="x">X</td>
                    <td class="x">X</td>
                </tr>
            </tbody>
        </table>
    </div>


    <script>
        function changement() {
            let exaegisTable = document.getElementById("exaegis-table");
            let tekinTable = document.getElementById("tekin-table");

            document.getElementById("exaegis-table").removeAttribute("hidden");
            document.getElementById("tekin-table").setAttribute("hidden", "true");
            document.getElementById("toggle-table").innerHTML = "Tekin";
            document.getElementById("toggle-table").setAttribute("onclick", "changement2()");
        }

        function changement2() {
            document.getElementById("exaegis-table").setAttribute("hidden", "true");
            document.getElementById("tekin-table").removeAttribute("hidden");
            document.getElementById("toggle-table").innerHTML = "Exaegis";
            document.getElementById("toggle-table").setAttribute("onclick", "changement()");
        }
    </script>

    <style>
        .competence-table-container {
            overflow-x: auto;
            margin-top: 40px;
        }

        .competence-table {
            width: 100%;
            border-collapse: collapse;
            color: #ddd;
            font-size: 0.95em;
        }

        .competence-table th,
        .competence-table td {
            border: 1px solid #aaa;
            padding: 10px;
            vertical-align: top;
            text-align: center;
        }

        .competence-table thead th {
            background-color: #cfe0c0;
            color: #111;
            font-weight: bold;
        }

        .competence-table .header-top {
            text-align: center;
            font-size: 1.1em;
        }

        .competence-table .desc {
            text-align: left;
            font-weight: 500;
            color: #fff;
        }

        .competence-table .x {
            font-weight: bold;
            font-size: 1.2em;
            color: #fff;
        }


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