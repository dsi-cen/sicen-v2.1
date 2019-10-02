<?php
    //Paramètres fixes de connexion à la base PostGreSQL 
    define('HOST', '127.0.0.1'); 
    define('PORT', '5432'); 
    define('DBNAME', 'sicen'); 
    define('USER', DBNAME . '_cnx'); 
    define('PASSWORD', DBNAME . '_cnx'); 
    define('BASENAME', DBNAME); //Préfixe des rôles de la base 
   
    // Activation du cryptage RSA (désactivé pour le site de démo) 
    define('CRYPTAGE', false); // nom unique idem que dans "Appli.js" 

    // Image de fond d'accueil 
    //$fond = '../Configuration/Exemples/PNX/SpiralePnX.jpg'; 
    define('FOND', getimagesize($fond) ? 'url(' . $fond . ')' : 'none'); 
?>
