<!-- Conteneur principal -->
<div class="container bordered-container mt-4">

    <!-- Logo de l'entreprise -->
    <div class="text-center mb-4">
        <img src="./assets/img/logo_barec.png" alt="Logo Sectronic" class="img-fluid" style="max-width: 200px;">
    </div>

    <!-- Titre et présentation -->
    <h1 class="fw-bold text-center mb-4 text-gradient">Barec</h1>
    <h3 class="text-gradient">Contexte</h3>
    <p>
        La société <strong>Start@Dev_Tours</strong> est spécialisée dans le développement web. Experte en création de
        solutions complexes et innovantes, son agence web développe des solutions et des applications
        web sur mesure qui répondent au besoin de chaque projet. Avec plus de 16 années d’expérience,
        l'agence Start@Dev_Tours accompagne ses clients et leur propose de nouvelles idées alliant
        respect de l’environnement et dernières technologies. </p>

    <h3 class="text-gradient">Environnement de développement & Gestion de projet</h3>
    <div class="d-flex justify-content-start gap-3 flex-wrap">
        <img src="./assets/img/netbeans.png" alt="Netbeans logo" class="rounded tech-logo" data-bs-toggle="modal" data-bs-target="#netbeansModal">
        <img src="./assets/img/mysql.png" alt="MySQL logo" class="rounded tech-logo" data-bs-toggle="modal" data-bs-target="#mysqlModal">
        <img src="./assets/img/trello.png" alt="Trello logo" class="rounded tech-logo" data-bs-toggle="modal" data-bs-target="#trelloModal">
        <img src="./assets/img/bootstrap.png" alt="Bootstrap logo" class="rounded tech-logo" data-bs-toggle="modal" data-bs-target="#bootstrapModal">
    </div>


    <div class="accordion-container">
        <h3 class="text-gradient mb-4">Missions réalisées</h3>
        <div class="accordion-group">
            <button class="accordion">
                Mission 1 : Découverte du Framework Bootstrap
            </button>
            <div class="panel">
                <p>
                    Pour se familiariser avec le framework, un projet d’initiation a été mené. Celui-ci consistait à créer une page web intégrant une barre de navigation ainsi qu’un formulaire. </p>
                <div class="mb-3">
                    <button class="btn-doc" onclick="openModal('m1')">
                        📄 Voir le rendu
                    </button>
                </div>

                <div id="m1" class="custom-modal">
                    <span class="close" onclick="closeModal('m1')">&times;</span>
                    <iframe class="pdf-frame" src="./assets/img/situations/initiation_bs.png" frameborder="0"></iframe>
                </div>


            </div>
        </div>


        <div class="accordion-group">
            <button class="accordion">
                Mission 2 : Implémentation de la base de données bd_barec
            </button>
            <div class="panel">
                <p>
                    Une base de données a été conçue afin de poser les fondations du projet d’application. La documentation technique, le script de création des tables ainsi que les scripts d’insertion des données ont été réalisés. </p>
                <div class="mb-3">
                    <button class="btn-doc" onclick="openModal('m2')">
                        📄 Voir la documentation
                    </button>
                </div>

                <div id="m2" class="custom-modal">
                    <span class="close" onclick="closeModal('m2')">&times;</span>
                    <iframe class="pdf-frame" src="./assets/documents/situations/sp2_m2.pdf" frameborder="0"></iframe>
                </div>

            </div>
        </div>

        <div class="accordion-group">
            <button class="accordion">
                Mission 3 : Initiation Modèles Vues Contrôleurs (MVC)
            </button>
            <div class="panel">
                <p>
                    Afin de s’adapter à cette nouvelle méthode de travail, un projet a été mené sous NetBeans pour en comprendre le fonctionnement et les bonnes pratiques associées. </p>
                <div class="mb-3">
                    <button class="btn-doc" onclick="openModal('m3')">
                        📄 Voir la documentation
                    </button>
                    <div id="m3" class="custom-modal">
                        <span class="close" onclick="closeModal('m3')">&times;</span>
                        <iframe class="pdf-frame" src="./assets/documents/situations/sp2_m3.pdf" frameborder="0"></iframe>
                    </div>
                </div>

            </div>
        </div>

        <div class="accordion-group">
            <button class="accordion">
                Mission 4 : Mise en place de l'architecture
            </button>
            <div class="panel">
                <p>
                    En suivant le modèle MVC et en s'appuyant sur Bootstrap, une architecture claire a été mise en place : organisation optimisée des fichiers et dossiers, et intégration de fonctionnalités telles qu’un formulaire d’authentification entièrement fonctionnel. </p>
                <div class="mb-3">
                    <button class="btn-doc" onclick="openModal('m4')">
                        📄 Voir l'architecture
                    </button>
                    <div id="m4" class="custom-modal">
                        <span class="close" onclick="closeModal('m4')">&times;</span>
                        <iframe class="pdf-frame center" src="./assets/img/situations/architectureBarrec.png" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion-group">
            <button class="accordion">
                Mission 5 : Rendu de l'application
            </button>
            <div class="panel">
                <p>
                    Voici le rendu de la fonctionnalité que j'ai réalisé. Elle est entièrement fonctionnelle et respecte les normes du développement web moderne.
                    <br><br>
                    Cependant, le développement de l'application n’a pas pu être finalisé, car les deux personnes initialement prévues pour collaborer avec moi sur ce projet ont quitté la formation en cours d'année.
                </p>
                <div class="mb-3">
                    <button class="btn-doc" onclick="openModal('m5Video')">
                        Voir la vidéo de rendu
                    </button>
                    <div id="m5Video" class="custom-modal">
                        <span class="close" onclick="closeModal('m5Video')">&times;</span>
                        <video class="video-frame" controls>
                            <source src="./assets/videos/rendubarec.mp4" type="video/mp4">
                            Votre navigateur ne supporte pas la lecture vidéo.
                        </video>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <h3 class="text-gradient mb-4 mt-4">Compétences acquises</h3>
    <div class="competence-table-container">
        <table class="competence-table">
            <thead>
                <tr>
                    <th class="header-top">Barec - Semestre 1 - Gestion MSL</th>
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
                        <strong><span class="blue"> BAREC </span></strong> – Mise en place de la base de données bd_barec
                    </td>
                    <td class="x">X</td>
                    <td class="x">X</td>
                    <td></td>
                    <td class="x">X</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="desc">
                        <strong><span class="blue"> BAREC </span></strong> – Développement des fonctionnalités << Gestion MSL>>
                    </td>
                    <td></td>
                    <td class="x">X</td>
                    <td class="x">X</td>
                    <td class="x">X</td>
                    <td class="x">X</td>
                    <td class="x">X</td>
                </tr>
            </tbody>
        </table>
    </div>

