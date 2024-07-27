<link rel="stylesheet" href="../assets/styles/global.css">
<link rel="stylesheet" href="../assets/styles/projects.css">

<?php
include "./components/header.php";
?>

<main>
    <div class="title-page-projects">
        <h1>MES PROJETS</h1>
        <p>Une présentation rapide de tout les projets que je peux faire</p>
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