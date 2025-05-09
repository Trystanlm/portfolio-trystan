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
    <h3 class="text-gradient">Environnement de développement & Gestion de projet</h3>
    <div class="d-flex justify-content-start gap-3 flex-wrap">
        <img src="./assets/img/netbeans.png" alt="Netbeans logo" class="rounded tech-logo" data-bs-toggle="modal" data-bs-target="#netbeansModal">
        <img src="./assets/img/mysql.png" alt="MySQL logo" class="rounded tech-logo" data-bs-toggle="modal" data-bs-target="#mysqlModal">
        <img src="./assets/img/codeigniter.png" alt="CodeIgniter logo" class="rounded tech-logo" data-bs-toggle="modal" data-bs-target="#codeigniterModal">
        <img src="./assets/img/bitbucket.png" alt="Trello logo" class="rounded tech-logo" data-bs-toggle="modal" data-bs-target="#bitbucketModal">
        <img src="./assets/img/jiraBlanc.png" alt="Trello logo" class="rounded tech-logo" data-bs-toggle="modal" data-bs-target="#jiraModal">

    </div>
    <div class="accordion-container">
        <h3 class="text-gradient mb-4">Missions réalisées</h3>
        <div class="accordion-group">
            <button class="accordion">
                Gestion de projet
            </button>
            <div class="panel">
                <p>
                    Ce projet à été réalisé en mode projet en équipe, avec une gestion de version via Bitbucket et un suivi des tâches via Jira. Le développement a été effectué en utilisant le framework CodeIgniter, avec une base de données MySQL pour stocker les informations relatives aux vins et aux jurés.
                    <br><br>
                    Voici les différentes branches de développement utilisées pour le projet :<br>
                </p>
                <img src="./assets/img/ccdv_branch_bitbucket.png" alt="Bitbucket" class="img-fluid mb-3">
                <p>
                    Voic une liste des différents commits réalisés sur la branche principale du projet :<br>
                </p>
                <img src="./assets/img/ccdv_commit_bitbucket.png" alt="Bitbucket" class="img-fluid mb-3">

            </div>
        </div>
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

                <div id="m1" class="custom-modal">
                    <span class="close" onclick="closeModal('m1')">&times;</span>
                    <iframe class="pdf-frame" src="./assets/documents/situations/sp3_m1.pdf" frameborder="0"></iframe>
                </div>


            </div>
        </div>
        <div class="accordion-group">
            <button class="accordion">
                Mission 2 : Saisie des notes d'un juré
            </button>
            <div class="panel">
                <p>
                    Dans le but de permettre aux jurés d'établir une note personnel lors d'une degustation, une fonctionnalité a été développée. Lors de la saisie il est necessaire que le juré soit connecter à son compte personnel puis saisisse le vin qu'il souhaite noté afin de lui attribuer une note. </p>
                <div class="mb-3">
                    <button class="btn-doc" onclick="openModal('m2')">
                        📄 Voir la documentation
                    </button>
                </div>

                <div id="m2" class="custom-modal">
                    <span class="close" onclick="closeModal('m2')">&times;</span>
                    <iframe class="pdf-frame" src="./assets/documents/situations/sp3_m2.pdf" frameborder="0"></iframe>
                </div>


            </div>
        </div>
        <div class="accordion-group">
            <button class="accordion">
                Mission 3 : Consultation des notes et clôture du concours
            </button>
            <div class="panel">
                <p>
                    Pour permettre une meilleure navigation et lisibilités, un tableau contenant les notes du jury a été établi. En parallèle la fonctionnalité permettant la clôture du concours a été développé </p>
                <div class="mb-3">
                    <button class="btn-doc" onclick="openModal('m3')">
                        📄 Voir la documentation
                    </button>
                </div>

                <div id="m3" class="custom-modal">
                    <span class="close" onclick="closeModal('m3')">&times;</span>
                    <iframe class="pdf-frame" src="./assets/documents/situations/sp3_m3.pdf" frameborder="0"></iframe>
                </div>


            </div>
        </div>
        <div class="accordion-group">
            <button class="accordion">
                Mission 4 : Affichage du palmarès
            </button>
            <div class="panel">
                <p>
                    Un palmarès des vins a été mis en place dans le but de retrouver les vins les mieux notés. La note final d'un vin correspond à la moyenne de l'ensemble des notes qu'il a obtenu. </p>
                <div class="mb-3">
                    <button class="btn-doc" onclick="openModal('m4')">
                        📄 Voir la documentation
                    </button>
                </div>

                <div id="m4" class="custom-modal">
                    <span class="close" onclick="closeModal('m4')">&times;</span>
                    <iframe class="pdf-frame" src="./assets/documents/situations/sp3_m4.pdf" frameborder="0"></iframe>
                </div>


            </div>
        </div>
        <div class="accordion-group">
            <button class="accordion">
                Mission 5 : Déploiement de l'application sur un serveur local
            </button>
            <div class="panel">
                <p>
                    Afin de répondre aux attentes du client l'application une fois finalisé à été déployer sur un serveur de production réaliser par nos camarades de la filière SISR

                </p>
                <div class="mb-3">
                    <button class="btn-doc" onclick="openModal('m5Video')">
                        Voir la vidéo de rendu
                    </button>
                    <div id="m5Video" class="custom-modal">
                        <span class="close" onclick="closeModal('m5Video')">&times;</span>
                        <video class="video-frame" controls>
                            <source src="./assets/videos/renduccdv.mp4" type="video/mp4">
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

