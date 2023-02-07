<?php
if(isset($_GET['variable'])) echo $_GET['variable'];
if(isset($_POST) && count($_POST)!=0) {
    foreach($_POST as $k=>$v){
        echo '<p>'.$v.'</p>';
    }
}
?>