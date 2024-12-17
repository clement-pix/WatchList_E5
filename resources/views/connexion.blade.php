<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <h1>Connexion</h1>
    <form method="POST" action="{{ route('connexion') }}">
        <div>
            <label for="pseudo">Pseudo</label>
            <input type="pseudo" name="pseudo" id="pseudo" required>
        </div>
        <div>
            <label for="mot_de_passe">Mot de Passe</label>
            <input type="password" name="mot_de_passe" id="mot_de_passe" required>
        </div>
        <button type="submit">Se connecter</button>
    </form>
</body>
</html>
