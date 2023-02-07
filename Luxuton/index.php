<!DOCTYPE html>
<html>

<?php
    require('header.php');
 

            $pages = array(
                'accueil' => 'accueil.php',
                'panier' => 'panier.php',
                'catégorie' => 'accueil.php#categorie',
                'contact' => 'accueil.php#contact',
                'a propos' => 'accueil.php#apropos',
                'CGV' => 'cgv.php',
            );

            if(!isset($_GET['page'])){
                $page='index.php';
            }
            else{
                switch($page){
                    case 'accueil':
                        include ('accueil.php');
                        break;
                    case 'panier':
                        include ('panier.php');
                        break;
                    case 'catégorie':
                        include('accueil.php#categorie');
                        break;
                    case 'contact':
                        include('accueil.php#contact');
                        break;
                    case 'a propos':
                        include('accueil.php#apropos');
                        break;
                    case 'CGV':
                        include('cgv.php');
                        break;
                }
            }
                


        ?>



        <?php require('footer.php'); ?>