</div>
<!-- Modale NetBeans -->
<div class="modal fade" id="netbeansModal" tabindex="-1" aria-labelledby="netbeansModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="netbeansModalLabel">NetBeans : Présentation, Avantages et Inconvénients</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>NetBeans est un environnement de développement intégré (IDE) principalement utilisé pour le développement Java, mais il prend également en charge d'autres langages.</p>
                <div class="list-container">
                    <h4 class="green">Avantages</h4>
                    <ul class="pros-list">
                        <li>Interface claire et bien organisée.</li>
                        <li>Support natif pour Maven, Git, et Java EE.</li>
                        <li>Gratuit et open source.</li>
                    </ul>
                </div>
                <div class="list-container">
                    <h4 class="red">Inconvénients</h4>
                    <ul class="cons-list">
                        <li>Peut être lourd et lent sur des projets volumineux.</li>
                        <li>Moins d'extensions disponibles comparé à Eclipse ou IntelliJ.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modale Bootstrap -->
<div class="modal fade" id="bootstrapModal" tabindex="-1" aria-labelledby="bootstrapModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="bootstrapModalLabel">Bootstrap : Présentation, Avantages et Inconvénients</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Bootstrap est un framework CSS open source utilisé pour concevoir rapidement des interfaces web réactives et modernes.</p>
                <div class="list-container">
                    <h4 class="green">Avantages</h4>
                    <ul class="pros-list">
                        <li>Facilite la création d'interfaces responsive sans effort.</li>
                        <li>Composants prêts à l'emploi et bien documentés.</li>
                        <li>Large communauté et support constant.</li>
                    </ul>
                </div>
                <div class="list-container">
                    <h4 class="red">Inconvénients</h4>
                    <ul class="cons-list">
                        <li>Design parfois trop standardisé si non personnalisé.</li>
                        <li>Peut alourdir les performances si mal optimisé.</li>
                        <li>Dépendance à une structure HTML spécifique pour certains composants.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modale MySQL -->
<div class="modal fade" id="mysqlModal" tabindex="-1" aria-labelledby="mysqlModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="mysqlModalLabel">MySQL : Présentation, Avantages et Inconvénients</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>MySQL est un système de gestion de base de données relationnelle (SGBDR) très utilisé, notamment pour les applications web.</p>
                <div class="list-container">
                    <h4 class="green">Avantages</h4>
                    <ul class="pros-list">
                        <li>Gratuit, open source et largement documenté.</li>
                        <li>Haute performance pour les lectures intensives.</li>
                        <li>Compatible avec de nombreuses plateformes et langages.</li>
                    </ul>
                </div>
                <div class="list-container">
                    <h4 class="red">Inconvénients</h4>
                    <ul class="cons-list">
                        <li>Fonctionnalités avancées limitées par rapport à PostgreSQL.</li>
                        <li>Gestion des transactions et performances parfois moins bonnes sur les bases très complexes.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modale Trello -->
<div class="modal fade" id="trelloModal" tabindex="-1" aria-labelledby="trelloModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="trelloModalLabel">Trello : Présentation, Avantages et Inconvénients</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Trello est un outil de gestion de projets basé sur le web qui utilise une approche visuelle de type Kanban pour organiser les tâches.</p>
                <div class="list-container">
                    <h4 class="green">Avantages</h4>
                    <ul class="pros-list">
                        <li>Interface intuitive et simple à prendre en main.</li>
                        <li>Collaboration en temps réel facilitée.</li>
                        <li>Intégrations possibles avec de nombreux autres outils (Slack, Google Drive, etc.).</li>
                    </ul>
                </div>
                <div class="list-container">
                    <h4 class="red">Inconvénients</h4>
                    <ul class="cons-list">
                        <li>Peut devenir désorganisé sur les projets très complexes.</li>
                        <li>Fonctionnalités avancées limitées sans abonnement payant.</li>
                    </ul>
                </div>
            </div>
        </div>
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

    .custom-modal {
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
        background-color: rgb(0, 191, 238);
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
        color: rgb(1, 89, 183);
    }

    .video-frame {
        width: 90vw;
        max-height: 90vh;
        border-radius: 12px;
        box-shadow: 0 0 25px rgba(255, 255, 255, 0.2);
        margin-left: 4vw;
        background-color: #000;
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