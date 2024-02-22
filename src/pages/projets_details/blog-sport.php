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
    <title>Théo Vesque - Projets - Blog de sport</title>
    <meta name="description" content="Présentation d'un site web permettant de gérer son temps au travail grâce à la méthode Pomodoro.">
    <link rel="stylesheet" href="/src/assets/css/projets_details.css">
    <link rel="stylesheet" href="/src/assets/css/gen.css">
    <link rel="shortcut icon" href="/src/assets/images/favicon_io/favicon.ico" type="image/x-icon">
    <script defer src="/src/assets/js/projets_details.js"></script>
</head>

<body>
    <div id="div_titre_boutonFermer">
        <div>
            <h1 id="titre">Blog de sport</h1>
            <a href="https://body-optimum.com/">
                <p>Lien vers le site</p>
            </a>
            <hr class="sep" />
        </div>
        <form action="/src/pages/projets.php">
            <button type=" submit" type="button" class="btn-close">
                <span class="icon-cross"></span>
            </button>
        </form>
    </div>

    <div class="etiquettes_projets_languages">
        <h3>Symfony</h3>
        <h3>Javascript</h3>
        <h3>HTML / CSS</h3>
    </div>
    <div id=textBio_CV>
        <p id="text_bio">Le développement de ce site m'a permis d'apprendee Symfony à travers la création d'un blog de sport interactif. Ce projet m'a permis de maîtriser les fondamentaux du framework tout en créant un site permettant aux utilisateurs d'avoir un espace pour découvrir des articles, des exercices et créer des programmes d'entraînement personnalisés.</p>
    </div>


    <carousel id="carousel-robindesbus">
        <input type="radio" id="page1cb" checked name="pages" />
        <label for="page1cb">1</label>
        <input type="radio" id="page2cb" name="pages" />
        <label for="page2cb">2</label>
        <input type="radio" id="page3cb" name="pages" />
        <label for="page3cb">3</label>

        <!-- page 1 -->
        <page id="page1">
            <div><img src="/src/assets/images/projets/blog_sport1.png" alt="image du site de sport"></div>
            <label for="page2cb" title="Suivant"><b>Suivant</b></label>
        </page>
        <!-- page 2 -->
        <page id="page2">
            <div><img src="/src/assets/images/projets/blog_sport2.png" alt="image du site de sport"></div>
            <label for="page3cb" title="Suivant"><b>Suivant</b></label>
        </page>
        <!-- page 3 -->
        <page id="page3">
            <div><img src="/src/assets/images/projets/blog_sport3.png" alt="image du site de sport"></div>
            <label for="page1cb" title="Suivant"><b>Suivant</b></label>
        </page>
        </page>
    </carousel>



    <?php
    include '../../includes/header.html';
    ?>
</body>

</html>