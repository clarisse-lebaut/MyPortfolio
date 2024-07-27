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
                        <a href="${project.link}"><img class="card-pic" src="${project.image}" alt="${project.title}"></a>
                        <p class="card-text">${project.title}</p>
                        <p class="card-description">${project.description}</p>
                    `;
                    container.appendChild(card);
                });
            })
            .catch(error => console.error('Error fetching the projects:', error));
    });
</script>

</body>
</html>
