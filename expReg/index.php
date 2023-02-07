<img src="https://c0.lestechnophiles.com/www.numerama.com/wp-content/uploads/2018/12/petite_mort-2-270x336.png?resize=270,336&key=7e098be6">

<form action="" method="post" enctype="multipart/form-data">
    <p> Nom: <input type="text" name="nom" placeholder="Votre nom"> </p>
    <p> Prénom: <input type="text" name="prenom" placeholder="Votre prénom"> </p>
    <p> Mail: <input type="text" name="mail" placeholder="Votre mail"> </p>
    <p> Num. de téléphone: <input type="text" name="telephone" placeholder="Votre numéro de téléphone"> </p>
    <input type="hidden" name="MAX_FILE_SIZE" value="20000000000000">
    <label>Votre fichier</label> :
    <input type="file" name="mon_fichier"><br>
    <p> <input type="submit" name="envoie" value="Envoyer"> </p>
</form>


<?php

        
        echo "Hello ".$_POST['prenom']." ".$_POST['nom']."<br/>";

        //var_dump($_FILES['mon_fichier']);

        if ($_FILES['mon_fichier']['error']) {
            switch ($_FILES['mon_fichier']['error']){
                case 1: // UPLOAD_ERR_INI_SIZE
                    echo "Le fichier dépasse la limite autorisée par le serveur (fichier php.ini) !";
                    break;
                case 2: // UPLOAD_ERR_FORM_SIZE
                    echo "Le fichier dépasse la limite autorisée dans le formulaire HTML !";
                    break;
                case 3: // UPLOAD_ERR_PARTIAL
                    echo "L'envoi du fichier a été interrompu pendant le transfert !";
                    break;
                case 4: // UPLOAD_ERR_NO_FILE
                    echo "Le fichier que vous avez envoyé a une taille nulle !";
                    break;
            }
        }else{
            // $_FILES['mon_fichier']['error'] vaut 0 soit UPLOAD_ERR_OK
            // ce qui signifie qu'il n'y a eu aucune erreur

            echo "GG mec/meuf, t'as réussi à ne pas avoir d'erreurs !";
        }
        ?>
        <br/> <br/>

        <?php
    if (isset($_POST["envoie"])) {
        $image = file_get_contents($_FILES["mon_fichier"]["tmp_name"]);
        if (preg_match('/<\?php/', $image)) {
            echo "balise php détectée <br/>Tu te crois drôle à essayer de me hacker? Voici une compilation de réactions face à ta tentative: <br/> <img src='https://pbs.twimg.com/media/EXwA63xVcAEKO3f.jpg'> <br/> <br/> <img src='https://i.kym-cdn.com/photos/images/original/001/644/005/ba1.png'> <br/> <br/> <img src='https://media.tenor.com/OJqR4wkwp2IAAAAC/unamused-michael-scott.gif'><br/><br/> <img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHnkNmaAIApNghnoraoj8pvB4aqNvZ8L3Mow&usqp=CAU'><br/><br/> <img src='https://media.tenor.com/ELLI7dccIPoAAAAM/not-amused.gif'> <br/> ça fait rire <h2>PERSONNE</h2>";
        } else {
            echo "pas de balise php <br/><br/>";
            if ($_FILES['mon_fichier']['type']) {

                $filename = $_FILES['mon_fichier']['tmp_name'];
    
                //var_dump('$filename');
                //var_dump('$destination');
    
                switch ($_FILES['mon_fichier']['type']){
                    case 'image/png': 
                        echo "Image png envoyée avec succès !";
                        break;
                    case 'image/jpg': 
                        echo "Image jpg envoyée avec succès !";
                        break;
                    case 'image/jpeg': 
                        echo "Image jpeg envoyée avec succès !";
                        break;
                    case 'image/gif': 
                        echo "Image gif envoyée avec succès !";
                        break;
                    default:
                        echo "C'est pas une image ça mec/meuf ! 😡";
                }
            }else{
                // $_FILES['mon_fichier']['type'] vaut 0 soit UPLOAD_ERR_OK
                // ce qui signifie qu'il n'y a eu aucune erreur
    
                echo "GG mec/meuf, t'as réussi à ne pas avoir d'erreurs !";
            }
        }
    }
?>


