<h1 class="text-center p-4 text-gradient">Me contactez</h1>

<div class="container bordered-container">
    <form method="POST" action="?uc=formulaireSend">
        <div class="row justify-content-center">
            <div class="col-md-6 mb-3">
                <label class="form-label text-white" for="prenom">Prénom</label>
                <input id="prenom" class="form-control custom-input" name="prenom" type="text" required>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 mb-3">
                <label class="form-label text-white" for="nom">Nom</label>
                <input id="nom" class="form-control custom-input" name="nom" type="text" required>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 mb-3">
                <label class="form-label text-white" for="message">Message</label>
                <textarea id="message" class="form-control custom-input" name="message" rows="6" required></textarea>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 text-center">
                <button class="btn btn-gradient w-100 py-2" type="submit" name="envoyer">Envoyer</button>
            </div>
        </div>
    </form>
</div>

<style>
    .bordered-container {
        width: 75%;
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 16px;
        padding: 40px;
        background-color: rgba(255, 255, 255, 0.02);
        box-shadow: 0 0 30px rgba(255, 255, 255, 0.05);
    }

    .custom-input {
        background-color: rgba(255, 255, 255, 0.07);
        border: 1px solid rgba(255, 255, 255, 0.15);
        color: #fff;
        border-radius: 8px;
        transition: 0.3s;
    }

    .custom-input:focus {
        color: white;
        background-color: rgba(255, 255, 255, 0.09);
        border-color: #FF5A5A;
        box-shadow: 0 0 0 0.15rem rgba(255, 90, 90, 0.25);
    }

    .btn-gradient {
        background: linear-gradient(90deg, #FF5A5A, #FF9966, #FF5A5A);
        border: none;
        color: white;
        font-weight: 500;
        border-radius: 8px;
        transition: background 0.3s, transform 0.2s;
    }

    .btn-gradient:hover {
        transform: scale(1.03);
        background: linear-gradient(90deg, #ff7a7a, #ffb580, #ff7a7a);
    }
</style>