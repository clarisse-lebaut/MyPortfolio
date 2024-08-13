<meta name="viewport" content="width=device-width, initial-scale=1.0">

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
        <button class="filter-btn" data-filter="album">Illustrations</button>
        <button class="filter-btn" data-filter="peinture">Peintures</button>
        <button class="filter-btn" data-filter="aquarelle">Aquarelles</button>
        <button class="filter-btn" data-filter="illustrator">Adobe Illustrator</button>
        <button class="filter-btn" data-filter="crayon">Crayons</button>
        <button class="filter-btn" data-filter="bombe">Bombes</button>
        <button class="filter-btn" data-filter="bd">Bandes dessinés</button>
        <button class="filter-btn" data-filter="flyer">Flyers</button>
    </section>

    <section class="filter-mobil">
        <select id="filter-select">
            <option value="all">Tous</option>
            <option value="album">Illustrations</option>
            <option value="peinture">Peintures</option>
            <option value="aquarelle">Aquarelles</option>
            <option value="illustrator">Adobe Illustrator</option>
            <option value="crayon">Crayons</option>
            <option value="bombe">Bombes</option>
            <option value="bd">Bandes dessinés</option>
            <option value="flyer">Flyers</option>
        </select>
    </section>

    <section class="main-container-art" id="projects-container">
        <!-- Project cards will be added here by JavaScript -->
    </section>
</main>

<?php
include "./components/footer.php";
?>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const filterButtons = document.querySelectorAll('.filter-btn');
        const filterSelect = document.getElementById('filter-select');
        const container = document.getElementById('projects-container');
        let projectsData = [];

        fetch('../assets/db/database-art.json')
            .then(response => response.json())
            .then(data => {
                projectsData = data; // Store data for filtering
                displayProjects(projectsData); // Show projects on initial load
            })
            .catch(error => console.error('Error fetching the projects:', error));

        // Event listener for filter with buttons
        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                const selectedType = button.getAttribute('data-filter');
                filterProjects(selectedType);
            });
        });

        // Event listener for filter with select in mobile
        filterSelect.addEventListener('change', () => {
            const selectedType = filterSelect.value;
            filterProjects(selectedType);
        });

        // Function to filter projects
        function filterProjects(selectedType) {
            const filteredProjects = selectedType === 'all'
                ? projectsData
                : projectsData.filter(project => project.type === selectedType || project.plateforme === selectedType);
            displayProjects(filteredProjects);
        }

        // Function to display projects
        function displayProjects(projects) {
            container.innerHTML = ''; // Empty the container before adding the filtered projects
            projects.forEach(project => {
                const card = document.createElement('div');
                card.innerHTML = `
                <div class="card-container">
                    <img class="img-art" src="${project.path}" alt="Art Image">
                    <p class="card-description">${project.description}</p>
                </div>              
            `;
                container.appendChild(card);
            });
        }
    });
</script>