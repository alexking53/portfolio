<html>
  <head>
    <title>Page de test</title>
  </head>
  <body>
    <!-- Encadré qui sera cliquable -->
    <div id="box">Cliquez sur l'encadré pour afficher la page</div>

    <!-- Fenêtre modale qui contiendra la page à afficher -->
    <div id="modal" style="display: none;">
      <iframe id="iframe" src=""></iframe>
      <button id="closeButton">Fermer</button>
    </div>

    <script>
      // Récupération de l'encadré et de la fenêtre modale
      const box = document.getElementById("box");
      const modal = document.getElementById("modal");
      const iframe = document.getElementById("iframe");
      const closeButton = document.getElementById("closeButton");

      // Ajout d'un écouteur d'événement "click" sur l'encadré
      box.addEventListener("click", function() {
        // Affichage de la fenêtre modale
        modal.style.display = "block";
        // Chargement de la page dans l'iframe
        iframe.src = "https://www.example.com";
      });

      // Ajout d'un écouteur d'événement "click" sur le bouton de fermeture
      closeButton.addEventListener("click", function() {
        // Masquage de la fenêtre modale
        modal.style.display = "none";
        // Vidage de la source de l'iframe
        iframe.src = "";
      });
    </script>
  </body>
</html>
