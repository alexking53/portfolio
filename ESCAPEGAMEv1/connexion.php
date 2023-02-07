<?php
/*$host= "localhost" ;
$bdd= "escapegame" ;
$login= "root" ;
$mdp= "" ;*/
//La connexion à la base de données
try {
    /*$pdo=new PDO("mysql:host=$host;dbname=$bdd","$login","$mdp");*/
    $pdo = new PDO("mysql:host=localhost;dbname=escapegame", "root", "");
    $pdo->exec('SET NAMES utf8');
} catch (PDOException $e) {
    echo "zut";
    die();
}

if (isset($_GET['selection'])) {
    switch ($_GET['selection']) {
        case 1: {
                $req = $pdo->prepare("SELECT lib_enigme, rep_enigme FROM enigme where num_enigme=1;");
                $req->execute();
                $result = $req->fetchAll();
                if ($result[0]['rep_enigme'] == $_GET['mdp'])
                    echo 1;
                else echo 0;
                break;
            }

        case 2:
        case 3: {
                $req = $pdo->prepare("SELECT lib_enigme, rep_enigme FROM enigme where num_enigme=2 or num_enigme=3;");
                $req->execute();
                $result = $req->fetchAll();
                if ($result[0]['rep_enigme'] == $_GET['login'] && $result[1]['rep_enigme'] == $_GET['mdp'])
                    echo 1;
                else echo 0;

                //var_dump($result);
                break;
            }
    }
}
