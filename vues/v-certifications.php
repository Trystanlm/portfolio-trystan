<div class="container mt-5">
    <h1 class="text-center text-gradient mb-4">Certifications</h1>
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
                <h3>Certification Java</h3>
                <p>Les bases du langage de programmation Java<br>_______<br>Octobre - 2023</p>
                <button class="btn-certificate" onclick="openModal('certif-java')">Voir le certificat</button>
            </div>
        </div>

        <div class="timeline-item left">
            <div class="timeline-content">
                <h3>Certification Python</h3>
                <p> Les bases du langage de programmation Python : sa syntaxe, sa logique de programmation…<br>_______<br>Novembre - 2023</p>
                <button class="btn-certificate" onclick="openModal('certif-python')">Voir le certificat</button>
            </div>
        </div>


        <div class=" timeline-item right">
            <div class="timeline-content">
                <h3>Certification HTML/CSS</h3>
                <p>Création d'un site web avec HTML / CSS <br>_______<br>Janvier - 2024</p>
                <button class="btn-certificate" onclick="openModal('certif-htmlcss')">Voir le certificat</button>
            </div>
        </div>

        <div class="timeline-item left">
            <div class="timeline-content">
                <h3>Certification Javascript</h3>
                <p> Les bases du langage de programmation JavaScript : sa syntaxe, sa logique de programmation…<br>_______<br>Mars - 2024</p>
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
    <img class="modal-content" src="./assets/img/certifications/certif_html_css.png" alt="Certificat HTML CSS">
</div>
<div id="certif-javascript" class="modal">
    <span class="close" onclick="closeModal('certif-javascript')">&times;</span>
    <img class="modal-content" src="./assets/img/certifications/certif_javascript.png" alt="Certificat Javascript">
</div>
<div id="certif-java" class="modal">
    <span class="close" onclick="closeModal('certif-java')">&times;</span>
    <img class="modal-content" src="./assets/img/certifications/certif_java.png" alt="Certificat Java">
</div>
<div id="certif-python" class="modal">
    <span class="close" onclick="closeModal('certif-python')">&times;</span>
    <img class="modal-content" src="./assets/img/certifications/certif_python.png" alt="Certificat Python">
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