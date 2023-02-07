<?php
    include "header.php";?>
    
        <main id="main">
            <div id="txtp"> <p>Texte pour le panier</p> </div>
            <table border="1px solid grey">
                <tr>
                    <td>Référence</td>
                    <td>Titre</td>
                    <td>Prix</td>
                    <td>Qtité</td>
                </tr>
                <tr>
                    <td>UTFS0089</td>
                    <td>Diamond pencil</td>
                    <td> 999'999.99€</td>
                    <td>1</td>
                </tr>
            </table>
            <br><br>
            <div id="total"><p>Total HT: <div id="ttpx">   888'888.88€</div></p></div>
            <div id="total"><p>Total TTC: <div id="ttpx">   999'999.99€</div></p></div>
            <button id="btnPay" name="btnPay"><a id="btnPay" href="paiement.php">PAYER</a></button>
        </main>



        <?php require('footer.php'); ?>