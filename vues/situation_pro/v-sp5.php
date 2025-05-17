<div class="container bordered-container mt-4">

    <div class="text-center mb-4">
        <img src="./assets/img/seg.png" alt="Logo Sectronic" class="img-fluid" style="max-width: 200px;">
    </div>

    <h1 class="fw-bold text-center mb-4 text-gradient">Gestion des eaux - SEG</h1>
    <h3 class="text-gradient">Contexte</h3>
    <p>
        Le Syndicat des Eaux de Gévaudan (SEG) s’est ainsi donné pour mission le captage,
        le traitement et la distribution de l’eau potable pour satisfaire les usagers répartis sur le
        territoire des communes regroupées au sein d’un syndicat de communes. Une fois par an, les agents
        du SEG relèvent les consommations d'eau des compteurs vannes de chaque secteur. Le relevé du nouvel
        index d'un compteur vanne sera saisi et enregistré sur le support mobile mis à disposition de chaque agent.
        Les données sont ensuite exportées dans la base de données utilisée par l'application Gestconso de SEG.
    </p>
    <h3 class="text-gradient">Environnement de développement & Gestion de projet</h3>
    <div class="d-flex justify-content-start gap-3 flex-wrap">
        <img src="./assets/img/android.jpg" alt="AndroidStudio logo" class="rounded tech-logo" data-bs-toggle="modal" data-bs-target="#androidStudioModal">
        <img src="./assets/img/sqlite.png" alt="SQlite logo" class="rounded tech-logo" data-bs-toggle="modal" data-bs-target="#sqliteModal">
        <img src="./assets/img/jakarta.png" alt="Jakarta logo" class="rounded tech-logo" data-bs-toggle="modal" data-bs-target="#JakartaModal">
        <img src="./assets/img/glassfish.png" alt="GlassFish logo" class="rounded tech-logo" data-bs-toggle="modal" data-bs-target="#glassfishModal">
        <img src="./assets/img/netbeans.png" alt="Netbeans logo" class="rounded tech-logo" data-bs-toggle="modal" data-bs-target="#netbeansModal">
        <img src="./assets/img/sqlserver.png" alt="SQLServer logo" class="rounded tech-logo" data-bs-toggle="modal" data-bs-target="#sqlServerModal">

    </div>
    <div class="accordion-container">
        <h3 class="text-gradient mb-4">Missions réalisées</h3>

        <div class="accordion-group">
            <button class="accordion">Mission 1 : Mise en place des Webservices</button>
            <div class="panel">
                <p>
                    Dans le cadre de ma mission, j'ai intégré la bibliothèque des classes métiers pour en permettre l'utilisation au sein de l'application Android. J'ai également développé les webservices nécessaires pour synchroniser les données entre la base embarquée sur Android et celle de l'application Web.
                </p>
                <p>Voici un extrait des WebServices implémentées présents dans la classe CommuneResource</p>
                <img src="./assets/img/situations/resourceCommune.png" alt="Bitbucket" class="img-fluid mb-3">
                <p>Voici un extrait des WebServices implémentées présents dans la classe ReleveResource</p>
                <img src="./assets/img/situations/resourceReleve.png" alt="Bitbucket" class="img-fluid mb-3">
                <img src="./assets/img/situations/resourceReleve2.png" alt="Bitbucket" class="img-fluid mb-3">
            </div>

        </div>

        <div class="accordion-group">
            <button class="accordion">Mission 2 : Création de la page d'accueil de l'application Android</button>
            <div class="panel">
                <p>Une base de données a été conçue pour servir de fondation au projet d'application. Une documentation technique est attendue, accompagnée des scripts permettant de créer la structure de la base, d'alimenter les tables, et de gérer les données.</p>
                <p>Voici le visuel de la page d'accueil de l'application en paysage et portrait :</p>
                <div class="row">
                    <div class="text-center col-6">
                        <img src="./assets/img/situations/accueilAndroid.png" alt="Bitbucket" class="img-fluid mb-3">
                    </div>
                    <div class="text-center col-6">
                        <img src="./assets/img/situations/accueilAndroid3.png" alt="Bitbucket" class="img-fluid mb-3">
                    </div>
                </div>
                <img src="./assets/img/situations/accueilAndroid2.png" alt="Bitbucket" class="img-fluid mb-3">
            </div>
        </div>

        <div class="accordion-group">
            <button class="accordion">Mission 3 : Enregistrer les données d'un compteur Vanne</button>
            <div class="panel">
                <p>Ce sprint a abouti à l'implémentation de la fonctionnalité permettant aux agents de relever les consommations des vannes.</p>
                <div class="mb-3">
                    <button class="btn-doc" onclick="openModal('m5Video')">
                        Voir la vidéo de rendu
                    </button>
                    <div id="m5Video" class="custom-modal">
                        <span class="close" onclick="closeModal('m5Video')">&times;</span>
                        <video class="video-frame" controls>
                            <source src="./assets/videos/renduajtreleve.mp4" type="video/mp4">
                            Votre navigateur ne supporte pas la lecture vidéo.
                        </video>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion-group">
            <button class="accordion">Mission 4 : Importer les données dans la base de données embarquée</button>
            <div class="panel">
                <p>L’objectif de ce sprint est de mettre en place la récupération des données contenues dans la base de données de l’application Web.</p>
                <div class="mb-3">
                    <button class="btn-doc" onclick="openModal('m5Video')">
                        Voir la vidéo de rendu
                    </button>
                    <div id="m5Video" class="custom-modal">
                        <span class="close" onclick="closeModal('m5Video')">&times;</span>
                        <video class="video-frame" controls>
                            <source src="./assets/videos/renduimport.mp4" type="video/mp4">
                            Votre navigateur ne supporte pas la lecture vidéo.
                        </video>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion-group">
            <button class="accordion">Mission 5 : Exporter les données dans la base de données embarquée</button>
            <div class="panel">
                <p>Ce sprint vise à permettre l’envoi des données extraites de la base de données de l’application Web.</p>
                <div class="mb-3">
                    <button class="btn-doc" onclick="openModal('m5Video')">
                        Voir la vidéo de rendu
                    </button>
                    <div id="m5Video" class="custom-modal">
                        <span class="close" onclick="closeModal('m5Video')">&times;</span>
                        <video class="video-frame" controls>
                            <source src="./assets/videos/renduexport.mp4" type="video/mp4">
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
                    <th>SEG - Semestre 4 – Gestion des eaux – Android</th>
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
                    <td class="desc"><span class="blue"> SEG </span> – Mise en place de WebServices REST</td>
                    <td></td>
                    <td class="x">X</td>
                    <td></td>
                    <td class="x">X</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="desc"><span class="blue"> SEG </span> – Déploiement de l’API REST sur un serveur de production (GlassFish)</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="x">X</td>
                    <td></td>
                </tr>
                <tr>
                    <td class="desc"><span class="blue"> SEG </span> – Création de l’application mobile « appli_gest_vannes »
                    </td>
                    <td></td>
                    <td class="x">X</td>
                    <td></td>
                    <td></td>
                    <td class="x">X</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>

