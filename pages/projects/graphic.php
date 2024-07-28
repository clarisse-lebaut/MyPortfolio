<link rel="stylesheet" href="../assets/styles/global.css">
<link rel="stylesheet" href="../assets/styles/graphic.css">

<?php
include "./components/header.php";
?>

<main>
    <h1 class="title-page-projects">GRAPHIQUES</h1>

    <?php
    include "./components/nav-projects.php";
    ?>

    <section class="filter">
        <button class="filter-btn" data-filter="all">Tous</button>
        <button class="filter-btn" data-filter="album">album</button>
        <button class="filter-btn" data-filter="peinture">peinture</button>
        <button class="filter-btn" data-filter="aquarelle">aquarelle</button>
        <button class="filter-btn" data-filter="illustrator">illustrator</button>
        <button class="filter-btn" data-filter="crayon">crayon</button>
        <button class="filter-btn" data-filter="bombe">bombe</button>
        <button class="filter-btn" data-filter="bd">BD</button>
        <button class="filter-btn" data-filter="flyer">Flyers</button>     
    </section>

    <section class="main-container-art" id="projects-container">
        <!-- Les cartes de projet seront ajoutées ici par JavaScript -->
    </section>


    <section id="myModal" class="modal">
        <span class="close" onclick="closeModal()">&times;</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
    </section>

</main>

<?php
include "./components/footer.php";
?>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const container = document.getElementById('projects-container');
    let projectsData = [];

    fetch('../assets/db/database-art.json')
        .then(response => response.json())
        .then(data => {
            projectsData = data; // Stocker les données pour filtrage
            displayProjects(projectsData); // Afficher les projets au chargement initial
        })
        .catch(error => console.error('Error fetching the projects:', error));

    // Écouteur d'événements pour le filtre
    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            const selectedType = button.getAttribute('data-filter');
            const filteredProjects = selectedType === 'all' 
                ? projectsData 
                : projectsData.filter(project => project.type === selectedType || project.plateforme === selectedType);
            displayProjects(filteredProjects);
        });
    });

    // Fonction pour afficher les projets
    function displayProjects(projects) {
        container.innerHTML = ''; // Vider le conteneur avant d'ajouter les projets filtrés
        projects.forEach(project => {
            const card = document.createElement('div');
            card.className = 'card-container';
            card.innerHTML = `
                <div class="card-container">
                    <div class="img-container">
                        <img class="img-art" src="${project.path}" alt="Art Image">
                        <p class="card-description">${project.description}</p>
                    </div>
                </div>              
            `;
            container.appendChild(card);
        });
    }
});
</script>