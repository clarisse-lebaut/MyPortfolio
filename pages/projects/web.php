<title>Mes Projets Web</title>
<link rel="stylesheet" href="../assets/styles/global.css">
<link rel="stylesheet" href="../assets/styles/projects.css">


<?php include "./components/header.php"; ?>

<main>
    <h1 class="title-page-projects">MES PROJETS : WEB</h1>
    <section class="main-container-web" id="projects-container">
        <!-- Les cartes de projet seront ajoutées ici par JavaScript -->
    </section>
</main>

<?php include "./components/footer.php"; ?>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        fetch('../assets/db/database-web.json')
            .then(response => response.json())
            .then(data => {
                const container = document.getElementById('projects-container');
                data.forEach(project => {
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
            })
            .catch(error => console.error('Error fetching the projects:', error));
    });
</script>

</body>
</html>