</div>
<!-- Modale SQL Server -->
<div class="modal fade" id="sqlServerModal" tabindex="-1" aria-labelledby="sqlServerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="sqlServerModalLabel">SQL Server : Présentation, Avantages et Inconvénients</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>SQL Server est un Système de Gestion de Base de Données (SGBD) développé par Microsoft, largement utilisé dans les environnements Windows.</p>
                <div class="list-container">
                    <h4 class="green">Avantages</h4>
                    <ul class="pros-list">
                        <li>Intégration native avec les outils Microsoft (Azure, .NET...)</li>
                        <li>Interface graphique performante (SSMS).</li>
                        <li>Haute sécurité et fiabilité.</li>
                    </ul>
                </div>
                <div class="list-container">
                    <h4 class="red">Inconvénients</h4>
                    <ul class="cons-list">
                        <li>Licence coûteuse pour les éditions complètes.</li>
                        <li>Moins flexible que certains SGBD open source.</li>
                        <li>Principalement orienté Windows (même si support Linux existe).</li>
                    </ul>
                </div>
            </div>
        </div>
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
<!-- Modale GlassFish -->
<div class="modal fade" id="glassfishModal" tabindex="-1" aria-labelledby="glassfishModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="glassfishModalLabel">GlassFish : Présentation, Avantages et Inconvénients</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <div class="modal-body">
                <p>GlassFish est un serveur d'applications open-source conforme aux spécifications Jakarta EE (anciennement Java EE), utilisé pour exécuter des applications Java d'entreprise.</p>
                <div class="list-container">
                    <h4 class="green">Avantages</h4>
                    <ul class="pros-list">
                        <li>Conforme aux spécifications Jakarta EE.</li>
                        <li>Facile à configurer et à utiliser pour les développeurs Java.</li>
                        <li>Bon support pour les EJB, JPA, JMS, etc.</li>
                        <li>Open-source et régulièrement mis à jour par Eclipse Foundation.</li>
                    </ul>
                </div>
                <div class="list-container">
                    <h4 class="red">Inconvénients</h4>
                    <ul class="cons-list">
                        <li>Moins performant que des alternatives comme WildFly ou Payara en production.</li>
                        <li>Support communautaire limité comparé à d'autres solutions.</li>
                        <li>Peut être complexe à optimiser pour des déploiements lourds.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modale SQLite -->
