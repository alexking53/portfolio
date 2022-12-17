<!DOCTYPE html>
<html>
<head>
    <title>Mon portefolio</title>
    <meta name="description" content="Mon portefolio avec PHP et JavaScript">
    <link rel="stylesheet" href="pages/style/style.css">
</head>
<body>
    <h1>Mon portefolio</h1>
    <p>Bienvenue sur mon portefolio.</p>
    <nav>
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Etudes</a></li>
                <li><a href="#">Professionel</a></li>
                <li><a href="#">À propos</a></li>
            </ul>
        </nav>
    
    <?php
        // Code PHP pour afficher la date et l'heure actuelles
        echo "Date et heure actuelles : " . date("Y-m-d H:i:s");
    ?>
    
    <script>
        // Code JavaScript pour afficher un message d'alerte
        alert("Bienvenue sur mon portefolio!");
    </script>
</body>
</html>
