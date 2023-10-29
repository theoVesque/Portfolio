<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Théo Vesque - Mes projets</title>
    <link rel="stylesheet" href="/src/assets/css/projets.css">
    <script defer src="/src/assets/js/projets.js"></script>
</head>

<body>

    <h1 id="titre">Mes projets</h1>
    <hr class="sep" />


    <div id="div_button_projets">
        <button id="button_projet_personnels" class="selected" onclick="tabProjets('personnels')">Projets personnels</button>
        <button id="button_projet_scolaires" onclick="tabProjets('scolaires')">Projets scolaires</button>
    </div>

    <div id="personnels" class="w3-container projet">
        <h2>London</h2>
        <p>London is the capital city of England.</p>
    </div>

    <div id="scolaires" class="w3-container projet" style="display:none">
        <h2>Paris</h2>
        <p>Paris is the capital of France.</p>
    </div>


    <?php
    include '../includes/header.html';
    ?>
</body>

</html>