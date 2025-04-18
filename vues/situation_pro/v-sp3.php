<!-- Conteneur principal -->
<div class="container bordered-container mt-4">

    <!-- Logo de l'entreprise -->
    <div class="text-center mb-4">
        <img src="./assets/img/ccdv.png" alt="Logo Sectronic" class="img-fluid" style="max-width: 200px;">
    </div>

    <!-- Titre et présentation -->
    <h1 class="fw-bold text-center mb-4 text-gradient">Concours des vins</h1>
    <h3 class="text-gradient">Contexte</h3>
    <p>
        Dans le cadre d’un concours organisé par l’Union de Oenologues du Val de Loire, les producteurs de vins sont évalués selon la qualité gustative de leur production.

        Le concours est ouverts à l’ensemble des vins produits ou commercialisés par les viticulteurs, les caves coopératives et les négociants.

        Les récompenses (Or, Argent, Bronze) sont attribuées par un jury composé de professionnels et d’amateurs éclairés et présidé par un œnologue, selon un protocle de dégustation rigoureux.
        <br><br>
        Lors de la dégustation, chaque membre du jury attribues une note à chaque vin pouvant aller de 0 à 100.
        <br>
        A la fin du concours, les vins ayant reçu une note comprise entre :<br>
        - 100 et 90 obtiennent une médaille d’or,<br>
        - 89 et 80 obtiennent une médaille d’argent,<br>
        - 79 et 70 obtiennent une médaille de bronze.
    </p>

    <div class="accordion-container">
        <h3 class="text-gradient mb-4">Missions réalisées</h3>
        <div class="accordion-group">
            <button class="accordion">
                Mission 1 : Initiation au FrameWork CodeIgniter
            </button>
            <div class="panel">
                <p>
                    Pour se familiariser avec le framework, un projet d’initiation a été mené. Celui-ci consistait à créer une page web avec un formulaire de connexion et une gestion des accès avec une page accessible uniquement après connexion </p>
                </p>
                <div class="mb-3">
                    <button class="btn-doc" onclick="openModal('m1')">
                        📄 Voir la documentation
                    </button>
                </div>

                <div id="m1" class="modal">
                    <span class="close" onclick="closeModal('m1')">&times;</span>
                    <iframe class="pdf-frame" src="./assets/documents/situations/sp1_m1_cms.pdf" frameborder="0"></iframe>
                </div>


            </div>
        </div>
    </div>
    <h3 class="text-gradient mb-4 mt-4">Compétences acquises</h3>
    <div class="competence-table-container">
        <table class="competence-table">
            <thead>
                <tr>
                    <th class="header-top">Union des Œnologues du Val de Loire - Semestre 3 - Concours des vins</th>
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
                    <td class="desc">
                        <strong><span class="blue">Union des Œnologues du Val de Loire</span></strong> – Mise en place de la base de données
                        bd_concours_vins

                    </td>
                    <td class="x">X</td>
                    <td></td>
                    <td></td>
                    <td class="x">X</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="desc">
                        <strong><span class="blue">Union des Œnologues du Val de Loire</span></strong> – Développement des fonctionnalités «
                        Notation des jurés »

                    </td>
                    <td></td>
                    <td class="x">X</td>
                    <td class="x">X</td>
                    <td class="x">X</td>
                    <td></td>
                    <td class="x">X</td>
                </tr>
                <tr>
                    <td class="desc">
                        <strong><span class="blue">Union des Œnologues du Val de Loire</span> </strong> – Déploiement de l’application sur un
                        serveur de production
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="x">X</td>
                    <td class="x">X</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>

</div>

<style>
    .btn-doc {
        background-color: transparent;
        color: #ccc;
        border: 1px solid #666;
        padding: 10px 20px;
        border-radius: 8px;
        font-weight: 500;
        transition: 0.3s ease;
        cursor: pointer;
    }

    .btn-doc:hover {
        background-color: #333;
        color: #fff;
        border-color: #888;
    }

    .modal {
        display: none;
        position: fixed;
        z-index: 999;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background-color: rgba(0, 0, 0, 0.8);
        backdrop-filter: blur(4px);
        padding: 30px;
        box-sizing: border-box;
    }

    .pdf-frame {
        width: 90vw;
        height: 90vh;
        border: none;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.6);
        margin-left: 4vw;
    }

    .close {
        position: absolute;
        top: 20px;
        right: 35px;
        color: #fff;
        font-size: 40px;
        font-weight: bold;
        cursor: pointer;
        transition: 0.3s;
    }

    .close:hover {
        color: #ff6a00;
    }

    .bordered-container {
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 12px;
        padding: 30px;
        background-color: rgba(255, 255, 255, 0.03);
        box-shadow: 0 0 20px rgba(255, 255, 255, 0.05);
    }

    .accordion-group {
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 8px;
        margin-bottom: 10px;
        background-color: #222;
    }

    .accordion {
        background-color: transparent;
        color: #ff944d;
        cursor: pointer;
        padding: 15px;
        width: 100%;
        border: none;
        text-align: left;
        font-size: 1.3em;
        transition: background-color 0.3s;
    }

    .accordion:hover {
        background-color: rgba(255, 255, 255, 0.05);
    }

    .panel {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s ease, padding 0.4s ease;
        padding: 0 15px;
    }

    .panel.open {
        padding: 15px;
        max-height: 1000px;
        margin-bottom: 15px;
    }

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
        background-color: rgb(123, 220, 181);
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

    .competence-table .blue {
        color: rgb(3, 95, 137);
    }
</style>

<script>
    const accordions = document.querySelectorAll('.accordion');
    accordions.forEach((accordion) => {
        accordion.addEventListener('click', function() {
            const panel = this.nextElementSibling;
            if (panel.classList.contains('open')) {
                panel.style.maxHeight = null;
                panel.classList.remove('open');
            } else {
                accordions.forEach((acc) => {
                    const otherPanel = acc.nextElementSibling;
                    if (otherPanel.classList.contains('open')) {
                        otherPanel.style.maxHeight = null;
                        otherPanel.classList.remove('open');
                    }
                });
                panel.classList.add('open');
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    });

    function openModal(id) {
        document.getElementById(id).style.display = "block";
    }

    function closeModal(id) {
        document.getElementById(id).style.display = "none";
    }
</script>