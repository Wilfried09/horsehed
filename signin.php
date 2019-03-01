<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Horseshed - Inscription</title>
</head>
<body>
    <form action="data-processing.php" method="post">
        Pseudonyme : <input type="text" name="identifiant"/><br>
        Civilité (sexe) :
        <input type="radio" name="gender" value="H" checked="checked"/>H
        <input type="radio" name="gender" value="F"/>F
        <input type="radio" name="gender" value="O"/>O<br>
        E-mail : <input type="text" name="email"/><br>
        Mot de passe : <input type="password" name="password"/><br>
        Téléphone : <input type="text" name="telephone"/><br>
        Pays :
        <select name="pays">
            <option>France</option>
            <option>Allemagne</option>
            <option>Espagne</option>
        </select>
        <br>
        <input type="submit" name="action" value="Inscription"/><br>
    </form>
</body>
</html>