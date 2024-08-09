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
          Grande adoratrice de l'organisation, un rangement et une présentation par thème de mes différents projets est priviligié. 
        </p>
        <p>
          Si certains ont été réalisé dans les différents formations que j'ai suivi, d'autres sont fait à la demande,<br>
          quand la plupart sont d'odre personnel. Comme j'ai souvent pu l'entendre, le talent c'est 10% de chance et 90% de travail !
        </p>
        <p>
          Un objectif : continuer à remplir cette page avec de nombreuse autres cétegories !
        </p>
    </div>

  <section class="main-container">
    <div class="main-card-container">
      <a href="index.php?page=web">
        <div class="main-card-content">
          <img class="main-card-pic" src="../assets/img/category/coding.jpeg" alt="">
          <p class="main-card-text">Web</p>
        </div>
      </a>
    </div>
    <div class="main-card-container">
      <a href="index.php?page=music">
        <div class="main-card-content">
          <img class="main-card-pic" src="../assets/img/category/musique.jpg" alt="">
          <p class="main-card-text">Musicaux</p>
        </div>
      </a>
    </div>
    <div class="main-card-container">
      <a href="index.php?page=graphic">
        <div class="main-card-content">
          <img class="main-card-pic" src="../assets/img/category/art.webp" alt="">
          <p class="main-card-text">Graphiques</p>
        </div>
      </a>
    </div>
  </section>
</main>


<?php
include "./components/footer.php";
?>