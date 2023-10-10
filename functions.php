
<?php
// Creation d'une fonction pour valider un mot de passe
function passwordVerify($password) {
    // Test de longueur
    $length = strlen($password);
    $responses = [
        'isValid' => true,
        'msg' => ''
    ];
    if ($length < 6) {
        $responses = [
            'isValid' => false,
            'msg' => 'Mot de passe trop court'
        ];
    } elseif ($length > 10) {
        $responses = [
            'isValid' => false,
            'msg' => 'Mot de passe trop long'
        ];
    }

    return $responses;
}

// Fonction pour ajouter un sel au mot de passe
function addSalt($password) {
    $salt = '123-S0leil';
    return $password . $salt;
}

// Fonction pour chiffrer le mot de passe
function encryptPassword($password) {
    return password_hash($password, PASSWORD_BCRYPT);
}
?>