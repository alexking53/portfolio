<?php
    include "header.php";?>
    
        <main id="main">
            <p>{Picto} Payement sécurisé</p>
            <p>Texte</p>
            <p id="paiement">Type de paiement: <img src="asset/images/cb_visa_mastercard_paypal.png"><img src="asset/images/bitcoin.png"></p>
            <p id="paiement"> Montant à payer: 999'999.99€</p>
            <div id="carte">
                <p>Titulaire de la carte: <input type="checkbox" name="mr"> <label for="mr"> M. </label> <input type="checkbox" name="Mme"><label for="Mme">Mme</label>
                <input type="text" name="nom" required minlength="1" size="64">  </p>
                <p >N° : <input type="text" required minlength="4" size="4" > <input type="text" required minlength="4" size="4" >
                <input type="text" required minlength="4" size="4" > <input type="text" required minlength="4" size="4" >   </p>
                <p> Date d'expiration: <input type="month" min="11-22" max="12-30"></p>
                <p>Cryptogramme : <input type="number" size="3" min="3"> </p>
            </div>
            <p id="btnPay">
                <input type="submit" value="PAYER">
            </p>
        </main>
        <?php require('footer.php'); ?>

