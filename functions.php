
<?php
// Creation d'une fonction pour valider un mot de passe
function passwordVerify ($password) {
    // Test de longueur
    $length = strlen($password);
    $responses = [ 'isValid' => true,
        'msg' => ''
        ];
    if ($length < 6) {
        $responses = [ 'isValid' => false,
        'msg' => 'Mot de passe trop court'
        ];
    }
    elseif ($length > 10) {
        $responses = [ 'isValid' => false,
        'msg' => 'Mot de passe trop long'
        ];       
    }
    
    return $responses;


//Chiffrement du mdp
//Nous utiliserons la fonction de  predefinie bcrypt

    $encryptedPassword = password_hash($saltedPassword, PASSWORD_BCRYPT);

//Verification du mdp saisi par l'utilisateur

    $passwdEntered = "Banane";

        if (password_verify($passwdEntered . $salt, $encryptedPassword)) {
            return "Mot de passe correct : " . $salt . " | " . $encryptedPassword;
        }
        else {
            return "Mot de passe incorrect.";
        }

}


// Fonction pour ajouter uun salt

function addSalt($nameToSalt){
    $salt = '123-S@le!l';
    $saltedPassword = $salt.$nameToSalt.$salt; //Concantenation 
    return $saltedPassword;
}


?>





