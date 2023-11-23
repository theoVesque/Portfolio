<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VW89VJTP7E"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-VW89VJTP7E');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Théo Vesque - Projets - Timer pomodoro</title>
    <meta name="description" content="Présentation d'un site web permettant de gérer son temps au travail grâce à la méthode Pomodoro.">
    <link rel="stylesheet" href="/src/assets/css/projets_details.css">
    <link rel="stylesheet" href="/src/assets/css/gen.css">
    <link rel="shortcut icon" href="/src/assets/images/favicon_io/favicon.ico" type="image/x-icon">
    <script defer src="/src/assets/js/projets_details.js"></script>
</head>

<body>
    <div id="div_titre_boutonFermer">
        <div>
            <h1 id="titre">Timer pomodoro</h1>
            <hr class="sep" />
        </div>
        <form action="/src/pages/projets.php">
            <button type=" submit" type="button" class="btn-close">
                <span class="icon-cross"></span>
            </button>
        </form>
    </div>

    <div class="etiquettes_projets_languages">
        <h3>HTML</h3>
        <h3>CSS</h3>
        <h3>Javascript</h3>
    </div>
    <div id=textBio_CV>
        <p id="text_bio">Projet en cours de création.</p>
    </div>




    <?php
    include '../../includes/header.html';
    ?>
</body>

</html>