<?php
    // Fichier qui vérifie la présence d'un filtre éventuel sur les taxons lors de la saisie (propre à chaque instance d'application)
    require_once '../../Configuration/ConfigUtilisee.php';
    if (!@include('../../' . $configInstance . '/Filtres/fTaxRef.php')) {
        die('{success: true, data: "Taxon OK"}');
    }
?>