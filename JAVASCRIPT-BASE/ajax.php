<?php
if( isset($_POST) && (count($_POST)!=0)){
    echo '<p>Résultat de la méthode POST</p>';
    foreach($_POST as $key=>$value){        
        echo '<p>'.substr($key,2).' : '.$value.'</p>';
    }
}else if( isset($_GET) && (count($_GET)!=0)){
    echo '<p>Résultat de la méthode GET</p>';
    foreach($_GET as $key=>$value){        
        echo '<p>'.substr($key,2).' : '.$value.'</p>';
    }
} else {
    echo '<p>C\'est un bon début!</p>';
}