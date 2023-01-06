<?php
    include "header.php";?>

<table cellspacing="0" cellpadding="0">
    <?php
        

$array= array( "<div id='case'>
                        <div id='caseh'>  N/A </div>
                        <div id='caseb'> N/A </div>
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
