<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Théo Vesque - Projets - Logiciel de parc informatique</title>
    <meta name="description" content="Présentation d'un projet réalisé durant la première année de mon cursus scolaire qui est un logiciel de gestion de parc informatique. ">
    <link rel="stylesheet" href="/src/assets/css/projets_details.css">
    <link rel="stylesheet" href="/src/assets/css/gen.css">
    <script defer src="/src/assets/js/projets_details.js"></script>
</head>

<body>
    <div id="div_titre_boutonFermer">
        <div>
            <h1 id="titre">Logiciel de parc informatique</h1>
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
        <h3>SQL</h3>
    </div>
    <div id=textBio_CV>
        <p id="text_bio">Dans le cadre de ce projet, notre mission consistait à élaborer un cahier des charges en vue de développer un logiciel de gestion de parc informatique. L'objectif de ce logiciel était de permettre la consultation du matériel informatique de l'IUT, qu'il s'agisse d'ordinateurs, de souris ou d'autres équipements, et d'exécuter diverses actions sur ces ressources. Ces actions incluaient la possibilité d'ajouter, supprimer ou modifier un équipement, ainsi que de signaler qu'un élément devait être remplacé en cas de dysfonctionnement. Notre travail visait à simplifier et optimiser la gestion du parc informatique de l'IUT, en offrant une solution complète et efficace.</p>
    </div>


    <?php
    include '../../includes/header.html';
    ?>
</body>

</html>