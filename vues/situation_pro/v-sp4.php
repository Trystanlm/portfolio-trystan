<div class="container bordered-container mt-4">

    <div class="text-center mb-4">
        <img src="./assets/img/seg.png" alt="Logo Sectronic" class="img-fluid" style="max-width: 200px;">
    </div>

    <h1 class="fw-bold text-center mb-4 text-gradient">Gestion des eaux - SEG</h1>
    <h3 class="text-gradient">Contexte</h3>
    <p>
        Le SEG souhaite disposer d’une application web (application « gestconso ») permettant la gestion
        de la consommation d’eau et l’exploitation des données concernant les relevés des compteurs d’eau.<br>
        Par la suite, les agents communaux devront disposer d’une application mobile pour les relevés des
        compteurs d’eau (vannes ou compteurs individuels).
    </p>
    <h3 class="text-gradient">Environnement de développement & Gestion de projet</h3>
    <div class="d-flex justify-content-start gap-3 flex-wrap">
        <img src="./assets/img/netbeans.png" alt="Netbeans logo" class="rounded tech-logo" data-bs-toggle="modal" data-bs-target="#netbeansModal">

        <img src="./assets/img/sqlserver.png" alt="SQLServer logo" class="rounded tech-logo" data-bs-toggle="modal" data-bs-target="#sqlServerModal">
        <img src="./assets/img/hibernate.png" alt="MySQL logo" class="rounded tech-logo" data-bs-toggle="modal" data-bs-target="#hibernateModal">
        <img src="./assets/img/jakarta.png" alt="CodeIgniter logo" class="rounded tech-logo" data-bs-toggle="modal" data-bs-target="#jakartaModal">
        <img src="./assets/img/bitbucket.png" alt="Bitbucket logo" class="rounded tech-logo" data-bs-toggle="modal" data-bs-target="#bitbucketModal">
        <img src="./assets/img/jiraBlanc.png" alt="Jira logo" class="rounded tech-logo" data-bs-toggle="modal" data-bs-target="#jiraModal">
        <img src="./assets/img/junit.png" alt="JUnit logo" class="rounded tech-logo" data-bs-toggle="modal" data-bs-target="#junitModal">
        <img src="./assets/img/glassfish.png" alt="GlassFish logo" class="rounded tech-logo" data-bs-toggle="modal" data-bs-target="#glassfishModal">



    </div>
    <div class="accordion-container">
        <h3 class="text-gradient mb-4">Missions réalisées</h3>
        <div class="accordion-group">
            <button class="accordion">
                Gestion de projet
            </button>
            <div class="panel">
                <p>
                    Ce projet a été réalisé en mode projet en équipe, avec une gestion de version via Bitbucket et un suivi des tâches via Jira. Le développement a été effectué en utilisant Jakarta EE, Hibernate et SQL Server pour la gestion de la base de données.<br>
                    <br>
                    Voici les différentes branches de développement utilisées pour le projet :<br>
                </p>
                <img src="./assets/img/situations/branch_seg.png" alt="Bitbucket" class="img-fluid mb-3">
                <p>
                    Voic une liste des différents commits réalisés sur la branche principale du projet :<br>
                </p>
                <img src="./assets/img/situations/commit_seg.png" alt="Bitbucket" class="img-fluid mb-3">

            </div>
        </div>
        <div class="accordion-group">
            <button class="accordion">Mission 1 : Mise en place des règles métiers et mise en place des tests unitaires</button>
            <div class="panel">
                <p>La première étape a consisté à implémenter les règles métiers en développant les méthodes appropriées au sein des classes métier, conformément aux exigences du SEG. Des tests unitaires ont ensuite été mis en place pour vérifier le bon fonctionnement de ces méthodes et leur conformité aux règles établies.</p>
                </p>
                <p>Voici un extrait des méthodes implémentées présentent dans la classe métier Commune</p>
                <img src="./assets/img/situations/methode_seg.png" alt="Bitbucket" class="img-fluid mb-3">
                <p>Voici un extrait des méthodes implémentées présentent dans la classe métier Compteur</p>
                <img src="./assets/img/situations/methode_seg2.png" alt="Bitbucket" class="img-fluid mb-3">
            </div>
        </div>

        <div class="accordion-group">
            <button class="accordion">Mission 2 : Mise en place des annotations JPA</button>
            <div class="panel">
                <p>Les annotations JPA ont été utilisées pour mapper les classes métier aux tables correspondantes de la base de données.</p>
                <p>Voici un extrait de la classe métier Compteur avec les annotations JPA</p>
                <img src="./assets/img/situations/compteur.png" alt="Bitbucket" class="img-fluid mb-3">
                <p>Voici un extrait de la classe métier Commune avec les annotations JPA</p>
                <img src="./assets/img/situations/commune.png" alt="Bitbucket" class="img-fluid mb-3">
            </div>
        </div>

        <div class="accordion-group">
            <button class="accordion">Mission 3 : Affichage du tableau des relevés pour chaque commune, secteur et compteur</button>
            <div class="panel">
                <p>Un tableau a été conçu pour afficher les anomalies de consommation d’eau par commune, avec la possibilité de naviguer entre les secteurs et les vannes associés à chaque commune.</p>
                <div class="mb-3">
                    <button class="btn-doc" onclick="openModal('m5Video')">
                        Voir la vidéo de rendu
                    </button>
                    <div id="m5Video" class="custom-modal">
                        <span class="close" onclick="closeModal('m5Video')">&times;</span>
                        <video class="video-frame" controls>
                            <source src="./assets/videos/renduanomalie.mp4" type="video/mp4">
                            Votre navigateur ne supporte pas la lecture vidéo.
                        </video>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-group">
            <button class="accordion">Mission 4 : Ajout d'un nouveau compteur</button>
            <div class="panel">
                <p>Un formulaire de création a été développé pour permettre l’ajout d’un compteur Usager ou Vanne et son enregistrement dans la base de données.</p>
                <div class="mb-3">
                    <button class="btn-doc" onclick="openModal('m5Video')">
                        Voir la vidéo de rendu
                    </button>
                    <div id="m5Video" class="custom-modal">
                        <span class="close" onclick="closeModal('m5Video')">&times;</span>
                        <video class="video-frame" controls>
                            <source src="./assets/videos/renduajoutcompt.mp4" type="video/mp4">
                            Votre navigateur ne supporte pas la lecture vidéo.
                        </video>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion-group">
            <button class="accordion">Mission 5 : Déploiement de l'application</button>
            <div class="panel">
                <p>Le déploiement de l’application a été réalisé sur un serveur GlassFish configurer par nos camarades de SISR, permettant ainsi un accès à distance via une URL dédiée.</p>
                <p>
                    La première étape pour le déploiement de l’application a été de créer un fichier WAR (Web Application Archive) à partir du projet Java EE. Ce fichier contient tous les fichiers nécessaires à l’exécution de l’application sur un serveur d’applications Java EE.
                    <br><br>
                    Ensuite, le fichier WAR a été déployé sur le serveur GlassFish. Cela a été réalisé en utilisant l’interface d’administration de GlassFish.
                </p>
            </div>
        </div>

    </div>

    <h3 class="text-gradient mb-4 mt-4">Compétences acquises</h3>
    <div class="competence-table-container">
        <table class="competence-table">
            <thead>
                <tr>
                    <th>SEG - Semestre 4 – Gestion des eaux – Jakarta EE, JSP</th>
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
                    <td class="desc"><span class="blue"> SEG </span> – Implémentation des règles métiers, tests unitaires et persistance des données</td>
                    <td class="x">X</td>
                    <td class="x">X</td>
                    <td></td>
                    <td class="x">X</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="desc"><span class="blue"> SEG </span> – Application web GestConso</td>
                    <td></td>
                    <td class="x">X</td>
                    <td></td>
                    <td class="x">X</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="desc"><span class="blue"> SEG </span> – Déploiement de l’application web sur un serveur de production (GlassFish)</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="x">X</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- Modale JUnit -->
