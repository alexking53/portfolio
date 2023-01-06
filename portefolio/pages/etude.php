<?php
    include "header.php";
?>


<div id="body">
    <div id="case">
        <p>
            <h2>Stages:</h2> <br/>
            <ul>
                <li> <a href="">Xefi: 23 mai au 28 juin</a> <br/></li>
                <li><a href="">Stage 2:</a> <br/></li>
                <li><a href="">Stage 3:</a> <br/></li>
            </ul>
        </p>

        <?php
            $page=array(
                'Xefi: 23 mai au 28 juin' => 'projets/luxuton.php'
            );
            switch($page){
                case 'Xefi: 23 mai au 28 juin':
                    include('projets/luxuton.php');
                    break;
            }
        ?>
    </div>
</div>