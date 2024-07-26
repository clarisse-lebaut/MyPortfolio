<link rel="stylesheet" href="../assets/styles/global.css">
<link rel="stylesheet" href="../assets/styles/projects.css">

<?php
include "./components/header.php";
?>

<main>

<h1 class="title-page-projects">MES PROJETS</h1>
<section class="main-container">
    <p>Une présentation rapide de tout les projets que je peux faire</p>
</section>

<section class="main-container">
    <div class="card-container">
        <a href="index.php?page=web"><img class="card-pic" src="../assets/img/category/coding.jpeg" alt=""></a>
        <p class="card-text">Web</p>
    </div>
    <div class="card-container">
        <a href="index.php?page=music"><img class="card-pic" src="../assets/img/category/musique.jpg" alt=""></a>
        <p class="card-text">Musique</p>
    </div>
    <div class="card-container">
        <a href="index.php?page=graphic"><img class="card-pic"  src="../assets/img/category/art.webp" alt=""></a>
        <p class="card-text">Arts</p>
    </div>
</section>
</main>

<?php
include "./components/footer.php";
?>