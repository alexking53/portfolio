<?php
    include "header.php";?>

<main id="main">
    <div id="milieu">
        <div id="demi" style="border:1px solid blue ;">
            <p><img src="asset/images/nouveautés.jpg"></p>
        </div>
        <div id="demi"style="border:1px solid blue ;">
            <p id="categorie">Catégories</p>
            <p><a href="catalogue/categ1.php"><img src="asset/images/categ1.jpg"></a> Catégorie 1</p>
            <p><a href="catalogue/categ2.php"><img src="asset/images/categ2.png"></a> Catégorie 2</p>
        </div>
    </div>
    <div id="contact" style="border:1px solid brown ;">
        <p>Contact</p>
        <p><input type="text" id="nom" value="nom"> <input type="text" id="prenom" value="prénom"> </p>
        <p><input type="email" id="mail" value="adresse mail"></p>
        <p><textarea id="mess" value="Message" rows="8" cols="45"></textarea></p>
    </div>

</main>

<?php
    include "footer.php";?>