<div class="modal fade" id="sqliteModal" tabindex="-1" aria-labelledby="sqliteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="sqliteModalLabel">SQLite : Présentation, Avantages et Inconvénients</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <div class="modal-body">
                <p>SQLite est une base de données relationnelle légère, embarquée, sans serveur, très utilisée dans les applications mobiles et embarquées.</p>
                <div class="list-container">
                    <h4 class="green">Avantages</h4>
                    <ul class="pros-list">
                        <li>Très légère et facile à intégrer dans les applications.</li>
                        <li>Sans configuration serveur : fichiers autonomes.</li>
                        <li>Parfaitement adaptée aux projets mobiles et embarqués.</li>
                        <li>Open-source et extrêmement fiable.</li>
                    </ul>
                </div>
                <div class="list-container">
                    <h4 class="red">Inconvénients</h4>
                    <ul class="cons-list">
                        <li>Pas adaptée aux charges de travail très élevées ou multi-utilisateurs.</li>
                        <li>Fonctionnalités limitées comparées aux SGBD complets comme PostgreSQL ou MySQL.</li>
                        <li>Pas de gestion native du clustering ou de la haute disponibilité.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modale Android Studio -->
<div class="modal fade" id="androidStudioModal" tabindex="-1" aria-labelledby="androidStudioModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="androidStudioModalLabel">Android Studio : Présentation, Avantages et Inconvénients</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <div class="modal-body">
                <p>Android Studio est l’environnement de développement officiel pour Android, basé sur IntelliJ IDEA et soutenu par Google.</p>
                <div class="list-container">
                    <h4 class="green">Avantages</h4>
                    <ul class="pros-list">
                        <li>Support officiel par Google et mise à jour régulière.</li>
                        <li>Outils de conception graphique intégrés (layout editor, preview).</li>
                        <li>Émulateur Android performant et rapide.</li>
                        <li>Support Kotlin, Java et C++.</li>
                    </ul>
                </div>
                <div class="list-container">
                    <h4 class="red">Inconvénients</h4>
                    <ul class="cons-list">
                        <li>Peut être lourd et gourmand en ressources système.</li>
                        <li>Temps de build parfois long pour les gros projets.</li>
                        <li>Courbe d’apprentissage pour les débutants.</li>
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

    .video-frame {
        width: 90vw;
        max-height: 90vh;
        border-radius: 12px;
        box-shadow: 0 0 25px rgba(255, 255, 255, 0.2);
        margin-left: 4vw;
        background-color: #000;
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