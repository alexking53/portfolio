// Définition de l'URL de la page à afficher
const url = "https://www.example.com";

// Sélection de l'encadré sur lequel on veut ajouter l'événement de clic
const box = document.querySelector(".box");

// Ajout de l'événement de clic sur l'encadré
box.addEventListener("click", () => {
  // Ouverture de la page dans un nouvel onglet du navigateur
  window.open(url);
});
