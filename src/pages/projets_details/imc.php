<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Théo Vesque - Projets - Calculateur d'IMC</title>
    <link rel="stylesheet" href="/src/assets/css/gen.css">
    <link rel="stylesheet" href="/src/assets/css/projets_details.css">
    <script defer src="/src/assets/js/projets_details.js"></script>
</head>

<body>
    <h1 id="titre">Site de Calculateur d'IMC</h1>
    <hr class="sep" />
    <div id=textBio_CV>
        <p id="text_bio"> La principale mission de ce site est de fournir une application web simple et efficace pour calculer l'Indice de Masse Corporelle (IMC) en fonction du poids et de la taille de l'utilisateur. La création de cette plateforme a été une étape clé dans mon parcours de développement, car elle m'a permis d'approfondir mes compétences en programmation JavaScript. Pour plus de détails, vous pouvez explorer la galerie d'images ci-dessous ou accéder directement au site via le lien fourni.</p>
    </div>

    <carousel>
        <input type="radio" id="page1cb" checked name="pages" />
        <label for="page1cb">1</label>
        <input type="radio" id="page2cb" name="pages" />
        <label for="page2cb">2</label>
        <input type="radio" id="page3cb" name="pages" />
        <label for="page3cb">3</label>
        <input type="radio" id="page4cb" name="pages" />
        <label for="page4cb">4</label>
        <input type="radio" id="page5cb" name="pages" />
        <label for="page5cb">5</label>
        <!-- page 1 -->
        <page id="page1">
            <div><img src="/src/assets/images/projets/imc1.png" alt="image du site de calcul d'imc"></div>
            <label for="page2cb" title="Suivant"><b>Suivant</b></label>
        </page>
        <!-- page 2 -->
        <page id="page2">
            <div><img src="/src/assets/images/projets/imc2.png" alt="image du site de calcul d'imc"></div>
            <label for="page3cb" title="Suivant"><b>Suivant</b></label>
        </page>
        <!-- page 3 -->
        <page id="page3">
            <div><img src="/src/assets/images/projets/imc5.png" alt="image du site de calcul d'imc"></div>
            <label for="page4cb" title="Suivant"><b>Suivant</b></label>
        </page>
        <!-- page 4 -->
        <page id="page4">
            <div><img src="/src/assets/images/projets/imc3.png" alt="image du site de calcul d'imc"></div>
            <label for="page5cb" title="Suivant"><b>Suivant</b></label>
        </page>
        <!-- page 5 -->
        <page id="page5">
            <div><img src="/src/assets/images/projets/imc4.png" alt="image du site de calcul d'imc"></div>
            <label for="page1cb" title="Suivant"><b>Suivant</b></label>
        </page>
    </carousel>


    <?php
    include '../../includes/header.html';
    ?>
</body>

</html>