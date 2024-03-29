<!DOCTYPE html>
<html lang="en">

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
    <title>Théo Vesque - Mes projets</title>
    <meta name="description" content="Explorez mes projets variés, allant de jeux de quiz et timers Pomodoro à des applications plus complexes telles que des réseaux sociaux et des outils pour les étudiants en école d'infirmiers. Découvrez mon portfolio de réalisations.">
    <link rel="stylesheet" href="/src/assets/css/projets.css">
    <link rel="stylesheet" href="/src/assets/css/gen.css">
    <link rel="shortcut icon" href="/src/assets/images/favicon_io/favicon.ico" type="image/x-icon">
    <script defer src="/src/assets/js/projets.js"></script>
</head>

<body>

    <h1 id="titre">Mes projets</h1>
    <hr class="sep" />


    <div id="div_button_projets">
        <button id="button_projet_personnels" class="selected projets-item" onclick="tabProjets('personnels')">Projets personnels</button>
        <button id="button_projet_scolaires" class="projets-item" onclick="tabProjets('scolaires')">Projets scolaires</button>
    </div>


    <!-- POMODORO -->
    <div id="personnels" class="w3-container projet">
        <!-- BLOG DE SPORT -->
        <div class="carte_projet">
            <div class="image_projet">
                <img src="/src/assets/images/projets/blog_sport1.png" alt="Image du projet de blog de sport">
            </div>
            <h2>Blog de sport</h2>
            <div class="etiquettes_projets_languages">
                <h3>Symfony</h3>
                <h3>Javascript</h3>
                <h3>HTML / CSS</h3>
            </div>
            <div id="container_fleche">
                <a href="/src/pages/projets_details/blog-sport.php" class="learn-more button_voir_plus projets-item">
                    <span class="circle" aria-hidden="true">
                        <span class="icon arrow"></span>
                    </span>
                    <span class="button-text">Voir plus</span>
                </a>
            </div>
        </div>

        <div class="carte_projet">
            <div class="image_pas_de_photo">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24">
                    <path fill="none" stroke="#0e0e0e" d="m.5.5l9.857 9.857M23.5 23.5l-6.857-6.857M9.5 13a4.5 4.5 0 0 0 4.5 4.5m-11-8h3m-3-3H.5v14H17M6.5 6.5h1a3 3 0 0 0 3-3h7a3 3 0 0 0 3 3h3v11a3 3 0 0 1-3 3M10.357 10.357a4.5 4.5 0 1 1 6.285 6.285m-6.285-6.285l6.286 6.286" />
                </svg>
            </div>
            <h2>Site de timer Pomodoro</h2>
            <div class="etiquettes_projets_languages">
                <h3>HTML</h3>
                <h3>CSS</h3>
                <h3>Javascript</h3>
            </div>
            <div id="container_fleche">
                <a href="/src/pages/projets_details/pomodoro.php" class="learn-more button_voir_plus projets-item">
                    <span class="circle" aria-hidden="true">
                        <span class="icon arrow"></span>
                    </span>
                    <span class="button-text">Voir plus</span>
                </a>
            </div>
        </div>

        <!-- IMC -->
        <div class="carte_projet">
            <div class="image_projet">
                <img src="/src/assets/images/projets/imc1.png" alt="Image du projet de calculateur d'IMC">
            </div>
            <h2>Site de calculateur d'IMC</h2>
            <div class="etiquettes_projets_languages">
                <h3>HTML</h3>
                <h3>CSS</h3>
                <h3>Javascript</h3>
            </div>
            <div id="container_fleche">
                <a href="/src/pages/projets_details/imc.php" class="learn-more button_voir_plus projets-item">
                    <span class="circle" aria-hidden="true">
                        <span class="icon arrow"></span>
                    </span>
                    <span class="button-text">Voir plus</span>
                </a>
            </div>
        </div>
        <div>
            <div class="image_pas_de_photo"></div>
        </div>

        <!-- QUIZ -->
        <div class="carte_projet">
            <div class="image_projet">
                <img src="/src/assets/images/projets/quiz2.png" alt="Image du projet de calculateur d'IMC">
            </div>
            <h2>Jeu de quiz - culture générale</h2>
            <div class="etiquettes_projets_languages">
                <h3>PHP</h3>
                <h3>SQL</h3>
                <h3>Javascript</h3>
            </div>
            <div id="container_fleche">
                <a href="/src/pages/projets_details/quiz.php" class="learn-more button_voir_plus projets-item">
                    <span class="circle" aria-hidden="true">
                        <span class="icon arrow"></span>
                    </span>
                    <span class="button-text">Voir plus</span>
                </a>
            </div>
        </div>
    </div>

    <div id="scolaires" class="w3-container projet" style="display:none">
        <h4 id="h4_confidentialite_scolaires">Pour des raisons de confidentialité, tous les projets répertoriés dans la section scolaire, hors celui de mon stage, ne sont pas consultables directement. Cependant, vous avez la possibilité de consulter une page dédiée à chaque projet pour obtenir des informations plus détaillées à leur sujet.</h4>

        <!-- Stage Robindesbus -->
        <div class="carte_projet">
            <div class="image_projet">
                <img src="/src/assets/images/projets/robindesbus1.png" alt="Image du site internet réalisé pour l\'association Robindesbus">
            </div>
            <h2>Site internet pour Robindesbus</h2>
            <div class="etiquettes_projets_languages">
                <h3>PHP</h3>
                <h3>Javascript</h3>
                <h3>SQL</h3>
                <h3>HTML / CSS</h3>
            </div>
            <div id="container_fleche">
                <a href="/src/pages/projets_details/robindesbus.php" class="learn-more button_voir_plus">
                    <span class="circle" aria-hidden="true">
                        <span class="icon arrow"></span>
                    </span>
                    <span class="button-text">Voir plus</span>
                </a>
            </div>
        </div>

        <!-- APPLI 3D -->
        <div class="carte_projet">
            <div class="image_pas_de_photo">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24">
                    <path fill="none" stroke="#0e0e0e" d="m.5.5l9.857 9.857M23.5 23.5l-6.857-6.857M9.5 13a4.5 4.5 0 0 0 4.5 4.5m-11-8h3m-3-3H.5v14H17M6.5 6.5h1a3 3 0 0 0 3-3h7a3 3 0 0 0 3 3h3v11a3 3 0 0 1-3 3M10.357 10.357a4.5 4.5 0 1 1 6.285 6.285m-6.285-6.285l6.286 6.286" />
                </svg>
            </div>
            <h2>Réseau social de contenu 3D</h2>
            <div class="etiquettes_projets_languages">
                <h3>Java</h3>
                <h3>Spring Boot</h3>
                <h3>Android</h3>
            </div>
            <div id="container_fleche">
                <a href="/src/pages/projets_details/3d.php" class="learn-more button_voir_plus">
                    <span class="circle" aria-hidden="true">
                        <span class="icon arrow"></span>
                    </span>
                    <span class="button-text">Voir plus</span>
                </a>
            </div>
        </div>

        <!-- DPI -->
        <div class="carte_projet">
            <div class="image_pas_de_photo">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24">
                    <path fill="none" stroke="#0e0e0e" d="m.5.5l9.857 9.857M23.5 23.5l-6.857-6.857M9.5 13a4.5 4.5 0 0 0 4.5 4.5m-11-8h3m-3-3H.5v14H17M6.5 6.5h1a3 3 0 0 0 3-3h7a3 3 0 0 0 3 3h3v11a3 3 0 0 1-3 3M10.357 10.357a4.5 4.5 0 1 1 6.285 6.285m-6.285-6.285l6.286 6.286" />
                </svg>
            </div>
            <h2>Application Web pour étudiants infirmiers</h2>
            <div class="etiquettes_projets_languages">
                <h3>PHP</h3>
                <h3>Javascript</h3>
                <h3>HTML</h3>
                <h3>CSS</h3>
            </div>
            <div id="container_fleche">
                <a href="/src/pages/projets_details/dpi.php" class="learn-more button_voir_plus">
                    <span class="circle" aria-hidden="true">
                        <span class="icon arrow"></span>
                    </span>
                    <span class="button-text">Voir plus</span>
                </a>
            </div>
        </div>

        <!-- PARC INFORMATIQUE -->
        <div class="carte_projet">
            <div class="image_pas_de_photo">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24">
                    <path fill="none" stroke="#0e0e0e" d="m.5.5l9.857 9.857M23.5 23.5l-6.857-6.857M9.5 13a4.5 4.5 0 0 0 4.5 4.5m-11-8h3m-3-3H.5v14H17M6.5 6.5h1a3 3 0 0 0 3-3h7a3 3 0 0 0 3 3h3v11a3 3 0 0 1-3 3M10.357 10.357a4.5 4.5 0 1 1 6.285 6.285m-6.285-6.285l6.286 6.286" />
                </svg>
            </div>
            <h2>Logiciel de parc informatique</h2>
            <div class="etiquettes_projets_languages">
                <h3>Java</h3>
                <h3>SQL</h3>
            </div>
            <div id="container_fleche">
                <a href="/src/pages/projets_details/parc_info.php" class="learn-more button_voir_plus">
                    <span class="circle" aria-hidden="true">
                        <span class="icon arrow"></span>
                    </span>
                    <span class="button-text">Voir plus</span>
                </a>
            </div>
        </div>
    </div>


    <?php
    include '../includes/header.html';
    include '../includes/footer.html';
    ?>
</body>

</html>