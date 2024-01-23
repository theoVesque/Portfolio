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
    <title>Théo Vesque - Projets - Site pour Robindesbus</title>
    <meta name="description" content="Présentation du site internet réalisé pour l'association Robindesbus, pendant mon stage de deuxième année de BUT Informatique.">
    <link rel="stylesheet" href="/src/assets/css/projets_details.css">
    <link rel="stylesheet" href="/src/assets/css/gen.css">
    <link rel="shortcut icon" href="/src/assets/images/favicon_io/favicon.ico" type="image/x-icon">
    <script defer src="/src/assets/js/projets_details.js"></script>
</head>

<body>
    <div id="div_titre_boutonFermer">
        <div>
            <h1 id="titre">Site pour Robindesbus</h1>
            <hr class="sep" />
        </div>
        <form action="/src/pages/projets.php">
            <button type=" submit" type="button" class="btn-close">
                <span class="icon-cross"></span>
            </button>
        </form>
    </div>

    <div class="etiquettes_projets_languages">
        <h3>PHP</h3>
        <h3>JavaScript</h3>
        <h3>SQL</h3>
        <h3>Javascript</h3>
    </div>
    <div id=textBio_CV>
        <p id="text_bio" class="text_bio-page-robindesbus">Au cours de ma deuxième année d'études en informatique, j'ai eu l'opportunité enrichissante de réaliser un stage au sein de Robindesbus, une association spécialisée dans les transports en bus à travers la France et l'Europe.<br><br>Mon principal accomplissement au cours de ce stage a été la conception et le développement du site internet de Robindesbus. Mon objectif était de créer une plateforme dynamique et conviviale permettant aux clients de demander des devis de manière traditionnelle via un formulaire, ou de manière instantanée pour une réponse immédiate.<br><br>J'ai mis en œuvre mes compétences en programmation en utilisant des langages tels que PHP, JavaScript, HTML et CSS pour donner vie à cette plateforme interactive. Le recours à GIT a assuré une gestion efficace du code source, garantissant sa stabilité et facilitant la collaboration.</p>
    </div>

    <carousel id="carousel-robindesbus">
        <input type="radio" id="page1cb" checked name="pages" />
        <label for="page1cb">1</label>
        <input type="radio" id="page2cb" name="pages" />
        <label for="page2cb">2</label>
        <input type="radio" id="page3cb" name="pages" />
        <label for="page3cb">3</label>
        <input type="radio" id="page4cb" name="pages" />
        <label for="page4cb">4</label>
        <!-- page 1 -->
        <page id="page1">
            <div><img src="/src/assets/images/projets/robindesbus1.png" alt="image du site de Robindesbus"></div>
            <label for="page2cb" title="Suivant"><b>Suivant</b></label>
        </page>
        <!-- page 2 -->
        <page id="page2">
            <div><img src="/src/assets/images/projets/robindesbus2.png" alt="image du site de Robindesbus"></div>
            <label for="page3cb" title="Suivant"><b>Suivant</b></label>
        </page>
        <!-- page 3 -->
        <page id="page3">
            <div><img src="/src/assets/images/projets/robindesbus3.png" alt="image du site de Robindesbus"></div>
            <label for="page4cb" title="Suivant"><b>Suivant</b></label>
        </page>
        <!-- page 4 -->
        <page id="page4">
            <div><img src="/src/assets/images/projets/robindesbus4.png" alt="image du site de Robindesbus"></div>
            <label for="page1cb" title="Suivant"><b>Suivant</b></label>
        </page>
        </page>
    </carousel>


    <?php
    include '../../includes/header.html';
    ?>
</body>

</html>