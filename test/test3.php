<!DOCTYPE html>
<html>
<head>
  <title>Création de personnage</title>
</head>
<body>
  <h1>Création de personnage</h1>
  <form id="characterForm">
    <label for="name">Nom du personnage :</label><br>
    <input type="text" id="name"><br>
    <label for="image">Image du personnage :</label><br>
    <input type="file" id="image"><br><br>
    <button type="submit">Créer</button>
  </form>
  <script>
    // Récupère le formulaire
    const characterForm = document.getElementById("characterForm");

    // Ajoute un événement "submit" au formulaire
    characterForm.addEventListener("submit", (event) => {
      event.preventDefault(); // empêche le rechargement de la page

      // Récupère les données du formulaire
      const name = document.getElementById("name").value;
      const image = document.getElementById("image").files[0];

      // Vérifie si un fichier image a été sélectionné
      if (!image) {
        alert("Veuillez sélectionner une image pour votre personnage.");
        return;
      }

      // Traitement des données du formulaire (par exemple, envoi d'une requête HTTP pour enregistrer le personnage)
      // ...
    });
  </script>
</body>
</html>
