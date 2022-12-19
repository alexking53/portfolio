
    <?php
        require('header.php');

        $page=array(
            'Accueil' => 'index.php',
            'Etudes' => 'pages/etude.php',
            'Professionel' => 'pages/professionel.php',
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
                case 'Professionel':
                    include ('pages/professionel.php');
                    break;
                case 'Projets personnels':
                    include ('pages/perso.php');
                    break;
                case 'À propos':
                    include('pages/apropos.php');
                    break;
             }
            }
    ?> 
</body>
</html>