<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Portefolio Trystan</title>
    <link rel="icon" href="assets/img/flavicon.ico" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include 'vues/v-nav.php';
    ?>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="container">
        <?php
        if (!isset($_REQUEST['uc'])) {
            $_REQUEST['uc'] = 'accueil';
        }
        $uc = htmlspecialchars($_REQUEST["uc"]);
        switch ($uc) { // On va comparer la variable $uc qui a pour valeur ce qu'on récupère d'une request quand un utilisateur click sur un lien
            case 'contact':
                include 'vues/v-contact.php'; // On inclut la vue de contact
                break;

            case 'profil':
                include 'vues/v-profil.php'; // On inclut la vue de profil
                break;

            case 'bts':
                include 'vues/v-btssio.php'; // On inclut la vue de bts
                break;
            case 'stage':
                include 'vues/v-stage.php'; // On inclut la vue de stage
                break;
            case 'comparatifstage':
                include 'vues/v-comparatif.php'; // On inclut la vue de comparatifstage
                break;
            case 'stage1':
                include 'vues/v-stage1.php'; // On inclut la vue de stage
                break;
            case 'stage2':
                include 'vues/v-stage2.php'; // On inclut la vue de stage
                break;
            case 'documentation':
                include 'vues/v-documentations.php'; // On inclut la vue de documentation
                break;

            case 'situation':
                include 'vues/v-situations.php'; // On inclut la vue de situation
                break;
            case 'veille_techno':
                include 'vues/v-veille.php'; // On inclut la vue de veille_techno
                break;
            case 'accueil':
                include 'vues/v-accueil.php'; // On inclut la vue de l'accueil
                break;
            default:
                include 'vues/v-accueil.php'; // On inclut la vue de l'accueil
                break;
        }
        ?>
    </div>
    <?php
    include 'vues/v-footer.php';
    ?>

    <script src="assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

<style>
    html,
    body {
        background-color: #191919;
        color: #FFF;
        display: flex;
        flex-direction: column;
        height: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
    }

    .container {
        flex: 1;
    }


    main {
        flex: 1;
        /* Prend tout l'espace disponible */
    }
</style>

</html>