<!-- Modale CodeIgniter -->
<div class="modal fade" id="codeigniterModal" tabindex="-1" aria-labelledby="codeigniterModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="codeigniterModalLabel">CodeIgniter : Présentation, Avantages et Inconvénients</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <div class="modal-body">
                <p>CodeIgniter est un framework PHP léger basé sur le modèle MVC (Model-View-Controller), conçu pour créer rapidement des applications web dynamiques.</p>
                <div class="list-container">
                    <h4 class="green">Avantages</h4>
                    <ul class="pros-list">
                        <li>Très léger et rapide à exécuter.</li>
                        <li>Facile à apprendre et à configurer.</li>
                        <li>Bonne documentation officielle.</li>
                        <li>Structure claire basée sur MVC.</li>
                    </ul>
                </div>
                <div class="list-container">
                    <h4 class="red">Inconvénients</h4>
                    <ul class="cons-list">
                        <li>Moins de fonctionnalités intégrées comparé à Laravel ou Symfony.</li>
                        <li>Moins utilisé dans les projets récents (communauté plus petite).</li>
                        <li>Gestion des dépendances plus limitée.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modale Bitbucket -->
<div class="modal fade" id="bitbucketModal" tabindex="-1" aria-labelledby="bitbucketModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="bitbucketModalLabel">Bitbucket : Présentation, Avantages et Inconvénients</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <div class="modal-body">
                <p>Bitbucket est une plateforme de gestion de code source basée sur Git, développée par Atlassian, souvent utilisée avec Jira et Trello dans les projets collaboratifs.</p>
                <div class="list-container">
                    <h4 class="green">Avantages</h4>
                    <ul class="pros-list">
                        <li>Intégration native avec Jira et Trello.</li>
                        <li>Repos privés gratuits pour les petites équipes.</li>
                        <li>Interface claire et bonne gestion des pull requests.</li>
                        <li>Support Mercurial (historiquement) en plus de Git (abandonné depuis 2020).</li>
                    </ul>
                </div>
                <div class="list-container">
                    <h4 class="red">Inconvénients</h4>
                    <ul class="cons-list">
                        <li>Moins populaire que GitHub ou GitLab.</li>
                        <li>Interface un peu moins fluide dans certains cas.</li>
                        <li>Dépendance à l'écosystème Atlassian (si utilisé avec d'autres outils).</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="jiraModal" tabindex="-1" aria-labelledby="jiraModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="jiraModalLabel">Jira : Présentation, Avantages et Inconvénients</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Jira est un outil de gestion de projet et de suivi des bugs, développé par Atlassian, souvent utilisé pour les méthodes agiles.</p>
                <div class="list-container">
                    <h4 class="green">Avantages</h4>
                    <ul class="pros-list">
                        <li>Très flexible et personnalisable.</li>
                        <li>Intégration facile avec d'autres outils Atlassian.</li>
                        <li>Gestion efficace des tâches et des workflows.</li>
                    </ul>
                </div>
                <div class="list-container">
                    <h4 class="red">Inconvénients</h4>
                    <ul class="cons-list">
                        <li>Courbe d'apprentissage élevée.</li>
                        <li>Coût élevé pour les grandes équipes.</li>
                        <li>Peut devenir complexe avec trop de personnalisations.</li>
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

    .video-frame {
        width: 90vw;
        max-height: 90vh;
        border-radius: 12px;
        box-shadow: 0 0 25px rgba(255, 255, 255, 0.2);
        margin-left: 4vw;
        background-color: #000;
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