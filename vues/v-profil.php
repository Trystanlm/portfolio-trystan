<div class="container competences my-5 text-white">
    <!-- À propos de moi -->
    <h4 class="mb-3">À PROPOS DE MOI <br>____</h4>
    <p>
        Je m’appelle Trystan Le Marec, âgé de 19 ans et actuellement étudiant à Tours, en deuxième année de BTS SIO spécialité SLAM.
        J’ai toujours été attiré par l’informatique et les nouvelles technologies. C’est tout naturellement que je me suis tourné vers ce secteur d’études.
    </p>
    <div class="d-flex gap-3 mb-4 flex-wrap">
        <a href="./assets/documents/cv.pdf" class="btn-cv" target="_blank">
            Télécharger mon CV
        </a>

        <button onclick="openModal('cv')" class="btn btn-outline-danger d-flex align-items-center gap-2">
            <i class="bi bi-eye"></i>
        </button>
    </div>


    <!-- Expériences professionnelles -->
    <h4 class="mt-5 mb-3">EXPÉRIENCES PROFESSIONNELLES<br>____</h4>
    <p>
        J’ai eu l’opportunité d’effectuer deux stages en milieu professionnel, dans différentes entreprises, disposant d’un service informatique.
        Les études que j’ai entreprises répondent à une passion et à un réel intérêt pour l’innovation informatique et technologique.
    </p>

    <!-- Qualités -->
    <div class="row text-center my-5">
        <div class="col-md-4 mb-4">
            <div class="p-4 bg-secondary bg-opacity-10 rounded-3 shadow-sm border">
                <i class="bi bi-layers fs-1"></i>
                <h5 class="mt-3">Minutieux</h5>
                <p>Prendre le temps pour mettre en place une solution et n’oublier aucun détail</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="p-4 bg-secondary bg-opacity-10 rounded-3 shadow-sm border">
                <i class="bi bi-arrow-up fs-1"></i>
                <h5 class="mt-3">Rigoureux</h5>
                <p>Il est important d’être rigoureux afin de fournir un travail sérieux et complet</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="p-4 bg-secondary bg-opacity-10 rounded-3 shadow-sm border">
                <i class="bi bi-eye fs-1"></i>
                <h5 class="mt-3">Curieux</h5>
                <p>Il est important de rester curieux pour rester informé des dernières nouveautés</p>
            </div>
        </div>
    </div>

    <div class="container my-5 text-white">
        <h4 class="mb-4">COMPÉTENCES<br>____</h4>
        <div class="row g-4">

            <!-- Carte 1 : Développement Web -->
            <div class="col-md-4">
                <div class="flip-card h-100">
                    <div class="flip-card-inner h-100">
                        <div class="flip-card-front card text-white bg-secondary bg-opacity-10 h-100 p-4 text-center border rounded-3">
                            <i class="bi bi-code-slash fs-2"></i>
                            <h5 class="mt-3">Développement Web</h5>
                            <p>HTML, CSS, JS, PHP, React</p>
                        </div>
                        <div class="flip-card-back card text-white bg-dark h-100 p-4 border rounded-3">
                            <h5 class="mb-3 comptxt">Détails</h5>
                            <ul class="list-unstyled">
                                <li>✔ HTML5 / CSS3</li>
                                <li>✔ JavaScript vanilla</li>
                                <li>✔ PHP procédural & POO</li>
                                <li>✔ Responsive design (Bootstrap)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carte 2 : Base de données -->
            <div class="col-md-4">
                <div class="flip-card h-100">
                    <div class="flip-card-inner h-100">
                        <div class="flip-card-front card text-white bg-secondary bg-opacity-10 h-100 p-4 text-center border rounded-3">
                            <i class="bi bi-database fs-2"></i>
                            <h5 class="mt-3">Base de données</h5>
                            <p>SQL, MySQL, SQLServer</p>
                        </div>
                        <div class="flip-card-back card text-white bg-dark h-100 p-4 border rounded-3">
                            <h5 class="mb-3 comptxt">Détails</h5>
                            <ul class="list-unstyled">
                                <li>✔ Requêtes SQL (jointures, sous-requêtes)</li>
                                <li>✔ MariaDB, SQLServer, SQLite</li>
                                <li>✔ Conception MCD/MLD</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carte 3 : POO -->
            <div class="col-md-4">
                <div class="flip-card h-100">
                    <div class="flip-card-inner h-100">
                        <div class="flip-card-front card text-white bg-secondary bg-opacity-10 h-100 p-4 text-center border rounded-3">
                            <i class="bi bi-diagram-3 fs-2"></i>
                            <h5 class="mt-3">Programmation Orientée Objet</h5>
                            <p>C# / Java</p>
                        </div>
                        <div class="flip-card-back card text-white bg-dark h-100 p-4 border rounded-3">
                            <h5 class="mb-3 comptxt">Détails</h5>
                            <ul class="list-unstyled">
                                <li>✔ Classes, objets, constructeurs</li>
                                <li>✔ Encapsulation, héritage</li>
                                <li>✔ MVC (structure de projet)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carte 4 : Frameworks -->
            <div class="col-md-4">
                <div class="flip-card h-100">
                    <div class="flip-card-inner h-100">
                        <div class="flip-card-front card text-white bg-secondary bg-opacity-10 h-100 p-4 text-center border rounded-3">
                            <i class="bi bi-layers fs-2"></i>
                            <h5 class="mt-3">Frameworks</h5>
                            <p>CodeIgniter, PDO Php, Bootstrap</p>
                        </div>
                        <div class="flip-card-back card text-white bg-dark h-100 p-4 border rounded-3">
                            <h5 class="mb-3 comptxt">Détails</h5>
                            <ul class="list-unstyled">
                                <li>✔ CodeIgniter</li>
                                <li>✔ PDO PHP</li>
                                <li>✔ Bootstrap 5 (UI responsive)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carte 5 : API & Webservices -->
            <div class="col-md-4">
                <div class="flip-card h-100">
                    <div class="flip-card-inner h-100">
                        <div class="flip-card-front card text-white bg-secondary bg-opacity-10 h-100 p-4 text-center border rounded-3">
                            <i class="bi bi-plug fs-2"></i>
                            <h5 class="mt-3">API & Webservices</h5>
                            <p>REST / JSON / AJAX</p>
                        </div>
                        <div class="flip-card-back card text-white bg-dark h-100 p-4 border rounded-3">
                            <h5 class="mb-3 comptxt">Détails</h5>
                            <ul class="list-unstyled">
                                <li>✔ Création d'API REST (PHP/JSON)</li>
                                <li>✔ Requêtes AJAX</li>
                                <li>✔ Création de Web Services Java</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carte 6 : Versioning -->
            <div class="col-md-4">
                <div class="flip-card h-100">
                    <div class="flip-card-inner h-100">
                        <div class="flip-card-front card text-white bg-secondary bg-opacity-10 h-100 p-4 text-center border rounded-3">
                            <i class="bi bi-git fs-2"></i>
                            <h5 class="mt-3">Versioning</h5>
                            <p>Git / GitHub</p>
                        </div>
                        <div class="flip-card-back card text-white bg-dark h-100 p-4 border rounded-3">
                            <h5 class="mb-3 comptxt">Détails</h5>
                            <ul class="list-unstyled">
                                <li>✔ Git CLI (init, commit, push)</li>
                                <li>✔ GitHub / GitLab / BitBucket</li>
                                <li>✔ Jira</li>
                                <li>✔ Branches / merges / pull requests</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


