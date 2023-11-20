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
    <meta name="description" content="Présentation de ce projet réalisé durant la deuxième année de mon cursus scolaire qui est une application web destinée aux étudiants en école d'infirmier">
    <link rel="stylesheet" href="/src/assets/css/projets_details.css">
    <link rel="stylesheet" href="/src/assets/css/gen.css">
    <script defer src="/src/assets/js/projets_details.js"></script>
</head>

<body>
    <div id="div_titre_boutonFermer">
        <div>
            <h1 id="titre">Application web<br> pour étudiants infirmiers</h1>
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
        <h3>HTML</h3>
        <h3>CSS</h3>
    </div>
    <div id=textBio_CV>
        <p id="text_bio">Le principal objectif de ce projet était de concevoir une application Web dédiée aux étudiants en école d'infirmier, visant à les familiariser avec l'utilisation d'un Dossier Patient Informatisé (DPI), un logiciel couramment utilisé en milieu hospitalier pour gérer les informations des patients.

            Notre équipe s'est concentrée sur le développement d'une application permettant aux enseignants de créer des DPI personnalisés, comprenant des exercices conçus pour les étudiants.

            Pour mener à bien ce projet, nous avons adopté une approche collaborative en utilisant les méthodes Agiles. Notre travail a impliqué la mise en œuvre de diverses technologies telles que PHP, HTML, CSS, ainsi que JavaScript.</p>
    </div>


    <?php
    include '../../includes/header.html';
    ?>
</body>

</html>