<div class="modal fade" id="junitModal" tabindex="-1" aria-labelledby="junitModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="junitModalLabel">JUnit : Présentation, Avantages et Inconvénients</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <div class="modal-body">
                <p>JUnit est un framework de test unitaire populaire pour le langage Java. Il est largement utilisé pour le développement piloté par les tests (TDD).</p>
                <div class="list-container">
                    <h4 class="green">Avantages</h4>
                    <ul class="pros-list">
                        <li>Facile à intégrer avec les IDE comme Eclipse ou IntelliJ.</li>
                        <li>Supporte l'automatisation des tests et CI/CD.</li>
                        <li>Bonne documentation et large communauté.</li>
                        <li>Compatible avec les autres outils de test Java (Mockito, AssertJ, etc.).</li>
                    </ul>
                </div>
                <div class="list-container">
                    <h4 class="red">Inconvénients</h4>
                    <ul class="cons-list">
                        <li>Spécifique au langage Java.</li>
                        <li>La version 5 (JUnit Jupiter) peut introduire de la complexité par rapport aux versions antérieures.</li>
                        <li>Peut nécessiter des bibliothèques supplémentaires pour les tests avancés.</li>
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
<!-- Modale Jakarta EE -->
<div class="modal fade" id="jakartaModal" tabindex="-1" aria-labelledby="jakartaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="jakartaModalLabel">Jakarta EE : Présentation, Avantages et Inconvénients</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Jakarta EE (anciennement Java EE) est un ensemble de spécifications pour le développement d'applications d'entreprise en Java, maintenu par la Eclipse Foundation.</p>
                <div class="list-container">
                    <h4 class="green">Avantages</h4>
                    <ul class="pros-list">
                        <li>Standard ouvert, soutenu par une large communauté.</li>
                        <li>Compatible avec de nombreux serveurs (Payara, WildFly, etc.).</li>
                        <li>Composants réutilisables (JPA, CDI, EJB...).</li>
                    </ul>
                </div>
                <div class="list-container">
                    <h4 class="red">Inconvénients</h4>
                    <ul class="cons-list">
                        <li>Peut être lourd pour de petites applications.</li>
                        <li>Courbe d’apprentissage parfois élevée.</li>
                        <li>Moins populaire que Spring dans l’écosystème Java.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modale Hibernate -->
<div class="modal fade" id="hibernateModal" tabindex="-1" aria-labelledby="hibernateModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="hibernateModalLabel">Hibernate : Présentation, Avantages et Inconvénients</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Hibernate est un ORM (Object-Relational Mapping) pour Java, qui permet de manipuler les bases de données relationnelles via des objets Java.</p>
                <div class="list-container">
                    <h4 class="green">Avantages</h4>
                    <ul class="pros-list">
                        <li>Réduit la quantité de code SQL.</li>
                        <li>Support des transactions, cache et lazy loading.</li>
                        <li>Indépendant du SGBD (supporte MySQL, PostgreSQL, Oracle...)</li>
                    </ul>
                </div>
                <div class="list-container">
                    <h4 class="red">Inconvénients</h4>
                    <ul class="cons-list">
                        <li>Peut générer des requêtes inefficaces.</li>
                        <li>Debug parfois difficile.</li>
                        <li>Configuration initiale complexe.</li>
                    </ul>
                </div>
            </div>
        </div>
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

    .video-frame {
        width: 90vw;
        max-height: 90vh;
        border-radius: 12px;
        box-shadow: 0 0 25px rgba(255, 255, 255, 0.2);
        margin-left: 4vw;
        background-color: #000;
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