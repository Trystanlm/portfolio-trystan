<!-- Conteneur principal -->
<div class="container bordered-container mt-4">

    <!-- Logo de l'entreprise -->
    <div class="text-center mb-4">
        <img src="./assets/img/seg.png" alt="Logo Sectronic" class="img-fluid" style="max-width: 200px;">
    </div>

    <!-- Titre et présentation -->
    <h1 class="fw-bold text-center mb-4 text-gradient">Gestion des eaux - SEG</h1>
    <h3 class="text-gradient">Contexte</h3>
    <p>
        La société <strong>Start@Dev_Tours</strong> est spécialisée dans le développement web. Experte en création de
        solutions complexes et innovantes, son agence web développe des solutions et des applications
        web sur mesure qui répondent au besoin de chaque projet. Avec plus de 16 années d’expérience,
        l'agence Start@Dev_Tours accompagne ses clients et leur propose de nouvelles idées alliant
        respect de l’environnement et dernières technologies. </p>

    <div class="accordion-container">
        <h3 class="text-gradient mb-4">Missions réalisées</h3>
        <div class="accordion-group">
            <button class="accordion">
                Mission 1 : Étude comparative de Content Management System (CMS)
            </button>
            <div class="panel">
                <p>
                    L'entreprise souhaitant proposer des sites vitrines à ses clients, une étude comparative des CMS existants a été réalisée afin de déterminer la solution la plus adaptée à leurs besoins.
                </p>
                <div class="mb-3">
                    <button class="btn-doc" onclick="openModal('m1')">
                        📄 Voir la documentation
                    </button>
                </div>

                <div id="m1" class="modal">
                    <span class="close" onclick="closeModal('m1')">&times;</span>
                    <iframe class="pdf-frame" src="./assets/documents/sp1_m1_cms.pdf" frameborder="0"></iframe>
                </div>


            </div>
        </div>


        <div class="accordion-group">
            <button class="accordion">
                Mission 2 : Installation de Wordpress
            </button>
            <div class="panel">
                <p>
                    Suite à l'étude préalable, le choix s'est porté sur WordPress. J'ai procédé à son installation et rédigé une documentation technique détaillant chaque étape du processus.
                </p>
                <div class="mb-3">
                    <button class="btn-doc" onclick="openModal('m2')">
                        📄 Voir la documentation
                    </button>
                </div>

                <div id="m2" class="modal">
                    <span class="close" onclick="closeModal('m2')">&times;</span>
                    <iframe class="pdf-frame" src="./assets/documents/sp1_m1_cms.pdf" frameborder="0"></iframe>
                </div>

            </div>
        </div>

        <div class="accordion-group">
            <button class="accordion">
                Mission 3 : Etude d'un site existant
            </button>
            <div class="panel">
                <p>
                    Avant de démarrer la refonte, une analyse complète du site existant de BioDicé a été effectuée, synthétisée dans une fiche d’étude pour mieux cerner son fonctionnement et ses axes d’amélioration.
                </p>
                <div class="mb-3">
                    <button class="btn-doc" onclick="openModal('m3')">
                        📄 Voir la documentation
                    </button>
                    <div id="m3" class="modal">
                        <span class="close" onclick="closeModal('m3')">&times;</span>
                        <iframe class="pdf-frame" src="./assets/documents/sp1_m1_cms.pdf" frameborder="0"></iframe>
                    </div>
                </div>

            </div>
        </div>

        <div class="accordion-group">
            <button class="accordion">
                Mission 4 : Charte graphique et refonte
            </button>
            <div class="panel">
                <p>
                    En utilisant WordPress, j’ai conçu une nouvelle version du site vitrine en définissant d’abord une charte graphique respectant l’identité de la coopérative BioDicé.
                </p>
                <div class="mb-3">
                    <button class="btn-doc" onclick="openModal('m4')">
                        📄 Voir la documentation
                    </button>
                    <div id="m4" class="modal">
                        <span class="close" onclick="closeModal('m4')">&times;</span>
                        <iframe class="pdf-frame" src="./assets/documents/sp1_m4_wp.pdf" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion-group">
            <button class="accordion">
                Mission 5 : Gestion des utilisateurs sur le site
            </button>
            <div class="panel">
                <p>
                    Afin de permettre au client de gérer et actualiser le site de manière autonome, un système de gestion des utilisateurs a été mis en place, accompagné d’une documentation claire.
                </p>
                <div class="mb-3">
                    <button class="btn-doc" onclick="openModal('m5')">
                        📄 Voir la documentation
                    </button>
                    <div id="m5" class="modal">
                        <span class="close" onclick="closeModal('m5')">&times;</span>
                        <iframe class="pdf-frame" src="./assets/documents/sp1_m4_wp.pdf" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion-group">
            <button class="accordion ">
                Mission 6 : Livraison et présentation du site au client
            </button>
            <div class="panel">
                <p>
                    Une présentation du site finalisé a été préparée sous forme de diaporama. Une démonstration de l’interface WordPress a également été fournie pour faciliter sa prise en main par le client.
                </p>
                <div class="mb-3">
                    <button class="btn-doc" onclick="openModal('m6')">
                        📄 Voir la documentation
                    </button>
                    <div id="m6" class="modal">
                        <span class="close" onclick="closeModal('m6')">&times;</span>
                        <iframe class="pdf-frame" src="./assets/documents/sp1_m4_wp.pdf" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion-group">
            <button class="accordion ">
                Mission 7 : Déploiement
            </button>
            <div class="panel">
                <p>
                    Pour finaliser le projet, le site a été déployé sur le serveur local du lycée. Une documentation complète accompagnait cette phase pour assurer une installation fonctionnelle et pérenne.
                </p>

                <div class="mb-3">
                    <button class="btn-doc" onclick="openModal('m7')">
                        📄 Voir la documentation
                    </button>
                    <div id="m7" class="modal">
                        <span class="close" onclick="closeModal('m7')">&times;</span>
                        <iframe class="pdf-frame" src="./assets/documents/sp1_m4_wp.pdf" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ajoute autant de missions que nécessaire -->
    </div>
    <h3 class="text-gradient mb-4 mt-4">Compétences acquises</h3>
    <div class="competence-table-container">
        <table class="competence-table">
            <thead>
                <tr>
                    <th colspan="2" class="header-top">START@DEV TOURS - Semestre 1 - BioDicé</th>
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
                        <strong>START@DEVTOURS</strong> – Étude comparative d’un CMS – Installation du CMS Wordpress
                    </td>
                    <td>09/2023</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="x">X</td>
                    <td></td>
                    <td class="x">X</td>
                </tr>
                <tr>
                    <td class="desc">
                        <strong>START@DEVTOURS</strong> – Étude de l'existant du site <span class="green">BioDicé</span>
                        (design, lisibilité, ergonomie, accessibilité, SEO…)
                    </td>
                    <td>10/2023</td>
                    <td></td>
                    <td></td>
                    <td class="x">X</td>
                    <td class="x">X</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="desc">
                        <strong>START@DEVTOURS</strong> – Refonte et évolutions du site vitrine <span class="green">BioDicé</span> à l’aide du CMS Wordpress
                    </td>
                    <td>11/2023 à 12/2023</td>
                    <td class="x">X</td>
                    <td class="x">X</td>
                    <td class="x">X</td>
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

    .competence-table .green {
        color: #9eff9e;
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