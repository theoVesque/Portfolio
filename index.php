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
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Théo Vesque - Portfolio</title>
  <meta name="description" content="Étudiant en 3ème année de BUT Informatique passionné par le développement web. Découvrez mon parcours, mes compétences et mes projets à travers ce portfolio.">
  <link rel="stylesheet" href="/src/assets/css/index.css">
  <link rel="stylesheet" href="/src/assets/css/gen.css">
  <link rel="shortcut icon" href="/src/assets/images/favicon_io/favicon.ico" type="image/x-icon">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script defer="/src/assets/js/index.js"></script>
</head>

<body>
  <h1 id="titre">Théo Vesque</h1>
  <hr class="sep" />
  <div id=textBio_CV>
    <p id="text_bio">Bonjour, je m'appelle Théo Vesque et je suis actuellement étudiant en 3ème année de BUT Informatique à l'UPHF. Je suis passionné par le développement web. Je recherche un stage d'une durée de 4 mois pour le mois d'Avril. Mon objectif est d'acquérir une expérience pratique et de contribuer activement à des projets innovants. Je vous invite à explorez mon portfolio si vous souhaitez en savoir plus sur mes compétences et mes divers <a href="src/pages/projets.php" id="lien_projets_text_bio">projets</a> réalisés. </p>
    <div id="div_cv">
      <a href="/src/assets/images/CV.pdf" target="_blank" id="consulter_cv" class="menu-item">Consulter mon CV</a>
      <a href="/src/assets/images/CV.pdf" download="CV" id="telecharger_cv" class="menu-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
          <path fill="#0e0e0e" d="m12 16l-5-5l1.4-1.45l2.6 2.6V4h2v8.15l2.6-2.6L17 11l-5 5Zm-6 4q-.825 0-1.413-.588T4 18v-3h2v3h12v-3h2v3q0 .825-.588 1.413T18 20H6Z" />
        </svg>
      </a>
    </div>
  </div>


  <?php
  include 'src/includes/header.html';
  include 'src/includes/footer.html';
  ?>
</body>

</html>