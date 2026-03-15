<h1 class="text-center p-4 text-gradient">Me contacter</h1>

<div class="container bordered-container">
    <div class="row justify-content-center g-4">

        <div class="col-md-4 text-center">
            <div class="contact-card">
                <i class="bi bi-envelope-fill contact-icon"></i>
                <p class="contact-label">Email</p>
                <a href="mailto:trystan5lemarec@gmail.com" class="contact-value">trystan5lemarec@gmail.com</a>
            </div>
        </div>

        <div class="col-md-4 text-center">
            <div class="contact-card">
                <i class="bi bi-telephone-fill contact-icon"></i>
                <p class="contact-label">Téléphone</p>
                <a href="tel:+33627787882" class="contact-value">06 27 78 78 82</a>
            </div>
        </div>

        <div class="col-md-4 text-center">
            <div class="contact-card">
                <i class="bi bi-linkedin contact-icon"></i>
                <p class="contact-label">LinkedIn</p>
                <a href="https://www.linkedin.com/in/trystan-le-marec-b09021311/" target="_blank" class="contact-value">Trystan Le Marec</a>
            </div>
        </div>

    </div>
</div>

<style>
    .bordered-container {
        width: 85%;
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 16px;
        padding: 50px 40px;
        background-color: rgba(255, 255, 255, 0.02);
        box-shadow: 0 0 30px rgba(255, 255, 255, 0.05);
    }

    .contact-card {
        background-color: rgba(255, 255, 255, 0.04);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 12px;
        padding: 30px 20px;
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .contact-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 6px 20px rgba(255, 90, 90, 0.15);
    }

    .contact-icon {
        font-size: 2rem;
        background: linear-gradient(90deg, #FF5A5A, #FF9966);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .contact-label {
        color: rgba(255, 255, 255, 0.5);
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        margin: 10px 0 6px;
    }

    .contact-value {
        color: #fff;
        text-decoration: none;
        font-size: 0.95rem;
        word-break: break-word;
        transition: color 0.2s;
    }

    .contact-value:hover {
        color: #FF9966;
    }
</style>
