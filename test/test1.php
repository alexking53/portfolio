<!DOCTYPE html>
<html>
<head>
  <title>Accueil</title>
</head>
<body>
  <h1>Bienvenue sur mon site</h1>
  <p>Cliquez sur le bouton ci-dessous pour changer la couleur de fond de la page :</p>
  <button id="bgColorButton">Changer la couleur de fond</button>
  <script>
    // Récupère le bouton
    const bgColorButton = document.getElementById("bgColorButton");

    // Ajoute un événement "click" au bouton
    bgColorButton.addEventListener("click", () => {
      // Génère une couleur aléatoire en hexadécimal
      const randomColor = "#" + Math.floor(Math.random()*16777215).toString(16);

      // Change la couleur de fond de la page
      document.body.style.backgroundColor = randomColor;
    });
  </script>
</body>
</html>
