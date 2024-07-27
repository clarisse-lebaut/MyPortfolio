<title>Mes Projets Web</title>
<link rel="stylesheet" href="../assets/styles/global.css">
<link rel="stylesheet" href="../assets/styles/web.css">


<?php include "./components/header.php"; ?>

<main>
    <h1 class="title-page-projects">MES PROJETS : WEB</h1>

    <a class="link-back-projects" href="index.php?page=projects">Revenir au catégorie de projets</a>

    <section class="filter">
        <button class="filter-btn" data-filter="all">Tous</button>
        <button class="filter-btn" data-filter="Plateforme">La Plateforme_</button>
        <button class="filter-btn" data-filter="Perso">Personnel</button>
    </section>

    <section class="main-container-web" id="projects-container">
        <!-- Les cartes de projet seront ajoutées ici par JavaScript -->
    </section>
</main>

<?php include "./components/footer.php"; ?>


<script>
document.addEventListener("DOMContentLoaded", () => {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const container = document.getElementById('projects-container');
    let projectsData = [];

    fetch('../assets/db/database-web.json')
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
                : projectsData.filter(project => project.category === selectedType);
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
                    <div class="details-projects-header">
                        <p class="card-text title-project">${project.title}</p>
                        <div class="color-project">
                            <p>insérer la charte phrahique</p> 
                        </div>
                    </div>
                    <div class="details-projects">
                        <p class="card-description">${project.description}</p>
                         <p class="card-description">${project.languages}</p>
                        <p class="card-description">${project.outils}</p>
                    </div>
                        <div class="grid-container">
                        <div class="grid-item one">
                            <video class="card-pic" controls>
                                <source src="${project.video}" type="video/mp4">
                                Votre navigateur ne supporte pas la balise vidéo.
                            </video>
                        </div>
                            <div class="grid-item"><img class="card-pic" src="${project.image_one}" alt="${project.title}"></div>
                            <div class="grid-item"><img class="card-pic" src="${project.image_two}" alt="${project.title}"></div>
                            <div class="grid-item"><img class="card-pic" src="${project.image_three}" alt="${project.title}"></div>
                            <div class="grid-item"><img class="card-pic" src="${project.image_four}" alt="${project.title}"></div>
                            <div class="grid-item"><img class="card-pic" src="${project.image_five}" alt="${project.title}"></div>
                        </div>
                    `;
            container.appendChild(card);
        });
    }
});
</script>
