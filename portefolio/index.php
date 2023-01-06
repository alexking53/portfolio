<?php
    include "header.php";?>

    <?php
        $page=array(
            'Accueil' => 'index.php',
            'Etudes' => 'pages/etude.php',
            'Projets professionels' => 'pages/projet.php',
            'Projets personnels' => 'pages/perso.php',
            'À propos' => 'pages/apropos.php',
        );

        if(!isset($_GET['page'])){
            $page='index.php';
        }
        else{
            switch($page){
                case 'Accueil':
                    include ('index.php');
                    break;
                case 'Etudes':
                    include ('pages/etude.php');
                    break;
                case 'Projets professionels':
                    include ('pages/projet.php');
                    break;
                case 'Projets personnels':
                    include ('pages/perso.php');
                    break;
             }
            }
    ?> 
    <div id="body">
        <div id="case">
            <p>
                <h2> Contact </h2> 
                <img src="asset/image/jpg/gmail.jpg"> <a href="mailto:leo.trentesaux53@gmail.com"> leo.trentesaux53@gmail.com </a>
                <br/> <img src="asset/image/png/linkedin.png">  <a href="https://www.linkedin.com/in/l%C3%A9o-trentesaux-94a733229/">Léo Trentesaux </a>
                <br/> <img src="asset/image/png/phone.png"> <a href="tel:06.76.04.07.22">06.76.04.07.22 </a>
                
                
            </p>
        </div>

        <div id="case">
            <h2>Mon CV</h2> <br/>
            Cliquez <a href="asset/docs/cvTrentesaux.pdf">ici</a> pour le télécharger
        </div>
    </div>

</body>
</html>