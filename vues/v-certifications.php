<div class="container mt-5">
    <h1 class="text-center text-gradient mb-4">Certifications</h1>
    <h3>Certifications obtenues durant le BTS SIO <br> _____</h3>
    <p>Au cours de mes deux années de BTS Services Informatiques aux Organisations (SIO), j’ai eu l’opportunité de passer plusieurs certifications professionnelles. Celles-ci visent à renforcer mes compétences techniques, à valider mes acquis et à me préparer aux exigences du monde professionnel.

        Ces certifications couvrent des domaines clés de l’informatique, tels que la cybersécurité, la programmation, la gestion de projet ou encore les bonnes pratiques IT. Elles témoignent de mon engagement dans une démarche de professionnalisation continue et viennent compléter la formation théorique dispensée en BTS.

        L’obtention de ces certifications me permet d'attester de mes compétences sur des outils, technologies ou méthodologies reconnus dans le secteur, et d’enrichir mon profil technique en vue d'une insertion rapide et efficace dans le monde du travail.</p>
    <h3>Mon parcours<br> _____</h3>
    <div class="timeline">
        <div class="timeline-item left">
            <div class="timeline-content">
                <h3>Certification ANSSI – SecNumAcadémie</h3>
                <p>Formation en cybersécurité délivrée par l'ANSSI<br>_______<br> Septembre - 2023</p>
                <button class="btn-certificate" onclick="openModal('certif-anssi')">Voir le certificat</button>

            </div>
        </div>

        <div class=" timeline-item right">
            <div class="timeline-content">
                <h3>Certification HTML/CSS</h3>
                <p>Création d'un site web avec HTML / CSS <br>_______<br>Decembre - 2023</p>
                <button class="btn-certificate" onclick="openModal('certif-htmlcss')">Voir le certificat</button>
            </div>
        </div>

        <div class="timeline-item left">
            <div class="timeline-content">
                <h3>Certification Javascript</h3>
                <p> Les bases du langage de programmation JavaScript : sa syntaxe, sa logique de programmation…<br>_______<br>Février - 2024</p>
                <button class="btn-certificate" onclick="openModal('certif-javascript')">Voir le certificat</button>
            </div>
        </div>

    </div>

</div>

<div id="certif-anssi" class="modal">
    <span class="close" onclick="closeModal('certif-anssi')">&times;</span>
    <img class="modal-content" src="./assets/img/certifications/certif_anssi.png" alt="Certificat Anssi">
</div>
<div id="certif-htmlcss" class="modal">
    <span class="close" onclick="closeModal('certif-htmlcss')">&times;</span>
    <img class="modal-content" src="./assets/img/certifications/certif_html_css.png" alt="Certificat Anssi">
</div>
<div id="certif-javascript" class="modal">
    <span class="close" onclick="closeModal('certif-javascript')">&times;</span>
    <img class="modal-content" src="./assets/img/certifications/certif_javascript.png" alt="Certificat Anssi">
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

    h3 {
        color: #FF842D;
        font-weight: bold;
        margin-top: 50px;
        margin-bottom: 20px;
    }

    .timeline {
        position: relative;
        max-width: 1000px;
        margin: auto;
    }

    .timeline::after {
        content: '';
        position: absolute;
        width: 4px;
        background: linear-gradient(to bottom, #FF5A5A, #FF9966);
        top: 0;
        bottom: 0;
        left: 50%;
        margin-left: -2px;
    }

    .timeline-item {
        padding: 20px 40px;
        position: relative;
        width: 50%;
    }

    .timeline-item::after {
        content: "";
        position: absolute;
        width: 20px;
        height: 20px;
        top: 30px;
        right: -10px;
        background-color: #111;
        border-radius: 50%;
        z-index: 2;
    }

    .timeline-item::before {
        content: "";
        position: absolute;
        width: 28px;
        height: 28px;
        top: 26px;
        right: -14px;
        background: linear-gradient(to right, #FF5A5A, #FF9966);
        border-radius: 50%;
        z-index: 1;
    }


    .left {
        left: 0;
    }

    .right {
        left: 50%;
    }

    .right::before {
        left: -14px;
        right: auto;
    }

    .right::after {
        left: -10px;
        right: auto;
    }


    .timeline-content {
        background-color: #fff;
        color: #111;
        padding: 20px;
        border-radius: 8px;
        position: relative;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.3);
    }

    .timeline-content h3 {
        margin-top: 0;
        color: #ff6a00;
    }

    .btn-certificate {
        margin-top: 15px;
        display: inline-block;
        padding: 8px 16px;
        background-color: #007bff;
        color: white;
        text-decoration: none;
        border-radius: 4px;
        font-weight: bold;
        font-size: 14px;
        transition: background-color 0.3s ease;
    }

    .btn-certificate:hover {
        background-color: #0056b3;
    }

    @media screen and (max-width: 768px) {
        .timeline::after {
            left: 20px;
        }

        .timeline-item {
            width: 100%;
            padding-left: 60px;
            padding-right: 25px;
        }

        .timeline-item::after {
            left: 8px;
        }

        .right {
            left: 0%;
        }

        .right::after {
            left: 8px;
        }
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