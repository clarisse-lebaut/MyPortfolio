<link rel="stylesheet" href="../assets/styles/global.css">
<link rel="stylesheet" href="../assets/styles/projects.css">

<?php
include "./components/header.php";
?>

<main>
    <div class="title-page-projects">
        <h1>MES PROJETS</h1>
        <p>
          Grande adoratrice de l'organisation, j'ai priviligié un rangement et une présentation par thème des différents projets sur lesquel je me lance corps et âme. 
        </p>
        <p>
          Si certians sont réalisé au cour des différents formations que j'ai suivi, d'autre sont fait à la demande,
          et pas mal d'entre eux sont d'odre personnel parce que, comme j'ai souvent pu l'entendre, le talent c'est 10% de chance et 90% de travail !
        </p>
        <p>
          J'espère pouvoir continuer à remplir cette page avec de nombreuse autres cétegories !
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
          <p class="main-card-text">Musique</p>
        </div>
      </a>
    </div>
    <div class="main-card-container">
      <a href="index.php?page=graphic">
        <div class="main-card-content">
          <img class="main-card-pic" src="../assets/img/category/art.webp" alt="">
          <p class="main-card-text">Arts</p>
        </div>
      </a>
    </div>
  </section>
</main>


<?php
include "./components/footer.php";
?>