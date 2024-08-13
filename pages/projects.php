<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="../assets/styles/global.css">
<link rel="stylesheet" href="../assets/styles/projects.css">

<?php
include "./components/header.php";
?>

<main>
    <div class="title-page-projects">
        <h1>MES PROJETS</h1>
        <p>
          Grande adoratrice de l'organisation, vous trouverez ici un rangement et une présentation par thème de mes différents projets ! 
        </p>
        <p>
          Certains ont été réalisés dans le cadre de formations que j'ai suivies, d'autres sur demande, <br> 
          tandis que la plupart sont des initiatives personnelles afin de gagner tant en connaissances qu'en compétences.
        </p>
        <p>
          Un objectif : continuer à enrichir cette page avec de nombreux projets !
        </p>
    </div>

  <section class="main-container">
    <div class="main-card-container">
      <a href="index.php?page=web">
        <div class="main-card-content">
          <img class="main-card-pic" src="../assets/img/category/web.png" alt="">
          <p class="main-card-text">Web</p>
        </div>
      </a>
    </div>
    <div class="main-card-container">
      <a href="index.php?page=music">
        <div class="main-card-content">
          <img class="main-card-pic" src="../assets/img/category/musique.png" alt="">
          <p class="main-card-text">Musicaux</p>
        </div>
      </a>
    </div>
    <div class="main-card-container">
      <a href="index.php?page=graphic">
        <div class="main-card-content">
          <img class="main-card-pic" src="../assets/img/category/graphique.png" alt="">
          <p class="main-card-text">Graphiques</p>
        </div>
      </a>
    </div>
  </section>
</main>


<?php
include "./components/footer.php";
?>