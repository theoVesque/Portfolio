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
    <title>Théo Vesque - Projets - Application web pour étudiants infirmiers</title>
    <meta name="description" content="Présentation d'un projet réalisation au cours de ma troisième année de mon cursus scolaire qui est un réseau social permettant le partage et l'échange de modèles 3D">
    <link rel="stylesheet" href="/src/assets/css/projets_details.css">
    <link rel="stylesheet" href="/src/assets/css/gen.css">
    <link rel="shortcut icon" href="/src/assets/images/favicon_io/favicon.ico" type="image/x-icon">
    <script defer src="/src/assets/js/projets_details.js"></script>
</head>

<body>
    <div id="div_titre_boutonFermer">
        <div>
            <h1 id="titre">Réseau social de contenu 3D</h1>
            <hr class="sep" />
        </div>
        <form action="/src/pages/projets.php">
            <button type=" submit" type="button" class="btn-close">
                <span class="icon-cross"></span>
            </button>
        </form>
    </div>

    <div class="etiquettes_projets_languages">
        <h3>Java</h3>
        <h3>Spring boot</h3>
        <h3>Android</h3>
    </div>
    <div id=textBio_CV>
        <p id="text_bio">Pour ce projet, notre directive était de conceptualiser les besoins des clients en vue du développement d'une application mobile axée sur le contenu 3D. Nous avons eu l'opportunité de mettre en pratique les méthodes Agiles. Dans ce contexte, nous avons imaginé un réseau social permettant aux utilisateurs de partager leurs modèles 3D. Cette application englobe toutes les fonctionnalités essentielles d'un réseau social classique, telles que la possibilité de suivre des créateurs, une messagerie intégrée, et bien d'autres.</p>
    </div>


    <?php
    include '../../includes/header.html';
    ?>
</body>

</html>