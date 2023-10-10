<!DOCTYPE html>
<html>
<head>
    <title>Validation du Mot de passe</title>
</head>
<body>
    <h1>Validation  Mot de passe</h1>
    <form method="POST" action="result.php">
        <label for="mot_de_passe">Mot de passe :</label>
        <input type="password" id="mot_de_passe" name="mot_de_passe" required>
        <!-- Required pour exiger qu'une valeur soit entrée; mieux que le empty-password -->
        <br><br>
        <input type="submit" value="Valider">
    </form>
</body>
</html>