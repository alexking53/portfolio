<?php
    include "header.php";
?>
<div id="body">
    <p>
        <h2>Luxuton</h2> <br/>
        <h4>Luxuton est une entreprise fictive qui revisite des objets du quotidien en objet de luxes.</h4>
    </p>  <br/>
    <p>
        Le but était de créer un template de site vitrine d'une entreprise fictive que l'on devait créer par groupe. <br/>
        Mon groupe a choisit de créer une entreprise qui vend des objets du quotidiens transformés en objets de luxe, en plus des objets 
        luxueux classiques tels que montre, bijoux,...
    </p> 
    	
    <script type="text/javascript" src="../../asset/scripts/infobulle.js"> </script>
        <p>
        <br/>Cliquez ici pour voir le 
        <a href="#" onMouseOver="infobulle(this, '<center><img src=\'../../asset/image/Luxuton/header.PNG\' /></center>');"> header </a> 
        et le <a href="#" onMouseOver="infobulle(this, '<center><img src=\'../../asset/image/Luxuton/footer.PNG\' /></center>');">footer</a>. 
        <br/>Cliquez ici pour voir la page <a href="#" onMouseOver="infobulle(this, '<center><img src=\'../../asset/image/Luxuton/accueil.PNG\' /></center>');"> accueil </a> . Cette page contenait les 
                redirections vers les <a href="#" onMouseOver="infobulle(this, '<center><img src=\'../../asset/image/Luxuton/categorie.PNG\' /></center>');">catégories</a>, 
                un formulaire de <a href="#" onMouseOver="infobulle(this, '<center><img src=\'../../asset/image/Luxuton/contact.PNG\' /></center>');">contact</a>.
        <br/>Cliquez ici pour voir la page <a href="#" onMouseOver="infobulle(this, '<center><img src=\'../../asset/image/Luxuton/panier.PNG\' /></center>');"> panier </a> .
        <br/>Sur la partie footer, on trouve 2 parties: une partie à propos, avec les différents développeurs et où nous trouver, et la deuxième partie, qui est les différents modes de paiement possible. 
    </p>
    
        


    

<br/>
    <button>
        <?php
            echo "<a href='javascript:history.go(-1)'>Retour</a>";
        ?>
    </button>
</div>

