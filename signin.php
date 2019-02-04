<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Horseshed - Inscription</title>
</head>
<body>
<form action="data-processing.php" method="post">
    Identifiant : <input type="text" name="identifiant"/><br>
    Mot de passe : <input type="password" name="password"/><br>
    Vérification de mot de passe : <input type="password"/><br>
    Téléphone : <input type="text" name="telephone"/><br>
    Pays :
    <select name="pays">
        <option>France</option>
        <option>Allemagne</option>
        <option>Espagne</option>
    </select>
    <br>
    Conditions générales : <input type="checkbox"/><br>
    <input type="submit" name="action" value="rec"/><br>
</form>
</body>
</html>