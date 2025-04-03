<div class="container my-5 text-white">
    <h2 class="text-gradient text-center mb-4">Veille Technologique – Java</h2>

    <!-- Définition -->
    <section class="mb-5">
        <h4 class="text-gradient mb-3">Qu’est-ce que la veille technologique ?</h4>
        <p>
            La veille technologique est un processus de collecte continue d’informations sur les avancées techniques, les outils, les langages ou les tendances dans un domaine précis. Elle permet de rester à jour, d’anticiper les évolutions et de s’adapter aux nouvelles technologies.
        </p>
    </section>
    <img src="./assets/img/cycle-veille.png" class="rounded mx-auto d-block" width="40%" height="40%">


    <!-- Ton projet -->
    <section class="mb-5">
        <h4 class="text-gradient mb-3">Outils mis en place</h4>
        <p>
            J'ai tout d'abord décider de choisir <strong>Java</strong> comme thème de veille
        </p>
        <div class="row g-4">

            <!-- BotFather -->
            <div class="col-md-4">
                <div class="card bg-secondary bg-opacity-10 h-100 text-center border rounded-4 shadow-sm p-4">
                    <div class="icon-circle mb-3">
                        <i class="bi bi-robot fs-1 text-danger"></i>
                    </div>
                    <h5 class="text-danger mb-3">BotFather<br>________</h5>
                    <p>BotFather permet de créer et gérer des bots Telegram. Il m’a servi à générer un token pour connecter mon bot à l’API Telegram.</p>
                </div>
            </div>

            <!-- Python -->
            <div class="col-md-4">
                <div class="card bg-secondary bg-opacity-10 h-100 text-center border rounded-4 shadow-sm p-4">
                    <div class="icon-circle mb-3">
                        <i class="bi bi-code-slash fs-1 text-danger"></i>
                    </div>
                    <h5 class="text-danger mb-3">Python<br>________</h5>
                    <p>Le bot est codé en Python. Il utilise des bibliothèques comme <code>feedparser</code> pour lire les flux RSS, et <code>requests</code> pour envoyer des messages.</p>
                </div>
            </div>

            <!-- Telegram -->
            <div class="col-md-4">
                <div class="card bg-secondary bg-opacity-10 h-100 text-center border rounded-4 shadow-sm p-4">
                    <div class="icon-circle mb-3">
                        <i class="bi bi-telegram fs-1 text-danger"></i>
                    </div>
                    <h5 class="text-danger mb-3">Telegram<br>________</h5>
                    <p>Telegram reçoit automatiquement les actualités liées à Java via le bot. Cela me permet de suivre les nouveautés directement sur mon smartphone et de les partager aux autres personnes de mon canal</p>
                </div>
            </div>

        </div>
    </section>

    <!-- Articles -->
    <section>
        <h4 class="text-gradient mb-3">L'évolution de ma veille</h4>
        <div class="accordion accordion-flush" id="veilleAccordion">

            <!-- Article 1 -->
            <div class="accordion-item bg-dark text-white border-secondary rounded-3 mb-3">
                <h2 class="accordion-header" id="heading1">
                    <button class="accordion-button collapsed bg-secondary bg-opacity-25 text-danger fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
                        09/2023 : Sortie de Java 23 – Nouvelles fonctionnalités clés
                    </button>
                </h2>
                <div id="collapse1" class="accordion-collapse collapse" data-bs-parent="#veilleAccordion">
                    <div class="accordion-body d-flex flex-column flex-md-row gap-4 align-items-center">
                        <img src="./assets/img/java.png" class="rounded-3" style="max-width: 250px;" alt="Java 23">
                        <div>
                            <p>Java 23 introduit 12 nouvelles fonctionnalités (JEP), avec des améliorations de performance, de sécurité, et l’intégration de Graal JIT. Idéal pour les applis modernes.</p>
                            <a href="https://www.oracle.com/ca-fr/news/announcement/oracle-releases-java-23-2024-09-17/" class="text-decoration-none text-danger" target="_blank">
                                <i class="bi bi-box-arrow-up-right me-1"></i>Voir l’article
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Article 2 -->
            <div class="accordion-item bg-dark text-white border-secondary rounded-3 mb-3">
                <h2 class="accordion-header" id="heading2">
                    <button class="accordion-button collapsed bg-secondary bg-opacity-25" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
                        03/2024 : Java 24 – Performances et consommation mémoire améliorées
                    </button>
                </h2>
                <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#veilleAccordion">
                    <div class="accordion-body d-flex flex-column flex-md-row gap-4 align-items-center">
                        <img src="./assets/img/java.png" class="rounded-3" style="max-width: 250px;" alt="Java 24">
                        <div>
                            <p>Java 24 améliore la vitesse d'exécution, réduit la mémoire utilisée et optimise les performances cloud. Une version axée sur la productivité des développeurs.</p>
                            <a href="https://www.sqli.com/fr-fr/insights-news/blog/java-24" class="text-decoration-none text-danger" target="_blank">
                                <i class="bi bi-box-arrow-up-right me-1"></i>Voir l’article
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Article 3 -->
            <div class="accordion-item bg-dark text-white border-secondary rounded-3 mb-3">
                <h2 class="accordion-header" id="heading3">
                    <button class="accordion-button collapsed bg-secondary bg-opacity-25" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">
                        09/2024 : Java 23 – Aperçu des fonctionnalités en profondeur
                    </button>
                </h2>
                <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#veilleAccordion">
                    <div class="accordion-body d-flex flex-column flex-md-row gap-4 align-items-center">
                        <img src="./assets/img/java.png" class="rounded-3" style="max-width: 250px;" alt="Java 23 détail">
                        <div>
                            <p>Retour détaillé sur Java 23 : matching de types primitifs, JavaDoc en Markdown, API Vector. Fonctionnalités innovantes encore en preview.</p>
                            <a href="https://www.loicmathieu.fr/wordpress/informatique/java-23-quoi-de-neuf/" class="text-decoration-none text-danger" target="_blank">
                                <i class="bi bi-box-arrow-up-right me-1"></i>Voir l’article
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Article 4 -->
            <div class="accordion-item bg-dark text-white border-secondary rounded-3 mb-3">
                <h2 class="accordion-header" id="heading4">
                    <button class="accordion-button collapsed bg-secondary bg-opacity-25" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4">
                        03/2025 : Java 24 – Plus de 20 nouvelles fonctionnalités orientées IA
                    </button>
                </h2>
                <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#veilleAccordion">
                    <div class="accordion-body d-flex flex-column flex-md-row gap-4 align-items-center">
                        <img src="./assets/img/java.png" class="rounded-3" style="max-width: 250px;" alt="Java 24 IA">
                        <div>
                            <p>Oracle sort Java 24 avec intégration d’outils pour l’intelligence artificielle, cryptographie post-quantique et performances améliorées. Une version tournée vers l’avenir.</p>
                            <a href="https://www.oracle.com/news/announcement/oracle-releases-java-24-2025-03-18/" class="text-decoration-none text-danger" target="_blank">
                                <i class="bi bi-box-arrow-up-right me-1"></i>Voir l’article
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Article 5 -->
            <div class="accordion-item bg-dark text-white border-secondary rounded-3 mb-3">
                <h2 class="accordion-header" id="heading5">
                    <button class="accordion-button collapsed bg-secondary bg-opacity-25" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5">
                        04/2025 : Java 25 – Fonctionnalités attendues et suppression du 32 bits
                    </button>
                </h2>
                <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#veilleAccordion">
                    <div class="accordion-body d-flex flex-column flex-md-row gap-4 align-items-center">
                        <img src="./assets/img/java.png" class="rounded-3" style="max-width: 250px;" alt="Java 25">
                        <div>
                            <p>Le JDK 25 prévoit l’arrêt du support pour le 32-bit, l’intégration de fonctionnalités preview du JDK 24, et marque la prochaine version LTS. Java entre dans une nouvelle ère.</p>
                            <a href="https://www.infoworld.com/article/3846172/jdk-25-the-new-features-in-java-25.html" class="text-decoration-none text-danger" target="_blank">
                                <i class="bi bi-box-arrow-up-right me-1"></i>Voir l’article
                            </a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
</div>

<style>
    p {
        color: white;
    }

    .accordion-item {
        margin-bottom: 10px;
        /* espace entre les cartes */
        border-radius: 10px;
        overflow: hidden;
        /* pour que le collapse respecte le border-radius */
        border: 1px solid rgba(255, 255, 255, 0.1);
        /* bord discret */
    }

    .accordion-button {
        border-radius: 0;
        /* par défaut */
        background-color: rgba(255, 255, 255, 0.05);
        color: #fff;
    }

    .accordion-button:not(.collapsed) {
        background-color: rgba(255, 90, 90, 0.1);
        color: #ff5a5a;
    }

    .accordion-body {
        background-color: rgba(255, 255, 255, 0.02);
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        padding: 1.25rem;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
    }
</style>