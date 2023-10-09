<?php
require_once ("functions.php");
var_dump($_POST);
if ($_POST) {
    $pwd = $_POST ['fname'];
    $verificationResponse = passwordVerify($pwd);
    
    if (empty($pwd)) {
        echo "</br> Veuillez saisir un mot de passe";
        
    }
    else {
        // Valider le mot de passe
        $validationResponse = passwordVerify($pwd);
        if ($validationResponse['isValid']) {
            $saltedPassword = addSalt($pwd);
            echo "</br> Votre mot de passe est : " . $saltedPassword;
        } else {
            echo "</br> Erreur : " . $validationResponse['msg'];
        }
    }


    echo '</br>';
    $saltedPassword = addSalt($_POST['fname']);
// $saltedPassword = addSalt($_POST['fname']);
var_dump($saltedPassword);

}
?>