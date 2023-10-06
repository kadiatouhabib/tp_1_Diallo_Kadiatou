<?php
require_once ("functions.php");
var_dump($_POST);
if ($_POST) {
    $pwd = $_POST ['fname'];
    if (empty($pwd)) {
        echo "</br> Veuillez saisir un mot de passe";
    }
    else {
        echo "</br> Votre mot de passe est : " . $pwd;
    }


    echo '</br>';
    $saltedPassword = addSalt($_POST['fname']);
// $saltedPassword = addSalt($_POST['fname']);
var_dump($saltedPassword);

}
?>