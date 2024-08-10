<link rel="stylesheet" href="../assets/styles/global.css">
<link rel="stylesheet" href="../assets/styles/web.css">

<?php
include "./components/header.php";
?>

<main>
    <h1 class="title-page-projects">WEB</h1>

    <?php
    include "./components/nav-projects.php";
    ?>

    <section class="filter">
        <button class="filter-btn" data-filter="all">Tous</button>
        <button class="filter-btn" data-filter="Plateforme">La Plateforme_</button>
        <button class="filter-btn" data-filter="Perso">Personnel</button>
    </section>

    <section class="filter-mobil">
        <select id="filter-select">
            <option value="all">Tous</option>
            <option value="Plateforme">La Plateforme_</option>
            <option value="Perso">Personnel</option>
        </select>
    </section>

    <section class="main-container-web" id="projects-container">
        <!-- Les cartes de projet seront ajoutées ici par JavaScript -->
    </section>
</main>

<?php include "./components/footer.php"; ?>


<script>
    document.addEventListener("DOMContentLoaded", () => {
        const filterButtons = document.querySelectorAll('.filter-btn');
        const filterSelect = document.getElementById('filter-select');
        const container = document.getElementById('projects-container');
        let projectsData = [];

        // Récupérer les données des projets
        fetch('../assets/db/database-web.json')
            .then(response => response.json())
            .then(data => {
                projectsData = data; // Stocker les données pour filtrage
                displayProjects(projectsData); // Afficher les projets au chargement initial
            })
            .catch(error => console.error('Error fetching the projects:', error));

        // Filtrage avec les boutons
        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                const selectedType = button.getAttribute('data-filter');
                filterProjects(selectedType);
            });
        });

        // Filtrage avec le select
        filterSelect.addEventListener('change', () => {
            const selectedType = filterSelect.value;
            filterProjects(selectedType);
        });

        // Fonction de filtrage
        function filterProjects(selectedType) {
            const filteredProjects = selectedType === 'all'
                ? projectsData
                : projectsData.filter(project => project.category === selectedType);
            displayProjects(filteredProjects);
        }

        // Fonction pour afficher les projets
        function displayProjects(projects) {
            container.innerHTML = ''; // Vider le conteneur avant d'ajouter les projets filtrés
            projects.forEach(project => {
                const card = document.createElement('div');
                card.className = 'card-container';

                // Vérification des champs avant de les ajouter
                const imagesHtml = [project.image_one, project.image_two, project.image_three, project.image_four, project.image_five]
                    .filter(image => image) // Filtrer les images non définies ou vides
                    .map(image => `<div class="grid-item"><img class="card-pic" src="${image}" alt="${project.title}"></div>`)
                    .join('');

                const videoHtml = project.video ? `
                <div class="grid-item one">
                    <video class="card-pic" controls>
                        <source src="${project.video}" type="video/mp4">
                        Votre navigateur ne supporte pas la balise vidéo.
                    </video>
                </div>
            ` : '';

                card.innerHTML = `
                <div class="details-projects-header">
                    <p class="card-text title-project">${project.title}</p>
                </div>
                <div class="details-projects">
                    ${project.description ? `<p class="card-description">${project.description}</p>` : ''}
                    ${project.languages ? `<p class="card-description">${project.languages}</p>` : ''}
                    ${project.outils ? `<p class="card-description">${project.outils}</p>` : ''}
                </div>
                <div class="grid-container">
                    ${videoHtml}
                    ${imagesHtml}
                </div>
            `;
                container.appendChild(card);
            });
        }
    });

</script>