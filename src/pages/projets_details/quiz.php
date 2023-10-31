<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Théo Vesque - Projets - Jeu de quiz</title>
    <link rel="stylesheet" href="/src/assets/css/projets_details.css">
    <link rel="stylesheet" href="/src/assets/css/gen.css">
    <script defer src="/src/assets/js/projets_details.js"></script>
</head>

<body>
    <div id="div_titre_boutonFermer">
        <div>
            <h1 id="titre">Jeu de quiz - culture générale</h1>
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
        <h3>SQL</h3>
        <h3>Javascript</h3>
    </div>
    <div id=textBio_CV>
        <p id="text_bio">Ce site a été créé dans le but de proposer un jeu de quiz pour mettre à l'épreuve votre culture générale sur une variété de sujets, allant de l'histoire au sport, en passant par les films Marvel. Le système de quiz repose sur la gestion du temps, où les réponses rapides sont récompensées, et un système de points est calculé en fonction de la rapidité de votre réponse. Le site n'étant pas accéssible directement, vous pouvez tout de même consulter quelques images dans la galerie ci dessous.</p>
    </div>

    <carousel>
        <input type="radio" id="page1cb" checked name="pages" />
        <label for="page1cb">1</label>
        <input type="radio" id="page2cb" name="pages" />
        <label for="page2cb">2</label>
        <input type="radio" id="page3cb" name="pages" />
        <label for="page3cb">3</label>
        <!-- page 1 -->
        <page id="page1">
            <div><img src="/src/assets/images/projets/quiz1.png" alt="image du site de quiz"></div>
            <label for="page2cb" title="Suivant"><b>Suivant</b></label>
        </page>
        <!-- page 2 -->
        <page id="page2">
            <div><img src="/src/assets/images/projets/quiz2.png" alt="image du site de quiz"></div>
            <label for="page3cb" title="Suivant"><b>Suivant</b></label>
        </page>
        <!-- page 3 -->
        <page id="page3">
            <div><img src="/src/assets/images/projets/quiz3.png" alt="image du site de quiz"></div>
            <label for="page1cb" title="Suivant"><b>Suivant</b></label>
        </page>
        </page>
    </carousel>


    <?php
    include '../../includes/header.html';
    ?>
</body>

</html>