<?php
require_once("functions.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pwd = $_POST["mot_de_passe"];

    // Valider le mot de passe
    $verificationResponse = passwordVerify($pwd);
    if ($verificationResponse['isValid']) {
        // Ajouter le salt au mot de passe
        $saltedPassword = addSalt($pwd);
        // Chiffrer le mot de passe
        $pwdChiffre = encryptPassword($saltedPassword);
        echo "<h1> MOT DE PASSE </h1>";
        echo "<br>";
        echo "Sel: 123-S0leil<br>";
        echo "Mot de passe salé : $saltedPassword<br>";
        // ajouté qprès date
        echo "Mot de passe chiffré: $pwdChiffre<br>"; 
        echo "Mot de passe correct.";
        echo "<br>";
        echo '<br><button onclick="window.location.href=\'index.php\'">Créer un nouveau mot de passe</button>'; // Ajouter un bouton pour créer un nouveau mot de passe
    } else {
        echo "Erreur : " . $verificationResponse['msg'];
        echo '<br><button onclick="window.location.href=\'index.php\'">Réessayer</button>';
    }
}
?>