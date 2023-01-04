<?php
    include "header.php";?>

<table>
    <?php
        

$array= array( "<div id='case'>
                        <div id='caseh'> <a href='projets/luxuton.php'> Luxuton </a> </div>
                        <div id='caseb'> Luxuton est une entreprise fictive qui revisite des objets du quotidien en objet de luxes. </div>
                        </div>", "<div id='case'>
                        <div id='caseh'> N/A </div>
                        <div id='caseb'> N/A </div>
                        </div>", "<div id='case'>
                        <div id='caseh'> N/A </div>
                        <div id='caseb'> N/A </div>
                        </div>");
            $j=count($array);
            for($i=0;$i<$j; $i++){
                if($i%2==0){
                    echo("<tr> <td id='cote1'>".$array[$i]."</td><td id='milieu'></td><td id='cote2'></td></tr>");
                }
                else{
                    echo("<tr> <td id='cote1'></td><td id='milieu'></td><td id='cote2'>".$array[$i]."</td></tr>");
                
                }
            }

        ?>
    </td>
</table>