</div>
<div id="cv" class="modal">
    <span class="close" onclick="closeModal('cv')">&times;</span>
    <img class="modal-content" src="./assets/img/cv.png" alt="Certificat Anssi">
</div>
<style>
    .modal {
        display: none;
        position: fixed;
        z-index: 999;
        padding-top: 60px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.8);
        backdrop-filter: blur(4px);
    }

    .modal-content {
        display: block;
        margin: auto;
        width: auto;
        height: auto;
        max-width: 90vw;
        max-height: 90vh;
        object-fit: contain;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.6);
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

    .comptxt,
    .competences i,
    h3,
    h4,
    h2,
    h1 {
        color: #FF5A5A;
    }


    .btn-cv {
        display: inline-block;
        padding: 10px 20px;
        background-color: #e63946;
        /* rouge clair pour s'accorder au thème */
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .btn-cv:hover {
        background-color: #d62828;
    }


    .flip-card {
        perspective: 1000px;
        height: 100%;
        position: relative;
        min-height: 220px;
    }

    .flip-card-inner {
        width: 100%;
        height: 100%;
        transition: transform 0.6s;
        transform-style: preserve-3d;
        position: relative;
        min-height: 220px;
    }

    .flip-card:hover .flip-card-inner {
        transform: rotateY(180deg);
    }

    .flip-card-front,
    .flip-card-back {
        position: absolute;
        top: 0;
        left: 0;
        backface-visibility: hidden;
        width: 100%;
        height: 100%;
    }

    .flip-card-back {
        transform: rotateY(180deg);
    }
</style>
<script>
    function openModal(id) {
        document.getElementById(id).style.display = "block";
    }

    function closeModal(id) {
        document.getElementById(id).style.display = "none";
    }
</script>