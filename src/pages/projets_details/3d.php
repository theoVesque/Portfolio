<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Théo Vesque - Projets - Application web pour étudiants infirmiers</title>
    <link rel="stylesheet" href="/src/assets/css/projets_details.css">
    <link rel="stylesheet" href="/src/assets/css/gen.css">
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