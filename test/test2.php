<!DOCTYPE html>
<html>
<head>
  <title>Portefolio</title>
</head>
<body>
  <h1>Bienvenue sur mon portefolio</h1>
  <h2>Mes projets :</h2>
  <ul id="projects">
    <!-- les projets seront ajoutés ici -->
  </ul>
  <script>
    // Récupère la liste des projets
    const projectsList = document.getElementById("projects");

    // Définit un tableau de projets
    const projects = [
      {
        name: "Projet 1",
        description: "Description du projet 1"
      },
      {
        name: "Projet 2",
        description: "Description du projet 2"
      },
      {
        name: "Projet 3",
        description: "Description du projet 3"
      }
    ];

    // Parcourt les projets et génère du HTML pour chaque projet
    for (const project of projects) {
      const projectElement = document.createElement("li");
      projectElement.innerHTML = `<h3>${project.name}</h3><p>${project.description}</p>`;
      projectsList.appendChild(projectElement);
    }
  </script>
</body>
</html>
