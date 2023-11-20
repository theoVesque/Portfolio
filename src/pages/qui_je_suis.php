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
    <title>Théo Vesque - Qui je suis ?</title>
    <meta name="description" content="Bienvenue sur ma page personnelle ! Je suis Théo Vesque, étudiant en informatique, passionné par la programmation, le développement web et les nouvelles technologies. Apprenez à me connaître davantage en parcourant ce site.">
    <link rel="stylesheet" href="/src/assets/css/qui_je_suis.css">
    <link rel="stylesheet" href="/src/assets/css/gen.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
    <script defer src="/src/assets/js/qui_je_suis.js"></script>
</head>

<body>
    <h1 id="titre">Théo Vesque</h1>
    <hr class="sep" />

    <div id=textBio_CV>
        <p id="text_bio">
            Je suis actuellement en 3ème année de mon cursus en BUT Informatique à l’Université Polytechnique des Hauts-de-France (UPHF). Cette formation m'a permis d'acquérir un large éventail de <a href="#competences" id="lien_projets_text_bio">compétences</a>, tant dans le domaine du développement Web que du développement logiciel, et je vous invite à découvrir la liste des technologies que je maîtrise dans la section ci-dessous.
        </p>
        <p id="text_bio">
            Tout au long de mon parcours, j'ai eu l'opportunité de concevoir une variété de <a href="/src/pages/projets.php" id="lien_projets_text_bio">projets</a>, qu'ils soient liés à des travaux scolaires ou à des projets personnels. Parmi mes réalisations, vous trouverez, par exemple, un site web destiné aux étudiants en école d'infirmier, un réseau social de partage de contenu 3D, ou encore une application de gestion du temps inspirée de la technique Pomodoro, visant à accroître la productivité.
        </p>
        <p id="text_bio" class="text_bio3">Pour la suite de mes études, je suis à la recherche d'une opportunité de stage au sein d'une entreprise. Mon objectif est de mettre mes compétences au service de cette organisation, tout en continuant d'approfondir mes connaissances dans le domaine informatique. Je suis enthousiaste à l'idée de contribuer de manière significative à des projets professionnels tout en développant mon expertise.</p>


        <div class="competences" id="competences">
            <h1 class="titre_competences">Front-End</h1>
            <hr class="sep2" />
            <div class="competences_div">
                <div class="competence-item">
                    <i class="devicon-html5-plain"></i>
                    <p>HTML</p>
                </div>
                <div class="competence-item">
                    <i class="devicon-css3-plain"></i>
                    <p>CSS</p>
                </div>
                <div class="competence-item">
                    <i class="devicon-javascript-plain"></i>
                    <p>Javascript</p>
                </div>
            </div>
        </div>

        <div class="competences">
            <h1 class="titre_competences">Back-End</h1>
            <hr class="sep2" />
            <div class="competences_div">
                <div class="competence-item">
                    <i class="devicon-php-plain"></i>
                    <p>PHP</p>
                </div>
                <div class="competence-item">
                    <i class="devicon-symfony-plain"></i>
                    <p>Symfony</p>
                </div>
                <div class="competence-item">
                    <i class="devicon-java-plain"></i>
                    <p>Java</p>
                </div>
                <div class="competence-item">
                    <i class="devicon-spring-plain"></i>
                    <p>Spring Boot</p>
                </div>
            </div>
        </div>

        <div class="competences">
            <h1 class="titre_competences">Autres compétences</h1>
            <hr class="sep3" />
            <div class="competences_div">
                <div class="competence-item">
                    <i class="devicon-figma-plain"></i>
                    <p>Figma</p>
                </div>
                <div class="competence-item">
                    <i class="devicon-git-plain"></i>
                    <p>Git</p>
                </div>
                <div class="competence-item">
                    <i class="devicon-trello-plain"></i>
                    <p>Trello</p>
                </div>
            </div>
        </div>

        <?php
        include '../includes/header.html';
        include '../includes/footer.html';
        ?>
</body>

</html>