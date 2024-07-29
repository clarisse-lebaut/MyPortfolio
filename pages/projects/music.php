<link rel="stylesheet" href="../assets/styles/global.css">
<link rel="stylesheet" href="../assets/styles/music.css">

<?php 
include "./components/header.php"; 
?>

<main>
    <h1 class="title-page-projects">MUSICAUX</h1>
    
    <?php
    include "./components/nav-projects.php";
    ?>

    <section class="filter">
        <button class="filter-btn" data-filter="all">Tous</button>
        <button class="filter-btn" data-filter="Instrumental">Instrumental</button>
        <button class="filter-btn" data-filter="Paroles">Paroles</button>
        <button class="filter-btn" data-filter="Suno">Suno</button>
        <button class="filter-btn" data-filter="Partition">Musescore</button>
        <button class="filter-btn" data-filter="Garageband">Garageband</button>
         <button class="filter-btn" data-filter="Graphique">Graphique</button>
    </section>

    <section class="main-container-music" id="projects-container">
        <!-- Les cartes de projet seront ajoutées ici par JavaScript -->
    </section>
</main>

<?php include "./components/footer.php"; ?>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const container = document.getElementById('projects-container');
    let projectsData = [];

    fetch('../assets/db/database-music.json')
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

            if (project.format === 'Audio' && project.audio) {
                card.innerHTML = `
                    <div class="card-container-music">
                        <p>${project.title ? project.title : ''}</p>
                        <audio controls>
                            <source src="${project.audio}" type="audio/mpeg">
                            Votre navigateur ne supporte pas l'élément audio.
                        </audio>
                    </div>
                `;
            } else if (project.format === 'Image' && (project.img1 || project.img2 || project.img3 || project.img4)) {
                let imagesHtml = '';
                [project.img1, project.img2, project.img3, project.img4].forEach(img => {
                    if (img) {
                        imagesHtml += `<img class="img-music" src="${img}" alt="${project.title ? project.title : ''}">`;
                    }
                });

                card.innerHTML = `
                    <div class="card-container-image">
                        <p>${project.title ? project.title : ''}</p>
                        <div class="container-img">
                            ${imagesHtml}
                        </div>
                        ${project.audio ? `
                        <audio controls>
                            <source src="${project.audio}" type="audio/mpeg">
                            Votre navigateur ne supporte pas l'élément audio.
                        </audio>
                        ` : ''}
                        <p>${project.description ? project.description : ''}</p>
                    </div>
                `;
            }

            if (card.innerHTML.trim()) { // Ajouter la carte uniquement si elle contient du contenu
                container.appendChild(card);
            }
        });

        // Sélectionner les éléments audio après affichage des projets
        const audios = document.querySelectorAll('audio');
        audios.forEach(audio => {
            audio.addEventListener('play', () => {
                audios.forEach(otherAudio => {
                    if (otherAudio !== audio) {
                        otherAudio.pause();
                        otherAudio.currentTime = 0; // Optionnel : remet l'audio à zéro
                    }
                });
            });
        });
    }
});


</script>
